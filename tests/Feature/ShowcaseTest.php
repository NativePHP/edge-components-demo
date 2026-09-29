<?php

use App\NativeComponents\ShowcaseIndex;
use App\Showcase;
use Illuminate\Support\Facades\Route;
use Native\Mobile\Testing\Native;

it('lists every showcase screen on the index', function () {
    $screen = Native::visit('/')->assertScreen(ShowcaseIndex::class);

    foreach (Showcase::screens() as $title) {
        $screen->assertSee($title);
    }
});

it('registers a route for every showcase screen, and no others', function () {
    $registered = collect(Route::getRoutes()->getRoutes())
        ->map(fn ($route) => '/'.$route->uri())
        ->filter(fn (string $uri) => str_starts_with($uri, '/edge-components/'))
        ->sort()
        ->values()
        ->all();

    $expected = collect(array_keys(Showcase::screens()))
        ->map(fn (string $key) => Showcase::route($key))
        ->sort()
        ->values()
        ->all();

    expect($registered)->toBe($expected);
});

it('renders every showcase screen on both platforms', function (string $key, string $platform) {
    expect(Native::visit(Showcase::route($key), platform: $platform)->tree())->not->toBeEmpty();
})->with(array_keys(Showcase::screens()))->with(['ios', 'android']);

it('ships a view for every showcase screen', function (string $key) {
    expect(view()->exists('native.edge-components.'.$key))->toBeTrue();
})->with(array_keys(Showcase::screens()));

it('opens sheets and modals on mount so they can be captured without interaction', function (string $key, string $property) {
    Native::visit(Showcase::route($key))->assertSet($property, true);
})->with([
    ['bottom-sheet', 'showSheet'],
    ['modal', 'showDetails'],
]);

it('uses the stock theme', function () {
    // The screenshots in the docs must show NativePHP's defaults — never
    // publish or add a native-ui theme config to this app.
    expect(file_exists(config_path('native-ui.php')))->toBeFalse();
});

it('drops the back chevron on drawer screens so it does not sit under the ☰ button', function (string $key) {
    $tree = Native::visit(Showcase::route($key), platform: 'ios')->tree();

    expect($tree['props']['back'])->toBeFalse()
        ->and(json_encode($tree))->toContain('native_drawer');
})->with(['side-nav', 'side-nav-header-image']);

it('keeps the back chevron on every other showcase screen', function () {
    expect(Native::visit(Showcase::route('list'), platform: 'ios')->tree()['props']['back'])->toBeTrue();
});

it('links every drawer back to the showcase home', function (string $key) {
    Native::visit(Showcase::route($key), platform: 'ios')->assertSee('All components');
})->with(['side-nav', 'side-nav-header-image']);
