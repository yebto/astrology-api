<?php

namespace Yebto\AstrologyAPI;

use Illuminate\Support\ServiceProvider;

class AstrologyAPIServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        $this->mergeConfigFrom(__DIR__ . '/../config/yebto-astrology.php', 'yebto-astrology');

        $this->app->singleton('yebto-astrology', function () {
            return new AstrologyAPI(config('yebto-astrology'));
        });
    }

    public function boot(): void
    {
        $this->publishes([
            __DIR__ . '/../config/yebto-astrology.php' => config_path('yebto-astrology.php'),
        ], 'yebto-astrology-config');
    }
}
