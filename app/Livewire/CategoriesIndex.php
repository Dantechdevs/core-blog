<?php

namespace App\Livewire;

use App\Models\Category;
use Livewire\Component;
use Livewire\WithPagination;

class CategoriesIndex extends Component
{
    use WithPagination;
    public function render()
    {
        return view('livewire.categories-index', [
            'categories' => Category::latest()->paginate(10),
        ]);
    }
}
