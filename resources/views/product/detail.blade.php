@extends('layouts.app')

@section('title', 'Title')

@section('content')
    <div class="product-detail">
        {{-- Info float --}}
        <div class="product-detail__info-float">
            <div class="grid wide">
                <div class="product-detail__info-float-container">
                    <div class="product-detail__info-float-info">
                        <div class="product-detail__info-float-config">
                            <span class="product-detail__info-float-config-label">6.5 tỷ</span>
                            <span class="product-detail__info-float-config-separate"></span>
                            <span class="product-detail__info-float-config-label">162 m<sup>2</sup></span>
                        </div>
                        <p class="product-detail__info-float-location">
                            Đường 6, Thị trấn Lương Sơn, Lương Sơn, Hòa Bình Tuấn
                        </p>
                    </div>
                    <div class="product-detail__info-float-contact">
                        <a href="{{ route('account.profile', 1) }}">
                            <div class="product-detail__info-float-broker">
                                <img src="https://files.fullstack.edu.vn/f8-prod/user_avatars/1/623d4b2d95cec.png"
                                    alt="" class="product-detail__info-float-broker-avatar">
                                <h3 class="product-detail__info-float-broker-name">Triều</h3>
                            </div>
                        </a>
                        <div class="product-detail__info-float-contact-buttons">
                            <a href="" class="product-detail__info-float-contact-button-outline" target="blank">
                                <img src="https://cdn.chanhtuoi.com/uploads/2020/10/logo-zalo.jpg" alt=""
                                    class="product-detail__info-float-contact-button-icon">
                                Zalo Chat
                            </a>
                            <a href="{{ route('chat.show') }}" class="product-detail__info-float-contact-button-outline"
                                target="blank">
                                <i class="product-detail__info-float-contact-button-icon fa-regular fa-message"></i>
                                Chat
                            </a>
                            <a href="" class="product-detail__info-float-contact-button-outline">Yêu cầu liên hệ
                                lại</a>
                            <a href="" class="product-detail__info-float-contact-button-fill">0775.939.704</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- Slider images --}}
        <div class="product-detail__slider-images">
            <div class="grid wide">
                <div class="owl-carousel owl-carousel-product-detail owl-theme">
                    <div class="item">
                        <a href="https://images.unsplash.com/photo-1467803738586-46b7eb7b16a1?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1332&q=80"
                            data-fancybox='gallery'>
                            <img src="https://images.unsplash.com/photo-1467803738586-46b7eb7b16a1?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1332&q=80"
                                alt="">
                        </a>
                    </div>
                    <div class="item">
                        <a href="https://plus.unsplash.com/premium_photo-1661315431756-f9870d5ff5a0?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1170&q=80"
                            data-fancybox='gallery'>
                            <img src="https://plus.unsplash.com/premium_photo-1661315431756-f9870d5ff5a0?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1170&q=80"
                                alt="">
                        </a>
                    </div>
                    <div class="item">
                        <a href="https://images.unsplash.com/photo-1471039497385-b6d6ba609f9c?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1170&q=80"
                            data-fancybox='gallery'>
                            <img src="https://images.unsplash.com/photo-1471039497385-b6d6ba609f9c?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1170&q=80"
                                alt="">
                        </a>
                    </div>
                </div>
            </div>
        </div>

        {{-- Main content --}}
        <div class="product-detail__main">
            <div class="grid wide">
                <div class="row">
                    {{-- Content --}}
                    <div class="col l-9 m-12 c-12">
                        <div class="product-detail__main-content">
                            <h1 class="product-detail__main-title">
                                Biệt Thự Mễ Trì Thượng-150m x4 tầng,full đồ (giường,bếp,tủ,đh...vvv )- giá 30tr chỉ việc vào
                                ở
                                ngay</h1>
                            <p class="product-detail__main-location">Đường Mễ Trì Thượng, Phường Mễ Trì, Nam Từ Liêm, Hà Nội
                            </p>
                            <div class="product-detail__main-toolbar">
                                <div class="product-detail__main-config">
                                    <div class="product-detail__main-config-item">
                                        <p class="product-detail__main-config-label">Giá</p>
                                        <h3 class="product-detail__main-config-value">1.8 tỷ</h3>
                                    </div>
                                    <div class="product-detail__main-config-item">
                                        <p class="product-detail__main-config-label">Diện tích</p>
                                        <h3 class="product-detail__main-config-value">150 m<sup>2</sup></h3>
                                    </div>
                                </div>
                                <div class="product-detail__main-actions">
                                    <div class="product-detail__main-action">
                                        <i class="product-detail__main-action-icon fa-regular fa-heart"></i>
                                    </div>
                                    <div class="product-detail__main-action">
                                        <i class="product-detail__main-action-icon fa-solid fa-share"></i>
                                        <ul class="product-detail__main-action-list">
                                            <li class="product-detail__main-action-list-item">
                                                <i
                                                    class="product-detail__main-action-list-item-icon fa-brands fa-facebook"></i>
                                                Chia sẻ với Facebook
                                            </li>
                                            <li class="product-detail__main-action-list-item">
                                                <i class="product-detail__main-action-list-item-icon fa-solid fa-link"></i>
                                                Sao chép đường dẫn
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="product-detail__main-descriptions">
                                <div class="product-detail__main-description">
                                    <h2 class="product-detail__main-description-heading">Thông tin mô tả</h2>
                                    <div class="product-detail__main-description-content">
                                        HOT! Chỉ với 350 triệu sở hữu ngay căn hộ Bcons City 2PN - 2WC ngay cạnh Làng Đại
                                        Học
                                        Quốc Gia, liền kề Metro Bến Thành - Suối Tiên.
                                        Bcons City là khu căn hộ tốt nhất của Tập đoàn Bcons ở thời điểm hiện tại ngay cạnh
                                        Làng
                                        Đại Học Quốc Gia Tp. Hồ Chí Minh.
                                        * Đã có 1/500 và Giấy Phép Xây Dựng.
                                        * Chiết khấu 6,4% cho 100 khách hàng đầu tiên.
                                        * Chỉ cần thanh toán 20% kí hợp đồng mua bán.
                                        * Ngân hàng hỗ trợ vay 70% giá trị căn hộ, miễn gốc lãi 24 tháng.
                                        Thông tin khu căn hộ Bcons City.
                                        Địa chỉ: Số 60 đường Thống Nhất, Phường Đông Hoà, Tp. Dĩ An.
                                        Chủ đầu tư: Tập đoàn Bcons.
                                        Diện tích đất: 4,4 hecta.
                                        Mật độ xây dựng: 38%.
                                        Quy mô: 5 block, 29 tầng, hơn 3,700 căn hộ.
                                        Diện tích: 50 - 63m².
                                        Thiết kế: 2 phòng ngủ + 2 phòng tắm và 1 ban công.
                                        Tất cả các căn hộ đều có ban công, cửa sổ phòng ngủ rộng rãi thoáng mát.
                                        * Pháp lý: Sổ hồng vĩnh viễn.
                                        * Tiện ích: 3 tầng TTTM, Siêu Thị, Khách Sạn, Bệnh viện, Công viên, Hồ bơi, Nhà trẻ,
                                        Gym, Spa,..
                                        * Thẻ từ ra vào thang máy và căn hộ.
                                        * Giao nhà hoàn thiện nội thất, tặng máy lọc nước uống tại vòi.
                                        * An Ninh, Camera toàn khu.
                                        Chỉ 10 phút cho mọi điểm đến như: Gigamall Phạm Văn Đồng, Bệnh Viện Thủ Đức, KCN
                                        Sóng
                                        Thần, KCN Cao Quận 9, Sân bay Tân Sơn Nhất, Long Thành.
                                        Bcons City là sản phẩm cao cấp nhất mà Tập đoàn Bcons cho ra mắt với Vị Trí Vàng,
                                        chính
                                        sách thanh toán nhẹ nhàng, chương trình bán hàng ưu đãi cực tốt, rất thích hợp để
                                        đầu tư
                                        và an cư.
                                    </div>
                                </div>

                                <div class="product-detail__main-description">
                                    <h2 class="product-detail__main-description-heading">Nổi bật</h2>
                                    <div class="product-detail__main-description-content">
                                        <div class="product-detail__main-featureds">
                                            @for ($i = 0; $i < 6; $i++)
                                                <div class="product-detail__main-featured">
                                                    <div class="product-detail__main-featured-field">
                                                        <i class="product-detail__main-featured-icon fa-solid fa-bed"></i>
                                                        <h3 class="product-detail__main-featured-label">Diện tích</h3>
                                                    </div>
                                                    <div class="product-detail__main-featured-value">50 m<sup>2</sup></div>
                                                </div>
                                            @endfor
                                        </div>
                                    </div>
                                </div>

                                <div class="product-detail__main-description">
                                    <h2 class="product-detail__main-description-heading">Bản đồ</h2>
                                    <div class="product-detail__main-description-content">
                                        <iframe
                                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3919.4173453825415!2d106.63415631458906!3d10.779312992319532!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31752ea5ca36f199%3A0xf202676f2e408c0b!2zNDYyLzEzIEzFqXkgQsOhbiBCw61jaCwgSG_DoCBUaGFuaCwgVMOibiBQaMO6LCBUaMOgbmggcGjhu5EgSOG7kyBDaMOtIE1pbmgsIFZp4buHdCBOYW0!5e0!3m2!1svi!2s!4v1667806635292!5m2!1svi!2s"
                                            width="600" height="450" style="border:0;" allowfullscreen=""
                                            loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- Broker --}}
                    <div class="col l-3 m-12 c-12">
                        <div class="product-detail__broker">
                            <div class="product-detail__broker-info">
                                <a href="{{ route('account.profile', 1) }}">
                                    <img src="https://files.fullstack.edu.vn/f8-prod/user_avatars/1/623d4b2d95cec.png"
                                        alt="" class="product-detail__broker-avatar">
                                </a>

                                <a href="{{ route('account.profile', 1) }}">
                                    <h3 class="product-detail__broker-name">Trần Hải Triều</h3>
                                </a>
                            </div>

                            <div class="product-detail__broker-contact">
                                <a href="" class="product-detail__broker-button-fill">0775.939.704</a>
                                <a href="{{ route('chat.show') }}" class="product-detail__broker-button-outline">
                                    <i class="product-detail__broker-button-icon fa-regular fa-message"></i> Chat
                                </a>
                                <a href="" class="product-detail__broker-button-outline">
                                    <img src="https://cdn.chanhtuoi.com/uploads/2020/10/logo-zalo.jpg" alt=""
                                        class="product-detail__broker-button-icon">
                                    Zalo Chat
                                </a>
                                <button class="product-detail__broker-button-outline">Yêu cầu liên hệ lại</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
