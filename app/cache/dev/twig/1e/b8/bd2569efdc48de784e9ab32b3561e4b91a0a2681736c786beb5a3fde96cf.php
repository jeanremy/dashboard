<?php

/* FOSUserBundle:Profile:show.html.twig */
class __TwigTemplate_1eb8bd2569efdc48de784e9ab32b3561e4b91a0a2681736c786beb5a3fde96cf extends Twig_Template
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

    // line 3
    public function block_title($context, array $blocks = array())
    {
        // line 4
        echo "    <title>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "user"), "username", array()), "html", null, true);
        echo "</title>
";
    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        // line 8
        echo "        
    <a href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("user_edit", array("id" => $this->getAttribute($this->getContext($context, "user"), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn--edit\"></a>
    <h1 class=\"lvl1\">
        <img src=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('imagine')->applyFilter($this->getAttribute($this->getAttribute($this->getContext($context, "user"), "image", array()), "webPath", array()), "miniature"), "html", null, true);
        echo "\" / class=\"profil__pic\">
        ";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "user"), "username", array()), "html", null, true);
        echo "
    </h1>

    ";
        // line 15
        $this->env->loadTemplate("FlydDashboardBundle::flash.html.twig")->display($context);
        // line 16
        echo "

    <div class=\"row\">
        <div class=\"col-sm-12\">
            <div class=\"bloc bloc--general\">
                <h2 class=\"bloc__title\">Informations générales</h2>

                <div class=\"form-group\">
                    
                    <label class=\"control-label\">Fonction</label>

                    <div class=\"data\">
                        ";
        // line 28
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "user"), "job", array()), "html", null, true);
        echo "
                    </div>

                </div>

                <div class=\"form-group\">
                    
                    <label class=\"control-label\">Email</label>

                    <div class=\"data\">
                        <p>";
        // line 38
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "user"), "email", array()), "html", null, true);
        echo "</p>
                    </div>
                    
                </div>

            </div>
        </div>
    </div>

";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  97 => 38,  84 => 28,  70 => 16,  68 => 15,  62 => 12,  58 => 11,  53 => 9,  50 => 8,  47 => 7,  40 => 4,  37 => 3,  11 => 1,);
    }
}
