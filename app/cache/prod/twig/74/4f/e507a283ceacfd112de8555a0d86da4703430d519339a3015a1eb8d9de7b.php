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
        if (isset($context["supplier"])) { $_supplier_ = $context["supplier"]; } else { $_supplier_ = null; }
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("supplier_show", array("id" => $this->getAttribute($_supplier_, "id", array()))), "html", null, true);
        echo "\">";
        if (isset($context["supplier"])) { $_supplier_ = $context["supplier"]; } else { $_supplier_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_supplier_, "name", array()), "html", null, true);
        echo " - <span>";
        if (isset($context["supplier"])) { $_supplier_ = $context["supplier"]; } else { $_supplier_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_supplier_, "job", array()), "html", null, true);
        echo "</span></a> <a class=\"line--remove remove\" data-id=\"";
        if (isset($context["supplier"])) { $_supplier_ = $context["supplier"]; } else { $_supplier_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_supplier_, "id", array()), "html", null, true);
        echo "\" href=\"";
        if (isset($context["entity"])) { $_entity_ = $context["entity"]; } else { $_entity_ = null; }
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("project_ajax_remove_supplier", array("id" => $this->getAttribute($_entity_, "id", array()))), "html", null, true);
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
