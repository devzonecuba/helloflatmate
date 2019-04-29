<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* home/index.html.twig */
class __TwigTemplate_cee3279acf8774adb0a2c56278df63117d9270cc4e018ec951d09f43e14b4769 extends \Twig\Template
{
    private $source;

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "home/index.html.twig", 1);
        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_title($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <!-- Seccion boody -->

    <div id=\"section-body\">

        <section class=\"top-banner-wrap top-banner-sr\">

            <div id=\"rev_slider_1_1_wrapper\" class=\"rev_slider_wrapper fullwidthbanner-container\" data-source=\"gallery\" style=\"margin:0px auto;background:transparent;padding:0px;margin-top:0px;margin-bottom:0px;\">
                <!-- START REVOLUTION SLIDER 5.4.8.2 fullwidth mode -->
                <div id=\"rev_slider_1_1\" class=\"rev_slider fullwidthabanner\" style=\"display:none;\" data-version=\"5.4.8.2\">
                    <ul>
                        <!-- SLIDE  -->
                        <li data-index=\"rs-1\" data-transition=\"fade\" data-slotamount=\"default\" data-hideafterloop=\"0\" data-hideslideonmobile=\"off\" data-easein=\"default\" data-easeout=\"default\" data-masterspeed=\"300\" data-rotate=\"0\" data-saveperformance=\"off\" data-title=\"Slide\" data-param1=\"\" data-param2=\"\" data-param3=\"\" data-param4=\"\" data-param5=\"\" data-param6=\"\" data-param7=\"\" data-param8=\"\" data-param9=\"\" data-param10=\"\" data-description=\"\">
                            <!-- MAIN IMAGE -->
                            <img src=\"assets/images/39-2.jpg\" alt=\"\" title=\"39-2\" width=\"1440\" height=\"960\" data-bgposition=\"center center\" data-bgfit=\"cover\" data-bgrepeat=\"no-repeat\" class=\"rev-slidebg\" data-no-retina>
                            <!-- LAYERS -->

                            <!-- LAYER NR. 1 -->
                            <div class=\"tp-caption tp-shape tp-shapewrapper  tp-resizeme\" id=\"slide-1-layer-3\" data-x=\"['center','center','center','center']\" data-hoffset=\"['0','0','0','0']\" data-y=\"['middle','middle','middle','middle']\" data-voffset=\"['0','0','0','0']\" data-width=\"5000\" data-height=\"3000\" data-whitespace=\"nowrap\" data-type=\"shape\" data-responsive_offset=\"on\" data-frames='[{\"delay\":10,\"speed\":300,\"frame\":\"0\",\"from\":\"opacity:0;\",\"to\":\"o:1;\",\"ease\":\"Power3.easeInOut\"},{\"delay\":\"wait\",\"speed\":300,\"frame\":\"999\",\"to\":\"opacity:0;\",\"ease\":\"Power3.easeInOut\"}]' data-textAlign=\"['inherit','inherit','inherit','inherit']\" data-paddingtop=\"[0,0,0,0]\" data-paddingright=\"[0,0,0,0]\" data-paddingbottom=\"[0,0,0,0]\" data-paddingleft=\"[0,0,0,0]\" style=\"z-index: 5;background-color:rgba(0,0,0,0.25);\"> </div>
                        </li>
                        <!-- SLIDE  -->
                        <li data-index=\"rs-5\" data-transition=\"fade\" data-slotamount=\"default\" data-hideafterloop=\"0\" data-hideslideonmobile=\"off\" data-easein=\"default\" data-easeout=\"default\" data-masterspeed=\"300\" data-rotate=\"0\" data-saveperformance=\"off\" data-title=\"Slide\" data-param1=\"\" data-param2=\"\" data-param3=\"\" data-param4=\"\" data-param5=\"\" data-param6=\"\" data-param7=\"\" data-param8=\"\" data-param9=\"\" data-param10=\"\" data-description=\"\">
                            <!-- MAIN IMAGE -->
                            <img src=\"assets/images/19.jpg\" alt=\"\" title=\"19\" width=\"1440\" height=\"960\" data-bgposition=\"center center\" data-bgfit=\"cover\" data-bgrepeat=\"no-repeat\" class=\"rev-slidebg\" data-no-retina>
                            <!-- LAYERS -->

                            <!-- LAYER NR. 2 -->
                            <div class=\"tp-caption tp-shape tp-shapewrapper  tp-resizeme\" id=\"slide-5-layer-3\" data-x=\"['center','center','center','center']\" data-hoffset=\"['0','0','0','0']\" data-y=\"['middle','middle','middle','middle']\" data-voffset=\"['0','0','0','0']\" data-width=\"5000\" data-height=\"3000\" data-whitespace=\"nowrap\" data-type=\"shape\" data-responsive_offset=\"on\" data-frames='[{\"delay\":10,\"speed\":300,\"frame\":\"0\",\"from\":\"opacity:0;\",\"to\":\"o:1;\",\"ease\":\"Power3.easeInOut\"},{\"delay\":\"wait\",\"speed\":300,\"frame\":\"999\",\"to\":\"opacity:0;\",\"ease\":\"Power3.easeInOut\"}]' data-textAlign=\"['inherit','inherit','inherit','inherit']\" data-paddingtop=\"[0,0,0,0]\" data-paddingright=\"[0,0,0,0]\" data-paddingbottom=\"[0,0,0,0]\" data-paddingleft=\"[0,0,0,0]\" style=\"z-index: 5;background-color:rgba(0,0,0,0.25);\"> </div>
                        </li>
                        <!-- SLIDE  -->
                        <li data-index=\"rs-4\" data-transition=\"fade\" data-slotamount=\"default\" data-hideafterloop=\"0\" data-hideslideonmobile=\"off\" data-easein=\"default\" data-easeout=\"default\" data-masterspeed=\"300\" data-rotate=\"0\" data-saveperformance=\"off\" data-title=\"Slide\" data-param1=\"\" data-param2=\"\" data-param3=\"\" data-param4=\"\" data-param5=\"\" data-param6=\"\" data-param7=\"\" data-param8=\"\" data-param9=\"\" data-param10=\"\" data-description=\"\">
                            <!-- MAIN IMAGE -->
                            <img src=\"assets/images/33-3.jpg\" alt=\"\" title=\"33-3\" width=\"1440\" height=\"960\" data-bgposition=\"center center\" data-bgfit=\"cover\" data-bgrepeat=\"no-repeat\" class=\"rev-slidebg\" data-no-retina>
                            <!-- LAYERS -->

                            <!-- LAYER NR. 3 -->
                            <div class=\"tp-caption tp-shape tp-shapewrapper  tp-resizeme\" id=\"slide-4-layer-3\" data-x=\"['center','center','center','center']\" data-hoffset=\"['0','0','0','0']\" data-y=\"['middle','middle','middle','middle']\" data-voffset=\"['0','0','0','0']\" data-width=\"5000\" data-height=\"3000\" data-whitespace=\"nowrap\" data-type=\"shape\" data-responsive_offset=\"on\" data-frames='[{\"delay\":10,\"speed\":300,\"frame\":\"0\",\"from\":\"opacity:0;\",\"to\":\"o:1;\",\"ease\":\"Power3.easeInOut\"},{\"delay\":\"wait\",\"speed\":300,\"frame\":\"999\",\"to\":\"opacity:0;\",\"ease\":\"Power3.easeInOut\"}]' data-textAlign=\"['inherit','inherit','inherit','inherit']\" data-paddingtop=\"[0,0,0,0]\" data-paddingright=\"[0,0,0,0]\" data-paddingbottom=\"[0,0,0,0]\" data-paddingleft=\"[0,0,0,0]\" style=\"z-index: 5;background-color:rgba(0,0,0,0.25);\"> </div>
                        </li>
                    </ul>
                    <div class=\"tp-bannertimer tp-bottom\" style=\"height: 5px; background: rgba(241,94,117,1);\"></div>
                </div>
                <script>
                    var htmlDiv = document.getElementById(\"rs-plugin-settings-inline-css\");
                    var htmlDivCss = \"\";
                    if (htmlDiv) {
                        htmlDiv.innerHTML = htmlDiv.innerHTML + htmlDivCss;
                    } else {
                        var htmlDiv = document.createElement(\"div\");
                        htmlDiv.innerHTML = \"<style>\" + htmlDivCss + \"</style>\";
                        document.getElementsByTagName(\"head\")[0].appendChild(htmlDiv.childNodes[0]);
                    }
                </script>
                <script type=\"text/javascript\">
                    if (setREVStartSize !== undefined) setREVStartSize({
                        c: '#rev_slider_1_1',
                        responsiveLevels: [1240, 1024, 778, 480],
                        gridwidth: [1240, 1024, 778, 480],
                        gridheight: [700, 768, 960, 720],
                        sliderLayout: 'fullwidth'
                    });

                    var revapi1,
                        tpj;
                    (function() {
                        if (!/loaded|interactive|complete/.test(document.readyState)) document.addEventListener(\"DOMContentLoaded\", onLoad);
                        else onLoad();

                        function onLoad() {
                            if (tpj === undefined) {
                                tpj = jQuery;
                                if (\"off\" == \"on\") tpj.noConflict();
                            }
                            if (tpj(\"#rev_slider_1_1\").revolution == undefined) {
                                revslider_showDoubleJqueryError(\"#rev_slider_1_1\");
                            } else {
                                revapi1 = tpj(\"#rev_slider_1_1\").show().revolution({
                                    sliderType: \"standard\",
                                    jsFileLocation: \"js\",
                                    sliderLayout: \"fullwidth\",
                                    dottedOverlay: \"none\",
                                    delay: 9000,
                                    navigation: {
                                        onHoverStop: \"off\",
                                    },
                                    responsiveLevels: [1240, 1024, 778, 480],
                                    visibilityLevels: [1240, 1024, 778, 480],
                                    gridwidth: [1240, 1024, 778, 480],
                                    gridheight: [700, 768, 960, 720],
                                    lazyType: \"none\",
                                    shadow: 0,
                                    spinner: \"spinner0\",
                                    stopLoop: \"off\",
                                    stopAfterLoops: -1,
                                    stopAtSlide: -1,
                                    shuffle: \"off\",
                                    autoHeight: \"off\",
                                    hideThumbsOnMobile: \"off\",
                                    hideSliderAtLimit: 0,
                                    hideCaptionAtLimit: 0,
                                    hideAllCaptionAtLilmit: 0,
                                    debugMode: false,
                                    fallbacks: {
                                        simplifyAll: \"off\",
                                        nextSlideOnWindowFocus: \"off\",
                                        disableFocusListener: false,
                                    }
                                });
                            }; /* END OF revapi call */

                        }; /* END OF ON LOAD FUNCTION */
                    }()); /* END OF WRAPPING FUNCTION */
                </script>
            </div>
            <!-- END REVOLUTION SLIDER -->
            <div class=\"banner-caption banner-caption-side-search\">
                <div class=\"side-search-wrap\">
\t\t\t\t\t<h2 class=\"banner-title\" style=\"color: rgb(241, 94, 117);\">Helloflatmate</h2>
                    <h2 class=\"banner-title\">Reserva Lugares Asombrosos</h2>
                    <p class=\"banner-subtitle\">Con helloflatmate tu experiencia será única</p>
                    <div class=\"search-wrap search-banner search-banner-desktop side-search hidden-xs\">
                        <form class=\"clearfix\" action=\"search-results/\" method=\"GET\">

                            <div class=\"search-destination clearfix\">
                                <label class=\"animated-label\">¿Donde?</label>
                                <input type=\"text\" name=\"location_search\" autocomplete=\"off\" id=\"location_search_banner\" value=\"\" class=\"form-control input-search\" placeholder=\"¿Donde?\">
                                <input type=\"hidden\" name=\"search_city\" data-value=\"\" value=\"\">
                                <input type=\"hidden\" name=\"search_area\" data-value=\"\" value=\"\">
                                <input type=\"hidden\" name=\"search_country\" data-value=\"\" value=\"\">
                                <button type=\"reset\" class=\"btn clear-input-btn\"><i class=\"fa fa-times\" aria-hidden=\"true\"></i></button>

                            </div>
                            <div class=\"search-date-range main-search-date-range-js clearfix\">
                                <div class=\"search-date-range-arrive\">
                                    <label class=\"animated-label\">Fecha de Entrada</label>
                                    <input type=\"text\" name=\"arrive\" autocomplete=\"off\" value=\"\" class=\"form-control\" placeholder=\"Fecha de Entrada\">
                                </div>
                                <div class=\"search-date-range-depart\">
                                    <label class=\"animated-label\">Fecha de Salida</label>
                                    <input type=\"text\" name=\"depart\" autocomplete=\"off\" value=\"\" class=\"form-control\" placeholder=\"Fecha de Salida\">
                                </div>

                               
                                </div>
                                <!-- On mobile: display this button below when  the user selected arrival and depart dates -->
                                <button style=\"display: none;\" class=\"btn btn-primary search-calendar-btn\">Hecho</button>
                            </div>
\t\t\t\t\t\t\t<br>
                            <div class=\"search-guests search-guests-js clearfix\">
                                <label class=\"animated-label\"></label>
                                <input type=\"text\" name=\"guest\" autocomplete=\"off\" value=\"\" class=\"form-control\" placeholder=\"huesped\">
                                <div class=\"search-guests-wrap search-guests-wrap-js clearfix\">
                                    <input type=\"hidden\" class=\"search_adult_guest\" value=\"0\">
                                    <input type=\"hidden\" class=\"search_child_guest\" value=\"0\">
                                    <div class=\"adults-calculator\">
                                        <span class=\"quantity-calculator search_homey_adult\">0</span>
                                        <span class=\"calculator-label\">Adulto</span>
                                        <button class=\"search_adult_plus btn btn-secondary-outlined\" type=\"button\"><i class=\"fa fa-plus\" aria-hidden=\"true\"></i></button>
                                        <button class=\"search_adult_minus btn btn-secondary-outlined\" type=\"button\"><i class=\"fa fa-minus\" aria-hidden=\"true\"></i></button>
                                    </div>

                                    <div class=\"children-calculator\">
                                        <span class=\"quantity-calculator search_homey_child\">0</span>
                                        <span class=\"calculator-label\">Niños</span>
                                        <button class=\"search_child_plus btn btn-secondary-outlined\" type=\"button\"><i class=\"fa fa-plus\" aria-hidden=\"true\"></i></button>
                                        <button class=\"search_child_minus btn btn-secondary-outlined\" type=\"button\"><i class=\"fa fa-minus\" aria-hidden=\"true\"></i></button>
                                    </div>
                                    <div class=\"pets-calculator\">
                                        <span class=\"calculator-label\">Mascotas</span>
                                        <div class=\"pets-calculator-control-wrap\">
                                            <label class=\"control control--radio radio-tab\">
                                                <input type=\"radio\" name=\"pets\" value=\"1\">
                                                <span class=\"control-text\">Si</span>
                                                <span class=\"control__indicator\"></span>
                                                <span class=\"radio-tab-inner\"></span>
                                            </label>
                                            <label class=\"control control--radio radio-tab\">
                                                <input type=\"radio\" name=\"pets\" value=\"0\">
                                                <span class=\"control-text\">No</span>
                                                <span class=\"control__indicator\"></span>
                                                <span class=\"radio-tab-inner\"></span>
                                            </label>
                                        </div>
                                    </div>
                                    <!-- pets-calculator -->
                                    <div class=\"guest-apply-btn\">
                                        <button class=\"btn btn-info\" type=\"button\">Hecho</button>
                                    </div>
                                    <!-- guest-apply-btn -->
                                </div>
                                <!-- search-guests -->
                            </div>
\t\t\t\t\t\t\t<br>
                            <div class=\"search-button clearfix\">
                                <button type=\"submit\" class=\"btn\">Buscar</button>
                            </div>
                        </form>
                    </div>
                    <!-- search-wrap -->

                    <div class=\"search-wrap search-banner search-banner-mobile\">
                        <form class=\"clearfix\">
                            <div class=\"search-destination\">
                                <input value=\"\" type=\"text\" class=\"form-control\" placeholder=\"Where to go?\" onfocus=\"blur();\">
                            </div>
                        </form>
                    </div>
                    <!-- search-wrap -->

                </div>
            </div>
            <!-- banner-caption -->

        </section>
        <!-- header-parallax -->




 <!-- footer-bottom-wrap -->
        <section class=\"top-banner-wrap top-banner-sr\">
          <section class=\"main-content-area listing-page listing-page-full-width\">
            <div class=\"container\">
                <div class=\"row\" >
                    <div class=\"col-xs-12 col-sm-12 col-md-12 col-lg-12\">
\t\t\t\t\t\t 
                        <div class=\"vc_row-full-width vc_clearfix\"></div>
                        <div data-vc-full-width=\"true\" data-vc-full-width-init=\"false\" class=\"vc_row wpb_row vc_row-fluid\" >
                            <div class=\"wpb_column vc_column_container vc_col-sm-12\">
                                <div class=\"vc_column-inner\">
                                    <div class=\"wpb_wrapper\">
                                        <div style=\"clear:both; width:100%; height:50px\"></div>
                                        <div class=\"homey-module module-title section-title-module text-center \">
                                            <h2 style=\"font-size: 32px; line-height: 42px;\"> Como funcionamos</h2>

                                            
                                        </div>
                                        <div style=\"clear:both; width:100%; height:30px\"></div>
                                        <div class=\"module-wrap property-module-grid property-module-grid-slider property-module-grid-slider-4cols\">
                                            <div class=\"listing-wrap item-grid-view\">
                                                <div class=\"row\">
                <div class=\"col-md-3\">
                    <div class=\"card-box-c foo\">
                        <div class=\"card-header-c margin-box\" style=\"text-align: center\">
                            <div class=\"car-icon-box\">
                                <span class=\"fa fa- fa-map-marker\"></span>
                            </div>
                        </div>
                        <div class=\"card-body-c\">
                            <p class=\"content-c\">
                            <h2 class=\"\" style=\"text-align: center\">Encuentra</h2>
                            <p style=\"text-align: center\"> Descubre entre nuestras ofertas de habitaciones o pisos la que mejor se adapte a ti en Valencia.</p>
                            </p>
                        </div>
                        <div class=\"card-footer-c\" style=\"text-align: center\">
                            <a href=\"";
        // line 257
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("operation");
        echo "\" class=\"link-c link-icon btn btn-primary\">Más Información
                                <span class=\"ion-ios-arrow-forward\"></span>
                            </a>
                        </div>
                    </div>
                </div>

                <div class=\"col-md-3\">
                    <div class=\"card-box-c foo\">
                        <div class=\"card-header-c margin-box\" style=\"text-align: center\">
                            <div class=\"car-icon-box\">
                                <span class=\"fa fa-thumbs-up\"></span>
                            </div>
                        </div>
                        <div class=\"card-body-c\">
                            <p class=\"content-c\">
                            <h2 class=\"\" style=\"text-align: center\">Fácil y Seguro</h2>
                            <p style=\"text-align: center\"> El proceso de reserva es fácil, seguro e intuitivo para conseguir tu habitacion de estudiante. </p>
                            </p>
                        </div>
                        <div class=\"card-footer-c\" style=\"text-align: center\">
                            <a href=\"";
        // line 278
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("operation");
        echo "\" class=\"link-c link-icon btn btn-primary\">Más Información
                                <span class=\"ion-ios-arrow-forward\"></span>
                            </a>
                        </div>
                    </div>
                </div>

                <div class=\"col-md-3\">
                    <div class=\"card-box-c foo\">
                        <div class=\"card-header-c margin-box\" style=\"text-align: center\">
                            <div class=\"car-icon-box\">
                                <span class=\"fa fa-bed\"></span>
                            </div>
                        </div>
                        <div class=\"card-body-c\">
                            <p class=\"content-c\">
                            <h2 class=\"\" style=\"text-align: center\">Reserva</h2>
                            <p style=\"text-align: center\"> Si has visto tu habitación ideal y está disponible puesdes reservarla al momento.</p>
                            </p>
\t\t\t\t\t\t\t
                        </div>
                        <div class=\"card-footer-c\" style=\"text-align: center\">
                            <a href=\"";
        // line 300
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("operation");
        echo "\" class=\"link-c link-icon btn btn-primary\">Más Información
                                <span class=\"ion-ios-arrow-forward\"></span>
                            </a>
                        </div>
                    </div>
                </div>

                <div class=\"col-md-3\">
                    <div class=\"card-box-c foo\">
                        <div class=\"card-header-c margin-box\" style=\"text-align: center\">
                            <div class=\"car-icon-box\">
                                <span class=\"fa fa-bookmark\"></span>
                            </div>
                        </div>
                        <div class=\"card-body-c\">
                            <p class=\"content-c\">
                            <h2 class=\"\" style=\"text-align: center\">Contrato</h2>
                            <p style=\"text-align: center\"> Contrato justo que defiende obligaciones y derechos tanto del propietario como del inquilino.</p>
                            </p>
                        </div>
                        <div class=\"card-footer-c\" style=\"text-align: center\">
                            <a href=\"";
        // line 321
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("operation");
        echo "\" class=\"link-c link-icon btn btn-primary\">Más Información
                                <span class=\"ion-ios-arrow-forward\"></span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
\t\t
                                            <!-- grid-listing-page -->
                                        </div>

                                        <div style=\"clear:both; width:100%; height:30px\"></div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        
                        <div class=\"vc_row-full-width vc_clearfix\"></div>
                        <div data-vc-full-width=\"true\" data-vc-full-width-init=\"false\" class=\"vc_row wpb_row vc_row-fluid vc_custom_1539966302417 vc_row-has-fill\">
                            <div class=\"wpb_column vc_column_container vc_col-sm-12\">
                                <div class=\"vc_column-inner\">
                                    <div class=\"wpb_wrapper\">
                                        <div style=\"clear:both; width:100%; height:50px\"></div>
                                        <div class=\"homey-module module-title section-title-module text-center \">
                                            <h2 style=\"font-size: 32px; line-height: 42px;\">Te Aseguramos Confort y Calidad</h2>

                                            
                                        </div>
                                        <div style=\"clear:both; width:100%; height:30px\"></div>
                                        <div class=\"module-wrap taxonomy-grid taxonomy-grid-4\">
                                            <div class=\"row\">

                                                <div class=\"col-sm-3 col-xs-6\">
                                                    <div class=\"taxonomy-item taxonomy-card\">
                                                        <a class=\"taxonomy-link hover-effect\" href=\"city/los-angeles/\">
                                                            <div class=\"taxonomy-title\">Casa 1
                                                                
                                                                
                                                            </div>
                                                            <img class=\"img-responsive\" src=\"assets/images/fotos/h4-2.jpg\" width=\"360\" height=\"360\" alt=\"listing_city\">
                                                        </a>
                                                    </div>
                                                </div>

                                                <div class=\"col-sm-3 col-xs-6\">
                                                    <div class=\"taxonomy-item taxonomy-card\">
                                                        <a class=\"taxonomy-link hover-effect\" href=\"city/miami/\">
                                                            <div class=\"taxonomy-title\"> 
                                                               Casa 2
                                                                
                                                               
                                                            </div>
                                                            <img class=\"img-responsive\" src=\"assets/images/fotos/h4-9.jpg\" width=\"360\" height=\"360\" alt=\"listing_city\">
                                                        </a>
                                                    </div>
                                                </div>

                                                <div class=\"col-sm-3 col-xs-6\">
                                                    <div class=\"taxonomy-item taxonomy-card\">
                                                        <a class=\"taxonomy-link hover-effect\" href=\"city/new-york/\">

                                                            <div class=\"taxonomy-title\">
                                                                Casa 3
                                                                
                                                                
                                                            </div>

                                                            <img class=\"img-responsive\" src=\"assets/images/fotos/h1-1.jpg\" width=\"360\" height=\"360\" alt=\"listing_city\">
                                                        </a>
                                                    </div>
                                                </div>

                                                <div class=\"col-sm-3 col-xs-6\">
                                                    <div class=\"taxonomy-item taxonomy-card\">
                                                        <a class=\"taxonomy-link hover-effect\" href=\"city/san-francisco/\">
                                                            <div class=\"taxonomy-title\"> Casa 4
                                                                

                                                            </div>
                                                            <img class=\"img-responsive\" src=\"assets/images/fotos/h3-10.jpg\" width=\"360\" height=\"360\" alt=\"listing_city\">
                                                        </a>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>

                                        <div class=\"vc_btn3-container  btn vc_btn3-center vc_custom_1541795485231\">
                                            <a onmouseleave=\"this.style.borderColor='#000000'; this.style.backgroundColor='transparent'; this.style.color='#000000'\" onmouseenter=\"this.style.borderColor='#d9546c'; this.style.backgroundColor='#d9546c'; this.style.color='#ffffff';\" style=\"border-color:#000000; color:#000000;\" class=\"vc_general vc_btn3 vc_btn3-size-md vc_btn3-shape-rounded vc_btn3-style-outline-custom\" href=\"http://demo04.gethomey.io/half-map/\" title=\"\">Encuentra más habitaciones para rentar</a></div>

                                        <div style=\"clear:both; width:100%; height:30px\"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                      
\t\t\t\t\t\t<div class=\"vc_row-full-width vc_clearfix\"></div>
                            <div class=\"wpb_column vc_column_container vc_col-sm-12\">
                                <div class=\"vc_column-inner\">
\t\t\t\t\t\t\t\t\t<div style=\"clear:both; width:100%; height:50px\"></div>
                                        <div class=\"homey-module module-title section-title-module text-center \">
                                            <h2 style=\"font-size: 32px; line-height: 42px;\">Descubre habitaciones en estas Zonas</h2>                                         
                                        </div>
\t\t\t\t\t\t\t\t<!--Carousel Wrapper-->
\t\t\t\t\t\t\t\t\t<div id=\"carousel-example-2\" class=\"carousel slide\" data-ride=\"carousel\">
\t\t\t\t\t\t\t\t\t  <!--Indicators-->
\t\t\t\t\t\t\t\t\t  <ol class=\"carousel-indicators\">
\t\t\t\t\t\t\t\t\t\t<li data-target=\"#carousel-example-2\" data-slide-to=\"0\" class=\"active\"></li>
\t\t\t\t\t\t\t\t\t\t<li data-target=\"#carousel-example-2\" data-slide-to=\"1\"></li>
\t\t\t\t\t\t\t\t\t\t<li data-target=\"#carousel-example-2\" data-slide-to=\"2\"></li>
\t\t\t\t\t\t\t\t\t  </ol>
\t\t\t\t\t\t\t\t\t  <!--/.Indicators-->
\t\t\t\t\t\t\t\t\t  <!--Slides-->
\t\t\t\t\t\t\t\t\t  <div class=\"carousel-inner\" role=\"listbox\">
\t\t\t\t\t\t\t\t\t\t<div class=\"carousel-item active\">
\t\t\t\t\t\t\t\t\t\t  <div class=\"view\">
\t\t\t\t\t\t\t\t\t\t\t<img class=\"d-block w-100\" src=\"assets/images/zonas/elpilar.jpg\"
\t\t\t\t\t\t\t\t\t\t\t  alt=\"First slide\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"mask rgba-black-light\"></div>
\t\t\t\t\t\t\t\t\t\t  </div>
\t\t\t\t\t\t\t\t\t\t  <div class=\"carousel-caption\">
\t\t\t\t\t\t\t\t\t\t\t<h1 class=\"h1-responsive\">El pilar</h1>
\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t  </div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"carousel-item\">
\t\t\t\t\t\t\t\t\t\t  <!--Mask color-->
\t\t\t\t\t\t\t\t\t\t  <div class=\"view\">
\t\t\t\t\t\t\t\t\t\t\t<img class=\"d-block w-100\" src=\"assets/images/zonas/benimacle.jpg\"
\t\t\t\t\t\t\t\t\t\t\t  alt=\"Second slide\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"mask rgba-black-strong\"></div>
\t\t\t\t\t\t\t\t\t\t  </div>
\t\t\t\t\t\t\t\t\t\t  <div class=\"carousel-caption\">
\t\t\t\t\t\t\t\t\t\t\t<h1 class=\"h1-responsive\">Benimacle</h1>
\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t  </div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"carousel-item\">
\t\t\t\t\t\t\t\t\t\t  <!--Mask color-->
\t\t\t\t\t\t\t\t\t\t  <div class=\"view\">
\t\t\t\t\t\t\t\t\t\t\t<img class=\"d-block w-100\" src=\"assets/images/zonas/centro.jpg\"
\t\t\t\t\t\t\t\t\t\t\t  alt=\"Third slide\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"mask rgba-black-slight\"></div>
\t\t\t\t\t\t\t\t\t\t  </div>
\t\t\t\t\t\t\t\t\t\t  <div class=\"carousel-caption\">
\t\t\t\t\t\t\t\t\t\t\t<h1 class=\"h1-responsive\">Centro</h1>\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t  </div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t  </div>
\t\t\t\t\t\t\t\t\t  <!--/.Slides-->
\t\t\t\t\t\t\t\t\t  <!--Controls-->
\t\t\t\t\t\t\t\t\t  <a class=\"carousel-control-prev\" href=\"#carousel-example-2\" role=\"button\" data-slide=\"prev\">
\t\t\t\t\t\t\t\t\t\t<span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>
\t\t\t\t\t\t\t\t\t\t<span class=\"sr-only\">Previous</span>
\t\t\t\t\t\t\t\t\t  </a>
\t\t\t\t\t\t\t\t\t  <a class=\"carousel-control-next\" href=\"#carousel-example-2\" role=\"button\" data-slide=\"next\">
\t\t\t\t\t\t\t\t\t\t<span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
\t\t\t\t\t\t\t\t\t\t<span class=\"sr-only\">Next</span>
\t\t\t\t\t\t\t\t\t  </a>
\t\t\t\t\t\t\t\t\t  <!--/.Controls-->
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<!--/.Carousel Wrapper-->
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t</div>
                            </div>
                        </div>
                        
                        <div class=\"vc_row-full-width vc_clearfix\"></div>

                    </div>
                    <!-- col-xs-12 col-sm-12 col-md-8 col-lg-8 -->
                </div>
                <!-- .row -->
            </div>
            <!-- .container -->

        </section>
        <!-- main-content-area listing-page grid-listing-page -->

    <!-- Fin de la seccion body -->
 <!-- ************************************************************************************************************************** -->
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "home/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  411 => 321,  387 => 300,  362 => 278,  338 => 257,  83 => 4,  74 => 3,  57 => 2,  27 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
{% block title %}{% endblock %}
{% block body %}
    <!-- Seccion boody -->

    <div id=\"section-body\">

        <section class=\"top-banner-wrap top-banner-sr\">

            <div id=\"rev_slider_1_1_wrapper\" class=\"rev_slider_wrapper fullwidthbanner-container\" data-source=\"gallery\" style=\"margin:0px auto;background:transparent;padding:0px;margin-top:0px;margin-bottom:0px;\">
                <!-- START REVOLUTION SLIDER 5.4.8.2 fullwidth mode -->
                <div id=\"rev_slider_1_1\" class=\"rev_slider fullwidthabanner\" style=\"display:none;\" data-version=\"5.4.8.2\">
                    <ul>
                        <!-- SLIDE  -->
                        <li data-index=\"rs-1\" data-transition=\"fade\" data-slotamount=\"default\" data-hideafterloop=\"0\" data-hideslideonmobile=\"off\" data-easein=\"default\" data-easeout=\"default\" data-masterspeed=\"300\" data-rotate=\"0\" data-saveperformance=\"off\" data-title=\"Slide\" data-param1=\"\" data-param2=\"\" data-param3=\"\" data-param4=\"\" data-param5=\"\" data-param6=\"\" data-param7=\"\" data-param8=\"\" data-param9=\"\" data-param10=\"\" data-description=\"\">
                            <!-- MAIN IMAGE -->
                            <img src=\"assets/images/39-2.jpg\" alt=\"\" title=\"39-2\" width=\"1440\" height=\"960\" data-bgposition=\"center center\" data-bgfit=\"cover\" data-bgrepeat=\"no-repeat\" class=\"rev-slidebg\" data-no-retina>
                            <!-- LAYERS -->

                            <!-- LAYER NR. 1 -->
                            <div class=\"tp-caption tp-shape tp-shapewrapper  tp-resizeme\" id=\"slide-1-layer-3\" data-x=\"['center','center','center','center']\" data-hoffset=\"['0','0','0','0']\" data-y=\"['middle','middle','middle','middle']\" data-voffset=\"['0','0','0','0']\" data-width=\"5000\" data-height=\"3000\" data-whitespace=\"nowrap\" data-type=\"shape\" data-responsive_offset=\"on\" data-frames='[{\"delay\":10,\"speed\":300,\"frame\":\"0\",\"from\":\"opacity:0;\",\"to\":\"o:1;\",\"ease\":\"Power3.easeInOut\"},{\"delay\":\"wait\",\"speed\":300,\"frame\":\"999\",\"to\":\"opacity:0;\",\"ease\":\"Power3.easeInOut\"}]' data-textAlign=\"['inherit','inherit','inherit','inherit']\" data-paddingtop=\"[0,0,0,0]\" data-paddingright=\"[0,0,0,0]\" data-paddingbottom=\"[0,0,0,0]\" data-paddingleft=\"[0,0,0,0]\" style=\"z-index: 5;background-color:rgba(0,0,0,0.25);\"> </div>
                        </li>
                        <!-- SLIDE  -->
                        <li data-index=\"rs-5\" data-transition=\"fade\" data-slotamount=\"default\" data-hideafterloop=\"0\" data-hideslideonmobile=\"off\" data-easein=\"default\" data-easeout=\"default\" data-masterspeed=\"300\" data-rotate=\"0\" data-saveperformance=\"off\" data-title=\"Slide\" data-param1=\"\" data-param2=\"\" data-param3=\"\" data-param4=\"\" data-param5=\"\" data-param6=\"\" data-param7=\"\" data-param8=\"\" data-param9=\"\" data-param10=\"\" data-description=\"\">
                            <!-- MAIN IMAGE -->
                            <img src=\"assets/images/19.jpg\" alt=\"\" title=\"19\" width=\"1440\" height=\"960\" data-bgposition=\"center center\" data-bgfit=\"cover\" data-bgrepeat=\"no-repeat\" class=\"rev-slidebg\" data-no-retina>
                            <!-- LAYERS -->

                            <!-- LAYER NR. 2 -->
                            <div class=\"tp-caption tp-shape tp-shapewrapper  tp-resizeme\" id=\"slide-5-layer-3\" data-x=\"['center','center','center','center']\" data-hoffset=\"['0','0','0','0']\" data-y=\"['middle','middle','middle','middle']\" data-voffset=\"['0','0','0','0']\" data-width=\"5000\" data-height=\"3000\" data-whitespace=\"nowrap\" data-type=\"shape\" data-responsive_offset=\"on\" data-frames='[{\"delay\":10,\"speed\":300,\"frame\":\"0\",\"from\":\"opacity:0;\",\"to\":\"o:1;\",\"ease\":\"Power3.easeInOut\"},{\"delay\":\"wait\",\"speed\":300,\"frame\":\"999\",\"to\":\"opacity:0;\",\"ease\":\"Power3.easeInOut\"}]' data-textAlign=\"['inherit','inherit','inherit','inherit']\" data-paddingtop=\"[0,0,0,0]\" data-paddingright=\"[0,0,0,0]\" data-paddingbottom=\"[0,0,0,0]\" data-paddingleft=\"[0,0,0,0]\" style=\"z-index: 5;background-color:rgba(0,0,0,0.25);\"> </div>
                        </li>
                        <!-- SLIDE  -->
                        <li data-index=\"rs-4\" data-transition=\"fade\" data-slotamount=\"default\" data-hideafterloop=\"0\" data-hideslideonmobile=\"off\" data-easein=\"default\" data-easeout=\"default\" data-masterspeed=\"300\" data-rotate=\"0\" data-saveperformance=\"off\" data-title=\"Slide\" data-param1=\"\" data-param2=\"\" data-param3=\"\" data-param4=\"\" data-param5=\"\" data-param6=\"\" data-param7=\"\" data-param8=\"\" data-param9=\"\" data-param10=\"\" data-description=\"\">
                            <!-- MAIN IMAGE -->
                            <img src=\"assets/images/33-3.jpg\" alt=\"\" title=\"33-3\" width=\"1440\" height=\"960\" data-bgposition=\"center center\" data-bgfit=\"cover\" data-bgrepeat=\"no-repeat\" class=\"rev-slidebg\" data-no-retina>
                            <!-- LAYERS -->

                            <!-- LAYER NR. 3 -->
                            <div class=\"tp-caption tp-shape tp-shapewrapper  tp-resizeme\" id=\"slide-4-layer-3\" data-x=\"['center','center','center','center']\" data-hoffset=\"['0','0','0','0']\" data-y=\"['middle','middle','middle','middle']\" data-voffset=\"['0','0','0','0']\" data-width=\"5000\" data-height=\"3000\" data-whitespace=\"nowrap\" data-type=\"shape\" data-responsive_offset=\"on\" data-frames='[{\"delay\":10,\"speed\":300,\"frame\":\"0\",\"from\":\"opacity:0;\",\"to\":\"o:1;\",\"ease\":\"Power3.easeInOut\"},{\"delay\":\"wait\",\"speed\":300,\"frame\":\"999\",\"to\":\"opacity:0;\",\"ease\":\"Power3.easeInOut\"}]' data-textAlign=\"['inherit','inherit','inherit','inherit']\" data-paddingtop=\"[0,0,0,0]\" data-paddingright=\"[0,0,0,0]\" data-paddingbottom=\"[0,0,0,0]\" data-paddingleft=\"[0,0,0,0]\" style=\"z-index: 5;background-color:rgba(0,0,0,0.25);\"> </div>
                        </li>
                    </ul>
                    <div class=\"tp-bannertimer tp-bottom\" style=\"height: 5px; background: rgba(241,94,117,1);\"></div>
                </div>
                <script>
                    var htmlDiv = document.getElementById(\"rs-plugin-settings-inline-css\");
                    var htmlDivCss = \"\";
                    if (htmlDiv) {
                        htmlDiv.innerHTML = htmlDiv.innerHTML + htmlDivCss;
                    } else {
                        var htmlDiv = document.createElement(\"div\");
                        htmlDiv.innerHTML = \"<style>\" + htmlDivCss + \"</style>\";
                        document.getElementsByTagName(\"head\")[0].appendChild(htmlDiv.childNodes[0]);
                    }
                </script>
                <script type=\"text/javascript\">
                    if (setREVStartSize !== undefined) setREVStartSize({
                        c: '#rev_slider_1_1',
                        responsiveLevels: [1240, 1024, 778, 480],
                        gridwidth: [1240, 1024, 778, 480],
                        gridheight: [700, 768, 960, 720],
                        sliderLayout: 'fullwidth'
                    });

                    var revapi1,
                        tpj;
                    (function() {
                        if (!/loaded|interactive|complete/.test(document.readyState)) document.addEventListener(\"DOMContentLoaded\", onLoad);
                        else onLoad();

                        function onLoad() {
                            if (tpj === undefined) {
                                tpj = jQuery;
                                if (\"off\" == \"on\") tpj.noConflict();
                            }
                            if (tpj(\"#rev_slider_1_1\").revolution == undefined) {
                                revslider_showDoubleJqueryError(\"#rev_slider_1_1\");
                            } else {
                                revapi1 = tpj(\"#rev_slider_1_1\").show().revolution({
                                    sliderType: \"standard\",
                                    jsFileLocation: \"js\",
                                    sliderLayout: \"fullwidth\",
                                    dottedOverlay: \"none\",
                                    delay: 9000,
                                    navigation: {
                                        onHoverStop: \"off\",
                                    },
                                    responsiveLevels: [1240, 1024, 778, 480],
                                    visibilityLevels: [1240, 1024, 778, 480],
                                    gridwidth: [1240, 1024, 778, 480],
                                    gridheight: [700, 768, 960, 720],
                                    lazyType: \"none\",
                                    shadow: 0,
                                    spinner: \"spinner0\",
                                    stopLoop: \"off\",
                                    stopAfterLoops: -1,
                                    stopAtSlide: -1,
                                    shuffle: \"off\",
                                    autoHeight: \"off\",
                                    hideThumbsOnMobile: \"off\",
                                    hideSliderAtLimit: 0,
                                    hideCaptionAtLimit: 0,
                                    hideAllCaptionAtLilmit: 0,
                                    debugMode: false,
                                    fallbacks: {
                                        simplifyAll: \"off\",
                                        nextSlideOnWindowFocus: \"off\",
                                        disableFocusListener: false,
                                    }
                                });
                            }; /* END OF revapi call */

                        }; /* END OF ON LOAD FUNCTION */
                    }()); /* END OF WRAPPING FUNCTION */
                </script>
            </div>
            <!-- END REVOLUTION SLIDER -->
            <div class=\"banner-caption banner-caption-side-search\">
                <div class=\"side-search-wrap\">
\t\t\t\t\t<h2 class=\"banner-title\" style=\"color: rgb(241, 94, 117);\">Helloflatmate</h2>
                    <h2 class=\"banner-title\">Reserva Lugares Asombrosos</h2>
                    <p class=\"banner-subtitle\">Con helloflatmate tu experiencia será única</p>
                    <div class=\"search-wrap search-banner search-banner-desktop side-search hidden-xs\">
                        <form class=\"clearfix\" action=\"search-results/\" method=\"GET\">

                            <div class=\"search-destination clearfix\">
                                <label class=\"animated-label\">¿Donde?</label>
                                <input type=\"text\" name=\"location_search\" autocomplete=\"off\" id=\"location_search_banner\" value=\"\" class=\"form-control input-search\" placeholder=\"¿Donde?\">
                                <input type=\"hidden\" name=\"search_city\" data-value=\"\" value=\"\">
                                <input type=\"hidden\" name=\"search_area\" data-value=\"\" value=\"\">
                                <input type=\"hidden\" name=\"search_country\" data-value=\"\" value=\"\">
                                <button type=\"reset\" class=\"btn clear-input-btn\"><i class=\"fa fa-times\" aria-hidden=\"true\"></i></button>

                            </div>
                            <div class=\"search-date-range main-search-date-range-js clearfix\">
                                <div class=\"search-date-range-arrive\">
                                    <label class=\"animated-label\">Fecha de Entrada</label>
                                    <input type=\"text\" name=\"arrive\" autocomplete=\"off\" value=\"\" class=\"form-control\" placeholder=\"Fecha de Entrada\">
                                </div>
                                <div class=\"search-date-range-depart\">
                                    <label class=\"animated-label\">Fecha de Salida</label>
                                    <input type=\"text\" name=\"depart\" autocomplete=\"off\" value=\"\" class=\"form-control\" placeholder=\"Fecha de Salida\">
                                </div>

                               
                                </div>
                                <!-- On mobile: display this button below when  the user selected arrival and depart dates -->
                                <button style=\"display: none;\" class=\"btn btn-primary search-calendar-btn\">Hecho</button>
                            </div>
\t\t\t\t\t\t\t<br>
                            <div class=\"search-guests search-guests-js clearfix\">
                                <label class=\"animated-label\"></label>
                                <input type=\"text\" name=\"guest\" autocomplete=\"off\" value=\"\" class=\"form-control\" placeholder=\"huesped\">
                                <div class=\"search-guests-wrap search-guests-wrap-js clearfix\">
                                    <input type=\"hidden\" class=\"search_adult_guest\" value=\"0\">
                                    <input type=\"hidden\" class=\"search_child_guest\" value=\"0\">
                                    <div class=\"adults-calculator\">
                                        <span class=\"quantity-calculator search_homey_adult\">0</span>
                                        <span class=\"calculator-label\">Adulto</span>
                                        <button class=\"search_adult_plus btn btn-secondary-outlined\" type=\"button\"><i class=\"fa fa-plus\" aria-hidden=\"true\"></i></button>
                                        <button class=\"search_adult_minus btn btn-secondary-outlined\" type=\"button\"><i class=\"fa fa-minus\" aria-hidden=\"true\"></i></button>
                                    </div>

                                    <div class=\"children-calculator\">
                                        <span class=\"quantity-calculator search_homey_child\">0</span>
                                        <span class=\"calculator-label\">Niños</span>
                                        <button class=\"search_child_plus btn btn-secondary-outlined\" type=\"button\"><i class=\"fa fa-plus\" aria-hidden=\"true\"></i></button>
                                        <button class=\"search_child_minus btn btn-secondary-outlined\" type=\"button\"><i class=\"fa fa-minus\" aria-hidden=\"true\"></i></button>
                                    </div>
                                    <div class=\"pets-calculator\">
                                        <span class=\"calculator-label\">Mascotas</span>
                                        <div class=\"pets-calculator-control-wrap\">
                                            <label class=\"control control--radio radio-tab\">
                                                <input type=\"radio\" name=\"pets\" value=\"1\">
                                                <span class=\"control-text\">Si</span>
                                                <span class=\"control__indicator\"></span>
                                                <span class=\"radio-tab-inner\"></span>
                                            </label>
                                            <label class=\"control control--radio radio-tab\">
                                                <input type=\"radio\" name=\"pets\" value=\"0\">
                                                <span class=\"control-text\">No</span>
                                                <span class=\"control__indicator\"></span>
                                                <span class=\"radio-tab-inner\"></span>
                                            </label>
                                        </div>
                                    </div>
                                    <!-- pets-calculator -->
                                    <div class=\"guest-apply-btn\">
                                        <button class=\"btn btn-info\" type=\"button\">Hecho</button>
                                    </div>
                                    <!-- guest-apply-btn -->
                                </div>
                                <!-- search-guests -->
                            </div>
\t\t\t\t\t\t\t<br>
                            <div class=\"search-button clearfix\">
                                <button type=\"submit\" class=\"btn\">Buscar</button>
                            </div>
                        </form>
                    </div>
                    <!-- search-wrap -->

                    <div class=\"search-wrap search-banner search-banner-mobile\">
                        <form class=\"clearfix\">
                            <div class=\"search-destination\">
                                <input value=\"\" type=\"text\" class=\"form-control\" placeholder=\"Where to go?\" onfocus=\"blur();\">
                            </div>
                        </form>
                    </div>
                    <!-- search-wrap -->

                </div>
            </div>
            <!-- banner-caption -->

        </section>
        <!-- header-parallax -->




 <!-- footer-bottom-wrap -->
        <section class=\"top-banner-wrap top-banner-sr\">
          <section class=\"main-content-area listing-page listing-page-full-width\">
            <div class=\"container\">
                <div class=\"row\" >
                    <div class=\"col-xs-12 col-sm-12 col-md-12 col-lg-12\">
\t\t\t\t\t\t 
                        <div class=\"vc_row-full-width vc_clearfix\"></div>
                        <div data-vc-full-width=\"true\" data-vc-full-width-init=\"false\" class=\"vc_row wpb_row vc_row-fluid\" >
                            <div class=\"wpb_column vc_column_container vc_col-sm-12\">
                                <div class=\"vc_column-inner\">
                                    <div class=\"wpb_wrapper\">
                                        <div style=\"clear:both; width:100%; height:50px\"></div>
                                        <div class=\"homey-module module-title section-title-module text-center \">
                                            <h2 style=\"font-size: 32px; line-height: 42px;\"> Como funcionamos</h2>

                                            
                                        </div>
                                        <div style=\"clear:both; width:100%; height:30px\"></div>
                                        <div class=\"module-wrap property-module-grid property-module-grid-slider property-module-grid-slider-4cols\">
                                            <div class=\"listing-wrap item-grid-view\">
                                                <div class=\"row\">
                <div class=\"col-md-3\">
                    <div class=\"card-box-c foo\">
                        <div class=\"card-header-c margin-box\" style=\"text-align: center\">
                            <div class=\"car-icon-box\">
                                <span class=\"fa fa- fa-map-marker\"></span>
                            </div>
                        </div>
                        <div class=\"card-body-c\">
                            <p class=\"content-c\">
                            <h2 class=\"\" style=\"text-align: center\">Encuentra</h2>
                            <p style=\"text-align: center\"> Descubre entre nuestras ofertas de habitaciones o pisos la que mejor se adapte a ti en Valencia.</p>
                            </p>
                        </div>
                        <div class=\"card-footer-c\" style=\"text-align: center\">
                            <a href=\"{{ url(\"operation\") }}\" class=\"link-c link-icon btn btn-primary\">Más Información
                                <span class=\"ion-ios-arrow-forward\"></span>
                            </a>
                        </div>
                    </div>
                </div>

                <div class=\"col-md-3\">
                    <div class=\"card-box-c foo\">
                        <div class=\"card-header-c margin-box\" style=\"text-align: center\">
                            <div class=\"car-icon-box\">
                                <span class=\"fa fa-thumbs-up\"></span>
                            </div>
                        </div>
                        <div class=\"card-body-c\">
                            <p class=\"content-c\">
                            <h2 class=\"\" style=\"text-align: center\">Fácil y Seguro</h2>
                            <p style=\"text-align: center\"> El proceso de reserva es fácil, seguro e intuitivo para conseguir tu habitacion de estudiante. </p>
                            </p>
                        </div>
                        <div class=\"card-footer-c\" style=\"text-align: center\">
                            <a href=\"{{ url(\"operation\") }}\" class=\"link-c link-icon btn btn-primary\">Más Información
                                <span class=\"ion-ios-arrow-forward\"></span>
                            </a>
                        </div>
                    </div>
                </div>

                <div class=\"col-md-3\">
                    <div class=\"card-box-c foo\">
                        <div class=\"card-header-c margin-box\" style=\"text-align: center\">
                            <div class=\"car-icon-box\">
                                <span class=\"fa fa-bed\"></span>
                            </div>
                        </div>
                        <div class=\"card-body-c\">
                            <p class=\"content-c\">
                            <h2 class=\"\" style=\"text-align: center\">Reserva</h2>
                            <p style=\"text-align: center\"> Si has visto tu habitación ideal y está disponible puesdes reservarla al momento.</p>
                            </p>
\t\t\t\t\t\t\t
                        </div>
                        <div class=\"card-footer-c\" style=\"text-align: center\">
                            <a href=\"{{ url(\"operation\") }}\" class=\"link-c link-icon btn btn-primary\">Más Información
                                <span class=\"ion-ios-arrow-forward\"></span>
                            </a>
                        </div>
                    </div>
                </div>

                <div class=\"col-md-3\">
                    <div class=\"card-box-c foo\">
                        <div class=\"card-header-c margin-box\" style=\"text-align: center\">
                            <div class=\"car-icon-box\">
                                <span class=\"fa fa-bookmark\"></span>
                            </div>
                        </div>
                        <div class=\"card-body-c\">
                            <p class=\"content-c\">
                            <h2 class=\"\" style=\"text-align: center\">Contrato</h2>
                            <p style=\"text-align: center\"> Contrato justo que defiende obligaciones y derechos tanto del propietario como del inquilino.</p>
                            </p>
                        </div>
                        <div class=\"card-footer-c\" style=\"text-align: center\">
                            <a href=\"{{ url(\"operation\") }}\" class=\"link-c link-icon btn btn-primary\">Más Información
                                <span class=\"ion-ios-arrow-forward\"></span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
\t\t
                                            <!-- grid-listing-page -->
                                        </div>

                                        <div style=\"clear:both; width:100%; height:30px\"></div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        
                        <div class=\"vc_row-full-width vc_clearfix\"></div>
                        <div data-vc-full-width=\"true\" data-vc-full-width-init=\"false\" class=\"vc_row wpb_row vc_row-fluid vc_custom_1539966302417 vc_row-has-fill\">
                            <div class=\"wpb_column vc_column_container vc_col-sm-12\">
                                <div class=\"vc_column-inner\">
                                    <div class=\"wpb_wrapper\">
                                        <div style=\"clear:both; width:100%; height:50px\"></div>
                                        <div class=\"homey-module module-title section-title-module text-center \">
                                            <h2 style=\"font-size: 32px; line-height: 42px;\">Te Aseguramos Confort y Calidad</h2>

                                            
                                        </div>
                                        <div style=\"clear:both; width:100%; height:30px\"></div>
                                        <div class=\"module-wrap taxonomy-grid taxonomy-grid-4\">
                                            <div class=\"row\">

                                                <div class=\"col-sm-3 col-xs-6\">
                                                    <div class=\"taxonomy-item taxonomy-card\">
                                                        <a class=\"taxonomy-link hover-effect\" href=\"city/los-angeles/\">
                                                            <div class=\"taxonomy-title\">Casa 1
                                                                
                                                                
                                                            </div>
                                                            <img class=\"img-responsive\" src=\"assets/images/fotos/h4-2.jpg\" width=\"360\" height=\"360\" alt=\"listing_city\">
                                                        </a>
                                                    </div>
                                                </div>

                                                <div class=\"col-sm-3 col-xs-6\">
                                                    <div class=\"taxonomy-item taxonomy-card\">
                                                        <a class=\"taxonomy-link hover-effect\" href=\"city/miami/\">
                                                            <div class=\"taxonomy-title\"> 
                                                               Casa 2
                                                                
                                                               
                                                            </div>
                                                            <img class=\"img-responsive\" src=\"assets/images/fotos/h4-9.jpg\" width=\"360\" height=\"360\" alt=\"listing_city\">
                                                        </a>
                                                    </div>
                                                </div>

                                                <div class=\"col-sm-3 col-xs-6\">
                                                    <div class=\"taxonomy-item taxonomy-card\">
                                                        <a class=\"taxonomy-link hover-effect\" href=\"city/new-york/\">

                                                            <div class=\"taxonomy-title\">
                                                                Casa 3
                                                                
                                                                
                                                            </div>

                                                            <img class=\"img-responsive\" src=\"assets/images/fotos/h1-1.jpg\" width=\"360\" height=\"360\" alt=\"listing_city\">
                                                        </a>
                                                    </div>
                                                </div>

                                                <div class=\"col-sm-3 col-xs-6\">
                                                    <div class=\"taxonomy-item taxonomy-card\">
                                                        <a class=\"taxonomy-link hover-effect\" href=\"city/san-francisco/\">
                                                            <div class=\"taxonomy-title\"> Casa 4
                                                                

                                                            </div>
                                                            <img class=\"img-responsive\" src=\"assets/images/fotos/h3-10.jpg\" width=\"360\" height=\"360\" alt=\"listing_city\">
                                                        </a>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>

                                        <div class=\"vc_btn3-container  btn vc_btn3-center vc_custom_1541795485231\">
                                            <a onmouseleave=\"this.style.borderColor='#000000'; this.style.backgroundColor='transparent'; this.style.color='#000000'\" onmouseenter=\"this.style.borderColor='#d9546c'; this.style.backgroundColor='#d9546c'; this.style.color='#ffffff';\" style=\"border-color:#000000; color:#000000;\" class=\"vc_general vc_btn3 vc_btn3-size-md vc_btn3-shape-rounded vc_btn3-style-outline-custom\" href=\"http://demo04.gethomey.io/half-map/\" title=\"\">Encuentra más habitaciones para rentar</a></div>

                                        <div style=\"clear:both; width:100%; height:30px\"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                      
\t\t\t\t\t\t<div class=\"vc_row-full-width vc_clearfix\"></div>
                            <div class=\"wpb_column vc_column_container vc_col-sm-12\">
                                <div class=\"vc_column-inner\">
\t\t\t\t\t\t\t\t\t<div style=\"clear:both; width:100%; height:50px\"></div>
                                        <div class=\"homey-module module-title section-title-module text-center \">
                                            <h2 style=\"font-size: 32px; line-height: 42px;\">Descubre habitaciones en estas Zonas</h2>                                         
                                        </div>
\t\t\t\t\t\t\t\t<!--Carousel Wrapper-->
\t\t\t\t\t\t\t\t\t<div id=\"carousel-example-2\" class=\"carousel slide\" data-ride=\"carousel\">
\t\t\t\t\t\t\t\t\t  <!--Indicators-->
\t\t\t\t\t\t\t\t\t  <ol class=\"carousel-indicators\">
\t\t\t\t\t\t\t\t\t\t<li data-target=\"#carousel-example-2\" data-slide-to=\"0\" class=\"active\"></li>
\t\t\t\t\t\t\t\t\t\t<li data-target=\"#carousel-example-2\" data-slide-to=\"1\"></li>
\t\t\t\t\t\t\t\t\t\t<li data-target=\"#carousel-example-2\" data-slide-to=\"2\"></li>
\t\t\t\t\t\t\t\t\t  </ol>
\t\t\t\t\t\t\t\t\t  <!--/.Indicators-->
\t\t\t\t\t\t\t\t\t  <!--Slides-->
\t\t\t\t\t\t\t\t\t  <div class=\"carousel-inner\" role=\"listbox\">
\t\t\t\t\t\t\t\t\t\t<div class=\"carousel-item active\">
\t\t\t\t\t\t\t\t\t\t  <div class=\"view\">
\t\t\t\t\t\t\t\t\t\t\t<img class=\"d-block w-100\" src=\"assets/images/zonas/elpilar.jpg\"
\t\t\t\t\t\t\t\t\t\t\t  alt=\"First slide\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"mask rgba-black-light\"></div>
\t\t\t\t\t\t\t\t\t\t  </div>
\t\t\t\t\t\t\t\t\t\t  <div class=\"carousel-caption\">
\t\t\t\t\t\t\t\t\t\t\t<h1 class=\"h1-responsive\">El pilar</h1>
\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t  </div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"carousel-item\">
\t\t\t\t\t\t\t\t\t\t  <!--Mask color-->
\t\t\t\t\t\t\t\t\t\t  <div class=\"view\">
\t\t\t\t\t\t\t\t\t\t\t<img class=\"d-block w-100\" src=\"assets/images/zonas/benimacle.jpg\"
\t\t\t\t\t\t\t\t\t\t\t  alt=\"Second slide\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"mask rgba-black-strong\"></div>
\t\t\t\t\t\t\t\t\t\t  </div>
\t\t\t\t\t\t\t\t\t\t  <div class=\"carousel-caption\">
\t\t\t\t\t\t\t\t\t\t\t<h1 class=\"h1-responsive\">Benimacle</h1>
\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t  </div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"carousel-item\">
\t\t\t\t\t\t\t\t\t\t  <!--Mask color-->
\t\t\t\t\t\t\t\t\t\t  <div class=\"view\">
\t\t\t\t\t\t\t\t\t\t\t<img class=\"d-block w-100\" src=\"assets/images/zonas/centro.jpg\"
\t\t\t\t\t\t\t\t\t\t\t  alt=\"Third slide\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"mask rgba-black-slight\"></div>
\t\t\t\t\t\t\t\t\t\t  </div>
\t\t\t\t\t\t\t\t\t\t  <div class=\"carousel-caption\">
\t\t\t\t\t\t\t\t\t\t\t<h1 class=\"h1-responsive\">Centro</h1>\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t  </div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t  </div>
\t\t\t\t\t\t\t\t\t  <!--/.Slides-->
\t\t\t\t\t\t\t\t\t  <!--Controls-->
\t\t\t\t\t\t\t\t\t  <a class=\"carousel-control-prev\" href=\"#carousel-example-2\" role=\"button\" data-slide=\"prev\">
\t\t\t\t\t\t\t\t\t\t<span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>
\t\t\t\t\t\t\t\t\t\t<span class=\"sr-only\">Previous</span>
\t\t\t\t\t\t\t\t\t  </a>
\t\t\t\t\t\t\t\t\t  <a class=\"carousel-control-next\" href=\"#carousel-example-2\" role=\"button\" data-slide=\"next\">
\t\t\t\t\t\t\t\t\t\t<span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
\t\t\t\t\t\t\t\t\t\t<span class=\"sr-only\">Next</span>
\t\t\t\t\t\t\t\t\t  </a>
\t\t\t\t\t\t\t\t\t  <!--/.Controls-->
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<!--/.Carousel Wrapper-->
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t</div>
                            </div>
                        </div>
                        
                        <div class=\"vc_row-full-width vc_clearfix\"></div>

                    </div>
                    <!-- col-xs-12 col-sm-12 col-md-8 col-lg-8 -->
                </div>
                <!-- .row -->
            </div>
            <!-- .container -->

        </section>
        <!-- main-content-area listing-page grid-listing-page -->

    <!-- Fin de la seccion body -->
 <!-- ************************************************************************************************************************** -->
{% endblock %}", "home/index.html.twig", "C:\\xampp\\htdocs\\HelloFlatmate\\templates\\home\\index.html.twig");
    }
}
