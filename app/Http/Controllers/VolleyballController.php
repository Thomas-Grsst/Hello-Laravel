<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Volleyball;

class VolleyballController extends Controller
{
    public function index() {
        $volleyballs = Volleyball::all();
        return view('index',compact('volleyballs'));
    }


    public function create() {
        return view('create');
    }


    public function show(Volleyball $volleyball) {
        return view('show', compact('volleyball'));
    }


    public function store() {
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
    }


    public function edit(Volleyball $volleyball) {
        return view('edit', compact('volleyball'));
    }


    public function update(Volleyball $volleyball) {
        //Valider les données
        request()->validate([
            'name' => 'required|string|min:4|max:50',
            'price' => 'required|decimal:2',
            'picture' => 'string',
            'description' => 'required|string',
        ]);

        $volleyball->name = request('name');
        $volleyball->price = request('price')*100;
        $volleyball->picture = request('picture');
        $volleyball->description = request('description');
        $volleyball->save();
        return redirect('/volleyballs/' .$volleyball->id);
    }

    public function destroy(Volleyball $volleyball) {
        $volleyball->delete();
        return redirect('/volleyballs');
    }
}