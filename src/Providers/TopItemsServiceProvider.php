<?php

namespace TopItems\Providers;

use Plenty\Plugin\ServiceProvider;

/**
 * Class TopItemsServiceProvider
 * @package TopItems\Providers
 */
class TopItemsServiceProvider extends ServiceProvider
{
    /**
    * Register the route service provider
    */
    public function register()
    {
        $this->getApplication()->register(TopItemsRouteServiceProvider::class);
    }
}