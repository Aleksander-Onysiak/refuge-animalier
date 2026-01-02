<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;

class Notification
{
    use HasFactory;

    public mixed $notification_id;
    protected $fillable = ['date', 'time', 'destinator', 'content','read_at' ,'created_at',];
    public $timestamps = false;
}
