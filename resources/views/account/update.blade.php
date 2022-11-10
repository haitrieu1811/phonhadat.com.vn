@extends('layouts.app')

@section('title', 'Cài đặt tài khoản')

@section('content')
    @if (session('status'))
        {!! html_toast(session('status')) !!}
    @endif

    <div class="account-update">
        <div class="grid wide">
            <h1 class="account-update__heading" style="font-size: 3rem; margin:24px 0">Cập nhật tài khoản</h1>
            <form action="{{ route('account.updateStore') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="row">
                    <div class="col l-6 m-12 c-12">
                        {{-- Avatar --}}
                        <div class="form-group @error('avatar') form-group--invalid @enderror">
                            <label for="avatar" class="form-label">Ảnh đại diện</label>
                            <img src="{{ asset("images/user/{$account->avatar}") }}" alt=""
                                class="form-group__avatar" style="margin-bottom: 12px;">
                            <input type="file" name="avatar" id="avatar" class="form-control">
                            @error('avatar')
                                <p class="form-message">{{ $message }}</p>
                            @enderror
                        </div>

                        {{-- Cover --}}
                        <div class="form-group @error('cover') form-group--invalid @enderror">
                            <label for="cover" class="form-label">Ảnh bìa</label>
                            <img src="{{ asset("images/cover/{$account->cover}") }}" alt=""
                                class="form-group__cover" style="margin-bottom: 12px;">
                            <input type="file" name="cover" id="cover" class="form-control">
                            @error('cover')
                                <p class="form-message">{{ $message }}</p>
                            @enderror
                        </div>

                        {{-- Name --}}
                        <div class="form-group @error('name') form-group--invalid @enderror">
                            <label for="name" class="form-label">Họ tên</label>
                            <input type="text" name="name" id="name" class="form-control"
                                value="{{ $account->name }}">
                            @error('name')
                                <p class="form-message">{{ $message }}</p>
                            @enderror
                        </div>

                        {{-- Phone --}}
                        <div class="form-group @error('phone') form-group--invalid @enderror">
                            <label for="phone" class="form-label">Số điện thoại</label>
                            <input type="text" name="phone" id="phone" class="form-control"
                                value="{{ $account->phone }}">
                            @error('phone')
                                <p class="form-message">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                    <div class="col l-6 m-12 c-12">
                        {{-- Email --}}
                        <div class="form-group">
                            <label for="email" class="form-label">Email</label>
                            <input type="text" name="" id="email" class="form-control"
                                value="{{ $account->email }}" disabled>
                        </div>

                        {{-- Bio --}}
                        <div class="form-group @error('bio') form-group--invalid @enderror">
                            <label for="bio" class="form-label">Lời giới thiệu</label>
                            <input type="text" name="bio" id="bio" class="form-control"
                                value="{{ $account->bio }}">
                            @error('bio')
                                <p class="form-message">{{ $message }}</p>
                            @enderror
                        </div>

                        {{-- Facebook --}}
                        <div class="form-group @error('facebook') form-group--invalid @enderror">
                            <label for="facebook" class="form-label">Đường dẫn Facebook</label>
                            <input type="text" name="facebook" id="facebook" class="form-control"
                                value="{{ $account->facebook }}">
                            @error('facebook')
                                <p class="form-message">{{ $message }}</p>
                            @enderror
                        </div>

                        {{-- Zalo --}}
                        <div class="form-group @error('zalo') form-group--invalid @enderror">
                            <label for="zalo" class="form-label">Đường dẫn Zalo</label>
                            <input type="text" name="zalo" id="zalo" class="form-control"
                                value="{{ $account->zalo }}">
                            @error('zalo')
                                <p class="form-message">{{ $message }}</p>
                            @enderror
                        </div>

                        {{-- Created at --}}
                        <div class="form-group">
                            <label for="created_at" class="form-label">Thời gian tạo</label>
                            <input type="text" name="" id="created_at" class="form-control"
                                value="{{ $account->created_at }}" disabled>
                        </div>

                        {{-- Updated at --}}
                        <div class="form-group">
                            <label for="updated_at" class="form-label">Cập nhật gần nhất</label>
                            <input type="text" name="" id="updated_at" class="form-control"
                                value="{{ $account->updated_at }}" disabled>
                        </div>

                        <div class="form-group">
                            <input type="submit" class="form-submit" value="Cập nhật">
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
