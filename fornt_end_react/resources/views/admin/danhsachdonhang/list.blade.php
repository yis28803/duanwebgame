@extends('layouts.admin_header')

@section('content')
<div class="row">
    <div class="row frmtitle mb"><h1>DANH SÁCH ĐƠN HÀNG</h1></div>

    <div class="row frmcontent">
        <div class="row mb10 frmdsloai">
            <table>
                <tr>
                    <th></th>
                    <th>MÃ ĐƠN HÀNG</th>
                    <th>TÊN KHÁCH HÀNG</th>
                    <th>EMAIL KHÁCH HÀNG</th>
                    <th>SỐ LƯỢNG HÀNG</th>
                    <th>GIÁ TRỊ ĐƠN HÀNG</th>
                    <th>NGÀY ĐẶT HÀNG</th>
                    <th></th>
                </tr>




                @foreach ($listbill as $bill)
                    <tr>
                        <td><input type="checkbox" name="" /></td>
                        <td>Bill-{{ $bill->id }}</td>
                        <td>{{ $bill->bill_user }}</td>
                        <td>{{ $bill->bill_email }}</td>

                        <td>{{ $billQuantities[$bill->id] }}</td> {{-- In ra số lượng sản phẩm của hóa đơn --}}


                        <td>{{ $bill->total}}</td>
                        <td>{{ $bill->ngaydathang}}</td>


                        
                        
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
        </div>
        
    </div>
</div>
@endsection
