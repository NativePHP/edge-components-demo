<?php

declare(strict_types=1);

namespace App\NativeComponents\EdgeComponents;

/**
 * Type scale, weights and colors using the stock system font.
 */
class TextScreen extends ShowcaseScreen
{
    protected function key(): string
    {
        return 'text';
    }
}
