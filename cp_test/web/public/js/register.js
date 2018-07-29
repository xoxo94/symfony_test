;
(function ($) {
    var $submit1 = $('.submit'),
        $countType = $('.count-type'),
        $back1 = $('.back1'),
        $back2 = $('.back2'),
        $sure = $('.sure1'),
        $sure2 = $('.sure2'),
        $notice = $('.notice');
    $countType.on('click','li',function(e){
        if(!$(e.target).hasClass('on')){
            $(e.target).addClass('on');
            $(e.target).siblings().removeClass('on');
            if($(e.target).hasClass('cx')){
                $notice.hide();
            }else{
                $notice.show();
            }
        }
    });
    
    $submit1.on('click',function(e){
        $('.tab').eq(0).stop().slideUp();
        $('.tab').eq(1).stop().slideDown();
        $('.st-tabs li').eq(1).addClass('on').siblings().removeClass('on');
    });
    
    $back1.on('click',function(e){
        $('.tab').eq(1).stop().slideUp();
        $('.tab').eq(0).stop().slideDown();
        $('.st-tabs li').eq(0).addClass('on').siblings().removeClass('on');
    });
    
    $back2.on('click',function(e){
        $('.tab').eq(2).stop().slideUp();
        $('.tab').eq(1).stop().slideDown();
        $('.st-tabs li').eq(1).addClass('on').siblings().removeClass('on');
    });
    
    $sure.on('click',function(e){
        $('.tab').eq(1).stop().slideUp();
        $('.tab').eq(2).stop().slideDown();
        $('.st-tabs li').eq(2).addClass('on').siblings().removeClass('on');
    });
    
    $sure2.on('click',function(e){
        $('.tab').eq(2).stop().slideUp();
        $('.tab').eq(3).stop().slideDown();
        $('.st-tabs li').eq(3).addClass('on').siblings().removeClass('on');
    });
    
})(jQuery);
