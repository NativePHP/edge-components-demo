<?php

declare(strict_types=1);

namespace App\NativeComponents\EdgeComponents;

use App\NativeComponents\Layouts\DrawerLayout;

/**
 * Side navigation hosted by {@see DrawerLayout}.
 * The drawer content lives in `side-nav-drawer.blade.php`; this screen is the
 * page behind it.
 */
class SideNavScreen extends ShowcaseScreen
{
    public function navTitle(): string
    {
        return 'Home';
    }

    protected function key(): string
    {
        return 'side-nav';
    }
}
