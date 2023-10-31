<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\AdvocatesIndex;



  Route::prefix('advocates')->group(function () {
        Route::get('index', AdvocatesIndex::class)->name('admin.advocates.index');

    });
