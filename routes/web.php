<?php

use App\Http\Controllers\Auth\SessionsController;
use App\Http\Controllers\IdeaController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return 'Homepage';
})->name('home');

Route::prefix('ideas')->controller(IdeaController::class)->group(function(){
    Route::middleware('auth')->group(function(){
        Route::get('/', 'index')->name('ideasIndex');
        Route::get('/create', 'create')->name('ideasCreate');
        Route::post('/create', 'store');
        Route::get("/{idea}", 'show')->can('update', 'idea')->name('ideasView');
        Route::get("/{idea}/edit", 'edit')->name('ideasEdit');
        Route::patch("/{idea}/edit", 'update');
        Route::delete('/{idea}', 'destroy')->name('ideasDelete');
    });
});

Route::prefix('auth')->group(function(){
    Route::middleware('guest')->group(function(){
        Route::controller(App\Http\Controllers\Auth\RegisteredUserController::class)->group(function(){
            Route::get('/register', 'create')->name('create-account');
            Route::post('/register', 'store');
        });
    
        Route::controller(App\Http\Controllers\Auth\SessionsController::class)->group(function(){
            Route::get('/login', 'create')->name('login');
            Route::post('/login', 'store');
        });
    });
    Route::middleware('auth')->group(function(){
        Route::delete('/logout', [SessionsController::class, 'destroy'])->name('logout');
    });
});

Route::get('/admin', function(){
    return "private area";
})->can('view-admin');
