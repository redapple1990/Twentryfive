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
        return view('contacts.single');
    }

    public function newContactStore(Request $request)
    {
        if($request->event_nguest_nameame != null && $request->guest_email != null && $request->guest_phone != null)
        {
            $name = $request->guest_name;
            $email = $request->guest_email;
            $phone = $request->guest_phone;

            Guests::create(['name' => $name, 'email' => $email, 'phone' => $phone]);
        }
        
        return redirect()->back();
    }

    public function DetailStore(Request $request)
    {
        if($request->cBirthday != null && $request->cGender != null && $request->cCompany != null && $request->cEmail != null && $request->cMobile != null && $request->cOffice != null && $request->cNotes != null)
        {
            $str = $request->cBirthday;
            $a = explode("/",$str);
            $date = date("Y-m-d",mktime($a[2],$a[0],$a[1]));

           Guests::where('email', $request->cEmail)->update(['birthday' => $date,'gender' => $request->cGender, 'company' => $cCompany, 'email' => $cEmail, 'phone' => $cMobile, 'office' => $cOffice, 'notes' => $cNotes]);
        }
        
        return redirect()->back();
    }
}
