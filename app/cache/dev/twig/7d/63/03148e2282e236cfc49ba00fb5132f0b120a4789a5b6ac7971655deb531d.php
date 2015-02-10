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
            'top' => array($this, 'block_top'),
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

\t\t";
        // line 20
        $this->env->loadTemplate("FlydDashboardBundle::flash.html.twig")->display($context);
        // line 21
        echo "\t\t<!-- Top Bar -->
\t\t<header class=\"header\">\t\t\t
\t\t\t<div class=\"breadcrumb\">
\t\t\t\t";
        // line 24
        $this->displayBlock('top', $context, $blocks);
        // line 27
        echo "\t\t\t</div>
\t\t</header>

\t\t<div class=\"content\">

\t\t\t<div class=\"container\">
\t\t\t\t";
        // line 33
        $this->displayBlock('body', $context, $blocks);
        // line 36
        echo "\t\t\t</div>

\t\t</div>
\t\t
\t</div>
\t

\t";
        // line 43
        $this->displayBlock('basejs', $context, $blocks);
        // line 47
        echo "  \t";
        $this->displayBlock('js', $context, $blocks);
        // line 49
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
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/main.min.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />
  \t";
    }

    // line 24
    public function block_top($context, array $blocks = array())
    {
        // line 25
        echo "
\t\t\t\t";
    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        // line 34
        echo "
\t\t\t  \t";
    }

    // line 43
    public function block_basejs($context, array $blocks = array())
    {
        // line 44
        echo "   \t \t<script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/vendor/jquery/dist/jquery.min.js"), "html", null, true);
        echo "\"></script>
   \t \t<script type=\"text/javascript\" src=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/main.js"), "html", null, true);
        echo "\"></script>
  \t";
    }

    // line 47
    public function block_js($context, array $blocks = array())
    {
        // line 48
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
        return array (  141 => 48,  138 => 47,  132 => 45,  127 => 44,  124 => 43,  119 => 34,  116 => 33,  111 => 25,  108 => 24,  101 => 8,  98 => 7,  92 => 5,  86 => 49,  83 => 47,  81 => 43,  72 => 36,  70 => 33,  62 => 27,  60 => 24,  55 => 21,  53 => 20,  47 => 16,  45 => 15,  38 => 10,  36 => 7,  33 => 6,  31 => 5,  25 => 1,);
    }
}
