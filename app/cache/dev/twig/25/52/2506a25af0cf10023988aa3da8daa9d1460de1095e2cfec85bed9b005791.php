<?php

/* FlydDashboardBundle:User:show.html.twig */
class __TwigTemplate_25522506a25af0cf10023988aa3da8daa9d1460de1095e2cfec85bed9b005791 extends Twig_Template
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
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "username", array()), "html", null, true);
        echo "</title>
";
    }

    // line 7
    public function block_top($context, array $blocks = array())
    {
        // line 8
        echo "    <p>
        <span class=\"prev\"><a href=\"";
        // line 9
        echo $this->env->getExtension('routing')->getPath("user_list");
        echo "\">Utilisateurs</a></span>
        ";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "username", array()), "html", null, true);
        echo "
    </p>
";
    }

    // line 14
    public function block_body($context, array $blocks = array())
    {
        // line 15
        echo "
    <div class=\"title__container\">
        ";
        // line 17
        if (($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "user", array()), "id", array()) == $this->getAttribute($this->getContext($context, "entity"), "id", array()))) {
            // line 18
            echo "            <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("user_delete", array("id" => $this->getAttribute($this->getContext($context, "entity"), "id", array()))), "html", null, true);
            echo "\" class=\"btn btn--delete\">Supprimer</a>
            <a href=\"";
            // line 19
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("user_edit", array("id" => $this->getAttribute($this->getContext($context, "entity"), "id", array()))), "html", null, true);
            echo "\" class=\"btn btn--edit\">Edit</a>
        ";
        }
        // line 21
        echo "        ";
        if ($this->getAttribute($this->getContext($context, "entity"), "image", array())) {
            // line 22
            echo "            <img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('imagine')->applyFilter($this->getAttribute($this->getAttribute($this->getContext($context, "entity"), "image", array()), "webPath", array()), "miniature"), "html", null, true);
            echo "\" class=\"profil__pic\" />
        ";
        }
        // line 24
        echo "        <h1 class=\"lvl1\">";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "username", array()), "html", null, true);
        echo "</h1>
    </div>
        


    <div class=\"row\">
        <div class=\"col-sm-12\">
            <div class=\"bloc bloc--general bloc-inline-edition\">
                <h2 class=\"bloc__title\">Informations générales</h2>

                <div class=\"form-group\">
                    
                    <label class=\"control-label\">Fonction</label>

                    <div class=\"data\">
                        ";
        // line 39
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "job", array()), "html", null, true);
        echo "
                    </div>

                </div>

                <div class=\"form-group\">
                    
                    <label class=\"control-label\">Email</label>

                    <div class=\"data\">
                        <p>";
        // line 49
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "email", array()), "html", null, true);
        echo "</p>
                    </div>
                    
                </div>


                <div class=\"form-group\">
                    <label class=\"control-label\">test projet</label>
                    <div class=\"data\">
                        ";
        // line 58
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getContext($context, "entity"), "projects", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["project"]) {
            // line 59
            echo "                            ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["project"], "title", array()), "html", null, true);
            echo "
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['project'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 61
        echo "                    </div>
                    
                </div>

            </div>
        </div>
    </div>

";
    }

    public function getTemplateName()
    {
        return "FlydDashboardBundle:User:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  150 => 61,  141 => 59,  137 => 58,  125 => 49,  112 => 39,  93 => 24,  87 => 22,  84 => 21,  79 => 19,  74 => 18,  72 => 17,  68 => 15,  65 => 14,  58 => 10,  54 => 9,  51 => 8,  48 => 7,  41 => 4,  38 => 3,  11 => 1,);
    }
}
