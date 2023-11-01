<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\AdvocatesIndex;
use App\Livewire\AdvocatesCreate;



  Route::prefix('advocates')->group(function () {
        Route::get('index', AdvocatesIndex::class)->name('admin.advocates.index');
        Route::get('N/create', AdvocatesCreate::class)->name('admin.advocates.create');
    });
