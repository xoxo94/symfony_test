$(function () {
    $('#username,#password').on('input', function () {
        if ($(this).val().length > 0) {
            $(this).siblings('i').show();
            $(this).siblings('b').show();
        } else {
            $(this).siblings('i').hide();
            $(this).siblings('b').hide();
        }
    });

    $('.password i').on('click', function () {
        $(this).hide();
        $(this).siblings('b').hide();
        $('#password').val('');
    });

    $('.password b').on('click', function () {
        if ($(this).hasClass('pw')) {
            $(this).removeClass('pw');
            $('#password').prop('type', 'password');
        } else {
            $('#password').prop('type', 'text');
            $(this).addClass('pw');
        }
    });




});



$(function () {
    $('.forget,.enter').click(function () {
        if ($(this).hasClass('forget')) {
			$("#loginform").slideUp();
			$("#forgetform").slideDown();
        }else {
			$("#forgetform").slideUp();
			$("#loginform").slideDown();
        }
    });
});

//忘记密码提交验证
function submitEmail(m) {

    var index = layer.load(0, {shade: [0.3, '#000']}); //0代表加载的风格，支持0-2

    $.ajax({
        url:$(m).attr("action") ,
        type:$(m).attr("method"),
        dataType:"json",
        data:$(m).serialize(),
        success: function(obj){

            layer.close(index);

            if(obj.code==false){
                layer.alert(obj.msg)
            }else {
                layer.alert(obj.data.response,{
                    yes:function () {
                        parent.layer.closeAll();
                    }
                })
            }
        },
        error:function () {
            layer.alert("网络错误")
        }
    });

}

//重置密码
function EmailUpdatePass(m) {
    $.ajax({
        url:$(m).attr("action") ,
        type:$(m).attr("method"),
        dataType:"json",
        data:$(m).serialize(),
        success: function(obj){
            console.log(obj);
            if(obj.code==false){
                layer.alert(obj.msg)
            }else {
                layer.alert("修改密码成功，确定后将返回登录首页！",{
                    yes:function () {
                        parent.layer.closeAll();
                        window.location.href="/user/index";
                    }
                })
            }
        },
        error:function () {
            layer.alert("网络错误")
        }
    });

}