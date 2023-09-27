<?php

namespace App\Http\Controllers\NguoiDung;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use Session;
use App\Http\Requests;
use App\Models\Cart;
use App\Models\SanPham;
use App\Models\TheLoai;


// use Cart;

session_start();

class CartController extends Controller
{
    
    public function index(Request $request)
    {
        $total = 0;
        $productsInCart = [];
        $productsInSession = $request->session()->get("sanpham");
        $theloai = TheLoai::all();
        if ($productsInSession) {
        $productsInCart = SanPham::findMany(array_keys($productsInSession));
        $total = SanPham::sumPricesByQuantities($productsInCart, $productsInSession);
        }
        $viewData = [];
        $viewData["total"] = $total;
        $viewData["products"] = $productsInCart;
        return view('nguoidung.nguoidung_giohang')->with("viewData", $viewData)->with('theloai',$theloai);
    }

    public function add(Request $request, $id)
    {
        $products = $request->session()->get("sanpham");
        $products[$id] = $request->input('qty');
        $request->session()->put('sanpham', $products);
        return redirect()->route('nguoidung.nguoidung_giohang');
    }
    public function delete(Request $request)
    {
        $request->session()->forget('sanpham');
        return back();
    }

  



}
