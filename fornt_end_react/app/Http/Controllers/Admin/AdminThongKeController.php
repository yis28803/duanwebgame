<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Bill;
use App\Models\Cart;
use App\Models\SanPham;
use Illuminate\Support\Facades\DB;

class AdminThongKeController extends Controller
{
    public function index(Request $request)
    {
        $listcart = Cart::orderBy('thanhtien', 'desc')->get();
        return view('admin.thongke.list', compact('listcart'));
    }

    public function bieudo(){
        // Lấy danh sách các danh mục có sản phẩm được đặt và tổng số lượng sản phẩm được đặt
        $categoriesWithCounts = DB::table('cart')
        ->join('sanpham', 'cart.product_id', '=', 'sanpham.id')
        ->join('danhmuc', 'sanpham.iddm', '=', 'danhmuc.id')
        ->select('danhmuc.name_dm', DB::raw('SUM(cart.quatity) as total_quantity'))
        ->groupBy('danhmuc.name_dm')
        ->having('total_quantity', '>', 0)
        ->get();

        return view('layouts.admin_home', compact('categoriesWithCounts'));
    }
}
