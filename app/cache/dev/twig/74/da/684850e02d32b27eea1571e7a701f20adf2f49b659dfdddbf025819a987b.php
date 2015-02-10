<?php

/* FlydDashboardBundle:ProjectCanvasTask:mini.html.twig */
class __TwigTemplate_74da684850e02d32b27eea1571e7a701f20adf2f49b659dfdddbf025819a987b extends Twig_Template
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
        echo "<tr id=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "pct"), "id", array()), "html", null, true);
        echo "\" class=\"task sortable ui-sortable-handle\" data-position=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "pct"), "position", array()), "html", null, true);
        echo "\">
    <td>";
        // line 2
        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "pct"), "task", array()), "step", array())), "html", null, true);
        echo "</td>
    <td>";
        // line 3
        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "pct"), "task", array()), "name", array())), "html", null, true);
        echo "</td>
    <td><a href=\"\" class=\"line--remove\">Retirer</a></td>
</tr>";
    }

    public function getTemplateName()
    {
        return "FlydDashboardBundle:ProjectCanvasTask:mini.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 3,  26 => 2,  19 => 1,);
    }
}
