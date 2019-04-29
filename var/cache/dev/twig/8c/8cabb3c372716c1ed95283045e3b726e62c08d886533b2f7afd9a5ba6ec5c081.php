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

/* config.html.twig */
class __TwigTemplate_31ff5c66abc56f4e60db148a602c0fcbdc65156ba0109f8107cfa9e3184f3149 extends \Twig\Template
{
    private $source;

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "config.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "config.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <meta content=\"width=device-width, initial-scale=1.0\" name=\"viewport\">
    <meta content=\"\" name=\"keywords\">
    <meta content=\"\" name=\"description\">

    <title>";
        // line 9
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    ";
        // line 10
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 62
        echo "</head>


<body class=\"hold-transition skin-blue sidebar-mini fixed\">

    <div class=\"wrapper\">

        <header class=\"main-header\">

            ";
        // line 72
        echo "            <!-- Logo -->
            <a href=\"../../index2.html\" class=\"logo\">
                <!-- mini logo for sidebar mini 50x50 pixels -->
                <span class=\"logo-mini\"><b>HFM</b></span>
                <!-- logo for regular state and mobile devices -->
                <span class=\"logo-lg\"><b>HelloFlatMate</b></span>
            </a>
            <!-- Header Navbar: style can be found in header.less -->

            <nav class=\"navbar navbar-static-top\">

                <!-- Sidebar toggle button-->
                <a href=\"#\" class=\"sidebar-toggle\" data-toggle=\"push-menu\" role=\"button\">
                    <span class=\"sr-only\">Toggle navigation</span>
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                </a>

                <div class=\"navbar-custom-menu\">
                    <ul class=\"nav navbar-nav\">
                        <!-- Cambiar Password -->
                        <li>
                            <a href=\"#\" data-toggle=\"control-sidebar\"><span><i class=\"fa fa-lock\" style=\"font-size: 17px\"></i></span></a>
                        </li>

                        <!-- Cerrar Sistema -->
                        <li>
                            <a href=\"#\" data-toggle=\"control-sidebar\"><span><i class=\"fa fa-power-off\" style=\"font-size: 17px\"></i></span></a>
                        </li>
                    </ul>
                </div>
            </nav>

            ";
        // line 107
        echo "
        </header>

        <!-- Left side column. contains the logo and sidebar -->
        <aside class=\"main-sidebar\">
            <!-- sidebar: style can be found in sidebar.less -->
            <section class=\"sidebar\">
                <!-- Sidebar user panel -->
                <div class=\"user-panel\">
                    <div class=\"pull-left image\">
                        <img src= ";
        // line 117
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets-conf/dist/img/user2-160x160.jpg"), "html", null, true);
        echo " class=\"img-circle\" alt=\"User Image\">
                    </div>
                    <div class=\"pull-left info\">
                        <p>Yamil Fernández</p>
                        <a href=\"#\"><i class=\"fa fa-circle text-success\"></i> Conectado</a>
                    </div>
                </div>

                <!-- sidebar menu: : style can be found in sidebar.less -->
                <ul class=\"sidebar-menu\" data-widget=\"tree\">
                    <li class=\"header\">MENU</li>

                    <li>
                        <a href=\"";
        // line 130
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("reservar");
        echo "\">
                            <i class=\"fa fa-th\"></i> <span>Reservaciones</span>
                        </a>
                    </li>

                    <li class=\"treeview\">
                        <a href=\"#\">
                            <i class=\"fa fa-pie-chart\"></i>
                            <span>Habitaciones</span>
                            <span class=\"pull-right-container\">
                                <i class=\"fa fa-angle-left pull-right\"></i>
                            </span>
                        </a>
                        <ul class=\"treeview-menu\">
                            <li><a href=\"../charts/chartjs.html\"><i class=\"fa fa-circle-o\"></i> Administrar</a></li>
                            <li><a href=\"../charts/morris.html\"><i class=\"fa fa-circle-o\"></i> Adicionar Casa</a></li>
                        </ul>
                    </li>

                    <li class=\"treeview\">
                        <a href=\"#\">
                            <i class=\"fa fa-laptop\"></i>
                            <span>Casa Vacacional</span>
                            <span class=\"pull-right-container\">
                                <i class=\"fa fa-angle-left pull-right\"></i>
                            </span>
                        </a>
                        <ul class=\"treeview-menu\">
                            <li><a href=\"../UI/general.html\"><i class=\"fa fa-circle-o\"></i> Administrar</a></li>
                            <li><a href=\"../UI/icons.html\"><i class=\"fa fa-circle-o\"></i> Adicionar Casa Vacacional</a></li>
                        </ul>
                    </li>

