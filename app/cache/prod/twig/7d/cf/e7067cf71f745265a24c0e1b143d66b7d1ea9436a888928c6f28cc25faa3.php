<?php

/* FOSUserBundle:Registration:confirmed.html.twig */
class __TwigTemplate_7dcfe7067cf71f745265a24c0e1b143d66b7d1ea9436a888928c6f28cc25faa3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        try {
            $this->parent = $this->env->loadTemplate("FOSUserBundle::layout.html.twig");
        } catch (Twig_Error_Loader $e) {
            $e->setTemplateFile($this->getTemplateName());
            $e->setTemplateLine(1);

            throw $e;
        }

        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        // line 6
        echo "    <p>";
        if (isset($context["user"])) { $_user_ = $context["user"]; } else { $_user_ = null; }
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.confirmed", array("%username%" => $this->getAttribute($_user_, "username", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
    ";
        // line 7
        if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
        if ( !twig_test_empty($this->getAttribute($_app_, "session", array()))) {
            // line 8
            echo "        ";
            if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
            $context["targetUrl"] = $this->getAttribute($this->getAttribute($_app_, "session", array()), "get", array(0 => (("_security." . $this->getAttribute($this->getAttribute($this->getAttribute($_app_, "security", array()), "token", array()), "providerKey", array())) . ".target_path")), "method");
            // line 9
            echo "        ";
            if (isset($context["targetUrl"])) { $_targetUrl_ = $context["targetUrl"]; } else { $_targetUrl_ = null; }
            if ( !twig_test_empty($_targetUrl_)) {
                echo "<p><a href=\"";
                if (isset($context["targetUrl"])) { $_targetUrl_ = $context["targetUrl"]; } else { $_targetUrl_ = null; }
                echo twig_escape_filter($this->env, $_targetUrl_, "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.back", array(), "FOSUserBundle"), "html", null, true);
                echo "</a></p>";
            }
            // line 10
            echo "    ";
        }
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:confirmed.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  63 => 10,  52 => 9,  48 => 8,  45 => 7,  39 => 6,  36 => 5,  11 => 1,);
    }
}
