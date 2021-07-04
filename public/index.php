<?php

declare(strict_types=1);

use VividLamp\Framework\App;

require __DIR__ . '/../vendor/autoload.php';

$app = new App(__DIR__ . '/../');

/**
 * 绑定异常处理类
 */
$app->singleton(\VividLamp\Framework\Exception\Handler::class, \App\ExceptionHandler::class);

$app->register(\App\Provider\RouterServiceProvider::class);

$http = $app->http;


/**
 * 载入全局中间件
 */
$http->loadMiddleware([
    //    \App\Middleware\Bar::class,
]);

$http->run(
    $request = \Laminas\Diactoros\ServerRequestFactory::fromGlobals(
        $_SERVER,
        $_GET,
        $_POST,
        $_COOKIE,
        $_FILES
    )
);
