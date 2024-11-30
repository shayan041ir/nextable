<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class RegisterController extends Controller
{
    public function index(){
        return view('register');
    }

    //sabt nam
    public function SN(Request $request) {
        $request ->validate([
            'username' => 'required',
            'email' => 'required|email',
            'phone' => 'required|regex:/^[0-9]{10,15}$/',
            'pass' => 'required',
        ]);

        $use = new User();
        $use->name = $request->username;
        $use->email = $request->email;
        $use->phone = $request->phone;
        $use->password = bcrypt($request->pass);
        $use->save();
        // dd($use);
        return redirect()->route('dashboard');

    }
}
