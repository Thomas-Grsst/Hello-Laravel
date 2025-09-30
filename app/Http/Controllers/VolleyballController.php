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

    public function show($id) {
        $volleyball = Volleyball::findOrFail($id);
        return view('show', compact('volleyballs'));
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

    public function edit($id) {
        $volleyball = Volleyball::findOrFail($id);
        return view('edit', compact('volleyball'));
    }

    public function update($id) {
        //Valider les données
        request()->validate([
            'name' => 'required|string|min:4|max:50',
            'price' => 'required|decimal:2',
            'picture' => 'string',
            'description' => 'required|string',
        ]);

        $s = Volleyball::findOrFail($id);
        $s->name = request('name');
        $s->price = request('price')*100;
        $s->picture = request('picture');
        $s->description = request('description');
        $s->save();
        return redirect('/volleyballs/' . $s->id);
    }
}