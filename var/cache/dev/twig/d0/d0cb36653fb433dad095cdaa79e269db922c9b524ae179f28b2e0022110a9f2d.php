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

/* property/reservation.html.twig */
class __TwigTemplate_cad956dc49539484b51be553903595904e6e14eeb93a4d9c261a235468a578a9 extends \Twig\Template
{
    private $source;

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "property/reservation.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "property/reservation.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "property/reservation.html.twig"));

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
                <div class=\"col-md-12 col-lg-12\">
                    <div class=\"title-single-box\">
                        <h1 class=\"title-single\">Detalles de la Facturación</h1>

                        <div class=\"amenities-list color-text-a\">
                            <table>
                                <tr>
                                    <td width=\"400px\"><b>Dirección</b></td>
                                    <td width=\"200px\">Calle Valecia</td>
                                </tr>
                                <tr>
                                    <td width=\"400px\"><b>Desde </b></td>
                                    <td width=\"200px\">27/07/2019</td>
                                </tr>
                                <tr>
                                    <td width=\"400px\"><b>Hasta</b></td>
                                    <td width=\"200px\">1/12/2019</td>
                                </tr>
                                <tr>
                                    <td width=\"400px\"><b>Duración</b></td>
                                    <td width=\"200px\">150 días</td>
                                </tr>

                                <tr>
                                    <td width=\"400px\"><b>Cantidad de Personas</b></td>
                                    <td width=\"200px\">3</td>
                                </tr>

                                <tr>
                                    <td width=\"400px\"><b>Costo de Servicios Adicionales</b></td>
                                    <td width=\"200px\"> 200 €</td>
                                </tr>

                                <tr>
                                    <td width=\"200px\"><h5><b>Total a pagar</b></h5></td>
                                    <td width=\"200px\"><h5><b>2000 €</b></h5></td>

                                </tr>

                            </table>

                            <br>
                            <div class=\"\" style=\"text-align: left\">
                                <a href=\"";
        // line 52
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("rooms");
        echo "\" type=\"button\" class=\"btn btn-a\">Actualizar Reservación</a>
                            </div>

                        </div>
                    </div>
                </div>


            </div>
        </div>
    </section>

    <!--/ Intro Single star /-->
    <section class=\"margin-single-line\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-12 col-lg-12\">
                    <div class=\"title-single-box\">
                        <h1 class=\"title-single\">Finalizar Reservación</h1>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/ Intro Single End /-->

    <!--/ About Star /-->
    <section class=\"section-about\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-sm-12\">
                    <div class=\"about-img-box\">
                        <div class=\"col-sm-12\">
                            <form class=\"form-a contactForm\" action=\"\" method=\"post\" role=\"form\">
                                <div class=\"row\">
                                    <div class=\"col-md-7\">
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
                                                    <input type=\"text\" name=\"name\" class=\"form-control form-control-lg form-control-a\" placeholder=\"Apellido\" data-rule=\"minlen:4\" data-msg=\"Por favor, introduzca como minimo 4 caracteres\">
                                                    <div class=\"validation\"></div>
                                                </div>
                                            </div>

                                            <div class=\"col-md-6 mb-3\">
                                                <div class=\"form-group\">
                                                    <input name=\"subject\" class=\"form-control form-control-lg form-control-a\" placeholder=\"DNI/Pasaporte\" data-rule=\"minlen:4\" data-msg=\"Por favor, introduzca como minimo 4 caracteres\">
                                                    <div class=\"validation\"></div>
                                                </div>
                                            </div>

                                            <div class=\"col-md-6 mb-3\">
                                                <div class=\"form-group\">
                                                    <select class=\"form-control form-control-lg form-control-a\" id=\"tipo\">
                                                        <option>Femenino</option>
                                                        <option>Masculino</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class=\"col-md-6 mb-3\">
                                                <div class=\"form-group\">
                                                    <input name=\"subject\" class=\"form-control form-control-lg form-control-a\" placeholder=\"Telefono\" data-rule=\"minlen:4\" data-msg=\"Por favor, introduzca como minimo 4 caracteres\">
                                                    <div class=\"validation\"></div>
                                                </div>
                                            </div>

                                            <div class=\"col-md-6 mb-3\">
                                                <div class=\"form-group\">
                                                    <input name=\"email\" type=\"email\" class=\"form-control form-control-lg form-control-a\" placeholder=\"Correo Electronico\" data-rule=\"email\" data-msg=\"Por favor, introduzca un correo valido\">
                                                    <div class=\"validation\"></div>
                                                </div>
                                            </div>
                                            <div class=\"col-md-12\">
                                                <button type=\"submit\" class=\"btn btn-a\">Confirmar</button>
                                            </div>
                                        </div>
                                    </div>

                                    <div class=\"col-md-5 section-md-t3\">
                                        <div class=\"icon-box section-b2\">
                                            <div class=\"col-md-12\">
                                                <div class=\"form-group\">
                                                    <textarea id=\"textMessage\" class=\"form-control\" placeholder=\"Descripción\" name=\"message\"
                                                              rows=\"8\" required></textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/ About End /-->


