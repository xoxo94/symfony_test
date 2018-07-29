<?php

/* js/form.form.js.twig */
class __TwigTemplate_ee214668434536f35cca701cc21818fbdf6ebd3d5068326d248aa52ad07b2b96 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "js/form.form.js.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "js/form.form.js.twig"));

        // line 1
        echo "var formInit={
    checkValIsLegal:function(f){
        errorCount=0;
        \$(f).find('input,textarea,select').each(function(){
            var v_this=\$(this);
            if(v_this.hasClass('empty')){
                if(!v_this.val()){
                    ++errorCount;v_this.addClass('error').attr('title','";
        // line 8
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('ctrans')->getCallable(), array("不能为空")), "js", null, true);
        echo "');
                }
            }
            if(v_this.hasClass('email')){
                var myreg = /^([a-zA-Z0-9]+[_|\\_|\\.]?)*[a-zA-Z0-9]+@([a-zA-Z0-9]+[_|\\_|\\.]?)*[a-zA-Z0-9]+\\.[a-zA-Z]{2,3}\$/;
                if(!myreg.test(v_this.val())){
                    ++errorCount;v_this.addClass('error').attr('title','";
        // line 14
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('ctrans')->getCallable(), array("邮箱格式错误")), "js", null, true);
        echo "');
                }
            }
        });
        if(errorCount>0){
            \$('.error').change(function(){
                \$(this).removeClass('error').removeAttr('title');
            });
            return false;
        }
        return true;
    },
    onBack:function(m){
        return true;
    },
    back:function(m){
        if(!formInit.onBack(m)){return false;}
        \$(m).parents('div.tab').slideUp().prev().slideDown();
        \$('form .st-tabs').find('li.on').removeClass('on').prev().addClass('on');
    },
    onNext:function(m){
        return true;
    },
    next:function(m){
        if(!formInit.onNext(m)){return false;}
        if(!formInit.checkValIsLegal(\$(m).parents('div.tab').eq(0))){return false;}
        \$(m).parents('div.tab').slideUp().next().slideDown();
        \$('form .st-tabs').find('li.on').removeClass('on').next().addClass('on');
        \$('#checkcode').click();
    },
    onUpload:function(m){
        return true;
    },
    upload:function(m){
        if(!formInit.onUpload(m)){return false;}
        var index=layer.load(0,{shade: [0.3,'#000']});
        var formdata = new FormData();var v_this=\$(m);
        formdata.append(\"file\", v_this.get(0).files[0]);
        jQuery.ajax({
            url : '/upload/image',
            type : \"post\",
            data : formdata,
            async: true,
            cache: false,
            contentType: false,
            processData: false,
            dataType:'json',
            success:function(data){
                layer.close(index);
                if(data.code==200){
                    v_this.prev().val(data.response.img_url);
                }else{
                    alert(data.msg,{title:\"";
        // line 66
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('ctrans')->getCallable(), array("信息")), "js", null, true);
        echo "\",btn: [\"";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('ctrans')->getCallable(), array("确定")), "js", null, true);
        echo "\"]});
                }
            },
            error:function(){
                layer.close(index);
            }
        });
    },
    onSubmit:function(m){
        return true;
    },
    submit:function(f){
        var v_this=\$(f);
        if(!formInit.onSubmit(f)){return false;}
        if(!formInit.checkValIsLegal(v_this)){return false;}
        var index=layer.load(0,{shade: [0.3,'#000']});
        v_this.find('button[type=submit],input[type=submit]').hide();
        var v_data=v_this.serialize();
        \$.ajax({
            url:v_this.attr('action'),
            data:v_data,
            type:v_this.attr('method'),
            cache:false,
            timeout:120000,
            dataType:'json',
            success:function(result){
                try{
                    layer.close(index);
                    if(result.code){
                        v_this.find('div.tab').slideUp().last().append(result.formdata).slideDown();
                        \$('form .st-tabs').find('li.on').removeClass('on').next().addClass('on');
                    }else{
                        v_this.find('button[type=submit],input[type=submit]').show();
                        layer.alert(result.msg,{title:\"";
        // line 99
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('ctrans')->getCallable(), array("信息")), "js", null, true);
        echo "\",btn: [\"";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('ctrans')->getCallable(), array("确定")), "js", null, true);
        echo "\"]});
\t\t\t\t\t\tv_this.find('#checkcode').click();
                    }
                }catch (e){
                    layer.close(index);
                    v_this.find('button[type=submit],input[type=submit]').show();
                    layer.alert(e.message,{title:\"";
        // line 105
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('ctrans')->getCallable(), array("信息")), "js", null, true);
        echo "\",btn: [\"";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('ctrans')->getCallable(), array("确定")), "js", null, true);
        echo "\"]});
                }
            },error:function(){
                layer.close(index);
                v_this.find('button[type=submit],input[type=submit]').show();
                layer.alert('ERROR',{title:\"";
        // line 110
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('ctrans')->getCallable(), array("信息")), "js", null, true);
        echo "\",btn: [\"";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('ctrans')->getCallable(), array("确定")), "js", null, true);
        echo "\"]});
            }
        });
    }


}";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "js/form.form.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  161 => 110,  151 => 105,  140 => 99,  102 => 66,  47 => 14,  38 => 8,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var formInit={
    checkValIsLegal:function(f){
        errorCount=0;
        \$(f).find('input,textarea,select').each(function(){
            var v_this=\$(this);
            if(v_this.hasClass('empty')){
                if(!v_this.val()){
                    ++errorCount;v_this.addClass('error').attr('title','{{ '不能为空' | ctrans }}');
                }
            }
            if(v_this.hasClass('email')){
                var myreg = /^([a-zA-Z0-9]+[_|\\_|\\.]?)*[a-zA-Z0-9]+@([a-zA-Z0-9]+[_|\\_|\\.]?)*[a-zA-Z0-9]+\\.[a-zA-Z]{2,3}\$/;
                if(!myreg.test(v_this.val())){
                    ++errorCount;v_this.addClass('error').attr('title','{{ '邮箱格式错误' | ctrans }}');
                }
            }
        });
        if(errorCount>0){
            \$('.error').change(function(){
                \$(this).removeClass('error').removeAttr('title');
            });
            return false;
        }
        return true;
    },
    onBack:function(m){
        return true;
    },
    back:function(m){
        if(!formInit.onBack(m)){return false;}
        \$(m).parents('div.tab').slideUp().prev().slideDown();
        \$('form .st-tabs').find('li.on').removeClass('on').prev().addClass('on');
    },
    onNext:function(m){
        return true;
    },
    next:function(m){
        if(!formInit.onNext(m)){return false;}
        if(!formInit.checkValIsLegal(\$(m).parents('div.tab').eq(0))){return false;}
        \$(m).parents('div.tab').slideUp().next().slideDown();
        \$('form .st-tabs').find('li.on').removeClass('on').next().addClass('on');
        \$('#checkcode').click();
    },
    onUpload:function(m){
        return true;
    },
    upload:function(m){
        if(!formInit.onUpload(m)){return false;}
        var index=layer.load(0,{shade: [0.3,'#000']});
        var formdata = new FormData();var v_this=\$(m);
        formdata.append(\"file\", v_this.get(0).files[0]);
        jQuery.ajax({
            url : '/upload/image',
            type : \"post\",
            data : formdata,
            async: true,
            cache: false,
            contentType: false,
            processData: false,
            dataType:'json',
            success:function(data){
                layer.close(index);
                if(data.code==200){
                    v_this.prev().val(data.response.img_url);
                }else{
                    alert(data.msg,{title:\"{{ '信息' | ctrans }}\",btn: [\"{{ '确定' | ctrans }}\"]});
                }
            },
            error:function(){
                layer.close(index);
            }
        });
    },
    onSubmit:function(m){
        return true;
    },
    submit:function(f){
        var v_this=\$(f);
        if(!formInit.onSubmit(f)){return false;}
        if(!formInit.checkValIsLegal(v_this)){return false;}
        var index=layer.load(0,{shade: [0.3,'#000']});
        v_this.find('button[type=submit],input[type=submit]').hide();
        var v_data=v_this.serialize();
        \$.ajax({
            url:v_this.attr('action'),
            data:v_data,
            type:v_this.attr('method'),
            cache:false,
            timeout:120000,
            dataType:'json',
            success:function(result){
                try{
                    layer.close(index);
                    if(result.code){
                        v_this.find('div.tab').slideUp().last().append(result.formdata).slideDown();
                        \$('form .st-tabs').find('li.on').removeClass('on').next().addClass('on');
                    }else{
                        v_this.find('button[type=submit],input[type=submit]').show();
                        layer.alert(result.msg,{title:\"{{ '信息' | ctrans }}\",btn: [\"{{ '确定' | ctrans }}\"]});
\t\t\t\t\t\tv_this.find('#checkcode').click();
                    }
                }catch (e){
                    layer.close(index);
                    v_this.find('button[type=submit],input[type=submit]').show();
                    layer.alert(e.message,{title:\"{{ '信息' | ctrans }}\",btn: [\"{{ '确定' | ctrans }}\"]});
                }
            },error:function(){
                layer.close(index);
                v_this.find('button[type=submit],input[type=submit]').show();
                layer.alert('ERROR',{title:\"{{ '信息' | ctrans }}\",btn: [\"{{ '确定' | ctrans }}\"]});
            }
        });
    }


}", "js/form.form.js.twig", "F:\\beneforex\\mt-beneforex\\mt-parent\\mt-account\\app\\Resources\\views\\js\\form.form.js.twig");
    }
}
