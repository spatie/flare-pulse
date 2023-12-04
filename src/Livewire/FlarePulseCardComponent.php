<?php

namespace Spatie\FlarePulse\Livewire;

use Laravel\Pulse\Livewire\Card;

class FlarePulseCardComponent extends Card
{
    public function render()
    {
        return view('flare-pulse::flare');
    }
}
