<?php

use Symfony\Component\Routing\Matcher\Dumper\PhpMatcherTrait;
use Symfony\Component\Routing\RequestContext;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class srcApp_KernelDevDebugContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    use PhpMatcherTrait;

    public function __construct(RequestContext $context)
    {
        $this->context = $context;
        $this->staticRoutes = [
            '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
            '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
            '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
            '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
            '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
            '/about' => [[['_route' => 'about', '_controller' => 'App\\Controller\\AboutController::index'], null, null, null, false, false, null]],
            '/blog' => [[['_route' => 'blog_index', '_controller' => 'App\\Controller\\BlogController::index'], null, ['GET' => 0], null, true, false, null]],
            '/blog/new' => [[['_route' => 'blog_new', '_controller' => 'App\\Controller\\BlogController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
            '/cama' => [[['_route' => 'cama_index', '_controller' => 'App\\Controller\\CamaController::index'], null, ['GET' => 0], null, true, false, null]],
            '/cama/new' => [[['_route' => 'cama_new', '_controller' => 'App\\Controller\\CamaController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
            '/casavacacional' => [[['_route' => 'casavacacional_index', '_controller' => 'App\\Controller\\CasavacacionalController::index'], null, ['GET' => 0], null, true, false, null]],
            '/casavacacional/new' => [[['_route' => 'casavacacional_new', '_controller' => 'App\\Controller\\CasavacacionalController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
            '/centrosalud' => [[['_route' => 'centrosalud_index', '_controller' => 'App\\Controller\\CentrosaludController::index'], null, ['GET' => 0], null, true, false, null]],
            '/centrosalud/new' => [[['_route' => 'centrosalud_new', '_controller' => 'App\\Controller\\CentrosaludController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
            '/cliente' => [[['_route' => 'cliente_index', '_controller' => 'App\\Controller\\ClienteController::index'], null, ['GET' => 0], null, true, false, null]],
            '/cliente/new' => [[['_route' => 'cliente_new', '_controller' => 'App\\Controller\\ClienteController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
            '/contact' => [[['_route' => 'contact', '_controller' => 'App\\Controller\\ContactController::index'], null, null, null, false, false, null]],
            '/contacto' => [[['_route' => 'contacto_index', '_controller' => 'App\\Controller\\ContactoController::index'], null, ['GET' => 0], null, true, false, null]],
            '/contacto/new' => [[['_route' => 'contacto_new', '_controller' => 'App\\Controller\\ContactoController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
            '/habitaciones' => [[['_route' => 'habitaciones_index', '_controller' => 'App\\Controller\\HabitacionesController::index'], null, ['GET' => 0], null, true, false, null]],
            '/habitaciones/new' => [[['_route' => 'habitaciones_new', '_controller' => 'App\\Controller\\HabitacionesController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
            '/home' => [[['_route' => 'home', '_controller' => 'App\\Controller\\HomeController::index'], null, null, null, false, false, null]],
            '/home/contactos' => [[['_route' => 'contactos', '_controller' => 'App\\Controller\\HomeController::contactos'], null, null, null, false, false, null]],
            '/home/aviso' => [[['_route' => 'aviso', '_controller' => 'App\\Controller\\HomeController::aviso'], null, null, null, false, false, null]],
            '/legality' => [[['_route' => 'legality', '_controller' => 'App\\Controller\\LegalityController::index'], null, null, null, false, false, null]],
            '/login' => [[['_route' => 'login', '_controller' => 'App\\Controller\\LoginController::login'], null, null, null, false, false, null]],
            '/operation' => [[['_route' => 'operation', '_controller' => 'App\\Controller\\OperationController::index'], null, null, null, false, false, null]],
            '/piso' => [[['_route' => 'piso_index', '_controller' => 'App\\Controller\\PisoController::index'], null, ['GET' => 0], null, true, false, null]],
            '/piso/new' => [[['_route' => 'piso_new', '_controller' => 'App\\Controller\\PisoController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
            '/property' => [[['_route' => 'property', '_controller' => 'App\\Controller\\PropertyController::property'], null, null, null, false, false, null]],
            '/rooms' => [[['_route' => 'rooms', '_controller' => 'App\\Controller\\PropertyController::rooms'], null, null, null, false, false, null]],
            '/apartaments' => [[['_route' => 'apartaments', '_controller' => 'App\\Controller\\PropertyController::apartaments'], null, null, null, false, false, null]],
            '/flats' => [[['_route' => 'flats', '_controller' => 'App\\Controller\\PropertyController::flats'], null, null, null, false, false, null]],
            '/reservation' => [[['_route' => 'reservation', '_controller' => 'App\\Controller\\PropertyController::reservation'], null, null, null, false, false, null]],
            '/hellorooms' => [[['_route' => 'hellorooms', '_controller' => 'App\\Controller\\QuestionController::hellorooms'], null, null, null, false, false, null]],
            '/helloowners' => [[['_route' => 'helloowners', '_controller' => 'App\\Controller\\QuestionController::helloowners'], null, null, null, false, false, null]],
            '/reserva' => [[['_route' => 'reserva_index', '_controller' => 'App\\Controller\\ReservaController::index'], null, ['GET' => 0], null, true, false, null]],
            '/reserva/new' => [[['_route' => 'reserva_new', '_controller' => 'App\\Controller\\ReservaController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
            '/reservar' => [[['_route' => 'reservar', '_controller' => 'App\\Controller\\ReservarController::index'], null, null, null, false, false, null]],
            '/config' => [[['_route' => 'config', '_controller' => 'App\\Controller\\ReservarController::config'], null, null, null, false, false, null]],
            '/servicioadicional' => [[['_route' => 'servicioadicional_index', '_controller' => 'App\\Controller\\ServicioadicionalController::index'], null, ['GET' => 0], null, true, false, null]],
            '/servicioadicional/new' => [[['_route' => 'servicioadicional_new', '_controller' => 'App\\Controller\\ServicioadicionalController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
            '/servicios' => [[['_route' => 'servicios_index', '_controller' => 'App\\Controller\\ServiciosController::index'], null, ['GET' => 0], null, true, false, null]],
            '/servicios/new' => [[['_route' => 'servicios_new', '_controller' => 'App\\Controller\\ServiciosController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
            '/supermercado' => [[['_route' => 'supermercado_index', '_controller' => 'App\\Controller\\SupermercadoController::index'], null, ['GET' => 0], null, true, false, null]],
            '/supermercado/new' => [[['_route' => 'supermercado_new', '_controller' => 'App\\Controller\\SupermercadoController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
            '/universidad' => [[['_route' => 'universidad_index', '_controller' => 'App\\Controller\\UniversidadController::index'], null, ['GET' => 0], null, true, false, null]],
            '/universidad/new' => [[['_route' => 'universidad_new', '_controller' => 'App\\Controller\\UniversidadController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
            '/zona' => [[['_route' => 'zona_index', '_controller' => 'App\\Controller\\ZonaController::index'], null, ['GET' => 0], null, true, false, null]],
            '/zona/new' => [[['_route' => 'zona_new', '_controller' => 'App\\Controller\\ZonaController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        ];
        $this->regexpList = [
            0 => '{^(?'
                    .'|/_(?'
                        .'|error/(\\d+)(?:\\.([^/]++))?(*:38)'
                        .'|wdt/([^/]++)(*:57)'
                        .'|profiler/([^/]++)(?'
                            .'|/(?'
                                .'|search/results(*:102)'
                                .'|router(*:116)'
                                .'|exception(?'
                                    .'|(*:136)'
                                    .'|\\.css(*:149)'
                                .')'
                            .')'
                            .'|(*:159)'
                        .')'
                    .')'
                    .'|/blog/([^/]++)(?'
                        .'|(*:186)'
                        .'|/edit(*:199)'
                        .'|(*:207)'
                    .')'
                    .'|/c(?'
                        .'|a(?'
                            .'|ma/([^/]++)(?'
                                .'|(*:239)'
                                .'|/edit(*:252)'
                                .'|(*:260)'
                            .')'
                            .'|savacacional/([^/]++)(?'
                                .'|(*:293)'
                                .'|/edit(*:306)'
                                .'|(*:314)'
                            .')'
                        .')'
                        .'|entrosalud/([^/]++)(?'
                            .'|(*:346)'
                            .'|/edit(*:359)'
                            .'|(*:367)'
                        .')'
                        .'|liente/([^/]++)(?'
                            .'|(*:394)'
                            .'|/edit(*:407)'
                            .'|(*:415)'
                        .')'
                        .'|ontacto/([^/]++)(?'
                            .'|(*:443)'
                            .'|/edit(*:456)'
                            .'|(*:464)'
                        .')'
                    .')'
                    .'|/habitaciones/([^/]++)(?'
                        .'|(*:499)'
                        .'|/edit(*:512)'
                        .'|(*:520)'
                    .')'
                    .'|/piso/([^/]++)(?'
                        .'|(*:546)'
                        .'|/edit(*:559)'
                        .'|(*:567)'
                    .')'
                    .'|/reserva/([^/]++)(?'
                        .'|(*:596)'
                        .'|/edit(*:609)'
                        .'|(*:617)'
                    .')'
                    .'|/s(?'
                        .'|ervicio(?'
                            .'|adicional/([^/]++)(?'
                                .'|(*:662)'
                                .'|/edit(*:675)'
                                .'|(*:683)'
                            .')'
                            .'|s/([^/]++)(?'
                                .'|(*:705)'
                                .'|/edit(*:718)'
                                .'|(*:726)'
                            .')'
                        .')'
                        .'|upermercado/([^/]++)(?'
                            .'|(*:759)'
                            .'|/edit(*:772)'
                            .'|(*:780)'
                        .')'
                    .')'
                    .'|/universidad/([^/]++)(?'
                        .'|(*:814)'
                        .'|/edit(*:827)'
                        .'|(*:835)'
                    .')'
                    .'|/zona/([^/]++)(?'
                        .'|(*:861)'
                        .'|/edit(*:874)'
                        .'|(*:882)'
                    .')'
                .')/?$}sDu',
        ];
        $this->dynamicRoutes = [
            38 => [[['_route' => '_twig_error_test', '_controller' => 'twig.controller.preview_error::previewErrorPageAction', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
            57 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
            102 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
            116 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
            136 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception::showAction'], ['token'], null, null, false, false, null]],
            149 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception::cssAction'], ['token'], null, null, false, false, null]],
            159 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
            186 => [[['_route' => 'blog_show', '_controller' => 'App\\Controller\\BlogController::show'], ['id'], ['GET' => 0], null, false, true, null]],
            199 => [[['_route' => 'blog_edit', '_controller' => 'App\\Controller\\BlogController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
            207 => [[['_route' => 'blog_delete', '_controller' => 'App\\Controller\\BlogController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
            239 => [[['_route' => 'cama_show', '_controller' => 'App\\Controller\\CamaController::show'], ['id'], ['GET' => 0], null, false, true, null]],
            252 => [[['_route' => 'cama_edit', '_controller' => 'App\\Controller\\CamaController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
            260 => [[['_route' => 'cama_delete', '_controller' => 'App\\Controller\\CamaController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
            293 => [[['_route' => 'casavacacional_show', '_controller' => 'App\\Controller\\CasavacacionalController::show'], ['id'], ['GET' => 0], null, false, true, null]],
            306 => [[['_route' => 'casavacacional_edit', '_controller' => 'App\\Controller\\CasavacacionalController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
            314 => [[['_route' => 'casavacacional_delete', '_controller' => 'App\\Controller\\CasavacacionalController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
            346 => [[['_route' => 'centrosalud_show', '_controller' => 'App\\Controller\\CentrosaludController::show'], ['id'], ['GET' => 0], null, false, true, null]],
            359 => [[['_route' => 'centrosalud_edit', '_controller' => 'App\\Controller\\CentrosaludController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
            367 => [[['_route' => 'centrosalud_delete', '_controller' => 'App\\Controller\\CentrosaludController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
            394 => [[['_route' => 'cliente_show', '_controller' => 'App\\Controller\\ClienteController::show'], ['id'], ['GET' => 0], null, false, true, null]],
            407 => [[['_route' => 'cliente_edit', '_controller' => 'App\\Controller\\ClienteController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
            415 => [[['_route' => 'cliente_delete', '_controller' => 'App\\Controller\\ClienteController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
            443 => [[['_route' => 'contacto_show', '_controller' => 'App\\Controller\\ContactoController::show'], ['id'], ['GET' => 0], null, false, true, null]],
            456 => [[['_route' => 'contacto_edit', '_controller' => 'App\\Controller\\ContactoController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
            464 => [[['_route' => 'contacto_delete', '_controller' => 'App\\Controller\\ContactoController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
            499 => [[['_route' => 'habitaciones_show', '_controller' => 'App\\Controller\\HabitacionesController::show'], ['id'], ['GET' => 0], null, false, true, null]],
            512 => [[['_route' => 'habitaciones_edit', '_controller' => 'App\\Controller\\HabitacionesController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
            520 => [[['_route' => 'habitaciones_delete', '_controller' => 'App\\Controller\\HabitacionesController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
            546 => [[['_route' => 'piso_show', '_controller' => 'App\\Controller\\PisoController::show'], ['id'], ['GET' => 0], null, false, true, null]],
            559 => [[['_route' => 'piso_edit', '_controller' => 'App\\Controller\\PisoController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
            567 => [[['_route' => 'piso_delete', '_controller' => 'App\\Controller\\PisoController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
            596 => [[['_route' => 'reserva_show', '_controller' => 'App\\Controller\\ReservaController::show'], ['id'], ['GET' => 0], null, false, true, null]],
            609 => [[['_route' => 'reserva_edit', '_controller' => 'App\\Controller\\ReservaController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
            617 => [[['_route' => 'reserva_delete', '_controller' => 'App\\Controller\\ReservaController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
            662 => [[['_route' => 'servicioadicional_show', '_controller' => 'App\\Controller\\ServicioadicionalController::show'], ['id'], ['GET' => 0], null, false, true, null]],
            675 => [[['_route' => 'servicioadicional_edit', '_controller' => 'App\\Controller\\ServicioadicionalController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
            683 => [[['_route' => 'servicioadicional_delete', '_controller' => 'App\\Controller\\ServicioadicionalController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
            705 => [[['_route' => 'servicios_show', '_controller' => 'App\\Controller\\ServiciosController::show'], ['id'], ['GET' => 0], null, false, true, null]],
            718 => [[['_route' => 'servicios_edit', '_controller' => 'App\\Controller\\ServiciosController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
            726 => [[['_route' => 'servicios_delete', '_controller' => 'App\\Controller\\ServiciosController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
            759 => [[['_route' => 'supermercado_show', '_controller' => 'App\\Controller\\SupermercadoController::show'], ['id'], ['GET' => 0], null, false, true, null]],
            772 => [[['_route' => 'supermercado_edit', '_controller' => 'App\\Controller\\SupermercadoController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
            780 => [[['_route' => 'supermercado_delete', '_controller' => 'App\\Controller\\SupermercadoController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
            814 => [[['_route' => 'universidad_show', '_controller' => 'App\\Controller\\UniversidadController::show'], ['id'], ['GET' => 0], null, false, true, null]],
            827 => [[['_route' => 'universidad_edit', '_controller' => 'App\\Controller\\UniversidadController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
            835 => [[['_route' => 'universidad_delete', '_controller' => 'App\\Controller\\UniversidadController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
            861 => [[['_route' => 'zona_show', '_controller' => 'App\\Controller\\ZonaController::show'], ['id'], ['GET' => 0], null, false, true, null]],
            874 => [[['_route' => 'zona_edit', '_controller' => 'App\\Controller\\ZonaController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
            882 => [[['_route' => 'zona_delete', '_controller' => 'App\\Controller\\ZonaController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        ];
    }
}
