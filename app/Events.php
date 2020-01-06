<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Events extends Model
{
    public $timestamps = false;
    protected $fillable = ['name', 'location', 'datetime', 'templete'];
}
