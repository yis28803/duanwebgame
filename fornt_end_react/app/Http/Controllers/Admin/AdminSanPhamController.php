<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\SanPham;
use Illuminate\Support\Facades\Storage;
use App\Models\DanhMuc;
use App\Models\TheLoai;

class AdminSanPhamController extends Controller
{
    public function index(Request $request)
    {
        $listdanhmuc = DanhMuc::all();
        $listtheloai = TheLoai::all();
        $query = SanPham::query();

        if ($request->has('kyw')) {
            $keyword = $request->input('kyw');
            $query->where('name', 'like', "%$keyword%");
        }

        if ($request->has('iddm') && $request->input('iddm') != 0) {
            $iddm = $request->input('iddm');
            $query->where('iddm', $iddm);
        }

        $listsanpham = $query->orderBy('id', 'desc')->get();
        $listtheloai = $query->orderBy('id', 'desc')->get();
        return view('admin.sanpham.list', compact('listsanpham', 'listdanhmuc','listtheloai'));
    }

    public function create()
    {
        $listtheloai = TheLoai::all();
        $listdanhmuc = DanhMuc::all();
        return view('admin.sanpham.add', compact('listdanhmuc','listtheloai'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'iddm' => 'required',
            'idtl' => 'required',
            'tensp' => 'required',
            'giasp' => 'required',
            'salesp' => 'required',
            'hinh' => 'required|image|mimes:jpeg,png,jpg,gif',
            'mota' => 'required',
        ]);

        $imagePath = $request->file('hinh')->store('upload', 'public');

        SanPham::create([
            'idtl' => $request->input('idtl'),
            'iddm' => $request->input('iddm'),
            'name' => $request->input('tensp'),
            'price' => $request->input('giasp'),
            'sale' => $request->input('salesp'),
            'img' => $imagePath,
            'mota' => $request->input('mota'),
        ]);

        return redirect()->route('admin.sanpham.index')->with('success', 'Sản phẩm đã được thêm thành công.');
    }

    public function edit($id)
    {
        $listtheloai = TheLoai::all();
        $listdanhmuc = DanhMuc::all();
        $sanpham = SanPham::findOrFail($id);
        return view('admin.sanpham.update', compact('sanpham', 'listdanhmuc','listtheloai'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'iddm' => 'required',
            'idtl' => 'required',
            'tensp' => 'required',
            'giasp' => 'required',
            'salesp' => 'required',
            'mota' => 'required',
        ]);

        $sanpham = SanPham::findOrFail($id);

        $imagePath = $sanpham->img;

        if ($request->hasFile('hinh')) {
            $request->validate([
                'hinh' => 'image|mimes:jpeg,png,jpg,gif',
            ]);
            $imagePath = $request->file('hinh')->store('upload', 'public');
        }

        $sanpham->update([
            'idtl' => $request->input('idtl'),
            'iddm' => $request->input('iddm'),
            'name' => $request->input('tensp'),
            'price' => $request->input('giasp'),
            'sale' => $request->input('salesp'),
            'img' => $imagePath,
            'mota' => $request->input('mota'),
        ]);

        return redirect()->route('admin.sanpham.index')->with('success', 'Sản phẩm đã được cập nhật thành công.');
    }

    public function destroy($id)
    {
        $sanpham = SanPham::findOrFail($id);
        $sanpham->delete();

        return redirect()->route('admin.sanpham.index')->with('success', 'Sản phẩm đã được xóa thành công.');
    }
}
