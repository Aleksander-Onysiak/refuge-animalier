<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Adoption extends Model
{
    use HasFactory;

    protected $fillable = [
        'lastname',
        'firstname',
        'email',
        'phone',
        'animal_id',
        'hours',
        'message',
    ];

    //la demande doit être liée à un animal
    public function animal()
    {
        return $this->belongsTo(Animal::class);
    }
}
