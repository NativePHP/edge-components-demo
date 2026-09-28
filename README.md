# EDGE Components Demo

A small NativePHP Mobile app with one screen for each [EDGE component](https://nativephp.com/docs/mobile/4/edge-components/introduction). It runs on the **stock theme** (default colors, the system font, and no plugins apart from `nativephp/mobile-ui`), so what you see is what a fresh NativePHP app looks like.

The screenshots in the nativephp.com docs are captured from this app, and each preview's "View source" link points to that screen's Blade file.

## Screens

Every screen is at `/edge-components/{key}` and is rendered from `resources/views/native/edge-components/{key}.blade.php`. The full list lives in [`app/Showcase.php`](app/Showcase.php). The home screen (`/`) links to all of them.

| Group | Keys |
|---|---|
| Navigation | `top-bar`, `top-bar-large-title`, `top-bar-search`, `top-bar-destructive-action`, `top-bar-logo`, `bottom-nav`, `bottom-nav-search-item`, `side-nav`, `side-nav-header-image`, `tab-row` |
| Overlays | `bottom-sheet`, `modal`, `menus` |
| Lists | `list`, `refreshable`, `virtual-list` |
| Forms | `slider`, `toggle`, `checkbox`, `select`, `radio-group` |
| Content | `text`, `web-view`, `gesture-area` |

Sheets and modals start open, so a screen can be captured as soon as it launches. The side drawer and menus still have to be opened by hand, because EDGE can't open them from PHP yet.

## Getting started

```bash
composer install
cp .env.example .env
php artisan key:generate
php artisan native:install

# Open any screen directly
php artisan native:run ios --start-url=/edge-components/top-bar
php artisan native:run android --start-url=/edge-components/bottom-sheet
```

## Regenerating the docs screenshots

From a checkout of [nativephp.com](https://github.com/NativePHP/nativephp.com) next to this repo:

```bash
php artisan docs:capture-screenshots --demo-path=../edge-components-demo --platform=ios --dry-run
php artisan docs:capture-screenshots --demo-path=../edge-components-demo --platform=ios
php artisan docs:capture-screenshots --demo-path=../edge-components-demo --publish
```

## Adding a screen

1. Add the key and title to `App\Showcase`.
2. Add a screen class in `app/NativeComponents/EdgeComponents` that extends `ShowcaseScreen`.
3. Add the Blade view at `resources/views/native/edge-components/{key}.blade.php`.
4. Register the route in `routes/mobile.php`.
5. Add the key to `DocsScreenshotManifest` in nativephp.com.

`php artisan test` checks that the list, the routes and the views match, and that every screen renders on iOS and Android.

## Keep it stock

Don't publish `config/native-ui.php`, add fonts, or restyle the chrome. If a screen needs color, use the `theme-*` tokens so it follows the defaults. There's a test that fails if a theme config is added.
