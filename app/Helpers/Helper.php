<?php

namespace App\Helpers;

use DB;
use App\Events;
use App\User;
use App\GuestList;

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

    public static function getGuestList()
    {
        $guestlist = GuestList::all();
        return  $guestlist;
    }
}
?>