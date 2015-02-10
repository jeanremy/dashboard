<?php

/* FlydDashboardBundle:Supplier:select.html.twig */
class __TwigTemplate_8f3fda9eeb4cf2e38df69a569c94764639c455be6c83e94ebcdb648b1dc9d568 extends Twig_Template
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
        echo "<div class=\"row\" id=\"newsupplier\">
\t<form  id=\"add_supplier\" action=\"";
        // line 2
        if (isset($context["entity"])) { $_entity_ = $context["entity"]; } else { $_entity_ = null; }
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("project_ajax_add_supplier", array("id" => $this->getAttribute($_entity_, "id", array()))), "html", null, true);
        echo "\" method=\"post\">
\t\t<div class=\"col-sm-12 bloc-inline-edition\">
\t\t\t<h2 class=\"bloc__title\">Ajouter un fournisseur <span>- <a href=\"";
        // line 4
        echo $this->env->getExtension('routing')->getPath("supplier_add");
        echo "\">Créer un fournisseur ?</a></span></h2>\t
\t\t\t<select name=\"supplier_id\" id=\"supplier_id\" class=\"form-control\">
\t\t\t";
        // line 6
        if (isset($context["entities"])) { $_entities_ = $context["entities"]; } else { $_entities_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($_entities_);
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 7
            echo "\t\t\t\t<option value=\"";
            if (isset($context["entity"])) { $_entity_ = $context["entity"]; } else { $_entity_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_entity_, "id", array()), "html", null, true);
            echo "\">";
            if (isset($context["entity"])) { $_entity_ = $context["entity"]; } else { $_entity_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_entity_, "name", array()), "html", null, true);
            echo " - ";
            if (isset($context["entity"])) { $_entity_ = $context["entity"]; } else { $_entity_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_entity_, "job", array()), "html", null, true);
            echo "</option>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 9
        echo "\t\t\t</select>
\t\t\t<input type=\"submit\" class=\"btn--save--reverse\" value=\"Ajouter\" />
\t\t</div>
\t</form>\t
</div>";
    }

    public function getTemplateName()
    {
        return "FlydDashboardBundle:Supplier:select.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  54 => 9,  38 => 7,  33 => 6,  28 => 4,  22 => 2,  19 => 1,);
    }
}
