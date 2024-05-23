@extends('layout.client')
@section('title', 'Đăng ký')
@section('body')
    <!-- Start Account Register Area -->
    <div class="account-login section">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3 col-md-10 offset-md-1 col-12">
                    <div class="register-form">
                        <div class="title">
                            <h3>No Account? Register</h3>
                            <p>Registration takes less than a minute but gives you full control over your orders.</p>
                        </div>
                        <form class="row" method="post">
                            @csrf
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="reg-fn">Họ và tên</label>
                                    <input class="form-control" type="text" id="reg-fn" name="name" required>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="reg-email">E-mail Address</label>
                                    <input class="form-control" type="email" id="reg-email" name="email" required>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="reg-pass">Password</label>
                                    <input class="form-control" type="password" id="reg-pass" name="pass" required>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="reg-pass-confirm">Nhập lại Password</label>
                                    <input class="form-control" type="password" id="reg-pass-confirm" name="repass"
                                        required>
                                </div>
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
                                <button class="btn" type="submit">Đăng ký</button>
                            </div>
                            <p class="outer-link">Đã có tài khoản? <a href="{{ route('login') }}">Đăng nhập</a>
                            </p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Account Register Area -->

@endsection
