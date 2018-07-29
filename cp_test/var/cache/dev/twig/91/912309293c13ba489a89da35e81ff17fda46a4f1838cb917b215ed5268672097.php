<?php

/* form/register_real.html.twig */
class __TwigTemplate_77b65534c82cbc4d7c77eeef9c4fb794ec494d2b55bc2bd8fc2d9c54610b2ae6 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("form/layout.html.twig", "form/register_real.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
            'initScripts' => array($this, 'block_initScripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "form/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "form/register_real.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "form/register_real.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_content($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 3
        echo "    ";
        if (( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "MODULE", array(), "any", false, true), "system_not_write", array(), "any", true, true) || (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new Twig_Error_Runtime('Variable "data" does not exist.', 3, $this->source); })()), "MODULE", array()), "system_write", array()) != "1"))) {
            // line 4
            echo "        <form action=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/register/account/info"), "html", null, true);
            echo "\" id=\"formno\" method=\"post\" onsubmit=\"formInit.submit(this);return false;\">
            <div class=\"st-tabs\">
                <ul>
                    <li class=\"on\"><i>";
            // line 7
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('ctrans')->getCallable(), array("填写个人资料")), "html", null, true);
            echo "</i></li>
                    <li><i>";
            // line 8
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('ctrans')->getCallable(), array("开户资料")), "html", null, true);
            echo "</i></li>
                    <li><i>";
            // line 9
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('ctrans')->getCallable(), array("阅读并接受协议")), "html", null, true);
            echo "</i></li>
                    <li class=\"last\"><i>";
            // line 10
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('ctrans')->getCallable(), array("完成")), "html", null, true);
            echo "</i></li>
                </ul>
            </div>
            <input name=\"IBserver\" type=\"hidden\" value=\"";
            // line 13
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new Twig_Error_Runtime('Variable "data" does not exist.', 13, $this->source); })()), "IBID", array()), "IB_server", array()), "html", null, true);
            echo "\" />
            <input name=\"IBgroup\" type=\"hidden\" value=\"";
            // line 14
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new Twig_Error_Runtime('Variable "data" does not exist.', 14, $this->source); })()), "IBID", array()), "IB_group", array()), "html", null, true);
            echo "\" />
            <input name=\"IBchkgroup\" type=\"hidden\" value=\"";
            // line 15
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new Twig_Error_Runtime('Variable "data" does not exist.', 15, $this->source); })()), "IBID", array()), "IB_lock", array()), "html", null, true);
            echo "\" />
            <input name=\"IBtype\" type=\"hidden\" value=\"";
            // line 16
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new Twig_Error_Runtime('Variable "data" does not exist.', 16, $this->source); })()), "IBID", array()), "IB_type", array()), "html", null, true);
            echo "\" />

            <div class=\"st-cont\">
                <div class=\"select\" id=\"pluginslang\">
                    <script type=\"text/javascript\" src=\"";
            // line 20
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/js/lang.js"), "html", null, true);
            echo "\"></script>
                </div>
                <div class=\"tab\" style=\"display: block;\">
                    <table class=\"table\" cellpadding=\"0\" cellspacing=\"0\">
                        <tr>
                            <td class=\"st-title\" colspan=\"4\">A. ";
            // line 25
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('ctrans')->getCallable(), array("个人资料")), "html", null, true);
            echo "</td>
                        </tr>
                        <tr>
                            <td class=\"name\">";
            // line 28
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('ctrans')->getCallable(), array("客户姓名")), "html", null, true);
            echo "</td>
                            <td class=\"input\" colspan=\"3\">
                                <div class=\"label fl w1 mr10\" style=\"width:20%;\">
                                    <input name=\"contactXEn\" class=\"w1 empty\" onkeyup=\"this.value=this.value.replace(/\\s+/g,' ').replace(/[\\']/,'`').replace(/[^a-z @A-Z`\\.\\d]/g,'');\" type=\"text\">
                                    <label for=\"male\">";
            // line 32
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('ctrans')->getCallable(), array("姓(英文/拼音)")), "html", null, true);
            echo "</label>
                                </div>
                                <div class=\"label fl w2 mr10\" style=\"width:28%;\">
                                    <input name=\"contactMEn\" class=\"w2 empty\" onkeyup=\"this.value=this.value.replace(/\\s+/g,' ').replace(/[\\']/,'`').replace(/[^a-z @A-Z`\\.\\d]/g,'');\" type=\"text\">
                                    <label for=\"male\">";
            // line 36
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('ctrans')->getCallable(), array("名字(英文/拼音)")), "html", null, true);
            echo "</label>
                                </div>
                                <div class=\"label fl w1 mr10\" style=\"width:10%;\">
                                    <input name=\"contactCnX\" class=\"w1 empty\" type=\"text\">
                                    <label for=\"male\">";
            // line 40
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('ctrans')->getCallable(), array("姓(中文)")), "html", null, true);
            echo "</label>
                                </div>
                                <div class=\"label fl w2 mr10\" style=\"width:18%;\">
                                    <input name=\"contactCnM\" class=\"w2 empty\" type=\"text\">
                                    <label for=\"male\">";
            // line 44
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('ctrans')->getCallable(), array("名字(中文)")), "html", null, true);
            echo "</label>
                                </div>
\t\t\t\t\t\t\t\t<div class=\"label fl w2 mr10\" style=\"width:16%;\">
\t\t\t\t\t\t\t\t\t<input name=\"Fruit\" checked=\"checked\" class=\"fl m0\" type=\"radio\" value=\"1\"/>
\t\t\t\t\t\t\t\t\t<label class=\"sex fl\" for=\"male\">";
            // line 48
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('ctrans')->getCallable(), array("先生")), "html", null, true);
            echo "</label>
