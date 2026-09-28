<?php

declare(strict_types=1);

namespace App\NativeComponents\EdgeComponents;

use Illuminate\View\View;
use Native\Mobile\Edge\Concerns\HasVirtualListWindow;

/**
 * A 10,000-row virtual list. Only the rows inside the visible window are
 * rendered; `virtual-list-row.blade.php` is the row template.
 */
class VirtualListScreen extends ShowcaseScreen
{
    use HasVirtualListWindow;

    public const TOTAL = 10_000;

    protected function key(): string
    {
        return 'virtual-list';
    }

    public function render(): View
    {
        return parent::render()->with('total', self::TOTAL);
    }
}
