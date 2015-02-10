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
        if (isset($context["entity"])) { $_entity_ = $context["entity"]; } else { $_entity_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_entity_, "username", array()), "html", null, true);
        echo " - Edit </title>
";
    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        // line 8
        echo "    
    <div class=\"title__container\">
      <h1 class=\"lvl1\">";
        // line 10
        if (isset($context["entity"])) { $_entity_ = $context["entity"]; } else { $_entity_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_entity_, "username", array()), "html", null, true);
        echo "</h1>
    </div>

    ";
        // line 13
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo         $this->env->getExtension('form')->renderer->renderBlock($_form_, 'form_start', array("attr" => array("class" => "form-horizontal")));
        echo "

\t";
        // line 15
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        if ($this->env->getExtension('form')->renderer->searchAndRenderBlock($_form_, 'errors')) {
            // line 16
            echo "\t<div class=\"row\">
\t\t<div class=\"col-sm-12\">
\t\t\t<div class=\"bloc\">
    \t\t\t";
            // line 19
            if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($_form_, 'errors');
            echo "
\t\t\t</div>
\t\t</div>
\t</div>
\t";
        }
        // line 24
        echo "
    <div class=\"row\">
        <div class=\"col-sm-12\">
            <div class=\"bloc bloc--general bloc-inline-edition edit\">
                <h2 class=\"bloc__title\">Informations générales</h2>

                <div class=\"form-group\">
                \t";
        // line 31
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($_form_, "username", array()), 'label', array("label_attr" => array("class" => "control-label"), "label" => "Nom d'utilisateur"));
        echo "

        \t\t\t\t\t";
        // line 33
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($_form_, "username", array()), 'errors');
        echo "

        \t\t\t\t\t<div class=\"data\">
        \t\t\t\t\t\t";
        // line 37
        echo "        \t\t\t\t\t\t";
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($_form_, "username", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
        \t\t\t\t\t</div>
                </div>

                <div class=\"form-group\">
                \t";
        // line 42
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($_form_, "job", array()), 'label', array("label_attr" => array("class" => "control-label"), "label" => "Profession"));
        echo "

        \t\t\t\t\t";
        // line 44
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($_form_, "job", array()), 'errors');
        echo "

        \t\t\t\t\t<div class=\"data\">
        \t\t\t\t\t\t";
        // line 48
        echo "        \t\t\t\t\t\t";
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($_form_, "job", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
        \t\t\t\t\t</div>
                </div>

                <div class=\"form-group\">
                  ";
        // line 53
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($_form_, "email", array()), 'label', array("label_attr" => array("class" => "control-label"), "label" => "Email"));
        echo "

                  ";
        // line 55
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($_form_, "email", array()), 'errors');
        echo "

                  <div class=\"data\">
                    ";
        // line 59
        echo "                    ";
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($_form_, "email", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                  </div>
                </div>

                <div class=\"form-group\">
                  ";
        // line 64
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($_form_, "password", array()), "first", array()), 'label', array("label_attr" => array("class" => "control-label"), "label" => "Mot de passe"));
        echo "

                  ";
        // line 66
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($_form_, "password", array()), "first", array()), 'errors');
        echo "

                  <div class=\"data\">
                    ";
        // line 70
        echo "                    ";
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($_form_, "password", array()), "first", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                  </div>
                </div>

                <div class=\"form-group\">
                  ";
        // line 75
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($_form_, "password", array()), "second", array()), 'label', array("label_attr" => array("class" => "control-label"), "label" => "Mot de passe (encore)"));
        echo "

                  ";
        // line 77
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($_form_, "password", array()), "second", array()), 'errors');
        echo "

                  <div class=\"data\">
                    ";
        // line 81
        echo "                    ";
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($_form_, "password", array()), "second", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                  </div>
                </div>

                <div class=\"form-group\">
                  ";
        // line 86
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($_form_, "image", array()), "file", array()), 'label', array("label_attr" => array("class" => "control-label"), "label" => "Profil"));
        echo "

                  ";
        // line 88
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($_form_, "image", array()), "file", array()), 'errors');
        echo "

                  <div class=\"data\">
                    ";
        // line 92
        echo "                    ";
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($_form_, "image", array()), "file", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                  </div>
                </div>

\t       ";
        // line 96
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($_form_, "save", array()), 'widget');
        echo "
            </div>
        </div>
    </div>



  ";
        // line 104
        echo "

\t";
        // line 109
        echo "\t";
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($_form_, 'rest');
        echo "

\t";
        // line 112
        echo "\t";
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo         $this->env->getExtension('form')->renderer->renderBlock($_form_, 'form_end');
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
        return array (  253 => 112,  246 => 109,  242 => 104,  231 => 96,  222 => 92,  215 => 88,  209 => 86,  199 => 81,  192 => 77,  186 => 75,  176 => 70,  169 => 66,  163 => 64,  153 => 59,  146 => 55,  140 => 53,  130 => 48,  123 => 44,  117 => 42,  107 => 37,  100 => 33,  94 => 31,  85 => 24,  76 => 19,  71 => 16,  68 => 15,  62 => 13,  55 => 10,  51 => 8,  48 => 7,  40 => 4,  37 => 3,  11 => 1,);
    }
}
