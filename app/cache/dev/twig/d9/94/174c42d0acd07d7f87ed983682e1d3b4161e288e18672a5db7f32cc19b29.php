<?php

/* FlydDashboardBundle:Address:show.html.twig */
class __TwigTemplate_d994174c42d0acd07d7f87ed983682e1d3b4161e288e18672a5db7f32cc19b29 extends Twig_Template
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
        echo "<div class=\"col-sm-3 address item\">
    <p class=\"address_type\">";
        // line 2
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "address"), "type", array()), "html", null, true);
        echo "</p>
    <p class=\"address__street\">";
        // line 3
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "address"), "street", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "address"), "streetComp", array()), "html", null, true);
        echo "</p>
    <p class=\"address__city\">";
        // line 4
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "address"), "zipcode", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "address"), "city", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "address"), "cityComp", array()), "html", null, true);
        echo "</p>
    <a class=\"line--remove\" data-id=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "address"), "id", array()), "html", null, true);
        echo "\" href=\"";
        echo $this->env->getExtension('routing')->getPath("address_ajax_delete");
        echo "\">Retirer</a>
</div>";
    }

    public function getTemplateName()
    {
        return "FlydDashboardBundle:Address:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 5,  32 => 4,  26 => 3,  22 => 2,  19 => 1,);
    }
}
