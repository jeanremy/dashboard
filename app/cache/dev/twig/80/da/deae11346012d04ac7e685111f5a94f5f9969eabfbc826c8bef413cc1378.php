<?php

/* FlydDashboardBundle:Client:add.html.twig */
class __TwigTemplate_80dadeae11346012d04ac7e685111f5a94f5f9969eabfbc826c8bef413cc1378 extends Twig_Template
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
        echo "    <title>Nouveau client</title>
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
        <h1 class=\"lvl1\">Nouveau client</h1>
    </div>
    

    ";
        // line 21
        echo         $this->env->getExtension('form')->renderer->renderBlock($this->getContext($context, "form"), 'form_start', array("attr" => array("class" => "form-horizontal")));
        echo "

\t";
        // line 23
        if ($this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'errors')) {
            // line 24
            echo "\t<div class=\"row\">
\t\t<div class=\"col-sm-12\">
\t\t\t<div class=\"bloc\">
    \t\t\t";
            // line 27
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'errors');
            echo "
\t\t\t</div>
\t\t</div>
\t</div>
\t";
        }
        // line 32
        echo "
    <div class=\"row\">
        <div class=\"col-sm-12\">
            <div class=\"bloc bloc--general bloc-inline-edition edit\">
                <h2 class=\"bloc__title\">Informations générales</h2>

                <div class=\"form-group\">
                    ";
        // line 39
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "name", array()), 'label', array("label_attr" => array("class" => "control-label"), "label" => "Nom"));
        echo "

                    ";
        // line 41
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "name", array()), 'errors');
        echo "

                  <div class=\"data\">
                    ";
        // line 45
        echo "                    ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "name", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                  </div>
                </div>

                <div class=\"form-group\">
                    ";
        // line 50
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "job", array()), 'label', array("label_attr" => array("class" => "control-label"), "label" => "Métier"));
        echo "

                    ";
        // line 52
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "job", array()), 'errors');
        echo "

                  <div class=\"data\">
                    ";
        // line 56
        echo "                    ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "job", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                  </div>
                </div>

                <div class=\"form-group\">
                    ";
        // line 61
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "entrance", array()), 'label', array("label_attr" => array("class" => "control-label"), "label" => "Date d'entrée"));
        echo "

                    ";
        // line 63
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "entrance", array()), 'errors');
        echo "

                    <div class=\"data\">
                        ";
        // line 67
        echo "                        ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "entrance", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                    </div>
                </div>

                <div class=\"form-group\">
                    
                    <label class=\"control-label\">Origine</label>
                
                    <div class=\"data\">
                         ";
        // line 76
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "origin", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                    </div>
                
                </div>

                <div class=\"form-group\">
                    ";
        // line 82
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "reminder", array()), 'label', array("label_attr" => array("class" => "control-label"), "label" => "Date de relance"));
        echo "

                    ";
        // line 84
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "reminder", array()), 'errors');
        echo "

                    <div class=\"data\">
                        ";
        // line 88
        echo "                        ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "reminder", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                    </div>
                </div>

                <div class=\"form-group\">
                    ";
        // line 93
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "codes", array()), 'label', array("label_attr" => array("class" => "control-label"), "label" => "Codes"));
        echo "

                    ";
        // line 95
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "codes", array()), 'errors');
        echo "

                    <div class=\"data\">
                        ";
        // line 99
        echo "                        ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "codes", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                    </div>
                </div>

                <div class=\"form-group\">
                    ";
        // line 104
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "type", array()), 'label', array("label_attr" => array("class" => "control-label"), "label" => "Type de client"));
        echo "

                    ";
        // line 106
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "type", array()), 'errors');
        echo "

                    <div class=\"data\">
                        ";
        // line 110
        echo "                        ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "type", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                    </div>
                </div>
                ";
        // line 114
        echo "                ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "save", array()), 'widget');
        echo "


                ";
        // line 120
        echo "                ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'rest');
        echo "

                ";
        // line 123
        echo "                ";
        echo         $this->env->getExtension('form')->renderer->renderBlock($this->getContext($context, "form"), 'form_end');
        echo "
            </div>
        </div>
    </div>    

    <!-- Contacts -->
    <div class=\"row\">
        <div class=\"col-sm-12\">
            <div class=\"bloc\">
                <h2 class=\"bloc__title\">Contacts</h2>
                <p>Impossible d'ajouter des fournisseurs pour le moment. Veuillez enregistrer le client.</p>
            </div>
        </div>
    </div>

     <!-- Besoins -->
    <div class=\"row\">
        <div class=\"col-sm-12\">
            <div class=\"bloc needs\">
                <h2 class=\"bloc__title\">Besoins</h2>
                <p>Impossible d'ajouter des fournisseurs pour le moment. Veuillez enregistrer le client.</p>
            </div>    
        </div>
    </div>

";
    }

    // line 150
    public function block_js($context, array $blocks = array())
    {
        // line 151
        echo "    <script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/additems.js"), "html", null, true);
        echo "\"></script>
";
    }

    public function getTemplateName()
    {
        return "FlydDashboardBundle:Client:add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  279 => 151,  276 => 150,  245 => 123,  239 => 120,  232 => 114,  225 => 110,  219 => 106,  214 => 104,  205 => 99,  199 => 95,  194 => 93,  185 => 88,  179 => 84,  174 => 82,  165 => 76,  152 => 67,  146 => 63,  141 => 61,  132 => 56,  126 => 52,  121 => 50,  112 => 45,  106 => 41,  101 => 39,  92 => 32,  84 => 27,  79 => 24,  77 => 23,  72 => 21,  64 => 15,  61 => 14,  53 => 9,  50 => 8,  47 => 7,  42 => 4,  39 => 3,  11 => 1,);
    }
}
