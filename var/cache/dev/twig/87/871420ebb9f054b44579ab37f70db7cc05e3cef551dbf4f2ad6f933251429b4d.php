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

/* property/apartaments.html.twig */
class __TwigTemplate_4edcdbbca1dec751800c544b8c3acca99ebce57847797273b4256551c256c3ea extends \Twig\Template
{
    private $source;

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "property/apartaments.html.twig", 1);
        $this->blocks = [
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "property/apartaments.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "property/apartaments.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <!--/ Intro Single star /-->
    <section class=\"intro-single\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-12 col-lg-8\">
                    <div class=\"title-single-box\">
                        <h1 class=\"title-single\">Nuestros Apartamentos</h1>
                        <h5>Bienvenido!</h5>
                        <span class=\"color-text-a\"> Te ofrecemos una alta gama de alojamientos turísticos.
                            Nuestros apartamentos presentan un gran confort y se encuentran tanto en la ciudad
                            como en lugares para relajarse. Elíja alguno y le aseguramos que no se arrepentira
                            de su elección.
                        </span>
                    </div>
                </div>
                <div class=\"col-md-12 col-lg-4\" style=\"text-align: center\">
                    <span class=\"fa fa-home fa-10x\"></span>
                </div>
            </div>
        </div>
    </section>
    <!--/ Intro Single End /-->

    <!--/ Property Grid Star /-->
    <section class=\"property-grid grid\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-4\">
                    <div class=\"card-box-a card-shadow\">
                        <div class=\"img-box-a\">
                            <img src=\"assets/img/rooms/property-1.jpg\" alt=\"\" class=\"img-a img-fluid\">
                        </div>
                        <div class=\"card-overlay\">
                            <div class=\"card-overlay-a-content\">
                                <div class=\"card-header-a\">
                                    <h2 class=\"card-title-a\">
                                        <a href=\"";
        // line 40
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("flats");
        echo "\">204 Mount
                                            <br /> Olive Road Two</a>
                                    </h2>
                                </div>
                                <div class=\"card-body-a\">
                                    <div class=\"price-box d-flex\">
                                        <span class=\"price-a\">renta | 12.000 € </span>
                                    </div>
                                </div>
                                <div class=\"card-footer-a\">
                                    <ul class=\"card-info d-flex justify-content-around\">
                                        <li>
                                            <h4 class=\"card-info-title\">Area</h4>
                                            <span>340m
                                                <sup>2</sup>
                                            </span>
                                        </li>
                                        <li>
                                            <h4 class=\"card-info-title\">Beds</h4>
                                            <span>2</span>
                                        </li>
                                        <li>
                                            <h4 class=\"card-info-title\">Baths</h4>
                                            <span>4</span>
                                        </li>
                                        <li>
                                            <h4 class=\"card-info-title\">Garages</h4>
                                            <span>1</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"col-md-4\">
                    <div class=\"card-box-a card-shadow\">
                        <div class=\"img-box-a\">
                            <img src=\"assets/img/rooms/property-3.jpg\" alt=\"\" class=\"img-a img-fluid\">
                        </div>
                        <div class=\"card-overlay\">
                            <div class=\"card-overlay-a-content\">
                                <div class=\"card-header-a\">
                                    <h2 class=\"card-title-a\">
                                        <a href=\"";
        // line 84
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("flats");
        echo "\">204 Mount
                                            <br /> Olive Road Two</a>
                                    </h2>
                                </div>
                                <div class=\"card-body-a\">
                                    <div class=\"price-box d-flex\">
                                        <span class=\"price-a\">renta | 12.000 €</span>
                                    </div>
                                </div>
                                <div class=\"card-footer-a\">
                                    <ul class=\"card-info d-flex justify-content-around\">
                                        <li>
                                            <h4 class=\"card-info-title\">Area</h4>
                                            <span>340m
                                                <sup>2</sup>
                                            </span>
                                        </li>
                                        <li>
                                            <h4 class=\"card-info-title\">Beds</h4>
                                            <span>2</span>
                                        </li>
                                        <li>
                                            <h4 class=\"card-info-title\">Baths</h4>
                                            <span>4</span>
                                        </li>
                                        <li>
                                            <h4 class=\"card-info-title\">Garages</h4>
                                            <span>1</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"col-md-4\">
                    <div class=\"card-box-a card-shadow\">
                        <div class=\"img-box-a\">
                            <img src=\"assets/img/rooms/property-6.jpg\" alt=\"\" class=\"img-a img-fluid\">
                        </div>
                        <div class=\"card-overlay\">
                            <div class=\"card-overlay-a-content\">
                                <div class=\"card-header-a\">
                                    <h2 class=\"card-title-a\">
                                        <a href=\"";
        // line 128
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("flats");
        echo "\">204 Mount
                                            <br /> Olive Road Two</a>
                                    </h2>
                                </div>
                                <div class=\"card-body-a\">
                                    <div class=\"price-box d-flex\">
                                        <span class=\"price-a\">rent |  12.000 €</span>
                                    </div>
                                </div>
                                <div class=\"card-footer-a\">
                                    <ul class=\"card-info d-flex justify-content-around\">
                                        <li>
                                            <h4 class=\"card-info-title\">Area</h4>
                                            <span>340m
                                                <sup>2</sup>
                                            </span>
                                        </li>
                                        <li>
                                            <h4 class=\"card-info-title\">Beds</h4>
                                            <span>2</span>
                                        </li>
                                        <li>
                                            <h4 class=\"card-info-title\">Baths</h4>
                                            <span>4</span>
                                        </li>
                                        <li>
                                            <h4 class=\"card-info-title\">Garages</h4>
                                            <span>1</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"col-md-4\">
                    <div class=\"card-box-a card-shadow\">
                        <div class=\"img-box-a\">
                            <img src=\"assets/img/rooms/property-7.jpg\" alt=\"\" class=\"img-a img-fluid\">
                        </div>
                        <div class=\"card-overlay\">
                            <div class=\"card-overlay-a-content\">
                                <div class=\"card-header-a\">
                                    <h2 class=\"card-title-a\">
                                        <a href=\"";
        // line 172
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("flats");
        echo "\">204 Mount
                                            <br /> Olive Road Two</a>
                                    </h2>
                                </div>
                                <div class=\"card-body-a\">
                                    <div class=\"price-box d-flex\">
                                        <span class=\"price-a\">renta |  12.000 €</span>
                                    </div>
                                </div>
                                <div class=\"card-footer-a\">
                                    <ul class=\"card-info d-flex justify-content-around\">
                                        <li>
                                            <h4 class=\"card-info-title\">Area</h4>
                                            <span>340m
                                                <sup>2</sup>
                                            </span>
                                        </li>
                                        <li>
                                            <h4 class=\"card-info-title\">Beds</h4>
                                            <span>2</span>
                                        </li>
                                        <li>
                                            <h4 class=\"card-info-title\">Baths</h4>
                                            <span>4</span>
                                        </li>
                                        <li>
                                            <h4 class=\"card-info-title\">Garages</h4>
                                            <span>1</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"col-md-4\">
                    <div class=\"card-box-a card-shadow\">
                        <div class=\"img-box-a\">
                            <img src=\"assets/img/rooms/property-8.jpg\" alt=\"\" class=\"img-a img-fluid\">
                        </div>
                        <div class=\"card-overlay\">
                            <div class=\"card-overlay-a-content\">
                                <div class=\"card-header-a\">
                                    <h2 class=\"card-title-a\">
                                        <a href=\"";
        // line 216
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("flats");
        echo "\">204 Mount
                                            <br /> Olive Road Two</a>
                                    </h2>
                                </div>
                                <div class=\"card-body-a\">
                                    <div class=\"price-box d-flex\">
                                        <span class=\"price-a\">renta |  12.000 €</span>
                                    </div>
                                </div>
                                <div class=\"card-footer-a\">
                                    <ul class=\"card-info d-flex justify-content-around\">
                                        <li>
                                            <h4 class=\"card-info-title\">Area</h4>
                                            <span>340m
                                                <sup>2</sup>
                                            </span>
                                        </li>
                                        <li>
                                            <h4 class=\"card-info-title\">Beds</h4>
                                            <span>2</span>
                                        </li>
                                        <li>
                                            <h4 class=\"card-info-title\">Baths</h4>
                                            <span>4</span>
                                        </li>
                                        <li>
                                            <h4 class=\"card-info-title\">Garages</h4>
                                            <span>1</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"col-md-4\">
                    <div class=\"card-box-a card-shadow\">
                        <div class=\"img-box-a\">
                            <img src=\"assets/img/rooms/property-10.jpg\" alt=\"\" class=\"img-a img-fluid\">
                        </div>
                        <div class=\"card-overlay\">
                            <div class=\"card-overlay-a-content\">
                                <div class=\"card-header-a\">
                                    <h2 class=\"card-title-a\">
                                        <a href=\"";
        // line 260
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("flats");
        echo "\">204 Mount
                                            <br /> Olive Road Two</a>
                                    </h2>
                                </div>
                                <div class=\"card-body-a\">
                                    <div class=\"price-box d-flex\">
                                        <span class=\"price-a\">rent |  12.000 €</span>
                                    </div>
                                </div>
                                <div class=\"card-footer-a\">
                                    <ul class=\"card-info d-flex justify-content-around\">
                                        <li>
                                            <h4 class=\"card-info-title\">Area</h4>
                                            <span>340m
                                                <sup>2</sup>
                                            </span>
                                        </li>
                                        <li>
                                            <h4 class=\"card-info-title\">Beds</h4>
                                            <span>2</span>
                                        </li>
                                        <li>
                                            <h4 class=\"card-info-title\">Baths</h4>
                                            <span>4</span>
                                        </li>
                                        <li>
                                            <h4 class=\"card-info-title\">Garages</h4>
                                            <span>1</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-sm-12\">
                    <nav class=\"pagination-a\">
                        <ul class=\"pagination justify-content-end\">
                            <li class=\"page-item disabled\">
                                <a class=\"page-link\" href=\"#\" tabindex=\"-1\">
                                    <span class=\"ion-ios-arrow-back\"></span>
                                </a>
                            </li>
                            <li class=\"page-item active\">
                                <a class=\"page-link\" href=\"#\">1</a>
                            </li>
                            <li class=\"page-item \">
                                <a class=\"page-link\" href=\"#\">2</a>
                            </li>
                            <li class=\"page-item\">
                                <a class=\"page-link\" href=\"#\">3</a>
                            </li>
                            <li class=\"page-item next\">
                                <a class=\"page-link\" href=\"#\">
                                    <span class=\"ion-ios-arrow-forward\"></span>
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </section>
    <!--/ Property Grid End /-->

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "property/apartaments.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  338 => 260,  291 => 216,  244 => 172,  197 => 128,  150 => 84,  103 => 40,  65 => 4,  56 => 3,  27 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}
    <!--/ Intro Single star /-->
    <section class=\"intro-single\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-12 col-lg-8\">
                    <div class=\"title-single-box\">
                        <h1 class=\"title-single\">Nuestros Apartamentos</h1>
                        <h5>Bienvenido!</h5>
                        <span class=\"color-text-a\"> Te ofrecemos una alta gama de alojamientos turísticos.
                            Nuestros apartamentos presentan un gran confort y se encuentran tanto en la ciudad
                            como en lugares para relajarse. Elíja alguno y le aseguramos que no se arrepentira
                            de su elección.
                        </span>
                    </div>
                </div>
                <div class=\"col-md-12 col-lg-4\" style=\"text-align: center\">
                    <span class=\"fa fa-home fa-10x\"></span>
                </div>
            </div>
        </div>
    </section>
    <!--/ Intro Single End /-->

    <!--/ Property Grid Star /-->
    <section class=\"property-grid grid\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-4\">
                    <div class=\"card-box-a card-shadow\">
                        <div class=\"img-box-a\">
                            <img src=\"assets/img/rooms/property-1.jpg\" alt=\"\" class=\"img-a img-fluid\">
                        </div>
                        <div class=\"card-overlay\">
                            <div class=\"card-overlay-a-content\">
                                <div class=\"card-header-a\">
                                    <h2 class=\"card-title-a\">
                                        <a href=\"{{url('flats') }}\">204 Mount
                                            <br /> Olive Road Two</a>
                                    </h2>
                                </div>
                                <div class=\"card-body-a\">
                                    <div class=\"price-box d-flex\">
                                        <span class=\"price-a\">renta | 12.000 € </span>
                                    </div>
                                </div>
                                <div class=\"card-footer-a\">
                                    <ul class=\"card-info d-flex justify-content-around\">
                                        <li>
                                            <h4 class=\"card-info-title\">Area</h4>
                                            <span>340m
                                                <sup>2</sup>
                                            </span>
                                        </li>
                                        <li>
                                            <h4 class=\"card-info-title\">Beds</h4>
                                            <span>2</span>
                                        </li>
                                        <li>
                                            <h4 class=\"card-info-title\">Baths</h4>
                                            <span>4</span>
                                        </li>
                                        <li>
                                            <h4 class=\"card-info-title\">Garages</h4>
                                            <span>1</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"col-md-4\">
                    <div class=\"card-box-a card-shadow\">
                        <div class=\"img-box-a\">
                            <img src=\"assets/img/rooms/property-3.jpg\" alt=\"\" class=\"img-a img-fluid\">
                        </div>
                        <div class=\"card-overlay\">
                            <div class=\"card-overlay-a-content\">
                                <div class=\"card-header-a\">
                                    <h2 class=\"card-title-a\">
                                        <a href=\"{{url('flats') }}\">204 Mount
                                            <br /> Olive Road Two</a>
                                    </h2>
                                </div>
                                <div class=\"card-body-a\">
                                    <div class=\"price-box d-flex\">
                                        <span class=\"price-a\">renta | 12.000 €</span>
                                    </div>
                                </div>
                                <div class=\"card-footer-a\">
                                    <ul class=\"card-info d-flex justify-content-around\">
                                        <li>
                                            <h4 class=\"card-info-title\">Area</h4>
                                            <span>340m
                                                <sup>2</sup>
                                            </span>
                                        </li>
                                        <li>
                                            <h4 class=\"card-info-title\">Beds</h4>
                                            <span>2</span>
                                        </li>
                                        <li>
                                            <h4 class=\"card-info-title\">Baths</h4>
                                            <span>4</span>
                                        </li>
                                        <li>
                                            <h4 class=\"card-info-title\">Garages</h4>
                                            <span>1</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"col-md-4\">
                    <div class=\"card-box-a card-shadow\">
                        <div class=\"img-box-a\">
                            <img src=\"assets/img/rooms/property-6.jpg\" alt=\"\" class=\"img-a img-fluid\">
                        </div>
                        <div class=\"card-overlay\">
                            <div class=\"card-overlay-a-content\">
                                <div class=\"card-header-a\">
                                    <h2 class=\"card-title-a\">
                                        <a href=\"{{url('flats') }}\">204 Mount
                                            <br /> Olive Road Two</a>
                                    </h2>
                                </div>
                                <div class=\"card-body-a\">
                                    <div class=\"price-box d-flex\">
                                        <span class=\"price-a\">rent |  12.000 €</span>
                                    </div>
                                </div>
                                <div class=\"card-footer-a\">
                                    <ul class=\"card-info d-flex justify-content-around\">
                                        <li>
                                            <h4 class=\"card-info-title\">Area</h4>
                                            <span>340m
                                                <sup>2</sup>
                                            </span>
                                        </li>
                                        <li>
                                            <h4 class=\"card-info-title\">Beds</h4>
                                            <span>2</span>
                                        </li>
                                        <li>
                                            <h4 class=\"card-info-title\">Baths</h4>
                                            <span>4</span>
                                        </li>
                                        <li>
                                            <h4 class=\"card-info-title\">Garages</h4>
                                            <span>1</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"col-md-4\">
                    <div class=\"card-box-a card-shadow\">
                        <div class=\"img-box-a\">
                            <img src=\"assets/img/rooms/property-7.jpg\" alt=\"\" class=\"img-a img-fluid\">
                        </div>
                        <div class=\"card-overlay\">
                            <div class=\"card-overlay-a-content\">
                                <div class=\"card-header-a\">
                                    <h2 class=\"card-title-a\">
                                        <a href=\"{{url('flats') }}\">204 Mount
                                            <br /> Olive Road Two</a>
                                    </h2>
                                </div>
                                <div class=\"card-body-a\">
                                    <div class=\"price-box d-flex\">
                                        <span class=\"price-a\">renta |  12.000 €</span>
                                    </div>
                                </div>
                                <div class=\"card-footer-a\">
                                    <ul class=\"card-info d-flex justify-content-around\">
                                        <li>
                                            <h4 class=\"card-info-title\">Area</h4>
                                            <span>340m
                                                <sup>2</sup>
                                            </span>
                                        </li>
                                        <li>
                                            <h4 class=\"card-info-title\">Beds</h4>
                                            <span>2</span>
                                        </li>
                                        <li>
                                            <h4 class=\"card-info-title\">Baths</h4>
                                            <span>4</span>
                                        </li>
                                        <li>
                                            <h4 class=\"card-info-title\">Garages</h4>
                                            <span>1</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"col-md-4\">
                    <div class=\"card-box-a card-shadow\">
                        <div class=\"img-box-a\">
                            <img src=\"assets/img/rooms/property-8.jpg\" alt=\"\" class=\"img-a img-fluid\">
                        </div>
                        <div class=\"card-overlay\">
                            <div class=\"card-overlay-a-content\">
                                <div class=\"card-header-a\">
                                    <h2 class=\"card-title-a\">
                                        <a href=\"{{url('flats') }}\">204 Mount
                                            <br /> Olive Road Two</a>
                                    </h2>
                                </div>
                                <div class=\"card-body-a\">
                                    <div class=\"price-box d-flex\">
                                        <span class=\"price-a\">renta |  12.000 €</span>
                                    </div>
                                </div>
                                <div class=\"card-footer-a\">
                                    <ul class=\"card-info d-flex justify-content-around\">
                                        <li>
                                            <h4 class=\"card-info-title\">Area</h4>
                                            <span>340m
                                                <sup>2</sup>
                                            </span>
                                        </li>
                                        <li>
                                            <h4 class=\"card-info-title\">Beds</h4>
                                            <span>2</span>
                                        </li>
                                        <li>
                                            <h4 class=\"card-info-title\">Baths</h4>
                                            <span>4</span>
                                        </li>
                                        <li>
                                            <h4 class=\"card-info-title\">Garages</h4>
                                            <span>1</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"col-md-4\">
                    <div class=\"card-box-a card-shadow\">
                        <div class=\"img-box-a\">
                            <img src=\"assets/img/rooms/property-10.jpg\" alt=\"\" class=\"img-a img-fluid\">
                        </div>
                        <div class=\"card-overlay\">
                            <div class=\"card-overlay-a-content\">
                                <div class=\"card-header-a\">
                                    <h2 class=\"card-title-a\">
                                        <a href=\"{{url('flats') }}\">204 Mount
                                            <br /> Olive Road Two</a>
                                    </h2>
                                </div>
                                <div class=\"card-body-a\">
                                    <div class=\"price-box d-flex\">
                                        <span class=\"price-a\">rent |  12.000 €</span>
                                    </div>
                                </div>
                                <div class=\"card-footer-a\">
                                    <ul class=\"card-info d-flex justify-content-around\">
                                        <li>
                                            <h4 class=\"card-info-title\">Area</h4>
                                            <span>340m
                                                <sup>2</sup>
                                            </span>
                                        </li>
                                        <li>
                                            <h4 class=\"card-info-title\">Beds</h4>
                                            <span>2</span>
                                        </li>
                                        <li>
                                            <h4 class=\"card-info-title\">Baths</h4>
                                            <span>4</span>
                                        </li>
                                        <li>
                                            <h4 class=\"card-info-title\">Garages</h4>
                                            <span>1</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-sm-12\">
                    <nav class=\"pagination-a\">
                        <ul class=\"pagination justify-content-end\">
                            <li class=\"page-item disabled\">
                                <a class=\"page-link\" href=\"#\" tabindex=\"-1\">
                                    <span class=\"ion-ios-arrow-back\"></span>
                                </a>
                            </li>
                            <li class=\"page-item active\">
                                <a class=\"page-link\" href=\"#\">1</a>
                            </li>
                            <li class=\"page-item \">
                                <a class=\"page-link\" href=\"#\">2</a>
                            </li>
                            <li class=\"page-item\">
                                <a class=\"page-link\" href=\"#\">3</a>
                            </li>
                            <li class=\"page-item next\">
                                <a class=\"page-link\" href=\"#\">
                                    <span class=\"ion-ios-arrow-forward\"></span>
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </section>
    <!--/ Property Grid End /-->

{% endblock %}
", "property/apartaments.html.twig", "C:\\xampp\\htdocs\\HelloFlatmate\\templates\\property\\apartaments.html.twig");
    }
}
