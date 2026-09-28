<?php

declare(strict_types=1);

namespace App\NativeComponents\EdgeComponents;

/**
 * Inline bottom navigation with a badge and a "news" dot.
 */
class BottomNavScreen extends ShowcaseScreen
{
    protected function key(): string
    {
        return 'bottom-nav';
    }
}
