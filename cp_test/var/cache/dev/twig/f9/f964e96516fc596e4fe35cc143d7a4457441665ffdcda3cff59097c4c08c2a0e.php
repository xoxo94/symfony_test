<?php

/* form/layout.html.twig */
class __TwigTemplate_5c735fedd1147323cc7742786e78b1b21a6e8154b4088a43fa8268daeb94fa04 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = array(
            'content' => array($this, 'block_content'),
            'initScripts' => array($this, 'block_initScripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "form/layout.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "form/layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">

<head>
    <meta charset=\"UTF-8\">
    <title>";
        // line 6
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new Twig_Error_Runtime('Variable "data" does not exist.', 6, $this->source); })()), "title", array()), "html", null, true);
        echo "</title>
    <link rel=\"stylesheet\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/public/ccount/css/register.css"), "html", null, true);
        echo "\">
    ";
        // line 9
        echo "    ";
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "WEB", array(), "any", false, true), "website_style_form1", array(), "any", true, true) && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new Twig_Error_Runtime('Variable "data" does not exist.', 9, $this->source); })()), "WEB", array()), "website_style_form1", array()) != array()))) {
            // line 10
            echo "        <link id='style' rel=\"stylesheet\"  type=\"text/css\"  href=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new Twig_Error_Runtime('Variable "data" does not exist.', 10, $this->source); })()), "WEB", array()), "website_style_form1", array()), "html", null, true);
            echo "\">
    ";
        }
        // line 12
        echo "
</head>
<body>
";
        // line 15
        $this->displayBlock('content', $context, $blocks);
        // line 17
        $this->displayBlock('initScripts', $context, $blocks);
        // line 21
        echo "<script>
    \$(function () {
        var url = window.location.pathname;
        var link=\$(\"#style\").attr(\"href\");
        if (url==\"/form/register_real\" || url==\"/form/register_agent_q\" || url==\"/form/register_agent\"){

            if (link==\"/plugins/pluginstyle/alsa.css\"){
            \$('body').css(\"background-image\", \"url(../../../../public/ccount/images/126.jpg)\");
            \$('body').css(\"background-repeat\", \"no-repeat\");
            \$('body>form').css('margin', '120px auto');
            }
        }
    })
</script>
</body>
</html>


";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 15
    public function block_content($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 17
    public function block_initScripts($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "initScripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "initScripts"));

        // line 18
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/public/ccount/js/jquery-1.11.1.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/js/form/form.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "form/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  123 => 19,  118 => 18,  109 => 17,  92 => 15,  64 => 21,  62 => 17,  60 => 15,  55 => 12,  49 => 10,  46 => 9,  42 => 7,  38 => 6,  31 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html lang=\"en\">

<head>
    <meta charset=\"UTF-8\">
    <title>{{ data.title }}</title>
    <link rel=\"stylesheet\" href=\"{{ asset('/public/ccount/css/register.css') }}\">
    {#表单1#}
    {% if data.WEB.website_style_form1 is defined  and data.WEB.website_style_form1 !=[] %}
        <link id='style' rel=\"stylesheet\"  type=\"text/css\"  href=\"{{ data.WEB.website_style_form1}}\">
    {% endif %}

</head>
<body>
{% block content %}
{% endblock %}
{% block initScripts %}
    <script src=\"{{ asset(\"/public/ccount/js/jquery-1.11.1.min.js\") }}\"></script>
    <script src=\"{{ asset(\"/js/form/form.js\") }}\"></script>
{% endblock %}
<script>
    \$(function () {
        var url = window.location.pathname;
        var link=\$(\"#style\").attr(\"href\");
        if (url==\"/form/register_real\" || url==\"/form/register_agent_q\" || url==\"/form/register_agent\"){

            if (link==\"/plugins/pluginstyle/alsa.css\"){
            \$('body').css(\"background-image\", \"url(../../../../public/ccount/images/126.jpg)\");
            \$('body').css(\"background-repeat\", \"no-repeat\");
            \$('body>form').css('margin', '120px auto');
            }
        }
    })
</script>
</body>
</html>


", "form/layout.html.twig", "F:\\beneforex\\mt-beneforex\\mt-parent\\mt-account\\app\\Resources\\views\\form\\layout.html.twig");
    }
}
