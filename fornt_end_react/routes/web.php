<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\NguoiDung\HeaderController;
use App\Http\Controllers\HomeController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');














// Route::middleware(['web'])->group(function () {
//     // Đặt các route cần bảo vệ tại đây
//     Route::post('/sanpham', 'App\Http\Controllers\Admin\AdminSanPhamController@store')->name('admin.sanpham.store');
//     Route::get('/sanpham', 'App\Http\Controllers\Admin\AdminSanPhamController@index')->name('admin.sanpham.index');
//     // ...
// });



// Tạo route cho trang sản phẩm theo danh mục
// Route::post('/sanphamdanhmuc', [HomeController::class, 'sanPhamDanhMuc'])->name('sanphamdanhmuc');

// phần giao diện người dùng
// Route::get('/nguoidung/header', [HeaderController::class, 'index'])->name('nguoidung.header.index');
// Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/', 'App\Http\Controllers\NguoiDung\HomeController@index')->name('home');



Route::get('/sanphamdanhmuc/{id}', 'App\Http\Controllers\NguoiDung\SanPhamDanhMucController@index')->name('sanphamdanhmuc');
Route::get('/sanphamdanhmuc', 'App\Http\Controllers\NguoiDung\SanPhamDanhMucController@timkiem')->name('sanphamdanhmuc.timkiem');






Route::get('/sanphamct/{id}', 'App\Http\Controllers\NguoiDung\SanPhamCTController@index')->name('sanphamct');

// Route::get('/cart', 'App\Http\Controllers\NguoiDung\CartController@index')->name('nguoidung.nguoidung_giohang');
Route::get('/sanphamct/{id}', 'App\Http\Controllers\NguoiDung\SanPhamCTController@index')->name('sanphamct');


Route::get('/save-cart', 'App\Http\Controllers\NguoiDung\CartController@index')->name("nguoidung.nguoidung_giohang");
Route::post('/save-cart/add/{id}', 'App\Http\Controllers\NguoiDung\CartController@add')->name("cart.add");
Route::get('/save-cart/delete', 'App\Http\Controllers\NguoiDung\CartController@delete')->name("cart.delete");



Route::get('/bill', 'App\Http\Controllers\NguoiDung\BillController@index')->name("nguoidung.nguoidung_bill");




// Route::get('/test', function(){
//     return view('nguoidung.nguoidung_giohang');
// });

Route::middleware('auth')->group(function(){
    Route::get('/cart/purchase','App\Http\Controllers\NguoiDung\BillController@purchase')->name("cart.purchase");
});

Route::middleware('admin')->group(function(){
    

    Route::prefix('admin')->group(function () {
        Route::get('/', 'App\Http\Controllers\Admin\AdminThongKeController@bieudo')->name('admin.home');
        // Danh mục
        Route::get('/danhmuc', 'App\Http\Controllers\Admin\AdminDanhMucController@index')->name("admin.danhmuc.index");
        Route::get('/danhmuc/add', 'App\Http\Controllers\Admin\AdminDanhMucController@create')->name('admin.danhmuc.create');
        Route::post('/danhmuc', 'App\Http\Controllers\Admin\AdminDanhMucController@store')->name('admin.danhmuc.store');
        Route::get('/danhmuc/edit/{id}', 'App\Http\Controllers\Admin\AdminDanhMucController@edit')->name('admin.danhmuc.edit');
        Route::put('/danhmuc/update/{id}', 'App\Http\Controllers\Admin\AdminDanhMucController@update')->name('admin.danhmuc.update');
        Route::delete('/danhmuc/delete/{id}', 'App\Http\Controllers\Admin\AdminDanhMucController@destroy')->name('admin.danhmuc.destroy');
        // Thể loại
        Route::get('/theloai', 'App\Http\Controllers\Admin\AdminTheLoaiController@index')->name('admin.theloai.index');
        Route::get('/theloai/add', 'App\Http\Controllers\Admin\AdminTheLoaiController@create')->name('admin.theloai.create');
        Route::post('/theloai', 'App\Http\Controllers\Admin\AdminTheLoaiController@store')->name('admin.theloai.store');
        Route::get('/theloai/edit/{id}', 'App\Http\Controllers\Admin\AdminTheLoaiController@edit')->name('admin.theloai.edit');
        Route::put('/theloai/update/{id}', 'App\Http\Controllers\Admin\AdminTheLoaiController@update')->name('admin.theloai.update');
        Route::delete('/theloai/delete/{id}', 'App\Http\Controllers\Admin\AdminTheLoaiController@destroy')->name('admin.theloai.destroy');
        // Sản phẩm
        Route::get('/sanpham', 'App\Http\Controllers\Admin\AdminSanPhamController@index')->name('admin.sanpham.index');
        Route::get('/sanpham/add', 'App\Http\Controllers\Admin\AdminSanPhamController@create')->name('admin.sanpham.create');
        Route::post('/sanpham', 'App\Http\Controllers\Admin\AdminSanPhamController@store')->name('admin.sanpham.store');
        Route::get('/sanpham/edit/{id}', 'App\Http\Controllers\Admin\AdminSanPhamController@edit')->name('admin.sanpham.edit');
        Route::put('/sanpham/update/{id}', 'App\Http\Controllers\Admin\AdminSanPhamController@update')->name('admin.sanpham.update');
        Route::delete('/sanpham/delete/{id}', 'App\Http\Controllers\Admin\AdminSanPhamController@destroy')->name('admin.sanpham.destroy');
        // Danh Sách Đơn hàng
        Route::get('/danhsachdonhang', 'App\Http\Controllers\Admin\AdminDSDHController@index')->name('admin.danhsachdonhang.index');
        // Danh Sách Đơn hàng
        Route::get('/thongke', 'App\Http\Controllers\Admin\AdminThongKeController@index')->name('admin.thongke.index');
    });
});


Route::get('/_blank', 'App\Http\Controllers\NotFoundController@index')->name("/_blank");
