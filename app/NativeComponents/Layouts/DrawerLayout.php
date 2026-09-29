<?php

declare(strict_types=1);

namespace App\NativeComponents\Layouts;

use Native\Mobile\Edge\NativeComponent;
use Native\Mobile\UI\Builders\Drawer;
use Native\Mobile\UI\Concerns\HasLayoutDrawer;

/**
 * The showcase nav bar plus a slide-out side drawer. The drawer's content is
 * a plain Blade view built from `<native:side-nav-*>` components.
 *
 * The drawer draws its ☰ button at the top-leading corner — the same spot as
 * the back chevron — so drawer screens drop the chevron, like any app whose
 * drawer is its main navigation. The drawer links back to the showcase home.
 */
class DrawerLayout extends ShowcaseLayout
{
    use HasLayoutDrawer;

    public function drawer(NativeComponent $screen): ?Drawer
    {
        return Drawer::make(view('native.edge-components.side-nav-drawer'));
    }

    protected function showsBack(NativeComponent $screen): bool
    {
        return false;
    }
}
