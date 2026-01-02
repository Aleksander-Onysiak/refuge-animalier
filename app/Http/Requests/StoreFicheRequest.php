<?php

namespace App\Http\Requests;

class StoreFicheRequest
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
