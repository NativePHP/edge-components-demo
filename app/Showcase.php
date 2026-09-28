<?php

declare(strict_types=1);

namespace App;

/**
 * Every screen in the showcase, keyed by the same screen key the
 * nativephp.com `docs:capture-screenshots` manifest uses. Each key is served
 * at `/edge-components/{key}` and rendered from
 * `resources/views/native/edge-components/{key}.blade.php`.
 *
 * Adding a screen here means adding its route in routes/mobile.php and its
 * entry in the website's DocsScreenshotManifest — the test suite checks that
 * this list and the registered routes stay in sync.
 */
final class Showcase
{
    /**
     * @var array<string, array<string, string>>
     */
    private const GROUPS = [
        'Navigation' => [
            'top-bar' => 'Top Bar',
            'top-bar-large-title' => 'Top Bar — Large Title',
            'top-bar-search' => 'Top Bar — Search',
            'top-bar-destructive-action' => 'Top Bar — Destructive Action',
            'top-bar-logo' => 'Top Bar — Logo',
            'bottom-nav' => 'Bottom Navigation',
            'bottom-nav-search-item' => 'Bottom Navigation — Search Item',
            'side-nav' => 'Side Navigation',
            'side-nav-header-image' => 'Side Navigation — Header Image',
            'tab-row' => 'Tab Row',
        ],
        'Overlays' => [
            'bottom-sheet' => 'Bottom Sheet',
            'modal' => 'Modal',
            'menus' => 'Menus',
        ],
        'Lists' => [
            'list' => 'List',
            'refreshable' => 'Refreshable',
            'virtual-list' => 'Virtual List',
        ],
        'Forms' => [
            'slider' => 'Slider',
            'toggle' => 'Toggle',
            'checkbox' => 'Checkbox',
            'select' => 'Select',
            'radio-group' => 'Radio Group',
        ],
        'Content' => [
            'text' => 'Text',
            'web-view' => 'Web View',
            'gesture-area' => 'Gesture Area',
        ],
    ];

    /**
     * @return array<string, array<string, string>> group => [key => title]
     */
    public static function groups(): array
    {
        return self::GROUPS;
    }

    /**
     * @return array<string, string> key => title
     */
    public static function screens(): array
    {
        return array_merge(...array_values(self::GROUPS));
    }

    public static function title(string $key): string
    {
        return self::screens()[$key];
    }

    public static function route(string $key): string
    {
        return '/edge-components/'.$key;
    }
}
