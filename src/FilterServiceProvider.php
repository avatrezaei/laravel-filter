<?php

namespace Avatrezaei\Filter;

use Illuminate\Support\ServiceProvider;
use Avatrezaei\Filter\CreateFilter;

class FilterServiceProvider extends ServiceProvider
{
    public function register()
    {
        //
    }

    public function boot()
    {

        // Check app running in console
        if ($this->app->runningInConsole()) {

            // Register commands
            $this->commands([
                CreateFilter::class
            ]);
        }
    }
}