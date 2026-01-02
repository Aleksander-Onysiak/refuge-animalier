<?php

namespace App\Http\Controllers;

use App\Models\Animal;
use Illuminate\Http\Request;

class AnimalController extends Controller
{
    public function index(Request $request)
    {
        $query = Animal::query();

        // sexe
        if ($request->filled('sex')) {
            $query->where(
                'sex',
                $request->sex === 'male' ? 'Mâle' : 'Femelle'
            );
        }

        // type
        if ($request->filled('type')) {
            $types = [
                'cat' => 'Chat',
                'dog' => 'Chien',
                'parrot' => 'Perroquet',
                'rabbit' => 'Lapin',
            ];

            if (isset($types[$request->type])) {
                $query->where('type', $types[$request->type]);
            }
        }

        // race
        if ($request->filled('race')) {
            $query->where('race', 'like', '%' . $request->race . '%');
        }

        // couleur
        if ($request->filled('color')) {
            $colors = [
                'brown' => 'Brun',
                'white' => 'Blanc',
                'black' => 'Noir',
                'gray' => 'Gris',
            ];

            if (isset($colors[$request->color])) {
                $query->where('color', $colors[$request->color]);
            }
        }

        //filtrage réussi
        $animals = $query
            ->orderBy('created_at', 'desc')
            ->get();

        return view('animals.index', compact('animals'));
    }

    public function show(Animal $animal)
    {
        return view('animal.show', compact('animal'));
    }
}
