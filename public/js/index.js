// AJAXrequest
export const AJAXrequest = (url, postedData, callback = () => {}) => {
    // Ajax setup
    $.ajaxSetup({
        headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    
    if(postedData){
        $.ajax({
            method: "POST",
            url: url,
            data: postedData,
            dataType: "JSON",
            success: callback
        });
    }else{
        $.ajax({
            method: "POST",
            url: url,
            dataType: "JSON",
            success: callback
        });
    }
}

// Base url
function base_url() {
    var pathparts = location.pathname.split('/');
    if (location.host == 'localhost') {
        var url = location.origin+'/'+pathparts[1].trim('/')+'/';
    }else{
        var url = location.origin;
    }
    return url;
}

// Toast message
export const showToastMessage = (toastContent, timeClear = 3000) => {
    const toasts = document.querySelector('.toasts');   
    const toastItem = document.createElement('div');
    toastItem.classList.add('toast__item');
    toastItem.innerText = toastContent;
    
    toasts.appendChild(toastItem);

    setTimeout(() => {
        toasts.removeChild(toastItem);
    }, timeClear)
}
