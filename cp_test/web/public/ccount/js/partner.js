;
(function ($) {
    var num;
    $(document).click(function (e) {
        if ($(e.target).hasClass('close') || $(e.target).hasClass('cancel') || $(e.target).hasClass('sure')) {
            layer.close(num);
        }
    });
    $('.detail').click(function () {
        num = layer.open({
            type: 1,
            area:  ['1420px', '600px'],
            title: '',
            skin: 'layui-layer-demo2', //样式类名
            closeBtn: 0, //不显示关闭按钮
            anim: 2,
            resize: false,
            shadeClose: false, //关闭遮罩关闭
            content: $('.layy').html()
        });
    });
    
    $(".tree").treemenu({
        delay: 300
    }).openActive();
})(jQuery);


(function ($) {
    var num;
    $(document).click(function (e) {
        if ($(e.target).hasClass('close') || $(e.target).hasClass('cancel') || $(e.target).hasClass('sure')) {
            layer.close(num);
        }
    });
    $('.detai2').click(function () {
        num = layer.open({
            type: 1,
            area:  ['1420px', '540px'],
            title: '',
            skin: 'layui-layer-demo2', //样式类名
            closeBtn: 0, //不显示关闭按钮
            anim: 2,
            resize: false,
            shadeClose: false, //关闭遮罩关闭
            content: $('.lay2').html(),
            yes:function () {

            }
        });
    });

    $(".tree").treemenu({
        delay: 300
    }).openActive();
})(jQuery);

var showDetails=function(me,index){
    var deial=$(me).parent().parent().nextAll(".details");
    if(index==2){
        deial.hide();
        deial.eq(1).show();
    }else if (index==3){
        deial.hide();
        deial.eq(2).show();
    }else{
        deial.hide();
        deial.eq(0).show();
    }
};