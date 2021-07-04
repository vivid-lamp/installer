<?php


namespace App\Provider;


use Psr\Http\Message\ServerRequestInterface;
use VividLamp\Framework\Http;
use VividLamp\Framework\Router;
use VividLamp\Framework\ServiceProvider;


class RouterServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->singleton(Router::class, function () {
            $router = new Router($this->app, $this->app->getRootPath() . 'App/routes.php');
            return $router;
        });
    }

    public function boot(Http $http, Router $router)
    {
        $http->loadRouteDispatcher(function (ServerRequestInterface $request) use ($router) {
            return $router->dispatch($request);
        });
    }
}
