<?php

declare(strict_types=1);

namespace App\NativeComponents\EdgeComponents;

/**
 * Bottom navigation with a dedicated search tab.
 */
class BottomNavSearchItemScreen extends ShowcaseScreen
{
    protected function key(): string
    {
        return 'bottom-nav-search-item';
    }
}
