<?php

/* user/index.html.twig */
class __TwigTemplate_eb2a0cb5a26c81dd0382b3454b2e6ef7261582ba35b65ca5879cadddbf265c13 extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "user/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "user/index.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">


<head>
    <meta charset=\"UTF-8\">
    <title>";
        // line 7
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('ctrans')->getCallable(), array("登录")), "html", null, true);
        echo "</title>
    <link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("public/css/common.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("public/ccount/css/layer.css"), "html", null, true);
        echo "\">
    ";
        // line 10
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "WEB", array(), "any", false, true), "website_style_login", array(), "any", true, true) && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new Twig_Error_Runtime('Variable "data" does not exist.', 10, $this->source); })()), "WEB", array()), "website_style_login", array()) != array()))) {
            // line 11
            echo "        <link rel=\"stylesheet\"  type=\"text/css\"  href=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new Twig_Error_Runtime('Variable "data" does not exist.', 11, $this->source); })()), "WEB", array()), "website_style_login", array()), "html", null, true);
            echo "\">
    ";
        }
        // line 13
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("public/ccount/js/jquery-1.11.1.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("public/ccount/js/layer.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("public/js/login.js"), "html", null, true);
        echo "\"></script>
</head>
<body>
    <div class=\"login\">
        <div class=\"topbar2\">
            <a href=\"#\" class=\"logo\"><img src=\"";
        // line 20
        if (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "WEB", array(), "any", false, true), "website_notlogin_logo", array(), "any", true, true) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "WEB", array(), "any", false, true), "system_webadmin_url", array(), "any", true, true)) && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new Twig_Error_Runtime('Variable "data" does not exist.', 20, $this->source); })()), "WEB", array()), "website_notlogin_logo", array()) != array()))) {
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new Twig_Error_Runtime('Variable "data" does not exist.', 20, $this->source); })()), "WEB", array()), "website_notlogin_logo", array()), "html", null, true);
        } else {
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("public/images/logom.png"), "html", null, true);
        }
        echo "\" alt=\"\"></a>
            <a href=\"/\" class=\"home\"><img src=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("public/images/home.gif"), "html", null, true);
        echo "\" alt=\"\"></a>
                <div class=\"select\" id=\"pluginslang\">
                    <script type=\"text/javascript\" src=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/js/lang.js"), "html", null, true);
        echo "\"></script>
                </div>
        </div>
        ";
        // line 27
        echo "        <form class=\"am-form\" method=\"post\" action=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("member/login"), "html", null, true);
        echo "\" id=\"loginform\">
            <table class=\"from-login\" cellspacing=\"0\" cellpadding=\"0\">
                <tr>
                    <td>";
        // line 30
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('ctrans')->getCallable(), array("用户名")), "html", null, true);
        echo "</td>
                    <td>";
        // line 31
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('ctrans')->getCallable(), array("密码")), "html", null, true);
        echo "</td>
                </tr>
                <tr>
                    <td>
                        <div class=\"username\">
                            <input id=\"username\" name=\"username\" type=\"text\"  value=\"";
        // line 36
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new Twig_Error_Runtime('Variable "data" does not exist.', 36, $this->source); })()), "userInfo", array()), "username", array()), "html", null, true);
        echo "\" placeholder=\"";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('ctrans')->getCallable(), array("请输入电子邮件或者用户名")), "html", null, true);
        echo "\">
                            <i></i>
                        </div>
                    </td>
                    <td>
                        <div class=\"password\">
                            <input id=\"password\" name=\"password\" type=\"password\" value=\"";
        // line 42
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new Twig_Error_Runtime('Variable "data" does not exist.', 42, $this->source); })()), "userInfo", array()), "password", array()), "html", null, true);
        echo "\" placeholder=\"";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('ctrans')->getCallable(), array("请输入密码")), "html", null, true);
        echo "\">
                            <i></i>
                            <b></b>
                        </div>
                    </td>
                </tr>
                <td>
                    <div class=\"vcode\">
                        <input type=\"text\" name=\"vcode\" class=\"\" id=\"doc-ipt-captcha-1\" placeholder=\"";
        // line 50
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('ctrans')->getCallable(), array("请输入验证码")), "html", null, true);
        echo "\" >
                    </div>
                </td>
                <td>
                    <div class=\"img\">
                        <img id=\"vcode\" height=\"43\" src=\"";
        // line 55
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/captcha/getCaptcha"), "html", null, true);
        echo "\" onclick=\"this.src='/captcha/getCaptcha?cc='+Math.random();\" >
                    </div>
                ";
        // line 57
        if ((isset($context["msg"]) || array_key_exists("msg", $context))) {
            // line 58
            echo "                <div class=\"am-form-group login-font\">
                    <i> ";
            // line 59
            echo twig_escape_filter($this->env, (isset($context["msg"]) || array_key_exists("msg", $context) ? $context["msg"] : (function () { throw new Twig_Error_Runtime('Variable "msg" does not exist.', 59, $this->source); })()), "html", null, true);
            echo "</i>
                </div>
                ";
        }
        // line 62
        echo "                </td>
                <input type=\"hidden\" name=\"format\" value=\"html\" />
                <tr>
                    <td colspan=\"2\" style=\"text-align: center;\">
                        <button class=\"btn-login\" type=\"submit\">";
        // line 66
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('ctrans')->getCallable(), array("登录")), "html", null, true);
        echo "</button>
                    </td>
                </tr>
                <tr>
                    <td colspan=\"2\" style=\"text-align: center\">
                        <a href=\"";
        // line 71
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/form/register_real"), "html", null, true);
        echo "\"><button class=\"btn-register\" type=\"button\">";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('ctrans')->getCallable(), array("注册")), "html", null, true);
        echo "</button></a>
                    </td>
                </tr>
                <tr>
                    <td colspan=\"2\" style=\"text-align: center;cursor:default \" >
                        <a class=\"forget\">";
        // line 76
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('ctrans')->getCallable(), array("忘记密码")), "html", null, true);
        echo "</a>
                    </td>
                </tr>
            </table>
        </form>


