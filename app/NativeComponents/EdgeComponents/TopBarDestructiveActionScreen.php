<?php

declare(strict_types=1);

namespace App\NativeComponents\EdgeComponents;

/**
 * Top bar with a destructive (red) action.
 */
class TopBarDestructiveActionScreen extends ShowcaseScreen
{
    protected function key(): string
    {
        return 'top-bar-destructive-action';
    }
}
