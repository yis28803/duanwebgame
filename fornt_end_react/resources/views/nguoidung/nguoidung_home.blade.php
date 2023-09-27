
@extends('layouts.nguoidung_header')


@section('content')

<div class="taokhoangcachgiuacacphan">
    <div class="cau2">
      <div class="dinhdangthanghanggiuacacphan">
        <div style="flex-basis: 20.83333333%; height: 320px;">
          <div class="dinhdangphongtodanhmuc">
            @foreach ($listdanhmuc as $dm)
                <a class="bieutuongvachudanhmucthangngang" data-ea="menu_click__0" href="{{ url('/sanphamdanhmuc', ['iddm' => $dm->id]) }}" >
                    <i class="{{ $dm->bieutuong }}" style="margin-right: 0.5rem; min-width: 1.5rem; height: 1.25rem; opacity: 0.5;"></i>
                    <div>{{ $dm->name_dm }}</div>
                </a>
            @endforeach
        </div>
        </div>

        {{-- lsajdaljldjalksjd
    áuifuahfjajkscbkjabjfa
    áiufojlcnkvbjkafagijsf
    àhlkannzxvbkabfgakjsjk
    sfhLCNBNBAKOEGHALDN --}}
  
      <div style="flex-basis: 100%; min-width: 0; flex-basis: 54.16666667%; min-width: 0;">
        <div class="dieuchinhbenngoaiphanslidedown">
            <div class="gophinhanhslidedown">
                <div class="slideshow-container">
                    @foreach ($firstThreeProducts as $product)
                    <a tabindex="-1" href="{{ url('/sanphamct', ['idsp' => $product->id]) }}">
                        <img class="slides" src="{{ asset('storage/' . $product->img) }}" style="width: 100%" />
                    </a>
                    @endforeach
                    
                    <div class="slideshow-controls">
                        <div class="w3-left" onclick="changeSlide(-1)">&#10094;</div>
                        <div class="w3-right" onclick="changeSlide(1)">&#10095;</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
  

        {{-- lsajdaljldjalksjd
    áuifuahfjajkscbkjabjfa
    áiufojlcnkvbjkafagijsf
    àhlkannzxvbkabfgakjsjk
    sfhLCNBNBAKOEGHALDN --}}
  
        <div style="min-width: 0; flex-basis: 25%;">
          <div class="dinhdangthanghanggiuacacphan">
            <div style="flex-basis: 100%; min-width: 0; ">
              <a
                data-ea="home_banner_click__0"
                href="{{ url('/sanphamdanhmuc/1') }}"
                ><img
                  src="{{ asset('img/Random Code Steam Legendary-78055.png') }}"
                  alt="/search?q=vpn"
                  style="height: 136px;"
              /></a>
            </div>
            <div style="flex-basis: 100%; min-width: 0">
              <a
                data-ea="home_banner_click__1"
                href="{{ url('/sanphamdanhmuc/2') }}"
                ><img
                
                src="{{ asset('img/Random Code Steam.png') }}"
                  alt="/search?q=nghe+nhạc"
                  style="height: 136px;"

              /></a>
            </div>
          </div>
        </div>
      </div>
    

    <div style="padding-top: 1.5rem">
      <div class="dinhdangthanghanggiuacacphan">
        <div style="flex-basis: 25%; min-width: 0">
          <a
            data-ea="home_banner_click__2"
            href="{{ url('/sanphamdanhmuc/3') }}"
            ><img
            src="{{ asset('img/STEAM 50 HKD.png') }}"
              
          /></a>
        </div>
        <div style="flex-basis: 25%; min-width: 0">
          <a
            data-ea="home_banner_click__3"
            href="{{ url('/sanphamdanhmuc/4') }}"
            ><img
            src="{{ asset('img/STEAM 80 HKD.png') }}"
              
          /></a>
        </div>
        <div style="flex-basis: 25%; min-width: 0">
          <a
            
            data-ea="home_banner_click__4"
            href="{{ url('/sanphamdanhmuc/5') }}"
            ><img
            src="{{ asset('img/STEAM 100 TWD.png') }}"
              
          /></a>
        </div>
        <div style="flex-basis: 25%; min-width: 0">
          <a
            {{-- target="_blank"
            rel="noreferrer" --}}
            data-ea="home_banner_click__5"
            href="{{ url('/sanphamdanhmuc/6') }}"
            ><img
            src="{{ asset('img/STEAM40hkd-81992.png') }}"
              
          /></a>
        </div>
      </div>
    </div>
  </div>
  
    <div class="dinhdangsanphamdacbiet">
      <div class="taokhoangcachsanphamdacbiet">
        <div style="margin-top: 2.5rem; display: flex; justify-content: space-between;">
          <h4>Sản phẩm nổi bật</h4>
          <a class="dieuchinhnutkhampha" href="_blank">Khám phá</a>
        </div>
        <div>Danh sách những sản phẩm theo xu hướng mà có thể bạn sẽ thích</div>
      </div>
      <div>
        <div class="dinhdangthanghanggiuacacphan">
          @foreach ($listsanpham as $sp)
              <div style="min-width: 0; flex-basis: 25%">
                  <a tabindex="-1" href="{{ url('/sanphamct', ['idsp' => $sp->id]) }}">
                      <img loading="lazy" src="{{ asset('storage/' . $sp->img) }}" alt="{{ $sp->name }}" style="height: 140px; width: 280px;" />
                  </a>
                  
                  <a class="dieuchinhkhoangcachchusanphamnoibat" href="{{ url('/sanphamct', ['idsp' => $sp->id]) }}">
                    {{ $sp->name }}</a>
                  <div class="dieuchinhkhoangcachgiasanphamchitiet">
                      <div class="giatienthanghang">
                          <div>{{ $sp->price }}đ</div>
                          <div style="color: #9ca3af; -webkit-text-decoration-line: line-through; text-decoration-line: line-through;">
                              {{ $sp->sale }}đ
                          </div>
                          <div><small class="dieuchinhphantramgiamgia">-{{ ceil(($sp->price - $sp->sale) / $sp->price * 100) }}%</small></div>
                      </div>
                  </div>
              </div>
          @endforeach
      </div>
        <br />
        <hr />
      </div>
    </div>
  
    <div class="thutieude">
      <h4>Từ khóa nổi bật</h4>
      <div>
        <div class="dinhdangthanghanggiuacacphan">
          <h6 class="dieuchinhnuttukhoanoibat">
            <a
              class="dieuchinhhinhdangnuttukhoanoibat"
              style="background-color: #3d5a80"
              href="{{ url('/sanphamdanhmuc/1') }}"
              ><div
                style="
                  display: flex;
                  justify-content: center;
                  align-items: center;
                "
              >
                Làm việc
              </div></a
            >
          </h6>
          <h6 class="dieuchinhnuttukhoanoibat">
            <a
              class="dieuchinhhinhdangnuttukhoanoibat"
              style="background-color: #98c1d9"
              href="{{ url('/sanphamdanhmuc/2') }}"

              ><div
                style="
                  display: flex;
                  justify-content: center;
                  align-items: center;
                "
              >
                Giải trí
              </div></a
            >
          </h6>
          <h6 class="dieuchinhnuttukhoanoibat">
            <a
              class="dieuchinhhinhdangnuttukhoanoibat"
              style="background-color: #ee6c4d"
              href="{{ url('/sanphamdanhmuc/3') }}"

              ><div
                style="
                  display: flex;
                  justify-content: center;
                  align-items: center;
                "
              >
                Học tập
              </div></a
            >
          </h6>
          <h6 class="dieuchinhnuttukhoanoibat">
            <a
              class="dieuchinhhinhdangnuttukhoanoibat"
              style="background-color: #293241"
              href="{{ url('/sanphamdanhmuc/4') }}"

              ><div
                style="
                  display: flex;
                  justify-content: center;
                  align-items: center;
                "
              >
                Spotify
              </div></a
            >
          </h6>
          <h6 class="dieuchinhnuttukhoanoibat">
            <a
              class="dieuchinhhinhdangnuttukhoanoibat"
              style="background-color: #545b67"
              href="{{ url('/sanphamdanhmuc/5') }}"

              ><div
                style="
                  display: flex;
                  justify-content: center;
                  align-items: center;
                "
              >
                Wallet
              </div></a
            >
          </h6>
          <h6 class="dieuchinhnuttukhoanoibat">
            <a
              class="dieuchinhhinhdangnuttukhoanoibat"
              style="background-color: #767c85"
              href="{{ url('/sanphamdanhmuc/6') }}"

              ><div
                style="
                  display: flex;
                  justify-content: center;
                  align-items: center;
                "
              >
                Youtube
              </div></a
            >
          </h6>
        </div>
      </div>
    </div>
  </div>
  
  <script>
    var slideIndex = 1;
    showSlide(slideIndex);
    var autoSlideInterval; // Biến lưu trữ interval cho chuyển đổi tự động

    function changeSlide(n) {
        showSlide((slideIndex += n));
    }

    function currentSlide(n) {
        showSlide((slideIndex = n));
    }

    function showSlide(n) {
        var i;
        var slides = document.getElementsByClassName("slides");
        var dots = document.getElementsByClassName("w3-badge");
        if (n > slides.length) {
            slideIndex = 1;
        }
        if (n < 1) {
            slideIndex = slides.length;
        }
        for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";
        }
        for (i = 0; i < dots.length; i++) {
            dots[i].classList.remove("active");
        }
        slides[slideIndex - 1].style.display = "block";
        dots[slideIndex - 1].classList.add("active");
    }

    // Hàm để bắt đầu chuyển đổi tự động
    function startAutoSlide() {
        autoSlideInterval = setInterval(function () {
            changeSlide(1); // Chuyển đổi sang hình ảnh tiếp theo
        }, 3000); // Chuyển đổi mỗi 3 giây (có thể điều chỉnh thời gian tại đây)
    }

    // Bắt đầu chuyển đổi tự động khi trang được tải
    window.onload = startAutoSlide;

    // Dừng chuyển đổi tự động khi trượt chuột lên hình ảnh
    document.addEventListener("mouseover", function () {
        clearInterval(autoSlideInterval);
    });

    // Tiếp tục chuyển đổi tự động khi trượt chuột ra khỏi hình ảnh
    document.addEventListener("mouseout", function () {
        startAutoSlide();
    });
</script>

  
@endsection


  