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

/* base.html.twig */
class __TwigTemplate_0a730291a76a6fb2473e8c6370191722bcdaa1c6140cc45d8539c138d11a76c3 extends \Twig\Template
{
    private $source;

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <meta content=\"width=device-width, initial-scale=1.0\" name=\"viewport\">
    <meta content=\"\" name=\"keywords\">
    <meta content=\"\" name=\"description\">

    <title>";
        // line 9
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    ";
        // line 10
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 46
        echo "    
    <script src=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/jquery.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/jquery-migrate.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/jquery.themepunch.tools.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/jquery.themepunch.revolution.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 51
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/infobox_packed.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 52
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/revolution.extension.slideanims.min.js"), "html", null, true);
        echo "\"></script>
\t
\t<script src=\"";
        // line 54
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/bootstrap/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
\t
    <script src=\"";
        // line 56
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/revolution.extension.layeranimation.min.js"), "html", null, true);
        echo "\"></script>

    <!-- Favicon -->
    <link rel=\"shortcut icon\" href=\"assets/images/icon-fav.png\">
    <!-- Apple iPhone Icon -->
    <!--[if lte IE 9]>
    <link rel=\"stylesheet\" type=\"text/css\" href=\"//89239-661579-raikfcquaxqncofqfm.stackpathdns.com/wp-content/plugins/js_composer/assets/css/vc_lte_ie9.min.css\" media=\"screen\"><![endif]-->
    <script type=\"text/javascript\">
        function setREVStartSize(e) {
            try {
                e.c = jQuery(e.c);
                var i = jQuery(window).width(),
                    t = 9999,
                    r = 0,
                    n = 0,
                    l = 0,
                    f = 0,
                    s = 0,
                    h = 0;
                if (e.responsiveLevels && (jQuery.each(e.responsiveLevels, function(e, f) {
                        f > i && (t = r = f, l = e), i > f && f > r && (r = f, n = e)
                    }), t > r && (l = n)), f = e.gridheight[l] || e.gridheight[0] || e.gridheight, s = e.gridwidth[l] || e.gridwidth[0] || e.gridwidth, h = i / s, h = h > 1 ? 1 : h, f = Math.round(h * f), \"fullscreen\" == e.sliderLayout) {
                    var u = (e.c.width(), jQuery(window).height());
                    if (void 0 != e.fullScreenOffsetContainer) {
                        var c = e.fullScreenOffsetContainer.split(\",\");
                        if (c) jQuery.each(c, function(e, i) {
                            u = jQuery(i).length > 0 ? u - jQuery(i).outerHeight(!0) : u
                        }), e.fullScreenOffset.split(\"%\").length > 1 && void 0 != e.fullScreenOffset && e.fullScreenOffset.length > 0 ? u -= jQuery(window).height() * parseInt(e.fullScreenOffset, 0) / 100 : void 0 != e.fullScreenOffset && e.fullScreenOffset.length > 0 && (u -= parseInt(e.fullScreenOffset, 0))
                    }
                    f = u
                } else void 0 != e.minHeight && f < e.minHeight && (f = e.minHeight);
                e.c.closest(\".rev_slider_wrapper\").css({
                    height: f
                })
            } catch (d) {
                console.log(\"Failure at Presize of Slider:\" + d)
            }
        };
    </script>
    
</head>
<body class=\"home page-template page-template-template page-template-template-homepage page-template-templatetemplate-homepage-php page page-id-493 compare-property-active side-nav-active wpb-js-composer js-comp-ver-5.7 vc_responsive\">
    ";
        // line 99
        echo "        <!-- Modal -->
    ";
        // line 162
        echo "        <div class=\"modal fade\" id=\"modal-login\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">
            <div class=\"modal-dialog box-register\" role=\"document\">
                <div class=\"modal-content\">
                    <div class=\"modal-header\">
                        <h5 class=\"modal-title\" id=\"exampleModalLabel\">Iniciar Sesión</h5>
                        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                            <span aria-hidden=\"true\">&times;</span>
                        </button>
                    </div>
                    <div class=\"modal-body\">
                        <button type=\"button\" class=\"btn btn-facebook\"><span class=\"fa fa-facebook-official\"></span> Seguir con Facebook</button>
                        <button type=\"button\" class=\"btn btn-google\"><span class=\"fa fa-google\"></span> Seguir con Google</button>

                        <hr>

                        <div style=\"padding-left: 5px;padding-right: 5px\">
                            <form>
                                <div class=\"form-group\">
                                    <label for=\"recipient-name\" class=\"col-form-label\">Correo</label>
                                    <input type=\"text\" style=\"border-radius: 0px\" class=\"form-control\" id=\"recipient-name\" placeholder=\"Correo\">
                                </div>

                                <div class=\"form-group\">
                                    <label for=\"recipient-name\" class=\"col-form-label\">Contraseña</label>
                                    <input type=\"password\" style=\"border-radius: 0px\" class=\"form-control\" id=\"recipient-name\" placeholder=\"Contraseña\">
                                </div>

                                <div class=\"modal-footer\">
                                    <div class=\"container\" style=\"text-align: center\">
                                        <button type=\"button\" class=\"btn btn-primary btn-property\">Aceptar</button>
                                        <button type=\"button\" class=\"btn btn-danger btn-property\" data-dismiss=\"modal\">Cancelar</button>
                                    </div>
                                </div>
                            </form>
                        </div>

                        <div>

                        </div>

                    </div>

                </div>
            </div>
        </div>
    <div class=\"nav-area header-type-4 transparent-header\">
        <!-- top bar -->
        <!-- desktop nav -->
        <header id=\"homey_nav_sticky\" class=\"header-nav hidden-sm hidden-xs\" data-sticky=\"1\">
            <div class=\"container-fluid\">
                <div class=\"header-inner table-block\">
                    <div class=\"header-comp-logo\">
                    <h1><a  href=\"#\">
\t\t\t\t\t<img src=\"assets/images/icon-touch.png\" alt=\"helloflatmate\" title=\"helloflatmate\">
                    </a></h1>
                </div>

                    
\t\t\t\t\t<div class=\"header-comp-right\">
                    <div class=\"account-login\">
\t\t\t\t\t\t<ul class=\"login-register list-inline\">

\t\t\t\t\t\t\t\t\t<li><a href=\"#\" data-toggle=\"modal\" data-target=\"#modal-login\"><h4>Login</h4></a></li> 
\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<li><a href=\"#\" data-toggle=\"modal\" data-target=\"#modal-register\"><h4>Register</h4></a></li>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<li><a href=\"#\" ><h4>Propietarios</h4></a></li>
\t\t\t\t\t\t\t\t\t    \t
                                <li><a href=\"";
        // line 230
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("about");
        echo "\" ><h4>Helloflatmate</h4></a></li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>                

                </div>
            </div>
        </header>
        <!-- mobile header -->
        <header class=\"header-nav header-mobile hidden-md hidden-lg\">
            <div class=\"header-mobile-wrap\">
                <div class=\"container\">
                    <div class=\"row\">
                        <div class=\"col-xs-3\">
                            <button type=\"button\" class=\"btn btn-mobile-nav\" data-toggle=\"collapse\" data-target=\"#mobile-nav\" aria-expanded=\"false\">
                                <i class=\"fa fa-bars\" aria-hidden=\"true\"></i>
                            </button>
                            <!-- btn-mobile-nav -->
                        </div>
                        <div class=\"col-xs-6\">
                            <div class=\"mobile-logo text-center\">
                                <h1>
                            <a href=\"\">
                                                                   <imgsrc=\"assets/images/icon-touch.png\" alt=\"helloflatmate\" title=\"helloflatmate\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
                        </h1>
                            </div>
                            <!-- mobile-logo -->
                        </div>
                        <div class=\"col-xs-3\">
                            <div class=\"user-menu text-right\">
                                <button type=\"button\" class=\"btn btn-mobile-nav\" data-toggle=\"collapse\" data-target=\"#user-nav\" aria-expanded=\"false\">
                                    <i class=\"fa fa-user-circle-o\" aria-hidden=\"true\"></i>
                                </button>
                            </div>
                            <!-- user-menu -->
                        </div>
                    </div>
                    <!-- row -->
                </div>
                <!-- container -->
            </div>
            <!-- header-mobile-wrap -->

            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"mobile-nav-wrap\">
                        <nav id=\"mobile-nav\" class=\"nav-dropdown main-nav-dropdown collapse navbar-collapse\">
                            <ul id=\"mobile-menu\" class=\"mobile-menu\">
                                <li id=\"menu-item-692\" class=\"menu-item menu-item-type-custom menu-item-object-custom current-menu-ancestor menu-item-has-children menu-item-692\"><a href=\"#\">Home</a>
                                    <ul class=\"sub-menu\">
                                        <li id=\"menu-item-693\" class=\"menu-item menu-item-type-custom menu-item-object-custom current-menu-ancestor current-menu-parent menu-item-has-children menu-item-693\"><a href=\"#\">Opcion 1</a>
                                            <ul class=\"sub-menu\">
                                                <li id=\"menu-item-694\" class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-493 current_page_item menu-item-694\"><a href=\"\" aria-current=\"page\">Opcion 01</a></li>
                                                <li id=\"menu-item-705\" class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-705\"><a href=\"homepage-parallax-fullscreen/\">Opcion 02</a></li>
                                            </ul>
                                        </li>
                                        <li id=\"menu-item-706\" class=\"menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-706\"><a href=\"#\">Opcion 2</a>
                                            <ul class=\"sub-menu\">
                                                <li id=\"menu-item-1818\" class=\"menu-item menu-item-type-custom menu-item-object-custom menu-item-1818\"><a href=\"homepage-map-standard/?search_position=under_banner\">Opcion 01</a></li>
                                                <li id=\"menu-item-703\" class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-703\"><a href=\"homepage-map-fullscreen/\">Opcion 02</a></li>
                                            </ul>
                                        </li>
                                      
                                </li>
                           </ul>
                        </nav>
                    </div>
                    <!-- mobile-nav-wrap -->
                </div>
            </div>
            <!-- container -->
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"user-nav-wrap\">

                        <nav id=\"user-nav\" class=\"nav-dropdown main-nav-dropdown collapse navbar-collapse\">
                            <ul>

                                <li>
                                    <a href=\"#\" data-toggle=\"modal\" data-target=\"#modal-login\">
                                        <span data-toggle=\"collapse\" data-target=\"#user-nav\">Iniciar sesión</span>
                                    </a>
                                </li>

                                <li>
                                    <a href=\"#\" data-toggle=\"modal\" data-target=\"#modal-register\">
                                        <span data-toggle=\"collapse\" data-target=\"#user-nav\">Registrate</span>
                                    </a>
                                </li>

                                <li><a href=\"become-a-host/\">Become a Host</a></li>

                            </ul>
                        </nav>
                        <!-- nav-collapse -->

                    </div>
                    <!-- mobile-nav-wrap -->
                </div>
            </div>
            <!-- container -->
        </header>
        <!-- header-nav header-mobile hidden-md hidden-lg -->
    </div>
    <div id=\"side-nav-panel\" class=\"side-nav-panel side-nav-panel-vertical side-nav-panel-left\">
        <div class=\"mobile-nav-wrap\">
            <nav id=\"mobile-nav\" class=\"nav-dropdown main-nav-dropdown\">
                <ul id=\"mobile-menu\" class=\"mobile-menu\">
                    <li class=\"menu-item menu-item-type-custom menu-item-object-custom current-menu-ancestor menu-item-has-children menu-item-692\"><a href=\"#\">Home</a>
                        <ul class=\"sub-menu\">
                            <li class=\"menu-item menu-item-type-custom menu-item-object-custom current-menu-ancestor current-menu-parent menu-item-has-children menu-item-693\"><a href=\"#\">Opcion 1</a>
                                <ul class=\"sub-menu\">
                                    <li class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-493 current_page_item menu-item-694\"><a href=\"\" aria-current=\"page\">Opcion 01</a></li>
                                    <li class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-705\"><a href=\"homepage-parallax-fullscreen/\">Opcion 02</a></li>
                                </ul>
                            </li>
                            <li class=\"menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-706\"><a href=\"#\">Opcion 2</a>
                                <ul class=\"sub-menu\">
                                    <li class=\"menu-item menu-item-type-custom menu-item-object-custom menu-item-1818\"><a href=\"homepage-map-standard/?search_position=under_banner\">Opcion 01</a></li>
                                    <li class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-703\"><a href=\"homepage-map-fullscreen/\">Opcion 02</a></li>
                                </ul>
                            </li>
                            
                        </ul>
                    </li>
               </ul>
            </nav>
        </div>
    </div>

     <!-- ************************************************************************************************************************-->

      <!-- Seccion boody -->

    <div id=\"section-body\">
\t
\t";
        // line 383
        echo "
";
        // line 384
        $this->displayBlock('body', $context, $blocks);
        // line 385
        echo "<!-- seccion footer-->
    <footer class=\"footer-wrap footer\">

        <div class=\"footer-top-wrap\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-md-3 col-sm-12 col-xs-12\">
                       <div id=\"homey_taxonomies-2\" class=\"widget footer-widget widget-categories\">
                            <div class=\"widget-top\">
                                <h3 class=\"widget-title\">Nosotros</h3></div>
                            <div class=\"widget-body\">
                                <ul class=\"list-unstyled\">
                                    <li>
                                        <a href=\"type/apartment/\">Quiénes somos</a></li>
                                    <li>
                                        <a href=\"type/bed-breakfast/\">Nuestro Equipo</a></li>
                                    <li>
                                        <a href=\"type/condo/\">Contacto</a></li>
                                    <li>
                                        <a href=\"type/house/\">Aviso Legal</a></li>
                                    
                                   
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-md-3 col-sm-12 col-xs-12\">
                        <div id=\"homey_taxonomies-2\" class=\"widget footer-widget widget-categories\">
                            <div class=\"widget-top\">
                                <h3 class=\"widget-title\">Preguntas Frecuentes</h3></div>
                            <div class=\"widget-body\">
                                <ul class=\"list-unstyled\">
                                    <li>
                                        <a href=\"type/apartment/\">Hello Habitaciones</a></li>
                                    <li>
                                        <a href=\"type/bed-breakfast/\">Hello propietarios</a></li>
                                   
                                </ul>
                            </div>
                        </div>
                    </div>
                      <div class=\"col-md-3 col-sm-12 col-xs-12\">
                        <div id=\"homey_taxonomies-2\" class=\"widget footer-widget widget-categories\">
                            <div class=\"widget-top\">
                                <h3 class=\"widget-title\">Prensa</h3></div>
                            <div class=\"widget-body\">
                                <ul class=\"list-unstyled\">
                                    <li>
                                        <a href=\"type/apartment/\">Blog</a></li>
                                    
                                   
                                </ul>
                            </div>
                        </div>
                    </div>
                      <div class=\"col-md-3 col-sm-12 col-xs-12\">
                        <div id=\"homey_taxonomies-2\" class=\"widget footer-widget widget-categories\">
                            <div class=\"widget-top\">
                                <h3 class=\"widget-title\">Contacto</h3></div>
                            <div class=\"widget-body\">
                                <ul class=\"list-unstyled\">
                                    <li>
                                        <a href=\"type/apartment/\">Contáctanos por email:</a></li>
                                        <li>
                                        <a href=\"type/apartment/\">rooms@flatmate.com</a></li>
                                         <li>
                                        <a href=\"type/apartment/\">Horarios de Apertura</a></li>
                                         <li>
                                        <a href=\"type/apartment/\">De lunes a viernes </a></li>
                                         <li>
                                        <a href=\"type/apartment/\">de 10:00 am a 18:00</a></li>
                                    
                                   
                                </ul>
                            </div>
                        </div>
                    </div>
          
                </div>
                <!-- row -->
            </div>
            <!-- container -->
        </div>
        <!-- footer-top-wrap -->

        <div class=\"footer-bottom-wrap\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-xs-12 col-sm-12 col-md-6 col-lg-6\">
                        <div class=\"footer-copyright\">
                            helloflatmate - All rights reserved - Diseñado por helloflatmate 
                        </div>
                    </div>
                    <!-- col-xs-12 col-sm-6 col-md-6 col-lg-6 -->
                    <div class=\"col-xs-12 col-sm-12 col-md-6 col-lg-6\">
                        <div class=\"social-footer\">

                            <div class=\"social-icons social-round\">

                                <a class=\"btn-bg-facebook\" target=\"_blank\" href=\"#\"><i class=\"fa fa-facebook\"></i></a>

                                <a class=\"btn-bg-twitter\" target=\"_blank\" href=\"#\"><i class=\"fa fa-twitter\"></i></a>

                                <a class=\"btn-bg-linkedin\" target=\"_blank\" href=\"#\"><i class=\"fa fa-linkedin\"></i></a>

                                <a class=\"btn-bg-google-plus\" target=\"_blank\" href=\"#\"><i class=\"fa fa-google-plus\"></i></a>

                                <a class=\"btn-bg-instagram\" target=\"_blank\" href=\"#\"><i class=\"fa fa-instagram\"></i></a>

                                <a class=\"btn-bg-pinterest\" target=\"_blank\" href=\"#\"><i class=\"fa fa-pinterest\"></i></a>

                                <a class=\"btn-bg-youtube\" target=\"_blank\" href=\"#\"><i class=\"fa fa-youtube\"></i></a>

                            </div>
                        </div>
                    </div>
                    <!-- col-xs-12 col-sm-6 col-md-6 col-lg-6 -->
                </div>
                <!-- row -->
            </div>
            <!-- container -->
        </div>
        <!-- footer-bottom-wrap -->
    </footer>

     <!--  fin seccion footer-->


";
        // line 513
        $this->displayBlock('javascripts', $context, $blocks);
        // line 514
        echo "
</body>


</html>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 9
    public function block_title($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "HelloFlatmate!";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 10
    public function block_stylesheets($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 11
        echo "     <link rel='dns-prefetch' href='//maps-api-ssl.google.com' />

    <style type=\"text/css\">
        img.wp-smiley,
        img.emoji {
            display: inline !important;
            border: none !important;
            box-shadow: none !important;
            height: 1em !important;
            width: 1em !important;
            margin: 0 .07em !important;
            vertical-align: -0.1em !important;
            background: none !important;
            padding: 0 !important;
        }
    </style>
\t    \t
    <link href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/style.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/styles.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"/>
    <link href=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/settings.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
    <link href=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/bootstrap-select.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
    <link href=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/font-awesome.min.cs"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
    <link href=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/swipebox.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"  />
    <link href=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/slick.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"  />
    <link href=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/slick-theme.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
    <link href=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/jquery-ui.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
    <link href=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/radio-checkbox.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
    <link href=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/fullcalendar.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
    <link href=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/main.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
    <link href=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/styling-options.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"/>
    <link href=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"/>
    <link href=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/estilos.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"/>
    <link href=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/js_composer.min.css"), "html", null, true);
        echo "\" rel='stylesheet'/>
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 384
    public function block_body($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 513
    public function block_javascripts($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  641 => 513,  624 => 384,  612 => 44,  608 => 43,  604 => 42,  600 => 41,  596 => 40,  592 => 39,  588 => 38,  584 => 37,  580 => 36,  576 => 35,  572 => 34,  568 => 33,  564 => 32,  560 => 31,  556 => 30,  552 => 29,  548 => 28,  529 => 11,  520 => 10,  502 => 9,  488 => 514,  486 => 513,  356 => 385,  354 => 384,  351 => 383,  212 => 230,  142 => 162,  139 => 99,  94 => 56,  89 => 54,  84 => 52,  80 => 51,  76 => 50,  72 => 49,  68 => 48,  64 => 47,  61 => 46,  59 => 10,  55 => 9,  45 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <meta content=\"width=device-width, initial-scale=1.0\" name=\"viewport\">
    <meta content=\"\" name=\"keywords\">
    <meta content=\"\" name=\"description\">

    <title>{% block title %}HelloFlatmate!{% endblock %}</title>
    {% block stylesheets %}
     <link rel='dns-prefetch' href='//maps-api-ssl.google.com' />

    <style type=\"text/css\">
        img.wp-smiley,
        img.emoji {
            display: inline !important;
            border: none !important;
            box-shadow: none !important;
            height: 1em !important;
            width: 1em !important;
            margin: 0 .07em !important;
            vertical-align: -0.1em !important;
            background: none !important;
            padding: 0 !important;
        }
    </style>
\t    \t
    <link href=\"{{ asset('assets/css/style.min.css') }}\" rel=\"stylesheet\">
    <link href=\"{{ asset('assets/css/styles.css') }}\" rel=\"stylesheet\"/>
    <link href=\"{{ asset('assets/css/settings.css') }}\" rel=\"stylesheet\" />
    <link href=\"{{ asset('assets/css/bootstrap.min.css') }}\" rel=\"stylesheet\">
    <link href=\"{{ asset('assets/css/bootstrap-select.css') }}\" rel=\"stylesheet\" />
    <link href=\"{{ asset('assets/css/font-awesome.min.cs') }}\" rel=\"stylesheet\" />
    <link href=\"{{ asset('assets/css/swipebox.min.css') }}\" rel=\"stylesheet\"  />
    <link href=\"{{ asset('assets/css/slick.css') }}\" rel=\"stylesheet\"  />
    <link href=\"{{ asset('assets/css/slick-theme.css') }}\" rel=\"stylesheet\" />
    <link href=\"{{ asset('assets/css/jquery-ui.css') }}\" rel=\"stylesheet\" />
    <link href=\"{{ asset('assets/css/radio-checkbox.css') }}\" rel=\"stylesheet\" />
    <link href=\"{{ asset('assets/css/fullcalendar.min.css') }}\" rel=\"stylesheet\" />
    <link href=\"{{ asset('assets/css/main.css') }}\" rel=\"stylesheet\" />
    <link href=\"{{ asset('assets/css/styling-options.css') }}\" rel=\"stylesheet\"/>
    <link href=\"{{ asset('assets/css/style.css') }}\" rel=\"stylesheet\"/>
    <link href=\"{{ asset('assets/css/estilos.css') }}\" rel=\"stylesheet\"/>
    <link href=\"{{ asset('assets/css/js_composer.min.css') }}\" rel='stylesheet'/>
    {% endblock %}
    
    <script src=\"{{ asset('assets/js/jquery.js') }}\"></script>
    <script src=\"{{ asset('assets/js/jquery-migrate.min.js') }}\"></script>
    <script src=\"{{ asset('assets/js/jquery.themepunch.tools.min.js') }}\"></script>
    <script src=\"{{ asset('assets/js/jquery.themepunch.revolution.min.js') }}\"></script>
    <script src=\"{{ asset('assets/js/infobox_packed.js') }}\"></script>
    <script src=\"{{ asset('assets/js/revolution.extension.slideanims.min.js') }}\"></script>
\t
\t<script src=\"{{ asset('assets/bootstrap/js/bootstrap.min.js') }}\"></script>
\t
    <script src=\"{{ asset('assets/js/revolution.extension.layeranimation.min.js') }}\"></script>

    <!-- Favicon -->
    <link rel=\"shortcut icon\" href=\"assets/images/icon-fav.png\">
    <!-- Apple iPhone Icon -->
    <!--[if lte IE 9]>
    <link rel=\"stylesheet\" type=\"text/css\" href=\"//89239-661579-raikfcquaxqncofqfm.stackpathdns.com/wp-content/plugins/js_composer/assets/css/vc_lte_ie9.min.css\" media=\"screen\"><![endif]-->
    <script type=\"text/javascript\">
        function setREVStartSize(e) {
            try {
                e.c = jQuery(e.c);
                var i = jQuery(window).width(),
                    t = 9999,
                    r = 0,
                    n = 0,
                    l = 0,
                    f = 0,
                    s = 0,
                    h = 0;
                if (e.responsiveLevels && (jQuery.each(e.responsiveLevels, function(e, f) {
                        f > i && (t = r = f, l = e), i > f && f > r && (r = f, n = e)
                    }), t > r && (l = n)), f = e.gridheight[l] || e.gridheight[0] || e.gridheight, s = e.gridwidth[l] || e.gridwidth[0] || e.gridwidth, h = i / s, h = h > 1 ? 1 : h, f = Math.round(h * f), \"fullscreen\" == e.sliderLayout) {
                    var u = (e.c.width(), jQuery(window).height());
                    if (void 0 != e.fullScreenOffsetContainer) {
                        var c = e.fullScreenOffsetContainer.split(\",\");
                        if (c) jQuery.each(c, function(e, i) {
                            u = jQuery(i).length > 0 ? u - jQuery(i).outerHeight(!0) : u
                        }), e.fullScreenOffset.split(\"%\").length > 1 && void 0 != e.fullScreenOffset && e.fullScreenOffset.length > 0 ? u -= jQuery(window).height() * parseInt(e.fullScreenOffset, 0) / 100 : void 0 != e.fullScreenOffset && e.fullScreenOffset.length > 0 && (u -= parseInt(e.fullScreenOffset, 0))
                    }
                    f = u
                } else void 0 != e.minHeight && f < e.minHeight && (f = e.minHeight);
                e.c.closest(\".rev_slider_wrapper\").css({
                    height: f
                })
            } catch (d) {
                console.log(\"Failure at Presize of Slider:\" + d)
            }
        };
    </script>
    
</head>
<body class=\"home page-template page-template-template page-template-template-homepage page-template-templatetemplate-homepage-php page page-id-493 compare-property-active side-nav-active wpb-js-composer js-comp-ver-5.7 vc_responsive\">
    {#Modal Registrarse#}
        <!-- Modal -->
    {#   <div class=\"modal fade\" id=\"modal-register\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">
            <div class=\"modal-dialog box-register\" role=\"document\">
                <div class=\"modal-content\">
                    <div class=\"modal-header\">
                        <h5 class=\"modal-title\" id=\"exampleModalLabel\">Registrarse</h5>
                        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                            <span aria-hidden=\"true\">&times;</span>
                        </button>
                    </div>
                    <div class=\"modal-body\">
                        <button type=\"button\" class=\"btn btn-facebook\"><span class=\"fa fa-facebook-official\"></span> Seguir con Facebook</button>
                        <button type=\"button\" class=\"btn btn-google\"><span class=\"fa fa-google\"></span> Seguir con Google</button>

                        <hr>

                        <div style=\"padding-left: 5px;padding-right: 5px\">
                            <form>
                                <div class=\"form-group\">
                                    <label for=\"recipient-name\" class=\"col-form-label\">Correo</label>
                                    <input type=\"text\" style=\"border-radius: 0px\" class=\"form-control\" id=\"recipient-name\" placeholder=\"Correo\">
                                </div>

                                <div class=\"form-group\">
                                    <label for=\"recipient-name\" class=\"col-form-label\">Nombre</label>
                                    <input type=\"text\" style=\"border-radius: 0px\" class=\"form-control\" id=\"recipient-name\" placeholder=\"Nombre\">
                                </div>

                                <div class=\"form-group\">
                                    <label for=\"recipient-name\" class=\"col-form-label\">Apellido</label>
                                    <input type=\"text\" style=\"border-radius: 0px\" class=\"form-control\" id=\"recipient-name\" placeholder=\"Apellido\">
                                </div>

                                <div class=\"form-group\">
                                    <label for=\"recipient-name\" class=\"col-form-label\">Contraseña</label>
                                    <input type=\"password\" style=\"border-radius: 0px\" class=\"form-control\" id=\"recipient-name\" placeholder=\"Contraseña\">
                                </div>

                                <div class=\"form-group\">
                                    <label for=\"recipient-name\" class=\"col-form-label\">Confirmar Contraseña</label>
                                    <input type=\"password\" style=\"border-radius: 0px\" class=\"form-control\" id=\"recipient-name\" placeholder=\"Confirmar Contraseña\">
                                </div>

                                <div class=\"modal-footer\">
                                    <div class=\"container\" style=\"text-align: center\">
                                        <button type=\"button\" class=\"btn btn-primary btn-property\">Aceptar</button>
                                        <button type=\"button\" class=\"btn btn-danger btn-property\" data-dismiss=\"modal\">Cancelar</button>
                                    </div>
                                </div>
                            </form>
                        </div>

                        <div>

                        </div>

                    </div>

                </div>
            </div>
        </div>

        {#Modal Session#}
        <div class=\"modal fade\" id=\"modal-login\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">
            <div class=\"modal-dialog box-register\" role=\"document\">
                <div class=\"modal-content\">
                    <div class=\"modal-header\">
                        <h5 class=\"modal-title\" id=\"exampleModalLabel\">Iniciar Sesión</h5>
                        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                            <span aria-hidden=\"true\">&times;</span>
                        </button>
                    </div>
                    <div class=\"modal-body\">
                        <button type=\"button\" class=\"btn btn-facebook\"><span class=\"fa fa-facebook-official\"></span> Seguir con Facebook</button>
                        <button type=\"button\" class=\"btn btn-google\"><span class=\"fa fa-google\"></span> Seguir con Google</button>

                        <hr>

                        <div style=\"padding-left: 5px;padding-right: 5px\">
                            <form>
                                <div class=\"form-group\">
                                    <label for=\"recipient-name\" class=\"col-form-label\">Correo</label>
                                    <input type=\"text\" style=\"border-radius: 0px\" class=\"form-control\" id=\"recipient-name\" placeholder=\"Correo\">
                                </div>

                                <div class=\"form-group\">
                                    <label for=\"recipient-name\" class=\"col-form-label\">Contraseña</label>
                                    <input type=\"password\" style=\"border-radius: 0px\" class=\"form-control\" id=\"recipient-name\" placeholder=\"Contraseña\">
                                </div>

                                <div class=\"modal-footer\">
                                    <div class=\"container\" style=\"text-align: center\">
                                        <button type=\"button\" class=\"btn btn-primary btn-property\">Aceptar</button>
                                        <button type=\"button\" class=\"btn btn-danger btn-property\" data-dismiss=\"modal\">Cancelar</button>
                                    </div>
                                </div>
                            </form>
                        </div>

                        <div>

                        </div>

                    </div>

                </div>
            </div>
        </div>
    <div class=\"nav-area header-type-4 transparent-header\">
        <!-- top bar -->
        <!-- desktop nav -->
        <header id=\"homey_nav_sticky\" class=\"header-nav hidden-sm hidden-xs\" data-sticky=\"1\">
            <div class=\"container-fluid\">
                <div class=\"header-inner table-block\">
                    <div class=\"header-comp-logo\">
                    <h1><a  href=\"#\">
\t\t\t\t\t<img src=\"assets/images/icon-touch.png\" alt=\"helloflatmate\" title=\"helloflatmate\">
                    </a></h1>
                </div>

                    
\t\t\t\t\t<div class=\"header-comp-right\">
                    <div class=\"account-login\">
\t\t\t\t\t\t<ul class=\"login-register list-inline\">

\t\t\t\t\t\t\t\t\t<li><a href=\"#\" data-toggle=\"modal\" data-target=\"#modal-login\"><h4>Login</h4></a></li> 
\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<li><a href=\"#\" data-toggle=\"modal\" data-target=\"#modal-register\"><h4>Register</h4></a></li>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<li><a href=\"#\" ><h4>Propietarios</h4></a></li>
\t\t\t\t\t\t\t\t\t    \t
                                <li><a href=\"{{ url('about') }}\" ><h4>Helloflatmate</h4></a></li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>                

                </div>
            </div>
        </header>
        <!-- mobile header -->
        <header class=\"header-nav header-mobile hidden-md hidden-lg\">
            <div class=\"header-mobile-wrap\">
                <div class=\"container\">
                    <div class=\"row\">
                        <div class=\"col-xs-3\">
                            <button type=\"button\" class=\"btn btn-mobile-nav\" data-toggle=\"collapse\" data-target=\"#mobile-nav\" aria-expanded=\"false\">
                                <i class=\"fa fa-bars\" aria-hidden=\"true\"></i>
                            </button>
                            <!-- btn-mobile-nav -->
                        </div>
                        <div class=\"col-xs-6\">
                            <div class=\"mobile-logo text-center\">
                                <h1>
                            <a href=\"\">
                                                                   <imgsrc=\"assets/images/icon-touch.png\" alt=\"helloflatmate\" title=\"helloflatmate\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
                        </h1>
                            </div>
                            <!-- mobile-logo -->
                        </div>
                        <div class=\"col-xs-3\">
                            <div class=\"user-menu text-right\">
                                <button type=\"button\" class=\"btn btn-mobile-nav\" data-toggle=\"collapse\" data-target=\"#user-nav\" aria-expanded=\"false\">
                                    <i class=\"fa fa-user-circle-o\" aria-hidden=\"true\"></i>
                                </button>
                            </div>
                            <!-- user-menu -->
                        </div>
                    </div>
                    <!-- row -->
                </div>
                <!-- container -->
            </div>
            <!-- header-mobile-wrap -->

            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"mobile-nav-wrap\">
                        <nav id=\"mobile-nav\" class=\"nav-dropdown main-nav-dropdown collapse navbar-collapse\">
                            <ul id=\"mobile-menu\" class=\"mobile-menu\">
                                <li id=\"menu-item-692\" class=\"menu-item menu-item-type-custom menu-item-object-custom current-menu-ancestor menu-item-has-children menu-item-692\"><a href=\"#\">Home</a>
                                    <ul class=\"sub-menu\">
                                        <li id=\"menu-item-693\" class=\"menu-item menu-item-type-custom menu-item-object-custom current-menu-ancestor current-menu-parent menu-item-has-children menu-item-693\"><a href=\"#\">Opcion 1</a>
                                            <ul class=\"sub-menu\">
                                                <li id=\"menu-item-694\" class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-493 current_page_item menu-item-694\"><a href=\"\" aria-current=\"page\">Opcion 01</a></li>
                                                <li id=\"menu-item-705\" class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-705\"><a href=\"homepage-parallax-fullscreen/\">Opcion 02</a></li>
                                            </ul>
                                        </li>
                                        <li id=\"menu-item-706\" class=\"menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-706\"><a href=\"#\">Opcion 2</a>
                                            <ul class=\"sub-menu\">
                                                <li id=\"menu-item-1818\" class=\"menu-item menu-item-type-custom menu-item-object-custom menu-item-1818\"><a href=\"homepage-map-standard/?search_position=under_banner\">Opcion 01</a></li>
                                                <li id=\"menu-item-703\" class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-703\"><a href=\"homepage-map-fullscreen/\">Opcion 02</a></li>
                                            </ul>
                                        </li>
                                      
                                </li>
                           </ul>
                        </nav>
                    </div>
                    <!-- mobile-nav-wrap -->
                </div>
            </div>
            <!-- container -->
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"user-nav-wrap\">

                        <nav id=\"user-nav\" class=\"nav-dropdown main-nav-dropdown collapse navbar-collapse\">
                            <ul>

                                <li>
                                    <a href=\"#\" data-toggle=\"modal\" data-target=\"#modal-login\">
                                        <span data-toggle=\"collapse\" data-target=\"#user-nav\">Iniciar sesión</span>
                                    </a>
                                </li>

                                <li>
                                    <a href=\"#\" data-toggle=\"modal\" data-target=\"#modal-register\">
                                        <span data-toggle=\"collapse\" data-target=\"#user-nav\">Registrate</span>
                                    </a>
                                </li>

                                <li><a href=\"become-a-host/\">Become a Host</a></li>

                            </ul>
                        </nav>
                        <!-- nav-collapse -->

                    </div>
                    <!-- mobile-nav-wrap -->
                </div>
            </div>
            <!-- container -->
        </header>
        <!-- header-nav header-mobile hidden-md hidden-lg -->
    </div>
    <div id=\"side-nav-panel\" class=\"side-nav-panel side-nav-panel-vertical side-nav-panel-left\">
        <div class=\"mobile-nav-wrap\">
            <nav id=\"mobile-nav\" class=\"nav-dropdown main-nav-dropdown\">
                <ul id=\"mobile-menu\" class=\"mobile-menu\">
                    <li class=\"menu-item menu-item-type-custom menu-item-object-custom current-menu-ancestor menu-item-has-children menu-item-692\"><a href=\"#\">Home</a>
                        <ul class=\"sub-menu\">
                            <li class=\"menu-item menu-item-type-custom menu-item-object-custom current-menu-ancestor current-menu-parent menu-item-has-children menu-item-693\"><a href=\"#\">Opcion 1</a>
                                <ul class=\"sub-menu\">
                                    <li class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-493 current_page_item menu-item-694\"><a href=\"\" aria-current=\"page\">Opcion 01</a></li>
                                    <li class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-705\"><a href=\"homepage-parallax-fullscreen/\">Opcion 02</a></li>
                                </ul>
                            </li>
                            <li class=\"menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-706\"><a href=\"#\">Opcion 2</a>
                                <ul class=\"sub-menu\">
                                    <li class=\"menu-item menu-item-type-custom menu-item-object-custom menu-item-1818\"><a href=\"homepage-map-standard/?search_position=under_banner\">Opcion 01</a></li>
                                    <li class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-703\"><a href=\"homepage-map-fullscreen/\">Opcion 02</a></li>
                                </ul>
                            </li>
                            
                        </ul>
                    </li>
               </ul>
            </nav>
        </div>
    </div>

     <!-- ************************************************************************************************************************-->

      <!-- Seccion boody -->

    <div id=\"section-body\">
\t
\t{# <div class=\"footer-bottom-wrap\" style=\"background-color:#777777;\">
            <div class=\"container\">
                <div class=\"row\">
                   <div class=\"col-xs-12 col-sm-12 col-md-6 col-lg-6\">
                        <br>
\t\t\t\t\t\t<br>
\t\t\t\t\t
                    </div> 
                    <!-- col-xs-12 col-sm-6 col-md-6 col-lg-6 -->
                    <div class=\"col-xs-12 col-sm-12 col-md-6 col-lg-6\">
                        </div>
                    <!-- col-xs-12 col-sm-6 col-md-6 col-lg-6 -->
                </div>
                <!-- row -->
            </div>
            <!-- container -->
        </div> #}

{% block body %}{% endblock %}
<!-- seccion footer-->
    <footer class=\"footer-wrap footer\">

        <div class=\"footer-top-wrap\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-md-3 col-sm-12 col-xs-12\">
                       <div id=\"homey_taxonomies-2\" class=\"widget footer-widget widget-categories\">
                            <div class=\"widget-top\">
                                <h3 class=\"widget-title\">Nosotros</h3></div>
                            <div class=\"widget-body\">
                                <ul class=\"list-unstyled\">
                                    <li>
                                        <a href=\"type/apartment/\">Quiénes somos</a></li>
                                    <li>
                                        <a href=\"type/bed-breakfast/\">Nuestro Equipo</a></li>
                                    <li>
                                        <a href=\"type/condo/\">Contacto</a></li>
                                    <li>
                                        <a href=\"type/house/\">Aviso Legal</a></li>
                                    
                                   
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-md-3 col-sm-12 col-xs-12\">
                        <div id=\"homey_taxonomies-2\" class=\"widget footer-widget widget-categories\">
                            <div class=\"widget-top\">
                                <h3 class=\"widget-title\">Preguntas Frecuentes</h3></div>
                            <div class=\"widget-body\">
                                <ul class=\"list-unstyled\">
                                    <li>
                                        <a href=\"type/apartment/\">Hello Habitaciones</a></li>
                                    <li>
                                        <a href=\"type/bed-breakfast/\">Hello propietarios</a></li>
                                   
                                </ul>
                            </div>
                        </div>
                    </div>
                      <div class=\"col-md-3 col-sm-12 col-xs-12\">
                        <div id=\"homey_taxonomies-2\" class=\"widget footer-widget widget-categories\">
                            <div class=\"widget-top\">
                                <h3 class=\"widget-title\">Prensa</h3></div>
                            <div class=\"widget-body\">
                                <ul class=\"list-unstyled\">
                                    <li>
                                        <a href=\"type/apartment/\">Blog</a></li>
                                    
                                   
                                </ul>
                            </div>
                        </div>
                    </div>
                      <div class=\"col-md-3 col-sm-12 col-xs-12\">
                        <div id=\"homey_taxonomies-2\" class=\"widget footer-widget widget-categories\">
                            <div class=\"widget-top\">
                                <h3 class=\"widget-title\">Contacto</h3></div>
                            <div class=\"widget-body\">
                                <ul class=\"list-unstyled\">
                                    <li>
                                        <a href=\"type/apartment/\">Contáctanos por email:</a></li>
                                        <li>
                                        <a href=\"type/apartment/\">rooms@flatmate.com</a></li>
                                         <li>
                                        <a href=\"type/apartment/\">Horarios de Apertura</a></li>
                                         <li>
                                        <a href=\"type/apartment/\">De lunes a viernes </a></li>
                                         <li>
                                        <a href=\"type/apartment/\">de 10:00 am a 18:00</a></li>
                                    
                                   
                                </ul>
                            </div>
                        </div>
                    </div>
          
                </div>
                <!-- row -->
            </div>
            <!-- container -->
        </div>
        <!-- footer-top-wrap -->

        <div class=\"footer-bottom-wrap\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-xs-12 col-sm-12 col-md-6 col-lg-6\">
                        <div class=\"footer-copyright\">
                            helloflatmate - All rights reserved - Diseñado por helloflatmate 
                        </div>
                    </div>
                    <!-- col-xs-12 col-sm-6 col-md-6 col-lg-6 -->
                    <div class=\"col-xs-12 col-sm-12 col-md-6 col-lg-6\">
                        <div class=\"social-footer\">

                            <div class=\"social-icons social-round\">

                                <a class=\"btn-bg-facebook\" target=\"_blank\" href=\"#\"><i class=\"fa fa-facebook\"></i></a>

                                <a class=\"btn-bg-twitter\" target=\"_blank\" href=\"#\"><i class=\"fa fa-twitter\"></i></a>

                                <a class=\"btn-bg-linkedin\" target=\"_blank\" href=\"#\"><i class=\"fa fa-linkedin\"></i></a>

                                <a class=\"btn-bg-google-plus\" target=\"_blank\" href=\"#\"><i class=\"fa fa-google-plus\"></i></a>

                                <a class=\"btn-bg-instagram\" target=\"_blank\" href=\"#\"><i class=\"fa fa-instagram\"></i></a>

                                <a class=\"btn-bg-pinterest\" target=\"_blank\" href=\"#\"><i class=\"fa fa-pinterest\"></i></a>

                                <a class=\"btn-bg-youtube\" target=\"_blank\" href=\"#\"><i class=\"fa fa-youtube\"></i></a>

                            </div>
                        </div>
                    </div>
                    <!-- col-xs-12 col-sm-6 col-md-6 col-lg-6 -->
                </div>
                <!-- row -->
            </div>
            <!-- container -->
        </div>
        <!-- footer-bottom-wrap -->
    </footer>

     <!--  fin seccion footer-->


{% block javascripts %}{% endblock %}

</body>


</html>", "base.html.twig", "C:\\xampp\\htdocs\\HelloFlatmate\\templates\\base.html.twig");
    }
}
