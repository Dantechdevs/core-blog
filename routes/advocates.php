<?php

use App\Livewire\AdvocatesUpdate;
use Illuminate\Support\Facades\Route;
use App\Livewire\AdvocatesIndex;
use App\Livewire\AdvocatesCreate;



Route::prefix('advocates')->group(function () {
    Route::get('index', AdvocatesIndex::class)->name('admin.advocates.index');
    Route::get('N/create', AdvocatesCreate::class)->name('admin.advocates.create');
    Route::get('A/{advocate}/update', AdvocatesUpdate::class)->name('admin.advocates.update');
});
