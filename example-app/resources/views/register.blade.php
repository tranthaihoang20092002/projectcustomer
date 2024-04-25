@extends('dashboard');

@section('content')
<main class="signup-form">
    <div class="cotainer">
        <div class="row justify-content-center">
            <div class="col-md-4">
                <div class="card">
                    <h3 class="card-header text-center">Registration screen</h3>
                    <div class="card-body">
                    <form action="{{ route('customer.registerCustomer') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group mb-3">
                                <div class="row">
                                    <div class="col-md-3"><span>Username</span></div>
                                    <div class="col-md-9"><input type="text" id="name" class="form-control" name="cus_name"
                                            required autofocus></div>
                                </div>

                                @if ($errors->has('cus_name'))
                                <span class="text-danger">{{ $errors->first('cus_name') }}</span>
                                @endif
                            </div>
                            <div class="form-group mb-3">
                                <div class="row">
                                    <div class="col-md-3"><span>Email</span></div>
                                    <div class="col-md-9"> <input type="text" id="email_address" class="form-control"
                                            name="cus_email" required autofocus></div>
                                </div>

                                @if ($errors->has('cus_email'))
                                <span class="text-danger">{{ $errors->first('cus_email') }}</span>
                                @endif
                            </div>
                            <div class="form-group mb-3">
                                <div class="row">
                                    <div class="col-md-3"><span>Password</span></div>
                                    <div class="col-md-9"><input type="password" id="password" class="form-control"
                                            name="cus_password" required></div>
                                </div>

                                @if ($errors->has('cus_password'))
                                <span class="text-danger">{{ $errors->first('cus_password') }}</span>
                                @endif
                            </div>
                            <div class="form-group mb-3">
                                <div class="row">
                                    <div class="col-md-3"><span>Phone</span></div>
                                    <div class="col-md-9"><input type="number" id="phone" class="form-control"
                                            name="cus_phone" required autofocus></div>
                                </div>

                                @if ($errors->has('cus_phone'))
                                <span class="text-danger">{{ $errors->first('cus_phone') }}</span>
                                @endif
                            </div>
                            <div class="form-group mb-3">
                                <div class="row">
                                    <div class="col-md-3"><span>Hình ảnh</span></div>
                                    <div class="col-md-9"><input type="file" id="fileToUpload" class="form-control"
                                            name="cus_image" required></div>
                                </div>

                                @if ($errors->has('cus_image'))
                                <span class="text-danger">{{ $errors->first('cus_image') }}</span>
                                @endif
                            </div>
                            <div class="form-group mb-3">
                                <div class="row">
                                    <div class="col-md-3"><span>MSSV</span></div>
                                    <div class="col-md-9"><input type="text" id="mssv" class="form-control"
                                            name="cus_mssv" required></div>
                                </div>

                                @if ($errors->has('cus_mssv'))
                                <span class="text-danger">{{ $errors->first('cus_mssv') }}</span>
                                @endif
                            </div>
                            <div class="form-group mb-3">
                                <div class="row">
                                    <div class="col-md-3"><span>Sở thích</span></div>
                                    <div class="col-md-9"><input type="text" id="cus_sothich" class="form-control"
                                            name="cus_sothich" required></div>
                                </div>

                                @if ($errors->has('cus_sothich'))
                                <span class="text-danger">{{ $errors->first('cus_sothich') }}</span>
                                @endif
                            </div>
                            <div class="row btn_login">
                                <div class="col-md-3"></div>
                                <div class="col-md-9">
                                    <div class="row">
                                        <div class="col-md-6"><a href="#">Đã có tài khoản</a></div>
                                        <div class="col-md-6">
                                            <div class="d-grid mx-auto">
                                                <button type="submit" class="btn btn-primary btn-block">Register </button>
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
@endsection('content')