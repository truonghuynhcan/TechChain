@extends('layout.client')
@section('title', 'Đăng nhập')
@section('body')
    <!-- Start Account Login Area -->
    <div class="account-login section">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3 col-md-10 offset-md-1 col-12">
                    <form class="card login-form" method="post">
                        @csrf
                        <div class="card-body">
                            <div class="title">
                                <h3>Đăng nhập</h3>
                                <p>Bạn có thể đăng nhập bằng tài khoản mạng xã hội hoặc địa chỉ email của mình</p>
                            </div>
                            <div class="social-login">
                                <div class="row">
                                    <div class="col-lg-4 col-md-4 col-12"><a class="btn facebook-btn"
                                            href="javascript:void(0)"><i class="lni lni-facebook-filled"></i> Facebook
                                            login</a></div>
                                    <div class="col-lg-4 col-md-4 col-12"><a class="btn twitter-btn"
                                            href="javascript:void(0)"><i class="lni lni-twitter-original"></i> Twitter
                                            login</a></div>
                                    <div class="col-lg-4 col-md-4 col-12"><a class="btn google-btn"
                                            href="javascript:void(0)"><i class="lni lni-google"></i> Google login</a>
                                    </div>
                                </div>
                            </div>
                            <div class="alt-option">
                                <span>Or</span>
                            </div>
                            @if (Session::has('success'))
                                <div class="alert alert-success" role="success">
                                    {{ Session::get('success') }}
                                </div>
                                @php
                                    Session::forget('success');
                                @endphp
                            @endif
                            <div class="form-group input-group">
                                <label for="reg-email">Email</label>
                                <input class="form-control" type="email" id="reg-email" name="email" required>
                            </div>
                            <div class="form-group input-group">
                                <label for="reg-pass">Password</label>
                                <input class="form-control" type="password" id="reg-pass" name="password" required>
                            </div>
                            <div class="d-flex flex-wrap justify-content-between bottom-content">
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input width-auto" id="exampleCheck1"
                                        name="remember">
                                    <label class="form-check-label" for="exampleCheck1">Remember me</label>
                                </div>
                                <a class="lost-pass" href="account-password-recovery.html">Quên mật khẩu?</a>
                            </div>
                            @if (Session::has('message'))
                                <div class="alert alert-warning" role="alert">
                                    {{ Session::get('message') }}
                                </div>
                                @php
                                    Session::forget('message');
                                @endphp
                            @endif
                            <div class="button">
                                <button class="btn" type="submit">Đăng nhập</button>
                            </div>
                            <p class="outer-link">Nếu bạn chưa có tài khoản? <a href="{{route('register')}}">Đăng ký tại đây </a>
                            </p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- End Account Login Area -->

@endsection
