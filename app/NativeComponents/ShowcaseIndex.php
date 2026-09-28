<?php

declare(strict_types=1);

namespace App\NativeComponents;

use App\Showcase;
use Illuminate\View\View;
use Native\Mobile\Edge\NativeComponent;

/**
 * The app's home screen: every showcase screen, grouped, one tap away.
 */
class ShowcaseIndex extends NativeComponent
{
    public function navTitle(): string
    {
        return 'EDGE Components';
    }

    public function render(): View
    {
        return view('native.showcase-index', [
            'groups' => Showcase::groups(),
        ]);
    }
}
