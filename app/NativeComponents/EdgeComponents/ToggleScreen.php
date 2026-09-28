<?php

declare(strict_types=1);

namespace App\NativeComponents\EdgeComponents;

/**
 * Settings-style toggles, including a disabled one.
 */
class ToggleScreen extends ShowcaseScreen
{
    public bool $notifications = true;

    public bool $darkMode = false;

    public bool $location = true;

    protected function key(): string
    {
        return 'toggle';
    }
}
