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

/* habitaciones/_form.html.twig */
class __TwigTemplate_de9c25620fb8c1e5ea6023c7efda50f53161b421b072dd1b55f947f4c447e22c extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "habitaciones/_form.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "habitaciones/_form.html.twig"));

        // line 1
        echo "<form  id=\"myModal\" action=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("habitaciones_new");
        echo "\" method=\"post\"   form=\"form-horizontal\" novalidate=\"\">

        <div class=\"row\">


           
            <div class=\"col-sm-4\">
                ";
        // line 8
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 8, $this->source); })()), "cantcamas", []), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Cantidad de camas"]]);
        echo "
                ";
        // line 9
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 9, $this->source); })()), "cantcamas", []), 'errors');
        echo "

            </div>

            
          
            <div class=\"col-sm-4\">
                ";
        // line 16
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 16, $this->source); })()), "nombrepromocion", []), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Nombre de promocion"]]);
        echo "
                ";
        // line 17
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 17, $this->source); })()), "nombrepromocion", []), 'errors');
        echo "

            </div>
        </div>

      <br>
         <div class=\"row\">
</div>

      <br>
<div class=\"row\">

            <div class=\"col-sm-4\">
                ";
        // line 30
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 30, $this->source); })()), "disponible", []), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "disponible"]]);
        echo "
                ";
        // line 31
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 31, $this->source); })()), "disponible", []), 'errors');
        echo "

            </div>
              
            <div class=\"col-sm-4\">
                ";
        // line 36
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 36, $this->source); })()), "Cama", []), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Tipo de cama"]]);
        echo "
                ";
        // line 37
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 37, $this->source); })()), "Cama", []), 'errors');
        echo "

            </div>
            </div>
<div class=\"row\">

            <div class=\"col-sm-4\">
                ";
        // line 44
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 44, $this->source); })()), "Servicios", []), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Servicios"]]);
        echo "
                ";
        // line 45
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 45, $this->source); })()), "Servicios", []), 'errors');
        echo "

            </div>
           
        </div>

      <br>
   

      <br>

         <div class=\"row\">


          
            <div class=\"col-sm-10\">
                ";
        // line 61
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 61, $this->source); })()), "descripcion", []), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Descripcion"]]);
        echo "
                ";
        // line 62
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 62, $this->source); })()), "descripcion", []), 'errors');
        echo "

            </div>
           
        </div>

      <br>
  
         

            <div class=\"modal-footer\">
                <div class=\"row \">
                    <div class=\"col-lg-2 col-md-2 col-sm-2 col-xs-2 \" >

                        <button  title=\"Adicionar registro de accidentalidad\" type=\"submit\" class=\" btn   btn-primary\" > <span class=\"glyphicon glyphicon-plus\"></span> Adicionar</button>
                        ";
        // line 77
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 77, $this->source); })()), 'rest');
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
        return "habitaciones/_form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  157 => 77,  139 => 62,  135 => 61,  116 => 45,  112 => 44,  102 => 37,  98 => 36,  90 => 31,  86 => 30,  70 => 17,  66 => 16,  56 => 9,  52 => 8,  41 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<form  id=\"myModal\" action=\"{{path('habitaciones_new')}}\" method=\"post\"   form=\"form-horizontal\" novalidate=\"\">

        <div class=\"row\">


           
            <div class=\"col-sm-4\">
                {{ form_widget(form.cantcamas,{'attr' : {'class' : 'form-control','placeholder' : 'Cantidad de camas'}}) }}
                {{ form_errors(form.cantcamas) }}

            </div>

            
          
            <div class=\"col-sm-4\">
                {{ form_widget(form.nombrepromocion,{'attr' : {'class' : 'form-control','placeholder' : 'Nombre de promocion'}}) }}
                {{ form_errors(form.nombrepromocion) }}

            </div>
        </div>

      <br>
         <div class=\"row\">
</div>

      <br>
<div class=\"row\">

            <div class=\"col-sm-4\">
                {{ form_widget(form.disponible,{'attr' : {'class' : 'form-control','placeholder' : 'disponible' }}) }}
                {{ form_errors(form.disponible) }}

            </div>
              
            <div class=\"col-sm-4\">
                {{ form_widget(form.Cama,{'attr' : {'class' : 'form-control',  'placeholder' : 'Tipo de cama'}}) }}
                {{ form_errors(form.Cama) }}

            </div>
            </div>
<div class=\"row\">

            <div class=\"col-sm-4\">
                {{ form_widget(form.Servicios,{'attr' : {'class' : 'form-control','placeholder' : 'Servicios'}}) }}
                {{ form_errors(form.Servicios) }}

            </div>
           
        </div>

      <br>
   

      <br>

         <div class=\"row\">


          
            <div class=\"col-sm-10\">
                {{ form_widget(form.descripcion,{'attr' : {'class' : 'form-control', 'placeholder' : 'Descripcion'}}) }}
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
", "habitaciones/_form.html.twig", "C:\\xampp\\htdocs\\HelloFlatmate\\templates\\habitaciones\\_form.html.twig");
    }
}
