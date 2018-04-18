$(document).ready(function(){
    console.log('smsms');
    $(".btn-slide").toggle(function(){
        $(this).parent().parent().find(".panel").animate({"width": "+=120px"}, "slow");
        $(this).toggleClass("active"); return false;
    },function(){
        $(this).parent().parent().find(".panel").animate({"width": "-=120px",opacity: "hide"}, "slow");
        $(this).toggleClass("active"); return false;
    });
});