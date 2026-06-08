<?php

use App\Models\Idea;
use Illuminate\Support\Facades\Route;

Route::get('/', function(){
    $state = request('state');
    $ideas = Idea::query()
    ->when($state, function($query, $state){
        $query->where('state', $state);
    })->get();

    return view('home', [
        'ideas' => $ideas
    ]);
});

Route::post('/', function(){
    $idea = request()->idea;

    Idea::create([
        'descreption' => $idea,
        'state' => 'pendding',
    ]);

    return redirect('/');
})->name('about');

Route::get('/delete-ideas', function(){
    session()->forget('ideas');
    return redirect('/');
});