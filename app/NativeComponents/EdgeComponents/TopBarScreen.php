<?php

declare(strict_types=1);

namespace App\NativeComponents\EdgeComponents;

/**
 * Inline top bar with a title, subtitle and two actions.
 */
class TopBarScreen extends ShowcaseScreen
{
    protected function key(): string
    {
        return 'top-bar';
    }
}
