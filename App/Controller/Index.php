<?php

namespace App\Controller;

use Psr\Http\Message\ServerRequestInterface;
use VividLamp\Framework\Config;
use Slim\Psr7\Factory\ResponseFactory;

class Index
{
    public function index(ServerRequestInterface $request, Config $config)
    {

        // $a = [];
        // echo $a[2];

        $response = (new ResponseFactory())->createResponse()->withHeader('Content-Type', 'text/plain');
        $response->getBody()->write(json_encode($config->get('middleware')));
        return $response;
    }
}
