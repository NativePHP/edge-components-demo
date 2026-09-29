<?php

declare(strict_types=1);

namespace App\NativeComponents\Layouts;

use App\NativeComponents\ShowcaseIndex;
use Native\Mobile\Edge\Layouts\Builders\NavBar;
use Native\Mobile\Edge\Layouts\NativeLayout;
use Native\Mobile\Edge\NativeComponent;

/**
 * A plain native nav bar — the screen's title plus a back chevron — with no
 * colors, fonts or other styling, so every screenshot shows the stock
 * iOS / Android chrome. Screens that declare their own inline
 * `<native:top-bar>` or `<native:bottom-nav>` override the matching slot.
 */
class ShowcaseLayout extends NativeLayout
{
    public function usesNativeChrome(): bool
    {
        return true;
    }

    public function navBar(NativeComponent $screen): ?NavBar
    {
        return NavBar::make()
            ->title($screen->navTitle())
            ->back($this->showsBack($screen));
    }

    protected function showsBack(NativeComponent $screen): bool
    {
        return ! $screen instanceof ShowcaseIndex;
    }
}
