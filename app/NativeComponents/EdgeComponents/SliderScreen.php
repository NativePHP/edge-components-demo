<?php

declare(strict_types=1);

namespace App\NativeComponents\EdgeComponents;

/**
 * Two sliders with live value labels.
 */
class SliderScreen extends ShowcaseScreen
{
    public float $brightness = 60;

    public float $volume = 35;

    protected function key(): string
    {
        return 'slider';
    }
}
