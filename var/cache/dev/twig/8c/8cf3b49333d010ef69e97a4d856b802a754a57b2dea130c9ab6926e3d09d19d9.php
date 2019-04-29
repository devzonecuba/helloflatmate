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

/* casavacacional/show.html.twig */
class __TwigTemplate_d7c6b04ab4092844f92c5deb721e0a27d5397ee79efba09fde41d70a353555ca extends \Twig\Template
{
    private $source;

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("config.html.twig", "casavacacional/show.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "casavacacional/show.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "casavacacional/show.html.twig"));

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

        echo "Cliente index";
        
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
        echo "    <h1>Casavacacional</h1>

    <table class=\"table\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 12
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["casavacacional"]) || array_key_exists("casavacacional", $context) ? $context["casavacacional"] : (function () { throw new RuntimeError('Variable "casavacacional" does not exist.', 12, $this->source); })()), "id", []), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Casadireccion</th>
                <td>";
        // line 16
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["casavacacional"]) || array_key_exists("casavacacional", $context) ? $context["casavacacional"] : (function () { throw new RuntimeError('Variable "casavacacional" does not exist.', 16, $this->source); })()), "casadireccion", []), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Nombrepromocion</th>
                <td>";
        // line 20
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["casavacacional"]) || array_key_exists("casavacacional", $context) ? $context["casavacacional"] : (function () { throw new RuntimeError('Variable "casavacacional" does not exist.', 20, $this->source); })()), "nombrepromocion", []), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Casaprecio</th>
                <td>";
        // line 24
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["casavacacional"]) || array_key_exists("casavacacional", $context) ? $context["casavacacional"] : (function () { throw new RuntimeError('Variable "casavacacional" does not exist.', 24, $this->source); })()), "casaprecio", []), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Cantbannos</th>
                <td>";
        // line 28
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["casavacacional"]) || array_key_exists("casavacacional", $context) ? $context["casavacacional"] : (function () { throw new RuntimeError('Variable "casavacacional" does not exist.', 28, $this->source); })()), "cantbannos", []), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Canthabitaciones</th>
                <td>";
        // line 32
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["casavacacional"]) || array_key_exists("casavacacional", $context) ? $context["casavacacional"] : (function () { throw new RuntimeError('Variable "casavacacional" does not exist.', 32, $this->source); })()), "canthabitaciones", []), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Patio</th>
                <td>";
        // line 36
        echo ((twig_get_attribute($this->env, $this->source, (isset($context["casavacacional"]) || array_key_exists("casavacacional", $context) ? $context["casavacacional"] : (function () { throw new RuntimeError('Variable "casavacacional" does not exist.', 36, $this->source); })()), "patio", [])) ? ("Yes") : ("No"));
        echo "</td>
            </tr>
            <tr>
                <th>Balcon</th>
                <td>";
        // line 40
        echo ((twig_get_attribute($this->env, $this->source, (isset($context["casavacacional"]) || array_key_exists("casavacacional", $context) ? $context["casavacacional"] : (function () { throw new RuntimeError('Variable "casavacacional" does not exist.', 40, $this->source); })()), "balcon", [])) ? ("Yes") : ("No"));
        echo "</td>
            </tr>
            <tr>
                <th>Canthuesped</th>
                <td>";
        // line 44
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["casavacacional"]) || array_key_exists("casavacacional", $context) ? $context["casavacacional"] : (function () { throw new RuntimeError('Variable "casavacacional" does not exist.', 44, $this->source); })()), "canthuesped", []), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Descripcion</th>
                <td>";
        // line 48
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["casavacacional"]) || array_key_exists("casavacacional", $context) ? $context["casavacacional"] : (function () { throw new RuntimeError('Variable "casavacacional" does not exist.', 48, $this->source); })()), "descripcion", []), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <a href=\"";
        // line 53
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("casavacacional_index");
        echo "\">back to list</a>

    <a href=\"";
        // line 55
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("casavacacional_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["casavacacional"]) || array_key_exists("casavacacional", $context) ? $context["casavacacional"] : (function () { throw new RuntimeError('Variable "casavacacional" does not exist.', 55, $this->source); })()), "id", [])]), "html", null, true);
        echo "\">edit</a>

    <a class=\"btn btn-primary\" href=\"";
        // line 57
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("reserva_new");
        echo "\">reservar</a>

    ";
        // line 59
        echo twig_include($this->env, $context, "casavacacional/_delete_form.html.twig");
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "casavacacional/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  178 => 59,  173 => 57,  168 => 55,  163 => 53,  155 => 48,  148 => 44,  141 => 40,  134 => 36,  127 => 32,  120 => 28,  113 => 24,  106 => 20,  99 => 16,  92 => 12,  84 => 6,  75 => 5,  57 => 3,  27 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'config.html.twig' %}

{% block title %}Cliente index{% endblock %}

{% block body %}
    <h1>Casavacacional</h1>

    <table class=\"table\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>{{ casavacacional.id }}</td>
            </tr>
            <tr>
                <th>Casadireccion</th>
                <td>{{ casavacacional.casadireccion }}</td>
            </tr>
            <tr>
                <th>Nombrepromocion</th>
                <td>{{ casavacacional.nombrepromocion }}</td>
            </tr>
            <tr>
                <th>Casaprecio</th>
                <td>{{ casavacacional.casaprecio }}</td>
            </tr>
            <tr>
                <th>Cantbannos</th>
                <td>{{ casavacacional.cantbannos }}</td>
            </tr>
            <tr>
                <th>Canthabitaciones</th>
                <td>{{ casavacacional.canthabitaciones }}</td>
            </tr>
            <tr>
                <th>Patio</th>
                <td>{{ casavacacional.patio ? 'Yes' : 'No' }}</td>
            </tr>
            <tr>
                <th>Balcon</th>
                <td>{{ casavacacional.balcon ? 'Yes' : 'No' }}</td>
            </tr>
            <tr>
                <th>Canthuesped</th>
                <td>{{ casavacacional.canthuesped }}</td>
            </tr>
            <tr>
                <th>Descripcion</th>
                <td>{{ casavacacional.descripcion }}</td>
            </tr>
        </tbody>
    </table>

    <a href=\"{{ path('casavacacional_index') }}\">back to list</a>

    <a href=\"{{ path('casavacacional_edit', {'id': casavacacional.id}) }}\">edit</a>

    <a class=\"btn btn-primary\" href=\"{{ path('reserva_new' )}}\">reservar</a>

    {{ include('casavacacional/_delete_form.html.twig') }}
{% endblock %}
", "casavacacional/show.html.twig", "C:\\xampp\\htdocs\\HelloFlatmate\\templates\\casavacacional\\show.html.twig");
    }
}
