@extends('layouts.onlyContent')

@section('title', 'Chat | phonhadat.com.vn')

@section('content')
    <div class="chat">
        <div class="grid wide">
            <div class="row">
                {{-- Chat list --}}
                <div class="col l-4 m-12 c-12">
                    <div class="chat-list">
                        <div class="chat-list__heading">
                            <a href="{{ route('home') }}">
                                <h1 class="chat-list__heading-label">
                                    <img src="{{ asset('images/logo/logo.svg') }}" alt=""
                                        class="chat-list__heading-label-logo"> Chat
                                </h1>
                            </a>
                        </div>

                        <div class="chat-list__search">
                            <i class="chat-list__search-icon fa-solid fa-magnifying-glass"></i>
                            <input type="text" class="chat-list__search-control" placeholder="Tìm kiếm">
                        </div>

                        @isset($chats)
                            <div class="chat-list__list">
                                @foreach ($chats as $chat)
                                    <div class="chat-list__item" data-id="{{ $chat->id }}">
                                        <img src="{{ asset("images/user/{$chat->avatar}") }}" alt=""
                                            class="chat-list__item-avatar">
                                        <div class="chat-list__item-content">
                                            <h3 class="chat-list__item-name">{{ $chat->name }}</h3>
                                            <p class="chat-list__item-message">Lorem ipsum dolor sit amet consectetur
                                                adipisicing
                                                elit. Eius repellendus cum soluta totam vitae alias dolorum, placeat quo
                                                minus
                                                animi!</p>
                                        </div>
                                        <span class="chat-list__item-activity-status online"></span>
                                    </div>
                                @endforeach
                            </div>
                        @endisset
                    </div>
                </div>

                {{-- Chat window --}}
                <div class="col l-8 m-12 c-12">
                    <div class="chat-window">
                        <div class="chat-window__heading">
                            <div class="chat-window__heading-account">
                                <div class="chat-window__heading-account-avatar-container">
                                    <img src="https://files.fullstack.edu.vn/f8-prod/user_avatars/1/623d4b2d95cec.png"
                                        alt="" class="chat-window__heading-account-avatar">
                                    <span class="chat-window__heading-account-status-circle online"></span>
                                </div>

                                <div class="chat-window__heading-account-info">
                                    <h3 class="chat-window__heading-account-name">Tran Hai Trieu</h3>
                                    <p class="chat-window__heading-account-activity-status">Đang hoạt động</p>
                                </div>
                            </div>
                        </div>

                        <div class="chat-window__content">
                            <div class="chat-window__receive">
                                <img src="https://files.fullstack.edu.vn/f8-prod/user_avatars/1/623d4b2d95cec.png"
                                    alt="" class="chat-window__receive-avatar">
                                <p class="chat-window__msg-receive-msg">Lorem ipsum dolor sit amet, consectetur adipisicing
                                    elit. Voluptatum doloremque amet sunt exercitationem quod, reprehenderit perspiciatis
                                    praesentium laudantium placeat esse qui, molestias, aspernatur repellendus quaerat nemo
                                    provident sit iste pariatur.</p>
                            </div>

                            <div class="chat-window__send">
                                <p class="chat-window__send-msg">Lorem ipsum dolor sit amet.</p>
                            </div>

                            <div class="chat-window__receive">
                                <img src="https://files.fullstack.edu.vn/f8-prod/user_avatars/1/623d4b2d95cec.png"
                                    alt="" class="chat-window__receive-avatar">
                                <p class="chat-window__msg-receive-msg">Lorem ipsum dolor sit amet, consectetur adipisicing
                                    elit. Voluptatum doloremque amet sunt exercitationem quod, reprehenderit perspiciatis
                                    praesentium laudantium placeat esse qui, molestias, aspernatur repellendus quaerat nemo
                                    provident sit iste pariatur.</p>
                            </div>

                            <div class="chat-window__receive">
                                <img src="https://files.fullstack.edu.vn/f8-prod/user_avatars/1/623d4b2d95cec.png"
                                    alt="" class="chat-window__receive-avatar">
                                <p class="chat-window__msg-receive-msg">Lorem ipsum dolor sit amet, consectetur adipisicing
                                    elit. Voluptatum doloremque amet sunt exercitationem quod, reprehenderit perspiciatis
                                    praesentium laudantium placeat esse qui, molestias, aspernatur repellendus quaerat nemo
                                    provident sit iste pariatur.</p>
                            </div>

                            <div class="chat-window__send">
                                <p class="chat-window__send-msg">Lorem ipsum dolor sit amet.</p>
                            </div>
                        </div>

                        <form action="" class="" id="chat-window__form">
                            <div class="chat-window__form">
                                <input type="text" placeholder="Nhập tin nhắn" class="chat-window__form-control">
                                <button type="submit" class="chat-window__form-submit"><i
                                        class="chat-window__form-submit-icon fa-solid fa-paper-plane"></i></button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        const chatContent = document.querySelector('.chat-window__content');
        const chatForm = document.querySelector('.chat-window__form');
        const chatItems = document.querySelectorAll('.chat-list__item');

        chatItems.forEach((chatItem) => {
            chatItem.addEventListener('click', (e) => {
                const id = chatItem.dataset.id;
                console.log(id);
            })
        });
        // const chatItem = `
    //     <div class="chat-window__send">
    //         <p class="chat-window__send-msg">Lorem ipsum dolor sit amet.</p>
    //     </div>
    // `;

        chatForm.addEventListener('submit', (e) => {
            e.preventDefault();

            alert('OK')

            // chatForm.append(chatItem);
        })
    </script>
@endsection