";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "property/reservation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  115 => 52,  65 => 4,  56 => 3,  27 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}

    <!--/ Intro Single star /-->
    <section class=\"intro-single\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-12 col-lg-12\">
                    <div class=\"title-single-box\">
                        <h1 class=\"title-single\">Detalles de la Facturación</h1>

                        <div class=\"amenities-list color-text-a\">
                            <table>
                                <tr>
                                    <td width=\"400px\"><b>Dirección</b></td>
                                    <td width=\"200px\">Calle Valecia</td>
                                </tr>
                                <tr>
                                    <td width=\"400px\"><b>Desde </b></td>
                                    <td width=\"200px\">27/07/2019</td>
                                </tr>
                                <tr>
                                    <td width=\"400px\"><b>Hasta</b></td>
                                    <td width=\"200px\">1/12/2019</td>
                                </tr>
                                <tr>
                                    <td width=\"400px\"><b>Duración</b></td>
                                    <td width=\"200px\">150 días</td>
                                </tr>

                                <tr>
                                    <td width=\"400px\"><b>Cantidad de Personas</b></td>
                                    <td width=\"200px\">3</td>
                                </tr>

                                <tr>
                                    <td width=\"400px\"><b>Costo de Servicios Adicionales</b></td>
                                    <td width=\"200px\"> 200 €</td>
                                </tr>

                                <tr>
                                    <td width=\"200px\"><h5><b>Total a pagar</b></h5></td>
                                    <td width=\"200px\"><h5><b>2000 €</b></h5></td>

                                </tr>

                            </table>

                            <br>
                            <div class=\"\" style=\"text-align: left\">
                                <a href=\"{{ url('rooms') }}\" type=\"button\" class=\"btn btn-a\">Actualizar Reservación</a>
                            </div>

                        </div>
                    </div>
                </div>


            </div>
        </div>
    </section>

    <!--/ Intro Single star /-->
    <section class=\"margin-single-line\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-12 col-lg-12\">
                    <div class=\"title-single-box\">
                        <h1 class=\"title-single\">Finalizar Reservación</h1>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/ Intro Single End /-->

    <!--/ About Star /-->
    <section class=\"section-about\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-sm-12\">
                    <div class=\"about-img-box\">
                        <div class=\"col-sm-12\">
                            <form class=\"form-a contactForm\" action=\"\" method=\"post\" role=\"form\">
                                <div class=\"row\">
                                    <div class=\"col-md-7\">
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
                                                    <input type=\"text\" name=\"name\" class=\"form-control form-control-lg form-control-a\" placeholder=\"Apellido\" data-rule=\"minlen:4\" data-msg=\"Por favor, introduzca como minimo 4 caracteres\">
                                                    <div class=\"validation\"></div>
                                                </div>
                                            </div>

                                            <div class=\"col-md-6 mb-3\">
                                                <div class=\"form-group\">
                                                    <input name=\"subject\" class=\"form-control form-control-lg form-control-a\" placeholder=\"DNI/Pasaporte\" data-rule=\"minlen:4\" data-msg=\"Por favor, introduzca como minimo 4 caracteres\">
                                                    <div class=\"validation\"></div>
                                                </div>
                                            </div>

                                            <div class=\"col-md-6 mb-3\">
                                                <div class=\"form-group\">
                                                    <select class=\"form-control form-control-lg form-control-a\" id=\"tipo\">
                                                        <option>Femenino</option>
                                                        <option>Masculino</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class=\"col-md-6 mb-3\">
                                                <div class=\"form-group\">
                                                    <input name=\"subject\" class=\"form-control form-control-lg form-control-a\" placeholder=\"Telefono\" data-rule=\"minlen:4\" data-msg=\"Por favor, introduzca como minimo 4 caracteres\">
                                                    <div class=\"validation\"></div>
                                                </div>
                                            </div>

                                            <div class=\"col-md-6 mb-3\">
                                                <div class=\"form-group\">
                                                    <input name=\"email\" type=\"email\" class=\"form-control form-control-lg form-control-a\" placeholder=\"Correo Electronico\" data-rule=\"email\" data-msg=\"Por favor, introduzca un correo valido\">
                                                    <div class=\"validation\"></div>
                                                </div>
                                            </div>
                                            <div class=\"col-md-12\">
                                                <button type=\"submit\" class=\"btn btn-a\">Confirmar</button>
                                            </div>
                                        </div>
                                    </div>

                                    <div class=\"col-md-5 section-md-t3\">
                                        <div class=\"icon-box section-b2\">
                                            <div class=\"col-md-12\">
                                                <div class=\"form-group\">
                                                    <textarea id=\"textMessage\" class=\"form-control\" placeholder=\"Descripción\" name=\"message\"
                                                              rows=\"8\" required></textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/ About End /-->


{% endblock %}
", "property/reservation.html.twig", "C:\\xampp\\htdocs\\HelloFlatmate\\templates\\property\\reservation.html.twig");
    }
}
