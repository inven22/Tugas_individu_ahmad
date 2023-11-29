<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class Tenan extends Controller
{
    public function index(){
        $sa = DB::table('tenan')->get();
        return view('tenan.index', compact('sa'));
        }
}
