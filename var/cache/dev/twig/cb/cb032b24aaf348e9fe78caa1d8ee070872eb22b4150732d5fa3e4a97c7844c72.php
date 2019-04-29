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

/* property/flats.html.twig */
class __TwigTemplate_543ffb59136f176a7075540e2266474ea51255b22d4b4728e869142ffb51938f extends \Twig\Template
{
    private $source;

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "property/flats.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "property/flats.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "property/flats.html.twig"));

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
        echo "
    <!--/ Intro Single star /-->
    <section class=\"intro-single\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-12 col-lg-8\">
                    <div class=\"title-single-box\">
                        <h1 class=\"title-single\">304 Blaster Up</h1>
                        <span class=\"color-text-a\">Chicago, IL 606543</span>
                    </div>
                </div>
                <div class=\"col-md-12 col-lg-4\">

                </div>
            </div>
        </div>
    </section>
    <!--/ Intro Single End /-->

    <!--/ Property Single Star /-->
    <section class=\"property-single nav-arrow-b\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-sm-12\">
                    <div id=\"property-single-carousel\" class=\"owl-carousel owl-arrow gallery-property\">
                        <div class=\"carousel-item-b\">
                            <img src=\"assets/img/rooms_details/carusel/slide-2.jpg\" alt=\"\">
                        </div>
                        <div class=\"carousel-item-b\">
                            <img src=\"assets/img/rooms_details/carusel/slide-3.jpg\" alt=\"\">
                        </div>
                        <div class=\"carousel-item-b\">
                            <img src=\"assets/img/rooms_details/carusel/slide-1.jpg\" alt=\"\">
                        </div>
                    </div>
                    <div class=\"row justify-content-between\">
                        <div class=\"col-md-5 col-lg-4\">
                            <div class=\"container\" style=\"text-align: center\">
                                <h2 class=\"\" ><b>Costo: 800 €</b></h2>
                            </div>

                            <div class=\"property-summary\">
                                <div class=\"row\">
                                    <div class=\"col-sm-12\">
                                        <div class=\"title-box-d select-magin-top\">
                                            <h3 class=\"title-d\">Detalles</h3>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"summary-list\">
                                    <ul class=\"list\">
                                        <li class=\"d-flex justify-content-between\">
                                            <strong>Huspedes:</strong>
                                            <span>4</span>
                                        </li>
                                        <li class=\"d-flex justify-content-between\">
                                            <strong>Camas:</strong>
                                            <span>4</span>
                                        </li>
                                        <li class=\"d-flex justify-content-between\">
                                            <strong>Baños:</strong>
                                            <span>2</span>
                                        </li>
                                        <li class=\"d-flex justify-content-between\">
                                            <strong>Balcon:</strong>
                                            <span>1</span>
                                        </li>
                                        <li class=\"d-flex justify-content-between\">
                                            <strong>Garaje:</strong>
                                            <span>1</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <div class=\"property-summary\">
                                <div class=\"row\">
                                    <div class=\"col-sm-12\">
                                        <div class=\"title-box-d select-magin-top\">
                                            <h3 class=\"title-d\">Disponibilidad</h3>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"summary-list\">
                                    <p>Estancia mínima 3 noches</p>
                                    <form>
                                        <div class=\"form-group\">
                                            <input type=\"text\" style=\"border-radius: 0px\" class=\"form-control\" id=\"recipient-name\" placeholder=\"Fecha de Inicio\">
                                        </div>

                                        <div class=\"form-group\">
                                            <input type=\"password\" style=\"border-radius: 0px\" class=\"form-control\" id=\"recipient-name\" placeholder=\"Fecha de Fin\">
                                        </div>

                                        <br>

                                        <div class=\"container\" style=\"text-align: center\">
                                            <a href=\"#\" type=\"button\" class=\"btn btn-a\">Reservar Ahora</a>
                                        </div>
                                    </form>
                                </div>
                            </div>

                        </div>
                        <div class=\"col-md-7 col-lg-7 section-md-t3\">
                            <div class=\"row\">
                                <div class=\"col-sm-12\">
                                    <div class=\"title-box-d\">
                                        <h3 class=\"title-d\">Descripción de la habitación</h3>
                                    </div>
                                </div>
                            </div>
                            <div class=\"property-description\">
                                <p class=\"description color-text-a\">
                                    Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit
                                    neque, auctor sit amet
                                    aliquam vel, ullamcorper sit amet ligula. Cras ultricies ligula sed magna dictum porta.
                                    Curabitur aliquet quam id dui posuere blandit. Mauris blandit aliquet elit, eget tincidunt
                                    nibh pulvinar quam id dui posuere blandit.
                                </p>
                                <p class=\"description color-text-a no-margin\">
                                    Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem. Donec rutrum congue leo eget
                                    malesuada. Quisque velit nisi,
                                    pretium ut lacinia in, elementum id enim. Donec sollicitudin molestie malesuada.
                                </p>
                            </div>
                            <div class=\"row section-t3\">
                                <div class=\"col-sm-12\">
                                    <div class=\"title-box-d\">
                                        <h3 class=\"title-d\">Servicios</h3>
                                    </div>
                                </div>
                            </div>
                            <div class=\"amenities-list color-text-a\">
                                <ul class=\"list-a no-margin\">
                                    <li>Balcony</li>
                                    <li>Outdoor Kitchen</li>
                                    <li>Cable Tv</li>
                                    <li>Deck</li>
                                    <li>Tennis Courts</li>
                                    <li>Internet</li>
                                    <li>Parking</li>
                                    <li>Sun Room</li>
                                    <li>Concrete Flooring</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <div class=\"col-md-10 offset-md-1\">
                    <ul class=\"nav nav-pills-a nav-pills mb-3\" id=\"pills-tab\" role=\"tablist\">
                        ";
        // line 157
        echo "                            ";
        // line 158
        echo "                               ";
        // line 159
        echo "                        ";
        // line 160
        echo "                        ";
        // line 161
        echo "                            ";
        // line 162
        echo "                               ";
        // line 163
        echo "                        ";
        // line 164
        echo "                        <li class=\"nav-item\">
                            <a class=\"nav-link active\" id=\"pills-map-tab\" data-toggle=\"pill\" href=\"#pills-map\" role=\"tab\" aria-controls=\"pills-map\"
                               aria-selected=\"false\">Ubication</a>
                        </li>
                    </ul>
                    <div class=\"tab-content\" id=\"pills-tabContent\">
                        ";
        // line 171
        echo "                            ";
        // line 172
        echo "                                    ";
        // line 173
        echo "                        ";
        // line 174
        echo "                        ";
        // line 175
        echo "                            ";
        // line 176
        echo "                        ";
        // line 177
        echo "                        <div class=\"tab-pane fade show active\" id=\"pills-map\" role=\"tabpanel\" aria-labelledby=\"pills-map-tab\">
                            <iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3022.1422937950147!2d-73.98731968482413!3d40.75889497932681!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c25855c6480299%3A0x55194ec5a1ae072e!2sTimes+Square!5e0!3m2!1ses-419!2sve!4v1510329142834\"
                                    width=\"100%\" height=\"460\" frameborder=\"0\" style=\"border:0\" allowfullscreen></iframe>
                        </div>
                    </div>
                </div>

                <div class=\"col-md-12\">
                    <div class=\"row section-t3\">
                        <div class=\"col-sm-12\">
                            <div class=\"title-box-d\">
                                <h3 class=\"title-d\">Anfitrión</h3>
                            </div>
                        </div>
                    </div>
                    <div class=\"row\">
                        <div class=\"col-md-6 col-lg-4\">
                            <img src=\"assets/img/rooms_details/agent/agent-4.jpg\" alt=\"\" class=\"img-fluid\">
                        </div>
                        <div class=\"col-md-6 col-lg-4\">
                            <div class=\"property-agent\">
                                <h4 class=\"title-agent\">Felix Arango</h4>
                                <p class=\"color-text-a\">
                                    Nulla porttitor accumsan tincidunt. Vestibulum ac diam sit amet quam vehicula elementum sed sit amet
                                    dui. Quisque velit nisi,
                                    pretium ut lacinia in, elementum id enim.
                                </p>
                                <ul class=\"list-unstyled\">
                                    <li class=\"d-flex justify-content-between\">
                                        <strong>Telefono:</strong>
                                        <span class=\"color-text-a\">(222) 4568932</span>
                                    </li>
                                    <li class=\"d-flex justify-content-between\">
                                        <strong>Celular:</strong>
                                        <span class=\"color-text-a\">777 287 378 737</span>
                                    </li>
                                    <li class=\"d-flex justify-content-between\">
                                        <strong>Correo:</strong>
                                        <span class=\"color-text-a\">felix@example.com</span>
                                    </li>
                                </ul>
                                ";
        // line 219
        echo "                                    ";
        // line 220
        echo "                                        ";
        // line 221
        echo "                                            ";
        // line 222
        echo "                                                ";
        // line 223
        echo "                                            ";
        // line 224
        echo "                                        ";
        // line 225
        echo "                                        ";
        // line 226
        echo "                                            ";
        // line 227
        echo "                                                ";
        // line 228
        echo "                                            ";
        // line 229
        echo "                                        ";
        // line 230
        echo "                                        ";
        // line 231
        echo "                                            ";
        // line 232
        echo "                                                ";
        // line 233
        echo "                                            ";
        // line 234
        echo "                                        ";
        // line 235
        echo "                                        ";
        // line 236
        echo "                                            ";
        // line 237
        echo "                                                ";
        // line 238
        echo "                                            ";
        // line 239
        echo "                                        ";
        // line 240
        echo "                                        ";
        // line 241
        echo "                                            ";
        // line 242
        echo "                                                ";
        // line 243
        echo "                                            ";
        // line 244
        echo "                                        ";
        // line 245
        echo "                                    ";
        // line 246
        echo "                                ";
        // line 247
        echo "                            </div>
                        </div>
                        <div class=\"col-md-12 col-lg-4\">
                            <div class=\"property-contact\">
                                <form class=\"form-a\">
                                    <div class=\"row\">
                                        <div class=\"col-md-12 mb-1\">
                                            <div class=\"form-group\">
                                                <input type=\"text\" class=\"form-control form-control-lg form-control-a\" id=\"inputName\"
                                                       placeholder=\"Nombre\" required>
                                            </div>
                                        </div>
                                        <div class=\"col-md-12 mb-1\">
                                            <div class=\"form-group\">
                                                <input type=\"email\" class=\"form-control form-control-lg form-control-a\" id=\"inputEmail1\"
                                                       placeholder=\"Correo\" required>
                                            </div>
                                        </div>
                                        <div class=\"col-md-12 mb-1\">
                                            <div class=\"form-group\">
                                                <textarea id=\"textMessage\" class=\"form-control\" placeholder=\"Descripción\" name=\"message\" cols=\"45\"
                                                rows=\"8\" required></textarea>
                                            </div>
                                        </div>
                                        <div class=\"col-md-12\">
                                            <button type=\"submit\" class=\"btn btn-a\">Enviar</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/ Property Single End /-->

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "property/flats.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  352 => 247,  350 => 246,  348 => 245,  346 => 244,  344 => 243,  342 => 242,  340 => 241,  338 => 240,  336 => 239,  334 => 238,  332 => 237,  330 => 236,  328 => 235,  326 => 234,  324 => 233,  322 => 232,  320 => 231,  318 => 230,  316 => 229,  314 => 228,  312 => 227,  310 => 226,  308 => 225,  306 => 224,  304 => 223,  302 => 222,  300 => 221,  298 => 220,  296 => 219,  253 => 177,  251 => 176,  249 => 175,  247 => 174,  245 => 173,  243 => 172,  241 => 171,  233 => 164,  231 => 163,  229 => 162,  227 => 161,  225 => 160,  223 => 159,  221 => 158,  219 => 157,  65 => 4,  56 => 3,  27 => 1,);
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
                        <h1 class=\"title-single\">304 Blaster Up</h1>
                        <span class=\"color-text-a\">Chicago, IL 606543</span>
                    </div>
                </div>
                <div class=\"col-md-12 col-lg-4\">

                </div>
            </div>
        </div>
    </section>
    <!--/ Intro Single End /-->

    <!--/ Property Single Star /-->
    <section class=\"property-single nav-arrow-b\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-sm-12\">
                    <div id=\"property-single-carousel\" class=\"owl-carousel owl-arrow gallery-property\">
                        <div class=\"carousel-item-b\">
                            <img src=\"assets/img/rooms_details/carusel/slide-2.jpg\" alt=\"\">
                        </div>
                        <div class=\"carousel-item-b\">
                            <img src=\"assets/img/rooms_details/carusel/slide-3.jpg\" alt=\"\">
                        </div>
                        <div class=\"carousel-item-b\">
                            <img src=\"assets/img/rooms_details/carusel/slide-1.jpg\" alt=\"\">
                        </div>
                    </div>
                    <div class=\"row justify-content-between\">
                        <div class=\"col-md-5 col-lg-4\">
                            <div class=\"container\" style=\"text-align: center\">
                                <h2 class=\"\" ><b>Costo: 800 €</b></h2>
                            </div>

                            <div class=\"property-summary\">
                                <div class=\"row\">
                                    <div class=\"col-sm-12\">
                                        <div class=\"title-box-d select-magin-top\">
                                            <h3 class=\"title-d\">Detalles</h3>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"summary-list\">
                                    <ul class=\"list\">
                                        <li class=\"d-flex justify-content-between\">
                                            <strong>Huspedes:</strong>
                                            <span>4</span>
                                        </li>
                                        <li class=\"d-flex justify-content-between\">
                                            <strong>Camas:</strong>
                                            <span>4</span>
                                        </li>
                                        <li class=\"d-flex justify-content-between\">
                                            <strong>Baños:</strong>
                                            <span>2</span>
                                        </li>
                                        <li class=\"d-flex justify-content-between\">
                                            <strong>Balcon:</strong>
                                            <span>1</span>
                                        </li>
                                        <li class=\"d-flex justify-content-between\">
                                            <strong>Garaje:</strong>
                                            <span>1</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <div class=\"property-summary\">
                                <div class=\"row\">
                                    <div class=\"col-sm-12\">
                                        <div class=\"title-box-d select-magin-top\">
                                            <h3 class=\"title-d\">Disponibilidad</h3>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"summary-list\">
                                    <p>Estancia mínima 3 noches</p>
                                    <form>
                                        <div class=\"form-group\">
                                            <input type=\"text\" style=\"border-radius: 0px\" class=\"form-control\" id=\"recipient-name\" placeholder=\"Fecha de Inicio\">
                                        </div>

                                        <div class=\"form-group\">
                                            <input type=\"password\" style=\"border-radius: 0px\" class=\"form-control\" id=\"recipient-name\" placeholder=\"Fecha de Fin\">
                                        </div>

                                        <br>

                                        <div class=\"container\" style=\"text-align: center\">
                                            <a href=\"#\" type=\"button\" class=\"btn btn-a\">Reservar Ahora</a>
                                        </div>
                                    </form>
                                </div>
                            </div>

                        </div>
                        <div class=\"col-md-7 col-lg-7 section-md-t3\">
                            <div class=\"row\">
                                <div class=\"col-sm-12\">
                                    <div class=\"title-box-d\">
                                        <h3 class=\"title-d\">Descripción de la habitación</h3>
                                    </div>
                                </div>
                            </div>
                            <div class=\"property-description\">
                                <p class=\"description color-text-a\">
                                    Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit
                                    neque, auctor sit amet
                                    aliquam vel, ullamcorper sit amet ligula. Cras ultricies ligula sed magna dictum porta.
                                    Curabitur aliquet quam id dui posuere blandit. Mauris blandit aliquet elit, eget tincidunt
                                    nibh pulvinar quam id dui posuere blandit.
                                </p>
                                <p class=\"description color-text-a no-margin\">
                                    Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem. Donec rutrum congue leo eget
                                    malesuada. Quisque velit nisi,
                                    pretium ut lacinia in, elementum id enim. Donec sollicitudin molestie malesuada.
                                </p>
                            </div>
                            <div class=\"row section-t3\">
                                <div class=\"col-sm-12\">
                                    <div class=\"title-box-d\">
                                        <h3 class=\"title-d\">Servicios</h3>
                                    </div>
                                </div>
                            </div>
                            <div class=\"amenities-list color-text-a\">
                                <ul class=\"list-a no-margin\">
                                    <li>Balcony</li>
                                    <li>Outdoor Kitchen</li>
                                    <li>Cable Tv</li>
                                    <li>Deck</li>
                                    <li>Tennis Courts</li>
                                    <li>Internet</li>
                                    <li>Parking</li>
                                    <li>Sun Room</li>
                                    <li>Concrete Flooring</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <div class=\"col-md-10 offset-md-1\">
                    <ul class=\"nav nav-pills-a nav-pills mb-3\" id=\"pills-tab\" role=\"tablist\">
                        {#<li class=\"nav-item\">#}
                            {#<a class=\"nav-link active\" id=\"pills-video-tab\" data-toggle=\"pill\" href=\"#pills-video\" role=\"tab\"#}
                               {#aria-controls=\"pills-video\" aria-selected=\"true\">Video</a>#}
                        {#</li>#}
                        {#<li class=\"nav-item\">#}
                            {#<a class=\"nav-link\" id=\"pills-plans-tab\" data-toggle=\"pill\" href=\"#pills-plans\" role=\"tab\" aria-controls=\"pills-plans\"#}
                               {#aria-selected=\"false\">Floor Plans</a>#}
                        {#</li>#}
                        <li class=\"nav-item\">
                            <a class=\"nav-link active\" id=\"pills-map-tab\" data-toggle=\"pill\" href=\"#pills-map\" role=\"tab\" aria-controls=\"pills-map\"
                               aria-selected=\"false\">Ubication</a>
                        </li>
                    </ul>
                    <div class=\"tab-content\" id=\"pills-tabContent\">
                        {#<div class=\"tab-pane fade show active\" id=\"pills-video\" role=\"tabpanel\" aria-labelledby=\"pills-video-tab\">#}
                            {#<iframe src=\"https://player.vimeo.com/video/73221098\" width=\"100%\" height=\"460\" frameborder=\"0\"#}
                                    {#webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>#}
                        {#</div>#}
                        {#<div class=\"tab-pane fade\" id=\"pills-plans\" role=\"tabpanel\" aria-labelledby=\"pills-plans-tab\">#}
                            {#<img src=\"assets/img/rooms_details/plan2.jpg\" alt=\"\" class=\"img-fluid\">#}
                        {#</div>#}
                        <div class=\"tab-pane fade show active\" id=\"pills-map\" role=\"tabpanel\" aria-labelledby=\"pills-map-tab\">
                            <iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3022.1422937950147!2d-73.98731968482413!3d40.75889497932681!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c25855c6480299%3A0x55194ec5a1ae072e!2sTimes+Square!5e0!3m2!1ses-419!2sve!4v1510329142834\"
                                    width=\"100%\" height=\"460\" frameborder=\"0\" style=\"border:0\" allowfullscreen></iframe>
                        </div>
                    </div>
                </div>

                <div class=\"col-md-12\">
                    <div class=\"row section-t3\">
                        <div class=\"col-sm-12\">
                            <div class=\"title-box-d\">
                                <h3 class=\"title-d\">Anfitrión</h3>
                            </div>
                        </div>
                    </div>
                    <div class=\"row\">
                        <div class=\"col-md-6 col-lg-4\">
                            <img src=\"assets/img/rooms_details/agent/agent-4.jpg\" alt=\"\" class=\"img-fluid\">
                        </div>
                        <div class=\"col-md-6 col-lg-4\">
                            <div class=\"property-agent\">
                                <h4 class=\"title-agent\">Felix Arango</h4>
                                <p class=\"color-text-a\">
                                    Nulla porttitor accumsan tincidunt. Vestibulum ac diam sit amet quam vehicula elementum sed sit amet
                                    dui. Quisque velit nisi,
                                    pretium ut lacinia in, elementum id enim.
                                </p>
                                <ul class=\"list-unstyled\">
                                    <li class=\"d-flex justify-content-between\">
                                        <strong>Telefono:</strong>
                                        <span class=\"color-text-a\">(222) 4568932</span>
                                    </li>
                                    <li class=\"d-flex justify-content-between\">
                                        <strong>Celular:</strong>
                                        <span class=\"color-text-a\">777 287 378 737</span>
                                    </li>
                                    <li class=\"d-flex justify-content-between\">
                                        <strong>Correo:</strong>
                                        <span class=\"color-text-a\">felix@example.com</span>
                                    </li>
                                </ul>
                                {#<div class=\"socials-a\">#}
                                    {#<ul class=\"list-inline\">#}
                                        {#<li class=\"list-inline-item\">#}
                                            {#<a href=\"#\">#}
                                                {#<i class=\"fa fa-facebook\" aria-hidden=\"true\"></i>#}
                                            {#</a>#}
                                        {#</li>#}
                                        {#<li class=\"list-inline-item\">#}
                                            {#<a href=\"#\">#}
                                                {#<i class=\"fa fa-twitter\" aria-hidden=\"true\"></i>#}
                                            {#</a>#}
                                        {#</li>#}
                                        {#<li class=\"list-inline-item\">#}
                                            {#<a href=\"#\">#}
                                                {#<i class=\"fa fa-instagram\" aria-hidden=\"true\"></i>#}
                                            {#</a>#}
                                        {#</li>#}
                                        {#<li class=\"list-inline-item\">#}
                                            {#<a href=\"#\">#}
                                                {#<i class=\"fa fa-pinterest-p\" aria-hidden=\"true\"></i>#}
                                            {#</a>#}
                                        {#</li>#}
                                        {#<li class=\"list-inline-item\">#}
                                            {#<a href=\"#\">#}
                                                {#<i class=\"fa fa-dribbble\" aria-hidden=\"true\"></i>#}
                                            {#</a>#}
                                        {#</li>#}
                                    {#</ul>#}
                                {#</div>#}
                            </div>
                        </div>
                        <div class=\"col-md-12 col-lg-4\">
                            <div class=\"property-contact\">
                                <form class=\"form-a\">
                                    <div class=\"row\">
                                        <div class=\"col-md-12 mb-1\">
                                            <div class=\"form-group\">
                                                <input type=\"text\" class=\"form-control form-control-lg form-control-a\" id=\"inputName\"
                                                       placeholder=\"Nombre\" required>
                                            </div>
                                        </div>
                                        <div class=\"col-md-12 mb-1\">
                                            <div class=\"form-group\">
                                                <input type=\"email\" class=\"form-control form-control-lg form-control-a\" id=\"inputEmail1\"
                                                       placeholder=\"Correo\" required>
                                            </div>
                                        </div>
                                        <div class=\"col-md-12 mb-1\">
                                            <div class=\"form-group\">
                                                <textarea id=\"textMessage\" class=\"form-control\" placeholder=\"Descripción\" name=\"message\" cols=\"45\"
                                                rows=\"8\" required></textarea>
                                            </div>
                                        </div>
                                        <div class=\"col-md-12\">
                                            <button type=\"submit\" class=\"btn btn-a\">Enviar</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/ Property Single End /-->

{% endblock %}
", "property/flats.html.twig", "C:\\xampp\\htdocs\\HelloFlatmate\\templates\\property\\flats.html.twig");
    }
}
