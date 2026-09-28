<?php

declare(strict_types=1);

namespace App\NativeComponents\EdgeComponents;

/**
 * Tap-to-open menus on a button and on a list row. Each item's handler
 * records the tapped action via {@see ShowcaseScreen::tapped()}.
 */
class MenusScreen extends ShowcaseScreen
{
    protected function key(): string
    {
        return 'menus';
    }
}
