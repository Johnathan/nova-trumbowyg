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
        foreach($plugins as $plugin)
        {
            // Do something to load the actual js file here
        }

        return $this;
    }
}
