<?php

namespace App\Http\Controllers;
use DB;
use App\settings;
use Illuminate\Http\Request;

class settingscontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
    }


    public function index()
    {
        $settings = DB::table('settings')->first();

        return view('settings.index', ['settings' => $settings]);
    }


    public function store(Request $request)
    {

        $settings = Settings::firstOrNew()->updateOrCreate($request->except('_token', '_method'));
    }


}
