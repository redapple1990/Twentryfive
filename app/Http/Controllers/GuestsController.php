<?php

namespace App\Http\Controllers;

use Spatie\Permission\Models\Permission;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use App\Http\Controllers\Controller;

class GuestsController extends Controller
{
    /**
    *
    * allow admin only
    *
    */

    public function __construct() {
        $this->middleware('guest');
    }

    /**
     * Display a listing of Permission.
     *
     * @return \Illuminate\Http\Response
     */

    protected $redirectTo = '/home';
    
    public function index()
    {
        return view('guests.password');
    }

    public function single()
    {
        return view('events.single');
    }
}
