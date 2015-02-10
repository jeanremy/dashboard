<?php

/* FlydDashboardBundle::top.html.twig */
class __TwigTemplate_3282cbceef51c6463872a464acd95172f2ce93955edd795dd6a868bf9b12afd6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'top' => array($this, 'block_top'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        echo "
<header class=\"header\">
\t<div class=\"breadcrumb\">
\t\t";
        // line 5
        $this->displayBlock('top', $context, $blocks);
        // line 9
        echo "\t</div>
</header>";
    }

    // line 5
    public function block_top($context, array $blocks = array())
    {
        // line 6
        echo "

\t\t";
    }

    public function getTemplateName()
    {
        return "FlydDashboardBundle::top.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  35 => 6,  32 => 5,  27 => 9,  25 => 5,  20 => 2,);
    }
}
