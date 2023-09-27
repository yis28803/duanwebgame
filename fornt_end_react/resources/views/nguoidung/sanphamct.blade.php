@extends('layouts.nguoidung_header')

@section('content')

<div class="cau30">
    <div class="cau2">
        <div class="cau10">
            <div style="min-width: 0; flex-basis: 37.5%">
                <div class="cau11">
                    <div class="cau12">
                        <img
                            loading="lazy"
                            src="{{ asset('storage/' . $sanPham->img) }}"
                            style="border-radius: 0.375rem"
                        />
                    </div>
                </div>
            </div>
            <div style="min-width: 0; flex-basis: 37.5%">
                <div class="cau13">
                    <div class="cau14">
                        <div class="cau15">
                            <a class="cau16" href="/gia-han-youtube-premium-12-thang">Sản phẩm</a>
                            <h3>{{ $sanPham->name }}</h3>
                        </div>
                        <div class="cau17">
                            <div class="cau18">
                                <svg
                                    class="cau19"
                                    xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 512 512"
                                >
                                <path d="M509.5 184.6L458.9 32.8C452.4 13.2 434.1 0 413.4 0H98.6c-20.7 0-39 13.2-45.5 32.8L2.5 184.6c-1.6 4.9-2.5 10-2.5 15.2V464c0 26.5 21.5 48 48 48h416c26.5 0 48-21.5 48-48V199.8c0-5.2-.8-10.3-2.5-15.2zM32 199.8c0-1.7.3-3.4.8-5.1L83.4 42.9C85.6 36.4 91.7 32 98.6 32H240v168H32v-.2zM480 464c0 8.8-7.2 16-16 16H48c-8.8 0-16-7.2-16-16V232h448v232zm0-264H272V32h141.4c6.9 0 13 4.4 15.2 10.9l50.6 151.8c.5 1.6.8 3.3.8 5.1v.2z"></path>
                                    
                                </svg>
                                <div>
                                    Tình trạng: <span style="color: #29b474">Còn hàng</span>
                                </div>
                            </div>
                            <div class="cau18">
                                <svg
                                    class="cau19"
                                    xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 512 512"
                                >
                                    <path d="M497.941 225.941L286.059 14.059A48 48 0 0 0 252.118 0H48C21.49 0 0 21.49 0 48v204.118a48 48 0 0 0 14.059 33.941l211.882 211.882c18.745 18.745 49.137 18.746 67.882 0l204.118-204.118c18.745-18.745 18.745-49.137 0-67.882zm-22.627 45.255L271.196 475.314c-6.243 6.243-16.375 6.253-22.627 0L36.686 263.431A15.895 15.895 0 0 1 32 252.117V48c0-8.822 7.178-16 16-16h204.118c4.274 0 8.292 1.664 11.314 4.686l211.882 211.882c6.238 6.239 6.238 16.39 0 22.628zM144 124c11.028 0 20 8.972 20 20s-8.972 20-20 20-20-8.972-20-20 8.972-20 20-20m0-28c-26.51 0-48 21.49-48 48s21.49 48 48 48 48-21.49 48-48-21.49-48-48-48z"></path>
                                </svg>
                                <div>
                                    Thể loại:  <h6 style="display:inline;">{{ $theLoaiList->name_tl }}</h6>
                                   
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="cau15">
                        <div class="cau25">
                            <h4>{{ $sanPham->price }}đ</h4>
                        </div>
                        <div class="cau20">
                            <h6 class="cau21">{{ $sanPham->sale }}đ</h6>
                            <small class="cau22">-{{ ceil(($sanPham->price - $sanPham->sale) / $sanPham->price * 100) }}%</small>
                        </div>
                    </div>
                    
                        {{-- action="{{ route('addtocart') }}" --}}
                        
                        <input type="hidden" name="id" value="{{ $sanPham->id }}">
                        <input type="hidden" name="name" value="{{ $sanPham->name }}">
                        <input type="hidden" name="img" value="{{ $sanPham->img }}">
                        <input type="hidden" name="price" value="{{ $sanPham->price }}">
                        <div class="cau23"></div>
                        <style>
                           
                         /* Định dạng nút "Mua ngay" */
                        .cau26 {
                            display: flex;
                            align-items: center;
                            background-color: #29b474;
                            color: #fff;
                            font-size: 18px;
                            padding: 10px 20px;
                            border: none;
                            border-radius: 4px;
                            cursor: pointer;
                            transition: background-color 0.3s ease;
                        }

                        .cau26:hover {
                            background-color: #1e8940;
                        }

                        /* Định dạng nút "Thêm vào giỏ hàng" */
                        input[type="submit"][name="addtocart"] {
                            display: flex;
                            align-items: center;
                            background-color: #fff;
                            color: #29b474;
                            font-size: 18px; /* Điều chỉnh kích thước font-size ở đây */
                            padding: 10px 20px;
                            border: 2px solid #29b474;
                            border-radius: 4px;
                            cursor: pointer;
                            margin-left: 10px;
                            transition: background-color 0.3s ease, color 0.3s ease;
                        }

                        input[type="submit"][name="addtocart"]:hover {
                            background-color: #29b474;
                            color: #fff;
                        }

                        </style>


                        {{-- lamphannay --}}
                        {{-- lamphannay --}}
                        {{-- lamphannay --}}
                        {{-- lamphannay --}}
                        {{-- lamphannay --}}

                        <form action="{{ route('cart.add',['id'=>$sanPham->id]) }}" method="POST">
                            @csrf



                            <fieldset class="cau13">
                                <div class="cau24">
                                    <div style="flex: 1; display: flex; align-items: center;">
                                        <label for="qty" style="margin-right: 10px;">Số lượng:</label>
                                        <input type="number" name="qty" id="qty" min="1" value="1" style="width: 80px; padding: 5px; border: 1px solid #ccc;">
                                    </div>
                                    
                                        <div style="flex: 1 1 0%">
                                            
                                            <input type="hidden" name="productid_hidden" value="{{$sanPham->id}}">
                                            <input type="submit" name="addtocart" value="Thêm vào giỏ hảng">
                                        </div>
                                        
                                    
                                
                                </div>
                            </fieldset>



                        </form>

                        {{-- lamphannay --}}
                        {{-- lamphannay --}}
                        {{-- lamphannay --}}
                        {{-- lamphannay --}}
                        {{-- lamphannay --}}





                        
                       

                        <!-- Thêm JavaScript để xử lý sự kiện thêm sản phẩm vào giỏ hàng -->
                        <script>
                            // Đoạn JavaScript ở đây sẽ xử lý sự kiện thêm sản phẩm vào giỏ hàng và cập nhật số lượng sản phẩm trên biểu tượng giỏ hàng

                            // Lấy thông tin về sản phẩm từ mã HTML hoặc từ máy chủ
                            const productInfo = {
                                id: 123, // ID của sản phẩm
                                name: "Sản phẩm mẫu", // Tên sản phẩm
                                price: 100000, // Giá sản phẩm
                            };

                            // Sự kiện khi người dùng nhấn nút "Thêm vào giỏ hàng"
                            const addToCartButton = document.querySelector('input[name="addtocart"]');
                            addToCartButton.addEventListener("click", () => {
                                // Thêm sản phẩm vào giỏ hàng (có thể sử dụng API hoặc cách lưu trữ giỏ hàng khác)
                                addToCart(productInfo);

                                // Cập nhật số lượng sản phẩm trên biểu tượng giỏ hàng
                                updateCartItemCount();
                            });

                            // Hàm để thêm sản phẩm vào giỏ hàng (cần phải xử lý thêm vào giỏ hàng thực tế)
                            function addToCart(product) {
                                // Đoạn mã xử lý thêm sản phẩm vào giỏ hàng ở đây
                                // Bạn có thể sử dụng AJAX để gửi yêu cầu thêm sản phẩm vào giỏ hàng tới máy chủ hoặc lưu trữ trong biến JavaScript
                            }

                            // Hàm để cập nhật số lượng sản phẩm trên biểu tượng giỏ hàng
                            function updateCartItemCount() {
                                // Đoạn mã cập nhật số lượng sản phẩm trên biểu tượng giỏ hàng ở đây
                                // Bạn có thể lấy số lượng từ máy chủ hoặc từ biến JavaScript và cập nhật nó lên trang web
                            }
                        </script>


                
            </div>
        </div>
    </div>
