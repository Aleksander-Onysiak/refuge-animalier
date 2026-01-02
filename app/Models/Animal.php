<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Animal extends Model
{
    use HasFactory;

    public mixed $animal_id;
    protected $fillable = ['name', 'sex', 'type', 'race', 'status', 'color', 'age', 'date_of_arrival', 'date_of_adoption', 'created_at',
    ];
    public $timestamps = false;
}
