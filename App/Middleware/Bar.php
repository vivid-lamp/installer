<?php
declare(strict_types=1);
namespace App\Middleware;

use Psr\Http\Message\ServerRequestInterface;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Server\MiddlewareInterface;
use Psr\Http\Server\RequestHandlerInterface;

class Bar implements MiddlewareInterface {

    public function process(ServerRequestInterface $request, RequestHandlerInterface $handler): ResponseInterface
    {
        echo 'before Bar ', PHP_EOL;
        $response = $handler->handle($request);
        echo 'after Bar ', PHP_EOL;
        return $response;
    }
}