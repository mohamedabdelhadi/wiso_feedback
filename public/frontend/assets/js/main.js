
$(document).on('click','#sidebar li' , function(){

    $(this).addClass('active').siblings().removeClass('active')
});

$(document).ready(function(){

    $("#sdecolse").click(function(){
        $(".left-menu").toggleClass("hide");
        $(".content-wrapper").toggleClass("hide");
    });

});


