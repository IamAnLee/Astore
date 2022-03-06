@extends('shop')
@section('list-product')
<div class="left-ads-display col-md-9">
    <div class="wrapper_top_shop">
        <div class="col-md-6 shop_left">
            <img src="{{asset('public/frontend/images/banner3.jpg')}}" alt="">
            <h6>40% off</h6>
        </div>
        <div class="col-md-6 shop_right">
            <img src="{{asset('public/frontend/images/banner2.jpg')}}" alt="">
            <h6>50% off</h6>
        </div>
        <div class="clearfix"></div>
        <!-- product-sec1 -->
        <div class="product-sec1">
            <!--/mens-->
            @foreach($product as $key => $pro)
            <div class="col-md-4 product-men">
                <div class="product-shoe-info shoe">
                    <div class="men-pro-item">
                        <div class="men-thumb-item">
                            <img src="{{URL::to('public/upload/product/'.$pro->product_images) }}" alt="">
                            <div class="men-cart-pro">
                                <div class="inner-men-cart-pro">
                                    <a href="{{URL::to('chi_tiet_san_pham/'.$pro->product_id.'/'.$pro->category_id.'/'.$pro->brand_id) }}" class="link-product-add-cart">Mua ngay</a>
                                </div>
                            </div>
                            <span class="product-new-top">Mới</span>
                        </div>
                        <div class="item-info-product">
                            <h4>
                                <a href="{{URL::to('chi_tiet_san_pham/'.$pro->product_id.'/'.$pro->category_id.'/'.$pro->brand_id) }}">{{ $pro -> product_name }}</a>
                            </h4>
                            <div class="info-product-price">
                                <div class="grid_meta">
                                    <div class="product_price">
                                        <div class="grid-price ">
                                            <span class="money ">{{number_format($pro->product_price).' '.'VNĐ'}}</span>
                                        </div>
                                    </div>
                                    {{-- <ul class="stars">
                                        <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star-half-o" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
                                    </ul> --}}
                                </div>
                                <div class="shoe single-item hvr-outline-out">
                                    <form action="#" method="post">
                                        <input type="hidden" name="cmd" value="_cart">
                                        <input type="hidden" name="add" value="1">
                                        <input type="hidden" name="shoe_item" value="Bella Toes">
                                        <input type="hidden" name="amount" value="675.00">
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

            <!-- //mens -->
            <div class="clearfix"></div>

        </div>
        <!-- //product-sec1 -->
        <div class="col-md-6 shop_left shp">
            <img src="{{asset('public/frontend/images/banner4.jpg')}}" alt="">
            <h6>21% off</h6>
        </div>
        <div class="col-md-6 shop_right shp">
            <img src="{{asset('public/frontend/images/banner1.jpg')}}" alt="">
            <h6>31% off</h6>
        </div>
        <div class="clearfix"></div>
    </div>
</div>
@endsection
