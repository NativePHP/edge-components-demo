<?php

declare(strict_types=1);

namespace App\NativeComponents\EdgeComponents;

/**
 * A group of checkboxes with a summary line.
 */
class CheckboxScreen extends ShowcaseScreen
{
    public bool $emailNotifications = true;

    public bool $smsNotifications = false;

    public bool $pushNotifications = true;

    protected function key(): string
    {
        return 'checkbox';
    }
}
