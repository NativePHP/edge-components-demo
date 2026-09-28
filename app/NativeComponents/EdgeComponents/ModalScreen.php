<?php

declare(strict_types=1);

namespace App\NativeComponents\EdgeComponents;

/**
 * A full-screen modal. It starts open so the screen can be captured without
 * any interaction — tap "View details" to bring it back.
 */
class ModalScreen extends ShowcaseScreen
{
    public bool $showDetails = true;

    protected function key(): string
    {
        return 'modal';
    }
}
