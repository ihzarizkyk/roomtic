<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class MainController extends Controller
{

    public function __construct()
    {
        $this->middleware("auth");
    }

    public function index()
    {
        $title = "Dashboard RoomTic";
        return view("dashboard.index",compact("title"));
    }
}
