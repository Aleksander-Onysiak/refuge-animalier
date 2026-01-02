<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class VolunteerController extends Controller
{
    public function index()
    {
        $volunteers = User::where('role', 'volunteer')->get();
        return view('volunteer.index', compact('volunteers'));
    }

    public function create()
    {
        return view('volunteer.create'); // Formulaire que tu viens de créer
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6',
            'role' => 'required|in:moderator,admin',
        ]);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role' => $request->role,
        ]);

        return redirect()->route('volunteer.index')->with('success', 'Bénévole créé avec succès !');
    }
}
