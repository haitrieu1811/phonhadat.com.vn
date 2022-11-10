@extends('layouts.onlyContent')

@section('title', 'Đổi mật khẩu | phonhadat.com.vn')

@section('content')
    <div class="auth-wp"
        style="background-image: url({{ asset('images/bg/bg-01.jpg') }}); background-size: cover; background-position:center; background-repeat: no-repeat">
        <div class="auth">
            <a href="{{ url('/') }}" class="auth__logo-link">
                <img src="{{ asset('images/logo/logo.svg') }}" class="auth__logo-img" alt="">
                <span class="auth__logo-text">{{ env('APP_NAME') }}</span>
            </a>

            <div class="auth__form">
                <h2 class="auth__form-heading">Đổi mật khẩu</h2>
                <form method="POST" action="{{ route('password.update') }}">
                    @csrf

                    <input type="hidden" name="token" value="{{ $token }}">

                    {{-- Email --}}
                    <div class="form-group @error('email') form-group--invalid @enderror">
                        <label for="email" class="form-label">Email</label>
                        <input type="text" name="email" id="email" class="form-control"
                            placeholder="nguyenvana@gmail.com" value="{{ $email ?? old('email') }}" required>
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
                </form>
            </div>
        </div>
    </div>
@endsection
