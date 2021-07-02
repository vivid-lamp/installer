<?php

declare(strict_types=1);

namespace App\Provider;

use VividLamp\Framework\Config;
use VividLamp\Framework\ServiceProvider;

class ConfigServiceProvider extends ServiceProvider
{
    public function register()
    {
        $config = new Config($this->app->getRootPath() . 'config/');
        $this->app->instance(Config::class, $config);
    }
}
