<?php

namespace App;

use Laminas\Diactoros\Response;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;
use VividLamp\Framework\Exception\Handler;

class ExceptionHandler extends Handler
{

    public function report(\Throwable $e) {
        
    }

    public function render(ServerRequestInterface $request, \Throwable $e): ResponseInterface
    {
        $response = new Response();
        $response = $response->withHeader('Content-Type', 'text/plain');
        $response->getBody()->write((string) $e);
        return $response;
    }

}