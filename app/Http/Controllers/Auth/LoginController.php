<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;

class LoginController extends Controller
{
    public function __construct()
    {
        $this->middleware("guest")->except("logout");
    }

    public function index()
    {
        return view("auth.login");
    }

    public function postLogin(Request $req)
    {
        
        $req->validate([
            "identity" => "required|numeric",
            "password" => "required"
        ]);

        if(Auth::attempt(["identity" => $req->input("identity"),"password" => $req->input("password")]))
        {
            $req->session()->regenerate();

            return redirect("/dashboard");
        }else{
            return back();
        }
    }

    public function logout(Request $req)
    {
      Auth::logout();
      $req->session()->invalidate();
      return redirect('/login');
    }
}