                    <li class=\"treeview\">
                        <a href=\"#\">
                            <i class=\"fa fa-laptop\"></i>
                            <span>Configuración</span>
                            <span class=\"pull-right-container\">
                                <i class=\"fa fa-angle-left pull-right\"></i>
                            </span>
                        </a>
                        <ul class=\"treeview-menu\">
                            <li><a href=\"../UI/icons.html\"><i class=\"fa fa-circle-o\"></i> Cama</a></li>
                            <li><a href=\"../UI/icons.html\"><i class=\"fa fa-circle-o\"></i> Centro de Salud</a></li>
                            <li><a href=\"../UI/general.html\"><i class=\"fa fa-circle-o\"></i> Servios Adicionales</a></li>
                            <li><a href=\"../UI/icons.html\"><i class=\"fa fa-circle-o\"></i> Super Mercado</a></li>
                            <li><a href=\"../UI/icons.html\"><i class=\"fa fa-circle-o\"></i> Universidad</a></li>
                            <li><a href=\"../UI/icons.html\"><i class=\"fa fa-circle-o\"></i> Zona</a></li>

                        </ul>
                    </li>

                    <li class=\"treeview\">
                        <a href=\"#\">
                            <i class=\"fa fa-laptop\"></i>
                            <span>Seguridad</span>
                            <span class=\"pull-right-container\">
                                <i class=\"fa fa-angle-left pull-right\"></i>
                            </span>
                        </a>
                        <ul class=\"treeview-menu\">
                            <li><a href=\"../UI/general.html\"><i class=\"fa fa-circle-o\"></i> Usuarios</a></li>
                        </ul>
                    </li>

                </ul>
            </section>
            <!-- /.sidebar -->
        </aside>

        <div class=\"content-wrapper\">

            ";
        // line 202
        $this->displayBlock('body', $context, $blocks);
        // line 206
        echo "        </div>


        <footer class=\"main-footer\" style=\"text-align: center\">
            <strong>Copyright &copy; 2019 <a href=\"https://www.helloflatmate.com\">HelloFlatmate</a>.</strong> Todos los derechos reservados.
        </footer>

