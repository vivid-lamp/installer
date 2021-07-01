<?php

declare(strict_types=1);

use App\Provider\ConfigServiceProvider;
use SleepyLamp\Framework\App;

require  __DIR__ . '/../' . '../vendor/autoload.php';

$app = new App( __DIR__ . '/../');

$app->register(ConfigServiceProvider::class);

$http = $app->http;


/**
 * 载入全局中间件
 */
$http->loadMiddleware([
    function($request, $next) {
        echo 'global middleware1 start', PHP_EOL;
        $response = $next($request);
        echo 'global middleware1 end', PHP_EOL;
        return $response;
    }
]);

$http->run();