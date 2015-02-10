<?php

/* FlydDashboardBundle:Supplier:delete.html.twig */
class __TwigTemplate_8be77485c3151d3daa504ad3c44e127b13d51b5561998b343031a95272430ddf extends Twig_Template
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
        echo "    <title>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "name", array()), "html", null, true);
        echo " - Supprimer </title>
";
    }

    // line 7
    public function block_top($context, array $blocks = array())
    {
        // line 8
        echo "    <p>
        <span class=\"prev\"><a href=\"";
        // line 9
        echo $this->env->getExtension('routing')->getPath("supplier_list");
        echo "\">Fournisseurs</a></span>
        <span class=\"prev\"><a href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("supplier_show", array("id" => $this->getAttribute($this->getContext($context, "entity"), "id", array()))), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "name", array()), "html", null, true);
        echo "</a></span>
        Delete
    </p>
";
    }

    // line 16
    public function block_body($context, array $blocks = array())
    {
        // line 17
        echo "
    <div class=\"title__container\">
        <h1 class=\"lvl1\">";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "name", array()), "html", null, true);
        echo "</h1>
    </div>
    



    <div class=\"row\">
        <div class=\"col-sm-12\">
            <div class=\"bloc bloc--general bloc-inline-edition edit\">
                <p>Êtes-vous sûr de vouloir effacer ";
        // line 28
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "name", array()), "html", null, true);
        echo " ?</p>
                 <form action=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("supplier_delete", array("id" => $this->getAttribute($this->getContext($context, "entity"), "id", array()))), "html", null, true);
        echo "\" method=\"post\">
                    <a href=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("supplier_show", array("id" => $this->getAttribute($this->getContext($context, "entity"), "id", array()))), "html", null, true);
        echo "\" class=\"btn--save--reverse\">
                      Retour au fournisseur
                    </a>
                    ";
        // line 34
        echo "                    <button type=\"submit\" class=\"btn--delete--reverse\">Supprimer</button>
                    ";
        // line 36
        echo "                    ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'rest');
        echo "
                  </form>
            </div>
        </div>
    </div>



\t

";
    }

    public function getTemplateName()
    {
        return "FlydDashboardBundle:Supplier:delete.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  104 => 36,  101 => 34,  95 => 30,  91 => 29,  87 => 28,  75 => 19,  71 => 17,  68 => 16,  58 => 10,  54 => 9,  51 => 8,  48 => 7,  41 => 4,  38 => 3,  11 => 1,);
    }
}
