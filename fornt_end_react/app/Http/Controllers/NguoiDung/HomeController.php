<?php

namespace App\Http\Controllers\NguoiDung;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\DanhMuc;
use App\Models\SanPham;
use App\Models\TheLoai;

class HomeController extends Controller
{
    
    public function index()
    {

        $listsanpham_slideshow = SanPham::orderBy('id', 'asc')->take(5)->get();
        $listsanpham = SanPham::orderBy('id', 'asc')->take(12)->get();
        $listdanhmuc = DanhMuc::orderBy('id', 'asc')->take(10)->get();
        $firstThreeProducts = SanPham::orderBy('id', 'asc')->take(3)->get();
        return view('nguoidung.nguoidung_home', compact('listdanhmuc','listsanpham','listsanpham_slideshow','firstThreeProducts'));
    }

    
}