<?php
declare(strict_types=1);
namespace App\Middleware;

use Psr\Http\Message\ServerRequestInterface;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Server\MiddlewareInterface;
use Psr\Http\Server\RequestHandlerInterface;

class Foo implements MiddlewareInterface {

    public function process(ServerRequestInterface $request, RequestHandlerInterface $handler): ResponseInterface
    {
        echo 'before foo ', PHP_EOL;
        $response = $handler->handle($request);
        echo 'after foo ', PHP_EOL;
        return $response;
    }
}