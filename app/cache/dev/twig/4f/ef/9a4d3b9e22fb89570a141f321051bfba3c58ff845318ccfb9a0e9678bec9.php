<?php

/* FlydDashboardBundle:Supplier:index.html.twig */
class __TwigTemplate_4fef9a4d3b9e22fb89570a141f321051bfba3c58ff845318ccfb9a0e9678bec9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        try {
            $this->parent = $this->env->loadTemplate("FlydDashboardBundle::layout.html.twig");
        } catch (Twig_Error_Loader $e) {
            $e->setTemplateFile($this->getTemplateName());
            $e->setTemplateLine(1);

            throw $e;
        }

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'top' => array($this, 'block_top'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FlydDashboardBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        // line 4
        echo "    <title>Dashboard</title>
";
    }

    // line 7
    public function block_top($context, array $blocks = array())
    {
        // line 8
        echo "    <p>Fournisseurs</p>
";
    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        // line 12
        echo "   <div class=\"title__container\">
        <a href=\"";
        // line 13
        echo $this->env->getExtension('routing')->getPath("supplier_add");
        echo "\" class=\"btn btn--edit\">Nouveau fournisseur</a>
        <h1 class=\"lvl1\">Fournisseurs</h1>
    </div>

    <div class=\"row\">
        ";
        // line 18
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "entities"));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 19
            echo "        <div class=\"col-sm-12\">
            <div class=\"bloc bloc--general bloc--search\">
                <div class=\"row\">
                    <div class=\"col-sm-12\">
                        <h2 class=\"bloc__title\">
                            <a href=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("supplier_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "name", array()), "html", null, true);
            echo "</a>
                        </h2>
                    </div>
                </div>
            </div>
        </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "    </div>
";
    }

    public function getTemplateName()
    {
        return "FlydDashboardBundle:Supplier:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 31,  79 => 24,  72 => 19,  68 => 18,  60 => 13,  57 => 12,  54 => 11,  49 => 8,  46 => 7,  41 => 4,  38 => 3,  11 => 1,);
    }
}
