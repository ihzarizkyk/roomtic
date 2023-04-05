<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\User;
use App\Models\Room;
use App\Models\RoomDetails;
use App\Models\Asset;
use App\Models\AssetDetails;
use Illuminate\Support\Facades\Auth;

class ApprovalController extends Controller
{
    public function __construct()
    {
        return $this->middleware("auth");
    }

    public function approveRoom(Request $req)
    {
        $room = Room::find($req->id);
        if(Auth::user()->roles == "admin" && "logistic")
        {
            if($room)
            {
                $room->approval = 1;
                $room->save();
            }
        }else{
            return abort(403);
        }
    }

    public function declineRoom(Request $req)
    {
        $room = Room::find($req->id);
        if(Auth::user()->roles == "admin" && "logistic")
        {
            if($room)
            {
                $room->approval = 2;
                $room->save();
            }
        }else{
            return abort(403);
        }
    }

    public function approveAsset(Request $req)
    {
        $asset = Asset::find($req->id);
        if(Auth::user()->roles == "admin" && "logistic")
        {
            if($asset)
            {
                $asset->approval = 1;
                $asset->save();
            }
        }else{
            return abort(403);
        }
    }

    public function declineAsset(Request $req)
    {
        $asset = Asset::find($req->id);
        if(Auth::user()->roles == "admin" && "logistic")
        {
            if($asset)
            {
                $asset->approval = 2;
                $asset->save();
            }
        }else{
            return abort(403);
        }    }
}
