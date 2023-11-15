<?php

use App\Http\Controllers\PagesController;
use Illuminate\Support\Facades\Route;




Route::get('/',[PagesController::class ,'index'])->name('pages.index');

Route::get('/website/details',[PagesController::class ,'websiteDetail'])->name('pages.website.detail');
Route::get('/website/email/details',[PagesController::class ,'emailDetail'])->name('pages.website.emaildetails');

