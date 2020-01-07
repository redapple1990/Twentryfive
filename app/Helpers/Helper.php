<?php

namespace App\Helpers;

use DB;
use App\Events;
use App\User;
use App\GuestList;
use App\Guests;

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

    public static function getGuests()
    {
        $guests = Guests::all();
        return  $guests;
    }

    public static function getEventNameForID($event_id)
    {
        $event_name = Events::where('id', $event_id)->first()->name;
        return  $event_name;
    }

    public static function getApprovedForEvent($event_id)
    {
        $event_count = GuestList::where([['event_name', '=', $event_id],['status', '=', 'approved']])->count();
        return  $event_count;
    }

    public static function getPendingForEvent($event_id)
    {
        $event_count = GuestList::where([['event_name', '=', $event_id],['status', '=', 'pending']])->count();
        return  $event_count;
    }

    public static function getDeclinedForEvent($event_id)
    {
        $event_count = GuestList::where([['event_name', '=', $event_id],['status', '=', 'declined']])->count();
        return  $event_count;
    }
}
?>