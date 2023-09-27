<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/fontawesome/css/all.min.css') }}">
    {{-- <link rel="stylesheet" href="{{ asset('css/demo2.css') }}"> --}}

</head>
<body>
    
    <header>
        <div class="cau1">
            <div class="cau2">
                <div class="cau3">
                    <div class="cau4">
                        <div class="cau5">
                            <button type="button" class="nutphai"></button>
                            <button type="button" class="nuttrai"></button>
                            <div>
                                <a href="_blank" target="_blank" rel="noreferrer">Đĩa Window, Office Full VAT</a>
                            </div>
                        </div>
                    </div>
                    <div class="tieudethanghang">
                        <a href="_blank" target="_blank" rel="noreferrer" class="dongthanghang" style="margin-left: 1rem">
                            <i class="fa-solid fa-book"></i>
                            <div style="margin-left: 0.75rem">Hướng dẫn mua hàng</div>
                        </a>
                        <a href="_blank" target="_blank" rel="noreferrer" class="dongthanghang" style="margin-left: 1rem">
                            <i class="fa-solid fa-laptop-medical"></i>
                            <div style="margin-left: 0.75rem">Ưu đãi khách hàng</div>
                        </a>
                        <a href="_blank" target="_blank" rel="noreferrer" class="dongthanghang" style="margin-left: 1rem">
                            <i class="fa-solid fa-phone"></i>
                            <div style="margin-left: 0.75rem">Thông tin liên hệ</div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="dinhdangtieude_DivineShop_1">
            <div class="thutieude">
                <div class="dinhdangdongtieude" style="margin-top: 0.75rem">
                    <a class="conrongthanghang" title="Trang chủ" href="{{ route('home') }}">
                        <img loading="lazy" src="https://svgsilh.com/svg/1801287.svg" class="thuconrong" alt="Divine Shop" >
                        <h4 style="padding: 0.75rem">Shop Tào lao</h4>
                    </a>
                    <div class="thunhotieude">
                        <button type="button" title="Trình đơn">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                <path d="M436 124H12c-6.627 0-12-5.373-12-12V80c0-6.627 5.373-12 12-12h424c6.627 0-12 5.373-12 12v32c0 6.627-5.373 12-12 12zm0 160H12c-6.627 0-12-5.373-12-12v-32c0-6.627 5.373-12 12-12h424c6.627 0-12 5.373-12 12v32c0 6.627-5.373 12-12 12zm0 160H12c-6.627 0-12-5.373-12-12v-32c0-6.627 5.373-12 12-12h424c6.627 0-12 5.373-12 12v32c0 6.627-5.373 12-12 12z"></path>
                            </svg>
                        </button>
                    </div>
                    <div style="width: 436px;">
                        <form role="search" method="post">
                            <div style="position: relative; background-color: rgb(11, 11, 185); border-radius: 0.375rem">
                                <div style="display: flex; position: relative">
                                    <input type="search" class="phongtotimkiem" placeholder="Tìm kiếm sản phẩm" autocomplete="off" name="kyw" />
                                    <button type="submit" class="chinhotimkiem" aria-label="Search" name="timkiem">
                                        <svg class="chinhbieutuongtimkiem" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                            <path d="M508.5 468.9L387.1 347.5c-2.3-2.3-5.3-3.5-8.5-3.5h-13.2c315-36.5 50.6-84 50.6-136C416 93.1 322.9 0 208 0S0 93.1 0 208s93.1 208 208 208c52 0 99.5-19.1 136-50.6v13.2c0 3.2 1.3 6.2 3.5 8.5l121.4 121.4c4.7 4.7 12.3 4.7 17 0l22.6-22.6c4.7-4.7 4.7-12.3 0-17zM208 368c-88.4 0-160-71.6-160-160S119.6 48 208 48s160 71.6 160 160-71.6 160-160 160z"></path>
                                        </svg>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="didangdangnhap">
                        <div class="didangthanghangdangnhap">
                            <button type="button" class="vongtronuser">
                                <svg style="fill: currentColor; min-width: 1.25em; height: 1.25rem;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"></svg>
                                <i class="fa-solid fa-user" style="margin-right: 16px; font-size: 20px"></i>
                            </button>
                            <div class="gopdndk" style="margin-left: 0.75rem">
                                {{-- <a href="{{ route('dangnhap') }}"><div style="margin-left: 0.5rem">Đăng nhập</div></a>
                                <div style="margin-left: 0.5rem">/</div>
                                <a href="{{ route('dangky') }}"><div style="margin-left: 0.5rem">Đăng ký</div></a> --}}
                                {{-- @if (Route::has('login'))
                                    <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
                                        @auth
                                            <a href="{{ url('/home') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Home</a>
                                        @else
                                            <a href="{{ route('login') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log in</a>

                                            @if (Route::has('register'))
                                                <a href="{{ route('register') }}" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a>
                                            @endif
                                        @endauth
                                    </div>
                                @endif --}}
                                


                                @if (Route::has('login'))
                                    @auth
                                        <a href="{{ url('/home') }}">Home</a>
                                    @else
                                        <a href="{{ route('login') }}"><div style="margin-left: 0.5rem">Log in</div></a>
                                        <div style="margin-left: 0.5rem">/</div>
                                        @if (Route::has('register'))
                                            <a href="{{ route('register') }}" style="margin-left: 0.5rem;">Register</a>
                                        @endif
                                    @endauth
                                @endif

                                

                            </div>
                        </div>
                    </div>




                    <div style="flex-shrink: 0; border: 2px #fff solid; border-radius: 5px">
                        <a class="dinhdanggiohang" href="{{ route('nguoidung.nguoidung_giohang') }}">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" style="margin: 0.5rem; height: 1.25em; fill: currentColor">
                                <path d="M551.991 64H144.28l-8.726-44.608C133.35 8.128 123.478 0 112 0H12C5.373 0 0 5.373 0 12v24c0 6.627 5.373 12 12 12h80.24l69.594 355.701C150.796 415.201 144 430.802 144 448c0 35.346 28.654 64 64 64s64-28.654 64-64a63.681 63.681 0 0 0-8.583-32h145.167a63.681 63.681 0 0 0-8.583 32c0 35.346 28.654 64 64 64 35.346 0 64-28.654 64-64 0-18.136-7.556-34.496-19.676-46.142l1.035-4.757c3.254-14.96-8.142-29.101-23.452-29.101H203.76l-9.39-48h312.405c11.29 0 21.054-7.869 23.452-18.902l45.216-208C578.695 78.139 567.299 64 551.991 64zM208 472c-13.234 0-24-10.766-24-24s10.766-24 24-24 24 10.766 24 24-10.766 24-24 24zm256 0c-13.234 0-24-10.766-24-24s10.766-24 24-24 24 10.766 24 24-10.766 24-24 24zm23.438-200H184.98l-31.31-160h368.548l-34.78 160z"></path>
                            </svg>
                            <div style="margin: 0.5rem">Giỏ hàng</div>
                            <div class="dinhdangsogiohang">0</div>
                        </a>




                        
                        {{-- <div class="dinhdanggiohang">
                            <a class="dinhdanggiohang" href="{{ route('nguoidung.nguoidung_giohang') }}">
                                <!-- Biểu tượng giỏ hàng và số lượng sản phẩm -->
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" style="margin: 0.5rem; height: 1.25em; fill: currentColor">
                                    <path d="M551.991 64H144.28l-8.726-44.608C133.35 8.128 123.478 0 112 0H12C5.373 0 0 5.373 0 12v24c0 6.627 5.373 12 12 12h80.24l69.594 355.701C150.796 415.201 144 430.802 144 448c0 35.346 28.654 64 64 64s64-28.654 64-64a63.681 63.681 0 0 0-8.583-32h145.167a63.681 63.681 0 0 0-8.583 32c0 35.346 28.654 64 64 64 35.346 0 64-28.654 64-64 0-18.136-7.556-34.496-19.676-46.142l1.035-4.757c3.254-14.960-8.142-29.101-23.452-29.101H203.76l-9.39-48h312.405c11.29 0 21.054-7.869 23.452-18.902l45.216-208C578.695 78.139 567.299 64 551.991 64zM208 472c-13.234 0-24-10.766-24-24s10.766-24 24-24s24 10.766 24 24s-10.766 24-24 24zm256 0c-13.234 0-24-10.766-24-24s10.766-24 24-24s24 10.766 24 24s-10.766 24-24 24zm23.438-200H184.98l-31.31-160h368.548l-34.78-160z"></path>
                                </svg>
                                <div style="margin: 0.5rem">Giỏ hàng</div>
                                <div class="dinhdangsogiohang">{{ $cartItemCount }}</div>
                            </a>
                        </div> --}}
                    </div>




                    
                </div>
                <div class="didangdongthanghang" style="margin-top: 2.25rem">
                    <a class="dongthanghang" href="_blank">
                        <i class="fa-solid fa-eye"></i>
                        <div style="margin-left: 0.75rem">Sản phẩm bạn vừa xem</div>
                    </a>
                    <a class="dongthanghang" href="_blank">
                        <i class="fa-solid fa-fire-flame-curved"></i>
                        <div style="margin-left: 0.75rem">Sản phẩm mua nhiều</div>
                    </a>
                    <a class="dongthanghang" href="_blank">
                        <i class="fa-solid fa-percent"></i>
                        <div style="margin-left: 0.75rem">Sản phẩm khuyến mại</div>
                    </a>
                    <a href="_blank" target="_blank" rel="noreferrer" class="dongthanghang">
                        <i class="fa-solid fa-map-location-dot"></i>
                        <div style="margin-left: 0.75rem">Đại lý giao dịch</div>
                    </a>
                    <a class="dongthanghang" href="_blank">
                        <i class="fa-solid fa-credit-card"></i>
                        <div style="margin-left: 0.75rem">Hình thức thanh toán</div>
                    </a>
                </div>
            </div>
        </div>
    </header>
    <!-- Thêm JavaScript để cập nhật số lượng sản phẩm -->
    <script>
        // Lấy số lượng sản phẩm từ biến hoặc hệ thống quản lý giỏ hàng
        let cartItemCount = 0; // Đây là ví dụ, bạn cần thay đổi giá trị này thành số lượng thực tế trong giỏ hàng của bạn

        // Cập nhật số lượng sản phẩm trong biểu tượng giỏ hàng
        function updateCartItemCount() {
            const cartItemCountElement = document.querySelector('.dinhdangsogiohang');
            cartItemCountElement.textContent = cartItemCount.toString();
        }

        // Gọi hàm cập nhật số lượng sản phẩm khi trang web được tải
        window.addEventListener('load', updateCartItemCount);

        // Đoạn JavaScript ở đây sẽ xử lý các sự kiện thêm sản phẩm vào giỏ hàng và cập nhật cartItemCount
    </script>

    
    @yield('content')
    @extends('layouts.nguoidung_footer')
    

