<?php

/* FlydDashboardBundle:Need:ajaxadd.html.twig */
class __TwigTemplate_a74c9e9928bae461e94af3feb19877517cdcf6b87c7a8e5384e77975087fef0a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<div class=\"row\">

    ";
        // line 3
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo         $this->env->getExtension('form')->renderer->renderBlock($_form_, 'form_start', array("attr" => array("class" => "form-horizontal", "id" => "flyd_dashboardbundle_need"), "action" => $this->env->getExtension('routing')->getPath("need_ajax_add")));
        echo "


    ";
        // line 6
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        if ($this->env->getExtension('form')->renderer->searchAndRenderBlock($_form_, 'errors')) {
            // line 7
            echo "    <div class=\"col-sm-12\">
        ";
            // line 8
            if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($_form_, 'errors');
            echo "
    </div>
    ";
        }
        // line 11
        echo "    <div class=\"col-sm-12 bloc-inline-edition edit\">
        <h2 class=\"bloc__title\">Informations générales</h2>
        <div class=\"row\">
            <div class=\"col-sm-6\">
                <div class=\"form-group\">
                    ";
        // line 16
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($_form_, "title", array()), 'label', array("label_attr" => array("class" => "control-label"), "label" => "Titre"));
        echo "

                    ";
        // line 18
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($_form_, "title", array()), 'errors');
        echo "

                  <div class=\"data\">
                    ";
        // line 22
        echo "                    ";
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($_form_, "title", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                  </div>
                </div>

                <div class=\"form-group\">
                    ";
        // line 27
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($_form_, "description", array()), 'label', array("label_attr" => array("class" => "control-label"), "label" => "Description"));
        echo "

                    ";
        // line 29
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($_form_, "description", array()), 'errors');
        echo "

                    <div class=\"data\">
                        ";
        // line 33
        echo "                        ";
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($_form_, "description", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                    </div>
                </div>
            </div>
            <div class=\"col-sm-6\">
                <div class=\"form-group\">
                    ";
        // line 39
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($_form_, "startDate", array()), 'label', array("label_attr" => array("class" => "control-label"), "label" => "Date de début"));
        echo "

                    ";
        // line 41
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($_form_, "startDate", array()), 'errors');
        echo "

                    <div class=\"data\">
                        ";
        // line 45
        echo "                        ";
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($_form_, "startDate", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                    </div>
                </div>
                <div class=\"form-group\">
                    ";
        // line 49
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($_form_, "deadline", array()), 'label', array("label_attr" => array("class" => "control-label"), "label" => "Deadline"));
        echo "

                    ";
        // line 51
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($_form_, "deadline", array()), 'errors');
        echo "

                    <div class=\"data\">
                        ";
        // line 55
        echo "                        ";
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($_form_, "deadline", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                    </div>
                </div>

                <div class=\"form-group\">
                    ";
        // line 60
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($_form_, "endDate", array()), 'label', array("label_attr" => array("class" => "control-label"), "label" => "Date de fin"));
        echo "

                    ";
        // line 62
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($_form_, "endDate", array()), 'errors');
        echo "

                    <div class=\"data\">
                        ";
        // line 66
        echo "                        ";
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($_form_, "endDate", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                    </div>
                    ";
        // line 68
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($_form_, "client", array()), 'widget', array("attr" => array("style" => "display: none;")));
        echo "

                </div>
            
            ";
        // line 72
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($_form_, 'rest');
        echo "
            </div>
        </div>
        ";
        // line 75
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($_form_, "save", array()), 'widget');
        echo "
    </div>
";
        // line 77
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo         $this->env->getExtension('form')->renderer->renderBlock($_form_, 'form_end');
        echo "
</div>";
    }

    public function getTemplateName()
    {
        return "FlydDashboardBundle:Need:ajaxadd.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  183 => 77,  177 => 75,  170 => 72,  162 => 68,  155 => 66,  148 => 62,  142 => 60,  132 => 55,  125 => 51,  119 => 49,  110 => 45,  103 => 41,  97 => 39,  86 => 33,  79 => 29,  73 => 27,  63 => 22,  56 => 18,  50 => 16,  43 => 11,  36 => 8,  33 => 7,  30 => 6,  23 => 3,  19 => 1,);
    }
}
