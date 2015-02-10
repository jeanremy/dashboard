<?php

/* FlydDashboardBundle:Need:show.html.twig */
class __TwigTemplate_069468f3b03316e2f680615f975ff5fd6910c5856d8521e35e49b9756f1846fe extends Twig_Template
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
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "title", array()), "html", null, true);
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
        echo $this->env->getExtension('routing')->getPath("client_list");
        echo "\">Clients</a></span>
        <span class=\"prev\"><a href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("client_show", array("id" => $this->getAttribute($this->getAttribute($this->getContext($context, "entity"), "client", array()), "id", array()))), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "client", array()), "html", null, true);
        echo "</a></span>
        ";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "title", array()), "html", null, true);
        echo "
    </p>
";
    }

    // line 15
    public function block_body($context, array $blocks = array())
    {
        // line 16
        echo "
    <div class=\"title__container\">
        <a href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("need_delete", array("id" => $this->getAttribute($this->getContext($context, "entity"), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn--delete\">Delete</a>
        <a href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("need_edit", array("id" => $this->getAttribute($this->getContext($context, "entity"), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn--edit\">Edit</a>
        <h1 class=\"lvl1\">";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "title", array()), "html", null, true);
        echo "</h1>
    </div>
    
    <div class=\"row\">
        <div class=\"col-sm-8\">
            <div class=\"bloc bloc--general bloc-inline-edition\">
                <h2 class=\"bloc__title\">Informations générales</h2>

                <div class=\"form-group\">
                    
                    <label class=\"control-label\">Date de début</label>

                    <div class=\"data\">
                        ";
        // line 33
        echo twig_escape_filter($this->env, twig_localized_date_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "startDate", array()), "full", "none", "fr"), "html", null, true);
        echo "
                    </div>

                </div>


                <div class=\"form-group\">
                    
                    <label class=\"control-label\">Deadline</label>

                    <div class=\"data\">
                        ";
        // line 44
        if ($this->getAttribute($this->getContext($context, "entity"), "deadline", array())) {
            // line 45
            echo "                            ";
            echo twig_escape_filter($this->env, twig_localized_date_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "deadline", array()), "full", "none", "fr"), "html", null, true);
            echo "
                        ";
        } else {
            // line 47
            echo "                            Aucun(e)
                        ";
        }
        // line 49
        echo "                    </div>

                </div>


                <div class=\"form-group\">
                    
                    <label class=\"control-label\">Date de fin</label>

                    <div class=\"data\">
                        ";
        // line 59
        if ($this->getAttribute($this->getContext($context, "entity"), "endDate", array())) {
            // line 60
            echo "                            ";
            echo twig_escape_filter($this->env, twig_localized_date_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "endDate", array()), "full", "none", "fr"), "html", null, true);
            echo "
                        ";
        } else {
            // line 62
            echo "                            Aucun(e)
                        ";
        }
        // line 64
        echo "                    </div>

                </div>
                
                <div class=\"form-group\">
                    
                    <label class=\"control-label\">Description</label>

                    <div class=\"data\">
                        ";
        // line 73
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "description", array()), "html", null, true);
        echo "
                    </div>

                </div>
            </div>
        </div>

        <!-- Projects -->
        <div class=\"col-sm-4\">
            <div class=\"bloc\">
                <h2 class=\"bloc__title\">Projets</h2>
                <p>
                    <ul class=\"need__projects\">
                ";
        // line 86
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getContext($context, "entity"), "projects", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["project"]) {
            // line 87
            echo "                    <li>
                        <a href=\"";
            // line 88
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("project_show", array("id" => $this->getAttribute($context["project"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["project"], "title", array()), "html", null, true);
            echo "</a>
                    </li>       
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['project'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 91
        echo "                </ul>
                </p>
                <a href=\"";
        // line 93
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("project_add", array("id" => $this->getAttribute($this->getContext($context, "entity"), "id", array()))), "html", null, true);
        echo "\" class=\"pull-right btn--save--reverse\">Ajouter un projet</a>
            </div>
        </div>
    </div>


";
    }

    public function getTemplateName()
    {
        return "FlydDashboardBundle:Need:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  201 => 93,  197 => 91,  186 => 88,  183 => 87,  179 => 86,  163 => 73,  152 => 64,  148 => 62,  142 => 60,  140 => 59,  128 => 49,  124 => 47,  118 => 45,  116 => 44,  102 => 33,  86 => 20,  82 => 19,  78 => 18,  74 => 16,  71 => 15,  64 => 11,  58 => 10,  54 => 9,  51 => 8,  48 => 7,  41 => 4,  38 => 3,  11 => 1,);
    }
}
