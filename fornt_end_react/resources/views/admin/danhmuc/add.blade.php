@extends('layouts.admin_header')

@section('content')
<div class="row">
    <div class="row frmtitle"><h1>THÊM MỚI DANH MỤC HÀNG HÓA</h1></div>
    <div class="row frmcontent">
        <form action="{{ url('/admin/danhmuc') }}" method="post">
            @csrf
            <div class="row mb10">
                Tên danh mục <br />
                <input type="text" name="name_dm" />
            </div>
            <div class="row mb10">
                Tên biểu tượng <br />
                <input type="text" name="bieutuong" />
            </div>
            <div class="row mb10">
                <input type="submit" name="themmoidanhmuc" value="THÊM MỚI" />
                <input type="reset" value="NHẬP LẠI" />
                <a href="{{ url('/admin/danhmuc') }}"><input type="button" value="DANH SÁCH" /></a>
            </div>
            @if(isset($thongbao) && ($thongbao != ""))
                <div>{{ $thongbao }}</div>
            @endif
        </form>
    </div>
</div>
@endsection
