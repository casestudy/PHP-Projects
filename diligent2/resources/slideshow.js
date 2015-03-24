$( function(){
    setInterval( animation, 5000);

});

function animation (){
    var CurImage = $("#slideshow div.current");
    var NxtImage = CurImage.next();
    if (NxtImage.length == 0) {
        NxtImage = $("#slideshow div.photo:first");
    }
    CurImage.removeClass("current").addClass("previous");
    NxtImage.css({opacity:0.0}).addClass("current").animate({opacity:1.0}, 2000, function(){
        CurImage.removeClass('previous');
    });
}