<?php

namespace App\Http\Controllers\AuthV2;

use App\Http\Controllers\Controller;
use App\Http\Requests\RegisterRequest;
use App\Models\User;
use Illuminate\Http\Request;

class RegisterControllerV2 extends Controller
{
    public function show()
    {
        return view('authV2.register');
    }

    public function register(RegisterRequest $request) 
    {
        $user = User::create($request->validated());

        auth()->login($user);

        return redirect('/')->with('success', "Account successfully registered.");
    }

    public function registerFromdash(RegisterRequest $request)
    {
        $user = User::create($request->validated());

        auth()->login($user);

        return redirect('/user')->with('success', "Account successfully registered.");
    }
}
