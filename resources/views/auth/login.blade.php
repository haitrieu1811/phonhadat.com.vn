@extends('layouts.onlyContent')

@section('title', 'Đăng nhập | phonhadat.com.vn')

@section('content')
    <div class="auth-wp"
        style="background-image: url({{ asset('images/bg/bg-01.jpg') }}); background-size: cover; background-position:center; background-repeat: no-repeat">
        <div class="auth">
            <a href="{{ url('/') }}" class="auth__logo-link">
                <img src="{{ asset('images/logo/logo.svg') }}" class="auth__logo-img" alt="">
                <span class="auth__logo-text">{{ env('APP_NAME') }}</span>
            </a>

            <div class="auth__form">
                <h2 class="auth__form-heading">Đăng Nhập</h2>
                <form method="POST" action="{{ route('login') }}">
                    @csrf
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
                    <div class="form-group">
                        <label for="password" class="form-label">Mật khẩu</label>
                        <input type="password" name="password" id="password" class="form-control" placeholder="********"
                            required>
                        @error('password')
                            <div class="form-messsage">{{ $message }}</div>
                        @enderror
                    </div>

                    {{-- Options --}}
                    <div class="auth__options">
                        <div>
                            <input type="checkbox" name="remember" id="remember-me" {{ old('remember') ? 'checked' : '' }}>
                            <label for="remember-me" class="auth__text">Lưu mật khẩu</label>
                        </div>
                        <a href="{{ route('password.request') }}" class="auth__link">Quên mật khẩu</a>
                    </div>

                    {{-- Submit --}}
                    <div class="form-group">
                        <input type="submit" value="Đăng nhập" class="btn btn-lg btn-block btn-primary">
                    </div>

                    {{-- Options --}}
                    <div class="auth__options">
                        <div>
                            Bạn chưa có tài khoản?
                            <a href="{{ route('register') }}" class="auth__link">Đăng kí</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
