<?php

namespace Mahmudz\VueForm;

use Illuminate\Support\ServiceProvider;

class VueFormServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__.'/../routes/web.php');
        $this->loadViewsFrom(__DIR__ . '/../resources/assets', 'vue-form');

        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__.'/../resources/assets' => resource_path('js/vendor/vue-form'),
            ], 'vue-form-resources');
        }
    }

    public function register()
    {

    }
}
