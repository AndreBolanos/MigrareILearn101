<?php

namespace App\Http\Controllers;

use App\User;
use App\Http\Requests\RegisterNewUser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class RegisterUser extends Controller
{
    public function __construct()
    {
        $this->middleware('guest');
    }

    public function validateNewUser(RegisterNewUser $request)
    {
        $validatedData = $request->validated();
        $SaveUser = User::create(['name' => $request->input('nameU'),
                                    'email' => $request->input('emailU'),
                                    'password' => Hash::make($request->input('passwordU'))]);

        $credentials = ['email' => $request->input('emailU'), 'password' => $request->input('passwordU')];

        if (Auth::attempt($credentials)) {
            // Authentication passed...
            return redirect()->intended('home');
        }

    }


}
