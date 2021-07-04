<?php


namespace App\Facade;

use VividLamp\Framework\Facade;


/**
 * Class Router
 * @package App\Facade
 * @method static addRoute($method, $route, $handler, $middleware = '')
 */
class Router extends Facade
{
    public static function getFacadeClass(): string
    {
        return \VividLamp\Framework\Router::class;
    }

}