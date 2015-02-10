<?php

/* FOSUserBundle:Security:login.html.twig */
class __TwigTemplate_64b50b8cd5f0ddf0e3b984cfa465291a511df26321d5f08f60b4f30320b5de79 extends Twig_Template
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
            'fos_user_content' => array($this, 'block_fos_user_content'),
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

    // line 4
    public function block_title($context, array $blocks = array())
    {
        // line 5
        echo "    <title>Se connecter</title>
";
    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        // line 10
        echo "\t<h1 class=\"lvl1\">Se connecter</h1>
\t";
        // line 11
        $this->displayBlock('fos_user_content', $context, $blocks);
    }

    public function block_fos_user_content($context, array $blocks = array())
    {
        // line 12
        echo "\t";
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 13
            echo "
\t<div class=\"row\">
\t\t<div class=\"col-sm-12\">
\t\t\t<div class=\"bloc\">
\t    \t\t<p class=\"alert\">";
            // line 17
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageKey", array()), $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageData", array()), "security"), "html", null, true);
            echo "</p>
\t    \t</div>
\t    </div>
\t</div>
\t";
        }
        // line 22
        echo "
    ";
        // line 23
        $this->env->loadTemplate("FlydDashboardBundle::flash.html.twig")->display($context);
        // line 24
        echo "
\t<form action=\"";
        // line 25
        echo $this->env->getExtension('routing')->getPath("fos_user_security_check");
        echo "\" method=\"post\">

\t\t<div class=\"row\">
\t\t\t<div class=\"col-sm-12\">
\t\t\t\t<div class=\"bloc bloc--general edit\">
\t    \t\t<input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 30
        echo twig_escape_filter($this->env, (isset($context["csrf_token"]) ? $context["csrf_token"] : $this->getContext($context, "csrf_token")), "html", null, true);
        echo "\" />

\t\t\t\t<div class=\"form-group\">
\t    \t\t\t<label for=\"username\" class=\"control-label\">Nom d'utilisateur</label>

\t\t\t\t\t<div class=\"data\">
\t    \t\t\t\t<input type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 36
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\" required=\"required\" class=\"form-control\" />
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"form-group\">
\t    \t\t\t<label for=\"password\" class=\"control-label\">Mot de passe</label>

\t\t\t\t\t<div class=\"data\">
\t    \t\t\t\t<input type=\"password\" id=\"password\" name=\"_password\" required=\"required\" class=\"form-control\"  />
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t
\t\t\t\t<div class=\"form-group\">
\t    \t\t\t<label for=\"remember_me\" class=\"control-label\">Se souvenir de moi</label>

\t\t\t\t\t<div class=\"data\">
\t    \t\t\t\t<input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\" class=\"form-control\" />
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t    \t<input type=\"submit\" id=\"_submit\" name=\"_submit\" value=\"Se connecter\" class=\"btn btn--save\"/>
\t\t</div>
\t</form>
\t";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Security:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  100 => 36,  91 => 30,  83 => 25,  80 => 24,  78 => 23,  75 => 22,  67 => 17,  61 => 13,  58 => 12,  52 => 11,  49 => 10,  46 => 9,  41 => 5,  38 => 4,  11 => 1,);
    }
}
