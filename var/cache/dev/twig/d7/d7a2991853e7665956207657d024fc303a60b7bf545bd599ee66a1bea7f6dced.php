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

/* login/index.html.twig */
class __TwigTemplate_c1e1149fe31b93568c067d6b3740eb7fdcd2fe67451df2aecb66f6773f3a5c8b extends \Twig\Template
{
    private $source;

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("login.html.twig", "login/index.html.twig", 1);
        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        return "login.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "login/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "login/index.html.twig"));

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
        echo "
    <!-- Page container -->
    <div class=\"page-container\">

        <!-- Page content -->
        <div class=\"page-content\">

            <!-- Main content -->
            <div class=\"content-wrapper\">

                <!-- Content area -->
                <div class=\"content\">

                    <!-- Simple login form -->
                    <form action=\"";
        // line 20
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("config");
        echo "\">
                        <div class=\"panel panel-body login-form\">
                            <div class=\"text-center\">
                                <div class=\"icon-object border-blue-700 text-blue-700\"><i class=\"icon-reading\"></i></div>
                                <h5 class=\"content-group\">Ingrese en su cuenta <small class=\"display-block\">Entre sus datos</small></h5>
                            </div>

                            <div class=\"form-group has-feedback has-feedback-left\">
                                <input type=\"text\" class=\"form-control\" placeholder=\"Usuario\">
                                <div class=\"form-control-feedback\">
                                    <i class=\"icon-user text-muted\"></i>
                                </div>
                            </div>

                            <div class=\"form-group has-feedback has-feedback-left\">
                                <input type=\"password\" class=\"form-control\" placeholder=\"Contraseña\">
                                <div class=\"form-control-feedback\">
                                    <i class=\"icon-lock2 text-muted\"></i>
                                </div>
                            </div>

                            <div class=\"form-group\">
                                <button type=\"submit\" class=\"btn bg-blue-700 btn-block\">Entrar <i class=\"icon-circle-right2 position-right\"></i></button>
                            </div>
                        </div>
                    </form>
                    <!-- /simple login form -->

                </div>
                <!-- /content area -->

            </div>
            <!-- /main content -->

        </div>
        <!-- /page content -->

    </div>
    <!-- /page container -->
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "login/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  99 => 20,  83 => 6,  74 => 5,  57 => 3,  27 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'login.html.twig' %}

{% block title %}{% endblock %}

{% block body %}

    <!-- Page container -->
    <div class=\"page-container\">

        <!-- Page content -->
        <div class=\"page-content\">

            <!-- Main content -->
            <div class=\"content-wrapper\">

                <!-- Content area -->
                <div class=\"content\">

                    <!-- Simple login form -->
                    <form action=\"{{ url('config') }}\">
                        <div class=\"panel panel-body login-form\">
                            <div class=\"text-center\">
                                <div class=\"icon-object border-blue-700 text-blue-700\"><i class=\"icon-reading\"></i></div>
                                <h5 class=\"content-group\">Ingrese en su cuenta <small class=\"display-block\">Entre sus datos</small></h5>
                            </div>

                            <div class=\"form-group has-feedback has-feedback-left\">
                                <input type=\"text\" class=\"form-control\" placeholder=\"Usuario\">
                                <div class=\"form-control-feedback\">
                                    <i class=\"icon-user text-muted\"></i>
                                </div>
                            </div>

                            <div class=\"form-group has-feedback has-feedback-left\">
                                <input type=\"password\" class=\"form-control\" placeholder=\"Contraseña\">
                                <div class=\"form-control-feedback\">
                                    <i class=\"icon-lock2 text-muted\"></i>
                                </div>
                            </div>

                            <div class=\"form-group\">
                                <button type=\"submit\" class=\"btn bg-blue-700 btn-block\">Entrar <i class=\"icon-circle-right2 position-right\"></i></button>
                            </div>
                        </div>
                    </form>
                    <!-- /simple login form -->

                </div>
                <!-- /content area -->

            </div>
            <!-- /main content -->

        </div>
        <!-- /page content -->

    </div>
    <!-- /page container -->
{% endblock %}
", "login/index.html.twig", "C:\\xampp\\htdocs\\HelloFlatmate\\templates\\login\\index.html.twig");
    }
}
