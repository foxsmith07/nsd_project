<?php

use App\Http\Controllers\PublicController;
use Illuminate\Support\Facades\Route;

Route::middleware(['auth'])->group(function(){
    Route::get('/', [PublicController::class, 'home'])->name('home');
    Route::get('/monitoring', [PublicController::class, 'monitoring'])->name('monitoring');
    Route::get('/insert/train', [PublicController::class, 'insert'])->name('insert.train');
    Route::get('/contactUs', [PublicController::class, 'contactUs'])->name('contact.us');
    Route::get('/aboutUs', [PublicController::class, 'aboutUs'])->name('about.us');

});
