@extends('layouts.admin_header')

@section('content')
<div class="row">
    <div class="row frmtitle"><h1>THÊM MỚI THỂ LOẠI HÀNG HÓA</h1></div>
    <div class="row frmcontent">
        <form action="{{ route('admin.theloai.store') }}" method="post">
            @csrf
            <div class="row mb10">
                Mã thể loại <br />
                <input type="text" name="matheloai" disabled />
            </div>
            <div class="row mb10">
                Tên thể loại <br />
                <input type="text" name="tentheloai" />
            </div>
            <div class="row mb10">
                <input type="submit" name="themmoitheloai" value="THÊM MỚI" />
                <input type="reset" value="NHẬP LẠI" />
                <a href="{{ route('admin.theloai.index') }}"><input type="button" value="DANH SÁCH" /></a>
            </div>
            @if(isset($thongbao) && ($thongbao != ''))
                {{ $thongbao }}
            @endif
        </form>
    </div>
</div>
@endsection
