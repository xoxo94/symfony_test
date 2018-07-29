$(function () {
    /**
     * 余额自动转入 点击事件
     */
    $(".auto").click(function () {
        $('#motion').click()
    });


    //内部转账 样式
    $("input[name='manage']").click(function () {
        var manage=$(this).val();
        if(manage==="in"){
            $(".reserve01").css("display","inline-block");
            $(".reserve02").css("display","none");
            $(".arrows").css("display","none");
            $(".toaccount").css("display","none");
        }
        if(manage==="out"){
            $(".reserve01").css("display","none");
            $(".reserve02").css("display","inline-block");
            $(".arrows").css("display","none");
            $(".toaccount").css("display","none");
        }
        if(manage==="other"){
            $(".reserve01").css("display","none");
            $(".reserve02").css("display","none");
            $(".arrows").css("display","inline-block");
            $(".toaccount").css("display","inline-block");

        }
    });
    /**
     * 添加 基金账户 视图
     */
    $('.fundAdd').click(function () {
        var text = $(this).attr('data-text');
        layer.open({
            type: 2,
            area: ['500px', '290px'],
            title: text,
            skin: 'layui-layer-iframe', //样式类名
            maxWidth: 480,
            resize: false,
            closeBtn: 1, //显示关闭按钮
            shadeClose: false, //关闭点击遮罩关闭
            content: '/v/add/account',
            success: function(layero, index) {
                layer.iframeAuto(index);
            }
        });

    });
    /**
     * 添加 基金账户
     */
    $('#button06').click(function () {
        var data={"pass":$(".pass").val(),"nickname": $(".nickname").val(),"code":$(".code").val(),'lever': $(".lever").val()};
        var index = layer.load(0, {shade: [0.3,'#000']}); //0代表加载的风格，支持0-2

        $.ajax({
            url: "/add/fund/account",
            type:"POST",
            dataType:"json",
            data:data,
            success: function(obj){
                layer.close(index);
                if(obj.code){
                    layer.msg('账号创建成功', {
                        time: 20000 //20s后自动关闭
                    });
                    window.parent.location.reload()
                }else{
                    layer.alert(obj.msg+'');
                }
            },
            error:function () {
                layer.alert("网络错误")
            }

        });
    });

    /**
     * 添加 交易账户 视图
     */
    $('.dealAdd').click(function () {
        var text = $(this).attr('data-text');
        layer.open({
            type: 2,
            title:text,
            resize: false,
            skin: 'layui-layer-rim', //加上边框
            area: ['500px', '290px'], //宽高
            content: '/v/add/deal',
            success: function(layero, index) {
                layer.iframeAuto(index);
            }
        });

    });

    /**
     * 添加 交易账户
     */
    $('#btnDeal').click(function () {
        var data={"pass":$(".pass").val(),"nickname": $(".nickname").val(),"code":$(".code").val(),'lever': $(".lever").val()};
        var index = layer.load(0, {shade: [0.3,'#000']}); //0代表加载的风格，支持0-2
        $.ajax({
            url: "/add/deal/account",
            type:"POST",
            dataType:"json",
            data:data,
            success: function(obj){
                layer.close(index);
                if(obj.code){
                    layer.msg('交易账户创建成功', {
                        time: 20000 //20s后自动关闭
                    });
                    window.parent.location.reload()
                }else{
                    layer.alert(obj.msg+'');
                }
            },
            error:function () {
                layer.alert("网络错误")
            }

        });
    });


    /**
     * 添加 交易账户 视图
     */
    $('.investAdd').click(function () {
        var text = $(this).attr('data-text');
        layer.open({
            type: 2,
            title:text,
            resize: false,
            skin: 'layui-layer-rim', //加上边框
            area: ['500px', '290px'], //宽高
            content: '/v/add/invest',
            success: function(layero, index) {
                layer.iframeAuto(index);
            }
        });

    });

    /**
     * 添加 投资账户
     */
    $('#btnInvest').click(function () {
        var data={"pass":$(".pass").val(),"code":$(".code").val()};
        var index = layer.load(0, {shade: [0.3,'#000']}); //0代表加载的风格，支持0-2
        $.ajax({
            url: "/add/invest/account",
            type:"POST",
            dataType:"json",
            data:data,
            success: function(obj){
                layer.close(index);
                if(obj.code){
                    layer.msg('投资账户创建成功', {
                        time: 20000 //20s后自动关闭
                    });
                    window.parent.location.reload()
                }else{
                    layer.alert(obj.msg+'');
                }
            },
            error:function () {
                layer.alert("网络错误")
            }
        });
    });


    /**
     * 投资设置
     */
    $('.investSet').click(function () {
        var index = layer.load(0, {shade: [0.3,'#000']}); //0代表加载的风格，支持0-2
        var data=$('.investfrom').serialize();
        console.log(data);
        $.ajax({
            url: "/user/invest/setting",
            type:"POST",
            dataType:"json",
            data:data,
            success: function(obj){
                layer.close(index);
                if(obj.code==false){
                    layer.alert(obj.msg)
                }else {
                    layer.alert("设置成功",{
                        yes:function () {
                            parent.layer.closeAll();
                            window.parent.location.reload()
                        }
                    })
                }
            },
            error:function () {
                layer.close(index);
                layer.alert("网络错误")
            }
        });
    })
});


