<?php

/* FlydDashboardBundle:User:index.html.twig */
class __TwigTemplate_1c17cc3dd624b2cddd37a1cfa0008935967d51d7e40e6b0b703785627930ab24 extends Twig_Template
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
            'top' => array($this, 'block_top'),
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
        echo "    <title>Tous les utilisateurs</title>
";
    }

    // line 7
    public function block_top($context, array $blocks = array())
    {
        // line 8
        echo "    <p>Utilisateurs</p>
";
    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        // line 12
        echo "    
    <div class=\"title__container\">
        <h1 class=\"lvl1\">Tous les utilisateurs</h1>
    </div>

    ";
        // line 17
        $this->env->loadTemplate("FlydDashboardBundle::flash.html.twig")->display($context);
        // line 18
        echo "
    ";
        // line 19
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "entities"));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 20
            echo "    <div class=\"row\">
        <div class=\"col-sm-12\">
            <div class=\"bloc bloc--general bloc-inline-edition\">
                ";
            // line 23
            if (($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "user", array()), "id", array()) == $this->getAttribute($context["user"], "id", array()))) {
                // line 24
                echo "                    <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("user_edit", array("id" => $this->getAttribute($context["user"], "id", array()))), "html", null, true);
                echo "\" class=\"btn btn--edit\"></a>
                ";
            }
            // line 26
            echo "                <h2 class=\"bloc__title\">
                    <a href=\"";
            // line 27
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("user_show", array("id" => $this->getAttribute($context["user"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "username", array()), "html", null, true);
            echo "</a>
                </h2>

                <div class=\"form-group\">
                    
                    <label class=\"control-label\">Fonction</label>

                    <div class=\"data\">
                        ";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "job", array()), "html", null, true);
            echo "
                    </div>

                </div>

                <div class=\"form-group\">
                    
                    <label class=\"control-label\">Email</label>

                    <div class=\"data\">
                        <p>";
            // line 45
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "email", array()), "html", null, true);
            echo "</p>
                    </div>
                    
                </div>


                ";
            // line 51
            if ($this->getAttribute($context["user"], "image", array())) {
                // line 52
                echo "                <div class=\"form-group\">
                    <label class=\"control-label\">Profil</label>
                    <div class=\"data\">
                        <img src=\"";
                // line 55
                echo twig_escape_filter($this->env, $this->env->getExtension('imagine')->applyFilter($this->getAttribute($this->getAttribute($context["user"], "image", array()), "webPath", array()), "miniature"), "html", null, true);
                echo "\" />
                    </div>
                    
                </div>
                ";
            }
            // line 60
            echo "
            </div>
        </div>
    </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 65
        echo "
";
    }

    public function getTemplateName()
    {
        return "FlydDashboardBundle:User:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  149 => 65,  139 => 60,  131 => 55,  126 => 52,  124 => 51,  115 => 45,  102 => 35,  89 => 27,  86 => 26,  80 => 24,  78 => 23,  73 => 20,  69 => 19,  66 => 18,  64 => 17,  57 => 12,  54 => 11,  49 => 8,  46 => 7,  41 => 4,  38 => 3,  11 => 1,);
    }
}
