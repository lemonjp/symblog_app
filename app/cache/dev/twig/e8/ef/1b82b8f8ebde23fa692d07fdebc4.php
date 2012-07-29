<?php

/* BloggerBlogBundle:Page:index.html.twig */
class __TwigTemplate_e8ef1b82b8f8ebde23fa692d07fdebc4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("BloggerBlogBundle::layout.html.twig");

        $this->blocks = array(
            'herounit' => array($this, 'block_herounit'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "BloggerBlogBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_herounit($context, array $blocks = array())
    {
        // line 5
        echo "  <div class=\"row-fluid\">
      <div class=\"hero-unit\">
        <h1>Hello, world!</h1>
        <p>This is a template for a simple marketing or informational website. It includes a large callout called the hero unit and three supporting pieces of content. Use it as a starting point to create something more unique.</p>
        <p><a class=\"btn btn-primary btn-large\">Learn more &raquo;</a></p>
      </div>
  </div><!--/row-->
";
    }

    // line 14
    public function block_body($context, array $blocks = array())
    {
        // line 15
        echo "    Blog homepage
";
    }

    public function getTemplateName()
    {
        return "BloggerBlogBundle:Page:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  44 => 15,  41 => 14,  30 => 5,  27 => 4,);
    }
}
