<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Advocate;
class AdvocatesIndex extends Component
{
    public function render()
    {
        return view('livewire.advocates-index',[
            'advocates'=>Advocate::all(),
        ]);
    }
}
