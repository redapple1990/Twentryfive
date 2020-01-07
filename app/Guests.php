<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Guests extends Model
{
    protected $table = 'Guests';
    protected $fillable = [
        'name', 'email', 'phone', 'created_at'
    ];
}