\t\t\t\t\t\t\t\t\t<input name=\"Fruit\" class=\"fl m0\" type=\"radio\"  value=\"0\"/>
\t\t\t\t\t\t\t\t\t<label class=\"sex fl\" for=\"male2\">";
            // line 50
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('ctrans')->getCallable(), array("女士")), "html", null, true);
            echo "</label>
\t\t\t\t\t\t\t\t</div>
                            </td>
                        </tr>
                        <tr>
                            <td class=\"name\">";
            // line 55
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('ctrans')->getCallable(), array("联系地址")), "html", null, true);
            echo "</td>
                            <td class=\"input\" colspan=\"3\">
                                <div class=\"mb12\">
                                    <select name=\"country\" class=\"w3 fl mr10 empty\">
                                        <option selected=\"selected\" value=\"\">";
            // line 59
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('ctrans')->getCallable(), array("选择国籍")), "html", null, true);
            echo "...</option>
                                        ";
            // line 60
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new Twig_Error_Runtime('Variable "data" does not exist.', 60, $this->source); })()), "countrys", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 61
                echo "                                            <option value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "country", array()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "country", array()), "html", null, true);
                echo "</option>
                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 63
            echo "                                    </select>
                                    <select name=\"countryRes\" class=\"w3 fl empty\" onchange=\"var tmp=this.options[this.selectedIndex].getAttribute('alt');var tmpc=document.getElementById('mobileCode');if(tmp !=null && tmp!=undefined && tmp!=''){tmpc.value='+'+tmp;tmpc.setAttribute('readonly','readonly');}else{tmpc.value='';tmpc.removeAttribute('readonly');}\">
                                        <option selected=\"selected\" alt=\"\" value=\"\">";
            // line 65
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('ctrans')->getCallable(), array("选择居住国家")), "html", null, true);
            echo "...</option>
                                        ";
            // line 66
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new Twig_Error_Runtime('Variable "data" does not exist.', 66, $this->source); })()), "countrys", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 67
                echo "                                            <option value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "country", array()), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["item"], "mobileCode", array(), "any", true, true)) ? (twig_get_attribute($this->env, $this->source, $context["item"], "mobileCode", array())) : ("")), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "country", array()), "html", null, true);
                echo "</option>
                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 69
            echo "                                    </select>
                                </div>
                                <div class=\"mb12\">
                                    <input name=\"province\" class=\"w3 fl mr10 empty\" type=\"text\" placeholder=\"";
            // line 72
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('ctrans')->getCallable(), array("所属直辖市/省份")), "html", null, true);
            echo "\">
                                    <input name=\"city\" class=\"w3 fl empty\" type=\"text\" placeholder=\"";
            // line 73
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('ctrans')->getCallable(), array("所属城市")), "html", null, true);
            echo "\">
                                </div>
                                <input name=\"address\" class=\"w3 fl empty\" type=\"text\" placeholder=\"";
            // line 75
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('ctrans')->getCallable(), array("您的详细地址")), "html", null, true);
            echo "\">

                            </td>
                        </tr>
                        <tr>
                            <td class=\"name\">";
            // line 80
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('ctrans')->getCallable(), array("出生年月")), "html", null, true);
            echo "</td>
                            <td class=\"input\" colspan=\"3\">
                                <input name=\"birthday\" class=\"w6 fl mr10 empty\" type=\"text\" placeholder=\"";
            // line 82
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('ctrans')->getCallable(), array("您出生年月")), "html", null, true);
            echo "\" onfocus=\"WdatePicker({dateFmt:'yyyy-MM-dd'})\">
                                <input name=\"IDcard\" class=\"w6 fl empty\" type=\"text\" onkeyup=\"value=value.replace(/[^\\w\\1]/ig,'') \"  placeholder=\"";
            // line 83
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('ctrans')->getCallable(), array("您的证件号码")), "html", null, true);
            echo "\">
                            </td>
                        </tr>
                    </table>
                    <table class=\"table \" border=\"0\" cellpadding=\"0\" cellspacing=\"0\">
                        <tr class=\"notice\">
                            <td class=\"st-title\" colspan=\"4\">B.";
            // line 89
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('ctrans')->getCallable(), array("联络资料")), "html", null, true);
            echo "</td>
                        </tr>
                        <tr class=\"notice\">
                            <td class=\"name\">";
            // line 92
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('ctrans')->getCallable(), array("电子邮箱")), "html", null, true);
            echo "</td>
                            <td class=\"input\" colspan=\"3\">
                                <input name=\"email\" class=\"w7 fl mr20 email empty\" type=\"text\" placeholder=\"";
            // line 94
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('ctrans')->getCallable(), array("您的电子邮箱")), "html", null, true);
            echo "\" />
                                <input name=\"emailSub\" class=\"fl m0 empty\" checked=\"checked\" type=\"checkbox\" />
                                <label class=\"sex\" for=\"male\">";
            // line 96
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('ctrans')->getCallable(), array("订阅最新咨讯")), "html", null, true);
            echo "</label>
                            </td>
                        </tr>
                        <tr class=\"notice\">
                            <td class=\"name\">";
            // line 100
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('ctrans')->getCallable(), array("联系电话")), "html", null, true);
            echo "</td>
                            <td class=\"input\" colspan=\"3\">
                                <input name=\"mobileCode\" id=\"mobileCode\" onkeyup=\"var tmp=this.value.replace(/[^\\d]/g,'');if(tmp !=null && tmp!=undefined && tmp!=''){this.value='+'+tmp;}else{this.value='';}\" class=\"w8 mr0 empty\"  type=\"text\" placeholder=\"";
            // line 102
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('ctrans')->getCallable(), array("国家代码")), "html", null, true);
            echo "\" />&nbsp;&nbsp;-&nbsp;&nbsp;
                                <input name=\"mobile\" class=\"w7 mr0 empty\" onkeyup=\"value=value.replace(/[^\\d]/g,'') \" type=\"text\" placeholder=\"";
            // line 103
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('ctrans')->getCallable(), array("手机号码")), "html", null, true);
            echo "\" />
                            </td>
                        </tr>
                    </table>
                    <table class=\"table \" border=\"0\" cellpadding=\"0\" cellspacing=\"0\">
                        <tr class=\"notice\">
                            <td class=\"st-title\" colspan=\"4\">C.";
            // line 109
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('ctrans')->getCallable(), array("证件上传")), "html", null, true);
            echo "</td>
                        </tr>

                        ";
            // line 112
            if (( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "WEB", array(), "any", false, true), "system_register_no_idcard", array(), "any", true, true) || (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new Twig_Error_Runtime('Variable "data" does not exist.', 112, $this->source); })()), "WEB", array()), "system_register_no_idcard", array()) != "1"))) {
                // line 113
                echo "\t\t\t\t\t\t\t<tr class=\"notice\">
\t\t\t\t\t\t\t\t<td class=\"name\">";
                // line 114
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('ctrans')->getCallable(), array("身份证正面上传")), "html", null, true);
                echo "</td>
