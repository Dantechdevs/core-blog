<?php

namespace App\Livewire;

use App\Models\Category;
use Livewire\Attributes\Rule;
use Livewire\Component;

class CategoriesCreate extends Component
{
    #[Rule('required')]
    public $name = '';
    public function render()
    {
        return view('livewire.categories-create');
    }

    public function save()
    {
        $this->validate();
        Category::create([
            'name' => $this->name,

        ]);
        flash('Success  created ')->success();
        return back();
    }
}
