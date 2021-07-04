<?php


use App\Facade\Router;

Router::addRoute('GET', '/controller/{id}', [\App\Controller\Index::class, 'index']);