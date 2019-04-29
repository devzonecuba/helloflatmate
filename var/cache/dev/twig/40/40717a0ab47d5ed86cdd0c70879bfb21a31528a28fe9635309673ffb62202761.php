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

/* piso/_form.html.twig */
class __TwigTemplate_0726bce36ba237064f63fd936010f0bcefa0e2792ff4948b9498389ced92cd7d extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "piso/_form.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "piso/_form.html.twig"));

        // line 1
        echo "
<form  id=\"myModal\" action=\"";
        // line 2
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("reserva_new");
        echo "\" method=\"post\"   form=\"form-horizontal\" novalidate=\"\">

        <div class=\"row\">

            <div class=\"col-sm-4\">
                ";
        // line 7
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 7, $this->source); })()), "precio", []), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Precio"]]);
        echo "
                ";
        // line 8
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 8, $this->source); })()), "precio", []), 'errors');
        echo "

            </div>

            <div class=\"col-sm-4\">
                ";
        // line 13
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 13, $this->source); })()), "canthabitaciones", []), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Cantidad de habitaciones"]]);
        echo "
                ";
        // line 14
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 14, $this->source); })()), "canthabitaciones", []), 'errors');
        echo "

            </div>
        
</div>
      <br>
      

         <div class=\"row\">

            <div class=\"col-sm-4\">
                ";
        // line 25
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 25, $this->source); })()), "cantbannos", []), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Cantidad de baños"]]);
        echo "
                ";
        // line 26
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 26, $this->source); })()), "cantbannos", []), 'errors');
        echo "

            </div>
              
         
            
            <div class=\"col-sm-4\">
                ";
        // line 33
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 33, $this->source); })()), "pisocanthuesped", []), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Cantidad de huesped"]]);
        echo "
                ";
        // line 34
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 34, $this->source); })()), "pisocanthuesped", []), 'errors');
        echo "

            </div>
        </div>

      <br>

          <div class=\"row\">


            <div class=\"col-sm-2\" >
                <label for=\"exampleInputEmail1\">Balcón <label class=\"text-danger glyphicon-text-size\">*</label> </label>
            </div>
            <div class=\"col-sm-4\">
                ";
        // line 48
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 48, $this->source); })()), "pisobalcon", []), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                ";
        // line 49
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 49, $this->source); })()), "pisobalcon", []), 'errors');
        echo "

            </div>
              <div class=\"col-sm-2\" >
                <label for=\"exampleInputEmail1\">Patio <label class=\"text-danger glyphicon-text-size\">*</label> </label>
            </div>
            <div class=\"col-sm-4\">
                ";
        // line 56
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 56, $this->source); })()), "pisopatio", []), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                ";
        // line 57
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 57, $this->source); })()), "pisopatio", []), 'errors');
        echo "

            </div>
        </div>

      <br>

      <div class=\"row\">


            <div class=\"col-sm-2\" >
                <label for=\"exampleInputEmail1\">Chicas <label class=\"text-danger glyphicon-text-size\">*</label> </label>
            </div>
            <div class=\"col-sm-4\">
                ";
        // line 71
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 71, $this->source); })()), "chicas", []), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                ";
        // line 72
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 72, $this->source); })()), "chicas", []), 'errors');
        echo "

            </div>
              
    
            <div class=\"col-sm-4\">
                ";
        // line 78
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 78, $this->source); })()), "Centrosalud", []), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Centro de salud"]]);
        echo "
                ";
        // line 79
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 79, $this->source); })()), "Centrosalud", []), 'errors');
        echo "

            </div>
        </div>

      <br>

         <div class=\"row\">

            <div class=\"col-sm-4\">
                ";
        // line 89
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 89, $this->source); })()), "direccion", []), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Dirección"]]);
        echo "
                ";
        // line 90
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 90, $this->source); })()), "direccion", []), 'errors');
        echo "

            </div>

            
            <div class=\"col-sm-4\">
                ";
        // line 96
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 96, $this->source); })()), "Zona", []), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Zona"]]);
        echo "
                ";
        // line 97
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 97, $this->source); })()), "Zona", []), 'errors');
        echo "

            </div>
           
        </div>

      <br>
          <div class=\"row\">


         
           
            <div class=\"col-sm-4\">
                ";
        // line 110
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 110, $this->source); })()), "Supermercado", []), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Supermercado"]]);
        echo "
                ";
        // line 111
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 111, $this->source); })()), "Supermercado", []), 'errors');
        echo "

            </div>

              
            <div class=\"col-sm-4\">
                ";
        // line 117
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 117, $this->source); })()), "Universidad", []), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Universidad"]]);
        echo "
                ";
        // line 118
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 118, $this->source); })()), "Universidad", []), 'errors');
        echo "

            </div>
           
        </div>
     <br>
    <div class=\"col-sm-4\">
                ";
        // line 125
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 125, $this->source); })()), "Habitaciones", []), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Habitaciones"]]);
        echo "
                ";
        // line 126
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 126, $this->source); })()), "Habitaciones", []), 'errors');
        echo "

            </div>
           
           </div>
  
         

            <div class=\"modal-footer\">
                <div class=\"row \">
                    <div class=\"col-lg-2 col-md-2 col-sm-2 col-xs-2 \" >

                        <button  title=\"Adicionar registro de accidentalidad\" type=\"submit\" class=\" btn   btn-primary\" > <span class=\"glyphicon glyphicon-plus\"></span> Adicionar</button>
                        ";
        // line 139
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 139, $this->source); })()), 'rest');
        echo "

                    </div>
                <div class=\"col-lg-2 col-md-2 col-sm-2 col-xs-2 \" >
                    <button title=\"limpiar formulario\" class=\"btn btn-success \" type=\"reset\"><span class=\"glyphicon glyphicon-minus\"></span> Limpiar</button>

                    </div>
                </div>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "piso/_form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  262 => 139,  246 => 126,  242 => 125,  232 => 118,  228 => 117,  219 => 111,  215 => 110,  199 => 97,  195 => 96,  186 => 90,  182 => 89,  169 => 79,  165 => 78,  156 => 72,  152 => 71,  135 => 57,  131 => 56,  121 => 49,  117 => 48,  100 => 34,  96 => 33,  86 => 26,  82 => 25,  68 => 14,  64 => 13,  56 => 8,  52 => 7,  44 => 2,  41 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("
