<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;

class RegisterController extends Controller
{
    public function index()
    {
        return view("auth.register");
    }

    public function storeRegister(Request $req)
    {

        $credentials = $req->validate([
            "name" => "required",
            "identity" => "required|numeric",
            "email" => "required|email",
            "password" => "required"
        ]);

        if(Auth::check($credentials))
        {
            $user = new User;
            $user->name = $req->name();
            $user->identity = $req->identity();
            $user->email = $req->email();
            $user->roles = "student";
            $user->password = Hash::make($req->password());
            $user->save();

            $req->session()->regenerate();

            return redirect("/dashboard");

        }
            return redirect()->back();

    }
}
