<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\coordinate1;
use App\Country;

class Coordinate1Controller extends Controller
{
     public function __construct()
{
    $this->middleware('auth');    
    $this->middleware('Co_ordinate');
}


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

public function index()
    {
        return view('coordinate.coordinate');
    }


    
}
