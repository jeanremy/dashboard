<?php

/* FlydDashboardBundle:Supplier:mini.html.twig */
class __TwigTemplate_744fe507a283ceacfd112de8555a0d86da4703430d519339a3015a1eb8d9de7b extends Twig_Template
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
        echo "<p class=\"supplier--mini col-sm-12\">
\t<a href=\"";
        // line 2
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("supplier_show", array("id" => $this->getAttribute($this->getContext($context, "supplier"), "id", array()))), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "supplier"), "name", array()), "html", null, true);
        echo " - <span>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "supplier"), "job", array()), "html", null, true);
        echo "</span></a> <a class=\"line--remove remove\" data-id=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "supplier"), "id", array()), "html", null, true);
        echo "\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("project_ajax_remove_supplier", array("id" => $this->getAttribute($this->getContext($context, "entity"), "id", array()))), "html", null, true);
        echo "\">Retirer</a>
</p>";
    }

    public function getTemplateName()
    {
        return "FlydDashboardBundle:Supplier:mini.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 2,  19 => 1,);
    }
}
