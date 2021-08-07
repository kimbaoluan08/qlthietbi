<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;

session_start();

class UserController extends Controller
{
    public function user()
    {
        $khachhang =  Session::get('id');
        if ($khachhang) {
            return Redirect::to('/nguoidung');
        } else {
            return Redirect::to('/')->send();
        }
    }
    public function nguoidung()
    {
        $this->user();
        return view('user.home_nguoidung');
    }
    public function dangki(Request $request)
    {
        $data = array();
        $data['tencb'] = $request->hoten;
        $data['macb'] = $request->taikhoan;
        $data['matkhau'] = Hash::make($request->matkhau);
        $data['ngaysinh'] = $request->ngaysinh;
        $data['gioitinh'] = $request->gioitinh;
        $data['email'] = $request->email;
        $data['sdt'] = $request->sdt;
        $data['madv'] = $request->donvi;
        $data['ngaythem'] = date('Y-m-d H:i:s');

        $id = DB::table('nguoidung')->insertGetId($data);

        $quyen = array();
        $quyen['maquyen'] = 2;
        $quyen['idNguoidung'] = $id;

        DB::table('phanquyen')->insert($quyen);

        Session::put('id', $id);
        Session::put('tencb', $request->hoten);

        return redirect('/nguoidung');
    }

    public function kiemtra_dn(Request $request)
    {
        $user = $request->user;
        $passwd = $request->pass;

        $check = DB::table('nguoidung')->where('macb', $user)->first();

        if ($check) {
            $quyen = DB::table('phanquyen')->where('idNguoidung', $check->id)->first();
            if ($quyen->maquyen == 2) {
                if (Hash::check($passwd, $check->matkhau)) {
                    Session::put('id', $check->id);
                    return Redirect::to('/nguoidung');
                } else {
                    Session::put('message', 'Bạn đã nhập sai mật khẩu');
                    return Redirect::to('/');
                }
            } else if ($quyen->maquyen == 3) {
                if (Hash::check($passwd, $check->matkhau)) {
                    Session::put('id_cb', $check->id);
                    return Redirect::to('/canbo');
                } else {
                    Session::put('message', 'Bạn đã nhập sai mật khẩu');
                    return Redirect::to('/');
                }
            }
            } else {
                Session::put('message', 'Tài khoản không đúng hoặc không tồn tại');
                return Redirect::to('/');
        }
    }
    public function alert(){
        $this->user();
        return view('user.alert');
    }
    public function baocao(){
        $this->user();
        $id = Session::get('id');
        $donvi = DB::table('nguoidung')->join('donvi','donvi.madv', '=', 'nguoidung.madv')->where('id', $id)->first();
        $tb = DB::table('loaitb')->get();
        return view('user.baocao')->with('tb', $tb)->with('dv', $donvi);
    }
    public function luu_baocao(Request $request){
        $data = array();
        $data['maloai'] = $request->loai;
        $data['nhasx'] = $request->nsx;
        $id_tb = DB::table('thietbi')->insertGetId($data);

        $data_1 = array();
        $id = Session::get('id');
        $data_1['matb'] = $id_tb;
        $data_1['tendv'] = $request->tendv;
        $data_1['tinhtrang'] = $request->tinhtrang;
        $data_1['ngayyc'] = date('Y-m-d H:i:s');
        $data_1['idnguoidung'] = $id;
        $data_1['hientrang'] = 0;
        DB::table('yeucau')->insert($data_1);
        return redirect('/alert');
    }
}
