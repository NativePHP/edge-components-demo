<?php

declare(strict_types=1);

namespace App\NativeComponents\EdgeComponents;

use Illuminate\View\View;
use Native\Mobile\Edge\SharedValue;

/**
 * A card that follows a vertical drag. The drag distance lives in a
 * SharedValue on the native side, so per-frame updates never round-trip
 * through PHP.
 */
class GestureAreaScreen extends ShowcaseScreen
{
    protected function key(): string
    {
        return 'gesture-area';
    }

    public function render(): View
    {
        return parent::render()->with('drag', SharedValue::make());
    }
}
