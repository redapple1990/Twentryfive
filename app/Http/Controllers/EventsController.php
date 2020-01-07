<?php

namespace App\Http\Controllers;

use Spatie\Permission\Models\Permission;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use App\Http\Controllers\Controller;
use DB;
use App\Events;

class EventsController extends Controller
{
    /**
    *
    * allow admin only
    *
    */

    public function __construct() {
        $this->middleware('auth');
    }

    /**
     * Display a listing of Permission.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $events_data = DB::table('events') ->get();
        return view('events.index', ['events_data' => $events_data]);
    }

    public function newEventStore(Request $request)
    {
        $name = $request->event_name;
        $location = $request->location;

        $str = $request->event_date;
        $a = explode(" ",$str);
        $day = $a[1];
        $month = date('m',strtotime($a[2]));
        $year = $a[3];
        $time = explode(":",$a[5]);
        $hour = $time[0];
        $min = $time[1];
        $date = date("Y-m-d H:i:s",mktime($hour,$min,0,$month,$day,$year));

        $guestemplete = $request->guestemplete;

        Events::create(['name' => $name, 'location' => $location, 'datetime' => $date, 'templete' => $guestemplete]);

        return redirect()->back();
    }

    public function single($id)
    {
        $event_data = DB::table('events')->where('id', $id)->first();
        return view('events.single', ['event_data' => $event_data]);
    }
}
