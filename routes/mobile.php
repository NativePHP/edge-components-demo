<?php

use App\NativeComponents\EdgeComponents\BottomNavScreen;
use App\NativeComponents\EdgeComponents\BottomNavSearchItemScreen;
use App\NativeComponents\EdgeComponents\BottomSheetScreen;
use App\NativeComponents\EdgeComponents\CheckboxScreen;
use App\NativeComponents\EdgeComponents\GestureAreaScreen;
use App\NativeComponents\EdgeComponents\ListScreen;
use App\NativeComponents\EdgeComponents\MenusScreen;
use App\NativeComponents\EdgeComponents\ModalScreen;
use App\NativeComponents\EdgeComponents\RadioGroupScreen;
use App\NativeComponents\EdgeComponents\RefreshableScreen;
use App\NativeComponents\EdgeComponents\SelectScreen;
use App\NativeComponents\EdgeComponents\SideNavHeaderImageScreen;
use App\NativeComponents\EdgeComponents\SideNavScreen;
use App\NativeComponents\EdgeComponents\SliderScreen;
use App\NativeComponents\EdgeComponents\TabRowScreen;
use App\NativeComponents\EdgeComponents\TextScreen;
use App\NativeComponents\EdgeComponents\ToggleScreen;
use App\NativeComponents\EdgeComponents\TopBarDestructiveActionScreen;
use App\NativeComponents\EdgeComponents\TopBarLargeTitleScreen;
use App\NativeComponents\EdgeComponents\TopBarLogoScreen;
use App\NativeComponents\EdgeComponents\TopBarScreen;
use App\NativeComponents\EdgeComponents\TopBarSearchScreen;
use App\NativeComponents\EdgeComponents\VirtualListScreen;
use App\NativeComponents\EdgeComponents\WebViewScreen;
use App\NativeComponents\Layouts\DrawerLayout;
use App\NativeComponents\Layouts\ShowcaseLayout;
use App\NativeComponents\ShowcaseIndex;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| EDGE Component showcase
|--------------------------------------------------------------------------
|
| One screen per component (and per notable variant), each at
| /edge-components/{key}. The keys match App\Showcase and the nativephp.com
| docs screenshot manifest, so `php artisan native:run --start-url=...`
| can open any screen directly.
|
*/

Route::nativeGroup(ShowcaseLayout::class, function () {
    Route::native('/', ShowcaseIndex::class)->name('showcase');

    // Navigation — these screens declare their own inline bars, which
    // replace the layout's bar in the same slot.
    Route::native('/edge-components/top-bar', TopBarScreen::class)->name('edge-components.top-bar');
    Route::native('/edge-components/top-bar-large-title', TopBarLargeTitleScreen::class)->name('edge-components.top-bar-large-title');
    Route::native('/edge-components/top-bar-search', TopBarSearchScreen::class)->name('edge-components.top-bar-search');
    Route::native('/edge-components/top-bar-destructive-action', TopBarDestructiveActionScreen::class)->name('edge-components.top-bar-destructive-action');
    Route::native('/edge-components/top-bar-logo', TopBarLogoScreen::class)->name('edge-components.top-bar-logo');
    Route::native('/edge-components/bottom-nav', BottomNavScreen::class)->name('edge-components.bottom-nav');
    Route::native('/edge-components/bottom-nav-search-item', BottomNavSearchItemScreen::class)->name('edge-components.bottom-nav-search-item');
    Route::native('/edge-components/tab-row', TabRowScreen::class)->name('edge-components.tab-row');

    // Overlays — sheets and modals start open.
    Route::native('/edge-components/bottom-sheet', BottomSheetScreen::class)->name('edge-components.bottom-sheet');
    Route::native('/edge-components/modal', ModalScreen::class)->name('edge-components.modal');
    Route::native('/edge-components/menus', MenusScreen::class)->name('edge-components.menus');

    // Lists
    Route::native('/edge-components/list', ListScreen::class)->name('edge-components.list');
    Route::native('/edge-components/refreshable', RefreshableScreen::class)->name('edge-components.refreshable');
    Route::native('/edge-components/virtual-list', VirtualListScreen::class)->name('edge-components.virtual-list');

    // Forms
    Route::native('/edge-components/slider', SliderScreen::class)->name('edge-components.slider');
    Route::native('/edge-components/toggle', ToggleScreen::class)->name('edge-components.toggle');
    Route::native('/edge-components/checkbox', CheckboxScreen::class)->name('edge-components.checkbox');
    Route::native('/edge-components/select', SelectScreen::class)->name('edge-components.select');
    Route::native('/edge-components/radio-group', RadioGroupScreen::class)->name('edge-components.radio-group');

    // Content
    Route::native('/edge-components/text', TextScreen::class)->name('edge-components.text');
    Route::native('/edge-components/web-view', WebViewScreen::class)->name('edge-components.web-view');
    Route::native('/edge-components/gesture-area', GestureAreaScreen::class)->name('edge-components.gesture-area');
});

// Drawer screens use DrawerLayout: its drawer, and no back chevron under the
// drawer's ☰ button. The header-image screen swaps in its own drawer via
// SideNavHeaderImageScreen::drawerOverride().
Route::nativeGroup(DrawerLayout::class, function () {
    Route::native('/edge-components/side-nav', SideNavScreen::class)->name('edge-components.side-nav');
    Route::native('/edge-components/side-nav-header-image', SideNavHeaderImageScreen::class)->name('edge-components.side-nav-header-image');
});
