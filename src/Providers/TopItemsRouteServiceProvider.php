<?php

namespace TopItems\Providers;

use Plenty\Plugin\RouteServiceProvider;
use Plenty\Plugin\Routing\Router;

/**
 * Class TopItemsRouteServiceProvider
 * @package TopItems\Providers
 */
class TopItemsRouteServiceProvider extends RouteServiceProvider
{
    /**
     * @param Router $router
     */
    public function map(Router $router)
    {
        $router->get('hello-world', 'HelloWorld\Controllers\ContentController@getHelloWorldPage');
        $router->get('topitems', 'TopItems\Controllers\TopItemsController@showTopItems');
    }
}