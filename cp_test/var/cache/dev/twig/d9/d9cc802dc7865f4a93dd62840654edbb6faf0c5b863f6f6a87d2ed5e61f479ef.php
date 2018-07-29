<?php

/* js/form.register.js.twig */
class __TwigTemplate_b666bdbe661ab46ab3322b1b411e13160290d698578a80222827f27694b8020e extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "js/form.register.js.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "js/form.register.js.twig"));

        // line 1
        echo "formInit.onSubmit=function(m){
    if(! \$('form input[name=agreement]').is(':checked')){\$('form input[name=agreement]').next().addClass('text-error');return false;}
    return true;
}
formInit.onNext=function(m){
    var linow=\$('form .st-tabs').eq(0).find('li.on');
    if(linow.index()==1) {
\t\tvar re = /^[A-Za-z]+\$/;
\t\tif(!isNaN(\$('form input[name=password]').val()) || \$('form input[name=password]').val().length<8 || re.test(\$('form input[name=password]').val())){\$('form input[name=password]').addClass('error');return false;}
        if(\$('form input[name=password]').val()!=\$('form input[name=chkpassword]').val()){ \$('form input[name=chkpassword]').addClass('error').attr('title','";
        // line 10
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('ctrans')->getCallable(), array("两次密码不一致")), "js", null, true);
        echo "');return false;}
                 var usertype=\$('form select[name=usertype]').val();
                      if(usertype==1101){ usertype='";
        // line 12
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('ctrans')->getCallable(), array("标准账户")), "js", null, true);
        echo "'}if(usertype==1102){usertype='";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('ctrans')->getCallable(), array("专业账户")), "js", null, true);
        echo "'}if(usertype==1103){usertype='";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('ctrans')->getCallable(), array("资金帐户")), "js", null, true);
        echo "'}
        var inhtml='<table class=\"table\" cellpadding=\"0\" cellspacing=\"0\">' +
                '<tr>' +
                '<td colspan=\"4\" class=\"st-title\">A. ";
        // line 15
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('ctrans')->getCallable(), array("个人资料")), "js", null, true);
        echo "</td>' +
                '</tr>' +
                '<tr>' +
                '<td class=\"w14\">";
        // line 18
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('ctrans')->getCallable(), array("您的姓名")), "js", null, true);
        echo "</td>' +
                '<td class=\"w13\"><input readonly class=\"empty\" value=\"'+\$('form input[name=contactXEn]').val()+' '+\$('form input[name=contactMEn]').val()+'\" type=\"text\"></td>' +
                '<td class=\"w14\">";
        // line 20
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('ctrans')->getCallable(), array("出生日期")), "js", null, true);
        echo "</td>' +
                '<td class=\"w13\"><input readonly class=\"empty\" value=\"'+\$('form input[name=birthday]').val()+'\" type=\"text\"></td>' +
                '</tr>' +
                '<tr>' +
                '<td class=\"w14\">";
        // line 24
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('ctrans')->getCallable(), array("直辖市/省份")), "js", null, true);
        echo "</td>' +
                '<td class=\"w13\"><input readonly class=\"empty\" value=\"'+\$('form input[name=province]').val()+'\" type=\"text\"></td>' +
                '<td class=\"w14\">";
        // line 26
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('ctrans')->getCallable(), array("城市")), "js", null, true);
        echo "</td>' +
                '<td class=\"w13\"><input readonly class=\"empty\" value=\"'+\$('form input[name=city]').val()+'\" type=\"text\"></td>' +
                '</tr>' +
                '<tr>' +
                '<td class=\"w14\">";
        // line 30
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('ctrans')->getCallable(), array("详细地址")), "js", null, true);
        echo "</td>' +
                '<td class=\"w12\" colspan=\"3\"><input readonly class=\"w12 empty\" value=\"'+\$('form input[name=address]').val()+'\" type=\"text\"></td>' +
                '</tr>' +
                '<tr>' +
                '<td class=\"w14\">";
        // line 34
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('ctrans')->getCallable(), array("证件号码")), "js", null, true);
        echo "</td>' +
                '<td class=\"w12\" colspan=\"3\"><input readonly class=\"w12 empty\" value=\"'+\$('form input[name=IDcard]').val()+'\" type=\"text\"></td>' +
                '</tr><tr>' +
                '<td colspan=\"4\" class=\"st-title\">B.";
        // line 37
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('ctrans')->getCallable(), array("联络资料")), "js", null, true);
        echo "</td>' +
                '</tr>' +
                '<tr>' +
                '<td class=\"w14\">";
        // line 40
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('ctrans')->getCallable(), array("手机")), "js", null, true);
        echo "</td>' +
                '<td class=\"w13\"><input readonly class=\"empty\" value=\"'+\$('form input[name=mobile]').val()+'\" type=\"text\"></td>' +
                '<td class=\"w14\">";
        // line 42
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('ctrans')->getCallable(), array("电子邮箱")), "js", null, true);
        echo "</td>' +
                '<td class=\"w13\"><input readonly class=\"empty\" value=\"'+\$('form input[name=email]').val()+'\" type=\"text\"></td>' +
                '</tr>' +
                '<tr>' +
                '<td colspan=\"4\" class=\"st-title\">C.";
        // line 46
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('ctrans')->getCallable(), array("账户信息")), "js", null, true);
        echo "</td>' +
                '</tr>' +
                '<tr>' +
                '<td class=\"w14\">";
        // line 49
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('ctrans')->getCallable(), array("账户类型")), "js", null, true);
        echo "</td>' +
                '<td class=\"w13\"><input readonly class=\"empty\" value=\"'+usertype+'\" type=\"text\"></td>' +
                '<td class=\"w14\">";
        // line 51
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('ctrans')->getCallable(), array("杠杆比例")), "js", null, true);
        echo "</td>' +
                '<td class=\"w13\"><input readonly class=\"empty\" value=\"'+\$('form select[name=lever]').val()+'\" type=\"text\"></td>' +
                '</tr>' +
                '</table>';

        \$('form div.tab').eq(2).find('table.table').eq(0).html(inhtml);
    }
    return true;
}";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "js/form.register.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  127 => 51,  122 => 49,  116 => 46,  109 => 42,  104 => 40,  98 => 37,  92 => 34,  85 => 30,  78 => 26,  73 => 24,  66 => 20,  61 => 18,  55 => 15,  45 => 12,  40 => 10,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("formInit.onSubmit=function(m){
    if(! \$('form input[name=agreement]').is(':checked')){\$('form input[name=agreement]').next().addClass('text-error');return false;}
    return true;
}
formInit.onNext=function(m){
    var linow=\$('form .st-tabs').eq(0).find('li.on');
    if(linow.index()==1) {
\t\tvar re = /^[A-Za-z]+\$/;
\t\tif(!isNaN(\$('form input[name=password]').val()) || \$('form input[name=password]').val().length<8 || re.test(\$('form input[name=password]').val())){\$('form input[name=password]').addClass('error');return false;}
        if(\$('form input[name=password]').val()!=\$('form input[name=chkpassword]').val()){ \$('form input[name=chkpassword]').addClass('error').attr('title','{{ '两次密码不一致' | ctrans }}');return false;}
                 var usertype=\$('form select[name=usertype]').val();
                      if(usertype==1101){ usertype='{{ \"标准账户\" |  ctrans }}'}if(usertype==1102){usertype='{{ \"专业账户\" | ctrans }}'}if(usertype==1103){usertype='{{ \"资金帐户\" | ctrans }}'}
        var inhtml='<table class=\"table\" cellpadding=\"0\" cellspacing=\"0\">' +
                '<tr>' +
                '<td colspan=\"4\" class=\"st-title\">A. {{ '个人资料' | ctrans }}</td>' +
                '</tr>' +
                '<tr>' +
                '<td class=\"w14\">{{ '您的姓名' | ctrans }}</td>' +
                '<td class=\"w13\"><input readonly class=\"empty\" value=\"'+\$('form input[name=contactXEn]').val()+' '+\$('form input[name=contactMEn]').val()+'\" type=\"text\"></td>' +
                '<td class=\"w14\">{{ '出生日期' | ctrans }}</td>' +
                '<td class=\"w13\"><input readonly class=\"empty\" value=\"'+\$('form input[name=birthday]').val()+'\" type=\"text\"></td>' +
                '</tr>' +
                '<tr>' +
                '<td class=\"w14\">{{ '直辖市/省份' | ctrans }}</td>' +
                '<td class=\"w13\"><input readonly class=\"empty\" value=\"'+\$('form input[name=province]').val()+'\" type=\"text\"></td>' +
                '<td class=\"w14\">{{ '城市' | ctrans }}</td>' +
                '<td class=\"w13\"><input readonly class=\"empty\" value=\"'+\$('form input[name=city]').val()+'\" type=\"text\"></td>' +
                '</tr>' +
                '<tr>' +
                '<td class=\"w14\">{{ '详细地址' | ctrans }}</td>' +
                '<td class=\"w12\" colspan=\"3\"><input readonly class=\"w12 empty\" value=\"'+\$('form input[name=address]').val()+'\" type=\"text\"></td>' +
                '</tr>' +
                '<tr>' +
                '<td class=\"w14\">{{ '证件号码' | ctrans }}</td>' +
                '<td class=\"w12\" colspan=\"3\"><input readonly class=\"w12 empty\" value=\"'+\$('form input[name=IDcard]').val()+'\" type=\"text\"></td>' +
                '</tr><tr>' +
                '<td colspan=\"4\" class=\"st-title\">B.{{ '联络资料' | ctrans }}</td>' +
                '</tr>' +
                '<tr>' +
                '<td class=\"w14\">{{ '手机' | ctrans }}</td>' +
                '<td class=\"w13\"><input readonly class=\"empty\" value=\"'+\$('form input[name=mobile]').val()+'\" type=\"text\"></td>' +
                '<td class=\"w14\">{{ '电子邮箱' | ctrans }}</td>' +
                '<td class=\"w13\"><input readonly class=\"empty\" value=\"'+\$('form input[name=email]').val()+'\" type=\"text\"></td>' +
                '</tr>' +
                '<tr>' +
                '<td colspan=\"4\" class=\"st-title\">C.{{ '账户信息' | ctrans }}</td>' +
                '</tr>' +
                '<tr>' +
                '<td class=\"w14\">{{ '账户类型' | ctrans }}</td>' +
                '<td class=\"w13\"><input readonly class=\"empty\" value=\"'+usertype+'\" type=\"text\"></td>' +
                '<td class=\"w14\">{{ '杠杆比例' | ctrans }}</td>' +
                '<td class=\"w13\"><input readonly class=\"empty\" value=\"'+\$('form select[name=lever]').val()+'\" type=\"text\"></td>' +
                '</tr>' +
                '</table>';

        \$('form div.tab').eq(2).find('table.table').eq(0).html(inhtml);
    }
    return true;
}", "js/form.register.js.twig", "F:\\beneforex\\mt-beneforex\\mt-parent\\mt-account\\app\\Resources\\views\\js\\form.register.js.twig");
    }
}
