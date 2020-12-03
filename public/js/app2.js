$(document).ready(function(){
    var stt = 0;
    start = $("img.slide:first").attr("stt");
    end = $("img.slide:last").attr("stt");
    $("img.slide").each(function(){
        if($(this).is(':visible'))
            stt = $(this).attr("stt");
    });
    $("#next").click(function(){
        if(stt == end){
            stt = -1;
        }
        next = ++stt;
        $("img.slide").hide();
        $("img.slide").eq(next).show();
    });
    $("#prev").click(function(){
        if(stt == 0){
            stt = end;
            prev = stt++;
        }
        prev = --stt;
        $("img.slide").hide();
        $("img.slide").eq(prev).show();
    });
});

$(document).ready(function(){
    var stt = 0;
    start = $(".page:first").attr("stt");
    end = $(".page:last").attr("stt");
    $(".page").each(function(){
        if($(this).is(':visible'))
            stt = $(this).attr("stt");
    });
    $("#continue").click(function(){
        if(stt == end){
            stt = -1;
        }
        next = ++stt;
        $(".page").hide();
        $(".page").eq(next).show();
    });
    $("#back").click(function(){
        if(stt == 0){
            stt = end;
            prev = stt++;
        }
        prev = --stt;
        $(".page").hide();
        $(".page").eq(prev).show();
    });
});
