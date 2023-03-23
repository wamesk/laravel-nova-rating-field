<?php

namespace Wamesk\RatingField;

use Laravel\Nova\Fields\Field;

class RatingField extends Field
{
    /**
     * The field's component.
     *
     * @var string
     */
    public $component = 'rating-field';

    public function maxRating($value) {
        return $this->withMeta([
            'maxRating' => $value
        ]);
    }

    public function animate($value) {
        return $this->withMeta([
            'animate' => $value
        ]);
    }

    public function sizeStars($value) {
        return $this->withMeta([
            'sizeStars' => $value
        ]);
    }

    public function step($value) {
        return $this->withMeta([
            'step' => $value
        ]);
    }

    public function showNumber($value) {
        return $this->withMeta([
            'showNumber' => $value
        ]);
    }

}
