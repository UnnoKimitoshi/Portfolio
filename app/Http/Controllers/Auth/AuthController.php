<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginFormRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function loginForm()
    {
        return view('login.login_form');
    }

    public function login(LoginFormRequest $request)
    {
        $credentials = $request->only('name', 'password');
        if (Auth::attempt($credentials)) {
            // セッション再生成
            $request->session()->regenerate();
            return redirect('home')->with('login_success', 'ログインに成功しました。');
        }
        return back()->withErrors([
            'login_error' => '名前かパスワードが間違っています。',
        ]);
    }
}
