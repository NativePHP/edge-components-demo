<?php

declare(strict_types=1);

namespace App\NativeComponents\EdgeComponents;

/**
 * Top bar with an attached native search field.
 */
class TopBarSearchScreen extends ShowcaseScreen
{
    public string $query = '';

    public function search(string $query): void
    {
        $this->query = trim($query);
    }

    protected function key(): string
    {
        return 'top-bar-search';
    }
}
