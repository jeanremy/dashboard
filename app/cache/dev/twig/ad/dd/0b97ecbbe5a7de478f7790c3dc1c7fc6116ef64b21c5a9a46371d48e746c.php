<?php

/* FlydDashboardBundle::menu.html.twig */
class __TwigTemplate_addd0b97ecbbe5a7de478f7790c3dc1c7fc6116ef64b21c5a9a46371d48e746c extends Twig_Template
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

<aside class=\"aside\" id=\"aside\">
\t<div class=\"user\">
\t\t";
        // line 6
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 7
            echo "\t\t\t";
            if ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "image", array())) {
                // line 8
                echo "\t\t\t<a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("user_show", array("id" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "id", array()))), "html", null, true);
                echo "\"><img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('imagine')->applyFilter($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "image", array()), "webPath", array()), "demi"), "html", null, true);
                echo "\" / class=\"profil__pic\"></a>
\t\t\t";
            }
            // line 10
            echo "\t\t\t<p class=\"user__name\">
\t\t\t\t<a href=\"";
            // line 11
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("user_show", array("id" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
            echo "</a>
\t\t\t</p>
\t\t\t<p class=\"user__logout\">
\t\t\t\t<a href=\"";
            // line 14
            echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
            echo "\">";
            echo "Déconnexion";
            echo "</a>
\t\t\t</p>
        ";
        } else {
            // line 17
            echo "            <p class=\"user__login\"><a href=\"";
            echo $this->env->getExtension('routing')->getPath("fos_user_security_login");
            echo "\">Log in</a></p>
        ";
        }
        // line 19
        echo "\t</div>
\t<nav class=\"nav\">
\t\t<ul class=\"menu\">
\t\t\t<li>
\t\t\t\t<a href=\"";
        // line 23
        echo $this->env->getExtension('routing')->getPath("flyd_dashboard_homepage");
        echo "\" class=\"dashicons dashicons-dashboard";
        if ((array_key_exists("menu", $context) && ((isset($context["menu"]) ? $context["menu"] : $this->getContext($context, "menu")) == "dashboard"))) {
            echo " active";
        }
        echo "\">Dashboard</a>
\t\t\t</li>
\t\t\t<li>
\t\t\t\t<a href=\"";
        // line 26
        echo $this->env->getExtension('routing')->getPath("client_list");
        echo "\" class=\"dashicons dashicons-businessman";
        if ((array_key_exists("menu", $context) && ((isset($context["menu"]) ? $context["menu"] : $this->getContext($context, "menu")) == "client"))) {
            echo " active";
        }
        echo "\">Clients</a>
\t\t\t</li>
\t\t\t<li>
\t\t\t\t<a href=\"";
        // line 29
        echo $this->env->getExtension('routing')->getPath("user_list");
        echo "\" class=\"dashicons dashicons-admin-users";
        if ((array_key_exists("menu", $context) && ((isset($context["menu"]) ? $context["menu"] : $this->getContext($context, "menu")) == "user"))) {
            echo " active";
        }
        echo "\">Utilisateurs</a>
\t\t\t</li>
\t\t\t<li>
\t\t\t\t<a href=\"";
        // line 32
        echo $this->env->getExtension('routing')->getPath("supplier_list");
        echo "\" class=\"dashicons dashicons-groups";
        if ((array_key_exists("menu", $context) && ((isset($context["menu"]) ? $context["menu"] : $this->getContext($context, "menu")) == "supplier"))) {
            echo " active";
        }
        echo "\">Fournisseurs</a>
\t\t\t</li>
\t\t\t<li>
\t\t\t\t<a href=\"";
        // line 35
        echo $this->env->getExtension('routing')->getPath("project_list");
        echo "\" class=\"dashicons dashicons-clipboard";
        if ((array_key_exists("menu", $context) && ((isset($context["menu"]) ? $context["menu"] : $this->getContext($context, "menu")) == "project"))) {
            echo " active";
        }
        echo "\">Projet</a>
\t\t\t</li>
\t\t\t<li>
\t\t\t\t<a href=\"";
        // line 38
        echo $this->env->getExtension('routing')->getPath("projectcanvas_list");
        echo "\" class=\"dashicons dashicons-admin-generic";
        if ((array_key_exists("menu", $context) && ((isset($context["menu"]) ? $context["menu"] : $this->getContext($context, "menu")) == "projectcanvas"))) {
            echo " active";
        }
        echo "\">Canevas de projet</a>
\t\t\t</li>
\t\t</ul>
\t</nav>
</aside>";
    }

    public function getTemplateName()
    {
        return "FlydDashboardBundle::menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  119 => 38,  109 => 35,  99 => 32,  89 => 29,  79 => 26,  69 => 23,  63 => 19,  57 => 17,  49 => 14,  41 => 11,  38 => 10,  30 => 8,  27 => 7,  25 => 6,  19 => 2,);
    }
}
