<?php

namespace App\Livewire;

use Livewire\WithPagination;
use Livewire\Component;
use App\Models\Advocate;
class AdvocatesIndex extends Component
{
     use WithPagination;


    public function render()
    {
        return view('livewire.advocates-index',[
            'advocates'=>Advocate::paginate(3),
        ]);
    }
}
