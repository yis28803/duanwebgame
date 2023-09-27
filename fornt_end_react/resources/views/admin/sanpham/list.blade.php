@extends('layouts.admin_header')

@section('content')
<div class="row">
    <div class="row frmtitle mb"><h1>DANH SÁCH SẢN PHẨM</h1></div>

    <form action="{{ route('admin.sanpham.index') }}" method="get">
        @csrf
        <input type="text" name="kyw" value="{{ request('kyw') }}" placeholder="Từ khóa">
        <select name="iddm">
            <option value="0" {{ request('iddm') == 0 ? 'selected' : '' }}>Tất cả</option>
            @foreach ($listdanhmuc as $danhmuc)
                <option value="{{ $danhmuc->id }}" {{ request('iddm') == $danhmuc->id ? 'selected' : '' }}>{{ $danhmuc->name_dm }}</option>
            @endforeach
        </select>
        <input type="submit" name="listokdm" value="GO">
    </form>

    <div class="row frmcontent">
        <div class="row mb10 frmdsloai">
            <table>
                <tr>
                    <th></th>
                    <th>MÃ SẢN PHẨM</th>
                    <th>TÊN SẢN PHẨM</th>
                    <th>HÌNH</th>
                    <th>GIÁ</th>
                    <th>SALE</th>
                    <th></th>
                </tr>
                @foreach ($listsanpham as $sanpham)
                    <tr>
                        <td><input type="checkbox" name="" /></td>
                        <td>{{ $sanpham->id }}</td>
                        <td>{{ $sanpham->name }}</td>
                        <td>
                            @if (Storage::disk('public')->exists($sanpham->img))
                                <img src="{{ asset('storage/' . $sanpham->img) }}" height="80">
                            @else
                                No photo
                            @endif
                        </td>
                        <td>{{ $sanpham->price }}</td>
                        <td>{{ $sanpham->sale }}</td>
                        <td>
                            <div class="action-buttons">
                                <a href="{{ route('admin.sanpham.edit', ['id' => $sanpham->id]) }}">
                                    <input type="button" value="Sửa" />
                                </a>
                                <form action="{{ route('admin.sanpham.destroy', ['id' => $sanpham->id]) }}" method="POST">
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
            <a href="{{ route('admin.sanpham.create') }}"><input type="button" value="Nhập thêm" /></a>
        </div>
    </div>
</div>
@endsection
