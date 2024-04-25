@extends('dashboard')

@section('content')
<main class="login-form">
    <div class="cotainer">
        <div class="row justify-content-center">
            <div class="col-md-4">
                <div class="card">
                    <h3 class="card-header text-center">Login screen</h3>
                    <div class="card-body">
                    <form method="POST" action="{{route('customer.loginCustomer')}}">
                            @csrf
                            <div class="form-group mb-3">
                                <div class="row">
                                    <div class="col-md-3"><span>Email</span></div>
                                    <div class="col-md-9"><input type="text" id="cus_email" class="form-control"
                                            name="cus_email" required autofocus></div>
                                </div>
                                @if ($errors->has('cus_email'))
                                <span class="text-danger">{{ $errors->first('cus_email') }}</span>
                                @endif
                            </div>
                            <div class="form-group mb-3">
                                <div class="row">
                                    <div class="col-md-3"><span>Password</span></div>
                                    <div class="col-md-9"><input type="password" id="cus_password" class="form-control"
                                            name="cus_password" required></div>
                                </div>

                                @if ($errors->has('cus_password'))
                                <span class="text-danger">{{ $errors->first('cus_password') }}</span>
                                @endif
                            </div>
                            <div class="form-group mb-3">
                                <div class="row pagination">
                                    <div class="col-md-3"></div>
                                    <div class="col-md-9">
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox" name="remember"> Ghi nhớ đăng nhập
                                            </label>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="row btn_login">
                                <div class="col-md-3"></div>
                                <div class="col-md-9">
                                    <div class="row">
                                        <div class="col-md-6"><a href="#">Quên mật khẩu</a></div>
                                        <div class="col-md-6">
                                            <div class="d-grid mx-auto">
                                                <button type="submit" class="btn btn-primary btn-block">Đăng
                                                    nhập</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection