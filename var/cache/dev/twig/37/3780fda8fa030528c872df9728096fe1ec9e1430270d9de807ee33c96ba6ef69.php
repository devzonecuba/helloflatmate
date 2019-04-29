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

/* reservar/reservar.html.twig */
class __TwigTemplate_c95fd4073778b1f12292f836d353791a85987d755014db26c181fd9e00cd8f5e extends \Twig\Template
{
    private $source;

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("config.html.twig", "reservar/reservar.html.twig", 1);
        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        return "config.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reservar/reservar.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reservar/reservar.html.twig"));

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
    <!-- Main content -->

    <!-- Page header -->
    <div class=\"page-header\">
        <div class=\"page-header-content\">
            <div class=\"page-title\">
                <h4><i class=\"icon-arrow-left52 position-left\"></i> <span class=\"text-semibold\">Reservación</span></h4>
            </div>
        </div>
    </div>
    <!-- /page header -->

    <!-- Daterange picker -->
    <div class=\"panel panel-flat\">
        <div class=\"panel-heading\">
            <h5 class=\"panel-title\">Buscar</h5>
            <div class=\"heading-elements\">
                <ul class=\"icons-list\">
                    <li><a data-action=\"collapse\"></a></li>
                </ul>
            </div>
        </div>

        <div class=\"panel-body\">
            <div class=\"row\">
                <div class=\"col-md-12\">
                    <div class=\"form-group col-md-3\">
                        <label>Basic date range picker: </label>
                        <div class=\"input-group\">
                            <span class=\"input-group-addon\"><i class=\"icon-calendar22\"></i></span>
                            <input type=\"text\" class=\"form-control daterange-basic\" value=\"\">
                        </div>
                    </div>

                    <div class=\"form-group col-md-3\">
                        <label>Show calendars on left: </label>
                        <div class=\"input-group\">
                            <input type=\"text\" class=\"form-control daterange-left\" value=\"\">
                            <span class=\"input-group-addon\"><i class=\"icon-calendar22\"></i></span>
                        </div>
                    </div>

                    <div class=\"form-group col-md-3\">
                        <label>Simple text field attachment: </label>
                        <input type=\"text\" class=\"form-control daterange-basic\" value=\" \">
                    </div>

                    <div class=\"form-group col-md-3\">
                        <label>Button class options: </label>
                        <input type=\"text\" class=\"form-control daterange-buttons\" value=\"\">
                    </div>
                </div>

                <div class=\"col-md-12\">
                    <div class=\"form-group col-md-3\">
                        <label>Basic single date picker: </label>
                        <div class=\"input-group\">
                            <span class=\"input-group-addon\"><i class=\"icon-calendar22\"></i></span>
                            <input type=\"text\" class=\"form-control daterange-single\">
                        </div>
                    </div>

                    ";
        // line 68
        echo "                        ";
        // line 69
        echo "                        ";
        // line 70
        echo "                            ";
        // line 71
        echo "                            ";
        // line 72
        echo "                            ";
        // line 73
        echo "                            ";
        // line 74
        echo "                        ";
        // line 75
        echo "                    ";
        // line 76
        echo "
                    <!-- Default select -->
                    <div class=\"form-group col-md-3\">
                        <label>Default select</label>
                        <select class=\"bootstrap-select\" data-width=\"100%\">
                            <option value=\"AK\">Alaska</option>
                            <option value=\"HI\">Hawaii</option>
                            <option value=\"CA\">California</option>
                            <option value=\"NV\">Nevada</option>
                            <option value=\"OR\">Oregon</option>
                        </select>
                    </div>
                    <!-- /default select -->

                    <div class=\"form-group col-md-3\">
                        <label>Nombre:</label>
                        <div>
                            <input type=\"text\" class=\"form-control\" placeholder=\"Nombre\">
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- /daterange picker -->

    <!-- Basic table -->
    <div class=\"panel panel-flat\">
        <div class=\"table-responsive\" style=\"border: 2px;\" >
            <table class=\"table\">
                <thead>
                <tr>
                    <th><b>#</b></th>
                    <th><b>First Name</b></th>
                    <th><b>Last Name</b></th>
                    <th><b>Username</b></th>
                    <th><b>Action</b></th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>1</td>
                    <td>Eugene</td>
                    <td>Kopyov</td>
                    <td>@Kopyov</td>
                    <td>
                        <ul class=\"icons-list\">
                            <li>
                                <a href=\"#\"><i class=\"icon-pencil7\"></i></a>
                            </li><li>
                                <a href=\"#\"><i class=\"icon-trash\"></i></a>
                            </li><li>
                                <a href=\"#\"><i class=\"icon-cog7\"></i></a>
                            </li>

                        </ul>
                    </td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Victoria</td>
                    <td>Baker</td>
                    <td>@Vicky</td>
                    <td>
                        <ul class=\"icons-list\">
                            <li>
                                <a href=\"#\"><i class=\"icon-pencil7\"></i></a>
                            </li><li>
                                <a href=\"#\"><i class=\"icon-trash\"></i></a>
                            </li><li>
                                <a href=\"#\"><i class=\"icon-cog7\"></i></a>
                            </li>

                        </ul>
                    </td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>James</td>
                    <td>Alexander</td>
                    <td>@Alex</td>
                    <td>
                        <ul class=\"icons-list\">
                            <li>
                                <a href=\"#\"><i class=\"icon-pencil7\"></i></a>
                            </li><li>
                                <a href=\"#\"><i class=\"icon-trash\"></i></a>
                            </li><li>
                                <a href=\"#\"><i class=\"icon-cog7\"></i></a>
                            </li>

                        </ul>
                    </td>
                </tr>
                <tr>
                    <td>4</td>
                    <td>Franklin</td>
                    <td>Morrison</td>
                    <td>@Frank</td>
                    <td>
                        <ul class=\"icons-list\">
                            <li>
                                <a href=\"#\"><i class=\"icon-pencil7\"></i></a>
                            </li><li>
                                <a href=\"#\"><i class=\"icon-trash\"></i></a>
                            </li><li>
                                <a href=\"#\"><i class=\"icon-cog7\"></i></a>
                            </li>

                        </ul>
                    </td>
                </tr>
                </tbody>
            </table>
        </div>

    </div>
    <!-- /basic table -->

    <!-- Basic datatable -->
    <div class=\"panel panel-flat\">
        <div class=\"panel-heading\">
            <h5 class=\"panel-title\">Basic datatable</h5>
        </div>

        <table class=\"table datatable-basic\">
            <thead>
            <tr>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Job Title</th>
                <th>DOB</th>
                <th>Status</th>
                <th class=\"text-center\">Actions</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>Marth</td>
                <td><a href=\"#\">Enright</a></td>
                <td>Traffic Court Referee</td>
                <td>22 Jun 1972</td>
                <td><span class=\"label label-success\">Active</span></td>
                <td class=\"text-center\">
                    <ul class=\"icons-list\">
                        <li>
                            <a href=\"#\"><i class=\"icon-pencil7\"></i></a>
                        </li><li>
                            <a href=\"#\"><i class=\"icon-trash\"></i></a>
                        </li><li>
                            <a href=\"#\"><i class=\"icon-cog7\"></i></a>
                        </li>
                    </ul>
                </td>
            </tr>
            <tr>
                <td>Jackelyn</td>
                <td>Weible</td>
                <td><a href=\"#\">Airline Transport Pilot</a></td>
                <td>3 Oct 1981</td>
                <td><span class=\"label label-default\">Inactive</span></td>
                <td class=\"text-center\">
                    <ul class=\"icons-list\">
                        <li>
                            <a href=\"#\"><i class=\"icon-pencil7\"></i></a>
                        </li><li>
                            <a href=\"#\"><i class=\"icon-trash\"></i></a>
                        </li><li>
                            <a href=\"#\"><i class=\"icon-cog7\"></i></a>
                        </li>
                    </ul>
                </td>
            </tr>
            <tr>
                <td>Aura</td>
                <td>Hard</td>
                <td>Business Services Sales Representative</td>
                <td>19 Apr 1969</td>
                <td><span class=\"label label-danger\">Suspended</span></td>
                <td class=\"text-center\">
                    <ul class=\"icons-list\">
                        <li>
                            <a href=\"#\"><i class=\"icon-pencil7\"></i></a>
                        </li><li>
                            <a href=\"#\"><i class=\"icon-trash\"></i></a>
                        </li><li>
                            <a href=\"#\"><i class=\"icon-cog7\"></i></a>
                        </li>
                    </ul>
                </td>
            </tr>
            <tr>
                <td>Nathalie</td>
                <td><a href=\"#\">Pretty</a></td>
                <td>Drywall Stripper</td>
                <td>13 Dec 1977</td>
                <td><span class=\"label label-info\">Pending</span></td>
                <td class=\"text-center\">
                    <ul class=\"icons-list\">
                        <li>
                            <a href=\"#\"><i class=\"icon-pencil7\"></i></a>
                        </li><li>
                            <a href=\"#\"><i class=\"icon-trash\"></i></a>
                        </li><li>
                            <a href=\"#\"><i class=\"icon-cog7\"></i></a>
                        </li>
                    </ul>
                </td>
            </tr>
            <tr>
                <td>Sharan</td>
                <td>Leland</td>
                <td>Aviation Tactical Readiness Officer</td>
                <td>30 Dec 1991</td>
                <td><span class=\"label label-default\">Inactive</span></td>
                <td class=\"text-center\">
                    <ul class=\"icons-list\">
                        <li>
                            <a href=\"#\"><i class=\"icon-pencil7\"></i></a>
                        </li><li>
                            <a href=\"#\"><i class=\"icon-trash\"></i></a>
                        </li><li>
                            <a href=\"#\"><i class=\"icon-cog7\"></i></a>
                        </li>
                    </ul>
                </td>
            </tr>
            <tr>
                <td>Maxine</td>
                <td><a href=\"#\">Woldt</a></td>
                <td><a href=\"#\">Business Services Sales Representative</a></td>
                <td>17 Oct 1987</td>
                <td><span class=\"label label-info\">Pending</span></td>
                <td class=\"text-center\">
                    <ul class=\"icons-list\">
                        <li>
                            <a href=\"#\"><i class=\"icon-pencil7\"></i></a>
                        </li><li>
                            <a href=\"#\"><i class=\"icon-trash\"></i></a>
                        </li><li>
                            <a href=\"#\"><i class=\"icon-cog7\"></i></a>
                        </li>
                    </ul>
                </td>
            </tr>
            <tr>
                <td>Sylvia</td>
                <td><a href=\"#\">Mcgaughy</a></td>
                <td>Hemodialysis Technician</td>
                <td>11 Nov 1983</td>
                <td><span class=\"label label-danger\">Suspended</span></td>
                <td class=\"text-center\">
                    <ul class=\"icons-list\">
                        <li>
                            <a href=\"#\"><i class=\"icon-pencil7\"></i></a>
                        </li><li>
                            <a href=\"#\"><i class=\"icon-trash\"></i></a>
                        </li><li>
                            <a href=\"#\"><i class=\"icon-cog7\"></i></a>
                        </li>
                    </ul>
                </td>
            </tr>
            <tr>
                <td>Lizzee</td>
                <td><a href=\"#\">Goodlow</a></td>
                <td>Technical Services Librarian</td>
                <td>1 Nov 1961</td>
                <td><span class=\"label label-danger\">Suspended</span></td>
                <td class=\"text-center\">
                    <ul class=\"icons-list\">
                        <li>
                            <a href=\"#\"><i class=\"icon-pencil7\"></i></a>
                        </li><li>
                            <a href=\"#\"><i class=\"icon-trash\"></i></a>
                        </li><li>
                            <a href=\"#\"><i class=\"icon-cog7\"></i></a>
                        </li>
                    </ul>
                </td>
            </tr>
            <tr>
                <td>Kennedy</td>
                <td>Haley</td>
                <td>Senior Marketing Designer</td>
                <td>18 Dec 1960</td>
                <td><span class=\"label label-success\">Active</span></td>
                <td class=\"text-center\">
                    <ul class=\"icons-list\">
                        <li>
                            <a href=\"#\"><i class=\"icon-pencil7\"></i></a>
                        </li><li>
                            <a href=\"#\"><i class=\"icon-trash\"></i></a>
                        </li><li>
                            <a href=\"#\"><i class=\"icon-cog7\"></i></a>
                        </li>
                    </ul>
                </td>
            </tr>
            <tr>
                <td>Chantal</td>
                <td><a href=\"#\">Nailor</a></td>
                <td>Technical Services Librarian</td>
                <td>10 Jan 1980</td>
                <td><span class=\"label label-default\">Inactive</span></td>
                <td class=\"text-center\">
                    <ul class=\"icons-list\">
                        <li>
                            <a href=\"#\"><i class=\"icon-pencil7\"></i></a>
                        </li><li>
                            <a href=\"#\"><i class=\"icon-trash\"></i></a>
                        </li><li>
                            <a href=\"#\"><i class=\"icon-cog7\"></i></a>
                        </li>
                    </ul>
                </td>
            </tr>
            <tr>
                <td>Delma</td>
                <td>Bonds</td>
                <td>Lead Brand Manager</td>
                <td>21 Dec 1968</td>
                <td><span class=\"label label-info\">Pending</span></td>
                <td class=\"text-center\">
                    <ul class=\"icons-list\">
                        <li>
                            <a href=\"#\"><i class=\"icon-pencil7\"></i></a>
                        </li><li>
                            <a href=\"#\"><i class=\"icon-trash\"></i></a>
                        </li><li>
                            <a href=\"#\"><i class=\"icon-cog7\"></i></a>
                        </li>
                    </ul>
                </td>
            </tr>
            <tr>
                <td>Roland</td>
                <td>Salmos</td>
                <td><a href=\"#\">Senior Program Developer</a></td>
                <td>5 Jun 1986</td>
                <td><span class=\"label label-default\">Inactive</span></td>
                <td class=\"text-center\">
                    <ul class=\"icons-list\">
                        <li>
                            <a href=\"#\"><i class=\"icon-pencil7\"></i></a>
                        </li><li>
                            <a href=\"#\"><i class=\"icon-trash\"></i></a>
                        </li><li>
                            <a href=\"#\"><i class=\"icon-cog7\"></i></a>
                        </li>
                    </ul>
                </td>
            </tr>
            <tr>
                <td>Coy</td>
                <td>Wollard</td>
                <td>Customer Service Operator</td>
                <td>12 Oct 1982</td>
                <td><span class=\"label label-success\">Active</span></td>
                <td class=\"text-center\">
                    <ul class=\"icons-list\">
                        <li>
                            <a href=\"#\"><i class=\"icon-pencil7\"></i></a>
                        </li><li>
                            <a href=\"#\"><i class=\"icon-trash\"></i></a>
                        </li><li>
                            <a href=\"#\"><i class=\"icon-cog7\"></i></a>
                        </li>
                    </ul>
                </td>
            </tr>
            <tr>
                <td>Maxwell</td>
                <td>Maben</td>
                <td>Regional Representative</td>
                <td>25 Feb 1988</td>
                <td><span class=\"label label-danger\">Suspended</span></td>
                <td class=\"text-center\">
                    <ul class=\"icons-list\">
                        <li>
                            <a href=\"#\"><i class=\"icon-pencil7\"></i></a>
                        </li><li>
                            <a href=\"#\"><i class=\"icon-trash\"></i></a>
                        </li><li>
                            <a href=\"#\"><i class=\"icon-cog7\"></i></a>
                        </li>
                    </ul>
                </td>
            </tr>
            <tr>
                <td>Cicely</td>
                <td>Sigler</td>
                <td><a href=\"#\">Senior Research Officer</a></td>
                <td>15 Mar 1960</td>
                <td><span class=\"label label-info\">Pending</span></td>
                <td class=\"text-center\">
                    <ul class=\"icons-list\">
                        <li>
                            <a href=\"#\"><i class=\"icon-pencil7\"></i></a>
                        </li><li>
                            <a href=\"#\"><i class=\"icon-trash\"></i></a>
                        </li><li>
                            <a href=\"#\"><i class=\"icon-cog7\"></i></a>
                        </li>
                    </ul>
                </td>
            </tr>
            </tbody>
        </table>
    </div>
    <!-- /basic datatable -->

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "reservar/reservar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  146 => 76,  144 => 75,  142 => 74,  140 => 73,  138 => 72,  136 => 71,  134 => 70,  132 => 69,  130 => 68,  65 => 4,  56 => 3,  27 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'config.html.twig' %}

