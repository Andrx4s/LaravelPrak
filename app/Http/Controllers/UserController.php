<?php

namespace App\Http\Controllers;

use App\Http\Requests\RequestValidationLogin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    /**
     * Представление шаблона авторизации
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function login()
    {
        return view('login');
    }

    public function loginPost(RequestValidationLogin $request)
    {
        if(Auth::attempt($request->validate())) {
            $request->session()->regenerate();

            return redirect()->route('welcome');
        }
    }
}
