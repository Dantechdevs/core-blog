<?php

namespace App\Livewire;
use Livewire\Attributes\Rule;
use Livewire\Component;

class TopicsCreate extends Component
{
    #[Rule('required')]
    public $name ='';
    public function render()
    {
        return view('livewire.topics-create');
    }

    public function savetopic(){
          $this->validate();


    }
}
