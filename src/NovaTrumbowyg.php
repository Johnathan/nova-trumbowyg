<?php

namespace Johnathan\NovaTrumbowyg;

use Laravel\Nova\Fields\Expandable;
use Laravel\Nova\Fields\Field;

class NovaTrumbowyg extends Field
{
    use Expandable;

    /**
     * The field's component.
     *
     * @var string
     */
    public $component = 'nova-trumbowyg';

    /**
     * Set field default size as fullWidth
     *
     * @var bool
     */
    public $fullWidth = true;

    /**
     * Set the field width back to Nova's default
     *
     * @return $this
     */
    public function defaultWidth()
    {
        $this->fullWidth = false;

        return $this;
    }

    public function options(array $options = [])
    {
        return $this->withMeta(['options' => $options]);
    }
    
    /**
     * Prepare the element for JSON serialization.
     *
     * @return array
     */
    public function jsonSerialize()
    {
        return array_merge(parent::jsonSerialize(), [
            'shouldShow' => $this->shouldBeExpanded(),
            'fullWidth' => $this->fullWidth,
        ]);
    }
}
