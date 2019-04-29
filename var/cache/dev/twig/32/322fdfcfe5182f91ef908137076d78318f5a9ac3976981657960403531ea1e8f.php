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

/* reservar/index.html.twig */
class __TwigTemplate_96e0433cd939a1c0d1134fd98cd2916daf4af5fb33859fea992212701590b5ce extends \Twig\Template
{
    private $source;

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("main.html.twig", "reservar/index.html.twig", 1);
        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        return "main.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reservar/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reservar/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 4
    public function block_body($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "
    <!-- Content Wrapper. Contains page content -->
    <div class=\"content-wrapper\">
        <!-- Content Header (Page header) -->
        <section class=\"content-header\">
            <h1>
                Reservaciones
            </h1>
        </section>

        <!-- Main content -->
        <section class=\"content\">

            <!-- Buscar -->
            <div class=\"box box-primary\">
                <div class=\"box-header with-border\">
                    <h3 class=\"box-title\">Buscar</h3>

                    <div class=\"box-tools pull-right\">
                        <button type=\"button\" class=\"btn btn-box-tool\" data-widget=\"collapse\"><i class=\"fa fa-minus\"></i></button>
                    </div>
                </div>

                <div class=\"box-body\">
                    <div class=\"row\">
                        <div class=\"col-md-12\">

                            ";
        // line 33
        echo "                            <div class=\"form-group col-md-3\">
                                <label>Minimal</label>
                                <select class=\"form-control select2\" style=\"width: 100%;\">
                                    <option selected=\"selected\">Alabama</option>
                                    <option>Alaska</option>
                                    <option>California</option>
                                    <option>Delaware</option>
                                    <option>Tennessee</option>
                                    <option>Texas</option>
                                    <option>Washington</option>
                                </select>
                            </div>

                            ";
        // line 47
        echo "                            <div class=\"form-group col-md-3\">
                                <label for=\"exampleInputEmail1\">Email address</label>
                                <input type=\"email\" class=\"form-control\" id=\"exampleInputEmail1\" placeholder=\"Enter email\">
                            </div>

                        </div>
                    </div>

                    <div class=\"row\">
                        <div class=\"col-md-12\">
                            <!-- Fecha -->
                            <div class=\"form-group col-md-3\">
                                <label>Fecha:</label>
                                <div class=\"input-group date\">
                                    <div class=\"input-group-addon\">
                                        <i class=\"fa fa-calendar\"></i>
                                    </div>
                                    <input type=\"text\" class=\"form-control pull-right\" id=\"datepicker\">
                                </div>
                            </div>

                            <!-- Rango de Fecha -->
                            <div class=\"form-group col-md-3\">
                                <label>Rango de Fecha:</label>
                                <div class=\"input-group\">
                                    <div class=\"input-group-addon\">
                                        <i class=\"fa fa-calendar\"></i>
                                    </div>
                                    <input type=\"text\" class=\"form-control pull-right\" id=\"reservation\">
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>

            <div class=\"row\">
                <div class=\"col-xs-12\">
                    <div class=\"box box-primary\">
                        <div class=\"box-header\">
                            <h3 class=\"box-title\">Responsive Hover Table</h3>
                        </div>
                        <!-- /.box-header -->
                        <div class=\"box-body table-responsive no-padding\">
                            <table class=\"table table-hover\">
                                <tr>
                                    <th>ID</th>
                                    <th>User</th>
                                    <th>Date</th>
                                    <th>Status</th>
                                    <th>Reason</th>
                                </tr>
                                <tr>
                                    <td>183</td>
                                    <td>John Doe</td>
                                    <td>11-7-2014</td>
                                    <td><span class=\"label label-success\">Approved</span></td>
                                    <td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
                                </tr>
                                <tr>
                                    <td>219</td>
                                    <td>Alexander Pierce</td>
                                    <td>11-7-2014</td>
                                    <td><span class=\"label label-warning\">Pending</span></td>
                                    <td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
                                </tr>
                                <tr>
                                    <td>657</td>
                                    <td>Bob Doe</td>
                                    <td>11-7-2014</td>
                                    <td><span class=\"label label-primary\">Approved</span></td>
                                    <td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
                                </tr>
                                <tr>
                                    <td>175</td>
                                    <td>Mike Doe</td>
                                    <td>11-7-2014</td>
                                    <td><span class=\"label label-danger\">Denied</span></td>
                                    <td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
                                </tr>
                            </table>
                        </div>
                        <!-- /.box-body -->
                    </div>
                    <!-- /.box -->
                </div>
            </div>

        </section>

    </div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "reservar/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  109 => 47,  94 => 33,  65 => 5,  56 => 4,  27 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'main.html.twig' %}


{% block body %}

    <!-- Content Wrapper. Contains page content -->
    <div class=\"content-wrapper\">
        <!-- Content Header (Page header) -->
        <section class=\"content-header\">
            <h1>
                Reservaciones
            </h1>
        </section>

        <!-- Main content -->
        <section class=\"content\">

            <!-- Buscar -->
            <div class=\"box box-primary\">
                <div class=\"box-header with-border\">
                    <h3 class=\"box-title\">Buscar</h3>

                    <div class=\"box-tools pull-right\">
                        <button type=\"button\" class=\"btn btn-box-tool\" data-widget=\"collapse\"><i class=\"fa fa-minus\"></i></button>
                    </div>
                </div>

                <div class=\"box-body\">
                    <div class=\"row\">
                        <div class=\"col-md-12\">

                            {#List Box#}
                            <div class=\"form-group col-md-3\">
                                <label>Minimal</label>
                                <select class=\"form-control select2\" style=\"width: 100%;\">
                                    <option selected=\"selected\">Alabama</option>
                                    <option>Alaska</option>
                                    <option>California</option>
                                    <option>Delaware</option>
                                    <option>Tennessee</option>
                                    <option>Texas</option>
                                    <option>Washington</option>
                                </select>
                            </div>

                            {#Input#}
                            <div class=\"form-group col-md-3\">
                                <label for=\"exampleInputEmail1\">Email address</label>
                                <input type=\"email\" class=\"form-control\" id=\"exampleInputEmail1\" placeholder=\"Enter email\">
                            </div>

                        </div>
                    </div>

                    <div class=\"row\">
                        <div class=\"col-md-12\">
                            <!-- Fecha -->
                            <div class=\"form-group col-md-3\">
                                <label>Fecha:</label>
                                <div class=\"input-group date\">
                                    <div class=\"input-group-addon\">
                                        <i class=\"fa fa-calendar\"></i>
                                    </div>
                                    <input type=\"text\" class=\"form-control pull-right\" id=\"datepicker\">
                                </div>
                            </div>

                            <!-- Rango de Fecha -->
                            <div class=\"form-group col-md-3\">
                                <label>Rango de Fecha:</label>
                                <div class=\"input-group\">
                                    <div class=\"input-group-addon\">
                                        <i class=\"fa fa-calendar\"></i>
                                    </div>
                                    <input type=\"text\" class=\"form-control pull-right\" id=\"reservation\">
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>

            <div class=\"row\">
                <div class=\"col-xs-12\">
                    <div class=\"box box-primary\">
                        <div class=\"box-header\">
                            <h3 class=\"box-title\">Responsive Hover Table</h3>
                        </div>
                        <!-- /.box-header -->
                        <div class=\"box-body table-responsive no-padding\">
                            <table class=\"table table-hover\">
                                <tr>
                                    <th>ID</th>
                                    <th>User</th>
                                    <th>Date</th>
                                    <th>Status</th>
                                    <th>Reason</th>
                                </tr>
                                <tr>
                                    <td>183</td>
                                    <td>John Doe</td>
                                    <td>11-7-2014</td>
                                    <td><span class=\"label label-success\">Approved</span></td>
                                    <td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
                                </tr>
                                <tr>
                                    <td>219</td>
                                    <td>Alexander Pierce</td>
                                    <td>11-7-2014</td>
                                    <td><span class=\"label label-warning\">Pending</span></td>
                                    <td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
                                </tr>
                                <tr>
                                    <td>657</td>
                                    <td>Bob Doe</td>
                                    <td>11-7-2014</td>
                                    <td><span class=\"label label-primary\">Approved</span></td>
                                    <td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
                                </tr>
                                <tr>
                                    <td>175</td>
                                    <td>Mike Doe</td>
                                    <td>11-7-2014</td>
                                    <td><span class=\"label label-danger\">Denied</span></td>
                                    <td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
                                </tr>
                            </table>
                        </div>
                        <!-- /.box-body -->
                    </div>
                    <!-- /.box -->
                </div>
            </div>

        </section>

    </div>

{% endblock %}
", "reservar/index.html.twig", "C:\\xampp\\htdocs\\HelloFlatmate\\templates\\reservar\\index.html.twig");
    }
}
