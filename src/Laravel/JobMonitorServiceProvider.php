<?php

namespace Highjin\JobMonitor\Laravel;

use Illuminate\Support\ServiceProvider;

class JobMonitorServiceProvider extends ServiceProvider
{
    public function boot()
    {
        if ($this->app->environment() !== 'production') {
            if ($this->app->runningInConsole()) {
                $this->loadMigrationsFrom(__DIR__ . '/../database/migrations');
            }
        }
    }
}