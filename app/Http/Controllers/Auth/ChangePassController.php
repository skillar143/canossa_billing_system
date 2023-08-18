<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class ChangePassController extends Controller
{
    //
    public function changePass(Request $request)
    {
        if (!Hash::check($request->currPass, auth()->user()->password)) {
            return redirect()->back()
                ->with('error', 'Wrong current password.');
        }

        if (strlen($request->newPass) < 8 || preg_match('/\s/', $request->newPass)) {
            return redirect()->back()
                ->with('error', 'New password is too short or contains spaces.');
        }

        if ($request->newPass != $request->verifyPass) {
            return redirect()->back()
                ->with('error', 'The verify password does not match the new password.');
        }

        auth()->user()->update([
            'password' => Hash::make($request->newPass),
        ]);

        auth()->logout();

        return redirect('/login')
            ->with('success', 'Password has been changed. Please log in with your new password.');


    }
}
