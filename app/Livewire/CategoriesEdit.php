<?php

namespace App\Livewire;

use App\Models\Category;
use Livewire\Attributes\Rule;
use Livewire\Component;

class CategoriesEdit extends Component
{
    #[Rule('required')]
    public $name = '';

    public Category $category;
    public function mount($category)
    {
        $this->name = $category->name;

    }
    public function render()
    {
        return view('livewire.categories-edit');
    }
    public function save()
    {
        $this->validate();
        $this->category->update([
            'name' => $this->name,

        ]);
        flash('Success  Updated ')->success();
        return back();
    }
}
