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

/* reserva/_form.html.twig */
class __TwigTemplate_93bc17d6a098055e65aea716b478472ce5ea8b91e01fbfbc77ae1ba962f15809 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reserva/_form.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reserva/_form.html.twig"));

        // line 1
        echo "
<form  id=\"myModal\" action=\"";
        // line 2
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("reserva_new");
        echo "\" method=\"post\"   form=\"form-horizontal\" novalidate=\"\">

        <div class=\"row\">


           
            <div class=\"col-sm-4\">
                ";
        // line 9
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 9, $this->source); })()), "fechainicio", []), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "fecha inicio"]]);
        echo "
                ";
        // line 10
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 10, $this->source); })()), "fechainicio", []), 'errors');
        echo "

            </div>

           
            <div class=\"col-sm-4\">
                ";
        // line 16
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 16, $this->source); })()), "fechafin", []), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "fecha fin"]]);
        echo "
                ";
        // line 17
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 17, $this->source); })()), "fechafin", []), 'errors');
        echo "

            </div>
        </div>

      <br>
        

      <br>

         <div class=\"row\">


          
            <div class=\"col-sm-4\">
                ";
        // line 32
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 32, $this->source); })()), "Cliente", []), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Cliente"]]);
        echo "
                ";
        // line 33
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 33, $this->source); })()), "Cliente", []), 'errors');
        echo "

            </div>
            
            <div class=\"col-sm-4\">
                ";
        // line 38
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 38, $this->source); })()), "pasaporte", []), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Pasaporte"]]);
        echo "
                ";
        // line 39
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 39, $this->source); })()), "pasaporte", []), 'errors');
        echo "

            </div>
        </div>

      <br>

          <div class=\"row\">


          
            <div class=\"col-sm-4\">
                ";
        // line 51
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 51, $this->source); })()), "sexo", []), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "sexo"]]);
        echo "
                ";
        // line 52
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 52, $this->source); })()), "sexo", []), 'errors');
        echo "

            </div>
           
            <div class=\"col-sm-4\">
                ";
        // line 57
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 57, $this->source); })()), "telefono", []), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "telefono"]]);
        echo "
                ";
        // line 58
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 58, $this->source); })()), "telefono", []), 'errors');
        echo "

            </div>
        </div>

      <br>

      <div class=\"row\">


          
            <div class=\"col-sm-4\">
                ";
        // line 70
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 70, $this->source); })()), "Casavacacional", []), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "casa vacaional"]]);
        echo "
                ";
        // line 71
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 71, $this->source); })()), "Casavacacional", []), 'errors');
        echo "

            </div>
            
            <div class=\"col-sm-4\">
                ";
        // line 76
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 76, $this->source); })()), "Habitaciones", []), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "habitaciones"]]);
        echo "
                ";
        // line 77
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 77, $this->source); })()), "Habitaciones", []), 'errors');
        echo "

            </div>
        </div>

      <br>

         <div class=\"row\">


           
            <div class=\"col-sm-10\">
                ";
        // line 89
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 89, $this->source); })()), "descripcion", []), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Descripcion"]]);
        echo "
                ";
        // line 90
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 90, $this->source); })()), "descripcion", []), 'errors');
        echo "

            </div>
           
        </div>

      <br>
  
         

            <div class=\"modal-footer\">
                <div class=\"row \">
                    <div class=\"col-lg-2 col-md-2 col-sm-2 col-xs-2 \" >

                        <button  title=\"Adicionar registro de accidentalidad\" type=\"submit\" class=\" btn   btn-primary\" > <span class=\"glyphicon glyphicon-plus\"></span> Adicionar</button>
                        ";
        // line 105
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 105, $this->source); })()), 'rest');
        echo "

                    </div>
                <div class=\"col-lg-2 col-md-2 col-sm-2 col-xs-2 \" >
                    <button title=\"limpiar formulario\" class=\"btn btn-success \" type=\"reset\"><span class=\"glyphicon glyphicon-minus\"></span> Limpiar</button>

                    </div>
                </div>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "reserva/_form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  204 => 105,  186 => 90,  182 => 89,  167 => 77,  163 => 76,  155 => 71,  151 => 70,  136 => 58,  132 => 57,  124 => 52,  120 => 51,  105 => 39,  101 => 38,  93 => 33,  89 => 32,  71 => 17,  67 => 16,  58 => 10,  54 => 9,  44 => 2,  41 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("
<form  id=\"myModal\" action=\"{{path('reserva_new')}}\" method=\"post\"   form=\"form-horizontal\" novalidate=\"\">

        <div class=\"row\">


           
            <div class=\"col-sm-4\">
                {{ form_widget(form.fechainicio,{'attr' : {'class' : 'form-control' , 'placeholder' : 'fecha inicio'}}) }}
                {{ form_errors(form.fechainicio) }}

            </div>

           
            <div class=\"col-sm-4\">
                {{ form_widget(form.fechafin,{'attr' : {'class' : 'form-control', 'placeholder' : 'fecha fin'}}) }}
                {{ form_errors(form.fechafin) }}

            </div>
        </div>

      <br>
        

      <br>

         <div class=\"row\">


          
            <div class=\"col-sm-4\">
                {{ form_widget(form.Cliente,{'attr' : {'class' : 'form-control', 'placeholder' : 'Cliente'}}) }}
                {{ form_errors(form.Cliente) }}

            </div>
            
            <div class=\"col-sm-4\">
                {{ form_widget(form.pasaporte,{'attr' : {'class' : 'form-control', 'placeholder' : 'Pasaporte'}}) }}
                {{ form_errors(form.pasaporte) }}

            </div>
        </div>

      <br>

          <div class=\"row\">


          
            <div class=\"col-sm-4\">
                {{ form_widget(form.sexo,{'attr' : {'class' : 'form-control', 'placeholder' : 'sexo'}}) }}
                {{ form_errors(form.sexo) }}

            </div>
           
            <div class=\"col-sm-4\">
                {{ form_widget(form.telefono,{'attr' : {'class' : 'form-control', 'placeholder' : 'telefono'}}) }}
                {{ form_errors(form.telefono) }}

            </div>
        </div>

      <br>

      <div class=\"row\">


          
            <div class=\"col-sm-4\">
                {{ form_widget(form.Casavacacional,{'attr' : {'class' : 'form-control', 'placeholder' : 'casa vacaional'}}) }}
                {{ form_errors(form.Casavacacional) }}

            </div>
            
            <div class=\"col-sm-4\">
                {{ form_widget(form.Habitaciones,{'attr' : {'class' : 'form-control', 'placeholder' : 'habitaciones'}}) }}
                {{ form_errors(form.Habitaciones) }}

            </div>
        </div>

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
                </div>", "reserva/_form.html.twig", "C:\\xampp\\htdocs\\HelloFlatmate\\templates\\reserva\\_form.html.twig");
    }
}
