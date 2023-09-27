@extends('layouts.admin_header')

@section('content')
<div class="row">
    <div class="row frmtitle"><h1>THÊM MỚI SẢN PHẨM</h1></div>
    <div class="row frmcontent">
        <form action="{{ route('admin.sanpham.store') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="row mb10">
                Danh mục <br />
                <select name="iddm">
                    @foreach ($listdanhmuc as $danhmuc)
                        <option value="{{ $danhmuc->id }}">{{ $danhmuc->name_dm }}</option>
                    @endforeach
                </select>
            </div>
            <div class="row mb10">
                Thể loại <br />
                <select name="idtl">
                    @foreach ($listtheloai as $theloai)
                        <option value="{{ $theloai->id }}">{{ $theloai->name_tl }}</option>
                    @endforeach
                </select>
            </div>
            <div class="row mb10">
                Tên sản phẩm <br />
                <input type="text" name="tensp" />
            </div>
            <div class="row mb10">
                Giá <br />
                <input type="text" name="giasp" />
            </div>
            <div class="row mb10">
                Sale <br />
                <input type="text" name="salesp" />
            </div>
            <div class="row mb10">
                Hình <br />
                @if (isset($sanpham->img))
                    <img src="{{ asset('storage/' . $sanpham->img) }}" height="80">
                @endif
                <input type="file" name="hinh">
            </div>
            <div class="row mb10">
                Mô tả <br />
                <textarea name="mota" cols="30" rows="10"></textarea>
            </div>
            <div class="row mb10">
                <input type="submit" name="themmoisp" value="THÊM MỚI" />
                <input type="reset" value="NHẬP LẠI" />
                <a href="{{ route('admin.sanpham.index') }}"><input type="button" value="DANH SÁCH" /></a>
            </div>
            @if(isset($thongbao) && ($thongbao != ''))
                {{ $thongbao }}
            @endif
        </form>
    </div>
</div>
@endsection
