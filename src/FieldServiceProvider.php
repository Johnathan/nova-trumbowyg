<?php

namespace Johnathan\NovaTrumbowyg;

use Laravel\Nova\Nova;
use Laravel\Nova\Events\ServingNova;
use Illuminate\Support\ServiceProvider;

class FieldServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([
            __DIR__.'/../fonts/vendor' => public_path('fonts/vendor'),
        ], 'public');

        Nova::serving(function (ServingNova $event) {
            Nova::script('nova-trumbowyg', __DIR__.'/../dist/js/field.js');
            Nova::style('nova-trumbowyg', __DIR__.'/../dist/css/field.css');
        });
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
