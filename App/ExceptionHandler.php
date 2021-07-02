<?php

namespace App;

use Psr\Http\Message\ServerRequestInterface;
use Slim\Psr7\Response;
use VividLamp\Framework\Exception\Handler;

class ExceptionHandler extends Handler
{

    public function report(\Throwable $e) {
        
    }

    public function render(ServerRequestInterface $request, \Throwable $e)
    {
        $response = new Response();
        $response = $response->withHeader('Content-Type', 'text/plain');
        $response->getBody()->write((string) $e);
        return $response;
    }

}