@extends('layouts.onlyContent')

@section('title', 'Quên mật khẩu | phonhadat.com.vn')

@section('content')
    <div class="auth-wp"
        style="background-image: url({{ asset('images/bg/bg-01.jpg') }}); background-size: cover; background-position:center; background-repeat: no-repeat">
        <div class="auth">
            <a href="{{ url('/') }}" class="auth__logo-link">
                <img src="{{ asset('images/logo/logo.svg') }}" class="auth__logo-img" alt="">
                <span class="auth__logo-text">{{ env('APP_NAME') }}</span>
            </a>

            <div class="auth__form">
                @if (session('status'))
                    {!! html_alert(session('status')) !!}
                @endif

                <h2 class="auth__form-heading">Quên mật khẩu</h2>
                <form method="POST" action="{{ route('password.email') }}">
                    @csrf

                    {{-- Email --}}
                    <div class="form-group @error('email') form-group--invalid @enderror">
                        <label for="email" class="form-label">Email đăng kí</label>
                        <input type="text" name="email" id="email" class="form-control"
                            placeholder="nguyenvana@gmail.com" value="{{ old('email') }}" required>
                        @error('email')
                            <p class="form-message">{{ $message }}</p>
                        @enderror
                    </div>

                    {{-- Submit --}}
                    <div class="form-group">
                        <input type="submit" value="Gửi mail" class="btn btn-lg btn-block btn-primary">
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
