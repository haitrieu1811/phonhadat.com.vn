<?php
// ========================== GUEST =========================================================

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
    return "
        <div class='emojis'>
            <div class='emoji emoji-like'>
                <span class='emoji__badge'>Thích</span>
                <img src='" . asset('images/emoji/like.svg') . "'
                    class='emoji__icon'>
            </div>
            <div class='emoji emoji-heart'>
                <span class='emoji__badge'>Yêu thích</span>
                <img src='" . asset('images/emoji/heart.svg') . "'
                    class='emoji__icon'>
            </div>
            <div class='emoji emoji-haha'>
                <span class='emoji__badge'>Haha</span>
                <img src='" . asset('images/emoji/haha.svg') . "'
                    class='emoji__icon'>
            </div>
            <div class='emoji emoji-wow'>
                <span class='emoji__badge'>Wow</span>
                <img src='" . asset('images/emoji/wow.svg') . "'
                    class='emoji__icon'>
            </div>
            <div class='emoji emoji-sad'>
                <span class='emoji__badge'>Buồn</span>
                <img src='" . asset('images/emoji/sad.svg') . "'
                    class='emoji__icon'>
            </div>
            <div class='emoji emoji-angry'>
                <span class='emoji__badge'>Phẫn nộ</span>
                <img src='" . asset('images/emoji/angry.svg') . "'
                    class='emoji__icon'>
            </div>
        </div>
    ";
}

function html_emoji_released()
{
    return "
        <div class='article-foot__action-emoji-released'>
            <div class='article-foot__action article-foot__action-like-empty active'>
                <i class='article-foot__action-icon article-foot__action-icon--empty fa-regular fa-thumbs-up'></i>
                <span class='article-foot__action-label'>Thích</span>
            </div>

            <div class='article-foot__action article-foot__action-like-fill'>
                <i class='article-foot__action-icon article-foot__action-icon--fill fa-solid fa-thumbs-up'></i>
                <span class='article-foot__action-label'>Thích</span>
            </div>

            <div class='article-foot__action article-foot__action-heart'>
                <img src='" . asset('images/emoji/heart.svg') . "'
                    class='article-foot__action-icon--fill'>
                <span class='article-foot__action-label'>Yêu thích</span>
            </div>

            <div class='article-foot__action article-foot__action-haha'>
                <img src='" . asset('images/emoji/haha.svg') . "'
                    class='article-foot__action-icon--fill'>
                <span class='article-foot__action-label'>Haha</span>
            </div>

            <div class='article-foot__action article-foot__action-wow'>
                <img src='" . asset('images/emoji/wow.svg') . "'
                    class='article-foot__action-icon--fill'>
                <span class='article-foot__action-label'>Wow</span>
            </div>

            <div class='article-foot__action article-foot__action-sad'>
                <img src='" . asset('images/emoji/sad.svg') . "'
                    class='article-foot__action-icon--fill'>
                <span class='article-foot__action-label'>Buồn</span>
            </div>
            <div class='article-foot__action article-foot__action-angry'>
                <img src='" . asset('images/emoji/angry.svg') . "'
                    class='article-foot__action-icon--fill'>
                <span class='article-foot__action-label'>Phẫn nộ</span>
            </div>
        </div>
    ";
}

// Alert
function html_alert($content, $type = 'success')
{
    return "
        <div class='alert alert-{$type}'>{$content}</div>
    ";
}

// ========================== ADMIN =========================================================

// Page title
function html_page_title($icon_class, $title, $links = [])
{
    $html = "";

    if (!empty($links)) {
        foreach ($links as $key => $value) {
            $html .= "<a href='{$key}' class='page-title__link'>{$value}</a>";
        }
    }

    return "
        <div class='page-title'>
            <h1 class='page-title__label'>
                <i class='page-title__icon {$icon_class}'></i> {$title}
            </h1>
            <div class='page-title__links'>
                {$html}
            </div>
        </div>
    ";
}

// Toast
function html_toast($message)
{
    return "
        <div class='toast'>
            <div class='toast__msg'>{$message}</div>
        </div>
    ";
}
