<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;
use phpDocumentor\Reflection\Types\Null_;

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
    public function home()
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
        //quyen 1
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
            } else {
                return Redirect::to('/');
            }

        } else {
            Session::put('message', 'Tài khoản không đúng hoặc không tồn tại');
            return Redirect::to('/');
        }
    }
    public function alert()
    {
        $this->user();
        return view('user.alert');
    }
    public function alert_danhgia()
    {
        $this->user();
        return view('user.alert-danhgia');
    }
    public function baocao()
    {
        $this->user();
        $id = Session::get('id');
        $donvi = DB::table('nguoidung')->join('donvi', 'donvi.madv', '=', 'nguoidung.madv')->where('id', $id)->first();
        $tb = DB::table('loaitb')->get();
        return view('user.baocao')->with('tb', $tb)->with('dv', $donvi);
    }
    public function luu_baocao(Request $request)
    {
        $this->user();
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
    public function yeucau()
    {
        $this->user();
        $id = Session::get('id');
        $yc = DB::table('yeucau')->where('idnguoidung', $id)->get();
        return view('user.dagui')->with('yc', $yc);
    }
    public function danhgia()
    {
        $this->user();
        $id = Session::get('id');
        $danhgia = DB::table('danhgia')->where('id', $id)->first();
        if ($danhgia == NULL) {
            return view('user.danhgia');
        } else {
            return view('user.xem-danhgia');
        }
    }
    public function luu_danhgia(Request $request)
    {
        $this->user();
        $data = array();
        $id = Session::get('id');
        $data['id'] = $id;
        $data['noidung'] = $request->noidung;
        $data['mucdo'] = $request->check;
        $data['ngaydg'] = date('Y-m-d H:i:s');
        DB::table('danhgia')->insert($data);
        return redirect('/alert-danhgia');
    }
    public function dangxuat_nguoidung(){
        Session::put('id', null);
        return Redirect('/');
    }
    public function dangxuat_cb(){
        Session::put('id_cb', null);
        return Redirect('/');
    }
    public function thongbao(){
        $this->user();
        $id = Session::get('id');
        $ph = DB::table('yeucau')->join('phanhoicb', 'phanhoicb.mayeucau', '=', 'yeucau.mayc')->where('idnguoidung', $id)->get();
        return view('user.thongbao')->with('ph', $ph);
    }
    public function xemdanhgia(){
        $this->user();
        $binhluan = DB::table('nguoidung')->join('danhgia', 'danhgia.id', '=', 'nguoidung.id')->get();
        return view('user.xemdanhgia')->with('bl', $binhluan);
    }
    //Can bo
    public function user_canbo()
    {
        $khachhang =  Session::get('id_cb');
        if ($khachhang) {
            return Redirect::to('/canbo');
        } else {
            return Redirect::to('/')->send();
        }
    }
    public function canbo(){
        $this->user_canbo();
        return view('canbo');
    }
    public function yeucau_kh(){
        $this->user_canbo();
        $yc = DB::table('yeucau')->leftJoin('phanhoicb', 'phanhoicb.mayeucau', '=', 'yeucau.mayc')->get();
        return view('canbo.yc_khachhang')->with('yc', $yc);
    }
    public function traloi($mayc){
        $this->user_canbo();
        return view('canbo.traloi')->with('mayc', $mayc);
    }
    public function luu_traloi($mayc, Request $request){
        $this->user_canbo();
        $data = array();
        $data['noidung'] = $request->phanhoi;
        $data['mayeucau'] = $mayc;
        $data['ngayph'] = date('Y-m-d H:i:s');
        $data['tiendo'] = 1;
        DB::table('phanhoicb')->insert($data);
        $data_1 = array();
        $data_1['hientrang'] = 1;
        DB::table('yeucau')->where('mayc', $mayc)->update($data_1);
        return view('canbo.alert_traloi');
    }
    public function dangthuchien(){
        $this->user_canbo();
        $yc1 = DB::table('yeucau')->join('phanhoicb', 'phanhoicb.mayeucau', '=', 'yeucau.mayc')->get();
        return view('canbo.dangthuchien')->with('yc1', $yc1);
    }
    public function tienhanh($matb){
        $this->user_canbo();
        $lk = DB::table('linhkien')->get();
        return view('canbo.tienhanh')->with('matb', $matb)->with('lk', $lk);
    }
    public function luu_hoadon($matb,Request $request){
        $this->user_canbo();
        $data = array();
        $data['matb'] = $matb;
        $data['ngaylap'] = date('Y-m-d H:i:s');
        $id_lk = DB::table('hoadon')->insertGetId($data);
        $data_1 = array();
        $data_1['mahd'] = $id_lk;
        $data_1['malinhkien'] = $request->linhkien;
        $data_1['soluong'] = $request->soluong;
        $data_1['giatien'] = $request->gia;
        DB::table('chitiethd')->insert($data_1);

        $data_2 = array();
        $data_2['tiendo'] = 2;
        $mayc = DB::table('yeucau')->join('phanhoicb', 'phanhoicb.mayeucau', '=', 'yeucau.mayc')->where('matb', $matb)->first();
        DB::table('phanhoicb')->where('mayeucau', $mayc->mayeucau)->update($data_2);
        $hd = DB::table('hoadon')->join('yeucau', 'yeucau.matb', '=', 'hoadon.matb')->get();
        return view('canbo.hoadon')->with('hoadon', $hd);
    }
    public function hoadon(){
        $this->user_canbo();
        $hd = DB::table('hoadon')->join('yeucau', 'yeucau.matb', '=', 'hoadon.matb')->get();
        return view('canbo.hoadon')->with('hoadon', $hd);
    }
    public function themlinhkien($mahd){
        $this->user_canbo();
        $lk = DB::table('linhkien')->get();
        return view('canbo.themlinhkien')->with('mahd', $mahd)->with('lk', $lk);
    }
    public function them_linhkien($mahd, Request $request){
        $this->user_canbo();
        $data_1 = array();
        $data_1['mahd'] = $mahd;
        $data_1['malinhkien'] = $request->linhkien;
        $data_1['soluong'] = $request->soluong;
        $data_1['giatien'] = $request->gia;
        DB::table('chitiethd')->insert($data_1);
        return view('canbo.alert_themlk');
    }
    public function xacnhan($mahd){
        $data = array();
        $hd = DB::table('chitiethd')->where('mahd', $mahd)->get();
        $sum = 0;
        foreach ($hd as $key => $tong){
            $sum = $sum + ($tong->giatien * $tong->soluong);
        }
        $data['tong'] = $sum;
        DB::table('hoadon')->where('mahd', $mahd)->update($data);

        $data_2 = array();
        $data_2['tiendo'] = 3;
        $mayc = DB::table('yeucau')->join('phanhoicb', 'phanhoicb.mayeucau', '=', 'yeucau.mayc')
        ->join('hoadon', 'hoadon.matb', '=', 'yeucau.matb')->where('mahd', $mahd)->first();
        DB::table('phanhoicb')->where('mayeucau', $mayc->mayeucau)->update($data_2);


        $data_3 = array();
        $data_3['hientrang'] = 2;
        $mayc_1 = DB::table('yeucau')->join('hoadon', 'hoadon.matb', '=', 'yeucau.matb')->where('mahd', $mahd)->first();
        DB::table('yeucau')->where('mayc', $mayc_1->matb)->update($data_3);

        return view('canbo.alert_hoantat');
    }
}
