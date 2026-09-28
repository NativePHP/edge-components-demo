<?php

declare(strict_types=1);

namespace App\NativeComponents\EdgeComponents;

use Native\Mobile\UI\Builders\Drawer;
use Native\Mobile\UI\Concerns\InteractsWithDrawer;

/**
 * A per-screen drawer override: swaps the layout's drawer for one whose
 * header uses a background image.
 */
class SideNavHeaderImageScreen extends ShowcaseScreen
{
    use InteractsWithDrawer;

    public function navTitle(): string
    {
        return 'Home';
    }

    public function drawerOverride(): ?Drawer
    {
        return Drawer::make(view('native.edge-components.side-nav-header-image-drawer'));
    }

    protected function key(): string
    {
        return 'side-nav-header-image';
    }
}
