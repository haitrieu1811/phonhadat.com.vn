<?php
// Heading section
function html_heading_section($title, $view_more = "")
{
    if ($view_more) {
        $view_more = "
            <div class='heading-section__actions'>
                <a href='' class='heading-section__link'>
                    Xem thêm <i class='heading-section__link-icon fa-solid fa-arrow-right-long'></i>
                </a>
            </div>
        ";
    }

    return "
            <header class='heading-section'>
                <h1 class='heading-section__title'>{$title}</h1>
                {$view_more}
            </header>
    ";
}

// Emoji
function html_emoji()
{
    return '
    <div class="emojis">
            <div class="emoji  emoji--like">
        <div class="emoji__hand">
            <div class="emoji__thumb"></div>
        </div>
        </div>
        <div class="emoji  emoji--love">
        <div class="emoji__heart"></div>
        </div>
        <div class="emoji  emoji--haha">
        <div class="emoji__face">
            <div class="emoji__eyes"></div>
            <div class="emoji__mouth">
            <div class="emoji__tongue"></div>
            </div>
        </div>  
        </div>
        <div class="emoji  emoji--wow">
        <div class="emoji__face">
            <div class="emoji__eyebrows"></div>
            <div class="emoji__eyes"></div>
            <div class="emoji__mouth"></div>
        </div>
        </div>
        <div class="emoji  emoji--sad">
        <div class="emoji__face">
            <div class="emoji__eyebrows"></div>
            <div class="emoji__eyes"></div>
            <div class="emoji__mouth"></div>
        </div>
        </div>
        <div class="emoji  emoji--angry">
        <div class="emoji__face">
            <div class="emoji__eyebrows"></div>
            <div class="emoji__eyes"></div>
            <div class="emoji__mouth"></div>
        </div>
        </div>
    </div>';
}
