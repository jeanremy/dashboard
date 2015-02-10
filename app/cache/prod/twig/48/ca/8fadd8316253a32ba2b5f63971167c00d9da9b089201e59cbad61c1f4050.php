<?php

/* FlydDashboardBundle:Contact:show.html.twig */
class __TwigTemplate_48ca8fadd8316253a32ba2b5f63971167c00d9da9b089201e59cbad61c1f4050 extends Twig_Template
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
        echo "<div class=\"col-sm-3 contact item\">
    <p class=\"contact__title\">";
        // line 2
        if (isset($context["contact"])) { $_contact_ = $context["contact"]; } else { $_contact_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_contact_, "firstname", array()), "html", null, true);
        echo " ";
        if (isset($context["contact"])) { $_contact_ = $context["contact"]; } else { $_contact_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_contact_, "lastname", array()), "html", null, true);
        echo "</p>
    <p class=\"contact__job\">";
        // line 3
        if (isset($context["contact"])) { $_contact_ = $context["contact"]; } else { $_contact_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_contact_, "job", array()), "html", null, true);
        echo "</p>
    <p class=\"contact__email\">";
        // line 4
        if (isset($context["contact"])) { $_contact_ = $context["contact"]; } else { $_contact_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_contact_, "email", array()), "html", null, true);
        echo "</p>
    <p class=\"contact__phone\">";
        // line 5
        if (isset($context["contact"])) { $_contact_ = $context["contact"]; } else { $_contact_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_contact_, "phone", array()), "html", null, true);
        echo "</p>
    <p class=\"contact__mobile\">";
        // line 6
        if (isset($context["contact"])) { $_contact_ = $context["contact"]; } else { $_contact_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_contact_, "mobile", array()), "html", null, true);
        echo "</p>
    <a class=\"line--remove remove\" data-id=\"";
        // line 7
        if (isset($context["contact"])) { $_contact_ = $context["contact"]; } else { $_contact_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_contact_, "id", array()), "html", null, true);
        echo "\" href=\"";
        echo $this->env->getExtension('routing')->getPath("contact_ajax_delete");
        echo "\">Retirer</a>
</div>";
    }

    public function getTemplateName()
    {
        return "FlydDashboardBundle:Contact:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  50 => 7,  45 => 6,  40 => 5,  35 => 4,  30 => 3,  22 => 2,  19 => 1,);
    }
}
