<?php

namespace App\Http\Requests;

class StoreUserRequest
{
    public function rules(): array
    {
        return [
            'name' => 'required',
        ];
    }

    public function authorize(): bool
    {
        return true;
    }
}