";
        // line 84
        echo "        <form class=\"am-form\" method=\"get\" action=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/user/send/email"), "html", null, true);
        echo "\"  onsubmit=\"submitEmail(this);return false\" style=\"display: none\" id=\"forgetform\">
            <table class=\"from-login forgettable\" cellspacing=\"0\" cellpadding=\"0\">
                <tr>
                    <td colspan=\"2\">";
        // line 87
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('ctrans')->getCallable(), array("用户名 / 电子邮件")), "html", null, true);
        echo "</td>
                </tr>
                <tr>
                    <td colspan=\"2\">
                        <div class=\"username\">
                            <input id=\"email\" name=\"email\" type=\"text\" placeholder=\"";
        // line 92
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('ctrans')->getCallable(), array("请输入电子邮件")), "html", null, true);
        echo "\">
                            <i></i>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div class=\"vcode_input\">
                            <input type=\"text\" name=\"captcha\"  id=\"doc-ipt-captcha\" placeholder=\"";
        // line 100
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('ctrans')->getCallable(), array("请输入验证码")), "html", null, true);
        echo "\" >
\t\t\t\t\t\t</div>
\t\t\t\t\t</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t<div class=\"vcode_img\">
                            <img height=\"43\" src=\"";
        // line 105
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/captcha/getCaptcha"), "html", null, true);
        echo "\" onclick=\"this.src='/captcha/getCaptcha?cc='+Math.random();\" >
                        </div>
                    </td>
                </tr>
                <input type=\"hidden\" name=\"format\" value=\"html\" />
                <tr>
                    <td colspan=\"2\" style=\"text-align: center;\">
                        <button class=\"btn-login\" type=\"submit\">";
        // line 112
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('ctrans')->getCallable(), array("找回密码")), "html", null, true);
        echo "</button>
                    </td>
                </tr>
                <tr>
                    <td colspan=\"2\" style=\"text-align: center ;cursor:default\">
                        <a class=\"enter\" >";
        // line 117
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('ctrans')->getCallable(), array("登录")), "html", null, true);
        echo "</a>
                    </td>
                </tr>
            </table>
        </form>
        <div style=\"margin: 10% auto;text-align: center;color: #b1b0b0;\"><span>如果出现异常<p>建议使用推荐浏览器Chrome浏览本站</p></span></div>
    </div>
</body>


</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "user/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  246 => 117,  238 => 112,  228 => 105,  220 => 100,  209 => 92,  201 => 87,  194 => 84,  184 => 76,  174 => 71,  166 => 66,  160 => 62,  154 => 59,  151 => 58,  149 => 57,  144 => 55,  136 => 50,  123 => 42,  112 => 36,  104 => 31,  100 => 30,  93 => 27,  87 => 23,  82 => 21,  74 => 20,  66 => 15,  62 => 14,  57 => 13,  51 => 11,  49 => 10,  45 => 9,  41 => 8,  37 => 7,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html lang=\"en\">


<head>
    <meta charset=\"UTF-8\">
    <title>{{ '登录' | ctrans }}</title>
    <link rel=\"stylesheet\" href=\"{{ asset('public/css/common.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('public/ccount/css/layer.css') }}\">
    {% if data.WEB.website_style_login is defined  and data.WEB.website_style_login !=[] %}
        <link rel=\"stylesheet\"  type=\"text/css\"  href=\"{{ data.WEB.website_style_login}}\">
    {% endif %}
    <script src=\"{{ asset('public/ccount/js/jquery-1.11.1.min.js') }}\"></script>
    <script src=\"{{ asset('public/ccount/js/layer.js') }}\"></script>
    <script src=\"{{ asset('public/js/login.js') }}\"></script>
