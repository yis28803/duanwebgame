@extends('layouts.nguoidung_header')

@section('content')
<section>
    <div class="cau70">
        <h2>Sản phẩm bạn đã xem</h2>
        <form action="{{ route('sanphamdanhmuc.timkiem') }}" method="get">
            @csrf
            <div class="cau71">
                <div class="cau72">
                    <div class="cau73">
                        <div class="cau74">
                            <div style="position: relative">


                                <select class="cau83 cau75 cau84 cau85" name="iddm">
                                    <option value="0" {{ request('iddm') == 0 ? 'selected' : '' }}>Tất cả</option>
                                    @foreach ($listdanhmuc as $danhmuc)
                                        <option value="{{ $danhmuc->id }}" {{ request('iddm') == $danhmuc->id ? 'selected' : '' }}>{{ $danhmuc->name_dm }}</option>
                                    @endforeach
                                </select>



                                <label>Danh mục</label>



                            </div>
                        </div>
                        <div class="cau76">
                            <div style="position: relative">
                                <select class="cau83 cau75 cau84 cau85" name="idtl">


                                    <option value="0" {{ request('idtl') == 0 ? 'selected' : '' }}>Tất cả</option>
                                    @foreach ($listtheloai as $theloai)
                                        <option value="{{ $theloai->id }}" {{ request('idtl') == $theloai->id ? 'selected' : '' }}>{{ $theloai->name_tl }}</option>
                                    @endforeach


                                </select>



                                <label>Thể loại</label>


                            </div>
                        </div>
                        
                        
                    </div>
                </div>
                <div class="cau87">
                    <button type="submit" class="cau82">
                        <svg class="cau81" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                            <path
                                d="M479.968 0H32.038C3.613 0-10.729 34.487 9.41 54.627L192 237.255V424a31.996 31.996 0 0 0 10.928 24.082l64 55.983c20.438 17.883 53.072 3.68 53.072-24.082V237.255L502.595 54.627C522.695 34.528 508.45 0 479.968 0zM288 224v256l-64-56V224L32 32h448L288 224z"
                            ></path>
                        </svg>
                        <div>Lọc</div>
                    </button>
                </div>
            </div>
        </form>
    </div>
</section>

<div class="dinhdangsanphamdacbiet">
    <div class="taokhoangcachsanphamdacbiet">
        <div style="margin-top: 2.5rem; display: flex; justify-content: space-between;">
            {{-- <div>
                <h1>SẢN PHẨM DANH MỤC <strong>{{ $dm->name_dm }}</strong> </h1>
            </div> --}}
        </div>
    </div>
    <div>
        <div>
            <div class="dinhdangthanghanggiuacacphan">




                @foreach ($sanPhamDanhMuc as $sp)
                    <div style="min-width: 0; flex-basis: 25%">
                        <a tabindex="-1"  href="{{ url('/sanphamct', ['idsp' => $sp->id]) }}">
                            <img loading="lazy" src="{{ asset('storage/' . $sp->img) }}" alt="{{ $sp->name }}" style="height: 140px; width: 280px;" />
                        </a>
                        <a class="dieuchinhkhoangcachchusanphamnoibat"  href="{{ url('/sanphamct', ['idsp' => $sp->id]) }}">
                           

                            {{ $sp->name }}</a>
                        <div class="dieuchinhkhoangcachgiasanphamchitiet">
                            <div class="giatienthanghang">
                                <div>{{ $sp->price }}đ</div>
                                <div style="color: #9ca3af; -webkit-text-decoration-line: line-through; text-decoration-line: line-through;">{{ $sp->sale }}đ</div>
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
</div>
<br>
<br>
<br>
<br>
@endsection
