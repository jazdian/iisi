<?php

require_once PATH_CONF . '/Router.php';
require_once PATH_CONF . '/Route.php';

/**
 * Clase del home. 
 */
class Routs
{

    /**
     * 
     * La función RouterOutlet Controla las rutas del sistema.
    */
    public function RouterOutlet()
    {
        $router = new Router($_SERVER['REQUEST_URI']);
        
        # En estas secciones se inyecta en el home otras páginass segun sus rutas.

        $router->add(PATH_FOLD, function () {
            require_once PATH_VIEW . '/web/inicio.php';
        });

        $router->add(PATH_FOLD . '/clientes', function () {
            require_once PATH_CLLER . '/clientes.controller.php';
        });

        $router->add( PATH_FOLD . '/login', function () {
            require_once PATH_CLLER . '/login.controller.php';
        });

        $router->Run();
    }

}

$rutas = new Routs();
require_once PATH_CLLER . '/home.controller.php';

