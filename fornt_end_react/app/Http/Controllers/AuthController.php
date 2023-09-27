<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\TaiKhoan;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function customAuth(Request $request)
    {
        $credentials = [
            'user' => $request->input('user'),
            'email' => $request->input('email'),
            'password' => $request->input('password')
        ];

        $user = TaiKhoan::where('user', $credentials['user'])->first();

      
        if (Auth::attempt(['password' => $request->input('password'), 'email' => $request->input('email')])) {
            // Đăng nhập thành công
            return back()->with('success', 'Đăng nhập thành công.');
        } else {
            // Xử lý trường hợp đăng nhập thất bại
            return back()->with('error', 'Tên đăng nhập hoặc mật khẩu không đúng.');
        }

    }
}
