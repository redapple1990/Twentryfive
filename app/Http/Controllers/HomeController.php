<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\GuestList;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $events_data = DB::table('events') ->get();
        return view('index', ['events_data' => $events_data]);
    }

    public function newGuestStore(Request $request)
    {
        GuestList::create(['event_name' => $request->eventname, 'guest_name' => $request->guestname, 'no_of_ticket' => $request->ticketnumber, 'affliation' => $request->affliation, 'type' => $request->type, 'status' => $request->status]);

        return redirect()->back();
    }
} 
