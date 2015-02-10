<?php

/* FlydDashboardBundle:Project:edit.html.twig */
class __TwigTemplate_4f811c1b4408a52e0b5171af366a0dc4fbf93d1141e1a2348fbeca7e18bdcb10 extends Twig_Template
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
            'js' => array($this, 'block_js'),
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
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "title", array()), "html", null, true);
        echo " - Edit</title>
";
    }

    // line 7
    public function block_top($context, array $blocks = array())
    {
        // line 8
        echo "    <p>
        <span class=\"prev\"><a href=\"";
        // line 9
        echo $this->env->getExtension('routing')->getPath("client_list");
        echo "\">Clients</a></span>
        <span class=\"prev\"><a href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("client_show", array("id" => $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "entity"), "need", array()), "client", array()), "id", array()))), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "entity"), "need", array()), "client", array()), "html", null, true);
        echo "</a></span>
        <span class=\"prev\"><a href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("need_show", array("id" => $this->getAttribute($this->getAttribute($this->getContext($context, "entity"), "need", array()), "id", array()))), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "need", array()), "html", null, true);
        echo "</a></span>
        <span class=\"prev\"><a href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("project_show", array("id" => $this->getAttribute($this->getContext($context, "entity"), "id", array()))), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "title", array()), "html", null, true);
        echo "</a></span>
        Edit
    </p>
";
    }

    // line 17
    public function block_body($context, array $blocks = array())
    {
        // line 18
        echo "
    <div class=\"title__container\">
        <h1 class=\"lvl1\">";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "title", array()), "html", null, true);
        echo " - Edit</h1>
    </div>    

    ";
        // line 23
        echo         $this->env->getExtension('form')->renderer->renderBlock($this->getContext($context, "form"), 'form_start', array("attr" => array("class" => "form-horizontal")));
        echo "

    ";
        // line 25
        if ($this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'errors')) {
            // line 26
            echo "    <div class=\"row\">
        <div class=\"col-sm-12\">
            <div class=\"bloc\">
                ";
            // line 29
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'errors');
            echo "
            </div>
        </div>
    </div>
    ";
        }
        // line 34
        echo "
    <div class=\"row\">
        <div class=\"col-sm-8\">
            <div class=\"bloc bloc-inline-edition\">
                <h2 class=\"bloc__title\">Informations générales</h2>

                <div class=\"form-group\">
                    ";
        // line 41
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "title", array()), 'label', array("label_attr" => array("class" => "control-label"), "label" => "Titre du projet"));
        echo "

                    ";
        // line 43
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "title", array()), 'errors');
        echo "

                  <div class=\"data\">
                    ";
        // line 47
        echo "                    ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "title", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                  </div>
                </div>

                <div class=\"form-group\">
                    ";
        // line 52
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "category", array()), 'label', array("label_attr" => array("class" => "control-label"), "label" => "Catégorie"));
        echo "

                    ";
        // line 54
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "category", array()), 'errors');
        echo "

                    <div class=\"data\">
                        ";
        // line 58
        echo "                        ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "category", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                    </div>
                </div>

                <div class=\"form-group\">
                    ";
        // line 63
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "startDate", array()), 'label', array("label_attr" => array("class" => "control-label"), "label" => "Date de début"));
        echo "

                    ";
        // line 65
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "startDate", array()), 'errors');
        echo "

                    <div class=\"data\">
                        ";
        // line 69
        echo "                        ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "startDate", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                    </div>
                </div>

                <div class=\"form-group\">
                    ";
        // line 74
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "deadline", array()), 'label', array("label_attr" => array("class" => "control-label"), "label" => "Deadline"));
        echo "

                    ";
        // line 76
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "deadline", array()), 'errors');
        echo "

                    <div class=\"data\">
                        ";
        // line 80
        echo "                        ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "deadline", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                    </div>
                </div>

                <div class=\"form-group\">
                    ";
        // line 85
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "endDate", array()), 'label', array("label_attr" => array("class" => "control-label"), "label" => "Date de fin"));
        echo "

                    ";
        // line 87
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "endDate", array()), 'errors');
        echo "

                    <div class=\"data\">
                        ";
        // line 91
        echo "                        ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "endDate", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                    </div>
                </div>
                
                ";
        // line 96
        echo "                ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "save", array()), 'widget');
        echo "


                ";
        // line 102
        echo "                ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'rest');
        echo "

                ";
        // line 105
        echo "                ";
        echo         $this->env->getExtension('form')->renderer->renderBlock($this->getContext($context, "form"), 'form_end');
        echo "
            </div>
            <div class=\"bloc project__suppliers\">
                <h2 class=\"bloc__title\">Fournisseurs</h2>
                <div class=\"row\">
                    ";
        // line 110
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getContext($context, "entity"), "suppliers", array()));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["supplier"]) {
            // line 111
            echo "                        ";
            $this->env->loadTemplate("FlydDashboardBundle:Supplier:mini.html.twig")->display($context);
            // line 112
            echo "                    ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['supplier'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 113
        echo "                </div>
                <button class=\"btn--add\">+</button>
                ";
        // line 115
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("FlydDashboardBundle:Supplier:getForm", array("id" => $this->getAttribute($this->getContext($context, "entity"), "id", array()))));
        echo "
                
            </div>
        </div>
        <div class=\"col-sm-4\">
            <div class=\"bloc project__team\">
                <h2 class=\"bloc__title\">équipe</h2>
                <div class=\"row\">                    
                ";
        // line 123
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getContext($context, "entity"), "users", array()));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 124
            echo "                    ";
            $this->env->loadTemplate("FlydDashboardBundle:User:mini.html.twig")->display($context);
            echo "                    
                ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 126
        echo "                </div>                
                <button class=\"btn--add\">+</button>
                ";
        // line 128
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("FlydDashboardBundle:User:getForm", array("id" => $this->getAttribute($this->getContext($context, "entity"), "id", array()))));
        echo "                
            </div>
        </div>
    </div>

";
    }

    // line 135
    public function block_js($context, array $blocks = array())
    {
        // line 136
        echo "     <script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/additems.js"), "html", null, true);
        echo "\"></script>   
";
    }

    public function getTemplateName()
    {
        return "FlydDashboardBundle:Project:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  344 => 136,  341 => 135,  331 => 128,  327 => 126,  310 => 124,  293 => 123,  282 => 115,  278 => 113,  264 => 112,  261 => 111,  244 => 110,  235 => 105,  229 => 102,  222 => 96,  214 => 91,  208 => 87,  203 => 85,  194 => 80,  188 => 76,  183 => 74,  174 => 69,  168 => 65,  163 => 63,  154 => 58,  148 => 54,  143 => 52,  134 => 47,  128 => 43,  123 => 41,  114 => 34,  106 => 29,  101 => 26,  99 => 25,  94 => 23,  88 => 20,  84 => 18,  81 => 17,  71 => 12,  65 => 11,  59 => 10,  55 => 9,  52 => 8,  49 => 7,  42 => 4,  39 => 3,  11 => 1,);
    }
}
