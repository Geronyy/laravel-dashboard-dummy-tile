<?php

namespace Geronyy\DummyTile;

use Illuminate\Support\ServiceProvider;
use Livewire\Livewire;

class DummyTileServiceProvider extends ServiceProvider
{
    public function boot()
    {
        if ($this->app->runningInConsole()) {
            $this->commands([
                FetchDataFromApiCommand::class,
            ]);
        }

        $this->publishes([
            __DIR__ . '/../resources/views' => resource_path('views/vendor/dashboard-dummy-tile'),
        ], 'dashboard-dummy-tile-views');

        $this->loadViewsFrom(__DIR__ . '/../resources/views', 'dashboard-dummy-tile');

        Livewire::component('dummy-tile', MyTileComponent::class);
    }
}