</div>
<section>
    <div style="background-color: #fff">
        <div class="cau2">
        </div>
    </div>
    <div class="cau2">
        <br>
        <br>
        <div class="cau60">
            <h4 class="cau61">Chi tiết sản phẩm</h4>
            <div class="cau62">
                <div class="cau63">
                    <div>
                        <p>
                            {{ $sanPham->mota }}
                            <span style="color: #e74c3c"><strong>{{ $sanPham->price }}đ.</strong></span>
                        </p>
                        <p>&nbsp;</p>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <br>
        <br>
    </div>
</section>

{{-- <section>
    <div style="background-color: #fff">
        <div class="cau2">
        </div>
    </div>
    <div class="cau2">
        <br>
        <br>
        <div class="cau60">
            <h4 class="cau61">Sản phẩm cùng loại</h4>
            <div class="cau62">
                <div class="cau63">
                    <div>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <br>
        <br>
    </div>
</section> --}}

<section>
    <div style="margin-left: auto; margin-right: auto; max-width: 1200px;">
        <div class="taokhoangcachsanphamdacbiet">
            <div style="margin-top: 2.5rem; display: flex; justify-content: space-between;">
                <h4>Sản phẩm cùng loại</h4>
                <br>
                <br>
            </div>
        </div>
        <div>
            <div class="dinhdangthanghanggiuacacphan">
                @foreach ($sanPhamDanhMuc as $sp_cungloai)
                    @php
                        $linksp = url('/sanphamct/' . $sp_cungloai->id);
                        $hinh = asset('storage/' . $sp_cungloai->img);
                    @endphp
                    <div style="min-width: 0; flex-basis: 25%">
                        <a tabindex="-1" href="{{ $linksp }}">
                            <img loading="lazy" src="{{ $hinh }}" alt="{{ $sp_cungloai->name }}" style="height: 140px;" />
                        </a>
                        <a class="dieuchinhkhoangcachchusanphamnoibat" href="{{ $linksp }}">{{ $sp_cungloai->name }}</a>
                        <div class="dieuchinhkhoangcachgiasanphamchitiet">
                            <div class="giatienthanghang">
                                <div>{{ $sp_cungloai->price }}đ</div>
                                <div style="color: #9ca3af; -webkit-text-decoration-line: line-through; text-decoration-line: line-through;">{{ $sp_cungloai->sale }}đ</div>
                                <div>
                                    <small class="dieuchinhphantramgiamgia">-{{ ceil(($sp_cungloai->price - $sp_cungloai->sale) / $sp_cungloai->price * 100) }}%</small>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <br />
            <hr />
        </div>
        <br><br><br>    
    </div>
</section>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
<script>
    $(document).ready(function(){
        $("#binhluan").load("view/binhluan/binhluanform.php", {idpro: {{ $sanPham->id }}});
    });
</script>
<div class="row" id="binhluan"></div>
@endsection
