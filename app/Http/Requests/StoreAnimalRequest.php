<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreAnimalRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'name' => 'required',
            'sex' => 'required|array',
            'date_of_arrival' => 'required|date',
            'type' => 'required',
            'age' => 'required'
        ];
    }

    public function authorize(): bool
    {
        return true;
    }
}
