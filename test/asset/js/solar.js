window.onload = function(){

    $(".planet").mouseover(function(e){
        var x = $(e.target).parent().attr("id");
        $("#"+x).css("animation-play-state","paused");
        $(e.target).css("animation-play-state","paused");
    }).mouseleave(function(e){
        var x = $(e.target).parent().attr("id");
        $("#"+x).css("animation-play-state","running");
        $(e.target).css("animation-play-state","running");
    }).on("click",function(){
        
    });

    this.setTimeout(showSolarBg,2020);

    function showSolarBg(){
        $(".solar-bg").fadeIn();
    }
}