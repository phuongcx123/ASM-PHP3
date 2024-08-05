<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ValidateResetToken
{
    public function handle(Request $request, Closure $next)
    {
        $token = $request->route('token');

        // Kiểm tra token trong cơ sở dữ liệu
        $passwordReset = DB::table('password_resets')
                            ->where('token', $token)
                            ->first();

        // Nếu token không tồn tại hoặc không hợp lệ, chuyển hướng người dùng
        if (!$passwordReset) {
            return redirect('/')->withErrors(['token' => 'This password reset token is invalid.']);
        }

        return $next($request);
    }
}

