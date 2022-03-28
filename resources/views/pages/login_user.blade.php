@extends('layout_1')
@section('content')
    <div class="services-breadcrumb_w3ls_agileinfo">
        <div class="inner_breadcrumb_agileits_w3">

            <ul class="short">
                <li><a href="{{URL::to ('/trangchu')}}">Trang chủ</a><i>|</i></li>
                <li>Đăng nhập </li>
            </ul>
        </div>
    </div>

<!-- //banner_inner -->
</div>
<div class="body container-fluid">
    <div class="row">
    {{-- <div class="logo"></div> --}}
        <div class="login-block col-6 col-sm-6 col-md-6">
            <h1>Đăng nhập</h1>
            <form action="">
                <input type="text" value="" placeholder="Email" id="email" required />
                <input type="password" value="" placeholder="Mật khẩu" id="password" required />
                <button class="login">Đăng nhập</button>
            </form>
        </div>
        <div class="signin-block col-6 col-sm-6 col-md-6">
            <h1>Đăng ký</h1>
            <form action="{{URL::to('/dang_ky')}}">
                <input type="text" value="" placeholder="Họ và tên" name="name" required />
                <input type="email" value="" placeholder="Email" name="email" required />
                <input type="text" value="" placeholder="Số điện thoại" name="phone" required />
                <input type="password" value="" placeholder="Nhập mật khẩu" name="password" required />
                <input type="password" value="" placeholder="Nhập lại mật khẩu" name="password" required />
                <button class="signin">Đăng ký tài khoản</button>
            </form>
        </div>
    </div>
</div>

@endsection
