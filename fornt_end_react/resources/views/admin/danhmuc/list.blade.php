@extends('layouts.admin_header')
{{-- @section('title', $viewData['title']) --}}


@section('content')
<div class="row">
    <div class="row frmtitle"><h1>DANH SÁCH DANH MỤC LOẠI HÀNG</h1></div>
    <div class="row frmcontent">
        <div class="row mb10 frmdsloai">
            <table>
                <tr>
                    <th></th>
                    <th>MÃ DANH MỤC</th>
                    <th>TÊN DANH MỤC</th>
                    <th>TÊN BIỂU TƯỢNG</th>
                    <th></th>
                </tr>
                @foreach ($listdanhmuc as $danhmuc)
                    <tr>
                        <td><input type="checkbox" name="" /></td>
                        <td>{{ $danhmuc->id }}</td>
                        <td>{{ $danhmuc->name_dm }}</td>
                        <td>{{ $danhmuc->bieutuong }}</td>
                        <td>
                            <div class="action-buttons">
                                <a href="{{ url('/admin/danhmuc/edit', ['id' => $danhmuc->id]) }}"><input type="button" value="Sửa" /></a>
                                <form action="{{ url('/admin/danhmuc/delete', ['id' => $danhmuc->id]) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <input type="submit" value="Xóa" />
                                </form>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </table>
        </div>
        <div class="row mb10">
            <input type="button" value="Chọn tất cả" />
            <input type="button" value="Bỏ chọn tất cả" />
            <input type="button" value="Xóa các mục đã chọn" />
            <a href="{{ url('/admin/danhmuc/add') }}"><input type="button" value="Nhập thêm" /></a>
        </div>
    </div>
</div>
@endsection
{{-- @yield('content') --}}

@extends('layouts.admin_footer')
