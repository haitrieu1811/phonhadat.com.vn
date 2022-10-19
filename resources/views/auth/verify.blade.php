@extends('layouts.onlyContent')

@section('title', 'Xác minh tài khoản')

@section('content')
    {{-- <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Verify Your Email Address') }}</div>

                    <div class="card-body">
                        @if (session('resent'))
                            <div class="alert alert-success" role="alert">
                                {{ __('A fresh verification link has been sent to your email address.') }}
                            </div>
                        @endif

                        {{ __('Before proceeding, please check your email for a verification link.') }}
                        {{ __('If you did not receive the email') }},
                        <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                            @csrf
                            <button type="submit"
                                class="btn btn-link p-0 m-0 align-baseline">{{ __('click here to request another') }}</button>.
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
                @if (session('resent'))
                    <div class="alert alert-success" role="alert">
                        {{ __('A fresh verification link has been sent to your email address.') }}
                    </div>
                @endif

                <h2 class="auth__form-heading">Xác minh địa chỉ email của bạn</h2>
                <form method="POST" action="{{ route('verification.resend') }}">
                    @csrf
                    <h3 style="font-size: 1.6rem; color: var(--text-color); line-height:1.5; margin-bottom: 20px">
                        Trước khi tiếp tục, vui lòng kiểm tra email của bạn để biết liên kết xác minh. Nếu bạn không nhận
                        được email:
                    </h3>
                    {{-- Submit --}}
                    <div class="form-group">
                        <input type="submit" value="Click vào dây để tạo yêu cầu khác"
                            class="btn btn-lg btn-block btn-primary">
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
