<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GuestList extends Model
{
    protected $fillable = [
        'event_name', 'guest_name', 'no_of_ticket', 'affliation', 'type', 'status'
    ];
}
