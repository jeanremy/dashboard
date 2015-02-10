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
        echo         $this->env->getExtension('form')->renderer->renderBlock($this->getContext($context, "form"), 'form_start', array("attr" => array("class" => "form-horizontal", "id" => "flyd_dashboardbundle_address"), "action" => $this->env->getExtension('routing')->getPath("address_ajax_add")));
        echo "


\t";
        // line 6
        if ($this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'errors')) {
            // line 7
            echo "\t<div class=\"col-sm-12\">
\t\t";
            // line 8
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'errors');
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
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "street", array()), 'label', array("label_attr" => array("class" => "control-label"), "label" => "Rue"));
        echo "

\t\t\t\t\t";
        // line 20
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "street", array()), 'errors');
        echo "

\t\t\t\t\t<div class=\"data\">
\t\t\t\t\t\t";
        // line 23
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "street", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t";
        // line 28
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "streetComp", array()), 'label', array("label_attr" => array("class" => "control-label"), "label" => "Complément d'adresse"));
        echo "

\t\t\t\t\t";
        // line 30
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "streetComp", array()), 'errors');
        echo "

\t\t\t\t\t<div class=\"data\">
\t\t\t\t\t\t";
        // line 33
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "streetComp", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t";
        // line 38
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "zipcode", array()), 'label', array("label_attr" => array("class" => "control-label"), "label" => "Code postal"));
        echo "

\t\t\t\t\t";
        // line 40
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "zipcode", array()), 'errors');
        echo "

\t\t\t\t\t<div class=\"data\">
\t\t\t\t\t\t";
        // line 43
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "zipcode", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col-sm-6\">
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t";
        // line 49
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "city", array()), 'label', array("label_attr" => array("class" => "control-label"), "label" => "Ville"));
        echo "

\t\t\t\t\t";
        // line 51
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "city", array()), 'errors');
        echo "

\t\t\t\t\t<div class=\"data\">
\t\t\t\t\t\t";
        // line 54
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "city", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t";
        // line 59
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "cityComp", array()), 'label', array("label_attr" => array("class" => "control-label"), "label" => "Complément (Cedex, etc.)"));
        echo "

\t\t\t\t\t";
        // line 61
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "cityComp", array()), 'errors');
        echo "

\t\t\t\t\t<div class=\"data\">
\t\t\t\t\t\t";
        // line 64
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "cityComp", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t";
        // line 68
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "type", array()), 'label', array("label_attr" => array("class" => "control-label"), "label" => "Type d'adresse"));
        echo "

\t\t\t\t\t";
        // line 70
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "type", array()), 'errors');
        echo "

\t\t\t\t\t<div class=\"data\">
\t\t\t\t\t\t";
        // line 73
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "type", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"data\">
\t\t\t\t\t\t";
        // line 77
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "company", array()), 'widget', array("attr" => array("style" => "display: none;")));
        echo "
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"form-group\">
\t\t\t";
        // line 83
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "save", array()), 'widget');
        echo "
\t\t</div>
\t</div>



\t";
        // line 90
        echo "

\t";
        // line 95
        echo "\t";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'rest');
        echo "

\t";
        // line 98
        echo         $this->env->getExtension('form')->renderer->renderBlock($this->getContext($context, "form"), 'form_end');
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
        return array (  190 => 98,  184 => 95,  180 => 90,  171 => 83,  162 => 77,  155 => 73,  149 => 70,  144 => 68,  137 => 64,  131 => 61,  126 => 59,  118 => 54,  112 => 51,  107 => 49,  98 => 43,  92 => 40,  87 => 38,  79 => 33,  73 => 30,  68 => 28,  60 => 23,  54 => 20,  49 => 18,  40 => 11,  34 => 8,  31 => 7,  29 => 6,  23 => 3,  19 => 1,);
    }
}
