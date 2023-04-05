<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Asset;
use App\Models\AssetDetails;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

class AssetController extends Controller
{
    public function __construct()
    {
        $this->middleware("auth");
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $titles = "Assets";
        return view("dashboard.asset.index",compact("titles"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $titles = "Create Asset";
        return view("dashboard.asset.create",compact('titles'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Tool  $tool
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $asset = Asset::find($id);
        return view("dashboard.asset.detail",compact("asset"));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Tool  $tool
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $asset = Asset::find($id);
        return view("dashboard.asset.create",compact("asset"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Tool  $tool
     * @return \Illuminate\Http\Response
     */
    public function update(Request $req)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Tool  $tool
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $asset = Asset::find($id);
        $asset->delete();

        return back();
    }
}
