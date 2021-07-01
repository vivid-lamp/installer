<?php

use App\Middleware\Bar;
use App\Controller\Index;
use SleepyLamp\Framework\Facades\Route;

Route::addRoute('GET', '/index', [Index::class, 'index'], Bar::class);