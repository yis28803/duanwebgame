<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Bill;
use App\Models\Cart;
use App\Models\SanPham;


class AdminDSDHController extends Controller
{
    public function index(Request $request)
    {
        // Lấy danh sách các hóa đơn
        $listbill = Bill::orderBy('id', 'desc')->get();

        // Tạo một mảng để lưu trữ số lượng sản phẩm cho từng hóa đơn
        $billQuantities = [];

        // Lặp qua danh sách các hóa đơn và tính số lượng sản phẩm cho mỗi hóa đơn
        foreach ($listbill as $bill) {
            // Lấy tổng số lượng sản phẩm trong giỏ hàng có cùng idbill
            $totalQuantity = Cart::where('idbill', $bill->id)->sum('quatity');

            // Lưu số lượng sản phẩm vào mảng $billQuantities
            $billQuantities[$bill->id] = $totalQuantity;
        }

        return view('admin.danhsachdonhang.list', compact('listbill', 'billQuantities'));
    }



    
}
