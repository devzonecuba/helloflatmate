(function($){
"use strict";

    if ( typeof HOMEY_map_vars !== "undefined" ) {
        
        var homeyMap;
        var userID = HOMEY_map_vars.user_id;
        var total_results = $('#listings_found');
        var ajaxurl = HOMEY_map_vars.admin_url+ 'admin-ajax.php';
        var header_map_cities = HOMEY_map_vars.header_map_city;
        var markerPricePins = HOMEY_map_vars.markerPricePins;
        var pin_cluster = HOMEY_map_vars.pin_cluster;
        var pin_cluster_icon = HOMEY_map_vars.pin_cluster_icon;
        var pin_cluster_zoom = HOMEY_map_vars.pin_cluster_zoom;
        var is_singular_listing = HOMEY_map_vars.is_singular_listing;
        var markerCluster = null;
        var current_marker = 0;
        var homey_map_first_load = 0;
        var markers = new Array();
        var halfmap_ajax_container = $('#homey_halfmap_listings_container');
        var InfoWindow = new google.maps.InfoWindow();
        var google_map_style = HOMEY_map_vars.google_map_style;
        var arrive = HOMEY_map_vars.arrive;
        var depart = HOMEY_map_vars.depart;
        var guests = HOMEY_map_vars.guests;
        var pets = HOMEY_map_vars.pets;
        var search_country = HOMEY_map_vars.search_country;
        var search_city = HOMEY_map_vars.search_city;
        var search_area = HOMEY_map_vars.search_area;
        var listing_type = HOMEY_map_vars.listing_type;
        var state = HOMEY_map_vars.state;
        var city = HOMEY_map_vars.city;
        var area = HOMEY_map_vars.area;
        var min_price = HOMEY_map_vars.min_price;
        var max_price = HOMEY_map_vars.max_price;
        var bedrooms = HOMEY_map_vars.bedrooms;
        var rooms = HOMEY_map_vars.rooms;
        var room_size = HOMEY_map_vars.room_size;
        var area = HOMEY_map_vars.area;
        var amenity = HOMEY_map_vars.amenity;
        var facility = HOMEY_map_vars.facility;
        var not_found = HOMEY_map_vars.not_found;
        var infoboxClose = HOMEY_map_vars.infoboxClose;
        var bedrooms_icon = HOMEY_map_vars.bedrooms_icon;
        var bathroom_icon = HOMEY_map_vars.bathroom_icon;
        var guests_icon = HOMEY_map_vars.guests_icon;
        var securityhomeyMap = $('#securityhomeyMap').val();
        var paged = 0;

        var compare_url = HOMEY_ajax_vars.compare_url;
        var add_compare = HOMEY_ajax_vars.add_compare;
        var remove_compare = HOMEY_ajax_vars.remove_compare;
        var compare_limit = HOMEY_ajax_vars.compare_limit;

        var homey_is_mobile = false;
        if (/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent)) {
            homey_is_mobile = true;
        }

        if(google_map_style!='') {
            var google_map_style = JSON.parse ( google_map_style );
        }

        if( markerPricePins == 'yes' ) {
            var infobox_top = -30; 
        } else {
            var infobox_top = -70; 
        }

        // Info box
        var infobox = new InfoBox({
            maxWidth: 300,
            alignBottom: true,
            disableAutoPan: false,
            pixelOffset: new google.maps.Size(-160, infobox_top),
            zIndex: null,
            boxClass: 'homeyInfobox',
            closeBoxMargin: "13px 2px -14px 2px",
            closeBoxURL: infoboxClose,
            infoBoxClearance: new google.maps.Size(20, 20),
            pane: "floatPane",
            enableEventPropagation: false,
        });

        // Remore Map Loader
        var remove_map_loader = function() {
            google.maps.event.addListener(homeyMap, 'tilesloaded', function() {
                jQuery('#homey-map-loading').hide();
            });
        }

        var homey_infobox_trigger = function() {
            $('.infobox_trigger').each(function(i) {
                $(this).on('mouseenter', function() {
                    google.maps.event.trigger(markers[i], 'click');
                });
                $(this).on('mouseleave', function() {
                    infobox.open(null,null);
                    
                });
            });
            return false;
        }

        /*--------------------------------------------------------------------------
         *   Compare for ajax
         * -------------------------------------------------------------------------*/
        var compare_for_ajax_map = function() {
            var listings_compare = homeyGetCookie('homey_compare_listings');
            var limit_item_compare = 4;
            add_to_compare(compare_url, add_compare, remove_compare, compare_limit, listings_compare, limit_item_compare );
            remove_from_compare(listings_compare, add_compare, remove_compare);
        }

        // Marker Cluster
        var homey_markerCluster = function(homeyMap) {
            
            if(pin_cluster == 'yes') {
                var zoom_level = 16;
                pin_cluster_zoom = parseInt(pin_cluster_zoom);
                if(pin_cluster_zoom) {
                    zoom_level = pin_cluster_zoom;
                }
                markerCluster = new MarkerClusterer( homeyMap, markers, {
                    maxZoom: zoom_level,
                    gridSize: 60,
                    styles: [
                        {
                            url: pin_cluster_icon,
                            width: 48,
                            height: 48,
                            textColor: "#fff"
                        }
                    ]
                });
            } else {
                return;
            }
        }

        var homey_map_zoomin = function(homeyMap) {
            google.maps.event.addDomListener(document.getElementById('listing-mapzoomin'), 'click', function () {
                var current= parseInt( homeyMap.getZoom(),10);
                console.log(current);
                current++;
                if(current > 20){
                    current = 20;
                }
                console.log('== '+current+' ++');
                homeyMap.setZoom(current);
            });
        }

        var homey_map_zoomout = function(homeyMap) {
            google.maps.event.addDomListener(document.getElementById('listing-mapzoomout'), 'click', function () {
                var current= parseInt( homeyMap.getZoom(),10);
                console.log(current);
                current--;
                if(current < 0){
                    current = 0;
                }
                console.log('== '+current+' -- ');
                homeyMap.setZoom(current);
            });
        }

        var homey_change_map_type = function(map_type){

            if(map_type==='roadmap'){
                homeyMap.setMapTypeId(google.maps.MapTypeId.ROADMAP);
            }else if(map_type==='satellite'){
                homeyMap.setMapTypeId(google.maps.MapTypeId.SATELLITE);
            }else if(map_type==='hybrid'){
                homeyMap.setMapTypeId(google.maps.MapTypeId.HYBRID);
            }else if(map_type==='terrain'){
                homeyMap.setMapTypeId(google.maps.MapTypeId.TERRAIN);
            }
            return false;
        }

        $('.homeyMapType').on('click', function(e){
            e.preventDefault();
            var maptype = $(this).data('maptype');
            homey_change_map_type(maptype);
        });

        var homey_map_next = function() {
            current_marker++;
            if ( current_marker > markers.length ){
                current_marker = 1;
            }
            while( markers[current_marker-1].visible===false ){
                current_marker++;
                if ( current_marker > markers.length ){
                    current_marker = 1;
                }
            }

            console.log(current_marker-1);
            google.maps.event.trigger( markers[current_marker-1], 'click' );

        }

        var homey_map_prev = function() {
            current_marker--;
            if (current_marker < 1){
                current_marker = markers.length;
            }
            while( markers[current_marker-1].visible===false ){
                current_marker--;
                if ( current_marker > markers.length ){
                    current_marker = 1;
                }
            }
        
            console.log(current_marker-1);
            google.maps.event.trigger( markers[current_marker-1], 'click');
        }

        $('#homey-gmap-next').on('click', function(){
            homey_map_next();
        });

        $('#homey-gmap-prev').on('click', function(){
            homey_map_prev();
        });

        var homey_map_search_field = function (mapInput, homeyMap) {

            var searchBox = new google.maps.places.SearchBox(mapInput);
            homeyMap.controls[google.maps.ControlPosition.TOP_LEFT].push(mapInput);

            // Bias the SearchBox results towards current map's viewport.
            homeyMap.addListener('bounds_changed', function() {
                searchBox.setBounds(homeyMap.getBounds());
            });

            var markers_location = [];
            // Listen for the event fired when the user selects a prediction and retrieve
            // more details for that place.
            searchBox.addListener('places_changed', function() {
                var places = searchBox.getPlaces();

                if (places.length == 0) {
                    return;
                }

                // Clear out the old markers.
                markers_location.forEach(function(marker) {
                    marker.setMap(null);
                });
                markers_location = [];

                // For each place, get the icon, name and location.
                var bounds = new google.maps.LatLngBounds();
                places.forEach(function(place) {
                    var icon = {
                        url: place.icon,
                        size: new google.maps.Size(71, 71),
                        origin: new google.maps.Point(0, 0),
                        anchor: new google.maps.Point(17, 34),
                        scaledSize: new google.maps.Size(25, 25)
                    };

                    // Create a marker for each place.
                    markers_location.push(new google.maps.Marker({
                        map: homeyMap,
                        icon: icon,
                        title: place.name,
                        position: place.geometry.location
                    }));

                    if (place.geometry.viewport) {
                        // Only geocodes have viewport.
                        bounds.union(place.geometry.viewport);
                    } else {
                        bounds.extend(place.geometry.location);
                    }
                });
                homeyMap.fitBounds(bounds);
            });
        }

        var reloadMarkers= function() {
            // Loop through markers and set map to null for each
            for (var i=0; i<markers.length; i++) {

                markers[i].setMap(null);
            }
            // Reset the markers array
            markers = [];
        }

        var homeyAddMarker = function( props, map ) {
              
            
            $.each(props, function(i, prop) {

               
                var latlng = new google.maps.LatLng(prop.lat,prop.long);

                var prop_title = prop.data ? prop.data.post_title : prop.title;
                

                if( markerPricePins == 'yes' ) {
                    var pricePin = '<div data-id="'+prop.id+'" class="gm-marker gm-marker-color-'+prop.term_id+'"><div class="gm-marker-price">'+prop.price+'</div></div>';
            
                    var marker = new RichMarker({
                      map: map,
                      position: latlng,
                      draggable: true,
                      flat: true,
                      anchor: RichMarkerPosition.MIDDLE,
                      content: pricePin
                    });

                } else {
                    var marker_url = prop.icon;
                    var marker_size = new google.maps.Size( 44, 56 );
                    if( window.devicePixelRatio > 1.5 ) {
                        if ( prop.retinaIcon ) {
                            marker_url = prop.retinaIcon;
                            marker_size = new google.maps.Size( 44, 56 );
                        }
                    }

                    var marker_icon = {
                        url: marker_url,
                        size: marker_size,
                        scaledSize: new google.maps.Size( 44, 56 ),
                    };

                    var marker = new google.maps.Marker({
                        position: latlng,
                        map: map,
                        icon: marker_icon,
                        draggable: false,
                        title: prop_title,
                    });
                }

                var bedrooms = "";
                var baths = ""; 
                var guests = ""; 
                var listing_type = '';
                if(prop.bedrooms != '') {
                    bedrooms = '<li>'+bedrooms_icon+'<span class="total-beds">'+prop.bedrooms+'</span></li>';
                }

                if(prop.baths != '') {
                    baths = '<li>'+bathroom_icon+'<span class="total-baths">'+prop.baths+'</span></li>';
                }

                if(prop.guests != '') {
                    guests = '<li>'+guests_icon+'<span class="total-guests">'+prop.guests+'</span></li>';
                }
                if(prop.listing_type != '') {
                    listing_type = '<li class="item-type">'+prop.listing_type+'</li>';
                }

                var infoboxContent = '<div id="google-maps-info-window">'+
                    '<div class="item-wrap item-grid-view">'+
                    '<div class="media property-item">'+
                    '<div class="media-left">'+
                    '<div class="item-media item-media-thumb">'+
                    '<a href="'+prop.url+'" class="hover-effect">'+prop.thumbnail+'</a>'+
                    '<div class="item-media-price">'+
                    '<span class="item-price">'+prop.price+'</span>'+
                    '</div>'+
                    '</div>'+
                    '</div>'+
                    '<div class="media-body item-body clearfix">'+
                    '<div class="item-title-head">'+
                    '<div class="title-head-left">'+
                    '<h2 class="title">'+
                    '<a href="'+prop.url+'">'+prop_title+'</a></h2>'+
                    '</div>'+
                    '</div>'+
                    '<ul class="item-amenities">'+
                    bedrooms+
                    baths+
                    guests+
                    listing_type+
                    '</ul>'+
                    '</div>'+
                    '</div>'+
                    '</div>'+
                    '</div>';

                    google.maps.event.addListener(marker, "click", function (e) {
                        infobox.setContent(infoboxContent);
                        infobox.open(map, this);
                    });
                
                    markers.push(marker);
            });
        }


        /*--------------------------------------------------------------------------------------
        * Header Map
        *-------------------------------------------------------------------------------------*/
        var homeyMainMap = function(_lat, _long, element, markerTarget, showMarkerLabels, defaultZoom, optimizedMapLoading, isHalfMap, halfMapAjaxData, maptype) {
            
            if( document.getElementById(element) != null ) {
                if( !defaultZoom ){
                    defaultZoom = 14;
                }

                if( !optimizedMapLoading ) { 
                    var optimizedMapLoading = 0;
                }

                var map_cities = '';

                var ajax_Action;

                if(isHalfMap) {
                    ajax_Action = 'homey_half_map';

                } else {
                    ajax_Action = 'homey_header_map';

                    if(maptype == 'lat_long') {

                    } else if(maptype == 'city') {
                        map_cities = header_map_cities;
                    }
                }

                homeyMap = new google.maps.Map(document.getElementById(element), {
                    zoom: defaultZoom,
                    zoomControl: false,
                    mapTypeControl: false,
                    streetViewControl: false,
                    overviewMapControl: false,
                    scrollwheel: false,
                    fullscreenControl: true,
                    fullscreenControlOptions: {
                        position: google.maps.ControlPosition.RIGHT_BOTTOM
                    },
                    center: new google.maps.LatLng(_lat, _long),
                    mapTypeId: "roadmap",
                    gestureHandling: 'cooperative',
                    styles: google_map_style,
                });


                var allMarkers;

                if(isHalfMap) {
                    var ajaxData = halfMapAjaxData;
                } else {
                    var ajaxData = {
                        action: ajax_Action,
                        'map_cities': map_cities,
                        'security': securityhomeyMap,
                    };
                }
                



                google.maps.event.addListenerOnce(homeyMap, 'idle', function(){
                    loadMapData(ajaxurl, ajaxData);
                    makeAjaxCallOnDragend();
                });

                var makeAjaxCallOnDragend = function() {

                    if( optimizedMapLoading == 1 ) {
                        google.maps.event.addListener(homeyMap, 'dragend', function(){
                            var ajaxData = {
                                action: ajax_Action,
                                'map_cities': map_cities,
                                'security': securityhomeyMap,
                                optimized_loading: 1,
                                north_east_lat: homeyMap.getBounds().getNorthEast().lat(),
                                north_east_lng: homeyMap.getBounds().getNorthEast().lng(),
                                south_west_lat: homeyMap.getBounds().getSouthWest().lat(),
                                south_west_lng: homeyMap.getBounds().getSouthWest().lng()
                            };
                            loadMapData(ajaxurl, ajaxData);
                        });
                    }
                }


                //Load map Data
                var loadMapData = function(ajaxurl, ajaxData) {

                    $.ajax({
                        url: ajaxurl,
                        dataType: "json",
                        method: "POST",
                        data: ajaxData,
                        beforeSend: function() {
                            $('#homey-map-loading').show();

                            if(isHalfMap) {
                                halfmap_ajax_container.empty().append(''
                                    +'<div id="homey-map-loading">'
                                    +'<div class="mapPlaceholder">'
                                    +'<div class="loader-ripple spinner">'
                                    +'<div class="bounce1"></div>'
                                    +'<div class="bounce2"></div>'
                                    +'<div class="bounce3"></div>'
                                    +'</div>'
                                    +'</div>'
                                    +'</div>'
                                );
                            }
                        },
                        success: function(data) {
                            

                            if(data.getListings === true) { 

                                reloadMarkers();
                                homeyAddMarker( data.listings, homeyMap );

                                if(isHalfMap) {
                                    halfmap_ajax_container.empty().html(data.listingHtml);
                                    total_results.empty().html(data.total_results);

                                    if( !homey_is_mobile ) {
                                        homey_infobox_trigger();
                                    }
                                }

                                if( !optimizedMapLoading ) {
                                    homey_map_bounds();
                                }
                                homey_markerCluster(homeyMap);

                                homey_init_add_favorite(ajaxurl, userID, is_singular_listing);
                                homey_init_remove_favorite(ajaxurl, userID, is_singular_listing);
                                compare_for_ajax_map();

                                if(isHalfMap) {
                                    half_map_ajax_pagi();
                                }

                                $('#homey-map-loading').hide();

                            } else {
                                reloadMarkers();
                                $('#homey-halfmap').append('<div class="map-notfound">'+not_found+'</div>');
                                halfmap_ajax_container.empty().html('<div class="map-notfound">'+not_found+'</div>');
                                total_results.empty().html(data.total_results);
                            }
        
                        },
                        error : function (e) {
                            console.log(e);
                        }
                    });

                } // End loadMapData


                var homey_map_bounds = function() {
                    homeyMap.fitBounds( markers.reduce(function(bounds, marker ) {
                        return bounds.extend( marker.getPosition() );
                    }, new google.maps.LatLngBounds()));

                    var current = parseInt( homeyMap.getZoom(),10);
                    if(current > 20){
                        current = 14;
                    }
                    homeyMap.setZoom(current);
                }

                if( document.getElementById('listing-mapzoomin') ) {
                    homey_map_zoomin(homeyMap);
                }
                if( document.getElementById('listing-mapzoomout') ) {
                    homey_map_zoomout(homeyMap);
                }

                if( document.getElementById('google-map-search') ) {
                    var mapInput = document.getElementById('google-map-search');
                    homey_map_search_field(mapInput, homeyMap);
                }



            } else {
                console.log("No map element found");
            } 

        } // End homeyMap


        var homey_make_search_call = function(current_form, current_page, _lat, _long, element, markerTarget, showMarkerLabels, defaultZoom, optimizedMapLoading, isHalfMap) {
            var mapDiv = $('#homey-halfmap');
            arrive = current_form.find('input[name="arrive"]').val();
            depart = current_form.find('input[name="depart"]').val();
            guests = current_form.find('input[name="guests"]').val();
            pets = current_form.find('input[name="pets"]:checked').val();
            search_area = current_form.find('input[name="search_area"]').val();
            search_city = current_form.find('input[name="search_city"]').val();
            search_country = current_form.find('input[name="search_country"]').val();
            listing_type = current_form.find('select[name="listing_type"]').val();
            state = current_form.find('select[name="state"]').val();
            city = current_form.find('select[name="city"]').val();
            area = current_form.find('select[name="area"]').val();

            if(listing_type=="" || listing_type==undefined) {
                listing_type = mapDiv.data('type');
            }


            amenity = current_form.find('.amenities-list input[type=checkbox]:checked').map(function(_, el) {
                return $(el).val();
            }).toArray();

            facility = current_form.find('.facilities-list input[type=checkbox]:checked').map(function(_, el) {
                return $(el).val();
            }).toArray();

            min_price = current_form.find('select[name="min-price"]').val();
            max_price = current_form.find('select[name="max-price"]').val();
            bedrooms = current_form.find('select[name="bedrooms"]').val();
            rooms = current_form.find('select[name="rooms"]').val();
            room_size = current_form.find('select[name="room_size"]').val();

            var sort_by = $('#sort_listings_halfmap').val();
        
            if( current_page != undefined ) {
                paged = current_page;
            }

            var maptype = '';

            ajaxData = {
                action: 'homey_half_map',
                'arrive': arrive,
                'depart': depart,
                'guests': guests,
                'pets': pets,
                'bedrooms': bedrooms,
                'rooms': rooms,
                'room_size': room_size,
                'search_country': search_country,
                'search_city': search_city,
                'search_area': search_area,
                'listing_type': listing_type,
                'min-price': min_price,
                'max-price': max_price,
                'state': state,
                'city': city,
                'area': area,
                'amenity': amenity,
                'facility': facility,
                'sort_by': sort_by,
                'layout': layout,
                'num_posts': num_posts,
                'paged': current_page,
                'security': securityhomeyMap,
            };
            homeyMainMap(_lat, _long, element, markerTarget, showMarkerLabels, defaultZoom, optimizedMapLoading, isHalfMap, ajaxData, maptype);
        }

        /*--------------------------------------------------------------------------------------
        * Simple Map
        *-------------------------------------------------------------------------------------*/
        var homeySimpleMap = function (_lat, _long, element, markerDragable, showCircle, defaultZoom, marker_pin, marker_pin_retina) {
            if (!markerDragable){
                markerDragable = false;
            }

            if(!showCircle) {
                showCircle = false;
            }

            if(!defaultZoom) {
                defaultZoom = 15;
            }

            var mapCenter;

            var homeySimpleMarker = function(homeyMap) {
        
                var marker_url = marker_pin;
                var marker_size = new google.maps.Size( 44, 56 );
                if( window.devicePixelRatio > 1.5 ) {
                    if ( marker_pin_retina ) {
                        marker_url = marker_pin_retina;
                        marker_size = new google.maps.Size( 44, 56 );
                    }
                }

                var marker_icon = {
                    url: marker_url,
                    size: marker_size,
                    scaledSize: new google.maps.Size( 44, 56 ),
                };

                var marker = new google.maps.Marker({
                    position: homeyMap.getCenter(),
                    map: homeyMap,
                    icon: marker_icon,
                    draggable: false,
                    animation: google.maps.Animation.DROP,
                });
            }

            var homeyCircle = function(homeyMap) {
                var Circle = new google.maps.Circle({
                    strokeColor: '#4f5962',
                    strokeOpacity: 0.8,
                    strokeWeight: 2,
                    fillColor: '#4f5962',
                    fillOpacity: 0.35,
                    map: homeyMap,
                    center: mapCenter,
                    radius: 0.5 * 1000
                });
            }

            mapCenter = new google.maps.LatLng(_lat, _long);
            var drawMap = function(mapCenter){
                var mapOptions = {
                    zoom: defaultZoom,
                    center: mapCenter,
                    disableDefaultUI: false,
                    //scrollwheel: true,
                    gestureHandling: 'cooperative',
                    styles: google_map_style,
                };
                var mapElement = document.getElementById(element);
                homeyMap = new google.maps.Map(mapElement, mapOptions);

                if(!showCircle) {
                    homeySimpleMarker(homeyMap);
                }

                if(showCircle) {
                    homeyCircle(homeyMap);
                }

            }
            drawMap(mapCenter);
  

        } // homeySimpleMap

        /*--------------------------------------------------------------------------------------
        * Sticky Map
        *-------------------------------------------------------------------------------------*/
        var homeyStickyMap = function(element, showMarkerLabels, defaultZoom, mapPaged) {
            
            if( document.getElementById(element) != null ) {
                if( !defaultZoom ){
                    defaultZoom = 14;
                }

                var _lat = '';
                var _long = '';
                var ajax_Action = 'homey_sticky_map';

                homeyMap = new google.maps.Map(document.getElementById(element), {
                    zoom: defaultZoom,
                    zoomControl: false,
                    mapTypeControl: false,
                    streetViewControl: false,
                    overviewMapControl: false,
                    scrollwheel: false,
                    fullscreenControl: true,
                    fullscreenControlOptions: {
                        position: google.maps.ControlPosition.RIGHT_BOTTOM
                    },
                    center: new google.maps.LatLng(_lat, _long),
                    mapTypeId: "roadmap",
                    gestureHandling: 'cooperative',
                    styles: google_map_style,
                });

                var allMarkers;

                var ajaxData = {
                    action: ajax_Action,
                    'paged': mapPaged,
                    'security': securityhomeyMap
                };
                google.maps.event.addListenerOnce(homeyMap, 'idle', function(){
                    loadMapData(ajaxurl, ajaxData);
                });



                //Load map Data
                var loadMapData = function(ajaxurl, ajaxData) {

                    $.ajax({
                        url: ajaxurl,
                        dataType: "json",
                        method: "POST",
                        data: ajaxData,
                        success: function(data) {
                            

                            if(data.getListings === true) {

                                reloadMarkers();
                                homeyAddMarker( data.listings, homeyMap );

                                homey_map_bounds();
                                homey_markerCluster(homeyMap);

                                $('#homey-map-loading').hide();

                            } else {
                                
                            }
                            
                        },
                        error : function (e) {
                            console.log(e);
                        }
                    });

                } // End loadMapData


                var homey_map_bounds = function() {
                    homeyMap.fitBounds( markers.reduce(function(bounds, marker ) {
                        return bounds.extend( marker.getPosition() );
                    }, new google.maps.LatLngBounds()));
                }

                if( document.getElementById('listing-mapzoomin') ) {
                    homey_map_zoomin(homeyMap);
                }
                if( document.getElementById('listing-mapzoomout') ) {
                    homey_map_zoomout(homeyMap);
                }

                if( document.getElementById('google-map-search') ) {
                    var mapInput = document.getElementById('google-map-search');
                    homey_map_search_field(mapInput, homeyMap);
                }



            } else {
                console.log("No map element found");
            } 

        } // End homeyStickyMap


        if($('#banner-map').length > 0) {
            var mapDiv = $('#banner-map');
            var zoomlevel = mapDiv.data('zoomlevel');
            var maptype = mapDiv.data('maptype');
            var maplat = mapDiv.data('lat');
            var maplong = mapDiv.data('long');
            var ajaxData = null;

            var _lat = maplat;
            var _long = maplong;
            var element = "banner-map";
            var markerTarget = "infobox";
            var showMarkerLabels = true;
            var isHalfMap = false;
            var defaultZoom = zoomlevel;
            var optimizedMapLoading = 0; // 0/1 If enable map will load data when map moved within it's bounds otherwise will load data at once
            homeyMainMap(_lat, _long, element, markerTarget, showMarkerLabels, defaultZoom, optimizedMapLoading, isHalfMap, ajaxData, maptype)
        }

        if($('#homey-halfmap').length > 0) {
            var mapDiv = $('#homey-halfmap');
            var zoomlevel = mapDiv.data('zoom');

            var layout = mapDiv.data('layout');
            var num_posts = mapDiv.data('num-posts');
            var order = mapDiv.data('order');
            var type = mapDiv.data('type');
            var maptype = '';

            if(listing_type=="") {
                listing_type = type;
            }

            var _lat = '';
            var _long = '';
            var element = "homey-halfmap";
            var markerTarget = "infobox";
            var showMarkerLabels = true;
            var isHalfMap = true;
            var defaultZoom = zoomlevel;
            var optimizedMapLoading = 0; // 0/1 If enable map will load data when map moved within it's bounds otherwise will load data at once

            var ajaxData = {
                action: 'homey_half_map',
                'arrive': arrive,
                'depart': depart,
                'guests': guests,
                'pets': pets,
                'bedrooms': bedrooms,
                'rooms': rooms,
                'room_size': room_size,
                'search_country': search_country,
                'search_city': search_city,
                'search_area': search_area,
                'listing_type': listing_type,
                'min-price': min_price,
                'max-price': max_price,
                'state': state,
                'city': city,
                'area': area,
                'amenity': amenity,
                'facility': facility,
                'layout': layout,
                'num_posts': num_posts,
                'sort_by': order,
                'paged': paged,
                'security': securityhomeyMap,
            };


            homeyMainMap(_lat, _long, element, markerTarget, showMarkerLabels, defaultZoom, optimizedMapLoading, isHalfMap, ajaxData, maptype);

            $('.homey_half_map_search_btn').on('click', function(e) {
                e.preventDefault();
                var current_form = $(this).parents('.half-map-wrap');
                var current_page = 1;
                homey_make_search_call(current_form, current_page, _lat, _long, element, markerTarget, showMarkerLabels, defaultZoom, optimizedMapLoading, isHalfMap);
                
            });

            $('#sort_listings_halfmap').on('change', function(e) {
                e.preventDefault();
                var current_form = $(this).parents('.half-map-wrap');
                var current_page = 1;
                homey_make_search_call(current_form, current_page, _lat, _long, element, markerTarget, showMarkerLabels, defaultZoom, optimizedMapLoading, isHalfMap);
                
            });

            var half_map_ajax_pagi = function() {
                $('.half_map_ajax_pagi a').on('click', function(e){
                    e.preventDefault();
                    var current_page = $(this).data('homeypagi');
                    var current_form = $(this).parents('.half-map-wrap');
                    homey_make_search_call(current_form, current_page, _lat, _long, element, markerTarget, showMarkerLabels, defaultZoom, optimizedMapLoading, isHalfMap);
                });
                return false;
            } // enf half_map_ajax_pagi

        }

        // Single listing map
        if($('#homey-single-map').length > 0 ) {
            var mapDiv = $('#homey-single-map');
            var zoomlevel = mapDiv.data('zoom');
            var pin_type = mapDiv.data('pin-type');
            var marker_pin = mapDiv.data('marker-pin');
            var marker_pin_retina = mapDiv.data('marker-pin-retina');
            var _lat   = mapDiv.data('lat');
            var _long  = mapDiv.data('long');
            var element     = 'homey-single-map';
            var defaultZoom = zoomlevel; 
            var markerDragable = false;
            if(pin_type == 'marker') {
                var showCircle = false; 
            } else {
                var showCircle = true; 
            }
            homeySimpleMap(_lat, _long, element, markerDragable, showCircle, defaultZoom, marker_pin, marker_pin_retina);
        }

        // Single listing map
        if($('#homey_sticky_map').length > 0 ) {
            var mapDiv = $('#homey_sticky_map');
            var element     = 'homey_sticky_map';
            var defaultZoom = 12; 
            var showMarkerLabels = true;
            var mapPaged = mapDiv.data('mappaged');
            homeyStickyMap(element, showMarkerLabels, defaultZoom, mapPaged);
        }

        $('#homey-gmap-full').on('click', function(){
            $('div.gm-style button[title="Toggle fullscreen view"]').trigger('click');
        });
        
        

    }// typeof HOMEY_map_vars

})(jQuery); // end function