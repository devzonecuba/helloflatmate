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

/* about/index.html.twig */
class __TwigTemplate_3543b2a38475a8f11f674e2ddf9d74c09bc2ba88df355b8263087848906595b2 extends \Twig\Template
{
    private $source;

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "about/index.html.twig", 1);
        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "about/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "about/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
    <!--/ Intro Single star /-->
    <section class=\"intro-single\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-12 col-lg-12\">
                    <div class=\"title-single-box\">
                        <h1 class=\"title-single\">Quienes somos</h1>
                        <h5>Conoce sobre nuestro trabajo!</h5>
                        <span class=\"color-text-a\">
                            Nuestro equipo cuenta con más de 10 año de experiencia en la gestion de pisos,
                            pisos compartidos, habitaciones, servicios de aparthotel y apartamentos para estudiantes
                            Erasmus, Nacionales e Internacionales. Nuestra única intención, es brindar un trato
                            cercano y comprensivo a nuestros clientes. Es por eso que en nuestra ofertas encontraras:
                            <ul>
                                <li>  Habitaciones cerca de la principales universidades.</li>

                                <li>  Habitaciones cerca del metro, para poder llegar a tu universidad en cuentión de minutos.</li>

                                <li>  Habitaciones en lugares emblematicos de Valencia como el Barrio del Carmen o el estadio de Mestalla.</li>
                            </ul>

                            Lo más importante es que poseemos habitaciones para todos los gutos y todos los presupuestos.

                            ";
        // line 29
        echo "                            ";
        // line 30
        echo "                            ";
        // line 31
        echo "                        </span>
                    </div>
                </div>
                ";
        // line 35
        echo "                    ";
        // line 36
        echo "                    ";
        // line 37
        echo "                        ";
        // line 38
        echo "                            ";
        // line 39
        echo "                                ";
        // line 40
        echo "                            ";
        // line 41
        echo "                            ";
        // line 42
        echo "                                ";
        // line 43
        echo "                            ";
        // line 44
        echo "                        ";
        // line 45
        echo "                    ";
        // line 46
        echo "                ";
        // line 47
        echo "            </div>
        </div>
    </section>
    <!--/ Intro Single End /-->

    <!--/ About Star /-->
    <section class=\"section-about\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-sm-12\">
                    <div class=\"about-img-box\">
                        <img src=\"assets/img/about/banner/slide-about-1.jpg\" alt=\"\" class=\"img-fluid\">
                    </div>
                    <div class=\"sinse-box\">
                        <h3 class=\"sinse-title\">HelloFlatMate
                            <span></span>
                            <br> Desde 2006</h3>
                        <p style=\"color: white;\"> Exclusividad & Confort</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/ About End /-->

    <!--/ Reserva /-->
    ";
        // line 74
        echo "        ";
        // line 75
        echo "            ";
        // line 76
        echo "                ";
        // line 77
        echo "                    ";
        // line 78
        echo "                        ";
        // line 79
        echo "                        ";
        // line 80
        echo "                        ";
        // line 81
        echo "                           ";
        // line 82
        echo "                               ";
        // line 83
        echo "
                           ";
        // line 85
        echo "
                           ";
        // line 87
        echo "
                           ";
        // line 89
        echo "                                ";
        // line 90
        echo "
                           ";
        // line 92
        echo "                                ";
        // line 93
        echo "                        ";
        // line 94
        echo "                    ";
        // line 95
        echo "                ";
        // line 96
        echo "                ";
        // line 97
        echo "                    ";
        // line 98
        echo "                ";
        // line 99
        echo "            ";
        // line 100
        echo "        ";
        // line 101
        echo "    ";
        // line 102
        echo "
    ";
        // line 104
        echo "    ";
        // line 105
        echo "        ";
        // line 106
        echo "            ";
        // line 107
        echo "                ";
        // line 108
        echo "                    ";
        // line 109
        echo "                        ";
        // line 110
        echo "                        ";
        // line 111
        echo "                        ";
        // line 112
        echo "                            ";
        // line 113
        echo "                            ";
        // line 114
        echo "                            ";
        // line 115
        echo "                            ";
        // line 116
        echo "
                        ";
        // line 118
        echo "                    ";
        // line 119
        echo "                ";
        // line 120
        echo "                ";
        // line 121
        echo "                    ";
        // line 122
        echo "
                ";
        // line 124
        echo "            ";
        // line 125
        echo "        ";
        // line 126
        echo "    ";
        // line 127
        echo "    <!--/ Intro Single End /-->

    <!--/ Team Star /-->
    <section class=\"section-agents section-t8\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-12\">
                    <div class=\"title-wrap d-flex justify-content-between\">
                        <div class=\"title-box\">
                            <h2 class=\"title-a\">Nuestro Equipo</h2>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-md-3\">
                    <div class=\"card-box-d\">
                        <div class=\"card-img-d\">
                            <img src=\"assets/img/about/team/agent-6.jpg\" alt=\"\" class=\"img-d img-fluid\">
                        </div>
                        <div class=\"card-overlay card-overlay-hover\">
                            <div class=\"card-header-d\">
                                <div class=\"card-title-d align-self-center\">
                                    <h3 class=\"title-d\" style=\"margin-top: 35px; margin-bottom: 0px\">
                                        Alberto Apellido
                                    </h3>
                                </div>
                            </div>
                            <div class=\"card-body-d\">
                                <p class=\"content-d color-text-a\">
                                    CEO - Gerente
                                </p>
                                <div class=\"info-agents color-a\">
                                    <span><i class=\"fa fa-phone\">&nbsp; </i>+54 356 945234</span>
                                    <br>
                                    <span> <i class=\"fa fa-envelope\">&nbsp; </i> agents@example.com</span>
                                </div>
                            </div>
                            ";
        // line 166
        echo "                                ";
        // line 167
        echo "                                    ";
        // line 168
        echo "                                        ";
        // line 169
        echo "                                            ";
        // line 170
        echo "                                                ";
        // line 171
        echo "                                            ";
        // line 172
        echo "                                        ";
        // line 173
        echo "                                        ";
        // line 174
        echo "                                            ";
        // line 175
        echo "                                                ";
        // line 176
        echo "                                            ";
        // line 177
        echo "                                        ";
        // line 178
        echo "                                        ";
        // line 179
        echo "                                            ";
        // line 180
        echo "                                                ";
        // line 181
        echo "                                            ";
        // line 182
        echo "                                        ";
        // line 183
        echo "                                        ";
        // line 184
        echo "                                            ";
        // line 185
        echo "                                                ";
        // line 186
        echo "                                            ";
        // line 187
        echo "                                        ";
        // line 188
        echo "                                        ";
        // line 189
        echo "                                            ";
        // line 190
        echo "                                                ";
        // line 191
        echo "                                            ";
        // line 192
        echo "                                        ";
        // line 193
        echo "                                    ";
        // line 194
        echo "                                ";
        // line 195
        echo "                            ";
        // line 196
        echo "                        </div>
                    </div>
                </div>
                <div class=\"col-md-3\">
                    <div class=\"card-box-d\">
                        <div class=\"card-img-d\">
                            <img src=\"assets/img/about/team/agent-7.jpg\" alt=\"\" class=\"img-d img-fluid\">
                        </div>
                        <div class=\"card-overlay card-overlay-hover\">
                            <div class=\"card-header-d\">
                                <div class=\"card-title-d align-self-center\">
                                    <h3 class=\"title-d\" style=\"margin-top: 35px; margin-bottom: 0px\">
                                        Móncica Apellido
                                    </h3>
                                </div>
                            </div>
                            <div class=\"card-body-d\">
                                <p class=\"content-d color-text-a\">
                                    Directora de Agencia.
                                </p>
                                <div class=\"info-agents color-a\">
                                    <span><i class=\"fa fa-phone\">&nbsp; </i>+54 356 945234</span>
                                    <br>
                                    <span> <i class=\"fa fa-envelope\">&nbsp; </i> agents@example.com</span>
                                </div>
                            </div>
                            ";
        // line 223
        echo "                                ";
        // line 224
        echo "                                    ";
        // line 225
        echo "                                        ";
        // line 226
        echo "                                            ";
        // line 227
        echo "                                                ";
        // line 228
        echo "                                            ";
        // line 229
        echo "                                        ";
        // line 230
        echo "                                        ";
        // line 231
        echo "                                            ";
        // line 232
        echo "                                                ";
        // line 233
        echo "                                            ";
        // line 234
        echo "                                        ";
        // line 235
        echo "                                        ";
        // line 236
        echo "                                            ";
        // line 237
        echo "                                                ";
        // line 238
        echo "                                            ";
        // line 239
        echo "                                        ";
        // line 240
        echo "                                        ";
        // line 241
        echo "                                            ";
        // line 242
        echo "                                                ";
        // line 243
        echo "                                            ";
        // line 244
        echo "                                        ";
        // line 245
        echo "                                        ";
        // line 246
        echo "                                            ";
        // line 247
        echo "                                                ";
        // line 248
        echo "                                            ";
        // line 249
        echo "                                        ";
        // line 250
        echo "                                    ";
        // line 251
        echo "                                ";
        // line 252
        echo "                            ";
        // line 253
        echo "                        </div>
                    </div>
                </div>
                <div class=\"col-md-3\">
                    <div class=\"card-box-d\">
                        <div class=\"card-img-d\">
                            <img src=\"assets/img/about/team/agent-6.jpg\" alt=\"\" class=\"img-d img-fluid\">
                        </div>
                        <div class=\"card-overlay card-overlay-hover\">
                            <div class=\"card-header-d\">
                                <div class=\"card-title-d align-self-center\">
                                    <h3 class=\"title-d\" style=\"margin-top: 35px; margin-bottom: 0px\">
                                        JuanMa
                                        Cascada
                                    </h3>
                                </div>
                            </div>
                            <div class=\"card-body-d\">
                                <p class=\"content-d color-text-a\">
                                    Jefe de Contabilidad
                                </p>
                                <div class=\"info-agents color-a\">
                                    <span><i class=\"fa fa-phone\">&nbsp; </i>+54 356 945234</span>
                                    <br>
                                    <span> <i class=\"fa fa-envelope\">&nbsp; </i> agents@example.com</span>
                                </div>
                            </div>
                            ";
        // line 281
        echo "                                ";
        // line 282
        echo "                                    ";
        // line 283
        echo "                                        ";
        // line 284
        echo "                                            ";
        // line 285
        echo "                                                ";
        // line 286
        echo "                                            ";
        // line 287
        echo "                                        ";
        // line 288
        echo "                                        ";
        // line 289
        echo "                                            ";
        // line 290
        echo "                                                ";
        // line 291
        echo "                                            ";
        // line 292
        echo "                                        ";
        // line 293
        echo "                                        ";
        // line 294
        echo "                                            ";
        // line 295
        echo "                                                ";
        // line 296
        echo "                                            ";
        // line 297
        echo "                                        ";
        // line 298
        echo "                                        ";
        // line 299
        echo "                                            ";
        // line 300
        echo "                                                ";
        // line 301
        echo "                                            ";
        // line 302
        echo "                                        ";
        // line 303
        echo "                                        ";
        // line 304
        echo "                                            ";
        // line 305
        echo "                                                ";
        // line 306
        echo "                                            ";
        // line 307
        echo "                                        ";
        // line 308
        echo "                                    ";
        // line 309
        echo "                                ";
        // line 310
        echo "                            ";
        // line 311
        echo "                        </div>
                    </div>
                </div>
                <div class=\"col-md-3\">
                    <div class=\"card-box-d\">
                        <div class=\"card-img-d\">
                            <img src=\"assets/img/about/team/agent-6.jpg\" alt=\"\" class=\"img-d img-fluid\">
                        </div>
                        <div class=\"card-overlay card-overlay-hover\">
                            <div class=\"card-header-d\">
                                <div class=\"card-title-d align-self-center\">
                                    <h3 class=\"title-d\" style=\"margin-top: 35px; margin-bottom: 0px;\">
                                        Adolfo
                                             Cascada
                                    </h3>
                                </div>
                            </div>
                            <div class=\"card-body-d\">
                                <p class=\"content-d color-text-a\">
                                    Dpto. Contabilidad
                                </p>
                                <div class=\"info-agents color-a\">
                                    <span><i class=\"fa fa-phone\">&nbsp; </i>+54 356 945234</span>
                                    <br>
                                    <span> <i class=\"fa fa-envelope\">&nbsp; </i> agents@example.com</span>
                                </div>
                            </div>
                            ";
        // line 339
        echo "                                ";
        // line 340
        echo "                                    ";
        // line 341
        echo "                                        ";
        // line 342
        echo "                                            ";
        // line 343
        echo "                                                ";
        // line 344
        echo "                                            ";
        // line 345
        echo "                                        ";
        // line 346
        echo "                                        ";
        // line 347
        echo "                                            ";
        // line 348
        echo "                                                ";
        // line 349
        echo "                                            ";
        // line 350
        echo "                                        ";
        // line 351
        echo "                                        ";
        // line 352
        echo "                                            ";
        // line 353
        echo "                                                ";
        // line 354
        echo "                                            ";
        // line 355
        echo "                                        ";
        // line 356
        echo "                                        ";
        // line 357
        echo "                                            ";
        // line 358
        echo "                                                ";
        // line 359
        echo "                                            ";
        // line 360
        echo "                                        ";
        // line 361
        echo "                                        ";
        // line 362
        echo "                                        ";
        // line 363
        echo "                                        ";
        // line 364
        echo "                                        ";
        // line 365
        echo "                                        ";
        // line 366
        echo "                                    ";
        // line 367
        echo "                                ";
        // line 368
        echo "                            ";
        // line 369
        echo "                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/ Team End /-->

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "about/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  617 => 369,  615 => 368,  613 => 367,  611 => 366,  609 => 365,  607 => 364,  605 => 363,  603 => 362,  601 => 361,  599 => 360,  597 => 359,  595 => 358,  593 => 357,  591 => 356,  589 => 355,  587 => 354,  585 => 353,  583 => 352,  581 => 351,  579 => 350,  577 => 349,  575 => 348,  573 => 347,  571 => 346,  569 => 345,  567 => 344,  565 => 343,  563 => 342,  561 => 341,  559 => 340,  557 => 339,  528 => 311,  526 => 310,  524 => 309,  522 => 308,  520 => 307,  518 => 306,  516 => 305,  514 => 304,  512 => 303,  510 => 302,  508 => 301,  506 => 300,  504 => 299,  502 => 298,  500 => 297,  498 => 296,  496 => 295,  494 => 294,  492 => 293,  490 => 292,  488 => 291,  486 => 290,  484 => 289,  482 => 288,  480 => 287,  478 => 286,  476 => 285,  474 => 284,  472 => 283,  470 => 282,  468 => 281,  439 => 253,  437 => 252,  435 => 251,  433 => 250,  431 => 249,  429 => 248,  427 => 247,  425 => 246,  423 => 245,  421 => 244,  419 => 243,  417 => 242,  415 => 241,  413 => 240,  411 => 239,  409 => 238,  407 => 237,  405 => 236,  403 => 235,  401 => 234,  399 => 233,  397 => 232,  395 => 231,  393 => 230,  391 => 229,  389 => 228,  387 => 227,  385 => 226,  383 => 225,  381 => 224,  379 => 223,  351 => 196,  349 => 195,  347 => 194,  345 => 193,  343 => 192,  341 => 191,  339 => 190,  337 => 189,  335 => 188,  333 => 187,  331 => 186,  329 => 185,  327 => 184,  325 => 183,  323 => 182,  321 => 181,  319 => 180,  317 => 179,  315 => 178,  313 => 177,  311 => 176,  309 => 175,  307 => 174,  305 => 173,  303 => 172,  301 => 171,  299 => 170,  297 => 169,  295 => 168,  293 => 167,  291 => 166,  251 => 127,  249 => 126,  247 => 125,  245 => 124,  242 => 122,  240 => 121,  238 => 120,  236 => 119,  234 => 118,  231 => 116,  229 => 115,  227 => 114,  225 => 113,  223 => 112,  221 => 111,  219 => 110,  217 => 109,  215 => 108,  213 => 107,  211 => 106,  209 => 105,  207 => 104,  204 => 102,  202 => 101,  200 => 100,  198 => 99,  196 => 98,  194 => 97,  192 => 96,  190 => 95,  188 => 94,  186 => 93,  184 => 92,  181 => 90,  179 => 89,  176 => 87,  173 => 85,  170 => 83,  168 => 82,  166 => 81,  164 => 80,  162 => 79,  160 => 78,  158 => 77,  156 => 76,  154 => 75,  152 => 74,  124 => 47,  122 => 46,  120 => 45,  118 => 44,  116 => 43,  114 => 42,  112 => 41,  110 => 40,  108 => 39,  106 => 38,  104 => 37,  102 => 36,  100 => 35,  95 => 31,  93 => 30,  91 => 29,  65 => 4,  56 => 3,  27 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}

    <!--/ Intro Single star /-->
    <section class=\"intro-single\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-12 col-lg-12\">
                    <div class=\"title-single-box\">
                        <h1 class=\"title-single\">Quienes somos</h1>
                        <h5>Conoce sobre nuestro trabajo!</h5>
                        <span class=\"color-text-a\">
                            Nuestro equipo cuenta con más de 10 año de experiencia en la gestion de pisos,
                            pisos compartidos, habitaciones, servicios de aparthotel y apartamentos para estudiantes
                            Erasmus, Nacionales e Internacionales. Nuestra única intención, es brindar un trato
                            cercano y comprensivo a nuestros clientes. Es por eso que en nuestra ofertas encontraras:
                            <ul>
                                <li>  Habitaciones cerca de la principales universidades.</li>

                                <li>  Habitaciones cerca del metro, para poder llegar a tu universidad en cuentión de minutos.</li>

                                <li>  Habitaciones en lugares emblematicos de Valencia como el Barrio del Carmen o el estadio de Mestalla.</li>
                            </ul>

                            Lo más importante es que poseemos habitaciones para todos los gutos y todos los presupuestos.

                            {#FlatMate es una empresa creada desde 2010. Somos un grupo joven pero con una basta#}
                            {#experiencia en el campo de rentas de habitaciones y casas para vacacionar. Nuestro objetivo#}
                            {#es que usted se sienta comodo y logre obtener lo que busca.#}
                        </span>
                    </div>
                </div>
                {#<div class=\"col-md-12 col-lg-4\" style=\"text-align: center;\">#}
                    {#<span class=\"fa fa-users fa-10x\"></span>#}
                    {#<nav aria-label=\"breadcrumb\" class=\"breadcrumb-box d-flex justify-content-lg-end\">#}
                        {#<ol class=\"breadcrumb\">#}
                            {#<li class=\"breadcrumb-item\">#}
                                {#<a href=\"#\">Home</a>#}
                            {#</li>#}
                            {#<li class=\"breadcrumb-item active\" aria-current=\"page\">#}
                                {#About#}
                            {#</li>#}
                        {#</ol>#}
                    {#</nav>#}
                {#</div>#}
            </div>
        </div>
    </section>
    <!--/ Intro Single End /-->

    <!--/ About Star /-->
    <section class=\"section-about\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-sm-12\">
                    <div class=\"about-img-box\">
                        <img src=\"assets/img/about/banner/slide-about-1.jpg\" alt=\"\" class=\"img-fluid\">
                    </div>
                    <div class=\"sinse-box\">
                        <h3 class=\"sinse-title\">HelloFlatMate
                            <span></span>
                            <br> Desde 2006</h3>
                        <p style=\"color: white;\"> Exclusividad & Confort</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/ About End /-->

    <!--/ Reserva /-->
    {#<section class=\"margin-single-line\">#}
        {#<div class=\"container\">#}
            {#<div class=\"row\">#}
                {#<div class=\"col-md-12 col-lg-8\">#}
                    {#<div class=\"title-single-box\">#}
                        {#<h1 class=\"title-single\">Como Reservar</h1>#}
                        {#<h5>Reserve ahora!</h5>#}
                        {#<span class=\"color-text-a\">#}
                           {#<p> - Disponibilidad: Toda la informacion sobre las habitaciones y pisos, aparece disponible en nuetra pagina web.#}
                               {#Si tiene cualquier duda, puedes ponerse en contacto con nosotros.</p>#}

                           {#<p> - Reservar: Presiones el boton Reservar y complete un formulario con su información personal. </p>#}

                           {#<p> - Aeropuerto: Ofrecemos servicio de recogida al aeropuerto. No mantendremos en contacto para acordar fecha y hora de recogida.</p>#}

                           {#<p> - Apartamento: Si no lo recogemos en el aeropuerto, nos veremos en el piso a la hora y fecha acordada. Le entregaremos las llaves,#}
                                {#le mostraremos el piso y luego firmamos el contrato.</p>#}

                           {#<p> - Observaciones : Puede visitar la habitacion antes de reservar, siempre que no halla huspedes hospedados. El pago se#}
                                {#realizara una vez que se halla firmado el contrato.</p>#}
                        {#</span>#}
                    {#</div>#}
                {#</div>#}
                {#<div class=\"col-md-12 col-lg-4\" style=\"text-align: center;\">#}
                    {#<span class=\"fa fa-bed fa-10x\"></span>#}
                {#</div>#}
            {#</div>#}
        {#</div>#}
    {#</section>#}

    {#<!--/ Reserva /-->#}
    {#<section class=\"margin-single-line\">#}
        {#<div class=\"container\">#}
            {#<div class=\"row\">#}
                {#<div class=\"col-md-12 col-lg-8\">#}
                    {#<div class=\"title-single-box\">#}
                        {#<h1 class=\"title-single\">Orientacion</h1>#}
                        {#<h5>Preguntanos, queremos ayudarte!</h5>#}
                        {#<span class=\"color-text-a\">#}
                            {#Si es una ciudad nueva para tí y no sabes como moverte en ella, preguntanos, estamos#}
                            {#para ayudarte. No solo te ofrecemos alojamiento, te podemos orientar los primeros días#}
                            {#en las gestiones que necesites hacer. También te podemos recomendar lugares como restaurantes,#}
                            {#bares, museos, monumentos, plazas historicas, entre otros.#}

                        {#</span>#}
                    {#</div>#}
                {#</div>#}
                {#<div class=\"col-md-12 col-lg-4\" style=\"text-align: center;\">#}
                    {#<span class=\"fa fa-question-circle-o fa-10x\"></span>#}

                {#</div>#}
            {#</div>#}
        {#</div>#}
    {#</section>#}
    <!--/ Intro Single End /-->

    <!--/ Team Star /-->
    <section class=\"section-agents section-t8\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-12\">
                    <div class=\"title-wrap d-flex justify-content-between\">
                        <div class=\"title-box\">
                            <h2 class=\"title-a\">Nuestro Equipo</h2>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-md-3\">
                    <div class=\"card-box-d\">
                        <div class=\"card-img-d\">
                            <img src=\"assets/img/about/team/agent-6.jpg\" alt=\"\" class=\"img-d img-fluid\">
                        </div>
                        <div class=\"card-overlay card-overlay-hover\">
                            <div class=\"card-header-d\">
                                <div class=\"card-title-d align-self-center\">
                                    <h3 class=\"title-d\" style=\"margin-top: 35px; margin-bottom: 0px\">
                                        Alberto Apellido
                                    </h3>
                                </div>
                            </div>
                            <div class=\"card-body-d\">
                                <p class=\"content-d color-text-a\">
                                    CEO - Gerente
                                </p>
                                <div class=\"info-agents color-a\">
                                    <span><i class=\"fa fa-phone\">&nbsp; </i>+54 356 945234</span>
                                    <br>
                                    <span> <i class=\"fa fa-envelope\">&nbsp; </i> agents@example.com</span>
                                </div>
                            </div>
                            {#<div class=\"card-footer-d\">#}
                                {#<div class=\"socials-footer d-flex justify-content-center\">#}
                                    {#<ul class=\"list-inline\">#}
                                        {#<li class=\"list-inline-item\">#}
                                            {#<a href=\"#\" class=\"link-one\">#}
                                                {#<i class=\"fa fa-facebook\" aria-hidden=\"true\"></i>#}
                                            {#</a>#}
                                        {#</li>#}
                                        {#<li class=\"list-inline-item\">#}
                                            {#<a href=\"#\" class=\"link-one\">#}
                                                {#<i class=\"fa fa-twitter\" aria-hidden=\"true\"></i>#}
                                            {#</a>#}
                                        {#</li>#}
                                        {#<li class=\"list-inline-item\">#}
                                            {#<a href=\"#\" class=\"link-one\">#}
                                                {#<i class=\"fa fa-instagram\" aria-hidden=\"true\"></i>#}
                                            {#</a>#}
                                        {#</li>#}
                                        {#<li class=\"list-inline-item\">#}
                                            {#<a href=\"#\" class=\"link-one\">#}
                                                {#<i class=\"fa fa-pinterest-p\" aria-hidden=\"true\"></i>#}
                                            {#</a>#}
                                        {#</li>#}
                                        {#<li class=\"list-inline-item\">#}
                                            {#<a href=\"#\" class=\"link-one\">#}
                                                {#<i class=\"fa fa-dribbble\" aria-hidden=\"true\"></i>#}
                                            {#</a>#}
                                        {#</li>#}
                                    {#</ul>#}
                                {#</div>#}
                            {#</div>#}
                        </div>
                    </div>
                </div>
                <div class=\"col-md-3\">
                    <div class=\"card-box-d\">
                        <div class=\"card-img-d\">
                            <img src=\"assets/img/about/team/agent-7.jpg\" alt=\"\" class=\"img-d img-fluid\">
                        </div>
                        <div class=\"card-overlay card-overlay-hover\">
                            <div class=\"card-header-d\">
                                <div class=\"card-title-d align-self-center\">
                                    <h3 class=\"title-d\" style=\"margin-top: 35px; margin-bottom: 0px\">
                                        Móncica Apellido
                                    </h3>
                                </div>
                            </div>
                            <div class=\"card-body-d\">
                                <p class=\"content-d color-text-a\">
                                    Directora de Agencia.
                                </p>
                                <div class=\"info-agents color-a\">
                                    <span><i class=\"fa fa-phone\">&nbsp; </i>+54 356 945234</span>
                                    <br>
                                    <span> <i class=\"fa fa-envelope\">&nbsp; </i> agents@example.com</span>
                                </div>
                            </div>
                            {#<div class=\"card-footer-d\">#}
                                {#<div class=\"socials-footer d-flex justify-content-center\">#}
                                    {#<ul class=\"list-inline\">#}
                                        {#<li class=\"list-inline-item\">#}
                                            {#<a href=\"#\" class=\"link-one\">#}
                                                {#<i class=\"fa fa-facebook\" aria-hidden=\"true\"></i>#}
                                            {#</a>#}
                                        {#</li>#}
                                        {#<li class=\"list-inline-item\">#}
                                            {#<a href=\"#\" class=\"link-one\">#}
                                                {#<i class=\"fa fa-twitter\" aria-hidden=\"true\"></i>#}
                                            {#</a>#}
                                        {#</li>#}
                                        {#<li class=\"list-inline-item\">#}
                                            {#<a href=\"#\" class=\"link-one\">#}
                                                {#<i class=\"fa fa-instagram\" aria-hidden=\"true\"></i>#}
                                            {#</a>#}
                                        {#</li>#}
                                        {#<li class=\"list-inline-item\">#}
                                            {#<a href=\"#\" class=\"link-one\">#}
                                                {#<i class=\"fa fa-pinterest-p\" aria-hidden=\"true\"></i>#}
                                            {#</a>#}
                                        {#</li>#}
                                        {#<li class=\"list-inline-item\">#}
                                            {#<a href=\"#\" class=\"link-one\">#}
                                                {#<i class=\"fa fa-dribbble\" aria-hidden=\"true\"></i>#}
                                            {#</a>#}
                                        {#</li>#}
                                    {#</ul>#}
                                {#</div>#}
                            {#</div>#}
                        </div>
                    </div>
                </div>
                <div class=\"col-md-3\">
                    <div class=\"card-box-d\">
                        <div class=\"card-img-d\">
                            <img src=\"assets/img/about/team/agent-6.jpg\" alt=\"\" class=\"img-d img-fluid\">
                        </div>
                        <div class=\"card-overlay card-overlay-hover\">
                            <div class=\"card-header-d\">
                                <div class=\"card-title-d align-self-center\">
                                    <h3 class=\"title-d\" style=\"margin-top: 35px; margin-bottom: 0px\">
                                        JuanMa
                                        Cascada
                                    </h3>
                                </div>
                            </div>
                            <div class=\"card-body-d\">
                                <p class=\"content-d color-text-a\">
                                    Jefe de Contabilidad
                                </p>
                                <div class=\"info-agents color-a\">
                                    <span><i class=\"fa fa-phone\">&nbsp; </i>+54 356 945234</span>
                                    <br>
                                    <span> <i class=\"fa fa-envelope\">&nbsp; </i> agents@example.com</span>
                                </div>
                            </div>
                            {#<div class=\"card-footer-d\">#}
                                {#<div class=\"socials-footer d-flex justify-content-center\">#}
                                    {#<ul class=\"list-inline\">#}
                                        {#<li class=\"list-inline-item\">#}
                                            {#<a href=\"#\" class=\"link-one\">#}
                                                {#<i class=\"fa fa-facebook\" aria-hidden=\"true\"></i>#}
                                            {#</a>#}
                                        {#</li>#}
                                        {#<li class=\"list-inline-item\">#}
                                            {#<a href=\"#\" class=\"link-one\">#}
                                                {#<i class=\"fa fa-twitter\" aria-hidden=\"true\"></i>#}
                                            {#</a>#}
                                        {#</li>#}
                                        {#<li class=\"list-inline-item\">#}
                                            {#<a href=\"#\" class=\"link-one\">#}
                                                {#<i class=\"fa fa-instagram\" aria-hidden=\"true\"></i>#}
                                            {#</a>#}
                                        {#</li>#}
                                        {#<li class=\"list-inline-item\">#}
                                            {#<a href=\"#\" class=\"link-one\">#}
                                                {#<i class=\"fa fa-pinterest-p\" aria-hidden=\"true\"></i>#}
                                            {#</a>#}
                                        {#</li>#}
                                        {#<li class=\"list-inline-item\">#}
                                            {#<a href=\"#\" class=\"link-one\">#}
                                                {#<i class=\"fa fa-dribbble\" aria-hidden=\"true\"></i>#}
                                            {#</a>#}
                                        {#</li>#}
                                    {#</ul>#}
                                {#</div>#}
                            {#</div>#}
                        </div>
                    </div>
                </div>
                <div class=\"col-md-3\">
                    <div class=\"card-box-d\">
                        <div class=\"card-img-d\">
                            <img src=\"assets/img/about/team/agent-6.jpg\" alt=\"\" class=\"img-d img-fluid\">
                        </div>
                        <div class=\"card-overlay card-overlay-hover\">
                            <div class=\"card-header-d\">
                                <div class=\"card-title-d align-self-center\">
                                    <h3 class=\"title-d\" style=\"margin-top: 35px; margin-bottom: 0px;\">
                                        Adolfo
                                             Cascada
                                    </h3>
                                </div>
                            </div>
                            <div class=\"card-body-d\">
                                <p class=\"content-d color-text-a\">
                                    Dpto. Contabilidad
                                </p>
                                <div class=\"info-agents color-a\">
                                    <span><i class=\"fa fa-phone\">&nbsp; </i>+54 356 945234</span>
                                    <br>
                                    <span> <i class=\"fa fa-envelope\">&nbsp; </i> agents@example.com</span>
                                </div>
                            </div>
                            {#<div class=\"card-footer-d\">#}
                                {#<div class=\"socials-footer d-flex justify-content-center\">#}
                                    {#<ul class=\"list-inline\">#}
                                        {#<li class=\"list-inline-item\">#}
                                            {#<a href=\"#\" class=\"link-one\">#}
                                                {#<i class=\"fa fa-facebook\" aria-hidden=\"true\"></i>#}
                                            {#</a>#}
                                        {#</li>#}
                                        {#<li class=\"list-inline-item\">#}
                                            {#<a href=\"#\" class=\"link-one\">#}
                                                {#<i class=\"fa fa-twitter\" aria-hidden=\"true\"></i>#}
                                            {#</a>#}
                                        {#</li>#}
                                        {#<li class=\"list-inline-item\">#}
                                            {#<a href=\"#\" class=\"link-one\">#}
                                                {#<i class=\"fa fa-instagram\" aria-hidden=\"true\"></i>#}
                                            {#</a>#}
                                        {#</li>#}
                                        {#<li class=\"list-inline-item\">#}
                                            {#<a href=\"#\" class=\"link-one\">#}
                                                {#<i class=\"fa fa-pinterest-p\" aria-hidden=\"true\"></i>#}
                                            {#</a>#}
                                        {#</li>#}
                                        {#<li class=\"list-inline-item\">#}
                                        {#<a href=\"#\" class=\"link-one\">#}
                                        {#<i class=\"fa fa-dribbble\" aria-hidden=\"true\"></i>#}
                                        {#</a>#}
                                        {#</li>#}
                                    {#</ul>#}
                                {#</div>#}
                            {#</div>#}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/ Team End /-->

{% endblock %}
", "about/index.html.twig", "C:\\xampp\\htdocs\\HelloFlatmate\\templates\\about\\index.html.twig");
    }
}
