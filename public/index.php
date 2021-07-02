<?php

declare(strict_types=1);

use App\Provider\ConfigServiceProvider;
use VividLamp\Framework\App;
use Slim\Psr7\Factory\ServerRequestFactory;


require  __DIR__ . '/../../vendor/autoload.php';

$app = new App( __DIR__ . '/../');

/**
 * 绑定异常处理类
 */
$app->singleton(\VividLamp\Framework\Exception\Handler::class, \App\ExceptionHandler::class);

$app->register(ConfigServiceProvider::class);

$http = $app->http;


/**
 * 载入全局中间件
 */
$http->loadMiddleware([

]);

/**
 * 载入路由配置文件
 */
$http->loadRouteConfig(
    $app->getRootPath() . 'App/routes.php'
);

$http->run(
    ServerRequestFactory::createFromGlobals()
);