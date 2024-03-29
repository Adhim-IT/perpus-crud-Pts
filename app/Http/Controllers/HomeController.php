<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        if (Auth::id())
        {
            $role=Auth::user()->role;
            if($role=='admin')
            {
                return view('peges.dashboard');
            }
            else if($role=='user')
            {
                return  view('index');
            }
            else{
                return redirect()->back();
            }
        }
    }
}
