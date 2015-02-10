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
        echo twig_escape_filter($this->env, $this->getAttribute($_entity_, "username", array()), "html", null, true);
        echo "</title>
";
    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        // line 8
        echo "
    <div class=\"title__container\">
        ";
        // line 10
        if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
        if (isset($context["entity"])) { $_entity_ = $context["entity"]; } else { $_entity_ = null; }
        if (($this->getAttribute($this->getAttribute($_app_, "user", array()), "id", array()) == $this->getAttribute($_entity_, "id", array()))) {
            // line 11
            echo "            <a href=\"";
            if (isset($context["entity"])) { $_entity_ = $context["entity"]; } else { $_entity_ = null; }
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("user_delete", array("id" => $this->getAttribute($_entity_, "id", array()))), "html", null, true);
            echo "\" class=\"btn btn--delete\">Supprimer</a>
            <a href=\"";
            // line 12
            if (isset($context["entity"])) { $_entity_ = $context["entity"]; } else { $_entity_ = null; }
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("user_edit", array("id" => $this->getAttribute($_entity_, "id", array()))), "html", null, true);
            echo "\" class=\"btn btn--edit\">Edit</a>
        ";
        }
        // line 14
        echo "        ";
        if (isset($context["entity"])) { $_entity_ = $context["entity"]; } else { $_entity_ = null; }
        if ($this->getAttribute($_entity_, "image", array())) {
            // line 15
            echo "            <img src=\"";
            if (isset($context["entity"])) { $_entity_ = $context["entity"]; } else { $_entity_ = null; }
            echo twig_escape_filter($this->env, $this->env->getExtension('imagine')->applyFilter($this->getAttribute($this->getAttribute($_entity_, "image", array()), "webPath", array()), "miniature"), "html", null, true);
            echo "\" class=\"profil__pic\" />
        ";
        }
        // line 17
        echo "        <h1 class=\"lvl1\">";
        if (isset($context["entity"])) { $_entity_ = $context["entity"]; } else { $_entity_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_entity_, "username", array()), "html", null, true);
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
        // line 32
        if (isset($context["entity"])) { $_entity_ = $context["entity"]; } else { $_entity_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_entity_, "job", array()), "html", null, true);
        echo "
                    </div>

                </div>

                <div class=\"form-group\">
                    
                    <label class=\"control-label\">Email</label>

                    <div class=\"data\">
                        <p>";
        // line 42
        if (isset($context["entity"])) { $_entity_ = $context["entity"]; } else { $_entity_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_entity_, "email", array()), "html", null, true);
        echo "</p>
                    </div>
                    
                </div>


                <div class=\"form-group\">
                    <label class=\"control-label\">test projet</label>
                    <div class=\"data\">
                        ";
        // line 51
        if (isset($context["entity"])) { $_entity_ = $context["entity"]; } else { $_entity_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($_entity_, "projects", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["project"]) {
            // line 52
            echo "                            ";
            if (isset($context["project"])) { $_project_ = $context["project"]; } else { $_project_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_project_, "title", array()), "html", null, true);
            echo "
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['project'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 54
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
        return array (  144 => 54,  134 => 52,  129 => 51,  116 => 42,  102 => 32,  82 => 17,  75 => 15,  71 => 14,  65 => 12,  59 => 11,  55 => 10,  51 => 8,  48 => 7,  40 => 4,  37 => 3,  11 => 1,);
    }
}