    </div>
    <!-- ./wrapper -->

";
        // line 216
        $this->displayBlock('javascripts', $context, $blocks);
        // line 349
        echo "
</body>


</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 9
    public function block_title($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "HelloFlatmate!";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 10
    public function block_stylesheets($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 11
        echo "
        <!-- Bootstrap 3.3.7 -->
        <link href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets-conf/bower_components/bootstrap/dist/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">

        <!-- Bootstrap 3.3.7 -->
        <link href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets-conf/bower_components/bootstrap/dist/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">

        <!-- Font Awesome -->
        <link href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets-conf/bower_components/font-awesome/css/font-awesome.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">

        <!-- Ionicons -->
        <link href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets-conf/bower_components/Ionicons/css/ionicons.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">

        <!-- Data table -->
        <link href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets-conf/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">

        <!-- daterange picker -->
        <link href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets-conf/bower_components/bootstrap-daterangepicker/daterangepicker.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">

        <!-- bootstrap datepicker -->
        <link href=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets-conf/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">

        <!-- iCheck for checkboxes and radio inputs -->
        <link href=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets-conf/plugins/iCheck/all.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">

        <!-- Bootstrap Color Picker -->
        <link href=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets-conf/bower_components/bootstrap-colorpicker/dist/css/bootstrap-colorpicker.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">

        <!-- Bootstrap time Picker -->
        <link href=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets-conf/plugins/timepicker/bootstrap-timepicker.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">

        <!-- Select2 -->
        <link href=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets-conf/bower_components/select2/dist/css/select2.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">

        <!-- Theme style -->
        <link href=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets-conf/dist/css/AdminLTE.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">

        <!-- AdminLTE Skins. Choose a skin from the css/skins
             folder instead of downloading all of them to reduce the load. -->
        <link href=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets-conf/dist/css/skins/_all-skins.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">


        <!-- Google Font -->
        ";
        // line 55
        echo "              ";
        // line 56
        echo "
        <!-- Google Fonts -->
        <link href=\"https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700\" rel=\"stylesheet\">


    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 202
    public function block_body($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 203
        echo "           

            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 216
    public function block_javascripts($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 217
        echo "
    <!-- jQuery 3 -->
    <script src=\"";
        // line 219
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets-conf/bower_components/jquery/dist/jquery.min.js"), "html", null, true);
        echo "\"></script>

    <!-- Bootstrap 3.3.7 -->
    <script src=\"";
        // line 222
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets-conf/bower_components/bootstrap/dist/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>

    <!-- Select2 -->
    <script src=\"";
        // line 225
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets-conf/bower_components/select2/dist/js/select2.full.min.js"), "html", null, true);
        echo "\"></script>

    <!-- InputMask -->
    <script src=\"";
        // line 228
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets-conf/plugins/input-mask/jquery.inputmask.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 229
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets-conf/plugins/input-mask/jquery.inputmask.date.extensions.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 230
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets-conf/plugins/input-mask/jquery.inputmask.extensions.js"), "html", null, true);
        echo "\"></script>

    <!-- Datatable -->
    <script src=\"";
        // line 233
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets-conf/bower_components/datatables.net/js/jquery.dataTables.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 234
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets-conf/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"), "html", null, true);
        echo "\"></script>

    <!-- date-range-picker -->
    <script src=\"";
        // line 237
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets-conf/bower_components/moment/min/moment.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 238
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets-conf/bower_components/bootstrap-daterangepicker/daterangepicker.js"), "html", null, true);
        echo "\"></script>

    <!-- bootstrap datepicker -->
    <script src=\"";
        // line 241
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets-conf/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"), "html", null, true);
        echo "\"></script>

    <!-- bootstrap color picker -->
    <script src=\"";
        // line 244
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets-conf/bower_components/bootstrap-colorpicker/dist/js/bootstrap-colorpicker.min.js"), "html", null, true);
        echo "\"></script>

    <!-- bootstrap time picker -->
    <script src=\"";
        // line 247
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets-conf/plugins/timepicker/bootstrap-timepicker.min.js"), "html", null, true);
        echo "\"></script>

    <!-- SlimScroll -->
    <script src=\"";
        // line 250
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets-conf/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"), "html", null, true);
        echo "\"></script>

    <!-- iCheck 1.0.1 -->
    <script src=\"";
        // line 253
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets-conf/plugins/iCheck/icheck.min.js"), "html", null, true);
        echo "\"></script>

    <!-- FastClick -->
    <script src=\"";
        // line 256
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets-conf/bower_components/fastclick/lib/fastclick.js"), "html", null, true);
        echo "\"></script>

    <!-- AdminLTE App -->
    <script src=\"";
        // line 259
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets-conf/dist/js/adminlte.min.js"), "html", null, true);
        echo "\"></script>

    <!-- AdminLTE for demo purposes -->
    <script src=\"";
        // line 262
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets-conf/dist/js/demo.js"), "html", null, true);
        echo "\"></script>

    <!-- Page script -->
    <script>
        \$(function () {
            //Initialize Select2 Elements
            \$('.select2').select2()

            //Datemask dd/mm/yyyy
            \$('#datemask').inputmask('dd/mm/yyyy', { 'placeholder': 'dd/mm/yyyy' })
            //Datemask2 mm/dd/yyyy
            \$('#datemask2').inputmask('mm/dd/yyyy', { 'placeholder': 'mm/dd/yyyy' })
            //Money Euro
            \$('[data-mask]').inputmask()

            //Date range picker
            \$('#reservation').daterangepicker()
            //Date range picker with time picker
            \$('#reservationtime').daterangepicker({ timePicker: true, timePickerIncrement: 30, format: 'MM/DD/YYYY h:mm A' })
            //Date range as a button
            \$('#daterange-btn').daterangepicker(
                {
                    ranges   : {
                        'Today'       : [moment(), moment()],
                        'Yesterday'   : [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
                        'Last 7 Days' : [moment().subtract(6, 'days'), moment()],
                        'Last 30 Days': [moment().subtract(29, 'days'), moment()],
                        'This Month'  : [moment().startOf('month'), moment().endOf('month')],
                        'Last Month'  : [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
                    },
                    startDate: moment().subtract(29, 'days'),
                    endDate  : moment()
                },
                function (start, end) {
                    \$('#daterange-btn span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'))
                }
            )

            //Date picker
            \$('#datepicker').datepicker({
                autoclose: true
            })

            //iCheck for checkbox and radio inputs
            \$('input[type=\"checkbox\"].minimal, input[type=\"radio\"].minimal').iCheck({
                checkboxClass: 'icheckbox_minimal-blue',
                radioClass   : 'iradio_minimal-blue'
            })
            //Red color scheme for iCheck
            \$('input[type=\"checkbox\"].minimal-red, input[type=\"radio\"].minimal-red').iCheck({
                checkboxClass: 'icheckbox_minimal-red',
                radioClass   : 'iradio_minimal-red'
            })
            //Flat red color scheme for iCheck
            \$('input[type=\"checkbox\"].flat-red, input[type=\"radio\"].flat-red').iCheck({
                checkboxClass: 'icheckbox_flat-green',
                radioClass   : 'iradio_flat-green'
            })

            //Colorpicker
            \$('.my-colorpicker1').colorpicker()
            //color picker with addon
            \$('.my-colorpicker2').colorpicker()

            //Timepicker
            \$('.timepicker').timepicker({
                showInputs: false
            })
        })


         \$(function () {
    \$('#example1').DataTable()
    \$('#example2').DataTable({
      'paging'      : true,
      'lengthChange': false,
      'searching'   : false,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false
    })
  })
    </script>

    

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "config.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  498 => 262,  492 => 259,  486 => 256,  480 => 253,  474 => 250,  468 => 247,  462 => 244,  456 => 241,  450 => 238,  446 => 237,  440 => 234,  436 => 233,  430 => 230,  426 => 229,  422 => 228,  416 => 225,  410 => 222,  404 => 219,  400 => 217,  391 => 216,  379 => 203,  370 => 202,  355 => 56,  353 => 55,  346 => 50,  339 => 46,  333 => 43,  327 => 40,  321 => 37,  315 => 34,  309 => 31,  303 => 28,  297 => 25,  291 => 22,  285 => 19,  279 => 16,  273 => 13,  269 => 11,  260 => 10,  242 => 9,  227 => 349,  225 => 216,  213 => 206,  211 => 202,  136 => 130,  120 => 117,  108 => 107,  72 => 72,  61 => 62,  59 => 10,  55 => 9,  45 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <meta content=\"width=device-width, initial-scale=1.0\" name=\"viewport\">
    <meta content=\"\" name=\"keywords\">
    <meta content=\"\" name=\"description\">

    <title>{% block title %}HelloFlatmate!{% endblock %}</title>
    {% block stylesheets %}

        <!-- Bootstrap 3.3.7 -->
        <link href=\"{{ asset('assets-conf/bower_components/bootstrap/dist/css/bootstrap.min.css') }}\" rel=\"stylesheet\" type=\"text/css\">

        <!-- Bootstrap 3.3.7 -->
        <link href=\"{{ asset('assets-conf/bower_components/bootstrap/dist/css/bootstrap.min.css') }}\" rel=\"stylesheet\" type=\"text/css\">

        <!-- Font Awesome -->
        <link href=\"{{ asset('assets-conf/bower_components/font-awesome/css/font-awesome.min.css') }}\" rel=\"stylesheet\" type=\"text/css\">

        <!-- Ionicons -->
        <link href=\"{{ asset('assets-conf/bower_components/Ionicons/css/ionicons.min.css') }}\" rel=\"stylesheet\" type=\"text/css\">

        <!-- Data table -->
        <link href=\"{{ asset('assets-conf/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css') }}\" rel=\"stylesheet\" type=\"text/css\">

        <!-- daterange picker -->
        <link href=\"{{ asset('assets-conf/bower_components/bootstrap-daterangepicker/daterangepicker.css') }}\" rel=\"stylesheet\" type=\"text/css\">

        <!-- bootstrap datepicker -->
        <link href=\"{{ asset('assets-conf/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css') }}\" rel=\"stylesheet\" type=\"text/css\">

        <!-- iCheck for checkboxes and radio inputs -->
        <link href=\"{{ asset('assets-conf/plugins/iCheck/all.css') }}\" rel=\"stylesheet\" type=\"text/css\">

        <!-- Bootstrap Color Picker -->
        <link href=\"{{ asset('assets-conf/bower_components/bootstrap-colorpicker/dist/css/bootstrap-colorpicker.min.css') }}\" rel=\"stylesheet\" type=\"text/css\">

        <!-- Bootstrap time Picker -->
        <link href=\"{{ asset('assets-conf/plugins/timepicker/bootstrap-timepicker.min.css') }}\" rel=\"stylesheet\" type=\"text/css\">

        <!-- Select2 -->
        <link href=\"{{ asset('assets-conf/bower_components/select2/dist/css/select2.min.css') }}\" rel=\"stylesheet\" type=\"text/css\">

        <!-- Theme style -->
        <link href=\"{{ asset('assets-conf/dist/css/AdminLTE.min.css') }}\" rel=\"stylesheet\" type=\"text/css\">

        <!-- AdminLTE Skins. Choose a skin from the css/skins
             folder instead of downloading all of them to reduce the load. -->
        <link href=\"{{ asset('assets-conf/dist/css/skins/_all-skins.min.css') }}\" rel=\"stylesheet\" type=\"text/css\">


        <!-- Google Font -->
        {#<link rel=\"stylesheet\"#}
              {#href=\"https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic\">#}

        <!-- Google Fonts -->
        <link href=\"https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700\" rel=\"stylesheet\">


    {% endblock %}
</head>


<body class=\"hold-transition skin-blue sidebar-mini fixed\">

    <div class=\"wrapper\">

        <header class=\"main-header\">

            {#Inicio Menu Superior#}
            <!-- Logo -->
            <a href=\"../../index2.html\" class=\"logo\">
                <!-- mini logo for sidebar mini 50x50 pixels -->
                <span class=\"logo-mini\"><b>HFM</b></span>
                <!-- logo for regular state and mobile devices -->
                <span class=\"logo-lg\"><b>HelloFlatMate</b></span>
            </a>
            <!-- Header Navbar: style can be found in header.less -->

            <nav class=\"navbar navbar-static-top\">

                <!-- Sidebar toggle button-->
                <a href=\"#\" class=\"sidebar-toggle\" data-toggle=\"push-menu\" role=\"button\">
                    <span class=\"sr-only\">Toggle navigation</span>
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                </a>

                <div class=\"navbar-custom-menu\">
                    <ul class=\"nav navbar-nav\">
                        <!-- Cambiar Password -->
                        <li>
                            <a href=\"#\" data-toggle=\"control-sidebar\"><span><i class=\"fa fa-lock\" style=\"font-size: 17px\"></i></span></a>
                        </li>

                        <!-- Cerrar Sistema -->
                        <li>
                            <a href=\"#\" data-toggle=\"control-sidebar\"><span><i class=\"fa fa-power-off\" style=\"font-size: 17px\"></i></span></a>
                        </li>
                    </ul>
                </div>
            </nav>

            {#Fin Menu Superior#}

        </header>

        <!-- Left side column. contains the logo and sidebar -->
        <aside class=\"main-sidebar\">
            <!-- sidebar: style can be found in sidebar.less -->
            <section class=\"sidebar\">
                <!-- Sidebar user panel -->
                <div class=\"user-panel\">
                    <div class=\"pull-left image\">
                        <img src= {{ asset (\"assets-conf/dist/img/user2-160x160.jpg\") }} class=\"img-circle\" alt=\"User Image\">
                    </div>
                    <div class=\"pull-left info\">
                        <p>Yamil Fernández</p>
                        <a href=\"#\"><i class=\"fa fa-circle text-success\"></i> Conectado</a>
                    </div>
                </div>

                <!-- sidebar menu: : style can be found in sidebar.less -->
                <ul class=\"sidebar-menu\" data-widget=\"tree\">
                    <li class=\"header\">MENU</li>

                    <li>
                        <a href=\"{{ url(\"reservar\") }}\">
                            <i class=\"fa fa-th\"></i> <span>Reservaciones</span>
                        </a>
                    </li>

                    <li class=\"treeview\">
                        <a href=\"#\">
                            <i class=\"fa fa-pie-chart\"></i>
                            <span>Habitaciones</span>
                            <span class=\"pull-right-container\">
                                <i class=\"fa fa-angle-left pull-right\"></i>
                            </span>
                        </a>
                        <ul class=\"treeview-menu\">
                            <li><a href=\"../charts/chartjs.html\"><i class=\"fa fa-circle-o\"></i> Administrar</a></li>
                            <li><a href=\"../charts/morris.html\"><i class=\"fa fa-circle-o\"></i> Adicionar Casa</a></li>
                        </ul>
                    </li>

                    <li class=\"treeview\">
                        <a href=\"#\">
                            <i class=\"fa fa-laptop\"></i>
                            <span>Casa Vacacional</span>
                            <span class=\"pull-right-container\">
                                <i class=\"fa fa-angle-left pull-right\"></i>
                            </span>
                        </a>
                        <ul class=\"treeview-menu\">
                            <li><a href=\"../UI/general.html\"><i class=\"fa fa-circle-o\"></i> Administrar</a></li>
                            <li><a href=\"../UI/icons.html\"><i class=\"fa fa-circle-o\"></i> Adicionar Casa Vacacional</a></li>
                        </ul>
                    </li>

                    <li class=\"treeview\">
                        <a href=\"#\">
                            <i class=\"fa fa-laptop\"></i>
                            <span>Configuración</span>
                            <span class=\"pull-right-container\">
                                <i class=\"fa fa-angle-left pull-right\"></i>
                            </span>
                        </a>
                        <ul class=\"treeview-menu\">
                            <li><a href=\"../UI/icons.html\"><i class=\"fa fa-circle-o\"></i> Cama</a></li>
                            <li><a href=\"../UI/icons.html\"><i class=\"fa fa-circle-o\"></i> Centro de Salud</a></li>
                            <li><a href=\"../UI/general.html\"><i class=\"fa fa-circle-o\"></i> Servios Adicionales</a></li>
                            <li><a href=\"../UI/icons.html\"><i class=\"fa fa-circle-o\"></i> Super Mercado</a></li>
                            <li><a href=\"../UI/icons.html\"><i class=\"fa fa-circle-o\"></i> Universidad</a></li>
                            <li><a href=\"../UI/icons.html\"><i class=\"fa fa-circle-o\"></i> Zona</a></li>

                        </ul>
                    </li>

                    <li class=\"treeview\">
                        <a href=\"#\">
                            <i class=\"fa fa-laptop\"></i>
                            <span>Seguridad</span>
                            <span class=\"pull-right-container\">
                                <i class=\"fa fa-angle-left pull-right\"></i>
                            </span>
                        </a>
                        <ul class=\"treeview-menu\">
                            <li><a href=\"../UI/general.html\"><i class=\"fa fa-circle-o\"></i> Usuarios</a></li>
                        </ul>
                    </li>

                </ul>
            </section>
            <!-- /.sidebar -->
        </aside>

        <div class=\"content-wrapper\">

            {% block body %}
           

            {% endblock %}
        </div>


        <footer class=\"main-footer\" style=\"text-align: center\">
            <strong>Copyright &copy; 2019 <a href=\"https://www.helloflatmate.com\">HelloFlatmate</a>.</strong> Todos los derechos reservados.
        </footer>

    </div>
    <!-- ./wrapper -->

{% block javascripts %}

    <!-- jQuery 3 -->
    <script src=\"{{ asset('assets-conf/bower_components/jquery/dist/jquery.min.js') }}\"></script>

    <!-- Bootstrap 3.3.7 -->
    <script src=\"{{ asset('assets-conf/bower_components/bootstrap/dist/js/bootstrap.min.js') }}\"></script>

    <!-- Select2 -->
    <script src=\"{{ asset('assets-conf/bower_components/select2/dist/js/select2.full.min.js') }}\"></script>

    <!-- InputMask -->
    <script src=\"{{ asset('assets-conf/plugins/input-mask/jquery.inputmask.js') }}\"></script>
    <script src=\"{{ asset('assets-conf/plugins/input-mask/jquery.inputmask.date.extensions.js') }}\"></script>
    <script src=\"{{ asset('assets-conf/plugins/input-mask/jquery.inputmask.extensions.js') }}\"></script>

    <!-- Datatable -->
    <script src=\"{{ asset('assets-conf/bower_components/datatables.net/js/jquery.dataTables.min.js') }}\"></script>
    <script src=\"{{ asset('assets-conf/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js') }}\"></script>

    <!-- date-range-picker -->
    <script src=\"{{ asset('assets-conf/bower_components/moment/min/moment.min.js') }}\"></script>
    <script src=\"{{ asset('assets-conf/bower_components/bootstrap-daterangepicker/daterangepicker.js') }}\"></script>

    <!-- bootstrap datepicker -->
    <script src=\"{{ asset('assets-conf/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js') }}\"></script>

    <!-- bootstrap color picker -->
    <script src=\"{{ asset('assets-conf/bower_components/bootstrap-colorpicker/dist/js/bootstrap-colorpicker.min.js') }}\"></script>

    <!-- bootstrap time picker -->
    <script src=\"{{ asset('assets-conf/plugins/timepicker/bootstrap-timepicker.min.js') }}\"></script>

    <!-- SlimScroll -->
    <script src=\"{{ asset('assets-conf/bower_components/jquery-slimscroll/jquery.slimscroll.min.js') }}\"></script>

    <!-- iCheck 1.0.1 -->
    <script src=\"{{ asset('assets-conf/plugins/iCheck/icheck.min.js') }}\"></script>

    <!-- FastClick -->
    <script src=\"{{ asset('assets-conf/bower_components/fastclick/lib/fastclick.js') }}\"></script>

    <!-- AdminLTE App -->
    <script src=\"{{ asset('assets-conf/dist/js/adminlte.min.js') }}\"></script>

    <!-- AdminLTE for demo purposes -->
    <script src=\"{{ asset('assets-conf/dist/js/demo.js') }}\"></script>

    <!-- Page script -->
    <script>
        \$(function () {
            //Initialize Select2 Elements
            \$('.select2').select2()

            //Datemask dd/mm/yyyy
            \$('#datemask').inputmask('dd/mm/yyyy', { 'placeholder': 'dd/mm/yyyy' })
            //Datemask2 mm/dd/yyyy
            \$('#datemask2').inputmask('mm/dd/yyyy', { 'placeholder': 'mm/dd/yyyy' })
            //Money Euro
            \$('[data-mask]').inputmask()

            //Date range picker
            \$('#reservation').daterangepicker()
            //Date range picker with time picker
            \$('#reservationtime').daterangepicker({ timePicker: true, timePickerIncrement: 30, format: 'MM/DD/YYYY h:mm A' })
            //Date range as a button
            \$('#daterange-btn').daterangepicker(
                {
                    ranges   : {
                        'Today'       : [moment(), moment()],
                        'Yesterday'   : [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
                        'Last 7 Days' : [moment().subtract(6, 'days'), moment()],
                        'Last 30 Days': [moment().subtract(29, 'days'), moment()],
                        'This Month'  : [moment().startOf('month'), moment().endOf('month')],
                        'Last Month'  : [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
                    },
                    startDate: moment().subtract(29, 'days'),
                    endDate  : moment()
                },
                function (start, end) {
                    \$('#daterange-btn span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'))
                }
            )

            //Date picker
            \$('#datepicker').datepicker({
                autoclose: true
            })

            //iCheck for checkbox and radio inputs
            \$('input[type=\"checkbox\"].minimal, input[type=\"radio\"].minimal').iCheck({
                checkboxClass: 'icheckbox_minimal-blue',
                radioClass   : 'iradio_minimal-blue'
            })
            //Red color scheme for iCheck
            \$('input[type=\"checkbox\"].minimal-red, input[type=\"radio\"].minimal-red').iCheck({
                checkboxClass: 'icheckbox_minimal-red',
                radioClass   : 'iradio_minimal-red'
            })
            //Flat red color scheme for iCheck
            \$('input[type=\"checkbox\"].flat-red, input[type=\"radio\"].flat-red').iCheck({
                checkboxClass: 'icheckbox_flat-green',
                radioClass   : 'iradio_flat-green'
            })

            //Colorpicker
            \$('.my-colorpicker1').colorpicker()
            //color picker with addon
            \$('.my-colorpicker2').colorpicker()

            //Timepicker
            \$('.timepicker').timepicker({
                showInputs: false
            })
        })


         \$(function () {
    \$('#example1').DataTable()
    \$('#example2').DataTable({
      'paging'      : true,
      'lengthChange': false,
      'searching'   : false,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false
    })
  })
    </script>

    

{% endblock %}

</body>


</html>
", "config.html.twig", "C:\\xampp\\htdocs\\HelloFlatmate\\templates\\config.html.twig");
    }
}
