<?php

/* FlydDashboardBundle:Address:add.html.twig */
class __TwigTemplate_078a633a01113d34959a5ea492c752b94c16de622869c924e55acfae2b4b714d extends Twig_Template
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
        echo "<div class=\"row\" id=\"newaddress\">
\t\t\t\t\t\t\t\t
";
        // line 3
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo         $this->env->getExtension('form')->renderer->renderBlock($_form_, 'form_start', array("attr" => array("class" => "form-horizontal", "id" => "flyd_dashboardbundle_address"), "action" => $this->env->getExtension('routing')->getPath("address_ajax_add")));
        echo "


\t";
        // line 6
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        if ($this->env->getExtension('form')->renderer->searchAndRenderBlock($_form_, 'errors')) {
            // line 7
            echo "\t<div class=\"col-sm-12\">
\t\t";
            // line 8
            if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($_form_, 'errors');
            echo "
\t</div>
\t";
        }
        // line 11
        echo "

\t<div class=\"col-sm-12 bloc-inline-edition\">
\t\t<h2 class=\"bloc__title\">Nouvelle adresse</h2>
\t\t<div class=\"row\">
\t\t\t<div class=\"col-sm-6\">
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t";
        // line 18
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($_form_, "street", array()), 'label', array("label_attr" => array("class" => "control-label"), "label" => "Rue"));
        echo "

\t\t\t\t\t";
        // line 20
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($_form_, "street", array()), 'errors');
        echo "

\t\t\t\t\t<div class=\"data\">
\t\t\t\t\t\t";
        // line 23
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($_form_, "street", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t";
        // line 28
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($_form_, "streetComp", array()), 'label', array("label_attr" => array("class" => "control-label"), "label" => "Complément d'adresse"));
        echo "

\t\t\t\t\t";
        // line 30
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($_form_, "streetComp", array()), 'errors');
        echo "

\t\t\t\t\t<div class=\"data\">
\t\t\t\t\t\t";
        // line 33
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($_form_, "streetComp", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t";
        // line 38
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($_form_, "zipcode", array()), 'label', array("label_attr" => array("class" => "control-label"), "label" => "Code postal"));
        echo "

\t\t\t\t\t";
        // line 40
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($_form_, "zipcode", array()), 'errors');
        echo "

\t\t\t\t\t<div class=\"data\">
\t\t\t\t\t\t";
        // line 43
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($_form_, "zipcode", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col-sm-6\">
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t";
        // line 49
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($_form_, "city", array()), 'label', array("label_attr" => array("class" => "control-label"), "label" => "Ville"));
        echo "

\t\t\t\t\t";
        // line 51
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($_form_, "city", array()), 'errors');
        echo "

\t\t\t\t\t<div class=\"data\">
\t\t\t\t\t\t";
        // line 54
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($_form_, "city", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t";
        // line 59
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($_form_, "cityComp", array()), 'label', array("label_attr" => array("class" => "control-label"), "label" => "Complément (Cedex, etc.)"));
        echo "

\t\t\t\t\t";
        // line 61
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($_form_, "cityComp", array()), 'errors');
        echo "

\t\t\t\t\t<div class=\"data\">
\t\t\t\t\t\t";
        // line 64
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($_form_, "cityComp", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t";
        // line 68
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($_form_, "type", array()), 'label', array("label_attr" => array("class" => "control-label"), "label" => "Type d'adresse"));
        echo "

\t\t\t\t\t";
        // line 70
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($_form_, "type", array()), 'errors');
        echo "

\t\t\t\t\t<div class=\"data\">
\t\t\t\t\t\t";
        // line 73
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($_form_, "type", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"data\">
\t\t\t\t\t\t";
        // line 77
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($_form_, "company", array()), 'widget', array("attr" => array("style" => "display: none;")));
        echo "
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"form-group\">
\t\t\t";
        // line 83
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($_form_, "save", array()), 'widget');
        echo "
\t\t</div>
\t</div>



\t";
        // line 90
        echo "

\t";
        // line 95
        echo "\t";
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($_form_, 'rest');
        echo "

\t";
        // line 98
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo         $this->env->getExtension('form')->renderer->renderBlock($_form_, 'form_end');
        echo "
</div>

";
    }

    public function getTemplateName()
    {
        return "FlydDashboardBundle:Address:add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  214 => 98,  207 => 95,  203 => 90,  193 => 83,  183 => 77,  175 => 73,  168 => 70,  162 => 68,  154 => 64,  147 => 61,  141 => 59,  132 => 54,  125 => 51,  119 => 49,  109 => 43,  102 => 40,  96 => 38,  87 => 33,  80 => 30,  74 => 28,  65 => 23,  58 => 20,  52 => 18,  43 => 11,  36 => 8,  33 => 7,  30 => 6,  23 => 3,  19 => 1,);
    }
}
