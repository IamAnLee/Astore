@extends('layout_1')
@section('content')
    <div class="services-breadcrumb_w3ls_agileinfo">
        <div class="inner_breadcrumb_agileits_w3">
            <ul class="short">
                <li><a href="{{URL::to('/trangchu')}}">Trang chủ</a><i>|</i></li>
                <li>Chi tiết sản phẩm</li>
            </ul>
        </div>
    </div>
</div>
<div class="ads-grid_shop">
    <div class="shop_inner_inf">
        @foreach ($get_product_by_id as $key =>$items )
        <div class="col-md-4 single-right-left ">
            <div class="grid images_3_of_2">
                <div class="flexslider">

                    <ul class="slides">
                        <li data-thumb="{{URL::to('public/upload/product/'.$items->product_images) }}">
                            <div class="thumb-image"> <img src="{{URL::to('public/upload/product/'.$items->product_images) }}"  class="img-responsive"> </div>
                        </li>
                        {{-- <li data-thumb="{{URL::to('public/upload/product/'.$items->product_images) }}">
                            <div class="thumb-image"> <img src="{{URL::to('public/upload/product/'.$items->product_images) }}" data-imagezoom="true" class="img-responsive"> </div>
                        </li>
                        <li data-thumb="{{URL::to('public/upload/product/'.$items->product_images) }}">
                            <div class="thumb-image"> <img src="{{URL::to('public/upload/product/'.$items->product_images) }}" data-imagezoom="true" class="img-responsive"> </div>
                        </li> --}}
                    </ul>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
        <div class="col-md-8 single-right-left simpleCart_shelfItem">
            <h3>{{$items->product_name }}</h3>
            <p><span class="item_price">{{number_format($items->product_price)}}</span>
                <del>$1,199</del>
            </p>
            <p><span class="item">Thương hiệu:{{$items->brand_name}}</span>
            </p>
            <p><span class="item">Tình trạng:</span>
            </p>
            <div class="description">
                <h5>{{$items->product_content }}</h5>
            </div>
            {{-- <div class="color-quality">
                <div class="color-quality-right">
                    <h5>Quality :</h5>
                    <select id="country1" onchange="change_country(this.value)" class="frm-field required sect">
                            <option value="null">5 Qty</option>
                            <option value="null">6 Qty</option>
                            <option value="null">7 Qty</option>
                            <option value="null">10 Qty</option>
                        </select>
                </div>
            </div> --}}
            <div class="occasion-cart">
                <div class="shoe single-item single_page_b">
                    <form action="{{URL::to('/them_gio_hang')}}" method="post">
                        {{ csrf_field() }}
                        <p><span class="item">
                            <label>Số lượng</label>
                            <input name="qty"  type="number" min="1" value="1" style="width:2.5em">
                        </span>
                        </p>
                        <input type="hidden" name="product_id" value="{{$items->product_id}}">
                        <input type="submit" name="submit" value="Thêm vào giỏ hàng" class="button add">
                    </form>

                </div>

            </div>
            <ul class="social-nav model-3d-0 footer-social social single_page">
                <li class="share">Share On : </li>
                <li>
                    <a href="#" class="facebook">
                        <div class="front"><i class="fa fa-facebook" aria-hidden="true"></i></div>
                        <div class="back"><i class="fa fa-facebook" aria-hidden="true"></i></div>
                    </a>
                </li>
                <li>
                    <a href="#" class="twitter">
                        <div class="front"><i class="fa fa-twitter" aria-hidden="true"></i></div>
                        <div class="back"><i class="fa fa-twitter" aria-hidden="true"></i></div>
                    </a>
                </li>
                <li>
                    <a href="#" class="instagram">
                        <div class="front"><i class="fa fa-instagram" aria-hidden="true"></i></div>
                        <div class="back"><i class="fa fa-instagram" aria-hidden="true"></i></div>
                    </a>
                </li>
                <li>
                    <a href="#" class="pinterest">
                        <div class="front"><i class="fa fa-linkedin" aria-hidden="true"></i></div>
                        <div class="back"><i class="fa fa-linkedin" aria-hidden="true"></i></div>
                    </a>
                </li>
            </ul>

        </div>
        <div class="clearfix"> </div>
        <!--/tabs-->
        <div class="responsive_tabs">
            <div id="horizontalTab">
                <ul class="resp-tabs-list">
                    <li>Mô tả</li>
                    <li>Đánh giá</li>
                    <li>Thông tin sản phẩm</li>
                </ul>
                <div class="resp-tabs-container">
                    <!--/tab_one-->
                    <div class="tab1">

                        <div class="single_page">
                            <h6>{{$items->product_name }}</h6>
                            <p>{{$items->product_desc}}</p>

                        </div>
                    </div>
                    <!--//tab_one-->
                    <div class="tab2">

                        <div class="single_page">
                            <div class="bootstrap-tab-text-grids">
                                <div class="bootstrap-tab-text-grid">
                                    <div class="bootstrap-tab-text-grid-left">
                                        <img src="{{URL::to('public/upload/product/'.$items->product_images) }}" alt=" " class="img-responsive">
                                    </div>
                                    <div class="bootstrap-tab-text-grid-right">
                                        <ul>
                                            <li><a href="#">Admin</a></li>
                                            <li><a href="#"><i class="fa fa-reply-all" aria-hidden="true"></i> Reply</a></li>
                                        </ul>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elPellentesque vehicula augue eget.Ut enim ad minima veniam,
                                            quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis
                                            autem vel eum iure reprehenderit.</p>
                                    </div>
                                    <div class="clearfix"> </div>
                                </div>
                                <div class="add-review">
                                    <h4>add a review</h4>
                                    <form action="#" method="post">
                                        <input type="text" name="Name" required="Name">
                                        <input type="email" name="Email" required="Email">
                                        <textarea name="Message" required=""></textarea>
                                        <input type="submit" value="SEND">
                                    </form>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="tab3">

                        <div class="single_page">
                            <h6>{{$items->product_name }}</h6>

                            <p class="para">{{$items->product_content }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
        <!--//tabs-->
        <!-- /new_arrivals -->
        <div class="new_arrivals">
            <h3>Sản phẩm liên quan</h3>
            @foreach ($related as $key => $items )
            <div class="col-md-3 product-men women_two">
                <div class="product-shoe-info shoe">
                    <div class="men-pro-item">
                        <div class="men-thumb-item">
                            <img src="{{URL::to('public/upload/product/'.$items->product_images) }}" alt="">
                            <div class="men-cart-pro">
                                <div class="inner-men-cart-pro">
                                    <a href="{{URL::to('chi_tiet_san_pham/'.$items->product_id.'/'.$items->category_id.'/'.$items->brand_id) }}" class="link-product-add-cart">Xem chi tiết</a>
                                </div>
                            </div>
                            <span class="product-new-top">Mới</span>
                        </div>
                        <div class="item-info-product">
                            <h4>
                                <a href="{{URL::to('chi_tiet_san_pham/'.$items->product_id.'/'.$items->category_id.'/'.$items->brand_id) }}">{{$items->product_name}} </a>
                            </h4>
                            <div class="info-product-price">
                                <div class="grid_meta">
                                    <div class="product_price">
                                        <div class="grid-price ">
                                            <span class="money ">{{number_format($items->product_price)}}</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="shoe single-item hvr-outline-out">
                                    <form action="#" method="post">
                                        <input type="hidden" name="cmd" value="_cart">
                                        <input type="hidden" name="add" value="1">
                                        <input type="hidden" name="shoe_item" value="Shuberry Heels">
                                        <input type="hidden" name="amount" value="575.00">
                                        <button type="submit" class="shoe-cart pshoe-cart"><i class="fa fa-cart-plus" aria-hidden="true"></i></button>

                                        <a href="#" data-toggle="modal" data-target="#myModal1"></a>
                                    </form>

                                </div>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
            <div class="clearfix"></div>
        </div>
        <!--//new_arrivals-->
    </div>
</div>
@endsection
