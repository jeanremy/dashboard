<?php

/* FlydDashboardBundle:User:mini.html.twig */
class __TwigTemplate_d9bb4526f10ce8cf1de4a8c288cbd3db9824f760c3f7a0c4501cc1b06fe439c2 extends Twig_Template
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
        echo "<div class=\"user col-sm-6\">                        
    ";
        // line 2
        if (isset($context["user"])) { $_user_ = $context["user"]; } else { $_user_ = null; }
        if ($this->getAttribute($_user_, "image", array())) {
            // line 3
            echo "        <img src=\"";
            if (isset($context["user"])) { $_user_ = $context["user"]; } else { $_user_ = null; }
            echo twig_escape_filter($this->env, $this->env->getExtension('imagine')->applyFilter($this->getAttribute($this->getAttribute($_user_, "image", array()), "webPath", array()), "demi"), "html", null, true);
            echo "\" class=\"profil__pic\" />
    ";
        }
        // line 5
        echo "    <p class=\"user__name\"><a href=\"";
        if (isset($context["user"])) { $_user_ = $context["user"]; } else { $_user_ = null; }
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("user_show", array("id" => $this->getAttribute($_user_, "id", array()))), "html", null, true);
        echo "\">";
        if (isset($context["user"])) { $_user_ = $context["user"]; } else { $_user_ = null; }
        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute($_user_, "username", array())), "html", null, true);
        echo "</a></p>
    <p class=\"user__job\">";
        // line 6
        if (isset($context["user"])) { $_user_ = $context["user"]; } else { $_user_ = null; }
        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute($_user_, "job", array())), "html", null, true);
        echo "</p>
    <a class=\"line--remove remove\" data-id=\"";
        // line 7
        if (isset($context["user"])) { $_user_ = $context["user"]; } else { $_user_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_user_, "id", array()), "html", null, true);
        echo "\" href=\"";
        if (isset($context["entity"])) { $_entity_ = $context["entity"]; } else { $_entity_ = null; }
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("project_ajax_remove_user", array("id" => $this->getAttribute($_entity_, "id", array()))), "html", null, true);
        echo "\">Retirer</a>
</div>";
    }

    public function getTemplateName()
    {
        return "FlydDashboardBundle:User:mini.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  46 => 7,  41 => 6,  32 => 5,  25 => 3,  22 => 2,  19 => 1,);
    }
}
