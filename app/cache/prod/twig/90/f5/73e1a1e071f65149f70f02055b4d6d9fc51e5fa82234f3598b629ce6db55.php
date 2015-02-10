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
        if (isset($context["need"])) { $_need_ = $context["need"]; } else { $_need_ = null; }
        echo twig_escape_filter($this->env, twig_localized_date_filter($this->env, $this->getAttribute($_need_, "startDate", array()), "full", "none", "fr"), "html", null, true);
        echo " > 
        ";
        // line 4
        if (isset($context["need"])) { $_need_ = $context["need"]; } else { $_need_ = null; }
        if ($this->getAttribute($_need_, "endDate", array())) {
            // line 5
            echo "        ";
            if (isset($context["need"])) { $_need_ = $context["need"]; } else { $_need_ = null; }
            echo twig_escape_filter($this->env, twig_localized_date_filter($this->env, $this->getAttribute($_need_, "endDate", array()), "full", "none", "fr"), "html", null, true);
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
        if (isset($context["need"])) { $_need_ = $context["need"]; } else { $_need_ = null; }
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("need_delete", array("id" => $this->getAttribute($_need_, "id", array()))), "html", null, true);
        echo "\" data-id=\"";
        if (isset($context["need"])) { $_need_ = $context["need"]; } else { $_need_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_need_, "id", array()), "html", null, true);
        echo "\" class=\"pull-right btn--delete\">+</a>
    <a href=\"";
        // line 10
        if (isset($context["need"])) { $_need_ = $context["need"]; } else { $_need_ = null; }
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("need_edit", array("id" => $this->getAttribute($_need_, "id", array()))), "html", null, true);
        echo "\" class=\"pull-right btn--edit\">+</a>

    <p class=\"need__title\"><a href=\"";
        // line 12
        if (isset($context["need"])) { $_need_ = $context["need"]; } else { $_need_ = null; }
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("need_show", array("id" => $this->getAttribute($_need_, "id", array()))), "html", null, true);
        echo "\">";
        if (isset($context["need"])) { $_need_ = $context["need"]; } else { $_need_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_need_, "title", array()), "html", null, true);
        echo "</a></p>
    <p class=\"need__description\">";
        // line 13
        if (isset($context["need"])) { $_need_ = $context["need"]; } else { $_need_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_need_, "description", array()), "html", null, true);
        echo "</p>
    ";
        // line 14
        if (isset($context["need"])) { $_need_ = $context["need"]; } else { $_need_ = null; }
        if ($this->getAttribute($_need_, "projects", array())) {
            // line 15
            echo "        <h3 class=\"bloc__subtitle\">Projets</h3>
        <ul class=\"need__projects\">                                
        ";
            // line 17
            if (isset($context["need"])) { $_need_ = $context["need"]; } else { $_need_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($_need_, "projects", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["project"]) {
                // line 18
                echo "            <li class=\"need__project\"><a href=\"";
                if (isset($context["project"])) { $_project_ = $context["project"]; } else { $_project_ = null; }
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("project_show", array("id" => $this->getAttribute($_project_, "id", array()))), "html", null, true);
                echo "\">";
                if (isset($context["project"])) { $_project_ = $context["project"]; } else { $_project_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_project_, "title", array()), "html", null, true);
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
        if (isset($context["need"])) { $_need_ = $context["need"]; } else { $_need_ = null; }
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("project_add", array("id" => $this->getAttribute($_need_, "id", array()))), "html", null, true);
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
        return array (  101 => 22,  97 => 20,  84 => 18,  79 => 17,  75 => 15,  72 => 14,  67 => 13,  59 => 12,  53 => 10,  45 => 9,  42 => 8,  38 => 6,  31 => 5,  28 => 4,  23 => 3,  19 => 1,);
    }
}
