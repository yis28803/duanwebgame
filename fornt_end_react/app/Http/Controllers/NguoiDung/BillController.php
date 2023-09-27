<?php

namespace App\Http\Controllers\NguoiDung;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Models\SanPham;
use App\Models\TheLoai;
use App\Models\Bill;
use App\Models\Cart;



class BillController extends Controller
{
    public function index()
    {
        return view('nguoidung.nguoidung_bill'); 
    }
    public function purchase(Request $request) 
    {
        $productsInSession = $request->session()->get("sanpham");

        if ($productsInSession) {
        $userId = Auth::user()->id;
        $userName = Auth::user()->name;
        $userEmail= Auth::user()->email;
        // $order = new Cart();
        // $order->setUserId($userId);
        // $order->setTotal(0);
        // $order->save();
        // $total = 0;
        $item = new Bill();
        $item->iduser=$userId;
        $item->bill_user=$userName;
        $item->bill_email=$userEmail;
        $item->total='0';
        $item->bill_status='0';
        $item->save();    
        $tam = 0;

        // $item->setPrice($product->getPrice());
        // $item->setProductId($product->getId());
        // $item->setOrderId($order->getId());
      
        // $total = $total + ($product->getPrice() * $quantity);
        
        // $order->setTotal($total);
        // $order->save();
         $productsInCart = SanPham::findMany(array_keys($productsInSession));
        foreach ($productsInCart as $product) {

            $order = new Cart();
            // $order->user_id->$request("1");
            $order->user_id=$userId;

            // $order->product_id->$request('2');
            $order->product_id=$product->id;

            $order->name_sp=$product->name;

            // $order->quantity->$request('0');
            $order->quatity= session('sanpham')[$product->id];
            $order->price=$product->sale;

            $order->thanhtien= $order->quatity * $order->price;


            $tam += ($order->quatity *  $order->price);

            $order->idbill= $item->id;
            $order->save();
       
        }
        $item->total=$tam;
        $item->save();

        
        
        $request->session()->forget('sanpham');
        $viewData = [];
 
        $viewData["order"] = $order;
        return view('nguoidung.nguoidung_bill')->with("viewData", $viewData);
        } 
        
    }
        
}
