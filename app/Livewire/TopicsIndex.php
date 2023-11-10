<?php

namespace App\Livewire;

use App\Models\Topic;
use Livewire\Component;
use Livewire\WithPagination;

class TopicsIndex extends Component
{
    use WithPagination;
    public function render()
    {
     
    
        return view('livewire.topics-index',[
            'topics'=>Topic::latest()->paginate(2),
        ]);
    }
}
