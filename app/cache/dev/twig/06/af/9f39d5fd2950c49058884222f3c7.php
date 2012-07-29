<?php

/* WebProfilerBundle:Profiler:toolbar_js.html.twig */
class __TwigTemplate_06af9f39d5fd2950c49058884222f3c7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<div id=\"sfwdt";
        echo twig_escape_filter($this->env, $this->getContext($context, "token"), "html", null, true);
        echo "\" style=\"display: none\"></div>
<script type=\"text/javascript\">/*<![CDATA[*/
    (function () {
        var wdt, xhr;
        wdt = document.getElementById('sfwdt";
        // line 5
        echo twig_escape_filter($this->env, $this->getContext($context, "token"), "html", null, true);
        echo "');
        if (window.XMLHttpRequest) {
            xhr = new XMLHttpRequest();
        } else {
            xhr = new ActiveXObject('Microsoft.XMLHTTP');
        }
        xhr.open('GET', '";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_wdt", array("token" => $this->getContext($context, "token"))), "html", null, true);
        echo "', true);
        xhr.setRequestHeader('X-Requested-With', 'XMLHttpRequest');
        xhr.onreadystatechange = function(state) {
            if (4 === xhr.readyState && 200 === xhr.status && -1 !== xhr.responseText.indexOf('sf-toolbarreset')) {
                wdt.innerHTML = xhr.responseText;
                wdt.style.display = 'block';
            }
        };
        xhr.send('');
    })();
/*]]>*/</script>
";
    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_js.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 20,  72 => 16,  64 => 15,  55 => 14,  53 => 13,  42 => 10,  34 => 11,  23 => 4,  104 => 24,  97 => 22,  95 => 21,  88 => 19,  78 => 17,  71 => 14,  67 => 12,  49 => 12,  40 => 7,  38 => 6,  31 => 4,  25 => 5,  22 => 3,  20 => 2,  224 => 96,  215 => 90,  211 => 88,  204 => 84,  200 => 83,  193 => 79,  190 => 78,  188 => 77,  185 => 76,  179 => 72,  177 => 71,  171 => 67,  162 => 63,  156 => 60,  153 => 59,  146 => 55,  131 => 48,  129 => 47,  120 => 45,  117 => 44,  103 => 36,  99 => 34,  74 => 27,  70 => 26,  62 => 24,  59 => 23,  47 => 19,  39 => 9,  17 => 1,  86 => 6,  79 => 40,  57 => 9,  46 => 14,  37 => 8,  33 => 7,  24 => 3,  19 => 2,  245 => 112,  240 => 105,  237 => 104,  232 => 94,  227 => 76,  222 => 69,  214 => 43,  203 => 59,  199 => 58,  195 => 80,  180 => 44,  178 => 43,  168 => 35,  165 => 34,  161 => 23,  158 => 61,  152 => 5,  142 => 54,  137 => 51,  135 => 50,  128 => 107,  126 => 46,  115 => 95,  113 => 43,  94 => 31,  92 => 20,  84 => 70,  82 => 19,  77 => 28,  75 => 16,  68 => 30,  60 => 24,  58 => 22,  54 => 21,  32 => 11,  29 => 5,  26 => 1,  44 => 11,  41 => 7,  30 => 4,  27 => 3,);
    }
}
