<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Native\Mobile\UI\NativeUIServiceProvider;

class NativeServiceProvider extends ServiceProvider
{
    /**
     * The NativePHP plugins to enable.
     *
     * Only plugins listed here are compiled into native builds. Keep this to
     * nativephp/mobile-ui — the showcase exists to show the stock components.
     *
     * @return array<int, class-string<ServiceProvider>>
     */
    public function plugins(): array
    {
        return [
            NativeUIServiceProvider::class,
        ];
    }
}
