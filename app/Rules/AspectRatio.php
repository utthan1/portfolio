<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

class AspectRatio implements Rule
{
    protected $expectedWidth;
    protected $expectedHeight;
    protected $tolerance;

    public function __construct($expectedWidth, $expectedHeight, $tolerance = 0.01)
    {
        $this->expectedWidth = $expectedWidth;
        $this->expectedHeight = $expectedHeight;
        $this->tolerance = $tolerance;
    }

    public function passes($attribute, $value)
    {
        if ($value && $value->isValid()) {
            $image = getimagesize($value->getRealPath());
            $width = $image[0];
            $height = $image[1];
            $expectedRatio = $this->expectedWidth / $this->expectedHeight;
            $actualRatio = $width / $height;

            return abs($actualRatio - $expectedRatio) <= $this->tolerance;
        }

        return false;
    }

    public function message()
    {
        return "The :attribute must have an aspect ratio of {$this->expectedWidth}:{$this->expectedHeight}.";
    }
}
