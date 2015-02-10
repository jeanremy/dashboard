<?php

/* FlydDashboardBundle:Project:index.html.twig */
class __TwigTemplate_5d640c447b7a59edcbfb327ce099c3bc9b55834ac5b9a60bfdcef05b79fda62a extends Twig_Template
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
        echo "    <title>Dashboard</title>
";
    }

    // line 7
    public function block_top($context, array $blocks = array())
    {
        // line 8
        echo "    <p>Projets</p>
";
    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        // line 12
        echo "    <div class=\"title__container\">
        <a href=\"";
        // line 13
        echo $this->env->getExtension('routing')->getPath("client_add");
        echo "\" class=\"btn btn--edit\">Nouveau client</a>
        <h1 class=\"lvl1\">Dashboard</h1>
    </div>

    <div class=\"row\">
        <div class=\"col-sm-12\">
            <div class=\"bloc bloc--general bloc--search\">
                ";
        // line 20
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("attr" => array("class" => "form-horizontal")));
        echo "
                    <label>Filtrer par: </label>
                    ";
        // line 22
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "categories", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                    ";
        // line 23
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "status", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                    ";
        // line 24
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "users", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                    ";
        // line 25
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "save", array()), 'widget');
        echo "
                    ";
        // line 26
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
                    ";
        // line 27
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
            </div>
        </div>
    </div>

    <div class=\"row\">
    ";
        // line 33
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 34
            echo "        <div class=\"col-sm-12 project\">
            <div class=\"project__title\">
                ";
            // line 36
            if ($this->getAttribute($context["entity"], "status", array())) {
                // line 37
                echo "                    <div class=\"status ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["entity"], "status", array()), "slug", array()), "html", null, true);
                echo "\"></div>
                ";
            }
            // line 39
            echo "                ";
            if ($this->getAttribute($context["entity"], "category", array())) {
                // line 40
                echo "                    <div class=\"category sprite ";
                echo twig_escape_filter($this->env, twig_lower_filter($this->env, $this->getAttribute($this->getAttribute($context["entity"], "category", array()), "name", array())), "html", null, true);
                echo "\"></div>
                ";
            }
            // line 42
            echo "                <h2>
                    <span class=\"project__title__infos\">";
            // line 43
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["entity"], "need", array()), "client", array()), "name", array()), "html", null, true);
            echo " > ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["entity"], "need", array()), "title", array()), "html", null, true);
            echo "</span>
                    <a href=\"";
            // line 44
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("project_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "title", array()), "html", null, true);
            echo "</a>
                </h2>
            </div>
            <div class=\"bloc bloc--general bloc-inline-edition\">
                <div class=\"form-group\">                    
                    <label class=\"control-label\">Catégorie</label>
                    <div class=\"data\">
                        ";
            // line 51
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["entity"], "category", array()), "name", array()), "html", null, true);
            echo "
                    </div>
                </div>

                <div class=\"form-group\">                    
                    <label class=\"control-label\">En cours</label>
                    <div class=\"data\">
                        ";
            // line 58
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("FlydDashboardBundle:ProjectTaskUser:getFirstPendingTask", array("id" => $this->getAttribute($context["entity"], "id", array()))));
            echo "
                    </div>
                </div>

                <div class=\"form-group\">                    
                    <label class=\"control-label\">A venir</label>
                    <div class=\"data\">
                            ";
            // line 65
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("FlydDashboardBundle:ProjectTaskUser:getFirstComingTask", array("id" => $this->getAttribute($context["entity"], "id", array()))));
            echo "                        
                    </div>
                </div>

                <div class=\"form-group\">                    
                    <label class=\"control-label\">Equipe</label>
                    <div class=\"data\">
                        <ul>
                        ";
            // line 73
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["entity"], "users", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
                // line 74
                echo "                            <li>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "username", array()), "html", null, true);
                echo "</li>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 76
            echo "                        </ul>
                    </div>
                </div>

                <div class=\"form-group\">                    
                    <label class=\"control-label\">Deadline</label>
                    <div class=\"data\">
                        ";
            // line 83
            echo twig_escape_filter($this->env, twig_localized_date_filter($this->env, $this->getAttribute($context["entity"], "deadline", array()), "full", "none", "fr"), "html", null, true);
            echo "
                    </div>
                </div>

                <a href=\"";
            // line 87
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("project_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\" class=\"btn--save\">Voir</a>

                

            </div>
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 94
        echo "    </div>
";
    }

    // line 97
    public function block_js($context, array $blocks = array())
    {
        // line 98
        echo "    <script>
    
        \$('.project__title').on('click', function(e) {
            e.preventDefault();
            \$(this).parent().addClass('active');
            \$(this).parent().siblings().removeClass('active').find('.bloc').slideUp(400);

            \$(this).siblings().slideToggle();
        });
        \$('.project .bloc').hide();

    </script>
";
    }

    public function getTemplateName()
    {
        return "FlydDashboardBundle:Project:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  232 => 98,  229 => 97,  224 => 94,  211 => 87,  204 => 83,  195 => 76,  186 => 74,  182 => 73,  171 => 65,  161 => 58,  151 => 51,  139 => 44,  133 => 43,  130 => 42,  124 => 40,  121 => 39,  115 => 37,  113 => 36,  109 => 34,  105 => 33,  96 => 27,  92 => 26,  88 => 25,  84 => 24,  80 => 23,  76 => 22,  71 => 20,  61 => 13,  58 => 12,  55 => 11,  50 => 8,  47 => 7,  42 => 4,  39 => 3,  11 => 1,);
    }
}
