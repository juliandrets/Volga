<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Reel;

class AdminController extends Controller
{
    
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $reel           = Reel::orderBy('id','desc')->get();
        $commercials    = Reel::where('category', '=', 'Commecials')->get();
        $tv             = Reel::where('category', '=', 'TV Productions')->get();
        $others         = Reel::where('category', '=', 'Others')->get();

        return view('admin', [
            'reel'          => $reel,
            'commercials'   => $commercials,
            'tv'            => $tv,
            'others'        => $others
        ]);
    }
}
