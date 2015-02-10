<?php

/* FlydDashboardBundle:Project:add.html.twig */
class __TwigTemplate_f88e762a818325509e45b9b160e437516770e1bd64ab6ee99defbf0086878b42 extends Twig_Template
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
        echo "    <title>Nouveau projet</title>
";
    }

    // line 7
    public function block_top($context, array $blocks = array())
    {
        // line 8
        echo "    <p>
        <span class=\"prev\"><a href=\"";
        // line 9
        echo $this->env->getExtension('routing')->getPath("project_list");
        echo "\">Projets</a></span>
        Ajouter
    </p>
";
    }

    // line 14
    public function block_body($context, array $blocks = array())
    {
        // line 15
        echo "
    <div class=\"title__container\">    
        <p class=\"breadcrumb\">
           <a href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("client_show", array("id" => $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "entity"), "need", array()), "client", array()), "id", array()))), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "entity"), "need", array()), "client", array()), "html", null, true);
        echo " ></a>
           <a href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("need_show", array("id" => $this->getAttribute($this->getAttribute($this->getContext($context, "entity"), "need", array()), "id", array()))), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "need", array()), "html", null, true);
        echo "</a>
        </p>
        <h1 class=\"lvl1\">Nouveau projet</h1>
    </div>

    ";
        // line 24
        echo         $this->env->getExtension('form')->renderer->renderBlock($this->getContext($context, "form"), 'form_start', array("attr" => array("class" => "form-horizontal")));
        echo "

\t";
        // line 26
        if ($this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'errors')) {
            // line 27
            echo "\t<div class=\"row\">
\t\t<div class=\"col-sm-12\">
\t\t\t<div class=\"bloc\">
    \t\t\t";
            // line 30
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'errors');
            echo "
\t\t\t</div>
\t\t</div>
\t</div>
\t";
        }
        // line 35
        echo "
    <div class=\"row\">
        <div class=\"col-sm-8\">
            <div class=\"bloc bloc-inline-edition\">
                <h2 class=\"bloc__title\">Informations générales</h2>

                <div class=\"form-group\">
                    ";
        // line 42
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "title", array()), 'label', array("label_attr" => array("class" => "control-label"), "label" => "Titre du projet"));
        echo "

                    ";
        // line 44
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "title", array()), 'errors');
        echo "

                  <div class=\"data\">
                    ";
        // line 48
        echo "                    ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "title", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                  </div>
                </div>

                <div class=\"form-group\">
                    ";
        // line 53
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "category", array()), 'label', array("label_attr" => array("class" => "control-label"), "label" => "Catégorie"));
        echo "

                    ";
        // line 55
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "category", array()), 'errors');
        echo "

                    <div class=\"data\">
                        ";
        // line 59
        echo "                        ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "category", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                    </div>
                </div>

                <div class=\"form-group\">
                    ";
        // line 64
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "startDate", array()), 'label', array("label_attr" => array("class" => "control-label"), "label" => "Date de début"));
        echo "

                    ";
        // line 66
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "startDate", array()), 'errors');
        echo "

                    <div class=\"data\">
                        ";
        // line 70
        echo "                        ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "startDate", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                    </div>
                </div>

                <div class=\"form-group\">
                    ";
        // line 75
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "deadline", array()), 'label', array("label_attr" => array("class" => "control-label"), "label" => "Deadline"));
        echo "

                    ";
        // line 77
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "deadline", array()), 'errors');
        echo "

                    <div class=\"data\">
                        ";
        // line 81
        echo "                        ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "deadline", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                    </div>
                </div>

                <div class=\"form-group\">
                    ";
        // line 86
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "endDate", array()), 'label', array("label_attr" => array("class" => "control-label"), "label" => "Date de fin"));
        echo "

                    ";
        // line 88
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "endDate", array()), 'errors');
        echo "

                    <div class=\"data\">
                        ";
        // line 92
        echo "                        ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "endDate", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                    </div>
                </div>
                
                <div class=\"form-group\">
                    ";
        // line 97
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "project_canvas", array()), 'label', array("label_attr" => array("class" => "control-label"), "label" => "Canevas"));
        echo "

                    ";
        // line 99
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "project_canvas", array()), 'errors');
        echo "

                    <div class=\"data\">
                        ";
        // line 103
        echo "                        ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "project_canvas", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                    </div>
                </div>

                ";
        // line 108
        echo "                ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "save", array()), 'widget');
        echo "


                ";
        // line 114
        echo "                ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'rest');
        echo "

                ";
        // line 117
        echo "                ";
        echo         $this->env->getExtension('form')->renderer->renderBlock($this->getContext($context, "form"), 'form_end');
        echo "
            </div>
            <div class=\"bloc\">
                <h2 class=\"bloc__title\">Fournisseurs</h2>
                <p>Impossible d'ajouter des fournisseurs pour le moment. Veuillez enregistrer le projet.</p>                
            </div>
        </div>
        <div class=\"col-sm-4\">
            <div class=\"bloc\">
                <h2 class=\"bloc__title\">équipe</h2>
                <p>Impossible d'ajouter des membres pour le moment. Veuillez enregistrer le projet.</p>
            </div>
        </div>
    </div>
    

";
    }

    public function getTemplateName()
    {
        return "FlydDashboardBundle:Project:add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  245 => 117,  239 => 114,  232 => 108,  224 => 103,  218 => 99,  213 => 97,  204 => 92,  198 => 88,  193 => 86,  184 => 81,  178 => 77,  173 => 75,  164 => 70,  158 => 66,  153 => 64,  144 => 59,  138 => 55,  133 => 53,  124 => 48,  118 => 44,  113 => 42,  104 => 35,  96 => 30,  91 => 27,  89 => 26,  84 => 24,  74 => 19,  68 => 18,  63 => 15,  60 => 14,  52 => 9,  49 => 8,  46 => 7,  41 => 4,  38 => 3,  11 => 1,);
    }
}
