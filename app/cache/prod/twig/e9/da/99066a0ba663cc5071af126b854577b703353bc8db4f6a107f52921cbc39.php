<?php

/* FlydDashboardBundle:Need:edit.html.twig */
class __TwigTemplate_e9da99066a0ba663cc5071af126b854577b703353bc8db4f6a107f52921cbc39 extends Twig_Template
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
        echo twig_escape_filter($this->env, $this->getAttribute($_entity_, "client", array()), "html", null, true);
        echo " >  ";
        if (isset($context["entity"])) { $_entity_ = $context["entity"]; } else { $_entity_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_entity_, "title", array()), "html", null, true);
        echo "</title>
";
    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        // line 8
        echo "
    <div class=\"title__container\">
        <p class=\"breadcrumb\"><a href=\"";
        // line 10
        if (isset($context["entity"])) { $_entity_ = $context["entity"]; } else { $_entity_ = null; }
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("client_show", array("id" => $this->getAttribute($this->getAttribute($_entity_, "client", array()), "id", array()))), "html", null, true);
        echo "\">";
        if (isset($context["entity"])) { $_entity_ = $context["entity"]; } else { $_entity_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_entity_, "client", array()), "html", null, true);
        echo "</a></p>
        <h1 class=\"lvl1\">";
        // line 11
        if (isset($context["entity"])) { $_entity_ = $context["entity"]; } else { $_entity_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_entity_, "title", array()), "html", null, true);
        echo "</h1>
    </div>
    

    <div class=\"row\">

        ";
        // line 17
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        if (isset($context["entity"])) { $_entity_ = $context["entity"]; } else { $_entity_ = null; }
        echo         $this->env->getExtension('form')->renderer->renderBlock($_form_, 'form_start', array("attr" => array("class" => "form-horizontal", "id" => "flyd_dashboardbundle_need"), "action" => $this->env->getExtension('routing')->getPath("need_edit", array("id" => $this->getAttribute($_entity_, "id", array())))));
        echo "


        ";
        // line 20
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        if ($this->env->getExtension('form')->renderer->searchAndRenderBlock($_form_, 'errors')) {
            // line 21
            echo "        <div class=\"col-sm-12\">
            ";
            // line 22
            if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($_form_, 'errors');
            echo "
        </div>
        ";
        }
        // line 25
        echo "        <div class=\"col-sm-12\">
            <div class=\"bloc bloc-inline-edition \">
                <h2 class=\"bloc__title\">Informations générales</h2>
                <div class=\"row\">
                    <div class=\"col-sm-6\">
                        <div class=\"form-group\">
                            ";
        // line 31
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($_form_, "title", array()), 'label', array("label_attr" => array("class" => "control-label"), "label" => "Titre"));
        echo "

                            ";
        // line 33
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($_form_, "title", array()), 'errors');
        echo "

                          <div class=\"data\">
                            ";
        // line 37
        echo "                            ";
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($_form_, "title", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                          </div>
                        </div>

                        <div class=\"form-group\">
                            ";
        // line 42
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($_form_, "description", array()), 'label', array("label_attr" => array("class" => "control-label"), "label" => "Description"));
        echo "

                            ";
        // line 44
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($_form_, "description", array()), 'errors');
        echo "

                            <div class=\"data\">
                                ";
        // line 48
        echo "                                ";
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($_form_, "description", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                            </div>
                        </div>
                    </div>
                    <div class=\"col-sm-6\">
                        <div class=\"form-group\">
                            ";
        // line 54
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($_form_, "startDate", array()), 'label', array("label_attr" => array("class" => "control-label"), "label" => "Date de début"));
        echo "

                            ";
        // line 56
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($_form_, "startDate", array()), 'errors');
        echo "

                            <div class=\"data\">
                                ";
        // line 60
        echo "                                ";
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($_form_, "startDate", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                            </div>
                        </div>
                        <div class=\"form-group\">
                            ";
        // line 64
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($_form_, "deadline", array()), 'label', array("label_attr" => array("class" => "control-label"), "label" => "Deadline"));
        echo "

                            ";
        // line 66
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($_form_, "deadline", array()), 'errors');
        echo "

                            <div class=\"data\">
                                ";
        // line 70
        echo "                                ";
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($_form_, "deadline", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                            </div>
                        </div>

                        <div class=\"form-group\">
                            ";
        // line 75
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($_form_, "endDate", array()), 'label', array("label_attr" => array("class" => "control-label"), "label" => "Date de fin"));
        echo "

                            ";
        // line 77
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($_form_, "endDate", array()), 'errors');
        echo "

                            <div class=\"data\">
                                ";
        // line 81
        echo "                                ";
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($_form_, "endDate", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                            </div>
                            ";
        // line 83
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($_form_, "client", array()), 'widget', array("attr" => array("style" => "display: none;")));
        echo "

                        </div>
                        <a href=\"";
        // line 86
        if (isset($context["entity"])) { $_entity_ = $context["entity"]; } else { $_entity_ = null; }
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("need_delete", array("id" => $this->getAttribute($_entity_, "id", array()))), "html", null, true);
        echo "\" class=\"btn--delete--reverse\">Delete</a>
                        ";
        // line 87
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($_form_, "save", array()), 'widget');
        echo "
                    
                    ";
        // line 89
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($_form_, 'rest');
        echo "
                    </div>
                </div>
                
            </div>
        </div>
    ";
        // line 95
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo         $this->env->getExtension('form')->renderer->renderBlock($_form_, 'form_end');
        echo "
    </div>
";
    }

    public function getTemplateName()
    {
        return "FlydDashboardBundle:Need:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  245 => 95,  235 => 89,  229 => 87,  224 => 86,  217 => 83,  210 => 81,  203 => 77,  197 => 75,  187 => 70,  180 => 66,  174 => 64,  165 => 60,  158 => 56,  152 => 54,  141 => 48,  134 => 44,  128 => 42,  118 => 37,  111 => 33,  105 => 31,  97 => 25,  90 => 22,  87 => 21,  84 => 20,  76 => 17,  66 => 11,  58 => 10,  54 => 8,  51 => 7,  40 => 4,  37 => 3,  11 => 1,);
    }
}
