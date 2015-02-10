<?php

/* FlydDashboardBundle:User:add.html.twig */
class __TwigTemplate_2529b8bf630f4ad513171ccf31caf5631008f2ebf250766cc1c8f415190e6f31 extends Twig_Template
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
        echo "    <title>Ajouter un utilisateur</title>
";
    }

    // line 7
    public function block_top($context, array $blocks = array())
    {
        // line 8
        echo "    <p>
        <span class=\"prev\"><a href=\"";
        // line 9
        echo $this->env->getExtension('routing')->getPath("user_list");
        echo "\">Utilisateurs</a></span>
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
        <h1 class=\"lvl1\">Ajouter un utilisateur</h1>
    </div>

    ";
        // line 20
        echo         $this->env->getExtension('form')->renderer->renderBlock($this->getContext($context, "form"), 'form_start', array("attr" => array("class" => "form-horizontal")));
        echo "

\t";
        // line 22
        if ($this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'errors')) {
            // line 23
            echo "\t<div class=\"row\">
\t\t<div class=\"col-sm-12\">
\t\t\t<div class=\"bloc\">
    \t\t\t";
            // line 26
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'errors');
            echo "
\t\t\t</div>
\t\t</div>
\t</div>
\t";
        }
        // line 31
        echo "
    <div class=\"row\">
        <div class=\"col-sm-12\">
            <div class=\"bloc bloc--general bloc-inline-edition edit\">
                <h2 class=\"bloc__title\">Informations générales</h2>

                <div class=\"form-group\">
                \t";
        // line 38
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "username", array()), 'label', array("label_attr" => array("class" => "control-label"), "label" => "Nom d'utilisateur"));
        echo "

\t\t\t\t\t";
        // line 40
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "username", array()), 'errors');
        echo "

\t\t\t\t\t<div class=\"data\">
\t\t\t\t\t\t";
        // line 44
        echo "\t\t\t\t\t\t";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "username", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t\t\t\t</div>
                </div>

                <div class=\"form-group\">
                \t";
        // line 49
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "job", array()), 'label', array("label_attr" => array("class" => "control-label"), "label" => "Profession"));
        echo "

\t\t\t\t\t";
        // line 51
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "job", array()), 'errors');
        echo "

\t\t\t\t\t<div class=\"data\">
\t\t\t\t\t\t";
        // line 55
        echo "\t\t\t\t\t\t";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "job", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t\t\t\t</div>
                </div>

                <div class=\"form-group\">
                  ";
        // line 60
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "email", array()), 'label', array("label_attr" => array("class" => "control-label"), "label" => "Email"));
        echo "

                  ";
        // line 62
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "email", array()), 'errors');
        echo "

                  <div class=\"data\">
                    ";
        // line 66
        echo "                    ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "email", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                  </div>
                </div>

                <div class=\"form-group\">
                  ";
        // line 71
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getContext($context, "form"), "password", array()), "first", array()), 'label', array("label_attr" => array("class" => "control-label"), "label" => "Mot de passe"));
        echo "

                  ";
        // line 73
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getContext($context, "form"), "password", array()), "first", array()), 'errors');
        echo "

                  <div class=\"data\">
                    ";
        // line 77
        echo "                    ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getContext($context, "form"), "password", array()), "first", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                  </div>
                </div>

                <div class=\"form-group\">
                  ";
        // line 82
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getContext($context, "form"), "password", array()), "second", array()), 'label', array("label_attr" => array("class" => "control-label"), "label" => "Mot de passe (encore)"));
        echo "

                  ";
        // line 84
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getContext($context, "form"), "password", array()), "second", array()), 'errors');
        echo "

                  <div class=\"data\">
                    ";
        // line 88
        echo "                    ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getContext($context, "form"), "password", array()), "second", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                  </div>
                </div>

                <div class=\"form-group\">
                  ";
        // line 93
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "image", array()), 'label', array("label_attr" => array("class" => "control-label"), "label" => "Profil"));
        echo "

                  ";
        // line 95
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "image", array()), 'errors');
        echo "

                  <div class=\"data\">
                    ";
        // line 99
        echo "                    ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "image", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                  </div>
                </div>
              ";
        // line 102
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "save", array()), 'widget');
        echo "
            </div>
        </div>
    </div>
\t


\t";
        // line 112
        echo "\t";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'rest');
        echo "

\t";
        // line 115
        echo "\t";
        echo         $this->env->getExtension('form')->renderer->renderBlock($this->getContext($context, "form"), 'form_end');
        echo "

";
    }

    public function getTemplateName()
    {
        return "FlydDashboardBundle:User:add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  233 => 115,  227 => 112,  217 => 102,  210 => 99,  204 => 95,  199 => 93,  190 => 88,  184 => 84,  179 => 82,  170 => 77,  164 => 73,  159 => 71,  150 => 66,  144 => 62,  139 => 60,  130 => 55,  124 => 51,  119 => 49,  110 => 44,  104 => 40,  99 => 38,  90 => 31,  82 => 26,  77 => 23,  75 => 22,  70 => 20,  63 => 15,  60 => 14,  52 => 9,  49 => 8,  46 => 7,  41 => 4,  38 => 3,  11 => 1,);
    }
}
