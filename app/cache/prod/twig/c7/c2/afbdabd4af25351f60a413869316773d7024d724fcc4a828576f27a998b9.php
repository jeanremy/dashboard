<?php

/* FlydDashboardBundle:Contact:add.html.twig */
class __TwigTemplate_c7c2afbdabd4af25351f60a413869316773d7024d724fcc4a828576f27a998b9 extends Twig_Template
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
        echo "<div class=\"row\" id=\"newcontact\">
                
";
        // line 3
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo         $this->env->getExtension('form')->renderer->renderBlock($_form_, 'form_start', array("attr" => array("class" => "form-horizontal", "id" => "flyd_dashboardbundle_contact"), "action" => $this->env->getExtension('routing')->getPath("contact_ajax_add")));
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

    <div class=\"col-sm-12 bloc-inline-edition\">
        <h2 class=\"bloc__title\">Nouveau contact</h2>
        <div class=\"row\">
          <div class=\"col-sm-6\">

            <div class=\"form-group\">
            \t";
        // line 19
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($_form_, "lastname", array()), 'label', array("label_attr" => array("class" => "control-label"), "label" => "Nom"));
        echo "

        \t\t\t";
        // line 21
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($_form_, "lastname", array()), 'errors');
        echo "

        \t\t\t<div class=\"data\">
        \t\t\t\t";
        // line 24
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($_form_, "lastname", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
        \t\t\t</div>
            </div>
            
            <div class=\"form-group\">
              ";
        // line 29
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($_form_, "firstname", array()), 'label', array("label_attr" => array("class" => "control-label"), "label" => "Prénom"));
        echo "

              ";
        // line 31
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($_form_, "firstname", array()), 'errors');
        echo "

              <div class=\"data\">
                ";
        // line 34
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($_form_, "firstname", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
              </div>
            </div>

            <div class=\"form-group\">
              ";
        // line 39
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($_form_, "job", array()), 'label', array("label_attr" => array("class" => "control-label"), "label" => "Emploi"));
        echo "

              ";
        // line 41
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($_form_, "job", array()), 'errors');
        echo "

              <div class=\"data\">
                ";
        // line 44
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($_form_, "job", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
              </div>
            </div>
          </div>
          
          <div class=\"col-sm-6\">

            <div class=\"form-group\">
              ";
        // line 52
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($_form_, "email", array()), 'label', array("label_attr" => array("class" => "control-label"), "label" => "Email"));
        echo "

              ";
        // line 54
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($_form_, "email", array()), 'errors');
        echo "

              <div class=\"data\">
                ";
        // line 57
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($_form_, "email", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
              </div>
            </div>

            <div class=\"form-group\">
              ";
        // line 62
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($_form_, "phone", array()), 'label', array("label_attr" => array("class" => "control-label"), "label" => "Téléphone"));
        echo "

              ";
        // line 64
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($_form_, "phone", array()), 'errors');
        echo "

              <div class=\"data\">
                ";
        // line 67
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($_form_, "phone", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
              </div>
            </div>
    \t\t    <div class=\"form-group\">
              ";
        // line 71
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($_form_, "mobile", array()), 'label', array("label_attr" => array("class" => "control-label"), "label" => "Téléphone portable"));
        echo "

              ";
        // line 73
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($_form_, "mobile", array()), 'errors');
        echo "

              <div class=\"data\">
                ";
        // line 76
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($_form_, "mobile", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
              </div>
              <div class=\"data\">
                ";
        // line 79
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($_form_, "company", array()), 'widget', array("attr" => array("style" => "display: none;")));
        echo "
              </div>
            </div>
            
          </div>
        </div>

        <div class=\"form-group\">
        \t";
        // line 87
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($_form_, "save", array()), 'widget');
        echo "
        </div>

    </div>



\t";
        // line 95
        echo "

\t";
        // line 100
        echo "\t";
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($_form_, 'rest');
        echo "

\t";
        // line 103
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo         $this->env->getExtension('form')->renderer->renderBlock($_form_, 'form_end');
        echo "
</div>

";
    }

    public function getTemplateName()
    {
        return "FlydDashboardBundle:Contact:add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  219 => 103,  212 => 100,  208 => 95,  197 => 87,  185 => 79,  178 => 76,  171 => 73,  165 => 71,  157 => 67,  150 => 64,  144 => 62,  135 => 57,  128 => 54,  122 => 52,  110 => 44,  103 => 41,  97 => 39,  88 => 34,  81 => 31,  75 => 29,  66 => 24,  59 => 21,  53 => 19,  43 => 11,  36 => 8,  33 => 7,  30 => 6,  23 => 3,  19 => 1,);
    }
}
