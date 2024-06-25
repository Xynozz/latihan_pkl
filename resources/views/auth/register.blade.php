@extends('layouts.component.frontend.register')

@section('content')
{{-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror"
                                    name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address')
                                }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                                    name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password')
                                }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password"
                                    class="form-control @error('password') is-invalid @enderror" name="password"
                                    required autocomplete="new-password">

                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirm
                                Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control"
                                    name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> --}}
<div class="container-fluid my-5">
    <div class="row">
        <div class="col-12 col-md-8 col-lg-6 col-xl-5 col-xxl-5 mx-auto">
            <div class="card rounded-4 mb-0 border-top border-4 border-primary border-gradient-1">
                <div class="card-body p-5">
                    <img src="assets/images/logo1.png" class="mb-4" width="145" alt="">
                    <h4 class="fw-bold">Get Started Now</h4>
                    <p class="mb-0">Enter your credentials to create your account</p>

                    <div class="form-body my-4">
                        <form class="row g-3" role="form" method="POST" action="{{ route('register') }}">
                            @csrf
                            <div class="col-12">
                                <label for="inputUsername" class="form-label">Username</label>
                                {{-- <input type="text" class="form-control" id="inputUsername"
                                    placeholder="Masukan Username"> --}}
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror"
                                    name="name" value="{{ old('name') }}" required autocomplete="name"
                                    placeholder="Masukan Username" autofocus>
                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="col-12">
                                <label for="inputEmailAddress" class="form-label">Email Address</label>
                                {{-- <input type="email" class="form-control" id="inputEmailAddress"
                                    placeholder="example@user.com"> --}}
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                                    name="email" required autocomplete="email" autofocus>
                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="col-12">
                                <label for="inputChoosePassword" class="form-label">Password</label>
                                <div class="input-group" id="show_hide_password">
                                    {{-- <input type="password" class="form-control border-end-0"
                                        id="inputChoosePassword" placeholder="Enter Password"> --}}
                                    <input id="password" type="password"
                                        class="form-control @error('password') is-invalid @enderror" name="password"
                                        required autocomplete="password" autofocus>
                                    <a href="javascript:;" class="input-group-text bg-transparent"><i
                                            class="bi bi-eye-slash-fill"></i></a>
                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-12">
                                <label for="inputChoosePassword" class="form-label">Confirm Password</label>
                                <div class="input-group" id="show_hide_password_confirm">
                                    <input id="password-confirm" type="password" class="form-control"
                                        name="password_confirmation" required autocomplete="new-password">
                                    <a href="javascript:;" class="input-group-text bg-transparent"><i
                                            class="bi bi-eye-slash-fill"></i></a>
                                </div>
                            </div>
                            {{-- <div class="col-12">
                                <label for="inputSelectCountry" class="form-label">Country</label>
                                <select class="form-select" id="inputSelectCountry" aria-label="Default select example">
                                    <option selected="">India</option>
                                    <option value="1">United Kingdom</option>
                                    <option value="2">America</option>
                                    <option value="3">Dubai</option>
                                </select>
                            </div> --}}
                            <div class="col-12">
                                <div class="form-check form-switch">
                                    <input class="form-check-input" type="checkbox" id="flexSwitchCheckChecked">
                                    <label class="form-check-label" for="flexSwitchCheckChecked">I read and agree to
                                        Terms &amp; Conditions</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="d-grid">
                                    <button type="submit" class="btn btn-grd-danger">Register</button>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="text-start">
                                    <p class="mb-0">Already have an account? <a href="{{route('login')}}">Sign in
                                            here</a></p>
                                </div>
                            </div>
                        </form>
                    </div>

                    <div class="separator section-padding">
                        <div class="line"></div>
                        <p class="mb-0 fw-bold">OR</p>
                        <div class="line"></div>
                    </div>

                    <div class="d-flex gap-3 justify-content-center mt-4">
                        <a href="javascript:;"
                            class="wh-42 d-flex align-items-center justify-content-center rounded-circle bg-grd-danger">
                            <i class="bi bi-google fs-5 text-white"></i>
                        </a>
                        <a href="javascript:;"
                            class="wh-42 d-flex align-items-center justify-content-center rounded-circle bg-grd-deep-blue">
                            <i class="bi bi-facebook fs-5 text-white"></i>
                        </a>
                        <a href="javascript:;"
                            class="wh-42 d-flex align-items-center justify-content-center rounded-circle bg-grd-info">
                            <i class="bi bi-linkedin fs-5 text-white"></i>
                        </a>
                        <a href="javascript:;"
                            class="wh-42 d-flex align-items-center justify-content-center rounded-circle bg-grd-royal">
                            <i class="bi bi-github fs-5 text-white"></i>
                        </a>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!--end row-->
</div>
@endsection
