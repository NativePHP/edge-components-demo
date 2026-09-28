<?php

declare(strict_types=1);

namespace App\NativeComponents\EdgeComponents;

/**
 * Web view rendering inline HTML.
 */
class WebViewScreen extends ShowcaseScreen
{
    protected function key(): string
    {
        return 'web-view';
    }
}
