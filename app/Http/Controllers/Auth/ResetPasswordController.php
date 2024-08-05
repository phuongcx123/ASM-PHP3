<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ResetsPasswords;

class ResetPasswordController extends Controller
{
    public function showResetForm($token)
    {
        return view("Client.Auth.resetpassword", ["token" => $token]);
    }
    public function reset(Request $request)
    {
        $request->validate([

            'password' => 'required|confirmed|min:6',
            'token' => 'required'
        ]);

        $user_id  = DB::table('password_resets')
            ->where('token', $request->token)
            ->first();
            if (!$user_id) {
                return back();
            }

            $user = User::where('email', $user_id->email)->first();

            if (!$user) {
                return back();
            }

           $user->update(['password'=> $request->password]);

            DB::table('password_resets')->where('email', $user->email)->delete();

            return redirect()->route('login')->with('success', 'Cập nhật thành công');
    }
}
