<?php

use App\Livewire\AdvocatesUpdate;
use App\Livewire\CategoriesCreate;
use App\Livewire\CategoriesEdit;
use App\Livewire\CategoriesIndex;
use Illuminate\Support\Facades\Route;
use App\Livewire\AdvocatesIndex;
use App\Livewire\AdvocatesCreate;



Route::prefix('advocates')->group(function () {
    Route::get('index', AdvocatesIndex::class)->name('admin.advocates.index');
    Route::get('N/create', AdvocatesCreate::class)->name('admin.advocates.create');
    Route::get('A/{advocate}/update', AdvocatesUpdate::class)->name('admin.advocates.update');
});

Route::prefix('areaslaw')->group(function () {
    Route::get('L/index', CategoriesIndex::class)->name('admin.categories.index');
    Route::get('N/create', CategoriesCreate::class)->name('admin.categories.create');
    Route::get('A/{category}/update', CategoriesEdit::class)->name('admin.categories.edit');

});
