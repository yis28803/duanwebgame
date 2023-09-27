@extends('layouts.nguoidung_header')


@section('content')
    
<link rel="stylesheet" href="{{ asset('css/demo2.css') }}">
<div class="Mg W Re">
    <div class="ta jc Bd _f Ke">
        <div class="ta jc He ge">
            <div class="Ub ib Da zc Uc"></div>
            <div>Giỏ hàng</div>
        </div>
        <div class="Vb Gc"></div>
        <div class="ta jc He ie">
            <div class="Ub ib Da zc Uc"></div>
            <div>Xác nhận</div>
        </div>
        <div class="Vb Gc"></div>
        <div class="ta jc He ie">
            <div class="Ub ib Da zc Uc"></div>
            <div>Thanh toán</div>
        </div>
    </div>
    <div class="Ta Ug rd Zg Re Sg Sc">
        <div class="Og Pe">
            <div class="ih Oe">
                <div class="ta ic He">
                    <h3>Giỏ hàng</h3>
                    {{-- <div class="zd">(1 sản phẩm)</div> --}}
                </div>


                {{-- lamphâny --}}
                {{-- lamphâny --}}
                {{-- lamphâny --}}
                {{-- lamphâny --}}
                {{-- lamphâny --}}
                {{-- lamphâny --}}
    

                @foreach ($viewData["products"] as $product)
                <div class="Fc sd xc">
                    
                   
                    <div class="Mf Me">
                        <div class="mg fh">
                            <img loading="lazy" src="{{ asset('storage/' . $product->img) }}" class="xc" alt="Random Code Steam"/>
                        </div>
                        <div class="rg hh">
                            <div class="ta ec nc za">
                                <div class="Le">
                                    <div class="Mf Ge">
                                        <div class="ng ea Ce">
                                            <h6> {{$product->name}}</h6>
                                            
                                            <div class="fe">
                                                @foreach ($theloai as $item)
                                                @if ($item->id == $product->idtl)
                                                    <?php
                                                     echo  $item->name_tl;
                                                    ?>
                                                @break
                                                @endif
                                               
                                                @endforeach
                                                </div>
                                        </div>
                                        <div class="lg If Ub ta Uf Vf De">
                                            <h5>{{$product->sale}}đ</h5>
                                            <div class="ta Tf jc De">
                                                <div class="Zd he me">{{$product->price}}đ</div>
                                                <div>
                                                    <small class="Zd aa Id Jd xc _c ke">-{{ ceil(($product->price - $product->sale) / $product->price * 100) }}%</small>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="kg Jf ta Wf ga">
                                            <form action="/api/cart/quantity">
                                                <div class="ta Ga Fc Mc yc ge Zd">
                                                    <button type="button" class="b Ub kb Hc Mc fe ra">-</button>
                                                    <input name="quantity" type="number" required="" min="1" max="30" step="1" placeholder="Số lượng" class="kb Zd Td Ac Ah" value="<?php echo session('sanpham')[$product->id]?>"/>
                                                    <button type="button" class="b Ub kb Ic Mc fe ra">+</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="f Ad"></div>
                                    <div class="ta nc Ee">
                                        <div class="ta Ee">
                                            <svg class="od Cb Da" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                                <path d="M509.5 184.6L458.9 32.8C452.4 13.2 434.1 0 413.4 0H98.6c-20.7 0-39 13.2-45.5 32.8L2.5 184.6c-1.6 4.9-2.5 10-2.5 15.2V464c0 26.5 21.5 48 48 48h416c26.5 0 48-21.5 48-48V199.8c0-5.2-.8-10.3-2.5-15.2zM32 199.8c0-1.7.3-3.4.8-5.1L83.4 42.9C85.6 36.4 91.7 32 98.6 32H240v168H32v-.2zM480 464c0 8.8-7.2 16-16 16H48c-8.8 0-16-7.2-16-16V232h448v232zm0-264H272V32h141.4c6.9 0 13 4.4 15.2 10.9l50.6 151.8c.5 1.6.8 3.3.8 5.1v.2z"></path>
                                            </svg>
                                            <div>Tình trạng: <span class="be">Còn hàng</span></div>
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                     
                    
                </div>
                @endforeach
           
                 {{-- lamphâny --}}
                {{-- lamphâny --}}
                {{-- lamphâny --}}
                {{-- lamphâny --}}
                {{-- lamphâny --}}
                {{-- lamphâny --}}
                <h3>
                    TỔNG TIỀN:  <?php echo $viewData["total"]?>đ
                </h3>
                <div class="row">
                    <div class="col" style="position: relative;">
                        <a href="{{route('cart.delete')}}">
                            <button type="button" style="color:red">
                                <svg class="od Cb Da" xmlns="http://www.w3.org/2000/svg" style="height: 50px" viewBox="0 0 448 512">
        
                                    <path d="M32 464a48 48 0 0 0 48 48h288a48 48 0 0 0 48-48V128H32zm272-256a16 16 0 0 1 32 0v224a16 16 0 0 1-32 0zm-96 0a16 16 0 0 1 32 0v224a16 16 0 0 1-32 0zm-96 0a16 16 0 0 1 32 0v224a16 16 0 0 1-32 0zM432 32H312l-9.4-18.7A24 24 0 0 0 281.1 0H166.8a23.72 23.72 0 0 0-21.4 13.3L136 32H16A16 16 0 0 0 0 48v32a16 16 0 0 0 16 16h416a16 16 0 0 0 16-16V48a16 16 0 0 0-16-16z"></path>
                                </svg>
                            </button>
                        </a>
                        <span class="col" style="position: absolute;right:50px">
                            {{-- @if (count($viewData["sanpham"])>0) --}}
                            <a href="{{route('cart.purchase')}}">
                                <button type="button" >
                                 <img  style="height: 50px;margin-left:50px;" src="{{asset('img/shoppingcart.png')}}" alt="">
                                </button>
                            </a>
                            {{-- @endif --}}
                        </span>
                    </div>
                    
                </div>
                
              

                {{-- lamphâny --}}
                {{-- lamphâny --}}
                {{-- lamphâny --}}
                {{-- lamphâny --}}
                {{-- lamphâny --}}
                {{-- lamphâny --}}




                
            </div>
            <div class="eh">
                <div class="Oe">
                    <div class="Ie">
                        <div class="ta nc jc He bc">
                            <h6>Bạn có mã giới thiệu?</h6>
                            <button type="button">
                                <svg
                                    class="od b Hb Ba oa fe"
                                    xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 448 512"
                                >
                                    <path
                                        d="M313.6 304c-28.7 0-42.5 16-89.6 16-47.1 0-60.8-16-89.6-16C60.2 304 0 364.2 0 438.4V464c0 26.5 21.5 48 48 48h352c26.5 0 48-21.5 48-48v-25.6c0-74.2-60.2-134.4-134.4-134.4zM400 464H48v-25.6c0-47.6 38.8-86.4 86.4-86.4 14.6 0 38.3 16 89.6 16 51.7 0 74.9-16 89.6-16 47.6 0 86.4 38.8 86.4 86.4V464zM224 288c79.5 0 144-64.5 144-144S303.5 0 224 0 80 64.5 80 144s64.5 144 144 144zm0-240c52.9 0 96 43.1 96 96s-43.1 96-96 96-96-43.1-96-96 43.1-96 96-96z"
                                    ></path>
                                </svg>
                            </button>
                        </div>
                    </div>
                    <div class="Ie">
                        <div class="ta nc jc He bc">
                            <h6>Bạn có mã ưu đãi?</h6>
                            <button type="button">
                                <svg
                                    class="od b Hb Ba oa fe"
                                    xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 384 512"
                                >
                                    <path
                                        d="M96 224c53 0 96-43 96-96s-43-96-96-96S0 75 0 128s43 96 96 96zm0-144c26.5 0 48 21.5 48 48s-21.5 48-48 48-48-21.5-48-48 21.5-48 48-48zm192 208c-53 0-96 43-96 96s43 96 96 96 96-43 96-96-43-96-96-96zm0 144c-26.5 0-48-21.5-48-48s21.5-48 48-48 48 21.5 48 48-21.5 48-48 48zm93.9-381.2L57.2 475c-2.3 3.1-5.9 5-9.7 5H12c-9.6 0-15.3-10.7-10-18.7L327.2 37c2.3-3.1 5.9-5 9.7-5H372c9.6 0 15.3 10.8 9.9 18.8z"
                                    ></path>
                                </svg>
                            </button>
                        </div>
                    </div>
                    <div class="Ie">
                        <div class="ta nc jc He bc">
                            <h6>Bạn muốn tặng cho bạn bè?</h6>
                            <button type="button">
                                <svg
                                    class="od b Hb Ba oa fe"
                                    xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 512 512"
                                >
                                    <path
                                        d="M464 144h-26.1c6.2-12.1 10.1-25.5 10.1-40 0-48.5-39.5-88-88-88-41.6 0-68.5 21.3-103 68.3-34.5-47-61.4-68.3-103-68.3-48.5 0-88 39.5-88 88 0 14.5 3.8 27.9 10.1 40H48c-26.5 0-48 21.5-48 48v128c0 8.8 7.2 16 16 16h16v107.4c0 29 23.6 52.6 52.6 52.6h342.8c29 0 52.6-23.6 52.6-52.6V336h16c8.8 0 16-7.2 16-16V192c0-26.5-21.5-48-48-48zM232 448H84.6c-2.5 0-4.6-2-4.6-4.6V336h112v-48H48v-96h184v256zm-78.1-304c-22.1 0-40-17.9-40-40s17.9-40 40-40c22 0 37.5 7.6 84.1 77l2 3h-86.1zm122-3C322.5 71.6 338 64 360 64c22.1 0 40 17.9 40 40s-17.9 40-40 40h-86.1l2-3zM464 288H320v48h112v107.4c0 2.5-2 4.6-4.6 4.6H280V192h184v96z"
                                    ></path>
                                </svg>
                            </button>
                        </div>
                    </div>
                    <form class="Oe">
                        <div class="Le">
                            <h6>Thanh toán</h6>
                            <div class="Ie">
                                <div class="Fe">
                                    <div class="ta Ee hc nc">
                                        <div>Tổng giá trị sản phẩm</div>
                                        <div>9.000đ</div>
                                    </div>
                                </div>
                                <div class="f"></div>
                                <div class="Fe">
                                    <div class="ta Ee hc nc">
                                        <div>
                                            Tổng giá trị phải thanh toán
                                        </div>
                                        <div class="Zd">9.000đ</div>
                                    </div>
                                    <div class="ta Ee hc nc">
                                        <div>Số dư hiện tại</div>
                                        <div class="Zd">0đ</div>
                                    </div>
                                    <div class="ta Ee hc nc">
                                        <div>Số tiền cần nạp thêm</div>
                                        <div class="Zd">9.000đ</div>
                                    </div>
                                </div>
                            </div>
                            <fieldset class="ta ec kc Ie">
                                <a class="b c ta mc jc Ee" href="/topup"
                                    ><img
                                        loading="lazy"
                                        src="https://cdn.divineshop.vn/static/b1402e84a947ed36cebe9799e47f61c2.svg"
                                        class="bb wa"
                                        alt="Divine Shop"
                                    />
                                    <div>Nạp thêm vào tài khoản</div></a
                                >
                                
                                
                                <button
                                    type="button"
                                    class="b c ta mc jc cd yf Df"
                                >
                                    <div class="ta Ee rc">
                                        <img
                                            loading="lazy"
                                            src="https://cdn.divineshop.vn/static/b77a2122717d76696bd2b87d7125fd47.svg"
                                            class="Db wa"
                                            alt="Mua siêu tốc với MoMo"
                                        />
                                        <div>Mua siêu tốc với MoMo</div>
                                    </div>
                                </button>
                            </fieldset>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection