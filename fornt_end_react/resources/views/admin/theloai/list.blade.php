@extends('layouts.admin_header')

@section('content')
<div class="row">
    <div class="row frmtitle"><h1>DANH SÁCH THỂ LOẠI LOẠI HÀNG</h1></div>
    <div class="row frmcontent">
        <div class="row mb10 frmdsloai">
            <table>
                <tr>
                    <th></th>
                    <th>MÃ THỂ LOẠI</th>
                    <th>TÊN THỂ LOẠI</th>
                    <th></th>
                </tr>
                @foreach ($listtheloai as $theloai)
                    <tr>
                        <td><input type="checkbox" name="" /></td>
                        <td>{{ $theloai->id }}</td>
                        <td>{{ $theloai->name_tl }}</td>
                        <td>
                            <div class="action-buttons">
                                <a href="{{ route('admin.theloai.edit', ['id' => $theloai->id]) }}">
                                    <input type="button" value="Sửa" />
                                </a>
                                {{-- <a href="{{ route('admin.theloai.destroy', ['id' => $theloai->id]) }}">
                                    <input type="button" value="Xóa" />
                                </a> --}}
                                <form action="{{ url('/admin/theloai/delete', ['id' => $theloai->id]) }}" method="POST">
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
            <a href="{{ route('admin.theloai.create') }}"><input type="button" value="Nhập thêm" /></a>
        </div>
    </div>
</div>
@endsection