<form  id=\"myModal\" action=\"{{path('reserva_new')}}\" method=\"post\"   form=\"form-horizontal\" novalidate=\"\">

        <div class=\"row\">

            <div class=\"col-sm-4\">
                {{ form_widget(form.precio,{'attr' : {'class' : 'form-control','placeholder' : 'Precio'}}) }}
                {{ form_errors(form.precio) }}

            </div>

            <div class=\"col-sm-4\">
                {{ form_widget(form.canthabitaciones,{'attr' : {'class' : 'form-control','placeholder' : 'Cantidad de habitaciones'}}) }}
                {{ form_errors(form.canthabitaciones) }}

            </div>
        
</div>
      <br>
      

         <div class=\"row\">

            <div class=\"col-sm-4\">
                {{ form_widget(form.cantbannos,{'attr' : {'class' : 'form-control','placeholder' : 'Cantidad de baños'}}) }}
                {{ form_errors(form.cantbannos) }}

            </div>
              
         
            
            <div class=\"col-sm-4\">
                {{ form_widget(form.pisocanthuesped,{'attr' : {'class' : 'form-control','placeholder' : 'Cantidad de huesped'}}) }}
                {{ form_errors(form.pisocanthuesped) }}

            </div>
        </div>

      <br>

          <div class=\"row\">


            <div class=\"col-sm-2\" >
                <label for=\"exampleInputEmail1\">Balcón <label class=\"text-danger glyphicon-text-size\">*</label> </label>
            </div>
            <div class=\"col-sm-4\">
                {{ form_widget(form.pisobalcon,{'attr' : {'class' : 'form-control' }}) }}
                {{ form_errors(form.pisobalcon) }}

            </div>
              <div class=\"col-sm-2\" >
                <label for=\"exampleInputEmail1\">Patio <label class=\"text-danger glyphicon-text-size\">*</label> </label>
            </div>
            <div class=\"col-sm-4\">
                {{ form_widget(form.pisopatio,{'attr' : {'class' : 'form-control'}}) }}
                {{ form_errors(form.pisopatio) }}

            </div>
        </div>

      <br>

      <div class=\"row\">


            <div class=\"col-sm-2\" >
                <label for=\"exampleInputEmail1\">Chicas <label class=\"text-danger glyphicon-text-size\">*</label> </label>
            </div>
            <div class=\"col-sm-4\">
                {{ form_widget(form.chicas,{'attr' : {'class' : 'form-control'}}) }}
                {{ form_errors(form.chicas) }}

            </div>
              
    
            <div class=\"col-sm-4\">
                {{ form_widget(form.Centrosalud,{'attr' : {'class' : 'form-control' ,'placeholder' : 'Centro de salud'}}) }}
                {{ form_errors(form.Centrosalud) }}

            </div>
        </div>

      <br>

         <div class=\"row\">

            <div class=\"col-sm-4\">
                {{ form_widget(form.direccion,{'attr' : {'class' : 'form-control','placeholder' : 'Dirección'}}) }}
                {{ form_errors(form.direccion) }}

            </div>

            
            <div class=\"col-sm-4\">
                {{ form_widget(form.Zona,{'attr' : {'class' : 'form-control','placeholder' : 'Zona'}}) }}
                {{ form_errors(form.Zona) }}

            </div>
           
        </div>

      <br>
          <div class=\"row\">


         
           
            <div class=\"col-sm-4\">
                {{ form_widget(form.Supermercado,{'attr' : {'class' : 'form-control','placeholder' : 'Supermercado'}}) }}
                {{ form_errors(form.Supermercado) }}

            </div>

              
            <div class=\"col-sm-4\">
                {{ form_widget(form.Universidad,{'attr' : {'class' : 'form-control','placeholder' : 'Universidad'}}) }}
                {{ form_errors(form.Universidad) }}

            </div>
           
        </div>
     <br>
    <div class=\"col-sm-4\">
                {{ form_widget(form.Habitaciones,{'attr' : {'class' : 'form-control','placeholder' : 'Habitaciones'}}) }}
                {{ form_errors(form.Habitaciones) }}

            </div>
           
           </div>
  
         

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
", "piso/_form.html.twig", "C:\\xampp\\htdocs\\HelloFlatmate\\templates\\piso\\_form.html.twig");
    }
}
