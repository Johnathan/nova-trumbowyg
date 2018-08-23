<?php

namespace Johnathan\NovaTrumbowyg;

use Laravel\Nova\Fields\Field;

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
}
