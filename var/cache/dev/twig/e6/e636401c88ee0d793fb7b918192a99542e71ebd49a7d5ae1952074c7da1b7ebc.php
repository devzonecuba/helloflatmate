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

/* universidad/_form.html.twig */
class __TwigTemplate_f18ac26ff16ec2f886deb2c1ebbbc5944efb86fe88ad9bf061f820fe0c5d987a extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "universidad/_form.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "universidad/_form.html.twig"));

        // line 1
        echo "<form   action=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("universidad_new");
        echo "\" method=\"post\"   form=\"form-horizontal\" novalidate=\"\">

           <div class=\"row\">


           
            <div class=\"col-sm-4\">
                ";
        // line 8
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 8, $this->source); })()), "nombreuniversidad", []), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Nombre Universidad"]]);
        echo "
                ";
        // line 9
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 9, $this->source); })()), "nombreuniversidad", []), 'errors');
        echo "

            </div>
           
        </div>

      <br>
            
      <br>
  
         

            <div class=\"modal-footer\">
                <div class=\"row \">
                    <div class=\"col-lg-2 col-md-2 col-sm-2 col-xs-2 \" >

                        <button  title=\"Adicionar registro de accidentalidad\" type=\"submit\" class=\" btn   btn-primary\" > <span class=\"glyphicon glyphicon-plus\"></span> Adicionar</button>
                        ";
        // line 26
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 26, $this->source); })()), 'rest');
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
        return "universidad/_form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  76 => 26,  56 => 9,  52 => 8,  41 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<form   action=\"{{path('universidad_new')}}\" method=\"post\"   form=\"form-horizontal\" novalidate=\"\">

           <div class=\"row\">


           
            <div class=\"col-sm-4\">
                {{ form_widget(form.nombreuniversidad,{'attr' : {'class' : 'form-control', 'placeholder' : 'Nombre Universidad'}}) }}
                {{ form_errors(form.nombreuniversidad) }}

            </div>
           
        </div>

      <br>
            
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
", "universidad/_form.html.twig", "C:\\xampp\\htdocs\\HelloFlatmate\\templates\\universidad\\_form.html.twig");
    }
}
