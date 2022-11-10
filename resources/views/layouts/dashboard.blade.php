<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="{{ asset('images/logo/logo.svg') }}">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>

    {{-- Jquery --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>

    {{-- Charjs --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.6.0/Chart.min.js"></script>

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
    <link href="{{ asset('css/dashboard/style.css') }}" rel="stylesheet">
    <link href="{{ asset('css/form.css') }}" rel="stylesheet">
    <link href="{{ asset('css/all.css') }}" rel="stylesheet">
    <link href="{{ asset('css/button.css') }}" rel="stylesheet">

    {{-- Tiny cloud --}}
    <script src="https://cdn.tiny.cloud/1/p7hg2b28exndf0ssyhzi3t5zi8ym69qxm7wlb3knudsyxl4w/tinymce/5/tinymce.min.js"
        referrerpolicy="origin"></script>

    <script>
        var editor_config = {
            path_absolute: "http://localhost/phonhadat.com.vn/",
            selector: 'textarea.tiny-clound',
            relative_urls: false,
            plugins: [
                "advlist autolink lists link image charmap print preview hr anchor pagebreak",
                "searchreplace wordcount visualblocks visualchars code fullscreen",
                "insertdatetime media nonbreaking save table directionality",
                "emoticons template paste textpattern"
            ],
            toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image media | code preview fullscreen",
            file_picker_callback: function(callback, value, meta) {
                var x = window.innerWidth || document.documentElement.clientWidth || document.getElementsByTagName(
                    'body')[0].clientWidth;
                var y = window.innerHeight || document.documentElement.clientHeight || document
                    .getElementsByTagName('body')[0].clientHeight;

                var cmsURL = editor_config.path_absolute + 'laravel-filemanager?editor=' + meta.fieldname;
                if (meta.filetype == 'image') {
                    cmsURL = cmsURL + "&type=Images";
                } else {
                    cmsURL = cmsURL + "&type=Files";
                }

                tinyMCE.activeEditor.windowManager.openUrl({
                    url: cmsURL,
                    title: 'Filemanager',
                    width: x * 0.8,
                    height: y * 0.8,
                    resizable: "yes",
                    close_previous: "no",
                    onMessage: (api, message) => {
                        callback(message.content);
                    }
                });
            }
        };

        tinymce.init(editor_config);
    </script>
</head>

<body>
    <div id="app">
        <div class="toasts"></div>

        {{-- Begin: Header --}}
        <header id="header">
            <div class="navbar">
                <div class="header-left"></div>
                <div class="header-right">
                    <div class="header-account">
                        @php
                            $account = Auth::user();
                        @endphp

                        <img src="{{ asset("images/user/{$account->avatar}") }}" alt=""
                            class="header-account__avatar">
                        <div class="header-account__welcome">
                            <div class="header-account__welcome-text">{{ $account->name }}</div>
                            <i class="header-account__welcome-chevron fa-solid fa-chevron-down"></i>
                        </div>
                        <ul class="header-account__actions">
                            <li class="header-account__action-item">
                                <a href="{{ route('home') }}" class="header-account__action-link">
                                    <i class="header-account__action-icon fa-solid fa-house"></i>
                                    <span class="header-account__action-label">Trang chính</span>
                                </a>
                            </li>
                            <li class="header-account__action-item">
                                <a href="{{ route('account.profile') }}" class="header-account__action-link">
                                    <i class="header-account__action-icon fa-regular fa-user"></i>
                                    <span class="header-account__action-label">Tài khoản</span>
                                </a>
                            </li>
                            <li class="header-account__action-item">
                                <a href="{{ route('account.update') }}" class="header-account__action-link">
                                    <i class="header-account__action-icon fa-solid fa-gears"></i>
                                    <span class="header-account__action-label">Cập nhật thông tin</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </header>

        {{-- Sidebar --}}
        <aside id="sidebar">
            <a href="{{ route('dashboard') }}">
                <div class="sidebar-logo">
                    <img src="{{ asset('images/logo/logo.svg') }}" alt="" class="sidebar-logo__img">
                    <span class="sidebar-logo__text">phonhadat</span>
                </div>
            </a>
            <div class="sidebar-navigation">
                <div class="sidebar-navigation__item">
                    <h2 class="sidebar-navigation__item-heading">Điều hướng</h2>
                    <ul class="sidebar-navigation__item-list">
                        <li class="sidebar-navigation__item-list-item active">
                            <a href="" class="sidebar-navigation__item-list-item-link toggle">
                                <span class="sidebar-navigation__item-list-item-label">
                                    <i class="sidebar-navigation__item-list-item-label-icon fa-solid fa-tags"></i>
                                    <span class="sidebar-navigation__item-list-item-label-text">Quản lí sản phẩm</span>
                                </span>
                                <i class="sidebar-navigation__item-list-item-arrow fa-solid fa-angle-right"></i>
                            </a>

                            <ul class="sidebar-navigation__item-submenu">
                                <li class="sidebar-navigation__item-submenu-item">
                                    <a href="" class="sidebar-navigation__item-submenu-item-link">Danh sách</a>
                                </li>
                                <li class="sidebar-navigation__item-submenu-item">
                                    <a href="" class="sidebar-navigation__item-submenu-item-link">Thêm mới</a>
                                </li>
                            </ul>
                        </li>

                        <li class="sidebar-navigation__item-list-item active">
                            <a href="" class="sidebar-navigation__item-list-item-link toggle">
                                <span class="sidebar-navigation__item-list-item-label">
                                    <i
                                        class="sidebar-navigation__item-list-item-label-icon fa-regular fa-newspaper"></i>
                                    <span class="sidebar-navigation__item-list-item-label-text">Quản lí bài viết</span>
                                </span>
                                <i class="sidebar-navigation__item-list-item-arrow fa-solid fa-angle-right"></i>
                            </a>

                            <ul class="sidebar-navigation__item-submenu">
                                <li class="sidebar-navigation__item-submenu-item">
                                    <a href="{{ route('admin.post.read') }}"
                                        class="sidebar-navigation__item-submenu-item-link">Danh sách</a>
                                </li>
                                <li class="sidebar-navigation__item-submenu-item">
                                    <a href="{{ route('admin.post.create') }}"
                                        class="sidebar-navigation__item-submenu-item-link">Thêm mới</a>
                                </li>
                                <li class="sidebar-navigation__item-submenu-item">
                                    <a href="{{ route('admin.post.trash') }}"
                                        class="sidebar-navigation__item-submenu-item-link">Giỏ rác</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>

                <div class="sidebar-navigation__item">
                    <h2 class="sidebar-navigation__item-heading">Khác</h2>
                    <ul class="sidebar-navigation__item-list">
                        <li class="sidebar-navigation__item-list-item">
                            <a href="" class="sidebar-navigation__item-list-item-link">
                                <span class="sidebar-navigation__item-list-item-label">
                                    <i
                                        class="sidebar-navigation__item-list-item-label-icon fa-regular fa-trash-can"></i>
                                    <span class="sidebar-navigation__item-list-item-label-text">Giỏ rác</span>
                                </span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </aside>

        {{-- Content --}}
        <main id="content">
            @yield('content')
        </main>
    </div>

    <!-- Scripts -->
    <script type="module" src="{{ asset('js/main.js') }}"></script>
</body>

</html>
