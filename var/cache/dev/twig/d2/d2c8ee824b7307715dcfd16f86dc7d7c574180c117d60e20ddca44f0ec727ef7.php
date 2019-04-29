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

/* contacto/_form.html.twig */
class __TwigTemplate_77a9d3dfabbc7b8e104685e33c4fe70022ed9d656f135406617167a743e86e39 extends \Twig\Template
{
    private $source;

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "contacto/_form.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "contacto/_form.html.twig"));

        // line 1
        echo "
<form  id=\"myModal\" action=\"";
        // line 2
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("contacto_new");
        echo "\" method=\"post\"   form=\"form-horizontal\" novalidate=\"\">

        <div class=\"row\">

            <div class=\"col-sm-4\">
                ";
        // line 7
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 7, $this->source); })()), "nombre", []), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Nombre"]]);
        echo "
                ";
        // line 8
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 8, $this->source); })()), "nombre", []), 'errors');
        echo "

            </div>

            <div class=\"col-sm-4\">
                ";
        // line 13
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 13, $this->source); })()), "correo", []), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Correo"]]);
        echo "
                ";
        // line 14
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 14, $this->source); })()), "correo", []), 'errors');
        echo "

            </div>
        
</div>
      <br>
      

         <div class=\"row\">

            <div class=\"col-sm-4\">
                ";
        // line 25
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 25, $this->source); })()), "asunto", []), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Asunto"]]);
        echo "
                ";
        // line 26
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 26, $this->source); })()), "asunto", []), 'errors');
        echo "

            </div>
              
         
            
            <div class=\"col-sm-4\">
                ";
        // line 33
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 33, $this->source); })()), "descripcion", []), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Descripción"]]);
        echo "
                ";
        // line 34
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 34, $this->source); })()), "descripcion", []), 'errors');
        echo "

            </div>
        </div>
        <br>
            <div class=\"modal-footer\">
                <div class=\"row \">
                    <div class=\"col-lg-2 col-md-2 col-sm-2 col-xs-2 \" >

                        <button  title=\"Adicionar registro de accidentalidad\" type=\"submit\" class=\" btn   btn-primary\" > <span class=\"glyphicon glyphicon-plus\"></span> Adicionar</button>
                        ";
        // line 44
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 44, $this->source); })()), 'rest');
        echo "

                    </div>
                <div class=\"col-lg-2 col-md-2 col-sm-2 col-xs-2 \" >
                    <button title=\"limpiar formulario\" class=\"btn btn-success \" type=\"reset\"><span class=\"glyphicon glyphicon-minus\"></span> Limpiar</button>

                    </div>
                </div>
                   </div>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "contacto/_form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  113 => 44,  100 => 34,  96 => 33,  86 => 26,  82 => 25,  68 => 14,  64 => 13,  56 => 8,  52 => 7,  44 => 2,  41 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("
<form  id=\"myModal\" action=\"{{path('contacto_new')}}\" method=\"post\"   form=\"form-horizontal\" novalidate=\"\">

        <div class=\"row\">

            <div class=\"col-sm-4\">
                {{ form_widget(form.nombre,{'attr' : {'class' : 'form-control','placeholder' : 'Nombre'}}) }}
                {{ form_errors(form.nombre) }}

            </div>

            <div class=\"col-sm-4\">
                {{ form_widget(form.correo,{'attr' : {'class' : 'form-control','placeholder' : 'Correo'}}) }}
                {{ form_errors(form.correo) }}

            </div>
        
</div>
      <br>
      

         <div class=\"row\">

            <div class=\"col-sm-4\">
                {{ form_widget(form.asunto,{'attr' : {'class' : 'form-control','placeholder' : 'Asunto'}}) }}
                {{ form_errors(form.asunto) }}

            </div>
              
         
            
            <div class=\"col-sm-4\">
                {{ form_widget(form.descripcion,{'attr' : {'class' : 'form-control','placeholder' : 'Descripción'}}) }}
                {{ form_errors(form.descripcion) }}

            </div>
        </div>
        <br>
            <div class=\"modal-footer\">
                <div class=\"row \">
                    <div class=\"col-lg-2 col-md-2 col-sm-2 col-xs-2 \" >

                        <button  title=\"Adicionar registro de accidentalidad\" type=\"submit\" class=\" btn   btn-primary\" > <span class=\"glyphicon glyphicon-plus\"></span> Adicionar</button>
                        {{ form_rest(form) }}

                    </div>
                <div class=\"col-lg-2 col-md-2 col-sm-2 col-xs-2 \" >
                    <button title=\"limpiar formulario\" class=\"btn btn-success \" type=\"reset\"><span class=\"glyphicon glyphicon-minus\"></span> Limpiar</button>

                    </div>
                </div>
                   </div>
", "contacto/_form.html.twig", "C:\\xampp\\htdocs\\HelloFlatmate\\templates\\contacto\\_form.html.twig");
    }
}
