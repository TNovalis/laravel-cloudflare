<?php

namespace Novalis\Cloudflare;

use Illuminate\Support\ServiceProvider;

class CloudflareServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->publishes([
            __DIR__ . '/../config/cloudflare.php' => config_path('cloudflare.php'),
        ], 'config');
    }

    public function register()
    {
        $this->mergeConfigFrom(
            __DIR__ . '/../config/cloudflare.php',
            'cloudflare'
        );

        $cloudflareConfig = config('cloudflare');

        $this->app->bind(Cloudflare::class, function () use ($cloudflareConfig) {
            return new Cloudflare($cloudflareConfig['email'], $cloudflareConfig['key'], $cloudflareConfig['zone']);
        });

        $this->app->alias(Cloudflare::class, 'laravel-cloudflare');
    }
}