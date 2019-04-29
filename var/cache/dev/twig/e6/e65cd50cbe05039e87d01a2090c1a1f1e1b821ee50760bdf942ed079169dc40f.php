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

/* property/index.html.twig */
class __TwigTemplate_38e4ebc72e89eaa72f41143a5558871c0563283cd360ae1b6a67a61927b40d6d extends \Twig\Template
{
    private $source;

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "property/index.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "property/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "property/index.html.twig"));

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
                        <h1 class=\"title-single\">Nuestras Habitaciones</h1>
                        <h5>Bienvenido!</h5>
                        <span class=\"color-text-a\">Le mostramos habitaciones recien remodeladas y con gran confort,
                            para que se sienta como en casa. Esperamos que encuentre la habitación que se acomode a
                            su gusto y sus necesidades.</span>
                    </div>
                </div>
                <div class=\"col-md-12 col-lg-4\" style=\"text-align: center\">
                    <span class=\"fa fa-bed fa-10x\"></span>
                </div>
            </div>
        </div>
    </section>
    <!--/ Intro Single End /-->

    <!--/ Property Grid Star /-->
    <section class=\"property-grid grid\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-sm-12\">
                    <div class=\"grid-option\">
                        <form>
                            <input type=\"text\" placeholder=\"Fecha Incio\" class=\"custom-select select-magin\">
                            <input type=\"text\" placeholder=\"Fecha Salida\" class=\"custom-select select-magin\">

                            <select class=\"custom-select select-magin\">
                            <option> Ciudad</option>
                            <option>Benimacle</option>
                            <option>Blasco Ibañez</option>
                            <option>Centro</option>
                            <option>Edificio Erasmus</option>
                            <option>FDO Catolico</option>
                            <option>Guimera</option>
                            <option>Mocada</option>
                            </select>

                            <input type=\"text\" placeholder=\"Precio Mínimo\" class=\"custom-select select-magin\">
                            <input type=\"text\" placeholder=\"Precio Máximo\" class=\"custom-select select-magin\">

                            ";
        // line 50
        echo "                                ";
        // line 51
        echo "                                ";
        // line 52
        echo "                                ";
        // line 53
        echo "                                ";
        // line 54
        echo "                                ";
        // line 55
        echo "                                ";
        // line 56
        echo "                            ";
        // line 57
        echo "                        </form>
                    </div>
                </div>
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
        // line 69
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("rooms");
        echo "\">204 Mount
                                            <br /> Olive Road Two</a>
                                    </h2>
                                </div>
                                <div class=\"card-body-a\">
                                    <div class=\"price-box d-flex\">
                                        <span class=\"price-a\">renta | 12.000 € </span>
                                    </div>
                                    ";
        // line 78
        echo "                                        ";
        // line 79
        echo "                                    ";
        // line 80
        echo "                                </div>
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
        // line 116
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("rooms");
        echo "\">204 Mount
                                            <br /> Olive Road Two</a>
                                    </h2>
                                </div>
                                <div class=\"card-body-a\">
                                    <div class=\"price-box d-flex\">
                                        <span class=\"price-a\">renta | 12.000 €</span>
                                    </div>
                                    ";
        // line 125
        echo "                                        ";
        // line 126
        echo "                                    ";
        // line 127
        echo "                                </div>
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
        // line 163
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("rooms");
        echo "\">204 Mount
                                            <br /> Olive Road Two</a>
                                    </h2>
                                </div>
                                <div class=\"card-body-a\">
                                    <div class=\"price-box d-flex\">
                                        <span class=\"price-a\">rent |  12.000 €</span>
                                    </div>
                                    ";
        // line 172
        echo "                                        ";
        // line 173
        echo "                                    ";
        // line 174
        echo "                                </div>
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
        // line 210
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("rooms");
        echo "\">204 Mount
                                            <br /> Olive Road Two</a>
                                    </h2>
                                </div>
                                <div class=\"card-body-a\">
                                    <div class=\"price-box d-flex\">
                                        <span class=\"price-a\">renta |  12.000 €</span>
                                    </div>
                                    ";
        // line 219
        echo "                                        ";
        // line 220
        echo "                                    ";
        // line 221
        echo "                                </div>
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
        // line 257
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("rooms");
        echo "\">204 Mount
                                            <br /> Olive Road Two</a>
                                    </h2>
                                </div>
                                <div class=\"card-body-a\">
                                    <div class=\"price-box d-flex\">
                                        <span class=\"price-a\">renta |  12.000 €</span>
                                    </div>
                                    ";
        // line 266
        echo "                                        ";
        // line 267
        echo "                                    ";
        // line 268
        echo "                                </div>
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
        // line 304
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("rooms");
        echo "\">204 Mount
                                            <br /> Olive Road Two</a>
                                    </h2>
                                </div>
                                <div class=\"card-body-a\">
                                    <div class=\"price-box d-flex\">
                                        <span class=\"price-a\">rent |  12.000 €</span>
                                    </div>
                                    ";
        // line 313
        echo "                                        ";
        // line 314
        echo "                                    ";
        // line 315
        echo "                                </div>
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
        return "property/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  420 => 315,  418 => 314,  416 => 313,  405 => 304,  367 => 268,  365 => 267,  363 => 266,  352 => 257,  314 => 221,  312 => 220,  310 => 219,  299 => 210,  261 => 174,  259 => 173,  257 => 172,  246 => 163,  208 => 127,  206 => 126,  204 => 125,  193 => 116,  155 => 80,  153 => 79,  151 => 78,  140 => 69,  126 => 57,  124 => 56,  122 => 55,  120 => 54,  118 => 53,  116 => 52,  114 => 51,  112 => 50,  65 => 4,  56 => 3,  27 => 1,);
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
                        <h1 class=\"title-single\">Nuestras Habitaciones</h1>
                        <h5>Bienvenido!</h5>
                        <span class=\"color-text-a\">Le mostramos habitaciones recien remodeladas y con gran confort,
                            para que se sienta como en casa. Esperamos que encuentre la habitación que se acomode a
                            su gusto y sus necesidades.</span>
                    </div>
                </div>
                <div class=\"col-md-12 col-lg-4\" style=\"text-align: center\">
                    <span class=\"fa fa-bed fa-10x\"></span>
                </div>
            </div>
        </div>
    </section>
    <!--/ Intro Single End /-->

    <!--/ Property Grid Star /-->
    <section class=\"property-grid grid\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-sm-12\">
                    <div class=\"grid-option\">
                        <form>
                            <input type=\"text\" placeholder=\"Fecha Incio\" class=\"custom-select select-magin\">
                            <input type=\"text\" placeholder=\"Fecha Salida\" class=\"custom-select select-magin\">

                            <select class=\"custom-select select-magin\">
                            <option> Ciudad</option>
                            <option>Benimacle</option>
                            <option>Blasco Ibañez</option>
                            <option>Centro</option>
                            <option>Edificio Erasmus</option>
                            <option>FDO Catolico</option>
                            <option>Guimera</option>
                            <option>Mocada</option>
                            </select>

                            <input type=\"text\" placeholder=\"Precio Mínimo\" class=\"custom-select select-magin\">
                            <input type=\"text\" placeholder=\"Precio Máximo\" class=\"custom-select select-magin\">

                            {#<select class=\"custom-select select-magin\">#}
                                {#<option> Dormitorios</option>#}
                                {#<option>1</option>#}
                                {#<option>2</option>#}
                                {#<option>3</option>#}
                                {#<option>4</option>#}
                                {#<option>5+</option>#}
                            {#</select>#}
                        </form>
                    </div>
                </div>
                <div class=\"col-md-4\">
                    <div class=\"card-box-a card-shadow\">
                        <div class=\"img-box-a\">
                            <img src=\"assets/img/rooms/property-1.jpg\" alt=\"\" class=\"img-a img-fluid\">
                        </div>
                        <div class=\"card-overlay\">
                            <div class=\"card-overlay-a-content\">
                                <div class=\"card-header-a\">
                                    <h2 class=\"card-title-a\">
                                        <a href=\"{{url('rooms') }}\">204 Mount
                                            <br /> Olive Road Two</a>
                                    </h2>
                                </div>
                                <div class=\"card-body-a\">
                                    <div class=\"price-box d-flex\">
                                        <span class=\"price-a\">renta | 12.000 € </span>
                                    </div>
                                    {#<a href=\"property-single.html\" class=\"link-a\">Click here to view#}
                                        {#<span class=\"ion-ios-arrow-forward\"></span>#}
                                    {#</a>#}
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
                                        <a href=\"{{url('rooms') }}\">204 Mount
                                            <br /> Olive Road Two</a>
                                    </h2>
                                </div>
                                <div class=\"card-body-a\">
                                    <div class=\"price-box d-flex\">
                                        <span class=\"price-a\">renta | 12.000 €</span>
                                    </div>
                                    {#<a href=\"property-single.html\" class=\"link-a\">Click here to view#}
                                        {#<span class=\"ion-ios-arrow-forward\"></span>#}
                                    {#</a>#}
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
                                        <a href=\"{{url('rooms') }}\">204 Mount
                                            <br /> Olive Road Two</a>
                                    </h2>
                                </div>
                                <div class=\"card-body-a\">
                                    <div class=\"price-box d-flex\">
                                        <span class=\"price-a\">rent |  12.000 €</span>
                                    </div>
                                    {#<a href=\"property-single.html\" class=\"link-a\">Click here to view#}
                                        {#<span class=\"ion-ios-arrow-forward\"></span>#}
                                    {#</a>#}
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
                                        <a href=\"{{url('rooms') }}\">204 Mount
                                            <br /> Olive Road Two</a>
                                    </h2>
                                </div>
                                <div class=\"card-body-a\">
                                    <div class=\"price-box d-flex\">
                                        <span class=\"price-a\">renta |  12.000 €</span>
                                    </div>
                                    {#<a href=\"property-single.html\" class=\"link-a\">Click here to view#}
                                        {#<span class=\"ion-ios-arrow-forward\"></span>#}
                                    {#</a>#}
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
                                        <a href=\"{{url('rooms') }}\">204 Mount
                                            <br /> Olive Road Two</a>
                                    </h2>
                                </div>
                                <div class=\"card-body-a\">
                                    <div class=\"price-box d-flex\">
                                        <span class=\"price-a\">renta |  12.000 €</span>
                                    </div>
                                    {#<a href=\"property-single.html\" class=\"link-a\">Click here to view#}
                                        {#<span class=\"ion-ios-arrow-forward\"></span>#}
                                    {#</a>#}
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
                                        <a href=\"{{url('rooms') }}\">204 Mount
                                            <br /> Olive Road Two</a>
                                    </h2>
                                </div>
                                <div class=\"card-body-a\">
                                    <div class=\"price-box d-flex\">
                                        <span class=\"price-a\">rent |  12.000 €</span>
                                    </div>
                                    {#<a href=\"property-single.html\" class=\"link-a\">Click here to view#}
                                        {#<span class=\"ion-ios-arrow-forward\"></span>#}
                                    {#</a>#}
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
", "property/index.html.twig", "C:\\xampp\\htdocs\\HelloFlatmate\\templates\\property\\index.html.twig");
    }
}
