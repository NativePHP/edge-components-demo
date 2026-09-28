<?php

declare(strict_types=1);

namespace App\NativeComponents\EdgeComponents;

/**
 * Selects with and without a value.
 */
class SelectScreen extends ShowcaseScreen
{
    public string $country = 'Japan';

    public ?string $size = null;

    protected function key(): string
    {
        return 'select';
    }
}
