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
        if (isset($context["entity"])) { $_entity_ = $context["entity"]; } else { $_entity_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_entity_, "client", array()), "html", null, true);
        echo " >  ";
        if (isset($context["entity"])) { $_entity_ = $context["entity"]; } else { $_entity_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_entity_, "title", array()), "html", null, true);
        echo "</title>
";
    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        // line 8
        echo "
    <div class=\"title__container\">
        <p class=\"breadcrumb\"><a href=\"";
        // line 10
        if (isset($context["entity"])) { $_entity_ = $context["entity"]; } else { $_entity_ = null; }
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("client_show", array("id" => $this->getAttribute($this->getAttribute($_entity_, "client", array()), "id", array()))), "html", null, true);
        echo "\">";
        if (isset($context["entity"])) { $_entity_ = $context["entity"]; } else { $_entity_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_entity_, "client", array()), "html", null, true);
        echo "</a></p>
        <a href=\"";
        // line 11
        if (isset($context["entity"])) { $_entity_ = $context["entity"]; } else { $_entity_ = null; }
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("need_delete", array("id" => $this->getAttribute($_entity_, "id", array()))), "html", null, true);
        echo "\" class=\"btn btn--delete\">Delete</a>
        <a href=\"";
        // line 12
        if (isset($context["entity"])) { $_entity_ = $context["entity"]; } else { $_entity_ = null; }
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("need_edit", array("id" => $this->getAttribute($_entity_, "id", array()))), "html", null, true);
        echo "\" class=\"btn btn--edit\">Edit</a>
        <h1 class=\"lvl1\">";
        // line 13
        if (isset($context["entity"])) { $_entity_ = $context["entity"]; } else { $_entity_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_entity_, "title", array()), "html", null, true);
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
        // line 26
        if (isset($context["entity"])) { $_entity_ = $context["entity"]; } else { $_entity_ = null; }
        echo twig_escape_filter($this->env, twig_localized_date_filter($this->env, $this->getAttribute($_entity_, "startDate", array()), "full", "none", "fr"), "html", null, true);
        echo "
                    </div>

                </div>


                <div class=\"form-group\">
                    
                    <label class=\"control-label\">Deadline</label>

                    <div class=\"data\">
                        ";
        // line 37
        if (isset($context["entity"])) { $_entity_ = $context["entity"]; } else { $_entity_ = null; }
        if ($this->getAttribute($_entity_, "deadline", array())) {
            // line 38
            echo "                            ";
            if (isset($context["entity"])) { $_entity_ = $context["entity"]; } else { $_entity_ = null; }
            echo twig_escape_filter($this->env, twig_localized_date_filter($this->env, $this->getAttribute($_entity_, "deadline", array()), "full", "none", "fr"), "html", null, true);
            echo "
                        ";
        } else {
            // line 40
            echo "                            Aucun(e)
                        ";
        }
        // line 42
        echo "                    </div>

                </div>


                <div class=\"form-group\">
                    
                    <label class=\"control-label\">Date de fin</label>

                    <div class=\"data\">
                        ";
        // line 52
        if (isset($context["entity"])) { $_entity_ = $context["entity"]; } else { $_entity_ = null; }
        if ($this->getAttribute($_entity_, "endDate", array())) {
            // line 53
            echo "                            ";
            if (isset($context["entity"])) { $_entity_ = $context["entity"]; } else { $_entity_ = null; }
            echo twig_escape_filter($this->env, twig_localized_date_filter($this->env, $this->getAttribute($_entity_, "endDate", array()), "full", "none", "fr"), "html", null, true);
            echo "
                        ";
        } else {
            // line 55
            echo "                            Aucun(e)
                        ";
        }
        // line 57
        echo "                    </div>

                </div>
                
                <div class=\"form-group\">
                    
                    <label class=\"control-label\">Description</label>

                    <div class=\"data\">
                        ";
        // line 66
        if (isset($context["entity"])) { $_entity_ = $context["entity"]; } else { $_entity_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_entity_, "description", array()), "html", null, true);
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
        // line 79
        if (isset($context["entity"])) { $_entity_ = $context["entity"]; } else { $_entity_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($_entity_, "projects", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["project"]) {
            // line 80
            echo "                    <li>
                        <a href=\"";
            // line 81
            if (isset($context["project"])) { $_project_ = $context["project"]; } else { $_project_ = null; }
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("project_show", array("id" => $this->getAttribute($_project_, "id", array()))), "html", null, true);
            echo "\">";
            if (isset($context["project"])) { $_project_ = $context["project"]; } else { $_project_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_project_, "title", array()), "html", null, true);
            echo "</a>
                    </li>       
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['project'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 84
        echo "                </ul>
                </p>
                <a href=\"";
        // line 86
        if (isset($context["entity"])) { $_entity_ = $context["entity"]; } else { $_entity_ = null; }
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("project_add", array("id" => $this->getAttribute($_entity_, "id", array()))), "html", null, true);
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
        return array (  201 => 86,  197 => 84,  184 => 81,  181 => 80,  176 => 79,  159 => 66,  148 => 57,  144 => 55,  137 => 53,  134 => 52,  122 => 42,  118 => 40,  111 => 38,  108 => 37,  93 => 26,  76 => 13,  71 => 12,  66 => 11,  58 => 10,  54 => 8,  51 => 7,  40 => 4,  37 => 3,  11 => 1,);
    }
}
