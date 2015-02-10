<?php

/* FlydDashboardBundle::layout.html.twig */
class __TwigTemplate_7d6303148e2282e236cfc49ba00fb5132f0b120a4789a5b6ac7971655deb531d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'basejs' => array($this, 'block_basejs'),
            'js' => array($this, 'block_js'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"fr\">
<head>
\t<meta charset=\"UTF-8\">
\t";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        // line 6
        echo "
  \t";
        // line 7
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 10
        echo "
</head>
<body>

\t<!-- Aside -->
\t";
        // line 15
        $this->env->loadTemplate("FlydDashboardBundle::menu.html.twig")->display($context);
        // line 16
        echo "
\t<!-- Main -->
\t<div class=\"main\">

\t\t<!-- Top Bar -->
\t\t";
        // line 21
        $this->env->loadTemplate("FlydDashboardBundle::top.html.twig")->display($context);
        // line 22
        echo "
\t\t<div class=\"content\">

\t\t\t<div class=\"container\">
\t\t\t\t";
        // line 26
        $this->env->loadTemplate("FlydDashboardBundle::flash.html.twig")->display($context);
        // line 27
        echo "\t\t\t\t";
        $this->displayBlock('body', $context, $blocks);
        // line 30
        echo "\t\t\t</div>

\t\t</div>
\t\t
\t</div>
\t

\t";
        // line 37
        $this->displayBlock('basejs', $context, $blocks);
        // line 41
        echo "  \t";
        $this->displayBlock('js', $context, $blocks);
        // line 43
        echo "</body>
</html>
";
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo "<title>Dashboard</title>";
    }

    // line 7
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 8
        echo "   \t \t<link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/flyddashboard/css/main.min.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />
  \t";
    }

    // line 27
    public function block_body($context, array $blocks = array())
    {
        // line 28
        echo "
\t\t\t  \t";
    }

    // line 37
    public function block_basejs($context, array $blocks = array())
    {
        // line 38
        echo "   \t \t<script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/flyddashboard/js/vendor/jquery/dist/jquery.min.js"), "html", null, true);
        echo "\"></script>
   \t \t<script type=\"text/javascript\" src=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/flyddashboard/js/main.js"), "html", null, true);
        echo "\"></script>
  \t";
    }

    // line 41
    public function block_js($context, array $blocks = array())
    {
        // line 42
        echo "  \t";
    }

    public function getTemplateName()
    {
        return "FlydDashboardBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  127 => 42,  124 => 41,  118 => 39,  113 => 38,  110 => 37,  105 => 28,  102 => 27,  95 => 8,  92 => 7,  86 => 5,  80 => 43,  77 => 41,  75 => 37,  66 => 30,  63 => 27,  61 => 26,  55 => 22,  53 => 21,  46 => 16,  44 => 15,  37 => 10,  35 => 7,  32 => 6,  30 => 5,  24 => 1,);
    }
}
