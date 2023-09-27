@extends('layouts.admin_header')

@section('content')
<div class="row">
    <div class="row frmtitle mb"><h1>DANH SÁCH SẢN PHẨM</h1></div>

   

    <div class="row frmcontent">
        <div class="row mb10 frmdsloai">
            <table>
                <tr>
                    <th></th>
                    <th>TÊN SẢN PHẨM</th>
                    <th>GIÁ SẢN PHẨM</th>
                    <th>SỐ LƯỢNG</th>
                    <th>THÀNH TIỀN</th>
                    <th>NGÀY ĐẶT HÀNG</th>
                    <th>MÃ BILL</th>
                    <th></th>
                </tr>




                @foreach ($listcart as $cart)
                    <tr>
                        <td><input type="checkbox" name="" /></td>
                        <td>{{ $cart->name_sp }}</td>
                        <td>{{ $cart->price }}</td>
                        <td>{{ $cart->quatity }}</td>
                        <td>{{ $cart->thanhtien}}</td>
                        <td>{{ $cart->created_at}}</td>
                        <td>Bill-{{ $cart->idbill}}</td>



                        
                        
                        <td>
                            
                        </td>
                    </tr>
                @endforeach



            </table>
        </div>
        <div class="row mb10">
            <input type="button" value="Chọn tất cả" />
            <input type="button" value="Bỏ chọn tất cả" />
            <input type="button" value="Xóa các mục đã chọn" />
            {{-- <a href="{{ route('admin.bieudo.index') }}"><input type="button" value="Xem biểu đồ" /></a> --}}

        </div>

        
        
    </div>
</div>
@endsection
