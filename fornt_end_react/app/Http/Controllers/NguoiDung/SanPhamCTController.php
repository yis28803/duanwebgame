<?php

namespace App\Http\Controllers\NguoiDung;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\SanPham;
use App\Models\DanhMuc;
use App\Models\SanPhamNoiTheLoai;
use App\Models\TheLoai;


class SanPhamCTController extends Controller
{
    public function index($id)
    {
        // Lấy thông tin sản phẩm dựa trên ID
        $sanPham = SanPham::find($id);

        // Kiểm tra xem sản phẩm có tồn tại không
        if (!$sanPham) {
            abort(404); // Nếu không tồn tại, hiển thị trang 404 hoặc xử lý theo ý muốn của bạn
        }

        // Lấy danh mục dựa trên id của sản phẩm
        $dm = DanhMuc::find($sanPham->iddm);

        // Lấy tất cả giá trị name_tl từ bảng TheLoai dựa trên danh sách idtl
        $theLoaiList =TheLoai::find($sanPham->idtl);

        // Lấy tất cả các sản phẩm có cùng iddm nhưng không lấy sản phẩm gốc
        $sanPhamDanhMuc = SanPham::where('iddm', $dm->id)->where('id', '!=', $sanPham->id)->get();

        return view('nguoidung.sanphamct', compact('dm', 'sanPhamDanhMuc', 'sanPham', 'theLoaiList'));
    }


}
