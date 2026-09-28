<?php

declare(strict_types=1);

namespace App\NativeComponents\EdgeComponents;

/**
 * Top bar with a logo lockup in place of the string title.
 */
class TopBarLogoScreen extends ShowcaseScreen
{
    protected function key(): string
    {
        return 'top-bar-logo';
    }
}