\t\t\t\t\t\t\t\t<td class=\"input\" colspan=\"3\" >
\t\t\t\t\t\t\t\t\t<input name=\"credentials_1\" readonly class=\"w7 fl empty\" type=\"text\" placeholder=\"\" />
\t\t\t\t\t\t\t\t\t<input type=\"file\" style=\"position: relative\" onchange=\"formInit.upload(this);\" class=\"uploadCert fl\" accept=\"image/gif, image/jpg,image/jpeg, image/bmp, image/png\"   capture=\"camera\" name=\"file\" />
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t<tr class=\"notice\">
\t\t\t\t\t\t\t\t<td class=\"name\">";
                // line 121
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('ctrans')->getCallable(), array("身份证反面上传")), "html", null, true);
                echo "</td>
\t\t\t\t\t\t\t\t<td class=\"input\" colspan=\"3\">
\t\t\t\t\t\t\t\t\t<input name=\"credentials_2\" readonly class=\"w7 fl empty\" type=\"text\" placeholder=\"\" />
\t\t\t\t\t\t\t\t\t<input type=\"file\" style=\"position: relative\" onchange=\"formInit.upload(this);\" class=\"uploadCert fl\" accept=\"image/gif, image/jpg,image/jpeg, image/bmp, image/png\" capture=\"camera\" name=\"file\" />
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t</tr>
                        ";
            }
            // line 128
            echo "                        ";
            if (( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "WEB", array(), "any", false, true), "system_register_no_address", array(), "any", true, true) || (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new Twig_Error_Runtime('Variable "data" does not exist.', 128, $this->source); })()), "WEB", array()), "system_register_no_address", array()) != "1"))) {
                // line 129
                echo "                            <tr class=\"notice\">
                                <td class=\"name\">";
                // line 130
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('ctrans')->getCallable(), array("地址证明上传")), "html", null, true);
                echo "</td>
                                <td class=\"input\" colspan=\"3\">
                                    <input name=\"credentials_5\" readonly class=\"w7 fl\" type=\"text\" placeholder=\"\" />
                                    <input type=\"file\" style=\"position: relative\" onchange=\"formInit.upload(this);\" class=\"uploadCert fl\" accept=\"image/gif, image/jpg,image/jpeg, image/bmp, image/png\" capture=\"camera\" name=\"file\" />
                                </td>
                            </tr>
                        ";
            }
            // line 137
            echo "                        ";
            if (( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "WEB", array(), "any", false, true), "system_register_no_bill", array(), "any", true, true) || (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new Twig_Error_Runtime('Variable "data" does not exist.', 137, $this->source); })()), "WEB", array()), "system_register_no_bill", array()) != "1"))) {
                // line 138
                echo "                            <tr class=\"notice\">
                                <td class=\"name\">";
                // line 139
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('ctrans')->getCallable(), array("账单证明上传")), "html", null, true);
                echo "</td>
                                <td class=\"input\" colspan=\"3\">
                                    <input name=\"uri5\" readonly class=\"w7 fl\" type=\"text\" placeholder=\"\" />
                                    <input type=\"file\" style=\"position: relative\" onchange=\"formInit.upload(this);\" class=\"uploadCert fl\" accept=\"image/gif, image/jpg,image/jpeg, image/bmp, image/png\" capture=\"camera\" name=\"file\" />
                                </td>
                            </tr>
                        ";
            }
            // line 146
            echo "
                        <tr>
                            <td colspan=\"4\" class=\"tac\"><button type=\"button\" onclick=\"formInit.next(this);\" class=\"btn st-btn next\">";
            // line 148
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('ctrans')->getCallable(), array("继续，进入下一步")), "html", null, true);
            echo "</button></td>
                        </tr>
                    </table>


                </div>
                <div class=\"tab\" style=\"display: none;\">
                    <table class=\"table\" cellpadding=\"0\" cellspacing=\"0\">
                        <tr>
                            <td colspan=\"4\" class=\"st-title\">D. ";
            // line 157
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('ctrans')->getCallable(), array("账户性质")), "html", null, true);
            echo "</td>
                        </tr>
                        <tr>
                            ";
            // line 160
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new Twig_Error_Runtime('Variable "data" does not exist.', 160, $this->source); })()), "IBID", array()), "IB_type", array()) != 0)) {
                // line 161
                echo "                                <td class=\"name\">";
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('ctrans')->getCallable(), array("杠杆比例")), "html", null, true);
                echo "</td>
                                <td class=\"name\" style=\"display: none\">";
                // line 162
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('ctrans')->getCallable(), array("账户类型")), "html", null, true);
                echo "</td>
                            ";
            } else {
                // line 164
                echo "                                <td class=\"name\">";
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('ctrans')->getCallable(), array("账户类型")), "html", null, true);
                echo "</td>
                            ";
            }
            // line 166
            echo "                            <td class=\"input\" colspan=\"3\">
                                ";
            // line 167
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new Twig_Error_Runtime('Variable "data" does not exist.', 167, $this->source); })()), "IBID", array()), "IB_type", array()) != 0)) {
                // line 168
                echo "                                    <select name=\"usertype\" style=\"display: none\" ><option value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new Twig_Error_Runtime('Variable "data" does not exist.', 168, $this->source); })()), "IBID", array()), "IB_type", array()), "html", null, true);
                echo "\"></option>></select>
                                ";
            } else {
                // line 170
                echo "                                    <select name=\"usertype\" class=\"w9 fl mr10 empty\" >
                                        <option value=\"\">";
                // line 171
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('ctrans')->getCallable(), array("选择账户类型")), "html", null, true);
                echo "...</option>
                                        ";
                // line 172
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new Twig_Error_Runtime('Variable "data" does not exist.', 172, $this->source); })()), "usertypes", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    // line 173
                    echo "                                            <option value=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "id", array()), "html", null, true);
                    echo "\" >";
                    echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('ctrans')->getCallable(), array(twig_get_attribute($this->env, $this->source, $context["item"], "name", array()))), "html", null, true);
                    echo "</option>
                                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 175
                echo "                                    </select>
                                ";
            }
            // line 177
            echo "                                <select name=\"lever\" class=\"w9 fl mr10 empty\">
                                    <option selected=\"selected\" value=\"\">";
            // line 178
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('ctrans')->getCallable(), array("选择杠杆比例")), "html", null, true);
            echo "...</option>
                                    ";
            // line 179
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new Twig_Error_Runtime('Variable "data" does not exist.', 179, $this->source); })()), "userlevers", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 180
                echo "                                        <option value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "name", array()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "name", array()), "html", null, true);
                echo "</option>
                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 182
            echo "                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td class=\"name\">";
            // line 186
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('ctrans')->getCallable(), array("登录密码")), "html", null, true);
            echo "</td>
                            <td class=\"input\" colspan=\"3\">
                                <div class=\"label fl w10 mr10\">
                                    <input name=\"password\" class=\"empty\" onkeyup=\"this.value=this.value.replace(/[\\W]/g,'');\" type=\"password\">
                                    <label for=\"male\">";
            // line 190
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('ctrans')->getCallable(), array("登录密码不能全为数字并长度不能小于8")), "html", null, true);
            echo "</label>
                                </div>
                                <div class=\"label fl w10\">
                                    <input name=\"chkpassword\" class=\"empty\" type=\"password\">
                                    <label for=\"male\">";
            // line 194
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('ctrans')->getCallable(), array("重新输入密码，两次密码必须一致")), "html", null, true);
            echo "</label>
                                </div>
                            </td>
                        </tr>
                        <tr style=\"display: none\">
                            <td class=\"name\">";
            // line 199
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('ctrans')->getCallable(), array("个人经理")), "html", null, true);
            echo "</td>
                            <td class=\"input\" colspan=\"3\">
                                <select name=\"manager\" class=\"w9 fl \">
                                    <option selected=\"selected\" value=\"\">";
            // line 202
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('ctrans')->getCallable(), array("选择个人经理")), "html", null, true);
            echo "...</option>
                                    ";
            // line 203
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new Twig_Error_Runtime('Variable "data" does not exist.', 203, $this->source); })()), "managers", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 204
                echo "                                        <option value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "id", array()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "contact", array()), "html", null, true);
                echo "</option>
                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 206
            echo "                                </select>
                            </td>
                        </tr>
                        <tr>
                            ";
            // line 211
            echo "                            <td class=\"input\" colspan=\"3\">
                                <input name=\"IBcode\" class=\"w10 \" type=\"hidden\" value=\"";
            // line 212
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new Twig_Error_Runtime('Variable "data" does not exist.', 212, $this->source); })()), "IBID", array()), "IB_code", array()), "html", null, true);
            echo "\" placeholder=\"";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('ctrans')->getCallable(), array("代理IB代码")), "html", null, true);
            echo "\" />
                            </td>
                        </tr>
                        <tr>
                            <td colspan=\"4\" style=\"text-align: center\">
                                <button type=\"button\" onclick=\"formInit.back(this);\" class=\"st-btn btn tar back\">";
            // line 217
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('ctrans')->getCallable(), array("返回上一步")), "html", null, true);
            echo "</button>
                                <button type=\"button\" onclick=\"formInit.next(this);\" class=\"st-btn tar sure next\">";
            // line 218
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('ctrans')->getCallable(), array("继续，进入下一步")), "html", null, true);
            echo "</button>
                            </td>
                        </tr>
                    </table>
                </div>
                <div class=\"tab\" style=\"display: none;\">
                    <table class=\"table\" cellpadding=\"0\" cellspacing=\"0\">

                    </table>
                    <table class=\"table\" cellpadding=\"0\" cellspacing=\"0\">
                        <tr>
                            <td colspan=\"4\" style=\"padding: 10px 40px;\">
                                <span class=\"span\">";
            // line 230
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('ctrans')->getCallable(), array("相关协议")), "html", null, true);
            echo "</span>
                                    ";
            // line 231
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new Twig_Error_Runtime('Variable "data" does not exist.', 231, $this->source); })()), "agreement", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
                // line 232
                echo "                                <a href=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["row"], "title", array()), "html", null, true);
                echo "\" target=\"_blank\" class=\"red\" style=\"font-weight:800;color:#c91c1e;\">
                                    <img src=\"";
                // line 233
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("public/images/pdf.png"), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('ctrans')->getCallable(), array(twig_get_attribute($this->env, $this->source, $context["row"], "content", array()))), "html", null, true);
                echo "</a>
                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 235
            echo "

                                <br/>
                                <input class=\"fl m0 empty\" name=\"agreement\" style=\"margin-left:80px;\" type=\"checkbox\" />
                                <label class=\"sex fl\" for=\"male\" onclick=\"\$('input[name=agreement]').click()\">";
            // line 239
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('ctrans')->getCallable(), array("本人已详细阅读以上协议，理解并同意该业务及声明之条款")), "html", null, true);
            echo "</label>
                            </td>
                        </tr>
                        <tr>
                            <td colspan=\"2\" style=\"text-align: right\">
                                <div class=\"yzm\">
                                    <p class=\"fl\">";
            // line 245
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('ctrans')->getCallable(), array("验证码")), "html", null, true);
            echo "：</p>
                                    <img id=\"checkcode\" src=\"";
            // line 246
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/captcha/window"), "html", null, true);
            echo "\" onClick=\"this.src='/captcha/window?t='+(new Date().getTime());\"  class=\"mr10\" alt=\"\" style=\"height:48px\">
                                    <input type=\"text\" name=\"captcha\" class=\"w5 fl empty\">
                                </div>
                            </td>
                            <td  colspan=\"2\" style=\"text-align: left\">
                                <div id=\"conceal\">
                                    <button type=\"button\" onclick=\"formInit.back(this);\" class=\"st-btn btn tar back\">";
            // line 252
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('ctrans')->getCallable(), array("返回上一步")), "html", null, true);
            echo "</button>
                                    <button type=\"submit\" id=\"submitno\" class=\"st-btn sure submit\">";
            // line 253
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('ctrans')->getCallable(), array("确认无误现在申请")), "html", null, true);
            echo "</button>
                                </div>
                            </td>
                        </tr>
                    </table>
                </div>
                <div class=\"tab\" style=\"display: none;\">
                    <div class=\"succ\">";
            // line 260
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('ctrans')->getCallable(), array("恭喜您！资料已提交成功")), "html", null, true);
            echo "</div>

                </div>
            </div>
        </form>
    ";
        } else {
            // line 266
            echo "        <div style='padding:100px;height:150px;'><p style='text-align:center;color:";
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "MODULE", array(), "any", false, true), "MainColor", array(), "any", true, true)) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new Twig_Error_Runtime('Variable "data" does not exist.', 266, $this->source); })()), "MODULE", array()), "MainColor", array())) : (0)), "html", null, true);
            echo ";font-size:14px;'>";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('ctrans')->getCallable(), array("目前网站正在维护，暂不支持该操作。")), "html", null, true);
            echo "</p></div>
    ";
        }
        // line 268
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 270
    public function block_initScripts($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "initScripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "initScripts"));

        // line 271
        echo "    ";
        $this->displayParentBlock("initScripts", $context, $blocks);
        echo "
    <script type=\"text/javascript\" src=\"";
        // line 272
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/plugins/WdatePicker/WdatePicker.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 273
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/public/ccount/js/layer.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 274
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/js/form/register.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "form/register_real.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  663 => 274,  659 => 273,  655 => 272,  650 => 271,  641 => 270,  630 => 268,  622 => 266,  613 => 260,  603 => 253,  599 => 252,  590 => 246,  586 => 245,  577 => 239,  571 => 235,  561 => 233,  556 => 232,  552 => 231,  548 => 230,  533 => 218,  529 => 217,  519 => 212,  516 => 211,  510 => 206,  499 => 204,  495 => 203,  491 => 202,  485 => 199,  477 => 194,  470 => 190,  463 => 186,  457 => 182,  446 => 180,  442 => 179,  438 => 178,  435 => 177,  431 => 175,  420 => 173,  416 => 172,  412 => 171,  409 => 170,  403 => 168,  401 => 167,  398 => 166,  392 => 164,  387 => 162,  382 => 161,  380 => 160,  374 => 157,  362 => 148,  358 => 146,  348 => 139,  345 => 138,  342 => 137,  332 => 130,  329 => 129,  326 => 128,  316 => 121,  306 => 114,  303 => 113,  301 => 112,  295 => 109,  286 => 103,  282 => 102,  277 => 100,  270 => 96,  265 => 94,  260 => 92,  254 => 89,  245 => 83,  241 => 82,  236 => 80,  228 => 75,  223 => 73,  219 => 72,  214 => 69,  201 => 67,  197 => 66,  193 => 65,  189 => 63,  178 => 61,  174 => 60,  170 => 59,  163 => 55,  155 => 50,  150 => 48,  143 => 44,  136 => 40,  129 => 36,  122 => 32,  115 => 28,  109 => 25,  101 => 20,  94 => 16,  90 => 15,  86 => 14,  82 => 13,  76 => 10,  72 => 9,  68 => 8,  64 => 7,  57 => 4,  54 => 3,  45 => 2,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'form/layout.html.twig' %}
{% block content %}
    {% if not attribute(data.MODULE,\"system_not_write\") is defined or data.MODULE.system_write!='1'%}
        <form action=\"{{ asset('/register/account/info') }}\" id=\"formno\" method=\"post\" onsubmit=\"formInit.submit(this);return false;\">
            <div class=\"st-tabs\">
                <ul>
                    <li class=\"on\"><i>{{ '填写个人资料' | ctrans }}</i></li>
                    <li><i>{{ '开户资料' | ctrans }}</i></li>
                    <li><i>{{ '阅读并接受协议' | ctrans }}</i></li>
                    <li class=\"last\"><i>{{ '完成' | ctrans }}</i></li>
                </ul>
            </div>
            <input name=\"IBserver\" type=\"hidden\" value=\"{{ data.IBID.IB_server }}\" />
            <input name=\"IBgroup\" type=\"hidden\" value=\"{{ data.IBID.IB_group }}\" />
            <input name=\"IBchkgroup\" type=\"hidden\" value=\"{{ data.IBID.IB_lock }}\" />
            <input name=\"IBtype\" type=\"hidden\" value=\"{{ data.IBID.IB_type }}\" />

            <div class=\"st-cont\">
                <div class=\"select\" id=\"pluginslang\">
                    <script type=\"text/javascript\" src=\"{{ asset('/js/lang.js') }}\"></script>
                </div>
                <div class=\"tab\" style=\"display: block;\">
                    <table class=\"table\" cellpadding=\"0\" cellspacing=\"0\">
                        <tr>
                            <td class=\"st-title\" colspan=\"4\">A. {{ '个人资料' | ctrans }}</td>
                        </tr>
                        <tr>
                            <td class=\"name\">{{ '客户姓名' | ctrans }}</td>
                            <td class=\"input\" colspan=\"3\">
                                <div class=\"label fl w1 mr10\" style=\"width:20%;\">
                                    <input name=\"contactXEn\" class=\"w1 empty\" onkeyup=\"this.value=this.value.replace(/\\s+/g,' ').replace(/[\\']/,'`').replace(/[^a-z @A-Z`\\.\\d]/g,'');\" type=\"text\">
                                    <label for=\"male\">{{ '姓(英文/拼音)' | ctrans }}</label>
                                </div>
                                <div class=\"label fl w2 mr10\" style=\"width:28%;\">
                                    <input name=\"contactMEn\" class=\"w2 empty\" onkeyup=\"this.value=this.value.replace(/\\s+/g,' ').replace(/[\\']/,'`').replace(/[^a-z @A-Z`\\.\\d]/g,'');\" type=\"text\">
                                    <label for=\"male\">{{ '名字(英文/拼音)' | ctrans }}</label>
                                </div>
                                <div class=\"label fl w1 mr10\" style=\"width:10%;\">
                                    <input name=\"contactCnX\" class=\"w1 empty\" type=\"text\">
                                    <label for=\"male\">{{ '姓(中文)' | ctrans }}</label>
                                </div>
                                <div class=\"label fl w2 mr10\" style=\"width:18%;\">
                                    <input name=\"contactCnM\" class=\"w2 empty\" type=\"text\">
                                    <label for=\"male\">{{ '名字(中文)' | ctrans }}</label>
                                </div>
\t\t\t\t\t\t\t\t<div class=\"label fl w2 mr10\" style=\"width:16%;\">
\t\t\t\t\t\t\t\t\t<input name=\"Fruit\" checked=\"checked\" class=\"fl m0\" type=\"radio\" value=\"1\"/>
\t\t\t\t\t\t\t\t\t<label class=\"sex fl\" for=\"male\">{{ '先生' | ctrans }}</label>
\t\t\t\t\t\t\t\t\t<input name=\"Fruit\" class=\"fl m0\" type=\"radio\"  value=\"0\"/>
\t\t\t\t\t\t\t\t\t<label class=\"sex fl\" for=\"male2\">{{ '女士' | ctrans }}</label>
\t\t\t\t\t\t\t\t</div>
                            </td>
                        </tr>
                        <tr>
                            <td class=\"name\">{{ '联系地址' | ctrans }}</td>
                            <td class=\"input\" colspan=\"3\">
                                <div class=\"mb12\">
                                    <select name=\"country\" class=\"w3 fl mr10 empty\">
                                        <option selected=\"selected\" value=\"\">{{ '选择国籍' | ctrans }}...</option>
                                        {% for item in data.countrys %}
                                            <option value=\"{{ item.country }}\">{{ item.country }}</option>
                                        {% endfor %}
                                    </select>
                                    <select name=\"countryRes\" class=\"w3 fl empty\" onchange=\"var tmp=this.options[this.selectedIndex].getAttribute('alt');var tmpc=document.getElementById('mobileCode');if(tmp !=null && tmp!=undefined && tmp!=''){tmpc.value='+'+tmp;tmpc.setAttribute('readonly','readonly');}else{tmpc.value='';tmpc.removeAttribute('readonly');}\">
                                        <option selected=\"selected\" alt=\"\" value=\"\">{{ '选择居住国家' | ctrans }}...</option>
                                        {% for item in data.countrys %}
                                            <option value=\"{{ item.country }}\" alt=\"{{ attribute(item,\"mobileCode\") is defined ? item.mobileCode:\"\" }}\">{{ item.country }}</option>
                                        {% endfor %}
                                    </select>
                                </div>
                                <div class=\"mb12\">
                                    <input name=\"province\" class=\"w3 fl mr10 empty\" type=\"text\" placeholder=\"{{ '所属直辖市/省份' | ctrans }}\">
                                    <input name=\"city\" class=\"w3 fl empty\" type=\"text\" placeholder=\"{{ '所属城市' | ctrans }}\">
                                </div>
                                <input name=\"address\" class=\"w3 fl empty\" type=\"text\" placeholder=\"{{ '您的详细地址' | ctrans }}\">

                            </td>
                        </tr>
                        <tr>
                            <td class=\"name\">{{ '出生年月' | ctrans }}</td>
                            <td class=\"input\" colspan=\"3\">
                                <input name=\"birthday\" class=\"w6 fl mr10 empty\" type=\"text\" placeholder=\"{{ '您出生年月' | ctrans }}\" onfocus=\"WdatePicker({dateFmt:'yyyy-MM-dd'})\">
                                <input name=\"IDcard\" class=\"w6 fl empty\" type=\"text\" onkeyup=\"value=value.replace(/[^\\w\\1]/ig,'') \"  placeholder=\"{{ '您的证件号码' | ctrans }}\">
                            </td>
                        </tr>
                    </table>
                    <table class=\"table \" border=\"0\" cellpadding=\"0\" cellspacing=\"0\">
                        <tr class=\"notice\">
                            <td class=\"st-title\" colspan=\"4\">B.{{ '联络资料' | ctrans }}</td>
                        </tr>
                        <tr class=\"notice\">
                            <td class=\"name\">{{ '电子邮箱' | ctrans }}</td>
                            <td class=\"input\" colspan=\"3\">
                                <input name=\"email\" class=\"w7 fl mr20 email empty\" type=\"text\" placeholder=\"{{ '您的电子邮箱' | ctrans }}\" />
                                <input name=\"emailSub\" class=\"fl m0 empty\" checked=\"checked\" type=\"checkbox\" />
                                <label class=\"sex\" for=\"male\">{{ '订阅最新咨讯' | ctrans }}</label>
                            </td>
                        </tr>
                        <tr class=\"notice\">
                            <td class=\"name\">{{ '联系电话' | ctrans }}</td>
                            <td class=\"input\" colspan=\"3\">
                                <input name=\"mobileCode\" id=\"mobileCode\" onkeyup=\"var tmp=this.value.replace(/[^\\d]/g,'');if(tmp !=null && tmp!=undefined && tmp!=''){this.value='+'+tmp;}else{this.value='';}\" class=\"w8 mr0 empty\"  type=\"text\" placeholder=\"{{ '国家代码' | ctrans }}\" />&nbsp;&nbsp;-&nbsp;&nbsp;
                                <input name=\"mobile\" class=\"w7 mr0 empty\" onkeyup=\"value=value.replace(/[^\\d]/g,'') \" type=\"text\" placeholder=\"{{ '手机号码' | ctrans }}\" />
                            </td>
                        </tr>
                    </table>
                    <table class=\"table \" border=\"0\" cellpadding=\"0\" cellspacing=\"0\">
                        <tr class=\"notice\">
                            <td class=\"st-title\" colspan=\"4\">C.{{ '证件上传' | ctrans }}</td>
                        </tr>

                        {% if not attribute(data.WEB,\"system_register_no_idcard\") is defined or data.WEB.system_register_no_idcard!='1' %}
\t\t\t\t\t\t\t<tr class=\"notice\">
\t\t\t\t\t\t\t\t<td class=\"name\">{{ '身份证正面上传' | ctrans }}</td>
\t\t\t\t\t\t\t\t<td class=\"input\" colspan=\"3\" >
\t\t\t\t\t\t\t\t\t<input name=\"credentials_1\" readonly class=\"w7 fl empty\" type=\"text\" placeholder=\"\" />
\t\t\t\t\t\t\t\t\t<input type=\"file\" style=\"position: relative\" onchange=\"formInit.upload(this);\" class=\"uploadCert fl\" accept=\"image/gif, image/jpg,image/jpeg, image/bmp, image/png\"   capture=\"camera\" name=\"file\" />
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t<tr class=\"notice\">
\t\t\t\t\t\t\t\t<td class=\"name\">{{ '身份证反面上传' | ctrans }}</td>
\t\t\t\t\t\t\t\t<td class=\"input\" colspan=\"3\">
\t\t\t\t\t\t\t\t\t<input name=\"credentials_2\" readonly class=\"w7 fl empty\" type=\"text\" placeholder=\"\" />
\t\t\t\t\t\t\t\t\t<input type=\"file\" style=\"position: relative\" onchange=\"formInit.upload(this);\" class=\"uploadCert fl\" accept=\"image/gif, image/jpg,image/jpeg, image/bmp, image/png\" capture=\"camera\" name=\"file\" />
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t</tr>
                        {% endif %}
                        {% if not attribute(data.WEB,\"system_register_no_address\") is defined or data.WEB.system_register_no_address!='1' %}
                            <tr class=\"notice\">
                                <td class=\"name\">{{ '地址证明上传' | ctrans }}</td>
                                <td class=\"input\" colspan=\"3\">
                                    <input name=\"credentials_5\" readonly class=\"w7 fl\" type=\"text\" placeholder=\"\" />
                                    <input type=\"file\" style=\"position: relative\" onchange=\"formInit.upload(this);\" class=\"uploadCert fl\" accept=\"image/gif, image/jpg,image/jpeg, image/bmp, image/png\" capture=\"camera\" name=\"file\" />
                                </td>
                            </tr>
                        {% endif %}
                        {% if not attribute(data.WEB,\"system_register_no_bill\") is defined or data.WEB.system_register_no_bill!='1' %}
                            <tr class=\"notice\">
                                <td class=\"name\">{{ '账单证明上传' | ctrans }}</td>
                                <td class=\"input\" colspan=\"3\">
                                    <input name=\"uri5\" readonly class=\"w7 fl\" type=\"text\" placeholder=\"\" />
                                    <input type=\"file\" style=\"position: relative\" onchange=\"formInit.upload(this);\" class=\"uploadCert fl\" accept=\"image/gif, image/jpg,image/jpeg, image/bmp, image/png\" capture=\"camera\" name=\"file\" />
                                </td>
                            </tr>
                        {% endif %}

                        <tr>
                            <td colspan=\"4\" class=\"tac\"><button type=\"button\" onclick=\"formInit.next(this);\" class=\"btn st-btn next\">{{ '继续，进入下一步' | ctrans }}</button></td>
                        </tr>
                    </table>


                </div>
                <div class=\"tab\" style=\"display: none;\">
                    <table class=\"table\" cellpadding=\"0\" cellspacing=\"0\">
                        <tr>
                            <td colspan=\"4\" class=\"st-title\">D. {{ '账户性质' | ctrans }}</td>
                        </tr>
                        <tr>
                            {% if data.IBID.IB_type!=0  %}
                                <td class=\"name\">{{ '杠杆比例' | ctrans }}</td>
                                <td class=\"name\" style=\"display: none\">{{ '账户类型' | ctrans }}</td>
                            {% else %}
                                <td class=\"name\">{{ '账户类型' | ctrans }}</td>
                            {% endif %}
                            <td class=\"input\" colspan=\"3\">
                                {% if data.IBID.IB_type!=0 %}
                                    <select name=\"usertype\" style=\"display: none\" ><option value=\"{{ data.IBID.IB_type }}\"></option>></select>
                                {% else %}
                                    <select name=\"usertype\" class=\"w9 fl mr10 empty\" >
                                        <option value=\"\">{{ '选择账户类型' | ctrans }}...</option>
                                        {% for item in data.usertypes %}
                                            <option value=\"{{ item.id }}\" >{{ item.name | ctrans }}</option>
                                        {% endfor %}
                                    </select>
                                {% endif %}
                                <select name=\"lever\" class=\"w9 fl mr10 empty\">
                                    <option selected=\"selected\" value=\"\">{{ '选择杠杆比例' | ctrans }}...</option>
                                    {% for item in data.userlevers %}
                                        <option value=\"{{ item.name }}\">{{ item.name }}</option>
                                    {% endfor %}
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td class=\"name\">{{ '登录密码' | ctrans }}</td>
                            <td class=\"input\" colspan=\"3\">
                                <div class=\"label fl w10 mr10\">
                                    <input name=\"password\" class=\"empty\" onkeyup=\"this.value=this.value.replace(/[\\W]/g,'');\" type=\"password\">
                                    <label for=\"male\">{{ '登录密码不能全为数字并长度不能小于8' | ctrans }}</label>
                                </div>
                                <div class=\"label fl w10\">
                                    <input name=\"chkpassword\" class=\"empty\" type=\"password\">
                                    <label for=\"male\">{{ '重新输入密码，两次密码必须一致' | ctrans }}</label>
                                </div>
                            </td>
                        </tr>
                        <tr style=\"display: none\">
                            <td class=\"name\">{{ '个人经理' | ctrans }}</td>
                            <td class=\"input\" colspan=\"3\">
                                <select name=\"manager\" class=\"w9 fl \">
                                    <option selected=\"selected\" value=\"\">{{ '选择个人经理' | ctrans }}...</option>
                                    {% for item in data.managers %}
                                        <option value=\"{{ item.id }}\">{{ item.contact }}</option>
                                    {% endfor %}
                                </select>
                            </td>
                        </tr>
                        <tr>
                            {#<td class=\"name\">{{ '代理信息' | ctrans }}</td>#}
                            <td class=\"input\" colspan=\"3\">
                                <input name=\"IBcode\" class=\"w10 \" type=\"hidden\" value=\"{{ data.IBID.IB_code }}\" placeholder=\"{{ '代理IB代码' | ctrans }}\" />
                            </td>
                        </tr>
                        <tr>
                            <td colspan=\"4\" style=\"text-align: center\">
                                <button type=\"button\" onclick=\"formInit.back(this);\" class=\"st-btn btn tar back\">{{ '返回上一步' | ctrans }}</button>
                                <button type=\"button\" onclick=\"formInit.next(this);\" class=\"st-btn tar sure next\">{{ '继续，进入下一步' | ctrans }}</button>
                            </td>
                        </tr>
                    </table>
                </div>
                <div class=\"tab\" style=\"display: none;\">
                    <table class=\"table\" cellpadding=\"0\" cellspacing=\"0\">

                    </table>
                    <table class=\"table\" cellpadding=\"0\" cellspacing=\"0\">
                        <tr>
                            <td colspan=\"4\" style=\"padding: 10px 40px;\">
                                <span class=\"span\">{{ '相关协议' | ctrans }}</span>
                                    {% for row in  data.agreement %}
                                <a href=\"{{ row.title }}\" target=\"_blank\" class=\"red\" style=\"font-weight:800;color:#c91c1e;\">
                                    <img src=\"{{ asset('public/images/pdf.png') }}\">{{ row.content | ctrans }}</a>
                                    {% endfor %}


                                <br/>
                                <input class=\"fl m0 empty\" name=\"agreement\" style=\"margin-left:80px;\" type=\"checkbox\" />
                                <label class=\"sex fl\" for=\"male\" onclick=\"\$('input[name=agreement]').click()\">{{ '本人已详细阅读以上协议，理解并同意该业务及声明之条款' | ctrans }}</label>
                            </td>
                        </tr>
                        <tr>
                            <td colspan=\"2\" style=\"text-align: right\">
                                <div class=\"yzm\">
                                    <p class=\"fl\">{{ '验证码' | ctrans }}：</p>
                                    <img id=\"checkcode\" src=\"{{ asset('/captcha/window') }}\" onClick=\"this.src='/captcha/window?t='+(new Date().getTime());\"  class=\"mr10\" alt=\"\" style=\"height:48px\">
                                    <input type=\"text\" name=\"captcha\" class=\"w5 fl empty\">
                                </div>
                            </td>
                            <td  colspan=\"2\" style=\"text-align: left\">
                                <div id=\"conceal\">
                                    <button type=\"button\" onclick=\"formInit.back(this);\" class=\"st-btn btn tar back\">{{ '返回上一步' | ctrans }}</button>
                                    <button type=\"submit\" id=\"submitno\" class=\"st-btn sure submit\">{{ '确认无误现在申请' | ctrans }}</button>
                                </div>
                            </td>
                        </tr>
                    </table>
                </div>
                <div class=\"tab\" style=\"display: none;\">
                    <div class=\"succ\">{{ '恭喜您！资料已提交成功' | ctrans }}</div>

                </div>
            </div>
        </form>
    {% else %}
        <div style='padding:100px;height:150px;'><p style='text-align:center;color:{{ attribute(data.MODULE,\"MainColor\") is defined ? data.MODULE.MainColor:0 }};font-size:14px;'>{{ '目前网站正在维护，暂不支持该操作。' | ctrans }}</p></div>
    {% endif %}

{% endblock %}
{% block initScripts %}
    {{ parent() }}
    <script type=\"text/javascript\" src=\"{{ asset('/plugins/WdatePicker/WdatePicker.js') }}\"></script>
    <script type=\"text/javascript\" src=\"{{ asset('/public/ccount/js/layer.js') }}\"></script>
    <script type=\"text/javascript\" src=\"{{ asset('/js/form/register.js') }}\"></script>
{% endblock %}
", "form/register_real.html.twig", "F:\\beneforex\\mt-beneforex\\mt-parent\\mt-account\\app\\Resources\\views\\form\\register_real.html.twig");
    }
}
