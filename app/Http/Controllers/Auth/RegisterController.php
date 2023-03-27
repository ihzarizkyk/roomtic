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

    public function __construct()
    {
        $this->middleware("guest");
    }

    public function index()
    {
        return view("auth.register");
    }

    public function storeRegister(Request $req)
    {

        $credentials = $req->validate([
            "name" => "required|unique:users,name",
            "identity" => "required|numeric|unique:users,identity",
            "email" => "required|email|unique:users,email",
            "password" => "required|unique:users,password"
        ]);

        if($credentials)
        {
            $user = new User;
            $user->name = $req->input("name");
            $user->identity = $req->input("identity");
            $user->email = $req->input("email");
            $user->roles = "student";
            $user->password = Hash::make($req->input("password"));
            $user->save();

            $req->session()->regenerate();

            return redirect("/dashboard");

        }
            return redirect()->back();

    }
}
