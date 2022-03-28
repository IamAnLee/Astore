@extends('layout_1')
@section('content')
    <div class="services-breadcrumb_w3ls_agileinfo">
        <div class="inner_breadcrumb_agileits_w3">

            <ul class="short">
                <li><a href="{{URL::to ('/trangchu')}}">Trang chủ</a><i>|</i></li>
                <li><a href="{{URL::to ('/shop')}}">Xem đơn hàng</a></li>
            </ul>
        </div>
    </div>
<!-- //banner_inner -->
</div>

<!-- //banner -->
<!-- top Products -->
<div class="ads-grid_shop">
    <div class="shop_inner_inf">
        <div class="privacy about">
            <h3><span>Đơn hàng</span></h3>

            <div class="checkout-right">
                {{-- <h4>Your shopping cart contains: <span>3 Products</span></h4> --}}
                <table class="timetable_sub">
                    <?php
                        $content = Cart::content();
                    ?>
                    <thead>
                        <tr>
                            <th>Sản phẩm</th>
                            <th>Số lượng</th>
                            <th>Tên sản phẩm</th>
                            <th>Giá</th>
                            <th>Xóa</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($content as $items)


                        <tr class="rem1">
                            <td class="invert-image"><img src="{{URL::to('public/upload/product/'.$items->options->image) }}" width='70' class="img-responsive"></td>
                            <td class="invert">
                                <form action="{{URL::to('/cap_nhat_gio_hang')}}" method="post">
                                    {{ csrf_field() }}
                                    <input class="qty_cart" type="number" name="qty_pro" min="1" value="{{$items->qty}}">
                                    <input class="btn btn-compose btn-group-sm" type="submit" value="Cập nhật">
                                    <input type="hidden" name="rowId" value="{{$items->rowId}}">
                                </form>
                            </td>
                            <td class="invert">{{$items->name}}</td>

                            <td class="invert"><?php
                                $total = $items->qty*$items->price;
                                echo number_format($total).' '.'VNĐ';
                                ?></td>
                            <td class="invert">
                                <div class="rem">
                                    <p>Đang chuẩn bị hàng</p>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div class="checkout-left">
                <div class="col-md-4 checkout-left-basket">
                    <h4>Đơn hàng</h4>
                    <ul>
                        @foreach ( $content as $values )

                        <li>{{$values->name}}
                        <span>
                            <?php
                            $total = $values->qty*$values->price;
                            echo number_format($total).' '.'VNĐ';
                            ?>
                        </span>
                        </li>
                        @endforeach
                        <li>Thuế <span>{{Cart::tax(0)}}</span></li>
                        <li>Phí vận chuyển<span>Miễn phí</span></li>
                        <li>Tổng thanh toán <span>{{Cart::subtotal(0).''.'VNĐ'}}</span></li>
                        <li>Thành tiền<span>{{Cart::total(0).''.'VNĐ'}}</span></li>

                    </ul>
                    <a href="{{URL::to('/yeu_cau_thanh_toan')}}"><h4>Thanh toán</h4></a>
                </div>

                <div class="clearfix"> </div>


                <div class="clearfix"></div>
            </div>
        </div>
    </div>
</div>
@endsection
