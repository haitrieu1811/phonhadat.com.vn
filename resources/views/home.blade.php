@extends('layouts.app')

@section('title', 'Trang chủ | phonhadat.com.vn')

@section('content')
    <div class="grid wide">
        <div class="carousel-home">
            {{-- Carousel --}}
            <div class="owl-carousel owl-carousel-home owl-theme">
                <div class="item">
                    <img src="https://images.unsplash.com/photo-1467803738586-46b7eb7b16a1?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1332&q=80"
                        alt="">
                </div>
                <div class="item">
                    <img src="https://plus.unsplash.com/premium_photo-1661315431756-f9870d5ff5a0?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1170&q=80"
                        alt="">
                </div>
                <div class="item">
                    <img src="https://images.unsplash.com/photo-1471039497385-b6d6ba609f9c?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1170&q=80"
                        alt="">
                </div>
            </div>

            {{-- Search --}}
            <div class="carousel-home__search">

            </div>
        </div>
    </div>

    <div class="grid wide">
        <div class="tab">
            <div class="tab__nav">
                <a href="#news" class="tab__nav-item active">Tin tức</a>
                <a href="#fengshui" class="tab__nav-item">Phong thủy</a>
                <a href="#lifelesson" class="tab__nav-item">Bài học cuộc sống</a>
            </div>
            <div class="tab__pane">
                <div class="tab__pane-item active" id="news">
                    <div class="posts">
                        <div class="grid">
                            <div class="row">
                                <div class="col l-4 m-12 c-12">
                                    @php
                                        $slug = Str::slug($large_post->title);
                                    @endphp

                                    <div class="large-post">
                                        <a href="{{ route('post.detail', [$slug, $large_post->id]) }}">
                                            <img src="{{ asset("images/post/{$large_post->thumbnail}") }}"
                                                class="large-post__thumb" />
                                        </a>
                                        <a href="{{ route('post.detail', [$slug, $large_post->id]) }}">
                                            <h3 class="large-post__title">{{ $large_post->title }}</h3>
                                        </a>
                                        <p class="large-post__time">
                                            <i class="large-post__time-icon fa-regular fa-calendar"></i>
                                            {{ $large_post->created_at }}
                                        </p>
                                    </div>
                                </div>
                                <div class="col l-4 m-12 c-12">
                                    @foreach ($posts_1 as $post)
                                        @php
                                            $slug = Str::slug($post->title);
                                        @endphp

                                        <div class="post">
                                            <a href="{{ route('post.detail', [$slug, $post->id]) }}" class="post-thumb-wp">
                                                <img src="{{ asset("images/post/{$post->thumbnail}") }}" alt=""
                                                    class="post-thumb">
                                            </a>
                                            <div class="post-info">
                                                <a href="{{ route('post.detail', [$slug, $post->id]) }}">
                                                    <h2 class="post-info__title">{{ $post->title }}</h2>
                                                </a>
                                                <p class="post-info__time">
                                                    <i class="post-info__time-icon fa-regular fa-calendar"></i>
                                                    {{ $post->created_at }}
                                                </p>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                                <div class="col l-4 m-12 c-12">
                                    @for ($i = 0; $i < 4; $i++)
                                        <div class="post">
                                            <a href="{{ route('post.detail', ['slug-test', 1]) }}" class="post-thumb-wp">
                                                <img src="https://file4.batdongsan.com.vn/crop/610x342/2022/10/05/wxbwknn6/20221005162517-8228.jpg"
                                                    alt="" class="post-thumb">
                                            </a>
                                            <div class="post-info">
                                                <a href="{{ route('post.detail', ['slug-test', 1]) }}">
                                                    <h2 class="post-info__title">Mẫu Hợp Đồng Góp Vốn Mua Đất Và 3 Rủi Ro
                                                        Cần
                                                        Lưu Ý</h2>
                                                </a>
                                                <p class="post-info__time">
                                                    <i class="post-info__time-icon fa-regular fa-calendar"></i> 13/10/2022
                                                </p>
                                            </div>
                                        </div>
                                    @endfor
                                </div>
                            </div>
                        </div>
                    </div>
                    <p class="see-more mt-3">
                        <a href="" class="see-more__link">
                            Xem thêm <i class="see-more__icon fa-solid fa-arrow-right-long"></i>
                        </a>
                    </p>
                </div>
                <div class="tab__pane-item" id="fengshui">Phong thủy content</div>
                <div class="tab__pane-item" id="lifelesson">Bài học cuộc sống content</div>
            </div>
        </div>
    </div>

    <div class="products py-5">
        <div class="grid wide">
            {!! html_heading_section('Bất động sản dành cho bạn', true) !!}

            <div class="row">
                @for ($i = 0; $i < 8; $i++)
                    <div class="col l-3 m-6 c-12">
                        <div class="product">
                            <span class="product__badge product__badge--danger">
                                <span>Nổi bật</span>
                            </span>

                            <a href="{{ route('product.detail', ['slug', 1]) }}">
                                <img src="https://file4.batdongsan.com.vn/crop/257x147/2022/10/03/20221003203538-f07d_wm.jpeg"
                                    class="product__thumb" alt="">
                            </a>

                            <div class="product__info">
                                <a href="{{ route('product.detail', ['slug', 1]) }}">
                                    <h3 class="product__title">
                                        Tôi cần bán Shophouse mặt phố Xuân La, Tây Hồ, đang cho thuê dài
                                        hạn. LH
                                    </h3>
                                </a>
                                <div class="product__config">
                                    23 triệu/tháng . 80 m²
                                </div>
                                <div class="product__location">Ba Đình, Hà Nội</div>
                                <div class="product__foot">
                                    <a href="{{ route('account.profile', 1) }}" class="product__broker">
                                        <img src="https://files.fullstack.edu.vn/f8-prod/user_avatars/1/623d4b2d95cec.png"
                                            class="product__broker-avatar" alt="">
                                        <h4 class="product__broker-name">Trần Hải Triều</h4>
                                    </a>
                                    <div class="product__actions">
                                        <span class="product__action">
                                            <i class="product__action-icon fa-regular fa-heart"></i>
                                        </span>
                                        <span class="product__action">
                                            <i class="product__action-icon fa-solid fa-magnifying-glass"></i>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endfor
            </div>
        </div>
    </div>

    <div class="projects py-5">
        <div class="grid wide">
            {!! html_heading_section('Dự án nổi bật', true) !!}

            <div class="owl-carousel owl-carousel-project owl-theme">
                @for ($i = 0; $i < 8; $i++)
                    <div class="item">
                        <div class="project">
                            <a href="">
                                <img src="https://file4.batdongsan.com.vn/crop/260x146/2022/10/10/20221010120439-52b2_wm.jpg"
                                    alt="" class="project__thumb">
                            </a>
                            <div class="project__info">
                                <span class="badge badge-success">Đang mở bán</span>
                                <a href="">
                                    <h2 class="project__title">Hoàn Thành Pearl</h2>
                                </a>
                                <div class="project__config">
                                    23 triệu/tháng . 80 m²
                                </div>
                                <div class="project__location">
                                    Nam Từ Liêm, Hà Nội
                                </div>
                            </div>
                        </div>
                    </div>
                @endfor
            </div>
        </div>
    </div>
@endsection
