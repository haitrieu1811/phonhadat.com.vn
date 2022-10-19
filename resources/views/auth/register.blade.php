@extends('layouts.onlyContent')

@section('title', 'Đăng kí | phonhadat.com.vn')

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
                                    <input id="name" type="text"
                                        class="form-control @error('name') is-invalid @enderror" name="name"
                                        value="{{ old('name') }}" required autocomplete="name" autofocus>

                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="email"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                                <div class="col-md-6">
                                    <input id="email" type="email"
                                        class="form-control @error('email') is-invalid @enderror" name="email"
                                        value="{{ old('email') }}" required autocomplete="email">

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="password"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

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
                                <label for="password-confirm"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>

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

    <div class="auth-wp"
        style="background-image: url({{ asset('images/bg/bg-01.jpg') }}); background-size: cover; background-position:center; background-repeat: no-repeat">
        <div class="auth">
            <a href="{{ url('/') }}" class="auth__logo-link">
                <img src="{{ asset('images/logo/logo.svg') }}" class="auth__logo-img" alt="">
                <span class="auth__logo-text">Flowbite</span>
            </a>

            <div class="auth__form">
                <h2 class="auth__form-heading">Đăng Kí</h2>
                <form method="POST" action="{{ route('register') }}">
                    @csrf
                    {{-- Name --}}
                    <div class="form-group @error('name') form-group--invalid @enderror">
                        <label for="name" class="form-label">Họ tên</label>
                        <input type="text" name="name" id="name" class="form-control" placeholder="Nguyễn Văn A"
                            value="{{ old('name') }}" required>
                        @error('name')
                            <p class="form-message">{{ $message }}</p>
                        @enderror
                    </div>

                    {{-- Email --}}
                    <div class="form-group @error('email') form-group--invalid @enderror">
                        <label for="email" class="form-label">Email</label>
                        <input type="text" name="email" id="email" class="form-control"
                            placeholder="nguyenvana@gmail.com" value="{{ old('email') }}" required>
                        @error('email')
                            <p class="form-message">{{ $message }}</p>
                        @enderror
                    </div>

                    {{-- Password --}}
                    <div class="form-group @error('password') form-group--invalid @enderror">
                        <label for="password" class="form-label">Mật khẩu</label>
                        <input type="password" name="password" id="password" class="form-control" placeholder="********"
                            required>
                        @error('password')
                            <p class="form-message">{{ $message }}</p>
                        @enderror
                    </div>

                    {{-- Password Confirm --}}
                    <div class="form-group">
                        <label for="password-confirm" class="form-label">Nhập lại mật khẩu</label>
                        <input type="password" name="password_confirmation" id="password-confirm" class="form-control"
                            placeholder="********" required>
                    </div>

                    {{-- Submit --}}
                    <div class="form-group">
                        <input type="submit" value="Đăng kí" class="btn btn-lg btn-block btn-primary">
                    </div>

                    {{-- Options --}}
                    <div class="auth__options">
                        <div>
                            Bạn đã có tài khoản?
                            <a href="{{ route('login') }}" class="auth__link">Đăng nhập</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
