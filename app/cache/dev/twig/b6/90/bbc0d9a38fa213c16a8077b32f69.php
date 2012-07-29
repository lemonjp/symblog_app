<?php

/* BloggerBlogBundle:Form:fields.html.twig */
class __TwigTemplate_b690bbc0d9a38fa213c16a8077b32f69 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("form_div_layout.html.twig");

        $this->blocks = array(
            'field_row' => array($this, 'block_field_row'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "form_div_layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_field_row($context, array $blocks = array())
    {
        // line 4
        ob_start();
        // line 5
        echo "    ";
        $context["field_row_classes"] = array(0 => "control-group");
        // line 6
        echo "    ";
        if ((twig_length_filter($this->env, $this->getContext($context, "errors")) > 0)) {
            // line 7
            echo "        ";
            $context["field_row_classes"] = twig_array_merge($this->getContext($context, "field_row_classes"), array(0 => "error"));
            echo "    
    ";
        }
        // line 9
        echo "
    <div class=\"";
        // line 10
        echo twig_escape_filter($this->env, twig_join_filter($this->getContext($context, "field_row_classes"), " "), "html", null, true);
        echo "\">
        ";
        // line 11
        echo $this->env->getExtension('form')->renderLabel($this->getContext($context, "form"), $this->getContext($context, "label"), array("attr" => array("class" => "control-label")));
        echo "
        <div class=\"controls\">
            ";
        // line 13
        echo $this->env->getExtension('form')->renderWidget($this->getContext($context, "form"), array("attr" => ((array_key_exists("attr", $context)) ? (_twig_default_filter($this->getContext($context, "attr"), array())) : (array()))));
        echo "
            ";
        // line 14
        echo $this->env->getExtension('form')->renderErrors($this->getContext($context, "form"));
        echo "
            ";
        // line 15
        if (array_key_exists("help", $context)) {
            // line 16
            echo "                <p class=\"help-block\">";
            echo twig_escape_filter($this->env, $this->getContext($context, "help"), "html", null, true);
            echo "</p>
            ";
        }
        // line 18
        echo "        </div>
    </div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    public function getTemplateName()
    {
        return "BloggerBlogBundle:Form:fields.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 18,  65 => 16,  63 => 15,  50 => 11,  43 => 9,  37 => 7,  34 => 6,  31 => 5,  26 => 3,  1000 => 291,  995 => 290,  993 => 289,  990 => 288,  974 => 284,  952 => 283,  950 => 282,  947 => 281,  935 => 276,  931 => 275,  926 => 274,  924 => 273,  921 => 272,  912 => 266,  906 => 264,  903 => 263,  898 => 262,  896 => 261,  893 => 260,  886 => 255,  877 => 253,  873 => 252,  870 => 251,  867 => 250,  865 => 249,  862 => 248,  854 => 244,  852 => 243,  849 => 242,  842 => 237,  839 => 236,  831 => 231,  827 => 230,  823 => 229,  820 => 228,  818 => 227,  815 => 226,  807 => 222,  805 => 221,  802 => 220,  794 => 214,  792 => 213,  789 => 212,  781 => 208,  778 => 207,  776 => 206,  773 => 205,  752 => 201,  749 => 200,  746 => 199,  743 => 198,  741 => 197,  738 => 196,  730 => 190,  727 => 189,  725 => 188,  722 => 187,  715 => 184,  712 => 183,  709 => 182,  701 => 178,  698 => 177,  696 => 176,  693 => 175,  677 => 171,  674 => 170,  672 => 169,  669 => 168,  661 => 164,  658 => 163,  656 => 162,  653 => 161,  645 => 157,  642 => 156,  640 => 155,  637 => 154,  629 => 150,  626 => 149,  624 => 148,  621 => 147,  613 => 143,  611 => 142,  608 => 141,  600 => 137,  597 => 136,  595 => 135,  592 => 134,  584 => 130,  581 => 129,  579 => 128,  577 => 127,  574 => 126,  567 => 121,  559 => 120,  554 => 119,  548 => 117,  545 => 116,  543 => 115,  540 => 114,  532 => 108,  530 => 104,  525 => 103,  519 => 101,  516 => 100,  514 => 99,  511 => 98,  502 => 92,  498 => 91,  494 => 90,  490 => 89,  485 => 88,  479 => 86,  476 => 85,  474 => 84,  471 => 83,  455 => 79,  453 => 78,  450 => 77,  434 => 73,  432 => 72,  429 => 71,  419 => 65,  416 => 64,  413 => 63,  407 => 61,  405 => 60,  400 => 59,  397 => 58,  394 => 57,  388 => 55,  386 => 54,  378 => 53,  374 => 51,  366 => 49,  361 => 48,  357 => 47,  352 => 46,  349 => 45,  347 => 44,  344 => 43,  335 => 39,  323 => 37,  319 => 35,  304 => 33,  300 => 32,  295 => 31,  292 => 30,  287 => 29,  285 => 28,  282 => 27,  272 => 23,  270 => 22,  267 => 21,  259 => 17,  256 => 16,  253 => 15,  250 => 14,  248 => 13,  245 => 12,  237 => 7,  233 => 6,  228 => 5,  226 => 4,  223 => 3,  219 => 288,  216 => 287,  214 => 281,  211 => 280,  209 => 272,  206 => 271,  203 => 269,  201 => 260,  198 => 259,  196 => 248,  193 => 247,  191 => 242,  188 => 241,  185 => 239,  183 => 236,  180 => 235,  178 => 226,  175 => 225,  173 => 220,  170 => 219,  167 => 217,  165 => 212,  162 => 211,  160 => 205,  157 => 204,  155 => 196,  152 => 195,  149 => 193,  147 => 187,  144 => 186,  142 => 182,  139 => 181,  137 => 175,  134 => 174,  132 => 168,  129 => 167,  127 => 161,  124 => 160,  122 => 154,  119 => 153,  117 => 147,  114 => 146,  112 => 141,  109 => 140,  107 => 134,  104 => 133,  102 => 126,  99 => 125,  97 => 114,  94 => 113,  92 => 98,  87 => 83,  82 => 77,  79 => 76,  77 => 71,  74 => 70,  69 => 42,  64 => 26,  62 => 21,  59 => 14,  57 => 12,  54 => 11,  52 => 3,  89 => 97,  84 => 82,  80 => 26,  76 => 25,  72 => 43,  67 => 27,  60 => 20,  55 => 13,  49 => 2,  46 => 10,  44 => 12,  38 => 8,  35 => 7,  29 => 4,  24 => 3,);
    }
}
