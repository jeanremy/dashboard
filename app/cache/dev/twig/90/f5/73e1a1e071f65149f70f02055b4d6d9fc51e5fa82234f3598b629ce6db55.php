<?php

/* FlydDashboardBundle:Need:mini.html.twig */
class __TwigTemplate_90f573e1a1e071f65149f70f02055b4d6d9fc51e5fa82234f3598b629ce6db55 extends Twig_Template
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
        echo "<div class=\"need col-sm-6\">
    <p class=\"need__dates\">
        ";
        // line 3
        echo twig_escape_filter($this->env, twig_localized_date_filter($this->env, $this->getAttribute($this->getContext($context, "need"), "startDate", array()), "full", "none", "fr"), "html", null, true);
        echo " > 
        ";
        // line 4
        if ($this->getAttribute($this->getContext($context, "need"), "endDate", array())) {
            // line 5
            echo "        ";
            echo twig_escape_filter($this->env, twig_localized_date_filter($this->env, $this->getAttribute($this->getContext($context, "need"), "endDate", array()), "full", "none", "fr"), "html", null, true);
            echo "
        ";
        } else {
            // line 6
            echo "...
        ";
        }
        // line 8
        echo "    </p>
    <a href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("need_delete", array("id" => $this->getAttribute($this->getContext($context, "need"), "id", array()))), "html", null, true);
        echo "\" data-id=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "need"), "id", array()), "html", null, true);
        echo "\" class=\"pull-right btn--delete dashicons dashicons-trash\"></a>
    <a href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("need_edit", array("id" => $this->getAttribute($this->getContext($context, "need"), "id", array()))), "html", null, true);
        echo "\" class=\"pull-right btn--edit dashicons dashicons-edit\"></a>

    <p class=\"need__title\"><a href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("need_show", array("id" => $this->getAttribute($this->getContext($context, "need"), "id", array()))), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "need"), "title", array()), "html", null, true);
        echo "</a></p>
    <p class=\"need__description\">";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "need"), "description", array()), "html", null, true);
        echo "</p>
    ";
        // line 14
        if ($this->getAttribute($this->getContext($context, "need"), "projects", array())) {
            // line 15
            echo "        <h3 class=\"bloc__subtitle\">Projets</h3>
        <ul class=\"need__projects\">                                
        ";
            // line 17
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getContext($context, "need"), "projects", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["project"]) {
                // line 18
                echo "            <li class=\"need__project\"><a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("project_show", array("id" => $this->getAttribute($context["project"], "id", array()))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["project"], "title", array()), "html", null, true);
                echo "</a></li>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['project'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 20
            echo "        </ul>
    ";
        }
        // line 22
        echo "    <a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("project_add", array("id" => $this->getAttribute($this->getContext($context, "need"), "id", array()))), "html", null, true);
        echo "\" class=\"pull-right btn--save--reverse\">Ajouter un projet</a>
</div>";
    }

    public function getTemplateName()
    {
        return "FlydDashboardBundle:Need:mini.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 22,  84 => 20,  73 => 18,  69 => 17,  65 => 15,  63 => 14,  59 => 13,  53 => 12,  48 => 10,  42 => 9,  39 => 8,  35 => 6,  29 => 5,  27 => 4,  23 => 3,  19 => 1,);
    }
}
