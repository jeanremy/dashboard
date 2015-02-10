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
\t<nav class=\"nav\">
\t\t<ul class=\"menu\">
\t\t\t<li><a href=\"";
        // line 7
        echo $this->env->getExtension('routing')->getPath("flyd_dashboard_homepage");
        echo "\">Dashboard</a></li>
\t\t\t<li class=\"subs\">Clients
\t\t\t\t<ul class=\"submenu\">
\t\t\t\t\t<li><a href=\"";
        // line 10
        echo $this->env->getExtension('routing')->getPath("client_add");
        echo "\">Ajouter un client</a></li>
\t\t\t\t\t<li><a href=\"\">Mes clients</a></li>
\t\t\t\t\t<li><a href=\"";
        // line 12
        echo $this->env->getExtension('routing')->getPath("client_list");
        echo "\">Tous les clients</a></li>
\t\t\t\t</ul>
\t\t\t</li>
\t\t\t<li class=\"subs\">Utilisateurs
\t\t\t\t<ul class=\"submenu\">
\t\t\t\t\t<li><a href=\"";
        // line 17
        echo $this->env->getExtension('routing')->getPath("user_add");
        echo "\">Ajouter un utilisateur</a></li>
\t\t\t\t\t<li><a href=\"";
        // line 18
        echo $this->env->getExtension('routing')->getPath("fos_user_profile_show");
        echo "\">Mon compte</a></li>
\t\t\t\t\t<li><a href=\"";
        // line 19
        echo $this->env->getExtension('routing')->getPath("user_list");
        echo "\">Tous les utilisateurs</a></li>
\t\t\t\t</ul>
\t\t\t</li>
\t\t\t<li class=\"subs\">Fournisseurs</a>
\t\t\t\t<ul class=\"submenu\">
\t\t\t\t\t<li><a href=\"";
        // line 24
        echo $this->env->getExtension('routing')->getPath("supplier_add");
        echo "\">Ajouter un fournisseur</a></li>
\t\t\t\t\t<li><a href=\"\">Mes fournisseurs</a></li>
\t\t\t\t\t<li><a href=\"";
        // line 26
        echo $this->env->getExtension('routing')->getPath("supplier_list");
        echo "\">Tous les fournisseurs</a></li>
\t\t\t\t</ul>
\t\t\t</li>
\t\t\t<li class=\"subs\">Projet</a>
\t\t\t\t<ul class=\"submenu\">
\t\t\t\t\t<li>Mes projets</li>
\t\t\t\t\t<li><a href=\"";
        // line 32
        echo $this->env->getExtension('routing')->getPath("projectcanvas_add");
        echo "\">Créer un canevas de projet</a></li>
\t\t\t\t\t<li><a href=\"";
        // line 33
        echo $this->env->getExtension('routing')->getPath("projectcanvas_list");
        echo "\">Tous les canevas de projet</a></li>
\t\t\t\t</ul>
\t\t\t</li>
\t\t\t<li>Réglages</li>
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
        return array (  79 => 33,  75 => 32,  66 => 26,  61 => 24,  53 => 19,  49 => 18,  45 => 17,  37 => 12,  32 => 10,  26 => 7,  19 => 2,);
    }
}