</head>
<body>
    <div class=\"login\">
        <div class=\"topbar2\">
            <a href=\"#\" class=\"logo\"><img src=\"{% if data.WEB.website_notlogin_logo is defined  and data.WEB.system_webadmin_url  is defined and data.WEB.website_notlogin_logo!=[] %}{{ data.WEB.website_notlogin_logo }}{% else %}{{ asset('public/images/logom.png') }}{% endif %}\" alt=\"\"></a>
            <a href=\"/\" class=\"home\"><img src=\"{{ asset('public/images/home.gif') }}\" alt=\"\"></a>
                <div class=\"select\" id=\"pluginslang\">
                    <script type=\"text/javascript\" src=\"{{ asset('/js/lang.js') }}\"></script>
                </div>
        </div>
        {#登录页面#}
        <form class=\"am-form\" method=\"post\" action=\"{{ asset('member/login') }}\" id=\"loginform\">
            <table class=\"from-login\" cellspacing=\"0\" cellpadding=\"0\">
                <tr>
                    <td>{{ '用户名' | ctrans }}</td>
                    <td>{{ '密码' | ctrans }}</td>
                </tr>
                <tr>
                    <td>
                        <div class=\"username\">
                            <input id=\"username\" name=\"username\" type=\"text\"  value=\"{{ data.userInfo.username }}\" placeholder=\"{{ '请输入电子邮件或者用户名' | ctrans }}\">
                            <i></i>
                        </div>
                    </td>
                    <td>
                        <div class=\"password\">
                            <input id=\"password\" name=\"password\" type=\"password\" value=\"{{ data.userInfo.password }}\" placeholder=\"{{ '请输入密码' | ctrans }}\">
                            <i></i>
                            <b></b>
                        </div>
                    </td>
                </tr>
                <td>
                    <div class=\"vcode\">
                        <input type=\"text\" name=\"vcode\" class=\"\" id=\"doc-ipt-captcha-1\" placeholder=\"{{ '请输入验证码' | ctrans }}\" >
                    </div>
                </td>
                <td>
                    <div class=\"img\">
                        <img id=\"vcode\" height=\"43\" src=\"{{ asset('/captcha/getCaptcha') }}\" onclick=\"this.src='/captcha/getCaptcha?cc='+Math.random();\" >
                    </div>
                {% if msg is defined  %}
                <div class=\"am-form-group login-font\">
                    <i> {{ msg }}</i>
                </div>
                {% endif %}
                </td>
                <input type=\"hidden\" name=\"format\" value=\"html\" />
                <tr>
                    <td colspan=\"2\" style=\"text-align: center;\">
                        <button class=\"btn-login\" type=\"submit\">{{ '登录' | ctrans }}</button>
                    </td>
                </tr>
                <tr>
                    <td colspan=\"2\" style=\"text-align: center\">
                        <a href=\"{{ asset('/form/register_real') }}\"><button class=\"btn-register\" type=\"button\">{{ '注册' | ctrans }}</button></a>
                    </td>
                </tr>
                <tr>
                    <td colspan=\"2\" style=\"text-align: center;cursor:default \" >
                        <a class=\"forget\">{{ '忘记密码' | ctrans }}</a>
                    </td>
                </tr>
            </table>
        </form>


{#找回密码页面#}
        <form class=\"am-form\" method=\"get\" action=\"{{ asset('/user/send/email') }}\"  onsubmit=\"submitEmail(this);return false\" style=\"display: none\" id=\"forgetform\">
            <table class=\"from-login forgettable\" cellspacing=\"0\" cellpadding=\"0\">
                <tr>
                    <td colspan=\"2\">{{ '用户名 / 电子邮件' | ctrans }}</td>
                </tr>
                <tr>
                    <td colspan=\"2\">
                        <div class=\"username\">
                            <input id=\"email\" name=\"email\" type=\"text\" placeholder=\"{{ '请输入电子邮件' | ctrans }}\">
                            <i></i>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div class=\"vcode_input\">
                            <input type=\"text\" name=\"captcha\"  id=\"doc-ipt-captcha\" placeholder=\"{{ '请输入验证码' | ctrans }}\" >
\t\t\t\t\t\t</div>
\t\t\t\t\t</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t<div class=\"vcode_img\">
                            <img height=\"43\" src=\"{{ asset('/captcha/getCaptcha') }}\" onclick=\"this.src='/captcha/getCaptcha?cc='+Math.random();\" >
                        </div>
                    </td>
                </tr>
                <input type=\"hidden\" name=\"format\" value=\"html\" />
                <tr>
                    <td colspan=\"2\" style=\"text-align: center;\">
                        <button class=\"btn-login\" type=\"submit\">{{ '找回密码' | ctrans }}</button>
                    </td>
                </tr>
                <tr>
                    <td colspan=\"2\" style=\"text-align: center ;cursor:default\">
                        <a class=\"enter\" >{{ '登录' | ctrans }}</a>
                    </td>
                </tr>
            </table>
        </form>
        <div style=\"margin: 10% auto;text-align: center;color: #b1b0b0;\"><span>如果出现异常<p>建议使用推荐浏览器Chrome浏览本站</p></span></div>
    </div>
</body>


</html>
", "user/index.html.twig", "F:\\beneforex\\mt-beneforex\\mt-parent\\mt-account\\app\\Resources\\views\\user\\index.html.twig");
    }
}
