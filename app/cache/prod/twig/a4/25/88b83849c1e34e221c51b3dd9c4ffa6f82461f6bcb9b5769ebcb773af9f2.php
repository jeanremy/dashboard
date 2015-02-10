<?php

/* FlydDashboardBundle:Client:edit.html.twig */
class __TwigTemplate_a42588b83849c1e34e221c51b3dd9c4ffa6f82461f6bcb9b5769ebcb773af9f2 extends Twig_Template
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
            'js' => array($this, 'block_js'),
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
        echo twig_escape_filter($this->env, $this->getAttribute($_entity_, "name", array()), "html", null, true);
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
        echo twig_escape_filter($this->env, $this->getAttribute($_entity_, "name", array()), "html", null, true);
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
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($_form_, "name", array()), 'label', array("label_attr" => array("class" => "control-label"), "label" => "Nom"));
        echo "

                  ";
        // line 33
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($_form_, "name", array()), 'errors');
        echo "

                  <div class=\"data\">
                  \t";
        // line 37
        echo "                  \t";
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($_form_, "name", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                  </div>
                </div>

                <div class=\"form-group\">
                    ";
        // line 42
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($_form_, "job", array()), 'label', array("label_attr" => array("class" => "control-label"), "label" => "Métier"));
        echo "

                  ";
        // line 44
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($_form_, "job", array()), 'errors');
        echo "

                  <div class=\"data\">
                    ";
        // line 48
        echo "                    ";
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($_form_, "job", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                  </div>
                </div>

                <div class=\"form-group\">
                \t";
        // line 53
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($_form_, "entrance", array()), 'label', array("label_attr" => array("class" => "control-label"), "label" => "Date d'entrée"));
        echo "

        \t\t\t\t\t";
        // line 55
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($_form_, "entrance", array()), 'errors');
        echo "

        \t\t\t\t\t<div class=\"data\">
        \t\t\t\t\t\t";
        // line 59
        echo "        \t\t\t\t\t\t";
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($_form_, "entrance", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
        \t\t\t\t\t</div>
                </div>

                <div class=\"form-group\">
                  ";
        // line 64
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($_form_, "origin", array()), 'label', array("label_attr" => array("class" => "control-label"), "label" => "Origine"));
        echo "

                  ";
        // line 66
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($_form_, "origin", array()), 'errors');
        echo "

                  <div class=\"data\">
                    ";
        // line 70
        echo "                    ";
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($_form_, "origin", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                  </div>
                </div>

                <div class=\"form-group\">
                \t";
        // line 75
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($_form_, "reminder", array()), 'label', array("label_attr" => array("class" => "control-label"), "label" => "Date de relance"));
        echo "

        \t\t\t\t\t";
        // line 77
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($_form_, "reminder", array()), 'errors');
        echo "

        \t\t\t\t\t<div class=\"data\">
        \t\t\t\t\t\t";
        // line 81
        echo "        \t\t\t\t\t\t";
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($_form_, "reminder", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
        \t\t\t\t\t</div>
                </div>

                <div class=\"form-group\">
                    ";
        // line 86
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($_form_, "codes", array()), 'label', array("label_attr" => array("class" => "control-label"), "label" => "Codes"));
        echo "

                    ";
        // line 88
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($_form_, "codes", array()), 'errors');
        echo "

                    <div class=\"data\">
                        ";
        // line 92
        echo "                        ";
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($_form_, "codes", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                    </div>
                </div>

                <div class=\"form-group\">
                \t";
        // line 97
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($_form_, "type", array()), 'label', array("label_attr" => array("class" => "control-label"), "label" => "Type de client"));
        echo "

        \t\t\t\t\t";
        // line 99
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($_form_, "type", array()), 'errors');
        echo "

        \t\t\t\t\t<div class=\"data\">
        \t\t\t\t\t\t";
        // line 103
        echo "        \t\t\t\t\t\t";
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($_form_, "type", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
        \t\t\t\t\t</div>
                </div>

                ";
        // line 107
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($_form_, "save", array()), 'widget');
        echo "


                ";
        // line 113
        echo "                ";
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($_form_, 'rest');
        echo "

                ";
        // line 116
        echo "                ";
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo         $this->env->getExtension('form')->renderer->renderBlock($_form_, 'form_end');
        echo "
            </div>
        </div>
    </div>

    <!-- Adresse -->
    <div class=\"row\">
        <div class=\"col-sm-12\">
            <div class=\"bloc\">
                <h2 class=\"bloc__title\">Adresses</h2>
                <div class=\"row\" id=\"addresses\">
                    ";
        // line 127
        if (isset($context["entity"])) { $_entity_ = $context["entity"]; } else { $_entity_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($_entity_, "addresses", array()));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["address"]) {
            // line 128
            echo "                      ";
            $this->env->loadTemplate("FlydDashboardBundle:Address:show.html.twig")->display($context);
            echo "                    
                    ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['address'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 130
        echo "                </div> 
                <a href=\"";
        // line 131
        echo $this->env->getExtension('routing')->getPath("address_ajax_getform");
        echo "\" class=\"pull-right btn btn--add\">+</a> 
                ";
        // line 132
        if (isset($context["entity"])) { $_entity_ = $context["entity"]; } else { $_entity_ = null; }
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("FlydDashboardBundle:Address:getForm", array("id" => $this->getAttribute($_entity_, "id", array()))));
        echo "                
            </div>
        </div>
    </div>

    <!-- Contacts -->
    <div class=\"row\">
        <div class=\"col-sm-12\">
            <div class=\"bloc\">
                <h2 class=\"bloc__title\">Contacts</h2>
                <div class=\"row\" id=\"contacts\">
                    ";
        // line 143
        if (isset($context["entity"])) { $_entity_ = $context["entity"]; } else { $_entity_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($_entity_, "contacts", array()));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["contact"]) {
            // line 144
            echo "                      ";
            $this->env->loadTemplate("FlydDashboardBundle:Contact:show.html.twig")->display($context);
            echo "                    
                    ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['contact'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 146
        echo "                </div> 
                <a href=\"";
        // line 147
        echo $this->env->getExtension('routing')->getPath("contact_ajax_delete");
        echo "\" class=\"pull-right btn btn--add\">+</a> 
                ";
        // line 148
        if (isset($context["entity"])) { $_entity_ = $context["entity"]; } else { $_entity_ = null; }
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("FlydDashboardBundle:Contact:getForm", array("id" => $this->getAttribute($_entity_, "id", array()))));
        echo "
            </div>
        </div>
    </div>



\t

";
    }

    // line 159
    public function block_js($context, array $blocks = array())
    {
        // line 160
        echo "    <script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/flyddashboard/js/additems.js"), "html", null, true);
        echo "\"></script>
";
    }

    public function getTemplateName()
    {
        return "FlydDashboardBundle:Client:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  402 => 160,  399 => 159,  384 => 148,  380 => 147,  377 => 146,  360 => 144,  342 => 143,  327 => 132,  323 => 131,  320 => 130,  303 => 128,  285 => 127,  269 => 116,  262 => 113,  255 => 107,  246 => 103,  239 => 99,  233 => 97,  223 => 92,  216 => 88,  210 => 86,  200 => 81,  193 => 77,  187 => 75,  177 => 70,  170 => 66,  164 => 64,  154 => 59,  147 => 55,  141 => 53,  131 => 48,  124 => 44,  118 => 42,  108 => 37,  101 => 33,  95 => 31,  86 => 24,  77 => 19,  72 => 16,  69 => 15,  63 => 13,  56 => 10,  52 => 8,  49 => 7,  41 => 4,  38 => 3,  11 => 1,);
    }
}
