<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

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
                        {{-- Logged user --}}
                        <div class="logged-user">
                            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSSlLFlDQKA6UUxFXmWwBjqlz9BG43D4j_QOQ&usqp=CAU"
                                alt="" class="logged-user__avatar">

                            <ul class="logged-user__actions">
                                <li class="logged-user__actions-item">
                                    <a href="" class="logged-user__actions-link">Thông tin tài khoản</a>
                                </li>
                                <li class="logged-user__actions-item">
                                    <a href="" class="logged-user__actions-link"
                                        onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">Đăng
                                        xuất</a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
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
            <h1>Footer</h1>
        </footer>
    </div>
</body>

</html>
