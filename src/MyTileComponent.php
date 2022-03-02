<?php

namespace Geronyy\DummyTile;

use Livewire\Component;

class DummyTileComponent extends Component
{
    public $position;

    public function mount(string $position)
    {
        $this->position = $position;
    }


    public function render()
    {
        return view('dashboard-skeleton-tile::tile', [
            'myData' => DummyStore::make()->getData(),
            'refreshIntervalInSeconds' => config('dashboard.tiles.dummy_data.refresh_interval_in_seconds') ?? 60,

        ]);
    }
}
