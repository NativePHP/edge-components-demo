<?php

declare(strict_types=1);

namespace App\NativeComponents\EdgeComponents;

/**
 * Top bar using the large display mode.
 */
class TopBarLargeTitleScreen extends ShowcaseScreen
{
    protected function key(): string
    {
        return 'top-bar-large-title';
    }
}
