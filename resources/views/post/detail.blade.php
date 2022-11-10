@extends('layouts.app')

@section('title', $post->title . ' | by ' . $user->name)

@section('content')
    <div class="post-detail">
        <div class="post-detail__stage">
            <div class="grid wide">
                <div class="row">
                    <div class="col l-2 m-12 c-12"></div>
                    <div class="col l-8 m-12 c-12">
                        <h1 class="post-detail__title">{{ $post->title }}</h1>
                        <div class="post-detail__stage-header">
                            <div class="post-detail__author">
                                <a href="{{ route('account.profile', $user->id) }}">
                                    <img src="https://files.fullstack.edu.vn/f8-prod/user_avatars/1/623d4b2d95cec.png"
                                        alt="" class="post-detail__author-avatar">
                                </a>
                                <div class="post-detail__author-info">
                                    <a href="{{ route('account.profile', $user->id) }}">
                                        <h3 class="post-detail__author-name">
                                            {{ $user->name }}
                                            <i class="post-detail__author-tick fa-solid fa-circle-check"></i>
                                        </h3>
                                        <p class="post-detail__public-time">{{ $user->created_at }}</p>
                                    </a>
                                </div>
                            </div>
                            <div class="post-detail__share">
                                <i class="post-detail__share-dots fa-solid fa-ellipsis"></i>
                                <ul class="post-detail__share-list">
                                    <li class="post-detail__share-item">
                                        <i class="post-detail__share-item-icon fa-solid fa-link"></i>
                                        <span class="post-detail__share-item-label">Sao chép liên kết</span>
                                    </li>
                                    <li class="post-detail__share-item">
                                        <i class="post-detail__share-item-icon fa-brands fa-facebook"></i>
                                        <span class="post-detail__share-item-label">Chia sẻ lên Facebook</span>
                                    </li>
                                    <li class="post-detail__share-item">
                                        <i class="post-detail__share-item-icon fa-brands fa-instagram"></i>
                                        <span class="post-detail__share-item-label">Chia sẻ lên Instagram</span>
                                    </li>
                                    <li class="post-detail__share-item">
                                        <i class="post-detail__share-item-icon fa-brands fa-twitter"></i>
                                        <span class="post-detail__share-item-label">Chia sẻ lên Twitter</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="post-detail__stage-body">
                            {!! $post->content !!}
                        </div>
                        <div class="post-detail__stage-foot">
                            {!! html_heading_section('Bất động sản liên quan', true) !!}
                            <ul class="post-detail__stage-foot-list">
                                @for ($i = 0; $i < 5; $i++)
                                    <li class="post-detail__stage-foot-item">
                                        <a href="" class="post-detail__stage-foot-item-link">
                                            BĐS Cuối Năm: Người Có Tiền Chờ Đợi, Người Có Hàng Lo "Ngộp" BĐS Cuối Năm: Người
                                            Có Tiền Chờ Đợi, Người Có Hàng Lo "Ngộp"
                                        </a>
                                        <span class="post-detail__stage-foot-item-separate">|</span>
                                        <span class="post-detail__stage-foot-item-time">20/10/2022</span>
                                    </li>
                                @endfor
                            </ul>

                            {!! html_heading_section('Tin nhiều người đọc', true) !!}
                            <ul class="post-detail__stage-foot-list">
                                @for ($i = 0; $i < 5; $i++)
                                    <li class="post-detail__stage-foot-item">
                                        <a href="" class="post-detail__stage-foot-item-link">
                                            BĐS Cuối Năm: Người Có Tiền Chờ Đợi, Người Có Hàng Lo "Ngộp" BĐS Cuối Năm: Người
                                            Có Tiền Chờ Đợi, Người Có Hàng Lo "Ngộp"
                                        </a>
                                        <span class="post-detail__stage-foot-item-separate">|</span>
                                        <span class="post-detail__stage-foot-item-time">20/10/2022</span>
                                    </li>
                                @endfor
                            </ul>

                            {!! html_heading_section('Tin mới nhất', true) !!}
                            <ul class="post-detail__stage-foot-list">
                                @foreach ($new_posts as $post)
                                    @php
                                        $slug = Str::slug($post->title);
                                    @endphp

                                    <li class="post-detail__stage-foot-item">
                                        <a href="{{ route('post.detail', [$slug, $post->id]) }}"
                                            class="post-detail__stage-foot-item-link">
                                            {{ $post->title }}
                                        </a>
                                        <span class="post-detail__stage-foot-item-separate">|</span>
                                        <span class="post-detail__stage-foot-item-time">{{ $post->created_at }}</span>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                    <div class="col l-2 m-12 c-12"></div>
                </div>
            </div>
        </div>
    </div>
@endsection
