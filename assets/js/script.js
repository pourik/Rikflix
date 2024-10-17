function volumeToggle(button){
    let muted = $(".previewVideo").prop("muted");
    $(".previewVideo").prop("muted", !muted);

    $(button).find("i").toggleClass("fa-volume-xmark");
    $(button).find("i").toggleClass("fa-volume-high");
}

function previewEnded(){
    $(".previewVideo").toggle();
    $(".previewImage").toggle();
}

function goBack(){
    window.history.back();
}

function hideTimer(){
    let timeout = null;

    $(document).on("mousemove", function(){
        clearTimeout(timeout);
        $(".watchNav").fadeIn();

        timeout = setTimeout(() => {
            $(".watchNav").fadeOut();
        }, 2000);
    })
}