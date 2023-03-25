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

    public function postRegister(Request $req)
    {

        $credentials = $req->validate([
            "name" => 'required',
            "identity" => 'required|digits:10|numeric',
            "email" => 'required|email',
            "password" => 'required'
        ]);

        if(!Auth::check($credentials))
        {
            return redirect()->back();
        }else{

            DB::table("users")->insert([
                'name' => $req->name(),
                'identity' => $req->identity(),
                'email' => $req->email(),
                'roles' => "student",
                'password' => Hash::make($req->password())
            ]);

            $req->session()->regenerate();

            return redirect("/dashboard");
        };

    }
}
