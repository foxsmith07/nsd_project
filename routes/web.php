<?php

use App\Http\Controllers\PublicController;
use App\Http\Controllers\TrainController;
use Illuminate\Support\Facades\Route;

Route::middleware(['auth'])->group(function(){
    Route::get('/', [PublicController::class, 'home'])->name('home');
    Route::get('/contactMe', [PublicController::class, 'contactMe'])->name('contact.me');
    Route::get('/aboutMe', [PublicController::class, 'aboutMe'])->name('about.me');
    
    Route::get('/monitoring', [TrainController::class, 'index'])->name('monitoring');

    Route::get('/insert/train', [TrainController::class, 'create'])->name('insert.train');
    Route::post('/train/store', [TrainController::class, 'store'])->name('train.store');

    Route::get('/train/edit/{train}', [TrainController::class, 'edit'])->name('train.edit');
    Route::put('/train/update/{train}',[TrainController::class, 'update'])->name('train.update');
    Route::delete('train/{train}/destroy',[TrainController::class, 'destroy'])->name('train.destroy');
});