/**
 * 余额转入
 */
function manageChangeInto(m) {
    var index = layer.load(0, {shade: [0.3,'#000']}); //0代表加载的风格，支持0-2
    $.ajax({
        url: "/user/auto/states",
        type:"POST",
        dataType:"json",
        data:$(m).serialize(),
        success: function(obj){
            layer.close(index);
            if(obj.code==false){
                layer.alert(obj.msg)
            }else {
                layer.alert("成功",{
                    yes:function () {
                        parent.layer.closeAll();
                        window.parent.location.reload()
                    }
                })
            }
        },
        error:function () {
            layer.alert("网络错误")
        }
    });
}

/**
 * 内部转账
 */
function manageAmount(m) {
    if ($("select[name='bankcard']").val() == false) {
        layer.alert("请选择账户");
        return false
    }
    var index = layer.load(0, {shade: [0.3,'#000']}); //0代表加载的风格，支持0-2
    $.ajax({
        type: "POST",
        url: "/user/book/transfer",
        data: $(m).serialize(),
        dataType:"json",
        success: function(obj){
            layer.close(index);
            if(obj.code===false){
                layer.alert(obj.msg,{
                    icon:5,
                    closeBtn: 0, //关闭按钮
                    resize:false,
                    title:'信息提示'
                });
            }else {
                layer.alert("提交成功", {
                    icon:6,
                    resize:false,
                    title:'信息提示',
                    closeBtn: 0//关闭按钮
                });
                window.parent.location.reload()

            }
        }, error:function () {
            layer.alert("网络错误");
            layer.close(index);
        }
    });
}


//交易账户
var mt4nosa= {
    fund: function (account) {
        var fundaccount=account;
        layer.open({
            type: 2,
            area: ['480px', '429px'],
            title: '基金账户设置',
            skin: 'layui-layer-iframe', //样式类名
            maxWidth: 480,
            resize: false,
            closeBtn: 1, //显示关闭按钮
            shadeClose: false, //关闭点击遮罩关闭
            content: '/fund/account/echo?fundno=' + fundaccount
        })
    },
    withedit: function (fundno) {
        var mt4no=fundno;
        layer.open({
            type:2,
            anim:1,
            area: ['480px','284px'],
            title: '投资账户设置',
            maxWidth:480,
            resize:false,
            skin: 'layui-layer-demo',
            closeBtn: 1, //显示关闭按钮
            shadeClose: false, //关闭点击遮罩关闭
            content:"/user/invest/echo?card="+mt4no
        });
    }
};


