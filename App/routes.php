<?php

use App\Middleware\Bar;
use App\Controller\Index;
use VividLamp\Framework\Facades\Route;

Route::addRoute('GET', '/index', [Index::class, 'index']);