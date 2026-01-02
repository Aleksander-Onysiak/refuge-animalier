<?php

namespace App\Http\Controllers\Auth;

use App\Http\Requests\StoreUserRequest;

class UserController
{

    public function store(StoreUserRequest $request)
    {
        return redirect(route('dashboard.index'));
    }

    public function index()
    {
        return view('dashboard.index');
    }
}
