<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Animal;
use Illuminate\Http\Request;

class FicheController extends Controller
{
    public function index()
    {
        $animals = Animal::all();
        return view('fiches.index', compact('animals'));
    }

    public function create()
    {
        return view('fiches.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'sex' => 'required|in:male,female',
            'type' => 'required|string',
            'race' => 'nullable|string|max:255',
            'color' => 'nullable|string|max:50',
            'status' => 'nullable|string|in:available,care,process',
ss        ]);

        Animal::create($validated);

        return redirect()->route('fiches.index')->with('success', 'J\'ai enregistré l\'animal dans la db');
    }

    public function show(Animal $animal)
    {
        return view('fiches.show', compact('animal'));
    }

    public function edit(Animal $animal)
    {
        return view('fiches.edit', compact('animal'));
    }

    public function update(Request $request, Animal $animal)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'sex' => 'required|in:male,female',
            'type' => 'required|string',
            'race' => 'nullable|string|max:255',
            'color' => 'nullable|string|max:50',
            'status' => 'nullable|string|in:available,care,process',
        ]);

        $animal->update($validated);

        return redirect()->route('fiches.index')->with('success', 'J\'ai mis la fiche à jour');
    }
}
