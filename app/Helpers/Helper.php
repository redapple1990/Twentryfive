<?php

namespace App\Helpers;

use DB;
use App\Events;
use App\User;

class Helper
{
    public static function getEvents()
    {
        $events = Events::get();
        return  $events;
    }

    public static function getUsers()
    {
        $users = User::all();
        return  $users;
    }
}
?>