<?php

namespace App\Http\Controllers\NguoiDung;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\DanhMuc;
use App\Models\SanPham;
use App\Models\TheLoai;


class SanPhamDanhMucController extends Controller
{
    public function index($id)
    {
        // Lấy danh mục dựa trên id được truyền vào
        $dm = DanhMuc::find($id); 
        // Lấy danh sách sản phẩm theo id danh mục
        $sanPhamDanhMuc = SanPham::where('iddm', $id)->get(); 
        $listdanhmuc = DanhMuc::orderBy('id', 'asc')->get();
        $listtheloai = TheLoai::orderBy('id', 'asc')->get();

        return view('nguoidung.sanphamdanhmuc', compact('dm', 'sanPhamDanhMuc','listdanhmuc','listtheloai'));
    }

    public function timkiem(Request $request){
        
        $listdanhmuc = DanhMuc::orderBy('id', 'asc')->get();
        $listtheloai = TheLoai::orderBy('id', 'asc')->get();
        $query = SanPham::query();

        if ($request->has('idtl') && $request->input('idtl') != 0) {
            $idtl = $request->input('idtl');
            $query->where('idtl', $idtl);
        }

        if ($request->has('iddm') && $request->input('iddm') != 0) {
            $iddm = $request->input('iddm');
            $query->where('iddm', $iddm);
        }

        $sanPhamDanhMuc = $query->orderBy('id', 'desc')->get();

        return view('nguoidung.sanphamdanhmuc', compact('sanPhamDanhMuc','listdanhmuc','listtheloai'));
    }
}
