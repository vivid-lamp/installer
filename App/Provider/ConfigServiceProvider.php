<?php

declare(strict_types=1);

namespace App\Provider;

use SleepyLamp\Framework\Config;
use SleepyLamp\Framework\ServiceProvider;

class ConfigServiceProvider extends ServiceProvider
{
    public function register()
    {
        $config = new Config($this->app->getRootPath() . 'config/');
        $this->app->instance(Config::class, $config);
    }
}
