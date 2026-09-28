<?php

declare(strict_types=1);

namespace App\NativeComponents\EdgeComponents;

use App\Showcase;
use Illuminate\Support\Str;
use Illuminate\View\View;
use Native\Mobile\Edge\NativeComponent;

/**
 * Base class for a single showcase screen. The screen's key picks its title
 * from {@see Showcase} and its view from
 * `resources/views/native/edge-components/{key}.blade.php`, so each screen
 * class only has to hold the state its component needs.
 */
abstract class ShowcaseScreen extends NativeComponent
{
    /** The last action tapped on the screen, for demo handlers with nothing real to do. */
    public ?string $lastTapped = null;

    /** The screen key — matches the route, the view and the docs manifest. */
    abstract protected function key(): string;

    public function navTitle(): string
    {
        // "Top Bar — Large Title" → "Top Bar": variants share their component's title.
        return Str::before(Showcase::title($this->key()), ' — ');
    }

    public function tapped(string $action): void
    {
        $this->lastTapped = $action;
    }

    public function render(): View
    {
        return view('native.edge-components.'.$this->key());
    }
}