/**
 * 内部转账记录
 */
function seeCardAmountRecords(m) {
    if($("select[name='CardList']").val()==0){
        layer.alert("请选择正确的分类");
        return false;
    }
    var index = layer.load(0, {shade: [0.3,'#000']}); //0代表加载的风格，支持0-2
    var  page=$(m).attr('page');
    console.log(page)
    var data={'CardList':$("select[name='CardList']").val(),"amountstart":$("input[name='amount1']").val(),
        "amountend":$("input[name='amount2']").val(),"key":$("input[name='key']").val(),"page":page
    };
    var srt="<tr class='thead '>" +
        "<td width='59'></td>" +
        "<td>日期/时间</td>" +
        "<td>对象</td>" +
        "<td>事件</td>" +
        "<td>金额(USD)</td>" +
        "<td>流水号</td>" +
        "</tr>";

    $.ajax({
        url: "/user/amount/records",
        type:"get",
        dataType:"json",
        data:data,
        success: function(obj){
            layer.close(index);
            $(".thead01").html("");
            if (obj.data.data.length == 0) {
                srt+= "<tr><td colspan='6' style='text-align: center'>暂无数据</td></tr>";
                $(".thead01").html(srt)
            }
            if(obj.data.code==false){
                layer.alert(obj.msg)

            }else {
                $(obj.data.data).each(function(k,v){

                    srt+="<tr>" +
                        "<td width='59'><input class='checkbox' type='checkbox'></td>" +
                        "<td>"+v.addtime+"</td>" +
                        "<td>"+v.from+"</td>" +
                        "<td>"+v.uklogin+"</td>" ;
                    srt+="<td><span>"+v.amount+"</span></td>";
                    srt+="<td>"+v.orderno+"</td></tr>";
                    //分页
                    var  nextpage
                    if (obj.data.thisPageNumber >= obj.data.totalPageNumber) {
                        nextpage=obj.data.totalPageNumber;
                    }else {
                        nextpage=obj.data.thisPageNumber+1;
                    }
                    var  Previouspage
                    if (obj.data.thisPageNumber <= 1) {
                        Previouspage=obj.data.thisPageNumber;
                    }else{
                        Previouspage=obj.data.thisPageNumber-1;
                    }

                    $(".Previouspage").attr('page',Previouspage);

                    $(".nextpage").attr('page',nextpage);

                });
                $(".thead01").html(srt)
            }
        },
        error:function () {
            layer.alert("网络错误");
            layer.close(index);
        }

    });
}

/**
 * 基金设置
 */
$(function () {
    $("#btn").click(function () {
        var index = layer.load(0, {shade: [0.3,'#000']}); //0代表加载的风格，支持0-2
        $.ajax({
            type: "post",
            url: "/user/fund/setting",
            dataType:"json",
            data: {
                fundno:$('#fondno').attr('data'),
                history: $('.ispubdata').val(),
                current: $('.ispubdata_now').val(),
                seize:$('.autobear').val(),
                rebate:$('#rebate').val(),
                captcha:$('#addcardcheckcode').val(),
                isnewWith:$('.isnewwith').val()
            },
            success: function(obj){
                layer.close(index);
                if(obj.code==false){
                    layer.alert(obj.msg,{
                        icon:5,
                        closeBtn: 0, //关闭按钮
                        resize:false,
                        title:'信息提示'
                    });
                }else {
                    layer.close(index);
                    layer.alert("修改成功",{
                        icon:6,
                        resize:false,
                        title:'信息提示',
                        closeBtn: 0, //关闭按钮
                        yes:function () {
                            parent.layer.closeAll();
                            window.parent.location.reload()
                        }
                    });
                }
            }
        });
    });
});
$(function () {
    $(".cancel").click(function () {
        parent.layer.closeAll();
    })
});


