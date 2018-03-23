<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\RegisterRequest;
use App\Models\User;

class RegisterController extends Controller
{
    public function index()
    {
        return view('user.register');
    }

    public function getUser(RegisterRequest $request)
    {
        try
        {
            $user = User::create([
                'name' =>  $request->name,
                'email' => $request->email,
                'password' => bcrypt($request->password),
                'phone' => $request->phone,
                'address' => $request->address
            ]);
            $request->session()
            ->flash('status', trans('message.addsucessfull'));
        } catch(Exception $e) {
            $request->session()
            ->flash('status', trans('message.add_fails'));
        }
        
        return back();
    }
}
