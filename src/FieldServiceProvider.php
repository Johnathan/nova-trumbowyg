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

        $pluginsPath = __DIR__.'/../js/vendor/plugins';
        $pluginDirectories = preg_grep('/^([^.])/', scandir($pluginsPath, SCANDIR_SORT_NONE));

        foreach($pluginDirectories as $plugin)
        {
            $this->publishes([
                $pluginsPath . '/' . $plugin => public_path('js/vendor/nova-trumbowyg/plugins'),
            ], 'nova-trumbowyg:' . $plugin);
        }

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
