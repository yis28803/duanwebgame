<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet"
        crossorigin="anonymous" />
    <link href="css/app.css') }}" rel="stylesheet" />
    {{-- <link rel="stylesheet" href="bootstrap-4.0.0-dist/css/bootstrap.min.css" /> --}}
    <link rel="stylesheet" href="{{ asset('css/fontawesome/css/all.min.css') }}" />
    {{-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" />

    <link rel="stylesheet" href="plugins/bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" href="plugins/fontawesome-free-6.4.2-web/css/all.min.css" />
    <link rel="stylesheet" href="plugins/bootstrap-5.3.0-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" /> --}}
    <title>@yield('title', 'Online Store')</title>
    <style>
        .crossed-out {
            text-decoration: line-through;
            color: rgba(0, 0, 0, 0.5);
        }

        .enlarge-btn {
            background: red;
            width: 160px;
            /* Tùy chỉnh theo nhu cầu */
            height: 60px;
            /* Tùy chỉnh theo nhu cầu */
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .oval-border {
            display: inline-block;
            padding: 5px 15px;
            border-radius: 50px;
            border: 1px solid white;
        }

        .small-icon {
            width: 30px;
            /* Tùy chỉnh kích thước theo nhu cầu */
            height: 30px;
            /* Tùy chỉnh kích thước theo nhu cầu */
        }
    </style>
</head>

<body>
    <section style="background: #0a59cc">
        <div class="container">
            <div class="row">
                <div class="col">
                    <p>Mua drive giá rẻ</p>
                </div>
                <div class="col">
                    <i class="fa-solid fa-book"></i>
                    <p style="display: inline">Hướng dẫn mua hàng</p>
                    <i class="fa-solid fa-laptop-medical"></i>
                    <p style="display: inline">Ưu đãi khánh hàng</p>
                    <i class="fa-solid fa-phone"></i>
                    <p style="display: inline">Thông tin liên hệ</p>
                </div>
            </div>
        </div>
    </section>

    <section style="background: rgba(59,130,246)">
        <br>
        <div class="container">
            <div class="row">
                <div class="col-3 text-light">
                    <i class="fa-solid fa-dragon"></i>
                    <h5 style="display: inline">Divine Shop</h5>
                </div>
                <div class="col-4 text-light">
                    <form class="d-flex my-2 my-lg-0">
                        <input class="form-control me-sm-2" type="text" placeholder="Search">
                        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                    </form>

                </div>
                <div class="col-3 text-light">
                    <i class="fa-solid fa-dragon"></i>
                    <h5 style="display: inline">Divine Shop</h5>
                </div>
                <div class="col-2">
                    <button style="background: red" class="btn text-light" type="submit">
                        <i class="fa-solid fa-cart-shopping"></i>
                        Giỏ hàng</button>
                </div>
            </div>
            <br>
            <div class="row text-light">
                <div class="col">
                    <i class="fa-solid fa-eye"></i>
                    <h5 style="display: inline">Sản phẩm bạn vừa xem</h5>
                </div>

                <div class="col">
                    <i class="fa-solid fa-fire-flame-curved"></i>
                    <h5 style="display: inline">Sản phẩm mua nhiều</h5>
                </div>

                <div class="col">
                    <i class="fa-solid fa-percent"></i>
                    <h5 style="display: inline">Sản phẩm khuyến mãi</h5>
                </div>

                <div class="col">
                    <i class="fa-solid fa-map-location-dot"></i>
                    <h5 style="display: inline">Đại lý giao dịch</h5>
                </div>

                <div class="col">
                    <i class="fa-solid fa-credit-card"></i>
                    <h5 style="display: inline">Hình thức thanh toán</h5>
                </div>
            </div>
        </div>
        <br>
    </section>

    <section><br>
        <div class="container">
            <div class="row">
                <div class="col-4">
                    <i class="fa-solid fa-bars"></i>
                    <h5 style="display: inline">Danh mục sản phẩm</h5>
                </div>
                <div class="col-8">
                    <a href="https://divineshop.vn/tin-tuc" target="_blank" rel="noreferrer"><img loading="lazy"
                            src="https://cdn.divineshop.vn/image/catalog/Anh/Icon svg/Nap-thesvg-30724.svg?hash=1640449820"
                            alt="Thủ thuật &amp; Tin Tức">
                        <div style="display: inline">Thủ thuật &amp; Tin Tức</div>
                    </a>
                    <a href="https://help.divineshop.vn/gioi-thieu/chuong-trinh-gioi-thieu-ban-be" target="_blank"
                        rel="noreferrer"><img loading="lazy"
                            src="https://cdn.divineshop.vn/image/catalog/Anh/Icon svg/Gioi-thieu-ban-be-87652.svg?hash=1640449820"
                            class="Ub ob Ja yc" alt="Giới thiệu bạn bè">
                        <div style="display: inline">Giới thiệu bạn bè</div>
                    </a>
                    <i class="fa-solid fa-bars"></i>
                    <h5 style="display: inline">Liên hệ hợp tác</h5>
                    <i class="fa-solid fa-bars"></i>
                    <h5 style="display: inline">Ưu đãi khách hàng Vip</h5>
                </div>
            </div>
        </div><br>
    </section>

    <section style="background: #f2f1f1">
        <div class="container">
            <br>
            <div class="row">
                <div class="col-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="card-title">
                                <a href="#" class="text-dark">
                                    <i class="fa-solid fa-gamepad"></i>
                                    <h5 style="display: inline">Giải trí</h5>
                                    <br>
                                </a>
                                <a href="#" class="text-dark">
                                    <i class="fa-solid fa-briefcase"></i>
                                    <h5 style="display: inline">Làm việc</h5>
                                    <br>
                                </a>
                                <a href="#" class="text-dark">
                                    <i class="fa-solid fa-graduation-cap"></i>
                                    <h5 style="display: inline">Học tập</h5>
                                    <br>
                                </a>
                                <a href="#" class="text-dark">
                                    <i class="fa-brands fa-steam"></i>
                                    <h5 style="display: inline">Game Steam</h5>
                                    <br>
                                </a>
                                <a href="#" class="text-dark">
                                    <i class="fa-solid fa-gamepad"></i>
                                    <h5 style="display: inline">EA Games</h5>
                                    <br>
                                </a>
                                <a href="#" class="text-dark">
                                    <i class="fa-solid fa-paperclip"></i>
                                    <h5 style="display: inline">Window, Office</h5>
                                    <br>
                                </a>
                                <a href="#" class="text-dark">
                                    <i class="fa-brands fa-google-drive"></i>
                                    <h5 style="display: inline">Google Drive</h5>
                                    <br>
                                </a>
                                <a href="#" class="text-dark">
                                    <i class="fa-brands fa-square-steam"></i>
                                    <h5 style="display: inline">Steam Wallet</h5>
                                    <br>
                                </a>
                                <a href="#" class="text-dark">
                                    <i class="fa-solid fa-wifi"></i>
                                    <h5 style="display: inline">Gói Data Mobile</h5>
                                    <br>
                                </a>
                                <a href="#" class="text-dark">
                                    <i class="fa-brands fa-google-play"></i>
                                    <h5 style="display: inline">Google Play, iTunes</h5>

                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-5 mb-2">
                    <img src="img/game.png" class="img-fluid rounded" style="height: 285px; width: 500px;">
                </div>
                <div class="col-3">
                    <div class="col">
                        <img src="img/VPN (1)-41190.png" class="img-fluid rounded"
                            style="height: 130px; width: 250px;">
                    </div>

                    <br>
                    <div class="col">
                        <img src="img/Spotify (1)-63835.png" class="img-fluid rounded"
                            style="height: 130px; width: 250px;">
                    </div>
                    <br>
                </div>

                <div class="col-3">
                    <img src="img/Steam (1)-22335.png" class="img-fluid rounded"
                        style="height: 130px; width: 250px;">
                </div>
                <div class="col">
                    <img src="img/GPT (1)-20369.png" class="img-fluid rounded" style="height: 130px; width: 250px;">
                </div>
                <div class="col">
                    <img src="img/gmail (1)-29250.png" class="img-fluid rounded"
                        style="height: 130px; width: 250px;">
                </div>
                <div class="col">
                    <img src="img/Microsoft Office (1)-89159.png" class="img-fluid rounded"
                        style="height: 130px; width: 250px;">
                </div>
            </div>
            <br>
        </div>

        <div class="container">
            <div class="row">
                <div class="col">
                    <h4>Sản phẩm nổi bật</h4>
                    <p>Danh sách những sản phẩm theo
                        xu hướng mà có thể bạn sẽ
                        thích
                    </p>
                </div>
                <div class="col">
                    <div class="text-end">
                        <button style="background: blue" class="btn text-light" type="submit">
                            Khám phá</button>
                    </div>

                </div>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="card" style="background: #f2f1f1; border: none;">
                        <img src="img/Divine-Shop-NETFLIX-1-thang-23298.jpg" class="img-fluid rounded"
                            style="height: 130px; width: 310px;">
                        <div class="card-title">
                            <h5>Tài Khoản Netflix Premium 1 tháng - Xem phim chất lượng 4k và Full HD</h5>
                        </div>
                        <div class="card-title">
                            <h5 style="display: inline">89.000đ</h5>
                            <h5 class="crossed-out" style="display: inline">260.000đ</h5>
                            <font style="border: 1px solid red; background-color: red; color: white;">-66%</font>
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="card" style="background: #f2f1f1; border: none;">
                        <img src="img/Divine-Shop-Goi-Gia-Han-Spotify-1-Nam-40567.jpg" class="img-fluid rounded"
                            style="height: 130px; width: 310px;">
                        <div class="card-title">
                            <h5>Gói gia hạn Spotify Premium 01 năm</h5>
                        </div>
                        <div class="card-title">
                            <h5 style="display: inline">299.000đ</h5>
                            <h5 class="crossed-out" style="display: inline">590.000đ</h5>
                            <font style="border: 1px solid red; background-color: red; color: white;">-49%</font>
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="card" style="background: #f2f1f1; border: none;">
                        <img src="img/Divine-Shop-Nang-cap-Zoom-Pro-1-thang-80331.jpg" class="img-fluid rounded"
                            style="height: 130px; width: 310px;">
                        <div class="card-title">
                            <h5>Nâng cấp Tài khoản Zoom Pro 1 tháng</h5>
                        </div>
                        <div class="card-title">
                            <h5 style="display: inline">210.000đ</h5>
                            <h5 class="crossed-out" style="display: inline">350.000đ</h5>
                            <font style="border: 1px solid red; background-color: red; color: white;">-40%</font>
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="card" style="background: rgb(179, 179, 179); border: none;">
                        <img src="img/game.png" class="img-fluid rounded" style="height: 130px; width: 310px;">
                        <div class="card-title">
                            <h5>Nâng cấp tài khoản Zoom</h5>
                        </div>
                        <div class="card-title">
                            <h5 style="display: inline">300.000đ</h5>
                            <h5 class="crossed-out" style="display: inline">590.000đ</h5>
                            <font style="border: 1px solid red; background-color: red; color: white;">-66%</font>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <br>
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="card" style="background: rgb(179, 179, 179); border: none;">
                        <img src="img/game.png" class="img-fluid rounded" style="height: 130px; width: 310px;">
                        <div class="card-title">
                            <h5>Nâng cấp tài khoản Zoom</h5>
                        </div>
                        <div class="card-title">
                            <h5 style="display: inline">300.000đ</h5>
                            <h5 class="crossed-out" style="display: inline">590.000đ</h5>
                            <font style="border: 1px solid red; background-color: red; color: white;">-66%</font>
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="card" style="background: rgb(179, 179, 179); border: none;">
                        <img src="img/game.png" class="img-fluid rounded" style="height: 130px; width: 310px;">
                        <div class="card-title">
                            <h5>Nâng cấp tài khoản Zoom</h5>
                        </div>
                        <div class="card-title">
                            <h5 style="display: inline">300.000đ</h5>
                            <h5 class="crossed-out" style="display: inline">590.000đ</h5>
                            <font style="border: 1px solid red; background-color: red; color: white;">-66%</font>
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="card" style="background: rgb(179, 179, 179); border: none;">
                        <img src="img/game.png" class="img-fluid rounded" style="height: 130px; width: 310px;">
                        <div class="card-title">
                            <h5>Nâng cấp tài khoản Zoom</h5>
                        </div>
                        <div class="card-title">
                            <h5 style="display: inline">300.000đ</h5>
                            <h5 class="crossed-out" style="display: inline">590.000đ</h5>
                            <font style="border: 1px solid red; background-color: red; color: white;">-66%</font>
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="card" style="background: rgb(179, 179, 179); border: none;">
                        <img src="img/game.png" class="img-fluid rounded" style="height: 130px; width: 310px;">
                        <div class="card-title">
                            <h5>Nâng cấp tài khoản Zoom</h5>
                        </div>
                        <div class="card-title">
                            <h5 style="display: inline">300.000đ</h5>
                            <h5 class="crossed-out" style="display: inline">590.000đ</h5>
                            <font style="border: 1px solid red; background-color: red; color: white;">-66%</font>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <br>
        <h5 style="color: blue;" class="text-center">Xem thêm</h5>
        <br>
        <hr>
        <br>
        <br>

        <div class="container">
            <h4>Từ khóa nổi bật</h4>
            <div class="row">
                <div class="col">
                    <button class="btn text-light enlarge-btn" type="submit">
                        Làm việc
                    </button>
                </div>
                <div class="col">
                    <button class="btn text-light enlarge-btn" type="submit">
                        Làm việc
                    </button>
                </div>
                <div class="col">
                    <button class="btn text-light enlarge-btn" type="submit">
                        Làm việc
                    </button>
                </div>
                <div class="col">
                    <button class="btn text-light enlarge-btn" type="submit">
                        Làm việc
                    </button>
                </div>
                <div class="col">
                    <button class="btn text-light enlarge-btn" type="submit">
                        Làm việc
                    </button>
                </div>
                <div class="col">
                    <button class="btn text-light enlarge-btn" type="submit">
                        Làm việc
                    </button>
                </div>
            </div>
            <br>
            <br>
        </div>


    </section>

    <section style="background-image: url(img/hinhto.jpg); height: 750px;">
        <div class="container">
            <br>
            <br>
            <br>
            <br>
            <br>
            <div class="row">
                <div class="col">
                    <font class="oval-border">
                        <i class="fa-solid fa-book text-danger fa-1x"></i>
                        <h4 class="text-light" style="display: inline">#Sản phẩm bán chạy nhất</h4>
                    </font>
                </div>
                <div class="col">
                    <div class="text-end">
                        <button style="background: blue" class="btn text-light" type="submit">
                            Khám phá</button>
                    </div>

                </div>
            </div>
            <br>
            <div class="row">
                <div class="col">
                    <div class="card" style="background: rgb(179, 179, 179); border: none;">
                        <img src="img/game.png" class="img-fluid rounded" style="height: 130px; width: 310px;">
                        <div class="card-title">
                            <h5>Nâng cấp tài khoản Zoom</h5>
                        </div>
                        <div class="card-title">
                            <h5 style="display: inline">300.000đ</h5>
                            <h5 class="crossed-out" style="display: inline">590.000đ</h5>
                            <font style="border: 1px solid red; background-color: red; color: white;">-66%</font>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card" style="background: rgb(179, 179, 179); border: none;">
                        <img src="img/game.png" class="img-fluid rounded" style="height: 130px; width: 310px;">
                        <div class="card-title">
                            <h5>Nâng cấp tài khoản Zoom</h5>
                        </div>
                        <div class="card-title">
                            <h5 style="display: inline">300.000đ</h5>
                            <h5 class="crossed-out" style="display: inline">590.000đ</h5>
                            <font style="border: 1px solid red; background-color: red; color: white;">-66%</font>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card" style="background: rgb(179, 179, 179); border: none;">
                        <img src="img/game.png" class="img-fluid rounded" style="height: 130px; width: 310px;">
                        <div class="card-title">
                            <h5>Nâng cấp tài khoản Zoom</h5>
                        </div>
                        <div class="card-title">
                            <h5 style="display: inline">300.000đ</h5>
                            <h5 class="crossed-out" style="display: inline">590.000đ</h5>
                            <font style="border: 1px solid red; background-color: red; color: white;">-66%</font>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card" style="background: rgb(179, 179, 179); border: none;">
                        <img src="img/game.png" class="img-fluid rounded" style="height: 130px; width: 310px;">
                        <div class="card-title">
                            <h5>Nâng cấp tài khoản Zoom</h5>
                        </div>
                        <div class="card-title">
                            <h5 style="display: inline">300.000đ</h5>
                            <h5 class="crossed-out" style="display: inline">590.000đ</h5>
                            <font style="border: 1px solid red; background-color: red; color: white;">-66%</font>
                        </div>
                    </div>
                </div>
            </div>
            <br><br>
            <div class="row">
                <div class="col">
                    <div class="card" style="background: rgb(179, 179, 179); border: none;">
                        <img src="img/game.png" class="img-fluid rounded" style="height: 130px; width: 310px;">
                        <div class="card-title">
                            <h5>Nâng cấp tài khoản Zoom</h5>
                        </div>
                        <div class="card-title">
                            <h5 style="display: inline">300.000đ</h5>
                            <h5 class="crossed-out" style="display: inline">590.000đ</h5>
                            <font style="border: 1px solid red; background-color: red; color: white;">-66%</font>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card" style="background: rgb(179, 179, 179); border: none;">
                        <img src="img/game.png" class="img-fluid rounded" style="height: 130px; width: 310px;">
                        <div class="card-title">
                            <h5>Nâng cấp tài khoản Zoom</h5>
                        </div>
                        <div class="card-title">
                            <h5 style="display: inline">300.000đ</h5>
                            <h5 class="crossed-out" style="display: inline">590.000đ</h5>
                            <font style="border: 1px solid red; background-color: red; color: white;">-66%</font>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card" style="background: rgb(179, 179, 179); border: none;">
                        <img src="img/game.png" class="img-fluid rounded" style="height: 130px; width: 310px;">
                        <div class="card-title">
                            <h5>Nâng cấp tài khoản Zoom</h5>
                        </div>
                        <div class="card-title">
                            <h5 style="display: inline">300.000đ</h5>
                            <h5 class="crossed-out" style="display: inline">590.000đ</h5>
                            <font style="border: 1px solid red; background-color: red; color: white;">-66%</font>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card" style="background: rgb(179, 179, 179); border: none;">
                        <img src="img/game.png" class="img-fluid rounded" style="height: 130px; width: 310px;">
                        <div class="card-title">
                            <h5>Nâng cấp tài khoản Zoom</h5>
                        </div>
                        <div class="card-title">
                            <h5 style="display: inline">300.000đ</h5>
                            <h5 class="crossed-out" style="display: inline">590.000đ</h5>
                            <font style="border: 1px solid red; background-color: red; color: white;">-66%</font>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>




    <section style="background: #f2f1f1">
        <div class="container">
            <br>
            <br>
            <div class="row">
                <div class="col">
                    <h4>Sản phẩm nổi bật</h4>
                    <p>Danh sách những sản phẩm theo
                        xu hướng mà có thể bạn sẽ
                        thích
                    </p>
                </div>
                <div class="col">
                    <div class="text-end">
                        <button style="background: blue" class="btn text-light" type="submit">
                            Khám phá</button>
                    </div>

                </div>
            </div>
        </div>
        <br>

        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="card" style="border: none;">
                        <img src="img/game.png" class="img-fluid rounded" style="height: 130px; width: 420px;">
                        <div class="card-title">
                            <h5>Nâng cấp tài khoản Zoom</h5>
                        </div>
                        <div class="card-text">
                            <p>Steam Wallet Code 80 HKD (~243.200 VNĐ)</p>
                        </div>
                        <br>
                        <div class="card-title">
                            <h5 style="display: inline">300.000đ</h5>
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="card" style="border: none;">
                        <img src="img/game.png" class="img-fluid rounded" style="height: 130px; width: 420px;">
                        <div class="card-title">
                            <h5>Nâng cấp tài khoản Zoom</h5>
                        </div>
                        <div class="card-text">
                            <p>Steam Wallet Code 80 HKD (~243.200 VNĐ)</p>
                        </div>
                        <br>
                        <div class="card-title">
                            <h5 style="display: inline">300.000đ</h5>
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="card" style="border: none;">
                        <img src="img/game.png" class="img-fluid rounded" style="height: 130px; width: 420px;">
                        <div class="card-title">
                            <h5>Nâng cấp tài khoản Zoom</h5>
                        </div>
                        <div class="card-text">
                            <p>Steam Wallet Code 80 HKD (~243.200 VNĐ)</p>
                        </div>
                        <br>
                        <div class="card-title">
                            <h5 style="display: inline">300.000đ</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <br>

        <div class="container">
            <h4>Từ khóa nổi bật</h4>
            <div class="row">
                <div class="col">
                    <button class="btn text-light enlarge-btn" type="submit">
                        Làm việc
                    </button>
                </div>
                <div class="col">
                    <button class="btn text-light enlarge-btn" type="submit">
                        Làm việc
                    </button>
                </div>
                <div class="col">
                    <button class="btn text-light enlarge-btn" type="submit">
                        Làm việc
                    </button>
                </div>
                <div class="col">
                    <button class="btn text-light enlarge-btn" type="submit">
                        Làm việc
                    </button>
                </div>
                <div class="col">
                    <button class="btn text-light enlarge-btn" type="submit">
                        Làm việc
                    </button>
                </div>
                <div class="col">
                    <button class="btn text-light enlarge-btn" type="submit">
                        Làm việc
                    </button>
                </div>
            </div>
            <br>
            <br>
        </div>

        <div class="container">
            <div class="row">
                <div class="col">
                    <h4>Sản phẩm nổi bật</h4>
                    <p>Danh sách những sản phẩm theo
                        xu hướng mà có thể bạn sẽ
                        thích
                    </p>
                </div>
                <div class="col">
                    <div class="text-end">
                        <button style="background: blue" class="btn text-light" type="submit">
                            Khám phá</button>
                    </div>

                </div>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="card" style="background: rgb(179, 179, 179); border: none;">
                        <img src="img/game.png" class="img-fluid rounded" style="height: 130px; width: 310px;">
                        <div class="card-title">
                            <h5>Nâng cấp tài khoản Zoom</h5>
                        </div>
                        <div class="card-title">
                            <h5 style="display: inline">300.000đ</h5>
                            <h5 class="crossed-out" style="display: inline">590.000đ</h5>
                            <font style="border: 1px solid red; background-color: red; color: white;">-66%</font>
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="card" style="background: rgb(179, 179, 179); border: none;">
                        <img src="img/game.png" class="img-fluid rounded" style="height: 130px; width: 310px;">
                        <div class="card-title">
                            <h5>Nâng cấp tài khoản Zoom</h5>
                        </div>
                        <div class="card-title">
                            <h5 style="display: inline">300.000đ</h5>
                            <h5 class="crossed-out" style="display: inline">590.000đ</h5>
                            <font style="border: 1px solid red; background-color: red; color: white;">-66%</font>
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="card" style="background: rgb(179, 179, 179); border: none;">
                        <img src="img/game.png" class="img-fluid rounded" style="height: 130px; width: 310px;">
                        <div class="card-title">
                            <h5>Nâng cấp tài khoản Zoom</h5>
                        </div>
                        <div class="card-title">
                            <h5 style="display: inline">300.000đ</h5>
                            <h5 class="crossed-out" style="display: inline">590.000đ</h5>
                            <font style="border: 1px solid red; background-color: red; color: white;">-66%</font>
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="card" style="background: rgb(179, 179, 179); border: none;">
                        <img src="img/game.png" class="img-fluid rounded" style="height: 130px; width: 310px;">
                        <div class="card-title">
                            <h5>Nâng cấp tài khoản Zoom</h5>
                        </div>
                        <div class="card-title">
                            <h5 style="display: inline">300.000đ</h5>
                            <h5 class="crossed-out" style="display: inline">590.000đ</h5>
                            <font style="border: 1px solid red; background-color: red; color: white;">-66%</font>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <br>
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="card" style="background: rgb(179, 179, 179); border: none;">
                        <img src="img/game.png" class="img-fluid rounded" style="height: 130px; width: 310px;">
                        <div class="card-title">
                            <h5>Nâng cấp tài khoản Zoom</h5>
                        </div>
                        <div class="card-title">
                            <h5 style="display: inline">300.000đ</h5>
                            <h5 class="crossed-out" style="display: inline">590.000đ</h5>
                            <font style="border: 1px solid red; background-color: red; color: white;">-66%</font>
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="card" style="background: rgb(179, 179, 179); border: none;">
                        <img src="img/game.png" class="img-fluid rounded" style="height: 130px; width: 310px;">
                        <div class="card-title">
                            <h5>Nâng cấp tài khoản Zoom</h5>
                        </div>
                        <div class="card-title">
                            <h5 style="display: inline">300.000đ</h5>
                            <h5 class="crossed-out" style="display: inline">590.000đ</h5>
                            <font style="border: 1px solid red; background-color: red; color: white;">-66%</font>
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="card" style="background: rgb(179, 179, 179); border: none;">
                        <img src="img/game.png" class="img-fluid rounded" style="height: 130px; width: 310px;">
                        <div class="card-title">
                            <h5>Nâng cấp tài khoản Zoom</h5>
                        </div>
                        <div class="card-title">
                            <h5 style="display: inline">300.000đ</h5>
                            <h5 class="crossed-out" style="display: inline">590.000đ</h5>
                            <font style="border: 1px solid red; background-color: red; color: white;">-66%</font>
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="card" style="background: rgb(179, 179, 179); border: none;">
                        <img src="img/game.png" class="img-fluid rounded" style="height: 130px; width: 310px;">
                        <div class="card-title">
                            <h5>Nâng cấp tài khoản Zoom</h5>
                        </div>
                        <div class="card-title">
                            <h5 style="display: inline">300.000đ</h5>
                            <h5 class="crossed-out" style="display: inline">590.000đ</h5>
                            <font style="border: 1px solid red; background-color: red; color: white;">-66%</font>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <br>
        <h5 style="color: blue;" class="text-center">Xem thêm</h5>
        <br>
        <hr>
        <br>

        <div class="container">
            <div class="row">
                <div class="col">
                    <h4>Sản phẩm nổi bật</h4>
                    <p>Danh sách những sản phẩm theo
                        xu hướng mà có thể bạn sẽ
                        thích
                    </p>
                </div>
                <div class="col">
                    <div class="text-end">
                        <button style="background: blue" class="btn text-light" type="submit">
                            Khám phá</button>
                    </div>

                </div>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="card" style="background: rgb(179, 179, 179); border: none;">
                        <img src="img/game.png" class="img-fluid rounded" style="height: 130px; width: 310px;">
                        <div class="card-title">
                            <h5>Nâng cấp tài khoản Zoom</h5>
                        </div>
                        <div class="card-title">
                            <h5 style="display: inline">300.000đ</h5>
                            <h5 class="crossed-out" style="display: inline">590.000đ</h5>
                            <font style="border: 1px solid red; background-color: red; color: white;">-66%</font>
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="card" style="background: rgb(179, 179, 179); border: none;">
                        <img src="img/game.png" class="img-fluid rounded" style="height: 130px; width: 310px;">
                        <div class="card-title">
                            <h5>Nâng cấp tài khoản Zoom</h5>
                        </div>
                        <div class="card-title">
                            <h5 style="display: inline">300.000đ</h5>
                            <h5 class="crossed-out" style="display: inline">590.000đ</h5>
                            <font style="border: 1px solid red; background-color: red; color: white;">-66%</font>
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="card" style="background: rgb(179, 179, 179); border: none;">
                        <img src="img/game.png" class="img-fluid rounded" style="height: 130px; width: 310px;">
                        <div class="card-title">
                            <h5>Nâng cấp tài khoản Zoom</h5>
                        </div>
                        <div class="card-title">
                            <h5 style="display: inline">300.000đ</h5>
                            <h5 class="crossed-out" style="display: inline">590.000đ</h5>
                            <font style="border: 1px solid red; background-color: red; color: white;">-66%</font>
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="card" style="background: rgb(179, 179, 179); border: none;">
                        <img src="img/game.png" class="img-fluid rounded" style="height: 130px; width: 310px;">
                        <div class="card-title">
                            <h5>Nâng cấp tài khoản Zoom</h5>
                        </div>
                        <div class="card-title">
                            <h5 style="display: inline">300.000đ</h5>
                            <h5 class="crossed-out" style="display: inline">590.000đ</h5>
                            <font style="border: 1px solid red; background-color: red; color: white;">-66%</font>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <br>
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="card" style="background: rgb(179, 179, 179); border: none;">
                        <img src="img/game.png" class="img-fluid rounded" style="height: 130px; width: 310px;">
                        <div class="card-title">
                            <h5>Nâng cấp tài khoản Zoom</h5>
                        </div>
                        <div class="card-title">
                            <h5 style="display: inline">300.000đ</h5>
                            <h5 class="crossed-out" style="display: inline">590.000đ</h5>
                            <font style="border: 1px solid red; background-color: red; color: white;">-66%</font>
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="card" style="background: rgb(179, 179, 179); border: none;">
                        <img src="img/game.png" class="img-fluid rounded" style="height: 130px; width: 310px;">
                        <div class="card-title">
                            <h5>Nâng cấp tài khoản Zoom</h5>
                        </div>
                        <div class="card-title">
                            <h5 style="display: inline">300.000đ</h5>
                            <h5 class="crossed-out" style="display: inline">590.000đ</h5>
                            <font style="border: 1px solid red; background-color: red; color: white;">-66%</font>
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="card" style="background: rgb(179, 179, 179); border: none;">
                        <img src="img/game.png" class="img-fluid rounded" style="height: 130px; width: 310px;">
                        <div class="card-title">
                            <h5>Nâng cấp tài khoản Zoom</h5>
                        </div>
                        <div class="card-title">
                            <h5 style="display: inline">300.000đ</h5>
                            <h5 class="crossed-out" style="display: inline">590.000đ</h5>
                            <font style="border: 1px solid red; background-color: red; color: white;">-66%</font>
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="card" style="background: rgb(179, 179, 179); border: none;">
                        <img src="img/game.png" class="img-fluid rounded" style="height: 130px; width: 310px;">
                        <div class="card-title">
                            <h5>Nâng cấp tài khoản Zoom</h5>
                        </div>
                        <div class="card-title">
                            <h5 style="display: inline">300.000đ</h5>
                            <h5 class="crossed-out" style="display: inline">590.000đ</h5>
                            <font style="border: 1px solid red; background-color: red; color: white;">-66%</font>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <br>
        <h5 style="color: blue;" class="text-center">Xem thêm</h5>
        <br>
        <hr>
        <br>

        <div class="container">
            <div class="row">
                <div class="col">
                    <h4>Sản phẩm nổi bật</h4>
                    <p>Danh sách những sản phẩm theo
                        xu hướng mà có thể bạn sẽ
                        thích
                    </p>
                </div>
                <div class="col">
                    <div class="text-end">
                        <button style="background: blue" class="btn text-light" type="submit">
                            Khám phá</button>
                    </div>

                </div>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="card" style="background: rgb(179, 179, 179); border: none;">
                        <img src="img/game.png" class="img-fluid rounded" style="height: 130px; width: 310px;">
                        <div class="card-title">
                            <h5>Nâng cấp tài khoản Zoom</h5>
                        </div>
                        <div class="card-title">
                            <h5 style="display: inline">300.000đ</h5>
                            <h5 class="crossed-out" style="display: inline">590.000đ</h5>
                            <font style="border: 1px solid red; background-color: red; color: white;">-66%</font>
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="card" style="background: rgb(179, 179, 179); border: none;">
                        <img src="img/game.png" class="img-fluid rounded" style="height: 130px; width: 310px;">
                        <div class="card-title">
                            <h5>Nâng cấp tài khoản Zoom</h5>
                        </div>
                        <div class="card-title">
                            <h5 style="display: inline">300.000đ</h5>
                            <h5 class="crossed-out" style="display: inline">590.000đ</h5>
                            <font style="border: 1px solid red; background-color: red; color: white;">-66%</font>
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="card" style="background: rgb(179, 179, 179); border: none;">
                        <img src="img/game.png" class="img-fluid rounded" style="height: 130px; width: 310px;">
                        <div class="card-title">
                            <h5>Nâng cấp tài khoản Zoom</h5>
                        </div>
                        <div class="card-title">
                            <h5 style="display: inline">300.000đ</h5>
                            <h5 class="crossed-out" style="display: inline">590.000đ</h5>
                            <font style="border: 1px solid red; background-color: red; color: white;">-66%</font>
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="card" style="background: rgb(179, 179, 179); border: none;">
                        <img src="img/game.png" class="img-fluid rounded" style="height: 130px; width: 310px;">
                        <div class="card-title">
                            <h5>Nâng cấp tài khoản Zoom</h5>
                        </div>
                        <div class="card-title">
                            <h5 style="display: inline">300.000đ</h5>
                            <h5 class="crossed-out" style="display: inline">590.000đ</h5>
                            <font style="border: 1px solid red; background-color: red; color: white;">-66%</font>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <br>
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="card" style="background: rgb(179, 179, 179); border: none;">
                        <img src="img/game.png" class="img-fluid rounded" style="height: 130px; width: 310px;">
                        <div class="card-title">
                            <h5>Nâng cấp tài khoản Zoom</h5>
                        </div>
                        <div class="card-title">
                            <h5 style="display: inline">300.000đ</h5>
                            <h5 class="crossed-out" style="display: inline">590.000đ</h5>
                            <font style="border: 1px solid red; background-color: red; color: white;">-66%</font>
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="card" style="background: rgb(179, 179, 179); border: none;">
                        <img src="img/game.png" class="img-fluid rounded" style="height: 130px; width: 310px;">
                        <div class="card-title">
                            <h5>Nâng cấp tài khoản Zoom</h5>
                        </div>
                        <div class="card-title">
                            <h5 style="display: inline">300.000đ</h5>
                            <h5 class="crossed-out" style="display: inline">590.000đ</h5>
                            <font style="border: 1px solid red; background-color: red; color: white;">-66%</font>
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="card" style="background: rgb(179, 179, 179); border: none;">
                        <img src="img/game.png" class="img-fluid rounded" style="height: 130px; width: 310px;">
                        <div class="card-title">
                            <h5>Nâng cấp tài khoản Zoom</h5>
                        </div>
                        <div class="card-title">
                            <h5 style="display: inline">300.000đ</h5>
                            <h5 class="crossed-out" style="display: inline">590.000đ</h5>
                            <font style="border: 1px solid red; background-color: red; color: white;">-66%</font>
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="card" style="background: rgb(179, 179, 179); border: none;">
                        <img src="img/game.png" class="img-fluid rounded" style="height: 130px; width: 310px;">
                        <div class="card-title">
                            <h5>Nâng cấp tài khoản Zoom</h5>
                        </div>
                        <div class="card-title">
                            <h5 style="display: inline">300.000đ</h5>
                            <h5 class="crossed-out" style="display: inline">590.000đ</h5>
                            <font style="border: 1px solid red; background-color: red; color: white;">-66%</font>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <br>
        <h5 style="color: blue;" class="text-center">Xem thêm</h5>
        <br>
        <hr>
        <br>

        <div class="container">
            <div class="row">
                <div class="col">
                    <h4>Sản phẩm nổi bật</h4>
                    <p>Danh sách những sản phẩm theo
                        xu hướng mà có thể bạn sẽ
                        thích
                    </p>
                </div>
                <div class="col">
                    <div class="text-end">
                        <button style="background: blue" class="btn text-light" type="submit">
                            Khám phá</button>
                    </div>

                </div>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="card" style="background: rgb(179, 179, 179); border: none;">
                        <img src="img/game.png" class="img-fluid rounded" style="height: 130px; width: 310px;">
                        <div class="card-title">
                            <h5>Nâng cấp tài khoản Zoom</h5>
                        </div>
                        <div class="card-title">
                            <h5 style="display: inline">300.000đ</h5>
                            <h5 class="crossed-out" style="display: inline">590.000đ</h5>
                            <font style="border: 1px solid red; background-color: red; color: white;">-66%</font>
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="card" style="background: rgb(179, 179, 179); border: none;">
                        <img src="img/game.png" class="img-fluid rounded" style="height: 130px; width: 310px;">
                        <div class="card-title">
                            <h5>Nâng cấp tài khoản Zoom</h5>
                        </div>
                        <div class="card-title">
                            <h5 style="display: inline">300.000đ</h5>
                            <h5 class="crossed-out" style="display: inline">590.000đ</h5>
                            <font style="border: 1px solid red; background-color: red; color: white;">-66%</font>
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="card" style="background: rgb(179, 179, 179); border: none;">
                        <img src="img/game.png" class="img-fluid rounded" style="height: 130px; width: 310px;">
                        <div class="card-title">
                            <h5>Nâng cấp tài khoản Zoom</h5>
                        </div>
                        <div class="card-title">
                            <h5 style="display: inline">300.000đ</h5>
                            <h5 class="crossed-out" style="display: inline">590.000đ</h5>
                            <font style="border: 1px solid red; background-color: red; color: white;">-66%</font>
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="card" style="background: rgb(179, 179, 179); border: none;">
                        <img src="img/game.png" class="img-fluid rounded" style="height: 130px; width: 310px;">
                        <div class="card-title">
                            <h5>Nâng cấp tài khoản Zoom</h5>
                        </div>
                        <div class="card-title">
                            <h5 style="display: inline">300.000đ</h5>
                            <h5 class="crossed-out" style="display: inline">590.000đ</h5>
                            <font style="border: 1px solid red; background-color: red; color: white;">-66%</font>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <br>
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="card" style="background: rgb(179, 179, 179); border: none;">
                        <img src="img/game.png" class="img-fluid rounded" style="height: 130px; width: 310px;">
                        <div class="card-title">
                            <h5>Nâng cấp tài khoản Zoom</h5>
                        </div>
                        <div class="card-title">
                            <h5 style="display: inline">300.000đ</h5>
                            <h5 class="crossed-out" style="display: inline">590.000đ</h5>
                            <font style="border: 1px solid red; background-color: red; color: white;">-66%</font>
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="card" style="background: rgb(179, 179, 179); border: none;">
                        <img src="img/game.png" class="img-fluid rounded" style="height: 130px; width: 310px;">
                        <div class="card-title">
                            <h5>Nâng cấp tài khoản Zoom</h5>
                        </div>
                        <div class="card-title">
                            <h5 style="display: inline">300.000đ</h5>
                            <h5 class="crossed-out" style="display: inline">590.000đ</h5>
                            <font style="border: 1px solid red; background-color: red; color: white;">-66%</font>
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="card" style="background: rgb(179, 179, 179); border: none;">
                        <img src="img/game.png" class="img-fluid rounded" style="height: 130px; width: 310px;">
                        <div class="card-title">
                            <h5>Nâng cấp tài khoản Zoom</h5>
                        </div>
                        <div class="card-title">
                            <h5 style="display: inline">300.000đ</h5>
                            <h5 class="crossed-out" style="display: inline">590.000đ</h5>
                            <font style="border: 1px solid red; background-color: red; color: white;">-66%</font>
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="card" style="background: rgb(179, 179, 179); border: none;">
                        <img src="img/game.png" class="img-fluid rounded" style="height: 130px; width: 310px;">
                        <div class="card-title">
                            <h5>Nâng cấp tài khoản Zoom</h5>
                        </div>
                        <div class="card-title">
                            <h5 style="display: inline">300.000đ</h5>
                            <h5 class="crossed-out" style="display: inline">590.000đ</h5>
                            <font style="border: 1px solid red; background-color: red; color: white;">-66%</font>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <br>
        <h5 style="color: blue;" class="text-center">Xem thêm</h5>
        <br>
        <hr>
        <br>
    </section>

    <footer>
        <section>
            <div class="container">
                <div class="row">
                    <div class="col">
                    </div>
                </div>
            </div>
        </section>

        <section>
            <div class="container">
                <br>
                <a href="https://www.facebook.com/divineshop.vn">
                    <img loading="lazy" src="https://cdn.divineshop.vn/static/4ba68c7a47305b454732e1a9e9beb8a1.svg"
                        class="small-icon" alt="Facebook" title="Facebook">
                </a>
                <a target="_blank">
                    <img loading="lazy" src="https://cdn.divineshop.vn/static/20334129395885adefc2e5217043f670.svg"
                        class="small-icon" alt="Youtube" title="Youtube">
                </a>

                <a target="_blank">
                    <img loading="lazy" src="https://cdn.divineshop.vn/static/4ae438165f9d5ea0fc6ff3da6051f938.svg"
                        class="small-icon" alt="Instagram" title="Instagram">
                </a>

                <br>
                <hr>
                <br>
                <div class="row">
                    <div class="col">
                        <h5>Giới thiệu</h5>
                        <a href="#" style="color: black;">Game bản quyền là gì?</a><br>
                        <a href="#" style="color: black;">Giới thiệu Divine Shop</a><br>
                        <a href="#" style="color: black;">Điều khoản dịch vụ</a><br>
                        <a href="#" style="color: black;">Chính sách bảo mật</a><br>
                    </div>
                    <div class="col">
                        <h5>TÀI KHOẢN</h5>
                        <a href="#" style="color: black;">Giỏ hàng</a><br>
                        <a href="#" style="color: black;">Sản phẩm đã mua</a><br>
                        <a href="#" style="color: black;">Chế độ bảo hành</a><br>
                    </div>
                    <div class="col">
                        <h5>LIÊN HỆ</h5>
                        <font>Hotline tự động <a href="#" style="color: red;">1900 633 305</a></font><br>
                        <a href="#" style="color: black;">Liên hệ Hỗ trợ</a><br>
                        <a href="#" style="color: black;">Chat với CSKH</a><br>
                    </div>
                    <div class="col">
                        <br>
                        <h1>Ba Con Báo</h1>
                    </div>
                </div>
            </div>
        </section>
    </footer>

    {{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"> --}}
    {{-- </script> --}}
</body>

</html>
