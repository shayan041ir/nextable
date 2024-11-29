<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\User;

class LoginController extends Controller
{
    public function index()
    {
        return view('login');
    }

    public function verify(Request $request)
    {
        $query = $request->input('phone');
        $num = User::where('phone', $query)->first();

        if ($num) {
            return redirect()->route('send.sendnum');
        } else {
            return redirect()->back()->with('error', 'شماره تلفن یافت نشد!');
        }
    }
}
