<?php

/* FlydDashboardBundle:Need:edit.html.twig */
class __TwigTemplate_e9da99066a0ba663cc5071af126b854577b703353bc8db4f6a107f52921cbc39 extends Twig_Template
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
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("client_show", array("id" => $this->getAttribute($this->getAttribute($this->getContext($context, "entity"), "client", array()), "id", array()))), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "client", array()), "html", null, true);
        echo "</a></span>
        <span class=\"prev\"><a href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("need_show", array("id" => $this->getAttribute($this->getContext($context, "entity"), "id", array()))), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "title", array()), "html", null, true);
        echo "</a></span>
        Edit
    </p>
";
    }

    // line 16
    public function block_body($context, array $blocks = array())
    {
        // line 17
        echo "
    <div class=\"title__container\">
        <h1 class=\"lvl1\">";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "title", array()), "html", null, true);
        echo "</h1>
    </div>
    

    <div class=\"row\">

        ";
        // line 25
        echo         $this->env->getExtension('form')->renderer->renderBlock($this->getContext($context, "form"), 'form_start', array("attr" => array("class" => "form-horizontal", "id" => "flyd_dashboardbundle_need"), "action" => $this->env->getExtension('routing')->getPath("need_edit", array("id" => $this->getAttribute($this->getContext($context, "entity"), "id", array())))));
        echo "


        ";
        // line 28
        if ($this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'errors')) {
            // line 29
            echo "        <div class=\"col-sm-12\">
            ";
            // line 30
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'errors');
            echo "
        </div>
        ";
        }
        // line 33
        echo "        <div class=\"col-sm-12\">
            <div class=\"bloc bloc-inline-edition \">
                <h2 class=\"bloc__title\">Informations générales</h2>
                <div class=\"row\">
                    <div class=\"col-sm-6\">
                        <div class=\"form-group\">
                            ";
        // line 39
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "title", array()), 'label', array("label_attr" => array("class" => "control-label"), "label" => "Titre"));
        echo "

                            ";
        // line 41
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "title", array()), 'errors');
        echo "

                          <div class=\"data\">
                            ";
        // line 45
        echo "                            ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "title", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                          </div>
                        </div>

                        <div class=\"form-group\">
                            ";
        // line 50
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "description", array()), 'label', array("label_attr" => array("class" => "control-label"), "label" => "Description"));
        echo "

                            ";
        // line 52
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "description", array()), 'errors');
        echo "

                            <div class=\"data\">
                                ";
        // line 56
        echo "                                ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "description", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                            </div>
                        </div>
                    </div>
                    <div class=\"col-sm-6\">
                        <div class=\"form-group\">
                            ";
        // line 62
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "startDate", array()), 'label', array("label_attr" => array("class" => "control-label"), "label" => "Date de début"));
        echo "

                            ";
        // line 64
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "startDate", array()), 'errors');
        echo "

                            <div class=\"data\">
                                ";
        // line 68
        echo "                                ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "startDate", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                            </div>
                        </div>
                        <div class=\"form-group\">
                            ";
        // line 72
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "deadline", array()), 'label', array("label_attr" => array("class" => "control-label"), "label" => "Deadline"));
        echo "

                            ";
        // line 74
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "deadline", array()), 'errors');
        echo "

                            <div class=\"data\">
                                ";
        // line 78
        echo "                                ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "deadline", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                            </div>
                        </div>

                        <div class=\"form-group\">
                            ";
        // line 83
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "endDate", array()), 'label', array("label_attr" => array("class" => "control-label"), "label" => "Date de fin"));
        echo "

                            ";
        // line 85
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "endDate", array()), 'errors');
        echo "

                            <div class=\"data\">
                                ";
        // line 89
        echo "                                ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "endDate", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                            </div>
                            ";
        // line 91
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "client", array()), 'widget', array("attr" => array("style" => "display: none;")));
        echo "

                        </div>
                        <a href=\"";
        // line 94
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("need_delete", array("id" => $this->getAttribute($this->getContext($context, "entity"), "id", array()))), "html", null, true);
        echo "\" class=\"btn--delete--reverse\">Delete</a>
                        ";
        // line 95
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "save", array()), 'widget');
        echo "
                    
                    ";
        // line 97
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'rest');
        echo "
                    </div>
                </div>
                
            </div>
        </div>
    ";
        // line 103
        echo         $this->env->getExtension('form')->renderer->renderBlock($this->getContext($context, "form"), 'form_end');
        echo "
    </div>
";
    }

    public function getTemplateName()
    {
        return "FlydDashboardBundle:Need:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  236 => 103,  227 => 97,  222 => 95,  218 => 94,  212 => 91,  206 => 89,  200 => 85,  195 => 83,  186 => 78,  180 => 74,  175 => 72,  167 => 68,  161 => 64,  156 => 62,  146 => 56,  140 => 52,  135 => 50,  126 => 45,  120 => 41,  115 => 39,  107 => 33,  101 => 30,  98 => 29,  96 => 28,  90 => 25,  81 => 19,  77 => 17,  74 => 16,  64 => 11,  58 => 10,  54 => 9,  51 => 8,  48 => 7,  41 => 4,  38 => 3,  11 => 1,);
    }
}
