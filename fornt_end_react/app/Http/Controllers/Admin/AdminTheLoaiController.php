<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\TheLoai;

class AdminTheLoaiController extends Controller
{
    public function index()
    {
        $listtheloai = TheLoai::orderBy('id', 'desc')->get();
        return view('admin.theloai.list', compact('listtheloai'));
    }

    public function create()
    {
        return view('admin.theloai.add');
    }

    public function store(Request $request)
    {
        $request->validate([
            'tentheloai' => 'required',
        ]);

        TheLoai::create([
            'name_tl' => $request->input('tentheloai'),
        ]);

        return redirect()->route('admin.theloai.index')->with('success', 'Thể loại đã được thêm thành công.');
    }

    public function edit($id)
    {
        $theloai = TheLoai::findOrFail($id);
        return view('admin.theloai.update', compact('theloai'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'tentheloai' => 'required',
        ]);

        $theloai = TheLoai::findOrFail($id);
        $theloai->update([
            'name_tl' => $request->input('tentheloai'),
        ]);

        return redirect()->route('admin.theloai.index')->with('success', 'Thể loại đã được cập nhật thành công.');
    }

    public function destroy($id)
    {
        $theloai = TheLoai::findOrFail($id);
        $theloai->delete();

        return redirect()->route('admin.theloai.index')->with('success', 'Thể loại đã được xóa thành công.');
    }
}
