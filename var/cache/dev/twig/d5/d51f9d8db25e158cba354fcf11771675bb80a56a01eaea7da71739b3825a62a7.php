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

/* home/contactos.html.twig */
class __TwigTemplate_2fab0100e85bc66c8f582a8fcb627cd5eca57e7c9c530913a89ba8b93472ea0c extends \Twig\Template
{
    private $source;

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "home/contactos.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/contactos.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/contactos.html.twig"));

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
                        <h1 class=\"title-single\">Contactenos</h1>
                        <h5>Hola como esta!</h5>
                        <span class=\"color-text-a\">
                            Estamos aquí para ayudarle a encontrar la que necesita. Si tiene alguna duda, sugerencia o
                            busca una habitación con requisitos especificos, escribanos y nosotros le responderemos lo antes posible.
                            Estamos aqui para satisfacer sus necesidades.
                        </span>
                    </div>
                </div>
                <div class=\"col-md-12 col-lg-4\" style=\"text-align: center\">
                    <span class=\"fa fa-user-o fa-10x\"></span>
                </div>


            </div>
        </div>
    </section>
    <!--/ Intro Single End /-->

    <!--/ Contact Star /-->
    <section class=\"contact\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-sm-12\">
                    <div class=\"contact-map box\">
                        <div id=\"map\" class=\"contact-map\">
                            <iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d457.8269297924789!2d-0.3518237952974273!3d39.47203523817395!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd604f4c731d5149%3A0x6703f30f956f146a!2sHelloflatmate!5e0!3m2!1ses-419!2scu!4v1555614602366!5m2!1ses-419!2scu\"
                                    width=\"100%\" height=\"450\" frameborder=\"0\" style=\"border:0\" allowfullscreen></iframe>
                        </div>
                    </div>
                </div>
                <div class=\"col-sm-12 section-t8\">
                    <div class=\"row\">
                        <div class=\"col-md-7\">
                            <form class=\"form-a contactForm\" action=\"\" method=\"post\" role=\"form\">
                                <div id=\"sendmessage\">Your message has been sent. Thank you!</div>
                                <div id=\"errormessage\"></div>
                                <div class=\"row\">
                                    <div class=\"col-md-6 mb-3\">
                                        <div class=\"form-group\">
                                            <input type=\"text\" name=\"name\" class=\"form-control form-control-lg form-control-a\" placeholder=\"Nombre\" data-rule=\"minlen:4\" data-msg=\"Por favor, introduzca como minimo 4 caracteres\">
                                            <div class=\"validation\"></div>
                                        </div>
                                    </div>
                                    <div class=\"col-md-6 mb-3\">
                                        <div class=\"form-group\">
                                            <input name=\"email\" type=\"email\" class=\"form-control form-control-lg form-control-a\" placeholder=\"Correo Electronico\" data-rule=\"email\" data-msg=\"Por favor, introduzca un correo valido\">
                                            <div class=\"validation\"></div>
                                        </div>
                                    </div>
                                    <div class=\"col-md-12 mb-3\">
                                        <div class=\"form-group\">
                                            <input name=\"subject\" class=\"form-control form-control-lg form-control-a\" placeholder=\"Asunto\" data-rule=\"minlen:4\" data-msg=\"Por favor, introduzca como minimo 4 caracteres\">
                                            <div class=\"validation\"></div>
                                        </div>
                                    </div>
                                    <div class=\"col-md-12 mb-3\">
                                        <div class=\"form-group\">
                                            <textarea name=\"message\" class=\"form-control\" name=\"message\" cols=\"45\" rows=\"8\" data-rule=\"required\" data-msg=\"Por favor, escribanos algo\" placeholder=\"Descripción\"></textarea>
                                            <div class=\"validation\"></div>
                                        </div>
                                    </div>
                                    <div class=\"col-md-12\">
                                        <button type=\"submit\" class=\"btn btn-a\">Enviar</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class=\"col-md-5 section-md-t3\">
                            <div class=\"icon-box section-b2\">
                                <div class=\"icon-box-icon\">
                                    <span class=\"ion-ios-paper-plane\"></span>
                                </div>
                                <div class=\"icon-box-content table-cell\">
                                    <div class=\"icon-box-title\">
                                        <h4 class=\"icon-title\">Contactenos</h4>
                                    </div>
                                    <div class=\"icon-box-content\">
                                        <p class=\"mb-1\">Correo:
                                            <span class=\"color-a\">rooms@helloflatmate.com</span>
                                        </p>
                                        <p class=\"mb-1\">Telefono:
                                            <span class=\"color-a\">+54 356 945234</span>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class=\"icon-box section-b2\">
                                <div class=\"icon-box-icon\">
                                    <span class=\"ion-ios-pin\"></span>
                                </div>
                                <div class=\"icon-box-content table-cell\">
                                    <div class=\"icon-box-title\">
                                        <h4 class=\"icon-title\">Encuentranos</h4>
                                    </div>
                                    <div class=\"icon-box-content\">
                                        <p class=\"mb-1\">
                                            Carrer de Campoamor, 8, 1ºA, 46021
                                            <br> Valencia. España.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            ";
        // line 115
        echo "                                ";
        // line 116
        echo "                                    ";
        // line 117
        echo "                                ";
        // line 118
        echo "                                ";
        // line 119
        echo "                                    ";
        // line 120
        echo "                                        ";
        // line 121
        echo "                                    ";
        // line 122
        echo "                                    ";
        // line 123
        echo "                                        ";
        // line 124
        echo "                                            ";
        // line 125
        echo "                                                ";
        // line 126
        echo "                                                    ";
        // line 127
        echo "                                                        ";
        // line 128
        echo "                                                    ";
        // line 129
        echo "                                                ";
        // line 130
        echo "                                                ";
        // line 131
        echo "                                                    ";
        // line 132
        echo "                                                        ";
        // line 133
        echo "                                                    ";
        // line 134
        echo "                                                ";
        // line 135
        echo "                                                ";
        // line 136
        echo "                                                    ";
        // line 137
        echo "                                                        ";
        // line 138
        echo "                                                    ";
        // line 139
        echo "                                                ";
        // line 140
        echo "                                                ";
        // line 141
        echo "                                                    ";
        // line 142
        echo "                                                        ";
        // line 143
        echo "                                                    ";
        // line 144
        echo "                                                ";
        // line 145
        echo "                                                ";
        // line 146
        echo "                                                    ";
        // line 147
        echo "                                                        ";
        // line 148
        echo "                                                    ";
        // line 149
        echo "                                                ";
        // line 150
        echo "                                            ";
        // line 151
        echo "                                        ";
        // line 152
        echo "                                    ";
        // line 153
        echo "                                ";
        // line 154
        echo "                            ";
        // line 155
        echo "                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--/ Contact End /-->


