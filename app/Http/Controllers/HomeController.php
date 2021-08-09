<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        return view('home');
    }
    public function dangki(){
        $dv = DB::table('donvi')->where('madvcha', '!=', NULL)->get();
        return view('form.dangki')->with('dv', $dv);
    }
    public function danhgia(){
        return view('home.danhgia');
    }
}
