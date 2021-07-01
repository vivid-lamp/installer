<?php

namespace App\Controller;

use Psr\Http\Message\ServerRequestInterface;
use SleepyLamp\Framework\Config;
use Slim\Psr7\Factory\ResponseFactory;

class Index
{
    public function index(ServerRequestInterface $request, Config $config)
    {
        $response = (new ResponseFactory())->createResponse()->withHeader('Content-Type', 'text/plain');
        $response->getBody()->write(json_encode($config->get('middleware')));
        return $response;
    }
}
