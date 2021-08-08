<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

session_start();

class AdminController extends Controller
{
    //dashboard
    public function index()
    {
        return view('admin.dashboard');
    }

    //QL don vi
    public function add_dv()
    {
        $all_dv = DB::table('donvi')->where('madvcha', '=', NULL)->get();
        return view('admin.add_dv')->with("dv", $all_dv);
    }
    public function save_dv(Request $request)
    {
        $data = array();
        $data['tendv'] = $request->tendonvi;
        $data['madvcha'] = $request->dvcha;
        $data['ngaythem'] = date('Y-m-d H:i:s');
        DB::table('donvi')->insert($data);
        Session()->put('them-dv', 'Thêm đơn vị thành công');
        return redirect('quanly-dv');
    }
    public function list_dv()
    {
        $danhsachdv = DB::table('donvi')->get();
        return view('admin.list_dv')->with("donvi", $danhsachdv);
    }
    public function sua_dv($ma_dv)
    {
        $dv = DB::table('donvi')->where('madv', $ma_dv)->get();
        $dvcha = DB::table('donvi')->where('madvcha', NULL)->get();

        return view('admin.edit_dv')->with('dv', $dv)->with('dvcha', $dvcha);
    }
    public function capnhat_dv(Request $request, $ma_dv)
    {
        $data = array();
        $data['tendv'] = $request->tendonvi;
        $data['madvcha'] = $request->dvcha;
        $data['ngaysua'] = date('Y-m-d H:i:s');
        DB::table('donvi')->where('madv', $ma_dv)->update($data);
        return redirect('/quanly-dv');
    }
    public function xoa_dv($ma_dv)
    {
        DB::table('donvi')->where('madv', $ma_dv)->delete();
        return redirect('/quanly-dv');
    }

    //user
    public function list_user()
    {
        $all_user = DB::table('nguoidung')->orderBy('macb', 'ASC')->join('donvi', 'donvi.madv', '=', 'nguoidung.madv')->get();
        return view('admin.list_user')->with('all_user', $all_user);
    }
    public function edit_user($ma_cb)
    {
        $user = DB::table('nguoidung')->where('id', $ma_cb)->get();
        $dv = DB::table('donvi')->where('madvcha', '!=', NULL)->get();

        return view('admin.edit_user')->with('user', $user)->with('dv', $dv);
    }
    public function capnhat_nguoidung(Request $request, $id)
    {
        $data = array();
        $data['macb'] = $request->macb;
        $data['tencb'] = $request->tencb;
        $data['madv'] = $request->dv;
        $data['ngaysua'] = date('Y-m-d H:i:s');

        DB::table('nguoidung')->where('id', $id)->update($data);
        return redirect('/qlnguoidung');
    }
    public function xoa_nguoidung($id)
    {
        DB::table('nguoidung')->where('id', $id)->delete();
        return redirect('/qlnguoidung');
    }
    //phan quyen
    public function phanquyen()
    {
        $quyen = DB::table('nguoidung')->join('phanquyen', 'phanquyen.idNguoidung', '=', 'nguoidung.id')->get();
        return view('admin.phanquyen')->with('quyen', $quyen);
    }
    public function sua_quyencb($id, Request $request)
    {
        $quyen1 = $request->check0;
        $quyen2 = $request->check1;
        $quyen3 = $request->check2;
        
        $data = array();
        $data_1 = array();
        $data_2 = array();
        if ($quyen2 == 1){
            $data_2['maquyen'] = 0;
            DB::table('phanquyen')->where('maquyen', 2)->where('idNguoidung', $id)->update($data_2);
            $data['maquyen'] = 3;
            DB::table('phanquyen')->where('maquyen', 4)->where('idNguoidung', $id)->update($data);
            return redirect('/phanquyen');
        } elseif ($quyen2 == 1 && $quyen3 == 1){
            $data_2['maquyen'] = 0;
            DB::table('phanquyen')->where('maquyen', 2)->where('idNguoidung', $id)->update($data_2);
            $data['maquyen'] = 3;
            DB::table('phanquyen')->where('maquyen', 4)->where('idNguoidung', $id)->update($data);
            $data_1['maquyen'] = 1;
            DB::table('phanquyen')->where('maquyen', 5)->where('idNguoidung', $id)->update($data_1);
            return redirect('/phanquyen');
        } elseif ($quyen3 == 1){
            $data_2['maquyen'] = 0;
            DB::table('phanquyen')->where('maquyen', 2)->where('idNguoidung', $id)->update($data_2);
            $data_1['maquyen'] = 1;
            DB::table('phanquyen')->where('maquyen', 5)->where('idNguoidung', $id)->update($data_1);
            return redirect('/phanquyen');
        } else {
            $data_2['maquyen'] = 2;
            DB::table('phanquyen')->where('maquyen', 0)->where('idNguoidung', $id)->update($data_2);
            $data['maquyen'] = 4;
            DB::table('phanquyen')->where('maquyen', 3)->where('idNguoidung', $id)->update($data);
            $data_1['maquyen'] = 5;
            DB::table('phanquyen')->where('maquyen', 1)->where('idNguoidung', $id)->update($data_1);
            return redirect('/phanquyen');
        }
    }
    
}