{% block body %}

    <!-- Main content -->

    <!-- Page header -->
    <div class=\"page-header\">
        <div class=\"page-header-content\">
            <div class=\"page-title\">
                <h4><i class=\"icon-arrow-left52 position-left\"></i> <span class=\"text-semibold\">Reservación</span></h4>
            </div>
        </div>
    </div>
    <!-- /page header -->

    <!-- Daterange picker -->
    <div class=\"panel panel-flat\">
        <div class=\"panel-heading\">
            <h5 class=\"panel-title\">Buscar</h5>
            <div class=\"heading-elements\">
                <ul class=\"icons-list\">
                    <li><a data-action=\"collapse\"></a></li>
                </ul>
            </div>
        </div>

        <div class=\"panel-body\">
            <div class=\"row\">
                <div class=\"col-md-12\">
                    <div class=\"form-group col-md-3\">
                        <label>Basic date range picker: </label>
                        <div class=\"input-group\">
                            <span class=\"input-group-addon\"><i class=\"icon-calendar22\"></i></span>
                            <input type=\"text\" class=\"form-control daterange-basic\" value=\"\">
                        </div>
                    </div>

                    <div class=\"form-group col-md-3\">
                        <label>Show calendars on left: </label>
                        <div class=\"input-group\">
                            <input type=\"text\" class=\"form-control daterange-left\" value=\"\">
                            <span class=\"input-group-addon\"><i class=\"icon-calendar22\"></i></span>
                        </div>
                    </div>

                    <div class=\"form-group col-md-3\">
                        <label>Simple text field attachment: </label>
                        <input type=\"text\" class=\"form-control daterange-basic\" value=\" \">
                    </div>

                    <div class=\"form-group col-md-3\">
                        <label>Button class options: </label>
                        <input type=\"text\" class=\"form-control daterange-buttons\" value=\"\">
                    </div>
                </div>

                <div class=\"col-md-12\">
                    <div class=\"form-group col-md-3\">
                        <label>Basic single date picker: </label>
                        <div class=\"input-group\">
                            <span class=\"input-group-addon\"><i class=\"icon-calendar22\"></i></span>
                            <input type=\"text\" class=\"form-control daterange-single\">
                        </div>
                    </div>

                    {#<div class=\"form-group col-md-3\">#}
                        {#<label>Select with search</label>#}
                        {#<select class=\"select-search \">#}
                            {#<option value=\"AZ\">Arizona</option>#}
                            {#<option value=\"CO\">Colorado</option>#}
                            {#<option value=\"ID\">Idaho</option>#}
                            {#<option value=\"WY\">Wyoming</option>#}
                        {#</select>#}
                    {#</div>#}

                    <!-- Default select -->
                    <div class=\"form-group col-md-3\">
                        <label>Default select</label>
                        <select class=\"bootstrap-select\" data-width=\"100%\">
                            <option value=\"AK\">Alaska</option>
                            <option value=\"HI\">Hawaii</option>
                            <option value=\"CA\">California</option>
                            <option value=\"NV\">Nevada</option>
                            <option value=\"OR\">Oregon</option>
                        </select>
                    </div>
                    <!-- /default select -->

                    <div class=\"form-group col-md-3\">
                        <label>Nombre:</label>
                        <div>
                            <input type=\"text\" class=\"form-control\" placeholder=\"Nombre\">
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- /daterange picker -->

    <!-- Basic table -->
    <div class=\"panel panel-flat\">
        <div class=\"table-responsive\" style=\"border: 2px;\" >
            <table class=\"table\">
                <thead>
                <tr>
                    <th><b>#</b></th>
                    <th><b>First Name</b></th>
                    <th><b>Last Name</b></th>
                    <th><b>Username</b></th>
                    <th><b>Action</b></th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>1</td>
                    <td>Eugene</td>
                    <td>Kopyov</td>
                    <td>@Kopyov</td>
                    <td>
                        <ul class=\"icons-list\">
                            <li>
                                <a href=\"#\"><i class=\"icon-pencil7\"></i></a>
                            </li><li>
                                <a href=\"#\"><i class=\"icon-trash\"></i></a>
                            </li><li>
                                <a href=\"#\"><i class=\"icon-cog7\"></i></a>
                            </li>

                        </ul>
                    </td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Victoria</td>
                    <td>Baker</td>
                    <td>@Vicky</td>
                    <td>
                        <ul class=\"icons-list\">
                            <li>
                                <a href=\"#\"><i class=\"icon-pencil7\"></i></a>
                            </li><li>
                                <a href=\"#\"><i class=\"icon-trash\"></i></a>
                            </li><li>
                                <a href=\"#\"><i class=\"icon-cog7\"></i></a>
                            </li>

                        </ul>
                    </td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>James</td>
                    <td>Alexander</td>
                    <td>@Alex</td>
                    <td>
                        <ul class=\"icons-list\">
                            <li>
                                <a href=\"#\"><i class=\"icon-pencil7\"></i></a>
                            </li><li>
                                <a href=\"#\"><i class=\"icon-trash\"></i></a>
                            </li><li>
                                <a href=\"#\"><i class=\"icon-cog7\"></i></a>
                            </li>

                        </ul>
                    </td>
                </tr>
                <tr>
                    <td>4</td>
                    <td>Franklin</td>
                    <td>Morrison</td>
                    <td>@Frank</td>
                    <td>
                        <ul class=\"icons-list\">
                            <li>
                                <a href=\"#\"><i class=\"icon-pencil7\"></i></a>
                            </li><li>
                                <a href=\"#\"><i class=\"icon-trash\"></i></a>
                            </li><li>
                                <a href=\"#\"><i class=\"icon-cog7\"></i></a>
                            </li>

                        </ul>
                    </td>
                </tr>
                </tbody>
            </table>
        </div>

    </div>
    <!-- /basic table -->

    <!-- Basic datatable -->
    <div class=\"panel panel-flat\">
        <div class=\"panel-heading\">
            <h5 class=\"panel-title\">Basic datatable</h5>
        </div>

        <table class=\"table datatable-basic\">
            <thead>
            <tr>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Job Title</th>
                <th>DOB</th>
                <th>Status</th>
                <th class=\"text-center\">Actions</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>Marth</td>
                <td><a href=\"#\">Enright</a></td>
                <td>Traffic Court Referee</td>
                <td>22 Jun 1972</td>
                <td><span class=\"label label-success\">Active</span></td>
                <td class=\"text-center\">
                    <ul class=\"icons-list\">
                        <li>
                            <a href=\"#\"><i class=\"icon-pencil7\"></i></a>
                        </li><li>
                            <a href=\"#\"><i class=\"icon-trash\"></i></a>
                        </li><li>
                            <a href=\"#\"><i class=\"icon-cog7\"></i></a>
                        </li>
                    </ul>
                </td>
            </tr>
            <tr>
                <td>Jackelyn</td>
                <td>Weible</td>
                <td><a href=\"#\">Airline Transport Pilot</a></td>
                <td>3 Oct 1981</td>
                <td><span class=\"label label-default\">Inactive</span></td>
                <td class=\"text-center\">
                    <ul class=\"icons-list\">
                        <li>
                            <a href=\"#\"><i class=\"icon-pencil7\"></i></a>
                        </li><li>
                            <a href=\"#\"><i class=\"icon-trash\"></i></a>
                        </li><li>
                            <a href=\"#\"><i class=\"icon-cog7\"></i></a>
                        </li>
                    </ul>
                </td>
            </tr>
            <tr>
                <td>Aura</td>
                <td>Hard</td>
                <td>Business Services Sales Representative</td>
                <td>19 Apr 1969</td>
                <td><span class=\"label label-danger\">Suspended</span></td>
                <td class=\"text-center\">
                    <ul class=\"icons-list\">
                        <li>
                            <a href=\"#\"><i class=\"icon-pencil7\"></i></a>
                        </li><li>
                            <a href=\"#\"><i class=\"icon-trash\"></i></a>
                        </li><li>
                            <a href=\"#\"><i class=\"icon-cog7\"></i></a>
                        </li>
                    </ul>
                </td>
            </tr>
            <tr>
                <td>Nathalie</td>
                <td><a href=\"#\">Pretty</a></td>
                <td>Drywall Stripper</td>
                <td>13 Dec 1977</td>
                <td><span class=\"label label-info\">Pending</span></td>
                <td class=\"text-center\">
                    <ul class=\"icons-list\">
                        <li>
                            <a href=\"#\"><i class=\"icon-pencil7\"></i></a>
                        </li><li>
                            <a href=\"#\"><i class=\"icon-trash\"></i></a>
                        </li><li>
                            <a href=\"#\"><i class=\"icon-cog7\"></i></a>
                        </li>
                    </ul>
                </td>
            </tr>
            <tr>
                <td>Sharan</td>
                <td>Leland</td>
                <td>Aviation Tactical Readiness Officer</td>
                <td>30 Dec 1991</td>
                <td><span class=\"label label-default\">Inactive</span></td>
                <td class=\"text-center\">
                    <ul class=\"icons-list\">
                        <li>
                            <a href=\"#\"><i class=\"icon-pencil7\"></i></a>
                        </li><li>
                            <a href=\"#\"><i class=\"icon-trash\"></i></a>
                        </li><li>
                            <a href=\"#\"><i class=\"icon-cog7\"></i></a>
                        </li>
                    </ul>
                </td>
            </tr>
            <tr>
                <td>Maxine</td>
                <td><a href=\"#\">Woldt</a></td>
                <td><a href=\"#\">Business Services Sales Representative</a></td>
                <td>17 Oct 1987</td>
                <td><span class=\"label label-info\">Pending</span></td>
                <td class=\"text-center\">
                    <ul class=\"icons-list\">
                        <li>
                            <a href=\"#\"><i class=\"icon-pencil7\"></i></a>
                        </li><li>
                            <a href=\"#\"><i class=\"icon-trash\"></i></a>
                        </li><li>
                            <a href=\"#\"><i class=\"icon-cog7\"></i></a>
                        </li>
                    </ul>
                </td>
            </tr>
            <tr>
                <td>Sylvia</td>
                <td><a href=\"#\">Mcgaughy</a></td>
                <td>Hemodialysis Technician</td>
                <td>11 Nov 1983</td>
                <td><span class=\"label label-danger\">Suspended</span></td>
                <td class=\"text-center\">
                    <ul class=\"icons-list\">
                        <li>
                            <a href=\"#\"><i class=\"icon-pencil7\"></i></a>
                        </li><li>
                            <a href=\"#\"><i class=\"icon-trash\"></i></a>
                        </li><li>
                            <a href=\"#\"><i class=\"icon-cog7\"></i></a>
                        </li>
                    </ul>
                </td>
            </tr>
            <tr>
                <td>Lizzee</td>
                <td><a href=\"#\">Goodlow</a></td>
                <td>Technical Services Librarian</td>
                <td>1 Nov 1961</td>
                <td><span class=\"label label-danger\">Suspended</span></td>
                <td class=\"text-center\">
                    <ul class=\"icons-list\">
                        <li>
                            <a href=\"#\"><i class=\"icon-pencil7\"></i></a>
                        </li><li>
                            <a href=\"#\"><i class=\"icon-trash\"></i></a>
                        </li><li>
                            <a href=\"#\"><i class=\"icon-cog7\"></i></a>
                        </li>
                    </ul>
                </td>
            </tr>
            <tr>
                <td>Kennedy</td>
                <td>Haley</td>
                <td>Senior Marketing Designer</td>
                <td>18 Dec 1960</td>
                <td><span class=\"label label-success\">Active</span></td>
                <td class=\"text-center\">
                    <ul class=\"icons-list\">
                        <li>
                            <a href=\"#\"><i class=\"icon-pencil7\"></i></a>
                        </li><li>
                            <a href=\"#\"><i class=\"icon-trash\"></i></a>
                        </li><li>
                            <a href=\"#\"><i class=\"icon-cog7\"></i></a>
                        </li>
                    </ul>
                </td>
            </tr>
            <tr>
                <td>Chantal</td>
                <td><a href=\"#\">Nailor</a></td>
                <td>Technical Services Librarian</td>
                <td>10 Jan 1980</td>
                <td><span class=\"label label-default\">Inactive</span></td>
                <td class=\"text-center\">
                    <ul class=\"icons-list\">
                        <li>
                            <a href=\"#\"><i class=\"icon-pencil7\"></i></a>
                        </li><li>
                            <a href=\"#\"><i class=\"icon-trash\"></i></a>
                        </li><li>
                            <a href=\"#\"><i class=\"icon-cog7\"></i></a>
                        </li>
                    </ul>
                </td>
            </tr>
            <tr>
                <td>Delma</td>
                <td>Bonds</td>
                <td>Lead Brand Manager</td>
                <td>21 Dec 1968</td>
                <td><span class=\"label label-info\">Pending</span></td>
                <td class=\"text-center\">
                    <ul class=\"icons-list\">
                        <li>
                            <a href=\"#\"><i class=\"icon-pencil7\"></i></a>
                        </li><li>
                            <a href=\"#\"><i class=\"icon-trash\"></i></a>
                        </li><li>
                            <a href=\"#\"><i class=\"icon-cog7\"></i></a>
                        </li>
                    </ul>
                </td>
            </tr>
            <tr>
                <td>Roland</td>
                <td>Salmos</td>
                <td><a href=\"#\">Senior Program Developer</a></td>
                <td>5 Jun 1986</td>
                <td><span class=\"label label-default\">Inactive</span></td>
                <td class=\"text-center\">
                    <ul class=\"icons-list\">
                        <li>
                            <a href=\"#\"><i class=\"icon-pencil7\"></i></a>
                        </li><li>
                            <a href=\"#\"><i class=\"icon-trash\"></i></a>
                        </li><li>
                            <a href=\"#\"><i class=\"icon-cog7\"></i></a>
                        </li>
                    </ul>
                </td>
            </tr>
            <tr>
                <td>Coy</td>
                <td>Wollard</td>
                <td>Customer Service Operator</td>
                <td>12 Oct 1982</td>
                <td><span class=\"label label-success\">Active</span></td>
                <td class=\"text-center\">
                    <ul class=\"icons-list\">
                        <li>
                            <a href=\"#\"><i class=\"icon-pencil7\"></i></a>
                        </li><li>
                            <a href=\"#\"><i class=\"icon-trash\"></i></a>
                        </li><li>
                            <a href=\"#\"><i class=\"icon-cog7\"></i></a>
                        </li>
                    </ul>
                </td>
            </tr>
            <tr>
                <td>Maxwell</td>
                <td>Maben</td>
                <td>Regional Representative</td>
                <td>25 Feb 1988</td>
                <td><span class=\"label label-danger\">Suspended</span></td>
                <td class=\"text-center\">
                    <ul class=\"icons-list\">
                        <li>
                            <a href=\"#\"><i class=\"icon-pencil7\"></i></a>
                        </li><li>
                            <a href=\"#\"><i class=\"icon-trash\"></i></a>
                        </li><li>
                            <a href=\"#\"><i class=\"icon-cog7\"></i></a>
                        </li>
                    </ul>
                </td>
            </tr>
            <tr>
                <td>Cicely</td>
                <td>Sigler</td>
                <td><a href=\"#\">Senior Research Officer</a></td>
                <td>15 Mar 1960</td>
                <td><span class=\"label label-info\">Pending</span></td>
                <td class=\"text-center\">
                    <ul class=\"icons-list\">
                        <li>
                            <a href=\"#\"><i class=\"icon-pencil7\"></i></a>
                        </li><li>
                            <a href=\"#\"><i class=\"icon-trash\"></i></a>
                        </li><li>
                            <a href=\"#\"><i class=\"icon-cog7\"></i></a>
                        </li>
                    </ul>
                </td>
            </tr>
            </tbody>
        </table>
    </div>
    <!-- /basic datatable -->

{% endblock %}", "reservar/reservar.html.twig", "C:\\xampp\\htdocs\\HelloFlatmate\\templates\\reservar\\reservar.html.twig");
    }
}
