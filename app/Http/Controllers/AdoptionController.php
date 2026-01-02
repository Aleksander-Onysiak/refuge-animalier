<?php

namespace App\Http\Controllers;

use App\Models\Animal;
use App\Models\Adoption;
use Illuminate\Http\Request;

class AdoptionController extends Controller
{
    public function index(Animal $animal)
    {
        return view('adoption.index', compact('animal'));
    }

    public function store(Request $request, Animal $animal)
    {
        $validated = $request->validate([
            'lastname' => 'required|string|max:255',
            'firstname' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:20',
            'hours' => 'nullable|string|max:50',
            'message' => 'nullable|string|max:2000',
        ]);

        $validated['animal'] = $animal->name;

        Adoption::create($validated);

        return redirect()->route('animals.index')->with('success', 'Demande d’adoption envoyée !');
    }
}
