<?php

namespace App\Controller;

use Laminas\Diactoros\Response;
use Psr\Http\Message\ServerRequestInterface;



class Index
{

    public function index(ServerRequestInterface $request)
    {
        $response = new Response();
        $response->getBody()->write('<h3>Content from Controller</h3>');
        $response->getBody()->write("<h3>{$request->getUri()->getPath()}</h3>");
        $response->getBody()->write("<h3>" . json_encode($request->getAttributes()) . "</h3>");
        return $response;
    }
}
