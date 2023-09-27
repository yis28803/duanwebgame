@extends('layouts.admin_header')

@section('content')
<div class="row">
    <div class="row frmtitle"><h1>CẬP NHẬT THỂ LOẠI HÀNG HÓA</h1></div>
    <div class="row frmcontent">
        <form action="{{ route('admin.theloai.update', ['id' => $theloai->id]) }}" method="post">
            @csrf
            @method('PUT')
            <div class="row mb10">
                Mã thể loại <br />
                <input type="text" name="matheloai" disabled />
            </div>
            <div class="row mb10">
                Tên thể loại <br />
                <input type="text" name="tentheloai" value="{{ $theloai->name_tl }}"/>
            </div>
            <div class="row mb10">
                <input type="hidden" name="id" value="{{ $theloai->id }}">
                <input type="submit" name="capnhattheloai" value="Cập nhật" />
                <input type="reset" value="Nhập lại" />
                <a href="{{ route('admin.theloai.index') }}"><input type="button" value="DANH SÁCH" /></a>
            </div>
            @if(isset($thongbao) && ($thongbao != ''))
                {{ $thongbao }}
            @endif
        </form>
    </div>
</div>
@endsection
