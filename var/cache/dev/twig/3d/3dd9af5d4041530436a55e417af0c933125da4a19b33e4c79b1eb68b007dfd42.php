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

/* casavacacional/_form.html.twig */
class __TwigTemplate_080e23fcb7436df389b7d9d84c8eb90ffb6eb52644673f4f7492444c7bf1fb5d extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "casavacacional/_form.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "casavacacional/_form.html.twig"));

        // line 1
        echo "
<form  id=\"myModal\" action=\"";
        // line 2
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("blog_new");
        echo "\" method=\"post\"   form=\"form-horizontal\" novalidate=\"\">

        <div class=\"row\">

            <div class=\"col-sm-4\">
                ";
        // line 7
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 7, $this->source); })()), "nombrepromocion", []), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Nombre de promoción"]]);
        echo "
                ";
        // line 8
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 8, $this->source); })()), "nombrepromocion", []), 'errors');
        echo "

            </div>

          <div class=\"col-sm-4\">
                ";
        // line 13
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 13, $this->source); })()), "casaprecio", []), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Precio"]]);
        echo "
                ";
        // line 14
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 14, $this->source); })()), "casaprecio", []), 'errors');
        echo "

            </div>
        
</div>
      <br>

              <div class=\"row\">

            <div class=\"col-sm-4\">
                ";
        // line 24
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 24, $this->source); })()), "cantbannos", []), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Cantidad de baños"]]);
        echo "
                ";
        // line 25
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 25, $this->source); })()), "cantbannos", []), 'errors');
        echo "

            </div>

                <div class=\"col-sm-4\">
                ";
        // line 30
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 30, $this->source); })()), "canthabitaciones", []), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Cantidad de habitaciones"]]);
        echo "
                ";
        // line 31
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 31, $this->source); })()), "canthabitaciones", []), 'errors');
        echo "

            </div>

        
        
</div>
      <br>
              <div class=\"row\">

            <div class=\"col-sm-4\">
                ";
        // line 42
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 42, $this->source); })()), "canthuesped", []), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Cantidad de huesped"]]);
        echo "
                ";
        // line 43
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 43, $this->source); })()), "canthuesped", []), 'errors');
        echo "

            </div>

                <div class=\"col-sm-4\">
                ";
        // line 48
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 48, $this->source); })()), "Servicios", []), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Servicios"]]);
        echo "
                ";
        // line 49
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 49, $this->source); })()), "Servicios", []), 'errors');
        echo "

            </div>

        
        
</div>
      <br>

                    <div class=\"row\">

            <div class=\"col-sm-4\">
                ";
        // line 61
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 61, $this->source); })()), "casadireccion", []), 'widget', ["attr" => ["class" => "form-control", "placeholder" => " Dirección"]]);
        echo "
                ";
        // line 62
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 62, $this->source); })()), "casadireccion", []), 'errors');
        echo "

            </div>

                <div class=\"col-sm-4\">
                ";
        // line 67
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 67, $this->source); })()), "Zona", []), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Zona"]]);
        echo "
                ";
        // line 68
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 68, $this->source); })()), "Zona", []), 'errors');
        echo "

            </div>
            </div>
      <br>
                   <div class=\"row\">

            <div class=\"col-sm-4\">
                ";
        // line 76
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 76, $this->source); })()), "patio", []), 'widget', ["attr" => ["class" => "form-control", "placeholder" => " Patio"]]);
        echo "
                ";
        // line 77
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 77, $this->source); })()), "patio", []), 'errors');
        echo "

            </div>

                <div class=\"col-sm-4\">
                ";
        // line 82
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 82, $this->source); })()), "balcon", []), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Balcón"]]);
        echo "
                ";
        // line 83
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 83, $this->source); })()), "balcon", []), 'errors');
        echo "

            </div>
            </div>
      <br>

              <div class=\"row\">

            <div class=\"col-sm-4\">
                ";
        // line 92
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 92, $this->source); })()), "Centrosalud", []), 'widget', ["attr" => ["class" => "form-control", "placeholder" => " Centro de salud"]]);
        echo "
                ";
        // line 93
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 93, $this->source); })()), "Centrosalud", []), 'errors');
        echo "

            </div>

                <div class=\"col-sm-4\">
                ";
        // line 98
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 98, $this->source); })()), "Supermercado", []), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Supermercado"]]);
        echo "
                ";
        // line 99
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 99, $this->source); })()), "Supermercado", []), 'errors');
        echo "

            </div>
            </div>
      <br>

            <div class=\"row\">

            <div class=\"col-sm-4\">
                ";
        // line 108
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 108, $this->source); })()), "Universidad", []), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "  Universidad"]]);
        echo "
                ";
        // line 109
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 109, $this->source); })()), "Universidad", []), 'errors');
        echo "

            </div>

              
            </div>
      <br>
 <div class=\"row\">

            <div class=\"col-sm-4\">
                ";
        // line 119
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 119, $this->source); })()), "descripcion", []), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "  Descripción"]]);
        echo "
                ";
        // line 120
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 120, $this->source); })()), "descripcion", []), 'errors');
        echo "

            </div>

              
            </div>
      <br>

      

     
            <div class=\"modal-footer\">
                <div class=\"row \">
                    <div class=\"col-lg-2 col-md-2 col-sm-2 col-xs-2 \" >

                        <button  title=\"Adicionar registro de accidentalidad\" type=\"submit\" class=\" btn   btn-primary\" > <span class=\"glyphicon glyphicon-plus\"></span> Adicionar</button>
                        ";
        // line 136
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 136, $this->source); })()), 'rest');
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
        return "casavacacional/_form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  265 => 136,  246 => 120,  242 => 119,  229 => 109,  225 => 108,  213 => 99,  209 => 98,  201 => 93,  197 => 92,  185 => 83,  181 => 82,  173 => 77,  169 => 76,  158 => 68,  154 => 67,  146 => 62,  142 => 61,  127 => 49,  123 => 48,  115 => 43,  111 => 42,  97 => 31,  93 => 30,  85 => 25,  81 => 24,  68 => 14,  64 => 13,  56 => 8,  52 => 7,  44 => 2,  41 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("
