<?php

/* FlydDashboardBundle::top.html.twig */
class __TwigTemplate_3282cbceef51c6463872a464acd95172f2ce93955edd795dd6a868bf9b12afd6 extends Twig_Template
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
        // line 2
        echo "

<header class=\"header\">
\t<a href=\"#\" class=\"title\" id=\"menu--toggle\">Menu</a>
\t<div class=\"user\">
\t\t";
        // line 7
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 8
            echo "\t\t\t<p class=\"user__name\">
\t\t\t\t";
            // line 9
            if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_app_, "user", array()), "username", array()), "html", null, true);
            echo "
\t\t\t\t";
            // line 10
            if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
            if ($this->getAttribute($this->getAttribute($_app_, "user", array()), "image", array())) {
                // line 11
                echo "\t\t\t\t<img src=\"";
                if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
                echo twig_escape_filter($this->env, $this->env->getExtension('imagine')->applyFilter($this->getAttribute($this->getAttribute($this->getAttribute($_app_, "user", array()), "image", array()), "webPath", array()), "small"), "html", null, true);
                echo "\" / class=\"profil__pic\">
\t\t\t\t";
            }
            // line 13
            echo "\t\t\t</p>
\t\t\t<ul class=\"user__menu\">
\t\t\t\t<li>
\t\t\t\t\t<a href=\"";
            // line 16
            if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("user_show", array("id" => $this->getAttribute($this->getAttribute($_app_, "user", array()), "id", array()))), "html", null, true);
            echo "\">";
            echo "Mon compte";
            echo "</a>
\t\t\t\t</li>
\t\t\t\t<li>
\t\t\t\t\t<a href=\"";
            // line 19
            echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
            echo "\">";
            echo "Déconnexion";
            echo "</a>
\t\t\t\t</li>
\t\t\t</ul>
        ";
        } else {
            // line 23
            echo "            <p class=\"user__login\"><a href=\"";
            echo $this->env->getExtension('routing')->getPath("fos_user_security_login");
            echo "\">Log in</a></p>
        ";
        }
        // line 25
        echo "\t</div>
</header>";
    }

    public function getTemplateName()
    {
        return "FlydDashboardBundle::top.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 25,  69 => 23,  60 => 19,  51 => 16,  46 => 13,  39 => 11,  36 => 10,  31 => 9,  28 => 8,  26 => 7,  19 => 2,);
    }
}
