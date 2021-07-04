<?php


namespace App\Provider;

use VividLamp\Framework\ServiceProvider;
use VividLamp\Framework\Contract\RouterInterface;

class AppServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->singleton(RouterInterface::class, function () {
            $router = new \League\Route\Router;
            include $this->app->getRootPath() . 'App/routes.php';
            return $router;
        });

    }

}