<form  id=\"myModal\" action=\"{{path('blog_new')}}\" method=\"post\"   form=\"form-horizontal\" novalidate=\"\">

        <div class=\"row\">

            <div class=\"col-sm-4\">
                {{ form_widget(form.nombrepromocion,{'attr' : {'class' : 'form-control','placeholder' : 'Nombre de promoción'}}) }}
                {{ form_errors(form.nombrepromocion) }}

            </div>

          <div class=\"col-sm-4\">
                {{ form_widget(form.casaprecio,{'attr' : {'class' : 'form-control','placeholder' : 'Precio'}}) }}
                {{ form_errors(form.casaprecio) }}

            </div>
        
</div>
      <br>

              <div class=\"row\">

            <div class=\"col-sm-4\">
                {{ form_widget(form.cantbannos,{'attr' : {'class' : 'form-control','placeholder' : 'Cantidad de baños'}}) }}
                {{ form_errors(form.cantbannos) }}

            </div>

                <div class=\"col-sm-4\">
                {{ form_widget(form.canthabitaciones,{'attr' : {'class' : 'form-control','placeholder' : 'Cantidad de habitaciones'}}) }}
                {{ form_errors(form.canthabitaciones) }}

            </div>

        
        
</div>
      <br>
              <div class=\"row\">

            <div class=\"col-sm-4\">
                {{ form_widget(form.canthuesped,{'attr' : {'class' : 'form-control','placeholder' : 'Cantidad de huesped'}}) }}
                {{ form_errors(form.canthuesped) }}

            </div>

                <div class=\"col-sm-4\">
                {{ form_widget(form.Servicios,{'attr' : {'class' : 'form-control','placeholder' : 'Servicios'}}) }}
                {{ form_errors(form.Servicios) }}

            </div>

        
        
</div>
      <br>

                    <div class=\"row\">

            <div class=\"col-sm-4\">
                {{ form_widget(form.casadireccion,{'attr' : {'class' : 'form-control','placeholder' : ' Dirección'}}) }}
                {{ form_errors(form.casadireccion) }}

            </div>

                <div class=\"col-sm-4\">
                {{ form_widget(form.Zona,{'attr' : {'class' : 'form-control','placeholder' : 'Zona'}}) }}
                {{ form_errors(form.Zona) }}

            </div>
            </div>
      <br>
                   <div class=\"row\">

            <div class=\"col-sm-4\">
                {{ form_widget(form.patio,{'attr' : {'class' : 'form-control','placeholder' : ' Patio'}}) }}
                {{ form_errors(form.patio) }}

            </div>

                <div class=\"col-sm-4\">
                {{ form_widget(form.balcon,{'attr' : {'class' : 'form-control','placeholder' : 'Balcón'}}) }}
                {{ form_errors(form.balcon) }}

            </div>
            </div>
      <br>

              <div class=\"row\">

            <div class=\"col-sm-4\">
                {{ form_widget(form.Centrosalud,{'attr' : {'class' : 'form-control','placeholder' : ' Centro de salud'}}) }}
                {{ form_errors(form.Centrosalud) }}

            </div>

                <div class=\"col-sm-4\">
                {{ form_widget(form.Supermercado,{'attr' : {'class' : 'form-control','placeholder' : 'Supermercado'}}) }}
                {{ form_errors(form.Supermercado) }}

            </div>
            </div>
      <br>

            <div class=\"row\">

            <div class=\"col-sm-4\">
                {{ form_widget(form.Universidad,{'attr' : {'class' : 'form-control','placeholder' : '  Universidad'}}) }}
                {{ form_errors(form.Universidad) }}

            </div>

              
            </div>
      <br>
 <div class=\"row\">

            <div class=\"col-sm-4\">
                {{ form_widget(form.descripcion,{'attr' : {'class' : 'form-control','placeholder' : '  Descripción'}}) }}
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
", "casavacacional/_form.html.twig", "C:\\xampp\\htdocs\\HelloFlatmate\\templates\\casavacacional\\_form.html.twig");
    }
}
