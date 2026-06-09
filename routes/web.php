<?php

use App\Http\Controllers\IdeaController;
use Illuminate\Support\Facades\Route;

Route::get('/ideas', [IdeaController::class, 'index'])->name('ideasIndex');

Route::get('/ideas/create', [IdeaController::class, 'create'])->name('ideasCreate');

Route::post('/ideas/create', [IdeaController::class, 'store'])->name('ideasCreate');

Route::get("/ideas/{idea}", [IdeaController::class, 'show'])->name('ideasView');

Route::get("/ideas/{idea}/edit", [IdeaController::class, 'edit'])->name('ideasEdit');

Route::patch("/ideas/{idea}/edit", [IdeaController::class, 'update'])->name('ideasEdit');

Route::delete('/ideas/{idea}', [IdeaController::class, 'destroy'])->name('ideasDelete');