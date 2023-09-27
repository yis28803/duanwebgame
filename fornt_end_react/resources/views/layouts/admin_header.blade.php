<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Admin</title>
    <link rel="stylesheet" href="{{ asset('css/styleadmin.css') }}" />
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
  </head>
  <body>
    <div class="boxcenter">
      <div class="row mb headeradmin">
        <h1>Admin</h1>
      </div>
      <div class="row mb menu">
        <ul>
          <li><a href="{{ route('admin.home') }}">Trang chủ</a></li>
          <li><a href="{{ route('admin.danhmuc.index') }}">Danh mục</a></li>
          <li><a href="{{ route('admin.theloai.index') }}">Thể loại</a></li>
          <li><a href="{{ route('admin.sanpham.index') }}">Sản phẩm</a></li>
          {{-- <li><a href="{{ route('admin.quanhetlsp.index') }}">Quan hệ thể loại sản phẩm</a></li>
          <li><a href="{{ route('admin.taikhoan.index') }}">Khách hàng</a></li>
          <li><a href="{{ route('admin.binhluan.index') }}">Bình luận</a></li>--}}
          <li><a href="{{ route('admin.thongke.index') }}">Thống kê</a></li> 
          <li><a href="{{ route('admin.danhsachdonhang.index') }}">Danh sách Đơn hàng</a></li>


          <!-- Thêm các liên kết cho các trang admin khác tương tự -->
        </ul>
      </div>



      {{-- phần thiết kế bên dưới --}}
      @yield('content')
      @yield('ControlPanel')
      
      
