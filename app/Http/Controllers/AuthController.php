<?php

namespace App\Http\Controllers;

use App\Events\UserLoggedInEvent;
use App\Models\User;
use Hash;
use Auth;

class AuthController extends Controller
{
    public function login() {
        // dd(request()->all());
        if (!$user = User::whereEmail(request("email"))->first()) {
            return redirect()->back();
        }
        if(!Hash::check(request("password"), $user->password)) {
            return redirect()->back();
        }

        Auth::login($user);
        event(new UserLoggedInEvent($user));
        return redirect()->to(route('admin.user.index'));
    }

    public function logout() {
        if(Auth::check()) {
            Auth::logout();
        }
        return redirect()->to(route('login'));
    }
}
