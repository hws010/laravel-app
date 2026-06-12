<?php

use App\Http\Controllers\IdeaController;
use Illuminate\Support\Facades\Route;

Route::prefix('ideas')->controller(IdeaController::class)->group(function(){
    Route::get('/', 'index')->name('ideasIndex');
    Route::get('/create', 'create')->name('ideasCreate');
    Route::post('/create', 'store')->name('ideasCreate');
    Route::get("/{idea}", 'show')->name('ideasView');
    Route::get("/{idea}/edit", 'edit')->name('ideasEdit');
    Route::patch("/{idea}/edit", 'update')->name('ideasEdit');
    Route::delete('/{idea}', 'destroy')->name('ideasDelete');
});

Route::prefix('auth')->controller(App\Http\Controllers\Auth\RegisteredUserController::class)->group(function(){
    Route::get('/register', 'create')->name('create-account');
    Route::post('/register', 'store')->name('create-account');
});