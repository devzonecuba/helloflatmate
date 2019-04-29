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

/* reserva/index.html.twig */
class __TwigTemplate_ef490db402c5283ac863e542ac612b2ecf35830596c0e1a464c281716321ab56 extends \Twig\Template
{
    private $source;

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("config.html.twig", "reserva/index.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reserva/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reserva/index.html.twig"));

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
        echo "    <h1>Reserva index</h1>

    <table class=\"table\">
        <thead>
            <tr>
                <th>Id</th>
                <th>cliente</th>
                 <th>Habitacion/casa vacaional</th>
                <th>Fechainicio</th>
                <th>Fechafin</th>
                <th>Pasaporte</th>
                <th>Sexo</th>
                <th>Telefono</th>
                <th>Descripcion</th>
                <th>actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 24
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["reservas"]) || array_key_exists("reservas", $context) ? $context["reservas"] : (function () { throw new RuntimeError('Variable "reservas" does not exist.', 24, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["reserva"]) {
            // line 25
            echo "            <tr>
                <td>";
            // line 26
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reserva"], "id", []), "html", null, true);
            echo "</td>
                <td>";
            // line 27
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reserva"], "cliente", []), "html", null, true);
            echo "</td>
                
                <td>
           ";
            // line 30
            if (twig_get_attribute($this->env, $this->source, $context["reserva"], "casavacacional", [])) {
                // line 31
                echo "                ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reserva"], "casavacacional", []), "html", null, true);
                echo "
                ";
            } else {
                // line 33
                echo "              ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reserva"], "habitaciones", []), "html", null, true);
                echo "
              </td>

                ";
            }
            // line 37
            echo "                <td>";
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["reserva"], "fechainicio", [])) ? (twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reserva"], "fechainicio", []), "Y-m-d")) : ("")), "html", null, true);
            echo "</td>
                <td>";
            // line 38
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["reserva"], "fechafin", [])) ? (twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reserva"], "fechafin", []), "Y-m-d")) : ("")), "html", null, true);
            echo "</td>
                <td>";
            // line 39
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reserva"], "pasaporte", []), "html", null, true);
            echo "</td>
                <td>";
            // line 40
            echo ((twig_get_attribute($this->env, $this->source, $context["reserva"], "sexo", [])) ? ("Yes") : ("No"));
            echo "</td>
                <td>";
            // line 41
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reserva"], "telefono", []), "html", null, true);
            echo "</td>
                <td>";
            // line 42
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reserva"], "descripcion", []), "html", null, true);
            echo "</td>
                <td>
                    <a href=\"";
            // line 44
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("reserva_show", ["id" => twig_get_attribute($this->env, $this->source, $context["reserva"], "id", [])]), "html", null, true);
            echo "\">show</a>
                    <a href=\"";
            // line 45
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("reserva_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["reserva"], "id", [])]), "html", null, true);
            echo "\">edit</a>
                </td>
            </tr>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 49
            echo "            <tr>
                <td colspan=\"8\">no records found</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['reserva'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 53
        echo "        </tbody>
    </table>

    <a href=\"";
        // line 56
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("reserva_new");
        echo "\">Create new</a>
    <button type=\"button\" class=\"btn btn-primary\" data-toggle=\"modal\" data-target=\"#myModal\">

    
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "reserva/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  191 => 56,  186 => 53,  177 => 49,  168 => 45,  164 => 44,  159 => 42,  155 => 41,  151 => 40,  147 => 39,  143 => 38,  138 => 37,  130 => 33,  124 => 31,  122 => 30,  116 => 27,  112 => 26,  109 => 25,  104 => 24,  84 => 6,  75 => 5,  57 => 3,  27 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'config.html.twig' %}

{% block title %}Cliente index{% endblock %}

{% block body %}
    <h1>Reserva index</h1>

    <table class=\"table\">
        <thead>
            <tr>
                <th>Id</th>
                <th>cliente</th>
                 <th>Habitacion/casa vacaional</th>
                <th>Fechainicio</th>
                <th>Fechafin</th>
                <th>Pasaporte</th>
                <th>Sexo</th>
                <th>Telefono</th>
                <th>Descripcion</th>
                <th>actions</th>
            </tr>
        </thead>
        <tbody>
        {% for reserva in reservas %}
            <tr>
                <td>{{ reserva.id }}</td>
                <td>{{ reserva.cliente }}</td>
                
                <td>
           {% if  reserva.casavacacional  %}
                {{ reserva.casavacacional }}
                {% else %}
              {{ reserva.habitaciones }}
              </td>

                {% endif %}
                <td>{{ reserva.fechainicio ? reserva.fechainicio|date('Y-m-d') : '' }}</td>
                <td>{{ reserva.fechafin ? reserva.fechafin|date('Y-m-d') : '' }}</td>
                <td>{{ reserva.pasaporte }}</td>
                <td>{{ reserva.sexo ? 'Yes' : 'No' }}</td>
                <td>{{ reserva.telefono }}</td>
                <td>{{ reserva.descripcion }}</td>
                <td>
                    <a href=\"{{ path('reserva_show', {'id': reserva.id}) }}\">show</a>
                    <a href=\"{{ path('reserva_edit', {'id': reserva.id}) }}\">edit</a>
                </td>
            </tr>
        {% else %}
            <tr>
                <td colspan=\"8\">no records found</td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    <a href=\"{{ path('reserva_new') }}\">Create new</a>
    <button type=\"button\" class=\"btn btn-primary\" data-toggle=\"modal\" data-target=\"#myModal\">

    
{% endblock %}
", "reserva/index.html.twig", "C:\\xampp\\htdocs\\HelloFlatmate\\templates\\reserva\\index.html.twig");
    }
}
