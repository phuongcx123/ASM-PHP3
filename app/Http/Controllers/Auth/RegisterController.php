<?php

namespace App\Http\Controllers\Auth;

use App\Mail\VertyEmailUsser;
use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Support\Facades\Mail;

class RegisterController extends Controller
{
    public function showRegisterForm()
    {
        return view("Client.Auth.register");
    }
    public function register(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
        ]);


        $user = User::query()->create($data);
        $user -> userdetail()->create([]);

        Mail::to($request->email)->send(new VertyEmailUsser($user)) ;
        Auth::login($user);
        request()->session()->regenerate();
        return redirect()->intended('/')-> with('res' , 'Vui lòng check xác nhận tài khoản trong email');
    }
}