";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "home/contactos.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  257 => 155,  255 => 154,  253 => 153,  251 => 152,  249 => 151,  247 => 150,  245 => 149,  243 => 148,  241 => 147,  239 => 146,  237 => 145,  235 => 144,  233 => 143,  231 => 142,  229 => 141,  227 => 140,  225 => 139,  223 => 138,  221 => 137,  219 => 136,  217 => 135,  215 => 134,  213 => 133,  211 => 132,  209 => 131,  207 => 130,  205 => 129,  203 => 128,  201 => 127,  199 => 126,  197 => 125,  195 => 124,  193 => 123,  191 => 122,  189 => 121,  187 => 120,  185 => 119,  183 => 118,  181 => 117,  179 => 116,  177 => 115,  65 => 4,  56 => 3,  27 => 1,);
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
                        <h1 class=\"title-single\">Contactenos</h1>
                        <h5>Hola como esta!</h5>
                        <span class=\"color-text-a\">
                            Estamos aquí para ayudarle a encontrar la que necesita. Si tiene alguna duda, sugerencia o
                            busca una habitación con requisitos especificos, escribanos y nosotros le responderemos lo antes posible.
                            Estamos aqui para satisfacer sus necesidades.
                        </span>
                    </div>
                </div>
                <div class=\"col-md-12 col-lg-4\" style=\"text-align: center\">
                    <span class=\"fa fa-user-o fa-10x\"></span>
                </div>


            </div>
        </div>
    </section>
    <!--/ Intro Single End /-->

    <!--/ Contact Star /-->
    <section class=\"contact\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-sm-12\">
                    <div class=\"contact-map box\">
                        <div id=\"map\" class=\"contact-map\">
                            <iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d457.8269297924789!2d-0.3518237952974273!3d39.47203523817395!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd604f4c731d5149%3A0x6703f30f956f146a!2sHelloflatmate!5e0!3m2!1ses-419!2scu!4v1555614602366!5m2!1ses-419!2scu\"
                                    width=\"100%\" height=\"450\" frameborder=\"0\" style=\"border:0\" allowfullscreen></iframe>
                        </div>
                    </div>
                </div>
                <div class=\"col-sm-12 section-t8\">
                    <div class=\"row\">
                        <div class=\"col-md-7\">
                            <form class=\"form-a contactForm\" action=\"\" method=\"post\" role=\"form\">
                                <div id=\"sendmessage\">Your message has been sent. Thank you!</div>
                                <div id=\"errormessage\"></div>
                                <div class=\"row\">
                                    <div class=\"col-md-6 mb-3\">
                                        <div class=\"form-group\">
                                            <input type=\"text\" name=\"name\" class=\"form-control form-control-lg form-control-a\" placeholder=\"Nombre\" data-rule=\"minlen:4\" data-msg=\"Por favor, introduzca como minimo 4 caracteres\">
                                            <div class=\"validation\"></div>
                                        </div>
                                    </div>
                                    <div class=\"col-md-6 mb-3\">
                                        <div class=\"form-group\">
                                            <input name=\"email\" type=\"email\" class=\"form-control form-control-lg form-control-a\" placeholder=\"Correo Electronico\" data-rule=\"email\" data-msg=\"Por favor, introduzca un correo valido\">
                                            <div class=\"validation\"></div>
                                        </div>
                                    </div>
                                    <div class=\"col-md-12 mb-3\">
                                        <div class=\"form-group\">
                                            <input name=\"subject\" class=\"form-control form-control-lg form-control-a\" placeholder=\"Asunto\" data-rule=\"minlen:4\" data-msg=\"Por favor, introduzca como minimo 4 caracteres\">
                                            <div class=\"validation\"></div>
                                        </div>
                                    </div>
                                    <div class=\"col-md-12 mb-3\">
                                        <div class=\"form-group\">
                                            <textarea name=\"message\" class=\"form-control\" name=\"message\" cols=\"45\" rows=\"8\" data-rule=\"required\" data-msg=\"Por favor, escribanos algo\" placeholder=\"Descripción\"></textarea>
                                            <div class=\"validation\"></div>
                                        </div>
                                    </div>
                                    <div class=\"col-md-12\">
                                        <button type=\"submit\" class=\"btn btn-a\">Enviar</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class=\"col-md-5 section-md-t3\">
                            <div class=\"icon-box section-b2\">
                                <div class=\"icon-box-icon\">
                                    <span class=\"ion-ios-paper-plane\"></span>
                                </div>
                                <div class=\"icon-box-content table-cell\">
                                    <div class=\"icon-box-title\">
                                        <h4 class=\"icon-title\">Contactenos</h4>
                                    </div>
                                    <div class=\"icon-box-content\">
                                        <p class=\"mb-1\">Correo:
                                            <span class=\"color-a\">rooms@helloflatmate.com</span>
                                        </p>
                                        <p class=\"mb-1\">Telefono:
                                            <span class=\"color-a\">+54 356 945234</span>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class=\"icon-box section-b2\">
                                <div class=\"icon-box-icon\">
                                    <span class=\"ion-ios-pin\"></span>
                                </div>
                                <div class=\"icon-box-content table-cell\">
                                    <div class=\"icon-box-title\">
                                        <h4 class=\"icon-title\">Encuentranos</h4>
                                    </div>
                                    <div class=\"icon-box-content\">
                                        <p class=\"mb-1\">
                                            Carrer de Campoamor, 8, 1ºA, 46021
                                            <br> Valencia. España.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            {#<div class=\"icon-box\">#}
                                {#<div class=\"icon-box-icon\">#}
                                    {#<span class=\"ion-ios-redo\"></span>#}
                                {#</div>#}
                                {#<div class=\"icon-box-content table-cell\">#}
                                    {#<div class=\"icon-box-title\">#}
                                        {#<h4 class=\"icon-title\">Social networks</h4>#}
                                    {#</div>#}
                                    {#<div class=\"icon-box-content\">#}
                                        {#<div class=\"socials-footer\">#}
                                            {#<ul class=\"list-inline\">#}
                                                {#<li class=\"list-inline-item\">#}
                                                    {#<a href=\"#\" class=\"link-one\">#}
                                                        {#<i class=\"fa fa-facebook\" aria-hidden=\"true\"></i>#}
                                                    {#</a>#}
                                                {#</li>#}
                                                {#<li class=\"list-inline-item\">#}
                                                    {#<a href=\"#\" class=\"link-one\">#}
                                                        {#<i class=\"fa fa-twitter\" aria-hidden=\"true\"></i>#}
                                                    {#</a>#}
                                                {#</li>#}
                                                {#<li class=\"list-inline-item\">#}
                                                    {#<a href=\"#\" class=\"link-one\">#}
                                                        {#<i class=\"fa fa-instagram\" aria-hidden=\"true\"></i>#}
                                                    {#</a>#}
                                                {#</li>#}
                                                {#<li class=\"list-inline-item\">#}
                                                    {#<a href=\"#\" class=\"link-one\">#}
                                                        {#<i class=\"fa fa-pinterest-p\" aria-hidden=\"true\"></i>#}
                                                    {#</a>#}
                                                {#</li>#}
                                                {#<li class=\"list-inline-item\">#}
                                                    {#<a href=\"#\" class=\"link-one\">#}
                                                        {#<i class=\"fa fa-dribbble\" aria-hidden=\"true\"></i>#}
                                                    {#</a>#}
                                                {#</li>#}
                                            {#</ul>#}
                                        {#</div>#}
                                    {#</div>#}
                                {#</div>#}
                            {#</div>#}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--/ Contact End /-->


{% endblock %}
", "home/contactos.html.twig", "C:\\xampp\\htdocs\\HelloFlatmate\\templates\\home\\contactos.html.twig");
    }
}
