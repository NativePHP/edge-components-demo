<?php

declare(strict_types=1);

namespace App\NativeComponents\EdgeComponents;

/**
 * Pull-to-refresh wrapper around a column of cards.
 */
class RefreshableScreen extends ShowcaseScreen
{
    public ?string $lastRefreshed = null;

    public function refresh(): void
    {
        $this->lastRefreshed = now()->format('g:i A');
    }

    protected function key(): string
    {
        return 'refreshable';
    }
}
