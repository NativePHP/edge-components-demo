<?php

declare(strict_types=1);

namespace App\NativeComponents\EdgeComponents;

/**
 * Grouped list with monograms, supporting text and trailing text.
 */
class ListScreen extends ShowcaseScreen
{
    protected function key(): string
    {
        return 'list';
    }
}
