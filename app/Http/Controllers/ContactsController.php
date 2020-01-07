<?php

namespace App\Http\Controllers;

use Spatie\Permission\Models\Permission;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use App\Http\Controllers\Controller;
use DB;
use App\Guests;

class ContactsController extends Controller
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
        $guests_data = DB::table('guests') ->get();
        return view('contacts.index', ['guests_data' => $guests_data]);
    }

    public function single()
    {
        return view('events.single');
    }

    public function newContactStore(Request $request)
    {
        $name = $request->guest_name;
        $email = $request->guest_email;
        $phone = $request->guest_phone;

        Guests::create(['name' => $name, 'email' => $email, 'phone' => $phone]);

        return redirect()->back();
    }
}
