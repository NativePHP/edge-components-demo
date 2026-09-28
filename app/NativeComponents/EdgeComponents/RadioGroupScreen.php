<?php

declare(strict_types=1);

namespace App\NativeComponents\EdgeComponents;

/**
 * Radio group with a disabled option.
 */
class RadioGroupScreen extends ShowcaseScreen
{
    public string $plan = 'pro';

    protected function key(): string
    {
        return 'radio-group';
    }
}
