<?php

/* FlydDashboardBundle:ProjectCanvas:add.html.twig */
class __TwigTemplate_acb876b8beb897d09f7aedc71aa49e88f798182fd163bbca524971c7ef985aa7 extends Twig_Template
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
        echo "    <title>Nouveau canevas de projet</title>
";
    }

    // line 7
    public function block_top($context, array $blocks = array())
    {
        // line 8
        echo "    <p>
        <span class=\"prev\"><a href=\"";
        // line 9
        echo $this->env->getExtension('routing')->getPath("projectcanvas_list");
        echo "\">Canevas de projet</a></span>
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
        <h1 class=\"lvl1\">Nouveau canevas de projet</h1>
    </div>

    ";
        // line 20
        echo         $this->env->getExtension('form')->renderer->renderBlock($this->getContext($context, "form"), 'form_start', array("attr" => array("class" => "form-horizontal")));
        echo "

    ";
        // line 22
        if ($this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'errors')) {
            // line 23
            echo "    <div class=\"row\">
        <div class=\"col-sm-12\">
            <div class=\"bloc\">
                ";
            // line 26
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'errors');
            echo "
            </div>
        </div>
    </div>
    ";
        }
        // line 31
        echo "
    <div class=\"row\">
        <div class=\"col-sm-12\">
            <div class=\"bloc bloc-inline-edition\">
                <h2 class=\"bloc__title\">Informations générales</h2>

                <div class=\"form-group\">
                    ";
        // line 38
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "name", array()), 'label', array("label_attr" => array("class" => "control-label"), "label" => "Nom du canevas"));
        echo "

                    ";
        // line 40
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "name", array()), 'errors');
        echo "

                  <div class=\"data\">
                    ";
        // line 44
        echo "                    ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "name", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                  </div>
                </div>

               
                
                ";
        // line 51
        echo "                ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "save", array()), 'widget');
        echo "


                ";
        // line 57
        echo "                ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'rest');
        echo "

                ";
        // line 60
        echo "                ";
        echo         $this->env->getExtension('form')->renderer->renderBlock($this->getContext($context, "form"), 'form_end');
        echo "
            </div>
        </div>
        <div class=\"col-sm-12\">
            <div class=\"bloc bloc-inline-edition\">
                  <h2 class=\"bloc__title\">Tâches prédéfinies</h2>
                  <p>Impossible d'ajouter des tâches pour le moment. Veuillez enregistrer le canevas de projet.</p>
            </div>
        </div>
    </div>
    

";
    }

    public function getTemplateName()
    {
        return "FlydDashboardBundle:ProjectCanvas:add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  133 => 60,  127 => 57,  120 => 51,  110 => 44,  104 => 40,  99 => 38,  90 => 31,  82 => 26,  77 => 23,  75 => 22,  70 => 20,  63 => 15,  60 => 14,  52 => 9,  49 => 8,  46 => 7,  41 => 4,  38 => 3,  11 => 1,);
    }
}
