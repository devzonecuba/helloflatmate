<?php

use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Exception\RouteNotFoundException;
use Psr\Log\LoggerInterface;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class srcApp_KernelDevDebugContainerUrlGenerator extends Symfony\Component\Routing\Generator\UrlGenerator
{
    private static $declaredRoutes;
    private $defaultLocale;

    public function __construct(RequestContext $context, LoggerInterface $logger = null, string $defaultLocale = null)
    {
        $this->context = $context;
        $this->logger = $logger;
        $this->defaultLocale = $defaultLocale;
        if (null === self::$declaredRoutes) {
            self::$declaredRoutes = [
        '_twig_error_test' => [['code', '_format'], ['_controller' => 'twig.controller.preview_error::previewErrorPageAction', '_format' => 'html'], ['code' => '\\d+'], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '\\d+', 'code', true], ['text', '/_error']], [], []],
        '_wdt' => [['token'], ['_controller' => 'web_profiler.controller.profiler::toolbarAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_wdt']], [], []],
        '_profiler_home' => [[], ['_controller' => 'web_profiler.controller.profiler::homeAction'], [], [['text', '/_profiler/']], [], []],
        '_profiler_search' => [[], ['_controller' => 'web_profiler.controller.profiler::searchAction'], [], [['text', '/_profiler/search']], [], []],
        '_profiler_search_bar' => [[], ['_controller' => 'web_profiler.controller.profiler::searchBarAction'], [], [['text', '/_profiler/search_bar']], [], []],
        '_profiler_phpinfo' => [[], ['_controller' => 'web_profiler.controller.profiler::phpinfoAction'], [], [['text', '/_profiler/phpinfo']], [], []],
        '_profiler_search_results' => [['token'], ['_controller' => 'web_profiler.controller.profiler::searchResultsAction'], [], [['text', '/search/results'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
        '_profiler_open_file' => [[], ['_controller' => 'web_profiler.controller.profiler::openAction'], [], [['text', '/_profiler/open']], [], []],
        '_profiler' => [['token'], ['_controller' => 'web_profiler.controller.profiler::panelAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
        '_profiler_router' => [['token'], ['_controller' => 'web_profiler.controller.router::panelAction'], [], [['text', '/router'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
        '_profiler_exception' => [['token'], ['_controller' => 'web_profiler.controller.exception::showAction'], [], [['text', '/exception'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
        '_profiler_exception_css' => [['token'], ['_controller' => 'web_profiler.controller.exception::cssAction'], [], [['text', '/exception.css'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
        'about' => [[], ['_controller' => 'App\\Controller\\AboutController::index'], [], [['text', '/about']], [], []],
        'blog_index' => [[], ['_controller' => 'App\\Controller\\BlogController::index'], [], [['text', '/blog/']], [], []],
        'blog_new' => [[], ['_controller' => 'App\\Controller\\BlogController::new'], [], [['text', '/blog/new']], [], []],
        'blog_show' => [['id'], ['_controller' => 'App\\Controller\\BlogController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/blog']], [], []],
        'blog_edit' => [['id'], ['_controller' => 'App\\Controller\\BlogController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/blog']], [], []],
        'blog_delete' => [['id'], ['_controller' => 'App\\Controller\\BlogController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/blog']], [], []],
        'cama_index' => [[], ['_controller' => 'App\\Controller\\CamaController::index'], [], [['text', '/cama/']], [], []],
        'cama_new' => [[], ['_controller' => 'App\\Controller\\CamaController::new'], [], [['text', '/cama/new']], [], []],
        'cama_show' => [['id'], ['_controller' => 'App\\Controller\\CamaController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/cama']], [], []],
        'cama_edit' => [['id'], ['_controller' => 'App\\Controller\\CamaController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/cama']], [], []],
        'cama_delete' => [['id'], ['_controller' => 'App\\Controller\\CamaController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/cama']], [], []],
        'casavacacional_index' => [[], ['_controller' => 'App\\Controller\\CasavacacionalController::index'], [], [['text', '/casavacacional/']], [], []],
        'casavacacional_new' => [[], ['_controller' => 'App\\Controller\\CasavacacionalController::new'], [], [['text', '/casavacacional/new']], [], []],
        'casavacacional_show' => [['id'], ['_controller' => 'App\\Controller\\CasavacacionalController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/casavacacional']], [], []],
        'casavacacional_edit' => [['id'], ['_controller' => 'App\\Controller\\CasavacacionalController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/casavacacional']], [], []],
        'casavacacional_delete' => [['id'], ['_controller' => 'App\\Controller\\CasavacacionalController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/casavacacional']], [], []],
        'centrosalud_index' => [[], ['_controller' => 'App\\Controller\\CentrosaludController::index'], [], [['text', '/centrosalud/']], [], []],
        'centrosalud_new' => [[], ['_controller' => 'App\\Controller\\CentrosaludController::new'], [], [['text', '/centrosalud/new']], [], []],
        'centrosalud_show' => [['id'], ['_controller' => 'App\\Controller\\CentrosaludController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/centrosalud']], [], []],
        'centrosalud_edit' => [['id'], ['_controller' => 'App\\Controller\\CentrosaludController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/centrosalud']], [], []],
        'centrosalud_delete' => [['id'], ['_controller' => 'App\\Controller\\CentrosaludController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/centrosalud']], [], []],
        'cliente_index' => [[], ['_controller' => 'App\\Controller\\ClienteController::index'], [], [['text', '/cliente/']], [], []],
        'cliente_new' => [[], ['_controller' => 'App\\Controller\\ClienteController::new'], [], [['text', '/cliente/new']], [], []],
        'cliente_show' => [['id'], ['_controller' => 'App\\Controller\\ClienteController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/cliente']], [], []],
        'cliente_edit' => [['id'], ['_controller' => 'App\\Controller\\ClienteController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/cliente']], [], []],
        'cliente_delete' => [['id'], ['_controller' => 'App\\Controller\\ClienteController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/cliente']], [], []],
        'contact' => [[], ['_controller' => 'App\\Controller\\ContactController::index'], [], [['text', '/contact']], [], []],
        'contacto_index' => [[], ['_controller' => 'App\\Controller\\ContactoController::index'], [], [['text', '/contacto/']], [], []],
        'contacto_new' => [[], ['_controller' => 'App\\Controller\\ContactoController::new'], [], [['text', '/contacto/new']], [], []],
        'contacto_show' => [['id'], ['_controller' => 'App\\Controller\\ContactoController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/contacto']], [], []],
        'contacto_edit' => [['id'], ['_controller' => 'App\\Controller\\ContactoController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/contacto']], [], []],
        'contacto_delete' => [['id'], ['_controller' => 'App\\Controller\\ContactoController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/contacto']], [], []],
        'habitaciones_index' => [[], ['_controller' => 'App\\Controller\\HabitacionesController::index'], [], [['text', '/habitaciones/']], [], []],
        'habitaciones_new' => [[], ['_controller' => 'App\\Controller\\HabitacionesController::new'], [], [['text', '/habitaciones/new']], [], []],
        'habitaciones_show' => [['id'], ['_controller' => 'App\\Controller\\HabitacionesController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/habitaciones']], [], []],
        'habitaciones_edit' => [['id'], ['_controller' => 'App\\Controller\\HabitacionesController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/habitaciones']], [], []],
        'habitaciones_delete' => [['id'], ['_controller' => 'App\\Controller\\HabitacionesController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/habitaciones']], [], []],
        'home' => [[], ['_controller' => 'App\\Controller\\HomeController::index'], [], [['text', '/home']], [], []],
        'contactos' => [[], ['_controller' => 'App\\Controller\\HomeController::contactos'], [], [['text', '/home/contactos']], [], []],
        'aviso' => [[], ['_controller' => 'App\\Controller\\HomeController::aviso'], [], [['text', '/home/aviso']], [], []],
        'legality' => [[], ['_controller' => 'App\\Controller\\LegalityController::index'], [], [['text', '/legality']], [], []],
        'login' => [[], ['_controller' => 'App\\Controller\\LoginController::login'], [], [['text', '/login']], [], []],
        'operation' => [[], ['_controller' => 'App\\Controller\\OperationController::index'], [], [['text', '/operation']], [], []],
        'piso_index' => [[], ['_controller' => 'App\\Controller\\PisoController::index'], [], [['text', '/piso/']], [], []],
        'piso_new' => [[], ['_controller' => 'App\\Controller\\PisoController::new'], [], [['text', '/piso/new']], [], []],
        'piso_show' => [['id'], ['_controller' => 'App\\Controller\\PisoController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/piso']], [], []],
        'piso_edit' => [['id'], ['_controller' => 'App\\Controller\\PisoController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/piso']], [], []],
        'piso_delete' => [['id'], ['_controller' => 'App\\Controller\\PisoController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/piso']], [], []],
        'property' => [[], ['_controller' => 'App\\Controller\\PropertyController::property'], [], [['text', '/property']], [], []],
        'rooms' => [[], ['_controller' => 'App\\Controller\\PropertyController::rooms'], [], [['text', '/rooms']], [], []],
        'apartaments' => [[], ['_controller' => 'App\\Controller\\PropertyController::apartaments'], [], [['text', '/apartaments']], [], []],
        'flats' => [[], ['_controller' => 'App\\Controller\\PropertyController::flats'], [], [['text', '/flats']], [], []],
        'reservation' => [[], ['_controller' => 'App\\Controller\\PropertyController::reservation'], [], [['text', '/reservation']], [], []],
        'hellorooms' => [[], ['_controller' => 'App\\Controller\\QuestionController::hellorooms'], [], [['text', '/hellorooms']], [], []],
        'helloowners' => [[], ['_controller' => 'App\\Controller\\QuestionController::helloowners'], [], [['text', '/helloowners']], [], []],
        'reserva_index' => [[], ['_controller' => 'App\\Controller\\ReservaController::index'], [], [['text', '/reserva/']], [], []],
        'reserva_new' => [[], ['_controller' => 'App\\Controller\\ReservaController::new'], [], [['text', '/reserva/new']], [], []],
        'reserva_show' => [['id'], ['_controller' => 'App\\Controller\\ReservaController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/reserva']], [], []],
        'reserva_edit' => [['id'], ['_controller' => 'App\\Controller\\ReservaController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/reserva']], [], []],
        'reserva_delete' => [['id'], ['_controller' => 'App\\Controller\\ReservaController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/reserva']], [], []],
        'reservar' => [[], ['_controller' => 'App\\Controller\\ReservarController::index'], [], [['text', '/reservar']], [], []],
        'config' => [[], ['_controller' => 'App\\Controller\\ReservarController::config'], [], [['text', '/config']], [], []],
        'servicioadicional_index' => [[], ['_controller' => 'App\\Controller\\ServicioadicionalController::index'], [], [['text', '/servicioadicional/']], [], []],
        'servicioadicional_new' => [[], ['_controller' => 'App\\Controller\\ServicioadicionalController::new'], [], [['text', '/servicioadicional/new']], [], []],
        'servicioadicional_show' => [['id'], ['_controller' => 'App\\Controller\\ServicioadicionalController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/servicioadicional']], [], []],
        'servicioadicional_edit' => [['id'], ['_controller' => 'App\\Controller\\ServicioadicionalController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/servicioadicional']], [], []],
        'servicioadicional_delete' => [['id'], ['_controller' => 'App\\Controller\\ServicioadicionalController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/servicioadicional']], [], []],
        'servicios_index' => [[], ['_controller' => 'App\\Controller\\ServiciosController::index'], [], [['text', '/servicios/']], [], []],
        'servicios_new' => [[], ['_controller' => 'App\\Controller\\ServiciosController::new'], [], [['text', '/servicios/new']], [], []],
        'servicios_show' => [['id'], ['_controller' => 'App\\Controller\\ServiciosController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/servicios']], [], []],
        'servicios_edit' => [['id'], ['_controller' => 'App\\Controller\\ServiciosController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/servicios']], [], []],
        'servicios_delete' => [['id'], ['_controller' => 'App\\Controller\\ServiciosController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/servicios']], [], []],
        'supermercado_index' => [[], ['_controller' => 'App\\Controller\\SupermercadoController::index'], [], [['text', '/supermercado/']], [], []],
        'supermercado_new' => [[], ['_controller' => 'App\\Controller\\SupermercadoController::new'], [], [['text', '/supermercado/new']], [], []],
        'supermercado_show' => [['id'], ['_controller' => 'App\\Controller\\SupermercadoController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/supermercado']], [], []],
        'supermercado_edit' => [['id'], ['_controller' => 'App\\Controller\\SupermercadoController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/supermercado']], [], []],
        'supermercado_delete' => [['id'], ['_controller' => 'App\\Controller\\SupermercadoController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/supermercado']], [], []],
        'universidad_index' => [[], ['_controller' => 'App\\Controller\\UniversidadController::index'], [], [['text', '/universidad/']], [], []],
        'universidad_new' => [[], ['_controller' => 'App\\Controller\\UniversidadController::new'], [], [['text', '/universidad/new']], [], []],
        'universidad_show' => [['id'], ['_controller' => 'App\\Controller\\UniversidadController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/universidad']], [], []],
        'universidad_edit' => [['id'], ['_controller' => 'App\\Controller\\UniversidadController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/universidad']], [], []],
        'universidad_delete' => [['id'], ['_controller' => 'App\\Controller\\UniversidadController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/universidad']], [], []],
        'zona_index' => [[], ['_controller' => 'App\\Controller\\ZonaController::index'], [], [['text', '/zona/']], [], []],
        'zona_new' => [[], ['_controller' => 'App\\Controller\\ZonaController::new'], [], [['text', '/zona/new']], [], []],
        'zona_show' => [['id'], ['_controller' => 'App\\Controller\\ZonaController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/zona']], [], []],
        'zona_edit' => [['id'], ['_controller' => 'App\\Controller\\ZonaController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/zona']], [], []],
        'zona_delete' => [['id'], ['_controller' => 'App\\Controller\\ZonaController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/zona']], [], []],
    ];
        }
    }

    public function generate($name, $parameters = [], $referenceType = self::ABSOLUTE_PATH)
    {
        $locale = $parameters['_locale']
            ?? $this->context->getParameter('_locale')
            ?: $this->defaultLocale;

        if (null !== $locale && null !== $name) {
            do {
                if ((self::$declaredRoutes[$name.'.'.$locale][1]['_canonical_route'] ?? null) === $name) {
                    unset($parameters['_locale']);
                    $name .= '.'.$locale;
                    break;
                }
            } while (false !== $locale = strstr($locale, '_', true));
        }

        if (!isset(self::$declaredRoutes[$name])) {
            throw new RouteNotFoundException(sprintf('Unable to generate a URL for the named route "%s" as such route does not exist.', $name));
        }

        list($variables, $defaults, $requirements, $tokens, $hostTokens, $requiredSchemes) = self::$declaredRoutes[$name];

        return $this->doGenerate($variables, $defaults, $requirements, $tokens, $parameters, $name, $referenceType, $hostTokens, $requiredSchemes);
    }
}
