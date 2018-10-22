<?php

namespace Johnathan\NovaTrumbowyg;

use Laravel\Nova\Fields\Field;
use Laravel\Nova\Nova;

class NovaTrumbowyg extends Field
{
    /**
     * The field's component.
     *
     * @var string
     */
    public $component = 'nova-trumbowyg';

    public function options(array $options = [])
    {
        return $this->withMeta(['options' => $options]);
    }

    public function withPlugins($plugins = [])
    {
        $pluginPaths = [];

        foreach($plugins as $plugin)
        {
            $pluginPaths[] = asset('js/vendor/nova-trumbowyg/plugins/trumbowyg.' . $plugin . '.js');
        }

        return $this->withMeta(['plugins' => $pluginPaths]);
    }
}
