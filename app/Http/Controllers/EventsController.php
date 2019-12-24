<?php

namespace App\Http\Controllers;

use Spatie\Permission\Models\Permission;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use App\Http\Controllers\Controller;
use DB;

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

    public function store(Request $request)
    {
        $eventName = $request->Eventname;
        $location = $request->location;
        $date = $request->event_date.'-'.date('m').'-'.date('Y');
        $event_date = date('Y-m-d', strtotime($date));
        $guestemplete = $request->guestemplete;
        
        DB::table('events')->insert(['name' => $eventName, 'location' => $location, 'date' => $event_date, 'templete' => $guestemplete]);

        return redirect()->back();
    }

    public function single()
    {
        return view('events.single');
    }
}
