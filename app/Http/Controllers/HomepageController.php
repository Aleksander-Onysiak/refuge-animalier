<?php

namespace App\Http\Controllers;

use App\Models\Animal;

class HomepageController extends Controller
{
    public function index()
    {
        $animals = Animal::get()->all();

        return view('welcome', compact('animals'));
    }
    public function show(string $id)
    {
        $animal = Animal::findOrFail($id);

        return view('welcome', compact('animal'));
    }
}
