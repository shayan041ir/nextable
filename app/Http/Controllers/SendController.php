<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SendController extends Controller
{

    public function sendnum()
    {
        // $Rnum = rand(1000, 9999);
        $Rnum = 1234;
        session(['verification_code' => $Rnum]);
        return view('send', ['Rnum' => $Rnum]);
    }

    public function OkCode(Request $request)
    {
        $validatedData = $request->validate([
            'S1' => 'required|numeric',
            'S2' => 'required|numeric',
            'S3' => 'required|numeric',
            'S4' => 'required|numeric',
        ]);
        // dd($validatedData);
        // بررسی وجود کد تأیید در سشن
        $storedCode = 1234;
        // $storedCode = session('verification_code');
        // if (!$storedCode) {
        //     return redirect()->back()->withErrors(['error' => 'کد تأیید یافت نشد!']);
        // }
        // dd($storedCode);

        // ترکیب کد ورودی
        // $userCode = implode('', array_values($validatedData));
        $userCode = (int)implode('', array_values($validatedData));
        // $userCode = $validatedData['S1'] . $validatedData['S2'] . $validatedData['S3'] . $validatedData['S4'];

        // dd($validatedData,$storedCode,$userCode);
        // مقایسه کد ورودی با کد ذخیره‌شده در سشن
        if ($userCode == $storedCode) {
            session()->forget(['verification_code', 'phone']); // پاک‌سازی سشن
            return to_route('dashboard')->with('success', 'کد با موفقیت تأیید شد!');
            // return to_route('dashboard')->with('success', 'کد با موفقیت تأیید شد!');

        }else{
            return redirect()->back()->withErrors(['error' => 'کد وارد شده صحیح نیست!']);
        }
    }
}
