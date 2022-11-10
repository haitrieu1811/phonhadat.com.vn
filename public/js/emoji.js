$(document).ready(function(){
    // Drop emojis
    $('.emoji').click(function(){
        const emojiClass = $(this).attr('class');
        const emojiReleased = $(this).closest('.article-foot__action');
        const elActive = $(this).closest('.article-foot__action').find('.article-foot__action.active');

        // Remove active
        if(elActive){
            elActive.removeClass('active');
        }
        
        // Check emoji
        if(emojiClass == 'emoji emoji-like'){
            const el = emojiReleased.find('.article-foot__action.article-foot__action-like-fill');
            el.addClass('active');
        }else if(emojiClass == 'emoji emoji-heart'){
            const el = emojiReleased.find('.article-foot__action.article-foot__action-heart');
            el.addClass('active');
        }else if(emojiClass == 'emoji emoji-haha'){
            const el = emojiReleased.find('.article-foot__action.article-foot__action-haha');
            el.addClass('active');
        }else if(emojiClass == 'emoji emoji-sad'){
            const el = emojiReleased.find('.article-foot__action.article-foot__action-sad');
            el.addClass('active');
        }else if(emojiClass == 'emoji emoji-wow'){
            const el = emojiReleased.find('.article-foot__action.article-foot__action-wow');
            el.addClass('active');
        }else if(emojiClass == 'emoji emoji-angry'){
            const el = emojiReleased.find('.article-foot__action.article-foot__action-angry');
            el.addClass('active');
        }

        // Close emojis
        $(this).closest('.emojis').removeClass('active');
    })

    // Open, close emojis
    $('.article-foot__action.article-foot__action-emoji').mouseenter(function(){
        const emojis = $(this).find('.emojis');
        emojis.addClass('active');
    })

    $('.article-foot__action.article-foot__action-emoji').mouseleave(function(){
        const emojis = $(this).find('.emojis');
        emojis.removeClass('active');
    })

    // Toggle emoji
    const buttons = $(document).find('.article-foot__action.article-foot__action-emoji');


    buttons.click(function(){
        const buttonChilds = $(this).find('.article-foot__action').not('.article-foot__action-like-empty');

        if(buttonChilds.hasClass('active')){
            console.log('Active');
        }else{
            console.log('No Active');
        }
    })
})