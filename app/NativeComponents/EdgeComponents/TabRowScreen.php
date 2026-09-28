<?php

declare(strict_types=1);

namespace App\NativeComponents\EdgeComponents;

/**
 * Tab row switching between three sections.
 */
class TabRowScreen extends ShowcaseScreen
{
    public int $activeTab = 0;

    protected function key(): string
    {
        return 'tab-row';
    }
}
