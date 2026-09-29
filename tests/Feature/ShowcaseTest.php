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
    Native::visit(Showcase::route($key), platform: 'ios')
        ->tap('All components')
        ->assertNavigatedTo('/');
})->with(['side-nav', 'side-nav-header-image']);

it('handles taps on the drawer rows', function () {
    Native::visit(Showcase::route('side-nav'), platform: 'ios')
        ->tap('Starred')
        ->assertSet('lastTapped', 'starred');
});

it('builds the drawers from core components, which render inside a Drawer', function (string $key) {
    // mobile-ui renders <native:side-nav-*> elements as empty views inside a
    // layout Drawer, so the drawers must not rely on them.
    $json = json_encode(Native::visit(Showcase::route($key), platform: 'ios')->tree());

    expect($json)->not->toContain('"type":"side_nav')
        ->and($json)->toContain('Inbox');
})->with(['side-nav', 'side-nav-header-image']);

it('gives only the header-image drawer an image banner', function () {
    $types = fn (string $key) => json_encode(Native::visit(Showcase::route($key), platform: 'ios')->tree());

    expect($types('side-nav-header-image'))->toContain('drawer-header.png')
        ->and($types('side-nav'))->not->toContain('drawer-header.png');
});

it('closes and reopens the modal', function () {
    Native::visit(Showcase::route('modal'), platform: 'ios')
        ->tap('Close')
        ->assertSet('showDetails', false)
        ->tap('View details')
        ->assertSet('showDetails', true);
});

it('closes and reopens the bottom sheet', function () {
    Native::visit(Showcase::route('bottom-sheet'), platform: 'ios')
        ->tap('Share')
        ->assertSet('showSheet', false)
        ->tap('Show actions')
        ->assertSet('showSheet', true);
});

it('keeps sheet and modal state in sync when the platform dismisses them', function (string $key, string $method, string $property) {
    $tree = json_encode(Native::visit(Showcase::route($key), platform: 'ios')->tree());

    // @dismiss must call a real method — inline `$prop = false` isn't evaluated.
    expect($tree)->toContain('"on_dismiss"');
    Native::visit(Showcase::route($key))->call($method)->assertSet($property, false);
})->with([
    ['modal', 'closeDetails', 'showDetails'],
    ['bottom-sheet', 'closeSheet', 'showSheet'],
]);

it('gives the bottom-nav search tab something to search', function () {
    $screen = Native::visit(Showcase::route('bottom-nav-search-item'), platform: 'ios');

    expect($screen->search('invoice')->searchResults())
        ->toHaveCount(1)
        ->{0}->title->toBe('Sam Okafor');

    expect($screen->search('')->searchResults())->toHaveCount(6);
});
