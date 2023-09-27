@extends('layouts.admin_header')

@section('content')
<div class="row">
    <div class="row frmtitle"><h1>CẬP NHẬT DANH MỤC HÀNG HÓA</h1></div>
    <div class="row frmcontent">
        <form action="{{ url('/admin/danhmuc/update', ['id' => $dm->id]) }}" method="post">
            @csrf
            @method('PUT')
            <div class="row mb10">
                Tên danh mục <br />
                <input type="text" name="name_dm" value="{{ $dm->name_dm }}" />
            </div>
            <div class="row mb10">
                Tên biểu tượng <br />
                <input type="text" name="bieutuong" value="{{ $dm->bieutuong }}" />
            </div>
            <div class="row mb10">
                <input type="submit" name="capnhatdanhmuc" value="Cập nhật" />
                <input type="reset" value="Nhập lại" />
                <a href="{{ url('/admin/danhmuc') }}"><input type="button" value="DANH SÁCH" /></a>
            </div>
            @if(isset($thongbao) && ($thongbao != ""))
                <div>{{ $thongbao }}</div>
            @endif
        </form>
    </div>
</div>
@endsection
