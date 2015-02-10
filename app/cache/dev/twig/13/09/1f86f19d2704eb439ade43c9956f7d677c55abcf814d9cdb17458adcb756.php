<?php

/* FlydDashboardBundle:User:edit.html.twig */
class __TwigTemplate_13091f86f19d2704eb439ade43c9956f7d677c55abcf814d9cdb17458adcb756 extends Twig_Template
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
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "username", array()), "html", null, true);
        echo " - Edit </title>
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
        <span class=\"prev\"><a href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("user_list", array("id" => $this->getAttribute($this->getContext($context, "entity"), "id", array()))), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "username", array()), "html", null, true);
        echo "</a></span>
        Edit
    </p>
";
    }

    // line 15
    public function block_body($context, array $blocks = array())
    {
        // line 16
        echo "    
    <div class=\"title__container\">
      <h1 class=\"lvl1\">";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "username", array()), "html", null, true);
        echo "</h1>
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
                \t";
        // line 39
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "username", array()), 'label', array("label_attr" => array("class" => "control-label"), "label" => "Nom d'utilisateur"));
        echo "

        \t\t\t\t\t";
        // line 41
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "username", array()), 'errors');
        echo "

        \t\t\t\t\t<div class=\"data\">
        \t\t\t\t\t\t";
        // line 45
        echo "        \t\t\t\t\t\t";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "username", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
        \t\t\t\t\t</div>
                </div>

                <div class=\"form-group\">
                \t";
        // line 50
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "job", array()), 'label', array("label_attr" => array("class" => "control-label"), "label" => "Profession"));
        echo "

        \t\t\t\t\t";
        // line 52
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "job", array()), 'errors');
        echo "

        \t\t\t\t\t<div class=\"data\">
        \t\t\t\t\t\t";
        // line 56
        echo "        \t\t\t\t\t\t";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "job", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
        \t\t\t\t\t</div>
                </div>

                <div class=\"form-group\">
                  ";
        // line 61
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "email", array()), 'label', array("label_attr" => array("class" => "control-label"), "label" => "Email"));
        echo "

                  ";
        // line 63
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "email", array()), 'errors');
        echo "

                  <div class=\"data\">
                    ";
        // line 67
        echo "                    ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "email", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                  </div>
                </div>

                <div class=\"form-group\">
                  ";
        // line 72
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getContext($context, "form"), "password", array()), "first", array()), 'label', array("label_attr" => array("class" => "control-label"), "label" => "Mot de passe"));
        echo "

                  ";
        // line 74
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getContext($context, "form"), "password", array()), "first", array()), 'errors');
        echo "

                  <div class=\"data\">
                    ";
        // line 78
        echo "                    ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getContext($context, "form"), "password", array()), "first", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                  </div>
                </div>

                <div class=\"form-group\">
                  ";
        // line 83
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getContext($context, "form"), "password", array()), "second", array()), 'label', array("label_attr" => array("class" => "control-label"), "label" => "Mot de passe (encore)"));
        echo "

                  ";
        // line 85
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getContext($context, "form"), "password", array()), "second", array()), 'errors');
        echo "

                  <div class=\"data\">
                    ";
        // line 89
        echo "                    ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getContext($context, "form"), "password", array()), "second", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                  </div>
                </div>

                <div class=\"form-group\">
                  ";
        // line 94
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getContext($context, "form"), "image", array()), "file", array()), 'label', array("label_attr" => array("class" => "control-label"), "label" => "Profil"));
        echo "

                  ";
        // line 96
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getContext($context, "form"), "image", array()), "file", array()), 'errors');
        echo "

                  <div class=\"data\">
                    ";
        // line 100
        echo "                    ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getContext($context, "form"), "image", array()), "file", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                  </div>
                </div>

\t       ";
        // line 104
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "save", array()), 'widget');
        echo "
            </div>
        </div>
    </div>



  ";
        // line 112
        echo "

\t";
        // line 117
        echo "\t";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'rest');
        echo "

\t";
        // line 120
        echo "\t";
        echo         $this->env->getExtension('form')->renderer->renderBlock($this->getContext($context, "form"), 'form_end');
        echo "

";
    }

    public function getTemplateName()
    {
        return "FlydDashboardBundle:User:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  249 => 120,  243 => 117,  239 => 112,  229 => 104,  221 => 100,  215 => 96,  210 => 94,  201 => 89,  195 => 85,  190 => 83,  181 => 78,  175 => 74,  170 => 72,  161 => 67,  155 => 63,  150 => 61,  141 => 56,  135 => 52,  130 => 50,  121 => 45,  115 => 41,  110 => 39,  101 => 32,  93 => 27,  88 => 24,  86 => 23,  81 => 21,  75 => 18,  71 => 16,  68 => 15,  58 => 10,  54 => 9,  51 => 8,  48 => 7,  41 => 4,  38 => 3,  11 => 1,);
    }
}
