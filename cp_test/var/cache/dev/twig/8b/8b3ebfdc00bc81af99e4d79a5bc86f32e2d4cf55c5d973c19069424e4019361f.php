<?php

/* user/Alipay.html.twig */
class __TwigTemplate_b60cc777256ab7f17f1174c678236148c01bb5b44e5b6b6e115cb48efd2aa2ef extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "user/Alipay.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "user/Alipay.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html xmlns=\"http://www.w3.org/1999/xhtml\">
<head>
    <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
    <meta charset=\"utf-8\" />
    <title>test</title>
</head>
<body>
<div style=\"width: 100%;height: 20px;\">    </div>
<div style=\"width: 100%;height: 600px;\">
    <div style=\"margin: 0 auto;width: 250px;height: 600px\">
        <div style=\"width: 300px;height: 450px; \">
            <img src=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("public/images/alipay.jpg"), "html", null, true);
        echo "\" width=\"300px\" height=\"450\">
        </div>
        <div style=\"width: 248px;height: 50px;\">
            <p style=\"color: blue\">打开支付宝首页搜索“527447343”，即可领红包哟</p>

        </div>
    </div>
</div>
</body>
</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "user/Alipay.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 13,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html xmlns=\"http://www.w3.org/1999/xhtml\">
<head>
    <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
    <meta charset=\"utf-8\" />
    <title>test</title>
</head>
<body>
<div style=\"width: 100%;height: 20px;\">    </div>
<div style=\"width: 100%;height: 600px;\">
    <div style=\"margin: 0 auto;width: 250px;height: 600px\">
        <div style=\"width: 300px;height: 450px; \">
            <img src=\"{{ asset('public/images/alipay.jpg') }}\" width=\"300px\" height=\"450\">
        </div>
        <div style=\"width: 248px;height: 50px;\">
            <p style=\"color: blue\">打开支付宝首页搜索“527447343”，即可领红包哟</p>

        </div>
    </div>
</div>
</body>
</html>
", "user/Alipay.html.twig", "F:\\symfony_test\\cp_test\\app\\Resources\\views\\user\\Alipay.html.twig");
    }
}
