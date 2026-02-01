<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class logInController extends Controller
{
    public function create()
    {
        return view("auth.login");
    }

    public function store()
    {
        $attri = request()->validate([
            "email" => ["required", "email"],
            "password" => ["required"]
        ]);

        if (!Auth::attempt($attri)) {
            throw ValidationException::withMessages([
                "email" => "The Email Address is not valid",
                "password" => "The Password is not valid"
            ]);
        }

        request()->session()->regenerate();
        return redirect("/");
    }

    public function destroy()
    {
        Auth::logout();
        return redirect("/");
    }
}
