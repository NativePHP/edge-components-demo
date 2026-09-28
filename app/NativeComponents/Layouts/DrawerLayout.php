<?php

declare(strict_types=1);

namespace App\NativeComponents\Layouts;

use Native\Mobile\Edge\NativeComponent;
use Native\Mobile\UI\Builders\Drawer;
use Native\Mobile\UI\Concerns\HasLayoutDrawer;

/**
 * The showcase nav bar plus a slide-out side drawer. The drawer's content is
 * a plain Blade view built from `<native:side-nav-*>` components.
 */
class DrawerLayout extends ShowcaseLayout
{
    use HasLayoutDrawer;

    public function drawer(NativeComponent $screen): ?Drawer
    {
        return Drawer::make(view('native.edge-components.side-nav-drawer'));
    }
}
