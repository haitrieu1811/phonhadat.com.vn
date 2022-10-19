<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>

    {{-- Jquery --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>

    {{-- OWL Carousel --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>

    {{-- Font awsome --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/grid.css') }}" rel="stylesheet">
    <link href="{{ asset('css/base.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
</head>

<body>
    <div id="app">
        <header id="header">
            <nav class="navbar">
                {{-- Directional --}}
                <div class="navbar__directional">
                    {{-- Logo --}}
                    <a href="{{ route('home') }}" class="navbar__logo-link">
                        <img src="{{ asset('images/logo/logo.svg') }}" alt="" class="navbar__logo-img">
                    </a>

                    {{-- Menu --}}
                    <ul class="navbar__menu">
                        <li class="navbar__menu-item">
                            <a href="{{ route('home') }}" class="navbar__menu-link">Trang chủ</a>
                        </li>
                        <li class="navbar__menu-item">
                            <a href="" class="navbar__menu-link">Dự án</a>
                        </li>
                        <li class="navbar__menu-item">
                            <a href="" class="navbar__menu-link">Tin tức</a>
                        </li>
                        <li class="navbar__menu-item">
                            <a href="" class="navbar__menu-link">Sản phẩm</a>
                        </li>
                        <li class="navbar__menu-item">
                            <a href="" class="navbar__menu-link">Danh bạ</a>

                            <ul class="navbar__sub-menu">
                                <li class="navbar__sub-menu-item">
                                    <a href="" class="navbar__sub-menu-link">Nhà môi giới</a>
                                </li>
                                <li class="navbar__sub-menu-item">
                                    <a href="" class="navbar__sub-menu-link">Doanh nghiệp</a>
                                </li>
                            </ul>
                        </li>
                        <li class="navbar__menu-item">
                            <a href="" class="navbar__menu-link">Cộng đồng</a>
                        </li>
                    </ul>
                </div>

                {{-- Account --}}
                <div class="navbar__account">
                    @guest
                        {{-- Login, logout --}}
                        <div class="navbar__account-buttons">
                            @if (Route::has('login'))
                                <a href="{{ route('login') }}" class="navbar__account-buttons-link">Đăng nhập</a>
                            @endif
                            <span class="navbar__account-buttons-seperate">|</span>
                            @if (Route::has('register'))
                                <a href="{{ route('register') }}" class="navbar__account-buttons-link">Đăng kí</a>
                            @endif
                        </div>
                    @else
                        {{-- Product saved --}}
                        <div class="navbar__popper navbar__product-saved">
                            <i class="navbar__popper-icon fa-solid fa-heart"></i>
                            <span class="navbar__popper-badge">28</span>
                            <div class="navbar__popper-main">
                                <header class="navbar__popper-head">
                                    <h3 class="navbar__popper-label">Tin đăng đã lưu</h3>
                                    <div class="navbar__popper-actions">
                                        <i class="navbar__popper-action-icon fa-solid fa-ellipsis"></i>
                                        <ul class="navbar__popper-action-list">
                                            <li class="navbar__popper-action-item">
                                                <i class="navbar__popper-action-item-icon fa-solid fa-check"></i>
                                                Xóa tất cả
                                            </li>
                                        </ul>
                                    </div>
                                </header>

                                <ul class="navbar__product-saved-list">
                                    @for ($i = 0; $i < 10; $i++)
                                        <li class="navbar__product-saved-item">
                                            <a href="" class="navbar__product-saved-link">
                                                <img src="https://file4.batdongsan.com.vn/crop/257x147/2022/09/27/20220927151310-c9d6_wm.jpg"
                                                    class="navbar__product-saved-item-thumb" />
                                                <div class="navbar__product-saved-item-info">
                                                    <h3 class="navbar__product-saved-item-title">Quỹ căn VIP - Vinhome Ocean
                                                        Park -
                                                        The Crown, Cam kết mua lại 37.5%/giá, thuê 6%/năm PKD 0914 438</h3>
                                                    <p class="navbar__product-saved-item-time">
                                                        <i
                                                            class="navbar__product-saved-item-time-icon fa-regular fa-calendar"></i>
                                                        12/10/2022
                                                    </p>
                                                </div>
                                            </a>
                                        </li>
                                    @endfor
                                </ul>
                            </div>
                        </div>

                        {{-- Notification --}}
                        <div class="navbar__popper navbar__notification">
                            <i class="navbar__popper-icon fa-solid fa-bell"></i>
                            <span class="navbar__popper-badge">28</span>
                            <div class="navbar__popper-main">
                                <header class="navbar__popper-head">
                                    <h3 class="navbar__popper-label">Thông báo</h3>
                                    <div class="navbar__popper-actions">
                                        <i class="navbar__popper-action-icon fa-solid fa-ellipsis"></i>
                                        <ul class="navbar__popper-action-list">
                                            <li class="navbar__popper-action-item">
                                                <i class="navbar__popper-action-item-icon fa-solid fa-check"></i>
                                                Đánh dấu tất cả đã đọc
                                            </li>
                                        </ul>
                                    </div>
                                </header>

                                <ul class="navbar__notification-list">
                                    @for ($i = 0; $i < 10; $i++)
                                        <li class="navbar__notification-item">
                                            <a href="" class="navbar__notification-link">
                                                <img src="https://files.fullstack.edu.vn/f8-prod/user_avatars/1/623d4b2d95cec.png"
                                                    alt="" class="navbar__notification-item-img">
                                                <div class="navbar__notification-item-info">
                                                    <p class="navbar__notification-item-title">Sơn Đặng đã thả Tim vào một
                                                        bình
                                                        luận
                                                        của bạn.</p>
                                                    <p class="navbar__notification-item-time">
                                                        <i
                                                            class="navbar__notification-item-time-icon fa-regular fa-calendar"></i>
                                                        12/10/2022
                                                    </p>
                                                </div>
                                            </a>
                                        </li>
                                    @endfor
                                </ul>
                            </div>
                        </div>

                        {{-- Logged user --}}
                        <div class="logged-user">
                            <img src="https://files.fullstack.edu.vn/f8-prod/user_avatars/1/623d4b2d95cec.png"
                                alt="" class="logged-user__avatar">

                            <ul class="logged-user__actions">
                                <li class="logged-user__actions-item">
                                    <a href="{{ route('dashboard') }}" class="logged-user__actions-link">Dashboard</a>
                                </li>
                                <li class="logged-user__actions-item">
                                    <a href="{{ route('account.profile', Auth::id()) }}"
                                        class="logged-user__actions-link">Trang cá
                                        nhân</a>
                                </li>
                                <li class="logged-user__actions-item">
                                    <a href="" class="logged-user__actions-link">Cập nhật thông tin</a>
                                </li>
                                <li class="logged-user__actions-item">
                                    <a href="" class="logged-user__actions-link"
                                        onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">Đăng
                                        xuất</a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                        class="d-none">
                                        @csrf
                                    </form>
                                </li>
                            </ul>
                        </div>
                    @endguest
                </div>
            </nav>
        </header>

        <main id="content">
            @yield('content')
        </main>

        <footer id="footer">
            <div class="footer-body">
                <div class="grid wide">
                    <div class="row">
                        <div class="col l-3 m-6 c-12">
                            <h2 class="footer-heading">Trang</h2>
                            <ul class="footer-list">
                                <li class="footer-item">
                                    <a href="" class="footer-item__link">Dự án</a>
                                </li>
                                <li class="footer-item">
                                    <a href="" class="footer-item__link">Tin tức</a>
                                </li>
                                <li class="footer-item">
                                    <a href="" class="footer-item__link">Sản phẩm</a>
                                </li>
                                <li class="footer-item">
                                    <a href="" class="footer-item__link">Danh bạ</a>
                                </li>
                            </ul>
                        </div>
                        <div class="col l-3 m-6 c-12">
                            <h2 class="footer-heading">Trang</h2>
                            <ul class="footer-list">
                                <li class="footer-item">
                                    <a href="" class="footer-item__link">Dự án</a>
                                </li>
                                <li class="footer-item">
                                    <a href="" class="footer-item__link">Tin tức</a>
                                </li>
                                <li class="footer-item">
                                    <a href="" class="footer-item__link">Sản phẩm</a>
                                </li>
                                <li class="footer-item">
                                    <a href="" class="footer-item__link">Danh bạ</a>
                                </li>
                            </ul>
                        </div>
                        <div class="col l-3 m-6 c-12">
                            <h2 class="footer-heading">Trang</h2>
                            <ul class="footer-list">
                                <li class="footer-item">
                                    <a href="" class="footer-item__link">Dự án</a>
                                </li>
                                <li class="footer-item">
                                    <a href="" class="footer-item__link">Tin tức</a>
                                </li>
                                <li class="footer-item">
                                    <a href="" class="footer-item__link">Sản phẩm</a>
                                </li>
                                <li class="footer-item">
                                    <a href="" class="footer-item__link">Danh bạ</a>
                                </li>
                            </ul>
                        </div>
                        <div class="col l-3 m-6 c-12">
                            <h2 class="footer-heading">Trang</h2>
                            <ul class="footer-list">
                                <li class="footer-item">
                                    <a href="" class="footer-item__link">Dự án</a>
                                </li>
                                <li class="footer-item">
                                    <a href="" class="footer-item__link">Tin tức</a>
                                </li>
                                <li class="footer-item">
                                    <a href="" class="footer-item__link">Sản phẩm</a>
                                </li>
                                <li class="footer-item">
                                    <a href="" class="footer-item__link">Danh bạ</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <span class="back-to-top">
                <i class="back-to-top__icon fa-solid fa-arrow-up-long"></i>
            </span>
        </footer>
    </div>

    <!-- Scripts -->
    <script type="module" src="{{ asset('js/main.js') }}"></script>
</body>

</html>
