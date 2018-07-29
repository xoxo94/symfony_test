<?php

/* js/lang.js.twig */
class __TwigTemplate_126c8f5499bcaf02b56982bd35272938125fcc9fe012c96a4514043b353446e8 extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "js/lang.js.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "js/lang.js.twig"));

        // line 1
        echo "var langhtml='<div style=\"cursor:pointer;\"; class=\"option english language_div ";
        if (((isset($context["lang"]) || array_key_exists("lang", $context) ? $context["lang"] : (function () { throw new Twig_Error_Runtime('Variable "lang" does not exist.', 1, $this->source); })()) == "cn")) {
            echo "simple\">简体中文";
        }
        if (((isset($context["lang"]) || array_key_exists("lang", $context) ? $context["lang"] : (function () { throw new Twig_Error_Runtime('Variable "lang" does not exist.', 1, $this->source); })()) == "hk")) {
            echo "complex\">繁体中文";
        }
        if (((isset($context["lang"]) || array_key_exists("lang", $context) ? $context["lang"] : (function () { throw new Twig_Error_Runtime('Variable "lang" does not exist.', 1, $this->source); })()) == "en")) {
            echo "english\">English";
        }
        if (((isset($context["lang"]) || array_key_exists("lang", $context) ? $context["lang"] : (function () { throw new Twig_Error_Runtime('Variable "lang" does not exist.', 1, $this->source); })()) == "kr")) {
            echo "korean\">&#54620;&#44397;&#50612;";
        }
        echo "</div>' +
    '<ul class=\"language_ul\" style=\"display: none; cursor:pointer;\">' +
    '<li alt=\"/lang/setting?lang=cn\" class=\"simple\">简体中文</li>' +
    '<li alt=\"/lang/setting?lang=hk\" class=\"complex\">繁体中文</li>' +
    '<li alt=\"/lang/setting?lang=en\" class=\"english\">English</li>' +
    '<li alt=\"/lang/setting?lang=kr\" class=\"korean\">&#54620;&#44397;&#50612;</li>' +
    '</ul>';
var onshowlang=function(){document.getElementById('pluginslang').innerHTML=langhtml;
    \$('.select .option').click(function () {
        \$(this).siblings('ul').slideToggle(\"fast\");
    });
    \$('.select li').click(function () {
        \$('.select .option').addClass(\$(this).attr('class')).removeClass(\$(this).siblings().attr('class')).html(\$(this).html());
        \$('.select ul').slideToggle(\"fast\");
        \$.ajax({url:\$(this).attr('alt'),dataType:'json',async:false,success:function(data){
            if(data.code==200){history.go(0);}else{alert(data.message);}
        }});
    });
}
if(window.attachEvent){window.attachEvent(\"onload\",onshowlang);}else{window.addEventListener(\"load\",onshowlang,true);}";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "js/lang.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var langhtml='<div style=\"cursor:pointer;\"; class=\"option english language_div {% if lang=='cn' %}simple\">简体中文{% endif %}{% if lang=='hk' %}complex\">繁体中文{% endif %}{% if lang=='en' %}english\">English{% endif %}{% if lang=='kr' %}korean\">&#54620;&#44397;&#50612;{% endif %}</div>' +
    '<ul class=\"language_ul\" style=\"display: none; cursor:pointer;\">' +
    '<li alt=\"/lang/setting?lang=cn\" class=\"simple\">简体中文</li>' +
    '<li alt=\"/lang/setting?lang=hk\" class=\"complex\">繁体中文</li>' +
    '<li alt=\"/lang/setting?lang=en\" class=\"english\">English</li>' +
    '<li alt=\"/lang/setting?lang=kr\" class=\"korean\">&#54620;&#44397;&#50612;</li>' +
    '</ul>';
var onshowlang=function(){document.getElementById('pluginslang').innerHTML=langhtml;
    \$('.select .option').click(function () {
        \$(this).siblings('ul').slideToggle(\"fast\");
    });
    \$('.select li').click(function () {
        \$('.select .option').addClass(\$(this).attr('class')).removeClass(\$(this).siblings().attr('class')).html(\$(this).html());
        \$('.select ul').slideToggle(\"fast\");
        \$.ajax({url:\$(this).attr('alt'),dataType:'json',async:false,success:function(data){
            if(data.code==200){history.go(0);}else{alert(data.message);}
        }});
    });
}
if(window.attachEvent){window.attachEvent(\"onload\",onshowlang);}else{window.addEventListener(\"load\",onshowlang,true);}", "js/lang.js.twig", "F:\\beneforex\\mt-beneforex\\mt-parent\\mt-account\\app\\Resources\\views\\js\\lang.js.twig");
    }
}
