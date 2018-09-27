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

        // nova-trumbowyg:pasteembed
        // nova-trumbowyg:resizimg
        // nova-trumbowyg:fontsize
        // nova-trumbowyg:noembed
        // nova-trumbowyg:mathml
        // nova-trumbowyg:highlight
        // nova-trumbowyg:pasteimage
        // nova-trumbowyg:allowtagsfrompaste
        // nova-trumbowyg:base64
        // nova-trumbowyg:template
        // nova-trumbowyg:emoji
        // nova-trumbowyg:insertaudio
        // nova-trumbowyg:lineheight
        // nova-trumbowyg:table
        // nova-trumbowyg:colors
        // nova-trumbowyg:preformatted
        // nova-trumbowyg:history
        // nova-trumbowyg:mention
        // nova-trumbowyg:fontfamily
        // nova-trumbowyg:ruby
        // nova-trumbowyg:upload
        // nova-trumbowyg:cleanpaste

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
