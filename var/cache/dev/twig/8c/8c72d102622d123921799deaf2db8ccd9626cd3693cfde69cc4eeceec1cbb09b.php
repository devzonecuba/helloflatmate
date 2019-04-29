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

/* piso/show.html.twig */
class __TwigTemplate_a8a4e475cf7e7b531e07410e6d6e1d6f6994f87cc49f577d5f57123790da32e3 extends \Twig\Template
{
    private $source;

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("config.html.twig", "piso/show.html.twig", 1);
        $this->blocks = [
            'title' => [$this, 'block_title'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "piso/show.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "piso/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Piso";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <h1>Piso</h1>

    <table class=\"table\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 12
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["piso"]) || array_key_exists("piso", $context) ? $context["piso"] : (function () { throw new RuntimeError('Variable "piso" does not exist.', 12, $this->source); })()), "id", []), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Direccion</th>
                <td>";
        // line 16
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["piso"]) || array_key_exists("piso", $context) ? $context["piso"] : (function () { throw new RuntimeError('Variable "piso" does not exist.', 16, $this->source); })()), "direccion", []), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Precio</th>
                <td>";
        // line 20
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["piso"]) || array_key_exists("piso", $context) ? $context["piso"] : (function () { throw new RuntimeError('Variable "piso" does not exist.', 20, $this->source); })()), "precio", []), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Canthabitaciones</th>
                <td>";
        // line 24
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["piso"]) || array_key_exists("piso", $context) ? $context["piso"] : (function () { throw new RuntimeError('Variable "piso" does not exist.', 24, $this->source); })()), "canthabitaciones", []), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Cantbannos</th>
                <td>";
        // line 28
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["piso"]) || array_key_exists("piso", $context) ? $context["piso"] : (function () { throw new RuntimeError('Variable "piso" does not exist.', 28, $this->source); })()), "cantbannos", []), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Pisopatio</th>
                <td>";
        // line 32
        echo ((twig_get_attribute($this->env, $this->source, (isset($context["piso"]) || array_key_exists("piso", $context) ? $context["piso"] : (function () { throw new RuntimeError('Variable "piso" does not exist.', 32, $this->source); })()), "pisopatio", [])) ? ("Yes") : ("No"));
        echo "</td>
            </tr>
            <tr>
                <th>Pisobalcon</th>
                <td>";
        // line 36
        echo ((twig_get_attribute($this->env, $this->source, (isset($context["piso"]) || array_key_exists("piso", $context) ? $context["piso"] : (function () { throw new RuntimeError('Variable "piso" does not exist.', 36, $this->source); })()), "pisobalcon", [])) ? ("Yes") : ("No"));
        echo "</td>
            </tr>
            <tr>
                <th>Chicas</th>
                <td>";
        // line 40
        echo ((twig_get_attribute($this->env, $this->source, (isset($context["piso"]) || array_key_exists("piso", $context) ? $context["piso"] : (function () { throw new RuntimeError('Variable "piso" does not exist.', 40, $this->source); })()), "chicas", [])) ? ("Yes") : ("No"));
        echo "</td>
            </tr>
            <tr>
                <th>Pisocanthuesped</th>
                <td>";
        // line 44
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["piso"]) || array_key_exists("piso", $context) ? $context["piso"] : (function () { throw new RuntimeError('Variable "piso" does not exist.', 44, $this->source); })()), "pisocanthuesped", []), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <a href=\"";
        // line 49
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("piso_index");
        echo "\">back to list</a>

    <a href=\"";
        // line 51
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("piso_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["piso"]) || array_key_exists("piso", $context) ? $context["piso"] : (function () { throw new RuntimeError('Variable "piso" does not exist.', 51, $this->source); })()), "id", [])]), "html", null, true);
        echo "\">edit</a>

    ";
        // line 53
        echo twig_include($this->env, $context, "piso/_delete_form.html.twig");
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "piso/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  166 => 53,  161 => 51,  156 => 49,  148 => 44,  141 => 40,  134 => 36,  127 => 32,  120 => 28,  113 => 24,  106 => 20,  99 => 16,  92 => 12,  84 => 6,  75 => 5,  57 => 3,  27 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'config.html.twig' %}

{% block title %}Piso{% endblock %}

{% block body %}
    <h1>Piso</h1>

    <table class=\"table\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>{{ piso.id }}</td>
            </tr>
            <tr>
                <th>Direccion</th>
                <td>{{ piso.direccion }}</td>
            </tr>
            <tr>
                <th>Precio</th>
                <td>{{ piso.precio }}</td>
            </tr>
            <tr>
                <th>Canthabitaciones</th>
                <td>{{ piso.canthabitaciones }}</td>
            </tr>
            <tr>
                <th>Cantbannos</th>
                <td>{{ piso.cantbannos }}</td>
            </tr>
            <tr>
                <th>Pisopatio</th>
                <td>{{ piso.pisopatio ? 'Yes' : 'No' }}</td>
            </tr>
            <tr>
                <th>Pisobalcon</th>
                <td>{{ piso.pisobalcon ? 'Yes' : 'No' }}</td>
            </tr>
            <tr>
                <th>Chicas</th>
                <td>{{ piso.chicas ? 'Yes' : 'No' }}</td>
            </tr>
            <tr>
                <th>Pisocanthuesped</th>
                <td>{{ piso.pisocanthuesped }}</td>
            </tr>
        </tbody>
    </table>

    <a href=\"{{ path('piso_index') }}\">back to list</a>

    <a href=\"{{ path('piso_edit', {'id': piso.id}) }}\">edit</a>

    {{ include('piso/_delete_form.html.twig') }}
{% endblock %}
", "piso/show.html.twig", "C:\\xampp\\htdocs\\HelloFlatmate\\templates\\piso\\show.html.twig");
    }
}
