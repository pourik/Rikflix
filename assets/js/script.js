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