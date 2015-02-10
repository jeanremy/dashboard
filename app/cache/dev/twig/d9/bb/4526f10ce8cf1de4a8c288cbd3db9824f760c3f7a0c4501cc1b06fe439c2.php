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
        echo "<div class=\"user--mini col-sm-6\">                        
    ";
        // line 2
        if ($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "image", array())) {
            // line 3
            echo "        <img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('imagine')->applyFilter($this->getAttribute($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "image", array()), "webPath", array()), "demi"), "html", null, true);
            echo "\" class=\"profil__pic\" />
    ";
        }
        // line 5
        echo "    <p class=\"user__name\"><a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("user_show", array("id" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "id", array()))), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "html", null, true);
        echo "</a></p>
    <p class=\"user__job\">";
        // line 6
        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "job", array())), "html", null, true);
        echo "</p>
    ";
        // line 7
        if (array_key_exists("entity", $context)) {
            // line 8
            echo "    <a class=\"line--remove remove\" data-id=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "id", array()), "html", null, true);
            echo "\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("project_ajax_remove_user", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()))), "html", null, true);
            echo "\">Retirer</a>
\t";
        }
        // line 10
        echo "</div>";
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
        return array (  51 => 10,  43 => 8,  41 => 7,  37 => 6,  30 => 5,  24 => 3,  22 => 2,  19 => 1,);
    }
}
