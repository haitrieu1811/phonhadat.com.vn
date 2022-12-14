@extends('layouts.app')

@section('title', Auth::user()->name . ' | phonhadat.com.vn')

@section('content')
    <div class="profile">
        <div class="grid wide">
            {{-- Cover image --}}
            <div class="profile-banner" style="background-image: url({{ asset("images/cover/{$account->cover}") }})">
                {{-- Info --}}
                <div class="profile-banner__info">
                    <img src="{{ asset("images/user/{$account->avatar}") }}" alt="" class="profile-banner__avatar">
                    <h2 class="profile-banner__name">
                        {{ $account->name }}

                        @if ($account->tick)
                            <i class="profile-banner__tick fa-solid fa-circle-check"></i>
                        @endif
                    </h2>
                </div>
            </div>
        </div>

        {{-- Profile content --}}
        <div class="grid wide">
            <div class="profile-content">
                <div class="row">
                    <div class="col l-4 m-12 c-12">
                        {{-- Giới thiệu --}}
                        <div class="profile-box">
                            <div class="profile-box__head">
                                <h2 class="profile-box__head-label">Giới thiệu</h2>
                            </div>
                            <div class="profile-box__body">
                                @isset($account->bio)
                                    <p class="bio">{{ $account->bio }}</p>
                                @endisset

                                <ul class="profile__info-list">
                                    @isset($account->phone)
                                        <li class="profile__info-item">
                                            <i class="profile__info-item-icon fa-solid fa-phone"></i>
                                            <a href="tel:{{ $account->phone }}"
                                                class="profile__info-item-link">{{ $account->phone }}</a>
                                        </li>
                                    @endisset

                                    @isset($account->facebook)
                                        <li class="profile__info-item">
                                            <i class="profile__info-item-icon fa-brands fa-facebook"></i>
                                            <a href="{{ $account->facebook }}" class="profile__info-item-link"
                                                target="blank">{{ $account->facebook }}</a>
                                        </li>
                                    @endisset

                                    @isset($account->zalo)
                                        <li class="profile__info-item">
                                            <i class="profile__info-item-icon fa-brands fa-facebook"></i>
                                            <a href="{{ $account->zalo }}" class="profile__info-item-link"
                                                target="blank">{{ $account->zalo }}</a>
                                        </li>
                                    @endisset
                                </ul>
                            </div>
                        </div>

                        {{-- Đang theo dõi --}}
                        <div class="profile-box">
                            <div class="profile-box__head">
                                <h2 class="profile-box__head-label">Đang theo dõi - <small>28</small></h2>
                                <a href="" class="profile-box__head-link">Xem tất cả</a>
                            </div>
                            <div class="profile-box__body">
                                <div class="account-grid">
                                    <div class="row">
                                        @for ($i = 0; $i < 9; $i++)
                                            <div class="col l-4 m-4 c-6">
                                                <a href="">
                                                    <div class="account-grid__item">
                                                        <img src="https://files.fullstack.edu.vn/f8-prod/user_avatars/1/623d4b2d95cec.png"
                                                            alt="" class="account-grid__avatar">
                                                        <h2 class="account-grid__name">Trần Hải Triều</h2>
                                                    </div>
                                                </a>
                                            </div>
                                        @endfor
                                    </div>
                                </div>
                            </div>
                        </div>

                        {{-- Người theo dõi --}}
                        <div class="profile-box">
                            <div class="profile-box__head">
                                <h2 class="profile-box__head-label">Người theo dõi - <small>99</small></h2>
                                <a href="" class="profile-box__head-link">Xem tất cả</a>
                            </div>
                            <div class="profile-box__body">
                                <div class="account-grid">
                                    <div class="row">
                                        @for ($i = 0; $i < 9; $i++)
                                            <div class="col l-4 m-4 c-6">
                                                <a href="">
                                                    <div class="account-grid__item">
                                                        <img src="https://files.fullstack.edu.vn/f8-prod/user_avatars/1/623d4b2d95cec.png"
                                                            alt="" class="account-grid__avatar">
                                                        <h2 class="account-grid__name">Trần Hải Triều</h2>
                                                    </div>
                                                </a>
                                            </div>
                                        @endfor
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col l-8 m-12 c-12">
                        <div class="profile-box">
                            <div class="status-post">
                                <div class="status-post__control">
                                    <img src="https://files.fullstack.edu.vn/f8-prod/user_avatars/1/623d4b2d95cec.png"
                                        alt="" class="status-post__avatar">
                                    <textarea rows="5" class="status-post__input" placeholder="Bạn đang nghĩ gì ?"></textarea>
                                </div>

                                <div class="status-post__actions">
                                    <ul class="status-post__action-list">
                                        <li class="status-post__action-item">
                                            <i class="status-post__action-icon fa-solid fa-image"></i>
                                            <span class="status-post__action-label">Hình ảnh/Video</span>
                                        </li>
                                        <li class="status-post__action-item">
                                            <i class="status-post__action-icon fa-solid fa-earth-asia"></i>
                                            <span class="status-post__action-label">Trạng thái</span>
                                        </li>
                                    </ul>

                                    <button class="btn btn-md btn-primary visible">Đăng</button>
                                </div>
                            </div>
                        </div>

                        @for ($i = 0; $i < 2; $i++)
                            <div class="profile-box">
                                <div class="article">
                                    <div class="article-head">
                                        <div class="article-head__account">
                                            <a href="">
                                                <img src="https://files.fullstack.edu.vn/f8-prod/user_avatars/1/623d4b2d95cec.png"
                                                    alt="" class="article-head__account-avatar">
                                            </a>
                                            <div class="article-head__account-info">
                                                <a href="">
                                                    <h2 class="article-head__account-name">
                                                        Trần Hải Triều <i
                                                            class="article-head__account-tick fa-solid fa-circle-check"></i>
                                                    </h2>
                                                </a>
                                                <div class="article-head__account-config">
                                                    <div class="article-head__account-config-time">18/10/2022</div>
                                                    <span class="article-head__account-config-separate">.</span>
                                                    <i
                                                        class="article-head__account-config-scope fa-solid fa-earth-asia"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="article-head__actions">
                                            <i class="article-head__action-icon fa-solid fa-ellipsis"></i>
                                            <ul class="article-head__action-list">
                                                <li class="article-head__action-item">
                                                    <i
                                                        class="article-head__action-item-icon fa-solid fa-triangle-exclamation"></i>
                                                    <span class="article-head__action-item-label">Báo xấu</span>
                                                </li>
                                                <li class="article-head__action-item">
                                                    <i class="article-head__action-item-icon fa-regular fa-bookmark"></i>
                                                    <span class="article-head__action-item-label">Lưu bài viết</span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="article-body">
                                        <div class="article-body__status">
                                            Lorem ipsum dolor sit amet consectetur adipisicing
                                            elit. Corrupti iure dignissimos eveniet unde cupiditate sunt ratione officiis
                                            voluptatem autem. Possimus aspernatur voluptatibus repellendus quasi modi eum
                                            natus
                                            temporibus impedit commodi.
                                        </div>
                                        <div class="article-body__gallery">
                                            <img src="https://media.istockphoto.com/photos/business-office-building-in-london-england-picture-id511061090?k=20&m=511061090&s=612x612&w=0&h=nPelzFaYsfdi9j8Prva-ob89zxr870ZiH-bTN6X2X4o="
                                                alt="" class="article-body__img">
                                        </div>
                                    </div>
                                    <div class="article-foot">
                                        <div class="article-foot__analytics">
                                            <div class="article-foot__analytics-emoji">
                                                <div class="article-foot__analytics-emoji-list">
                                                    <img src="{{ asset('images/emoji/like.svg') }}" alt=""
                                                        class="article-foot__analytics-emoji-item">
                                                    <img src="{{ asset('images/emoji/heart.svg') }}" alt=""
                                                        class="article-foot__analytics-emoji-item">
                                                    <img src="{{ asset('images/emoji/haha.svg') }}" alt=""
                                                        class="article-foot__analytics-emoji-item">
                                                </div>
                                                <div class="article-foot__analytics-emoji-count">107K</div>
                                            </div>
                                            <div class="article-foot__analytics-interactive">
                                                <div class="article-foot__analytics-interactive-item">3K bình luận</div>
                                            </div>
                                        </div>
                                        <div class="article-foot__actions">
                                            <div class="article-foot__action article-foot__action-emoji">
                                                {!! html_emoji() !!}
                                                {!! html_emoji_released() !!}
                                            </div>
                                            <div class="article-foot__action">
                                                <i class="article-foot__action-icon fa-regular fa-message"></i>
                                                <span class="article-foot__action-label">Bình luận</span>
                                            </div>
                                            <div class="article-foot__action">
                                                <i class="article-foot__action-icon fa-solid fa-share"></i>
                                                <span class="article-foot__action-label">Chia sẻ</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endfor
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
