<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\DanhMuc;

class AdminDanhMucController extends Controller
{
    public function index()
    {
        $listdanhmuc = DanhMuc::orderBy('id', 'desc')->get();
        return view('admin.danhmuc.list', compact('listdanhmuc'));
        
    }

    public function create()
    {
        return view('admin.danhmuc.add');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name_dm' => 'required',
            'bieutuong' => 'required',
        ]);

        DanhMuc::create([
            'name_dm' => $request->input('name_dm'),
            'bieutuong' => $request->input('bieutuong'),
        ]);

        return redirect()->route('admin.danhmuc.index')->with('success', 'Danh mục đã được thêm thành công.');
    }

    public function edit($id)
    {
        $dm = DanhMuc::find($id);
        return view('admin.danhmuc.update', compact('dm'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name_dm' => 'required',
            'bieutuong' => 'required',
        ]);

        $dm = DanhMuc::find($id);
        $dm->name_dm = $request->input('name_dm');
        $dm->bieutuong = $request->input('bieutuong');
        $dm->save();

        return redirect()->route('admin.danhmuc.index')->with('success', 'Danh mục đã được cập nhật thành công.');
    }

    public function destroy($id)
    {
        $dm = DanhMuc::find($id);
        $dm->delete();

        return redirect()->route('admin.danhmuc.index')->with('success', 'Danh mục đã được xóa thành công.');
    }
}
