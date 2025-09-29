<?php

use Illuminate\Support\Facades\Route;
use App\Models\Volleyball;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/Home', function () {
    return view('Home');
});

Route::get('/volleyballs', function () {
    $volleyballs = Volleyball::all();
    return view('index',["volleyballs" => $volleyballs]);
});

Route::get('/volleyballs/create', function () {
    return view('create');
});



Route::get('/volleyballs/{id}', function ($id) {
    $volleyball = Volleyball::findOrFail($id);
    return view('show', ['volleyball' => $volleyball]);
});

Route::post('/volleyballs', function () {
    //Valider les données
    request()->validate([
        'name' => 'required|string|min:4|max:50',
        'price' => 'required|decimal:2',
        'picture' => 'string',
        'description' => 'required|string',
    ]);

    $s = new Volleyball();
    $s->name = request('name');
    $s->price = request('price')*100;
    $s->picture = request('picture');
    $s->description = request('description');
    $s->save();
    return redirect('/volleyballs/' . $s->id);
});
