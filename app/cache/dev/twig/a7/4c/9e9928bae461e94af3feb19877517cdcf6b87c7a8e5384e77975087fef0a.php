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
        echo         $this->env->getExtension('form')->renderer->renderBlock($this->getContext($context, "form"), 'form_start', array("attr" => array("class" => "form-horizontal", "id" => "flyd_dashboardbundle_need"), "action" => $this->env->getExtension('routing')->getPath("need_ajax_add")));
        echo "


    ";
        // line 6
        if ($this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'errors')) {
            // line 7
            echo "    <div class=\"col-sm-12\">
        ";
            // line 8
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'errors');
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
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "title", array()), 'label', array("label_attr" => array("class" => "control-label"), "label" => "Titre"));
        echo "

                    ";
        // line 18
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "title", array()), 'errors');
        echo "

                  <div class=\"data\">
                    ";
        // line 22
        echo "                    ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "title", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                  </div>
                </div>

                <div class=\"form-group\">
                    ";
        // line 27
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "description", array()), 'label', array("label_attr" => array("class" => "control-label"), "label" => "Description"));
        echo "

                    ";
        // line 29
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "description", array()), 'errors');
        echo "

                    <div class=\"data\">
                        ";
        // line 33
        echo "                        ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "description", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                    </div>
                </div>
            </div>
            <div class=\"col-sm-6\">
                <div class=\"form-group\">
                    ";
        // line 39
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "startDate", array()), 'label', array("label_attr" => array("class" => "control-label"), "label" => "Date de début"));
        echo "

                    ";
        // line 41
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "startDate", array()), 'errors');
        echo "

                    <div class=\"data\">
                        ";
        // line 45
        echo "                        ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "startDate", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                    </div>
                </div>
                <div class=\"form-group\">
                    ";
        // line 49
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "deadline", array()), 'label', array("label_attr" => array("class" => "control-label"), "label" => "Deadline"));
        echo "

                    ";
        // line 51
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "deadline", array()), 'errors');
        echo "

                    <div class=\"data\">
                        ";
        // line 55
        echo "                        ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "deadline", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                    </div>
                </div>

                <div class=\"form-group\">
                    ";
        // line 60
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "endDate", array()), 'label', array("label_attr" => array("class" => "control-label"), "label" => "Date de fin"));
        echo "

                    ";
        // line 62
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "endDate", array()), 'errors');
        echo "

                    <div class=\"data\">
                        ";
        // line 66
        echo "                        ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "endDate", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                    </div>
                    ";
        // line 68
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "client", array()), 'widget', array("attr" => array("style" => "display: none;")));
        echo "

                </div>
            
            ";
        // line 72
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'rest');
        echo "
            </div>
        </div>
        ";
        // line 75
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "save", array()), 'widget');
        echo "
    </div>
";
        // line 77
        echo         $this->env->getExtension('form')->renderer->renderBlock($this->getContext($context, "form"), 'form_end');
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
        return array (  162 => 77,  157 => 75,  151 => 72,  144 => 68,  138 => 66,  132 => 62,  127 => 60,  118 => 55,  112 => 51,  107 => 49,  99 => 45,  93 => 41,  88 => 39,  78 => 33,  72 => 29,  67 => 27,  58 => 22,  52 => 18,  47 => 16,  40 => 11,  34 => 8,  31 => 7,  29 => 6,  23 => 3,  19 => 1,);
    }
}
