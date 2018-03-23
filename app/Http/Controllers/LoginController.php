<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\LoginRequest;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class LoginController extends Controller
{
    public function index()
    {
        return view('user.login');
    }
    public function getLogin(LoginRequest $request)
    {
        $login = [
            'email' => $request->email,
            'password' => $request->password,
        ];
        $remember_me = false;
        if (isset($request->remember))
            $remember_me =true;
        if (Auth::attempt($login, $remember_me)) {
           return redirect()->route('dashboard');
        }
            $request->session()->flash('status',trans('message.login_fails'));

            return back();
    }
    public function getLogOut()
    {
        Auth::logout();
        
        return redirect()->route('dangnhap');
    }    
}
