<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PoiController;
use App\Http\Controllers\PublicController;

Route::get('/', [PublicController::class , 'home'])->name('home');



Route::middleware(['auth'])->group(function(){

    Route::get('/poi/create' , [PoiController::class , 'create'])->name('poi.create');
    Route::post('/poi/store' , [PoiController::class , 'store'])->name('poi.store');
    
    Route::get('/poi/user/{user}' , [PoiController::class , 'getPoiByUSer'])->name('poi.user');
    Route::get('/poi/show/{poi}' , [PoiController::class , 'show'])->name('poi.show');
    
    Route::delete('/user/destroy' , [PublicController::class , 'destroyUser'])->name('user.destroy');
    Route::get('/poi/index' , [PoiController::class , 'index'])->name('poi.index');

    Route::get('/poi/edit/{poi}' , [PoiController::class , 'edit'])->name('poi.edit');
    Route::post('/poi/update/{poi}' , [PoiController::class , 'update'])->name('poi.update');
    Route::delete('/poi/{poi}/destroy' , [PoiController::class , 'destroy'])->name('poi.destroy');

});