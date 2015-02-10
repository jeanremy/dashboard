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
    public function block_body($context, array $blocks = array())
    {
        // line 8
        echo "    
    <div class=\"title__container\">
        <h1 class=\"lvl1\">Tous les utilisateurs</h1>
    </div>

    ";
        // line 13
        $this->env->loadTemplate("FlydDashboardBundle::flash.html.twig")->display($context);
        // line 14
        echo "
    ";
        // line 15
        if (isset($context["entities"])) { $_entities_ = $context["entities"]; } else { $_entities_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($_entities_);
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 16
            echo "    <div class=\"row\">
        <div class=\"col-sm-12\">
            <div class=\"bloc bloc--general bloc-inline-edition\">
                ";
            // line 19
            if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
            if (isset($context["user"])) { $_user_ = $context["user"]; } else { $_user_ = null; }
            if (($this->getAttribute($this->getAttribute($_app_, "user", array()), "id", array()) == $this->getAttribute($_user_, "id", array()))) {
                // line 20
                echo "                    <a href=\"";
                if (isset($context["user"])) { $_user_ = $context["user"]; } else { $_user_ = null; }
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("user_edit", array("id" => $this->getAttribute($_user_, "id", array()))), "html", null, true);
                echo "\" class=\"btn btn--edit\"></a>
                ";
            }
            // line 22
            echo "                <h2 class=\"bloc__title\">
                    <a href=\"";
            // line 23
            if (isset($context["user"])) { $_user_ = $context["user"]; } else { $_user_ = null; }
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("user_show", array("id" => $this->getAttribute($_user_, "id", array()))), "html", null, true);
            echo "\">";
            if (isset($context["user"])) { $_user_ = $context["user"]; } else { $_user_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_user_, "username", array()), "html", null, true);
            echo "</a>
                </h2>

                <div class=\"form-group\">
                    
                    <label class=\"control-label\">Fonction</label>

                    <div class=\"data\">
                        ";
            // line 31
            if (isset($context["user"])) { $_user_ = $context["user"]; } else { $_user_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_user_, "job", array()), "html", null, true);
            echo "
                    </div>

                </div>

                <div class=\"form-group\">
                    
                    <label class=\"control-label\">Email</label>

                    <div class=\"data\">
                        <p>";
            // line 41
            if (isset($context["user"])) { $_user_ = $context["user"]; } else { $_user_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_user_, "email", array()), "html", null, true);
            echo "</p>
                    </div>
                    
                </div>


                ";
            // line 47
            if (isset($context["user"])) { $_user_ = $context["user"]; } else { $_user_ = null; }
            if ($this->getAttribute($_user_, "image", array())) {
                // line 48
                echo "                <div class=\"form-group\">
                    <label class=\"control-label\">Profil</label>
                    <div class=\"data\">
                        <img src=\"";
                // line 51
                if (isset($context["user"])) { $_user_ = $context["user"]; } else { $_user_ = null; }
                echo twig_escape_filter($this->env, $this->env->getExtension('imagine')->applyFilter($this->getAttribute($this->getAttribute($_user_, "image", array()), "webPath", array()), "miniature"), "html", null, true);
                echo "\" />
                    </div>
                    
                </div>
                ";
            }
            // line 56
            echo "
            </div>
        </div>
    </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 61
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
        return array (  150 => 61,  140 => 56,  131 => 51,  126 => 48,  123 => 47,  113 => 41,  99 => 31,  84 => 23,  81 => 22,  74 => 20,  70 => 19,  65 => 16,  60 => 15,  57 => 14,  55 => 13,  48 => 8,  45 => 7,  40 => 4,  37 => 3,  11 => 1,);
    }
}
