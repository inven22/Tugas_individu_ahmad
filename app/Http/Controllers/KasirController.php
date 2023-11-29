<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class KasirController extends Controller
{
    public function index(){
    $sa = DB::table('kasir')->get();
    return view('kasir.index', compact('sa'));
    }

    
}
