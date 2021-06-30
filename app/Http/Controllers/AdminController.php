<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    //dashboard
    public function index(){
        return view('admin.dashboard');
    }
    //QL don vi
    public function add_dv(){
        return view('admin.add_dv');
    }
    //user
    public function add_user(){
        return view('admin.add_user');
    }
    public function list_user(){
        $all_user = DB::table('nguoidung')->orderBy('macb', 'desc')->join('donvi', 'donvi.madv', '=', 'nguoidung.madv')->get();
        return view('admin.list_user')->with('all_user', $all_user);
    }
    //
}
