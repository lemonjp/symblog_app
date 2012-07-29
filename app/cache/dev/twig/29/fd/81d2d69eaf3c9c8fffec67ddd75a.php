<?php

/* ::base.html.twig */
class __TwigTemplate_29fd81d2d69eaf3c9c8fffec67ddd75a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'navigation' => array($this, 'block_navigation'),
            'blog_title' => array($this, 'block_blog_title'),
            'herounit' => array($this, 'block_herounit'),
            'sidebar' => array($this, 'block_sidebar'),
            'body' => array($this, 'block_body'),
            'footer' => array($this, 'block_footer'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
  <head>
    <meta charset=\"utf-8\">
    <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo " - symblog</title>
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"\">

    <!-- Le styles -->
    <link href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/css/bootstrap.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
    <style type=\"text/css\">
      body {
        padding-top: 60px;
        padding-bottom: 40px;
      }
      .sidebar-nav {
        padding: 9px 0;
      }
    </style>
    <link href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/css/bootstrap-responsive.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
    ";
        // line 22
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 24
        echo "    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src=\"http://html5shim.googlecode.com/svn/trunk/html5.js\"></script>
    <![endif]-->

    <!-- Le fav and touch icons -->
    <link rel=\"shortcut icon\" href=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/ico/favicon.ico"), "html", null, true);
        echo "\" />
  </head>

  <body>
    ";
        // line 34
        $this->displayBlock('navigation', $context, $blocks);
        // line 66
        echo "
    <div class=\"container-fluid\">

    ";
        // line 69
        $this->displayBlock('herounit', $context, $blocks);
        // line 70
        echo "
      <div class=\"row-fluid\">
        <div class=\"span3\">
          <div class=\"well sidebar-nav\">
            <ul class=\"nav nav-list\">
              <li class=\"nav-header\">Sidebar</li>
              ";
        // line 76
        $this->displayBlock('sidebar', $context, $blocks);
        // line 77
        echo "              <li class=\"active\"><a href=\"#\">Link</a></li>
              <li><a href=\"#\">Link</a></li>
              <li><a href=\"#\">Link</a></li>
              <li><a href=\"#\">Link</a></li>
              <li class=\"nav-header\">Sidebar</li>
              <li><a href=\"#\">Link</a></li>
              <li><a href=\"#\">Link</a></li>
              <li><a href=\"#\">Link</a></li>
              <li class=\"nav-header\">Sidebar</li>
              <li><a href=\"#\">Link</a></li>
              <li><a href=\"#\">Link</a></li>
              <li><a href=\"#\">Link</a></li>
            </ul>
          </div><!--/.well -->
        </div><!--/span-->
      
        <div class=\"span9\">
          ";
        // line 94
        $this->displayBlock('body', $context, $blocks);
        // line 95
        echo "          <h2>Heading</h2>
          <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
          <p><a class=\"btn\" href=\"#\">View details &raquo;</a></p>
        </div><!--/span-->
      </div><!--/row-->

      <hr>

      <footer>
        ";
        // line 104
        $this->displayBlock('footer', $context, $blocks);
        // line 107
        echo "        <p>&copy; Company 2012</p>
      </footer>

    </div><!--/.container-->

    ";
        // line 112
        $this->displayBlock('javascripts', $context, $blocks);
        // line 113
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/js/jquery-1.7.2.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 114
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
  </body>
</html>


";
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo "symblog";
    }

    // line 22
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 23
        echo "    ";
    }

    // line 34
    public function block_navigation($context, array $blocks = array())
    {
        // line 35
        echo "    <div class=\"navbar navbar-fixed-top\">
      <div class=\"navbar-inner\">
        <div class=\"container-fluid\">
          <a class=\"btn btn-navbar\" data-toggle=\"collapse\" data-target=\".nav-collapse\">
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
          </a>
          ";
        // line 43
        $this->displayBlock('blog_title', $context, $blocks);
        // line 44
        echo "          <div class=\"btn-group pull-right\">
            <a class=\"btn dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">
              <i class=\"icon-user\"></i> Username
              <span class=\"caret\"></span>
            </a>
            <ul class=\"dropdown-menu\">
              <li><a href=\"#\">Profile</a></li>
              <li class=\"divider\"></li>
              <li><a href=\"#\">Sign Out</a></li>
            </ul>
          </div>
          <div class=\"nav-collapse\">
            <ul class=\"nav\">
              <li class=\"active\"><a href=\"";
        // line 57
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("BloggerBlogBundle_homepage"), "html", null, true);
        echo "\">Home</a></li>
              <li><a href=\"";
        // line 58
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("BloggerBlogBundle_about"), "html", null, true);
        echo "\">About</a></li>
              <li><a href=\"";
        // line 59
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("BloggerBlogBundle_contact"), "html", null, true);
        echo "\">Contact</a></li>
            </ul>
          </div><!--/.nav-collapse -->
        </div>
      </div>
    </div>
    ";
    }

    // line 43
    public function block_blog_title($context, array $blocks = array())
    {
        echo "<a class=\"brand\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("BloggerBlogBundle_homepage"), "html", null, true);
        echo "\">symblog</a>";
    }

    // line 69
    public function block_herounit($context, array $blocks = array())
    {
    }

    // line 76
    public function block_sidebar($context, array $blocks = array())
    {
    }

    // line 94
    public function block_body($context, array $blocks = array())
    {
    }

    // line 104
    public function block_footer($context, array $blocks = array())
    {
        // line 105
        echo "        Symfony2 blog tutorial - created by <a href=\"https://github.com/dsyph3r\">dsyph3r</a>
        ";
    }

    // line 112
    public function block_javascripts($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  245 => 112,  240 => 105,  237 => 104,  232 => 94,  227 => 76,  222 => 69,  214 => 43,  203 => 59,  199 => 58,  195 => 57,  180 => 44,  178 => 43,  168 => 35,  165 => 34,  161 => 23,  158 => 22,  152 => 5,  142 => 114,  137 => 113,  135 => 112,  128 => 107,  126 => 104,  115 => 95,  113 => 94,  94 => 77,  92 => 76,  84 => 70,  82 => 69,  77 => 66,  75 => 34,  68 => 30,  60 => 24,  58 => 22,  54 => 21,  32 => 5,  29 => 5,  26 => 1,  44 => 15,  41 => 11,  30 => 5,  27 => 4,);
    }
}
