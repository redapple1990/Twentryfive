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
        $eventsdata = DB::table('events') ->get();
        return view('events.index', ['eventsdata' => $eventsdata]);
    }

    public function single()
    {
        return view('events.single');
    }
}
