<?php

/* FlydDashboardBundle:Supplier:edit.html.twig */
class __TwigTemplate_0e9c7359e0417142e0e6ecde0c48f7245f78e270e4bfe3e620baae16503d284d extends Twig_Template
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
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "name", array()), "html", null, true);
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
        echo $this->env->getExtension('routing')->getPath("supplier_list");
        echo "\">Fournisseurs</a></span>
        <span class=\"prev\"><a href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("supplier_show", array("id" => $this->getAttribute($this->getContext($context, "entity"), "id", array()))), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "name", array()), "html", null, true);
        echo "</a></span>
        Edit
    </p>
";
    }

    // line 16
    public function block_body($context, array $blocks = array())
    {
        // line 17
        echo "
    <div class=\"title__container\">
        <h1 class=\"lvl1\">";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "name", array()), "html", null, true);
        echo "</h1>
    </div>

    ";
        // line 22
        echo         $this->env->getExtension('form')->renderer->renderBlock($this->getContext($context, "form"), 'form_start', array("attr" => array("class" => "form-horizontal")));
        echo "

\t";
        // line 24
        if ($this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'errors')) {
            // line 25
            echo "\t<div class=\"row\">
\t\t<div class=\"col-sm-12\">
\t\t\t<div class=\"bloc\">
    \t\t\t";
            // line 28
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'errors');
            echo "
\t\t\t</div>
\t\t</div>
\t</div>
\t";
        }
        // line 33
        echo "
    <div class=\"row\">
        <div class=\"col-sm-12\">
            <div class=\"bloc bloc--general bloc-inline-edition edit\">
                <h2 class=\"bloc__title\">Informations générales</h2>

                <div class=\"form-group\">
                \t";
        // line 40
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "name", array()), 'label', array("label_attr" => array("class" => "control-label"), "label" => "Nom"));
        echo "

                  ";
        // line 42
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "name", array()), 'errors');
        echo "

                  <div class=\"data\">
                  \t";
        // line 46
        echo "                  \t";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "name", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                  </div>
                </div>

                <div class=\"form-group\">
                    ";
        // line 51
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "job", array()), 'label', array("label_attr" => array("class" => "control-label"), "label" => "Métier"));
        echo "

                    ";
        // line 53
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "job", array()), 'errors');
        echo "

                  <div class=\"data\">
                    ";
        // line 57
        echo "                    ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "job", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                  </div>
                </div>

                <div class=\"form-group\">
                \t";
        // line 62
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "entrance", array()), 'label', array("label_attr" => array("class" => "control-label"), "label" => "Date d'entrée"));
        echo "

        \t\t\t\t\t";
        // line 64
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "entrance", array()), 'errors');
        echo "

        \t\t\t\t\t<div class=\"data\">
        \t\t\t\t\t\t";
        // line 68
        echo "        \t\t\t\t\t\t";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "entrance", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
        \t\t\t\t\t</div>
                </div>

                <div class=\"form-group\">
                  ";
        // line 73
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "origin", array()), 'label', array("label_attr" => array("class" => "control-label"), "label" => "Origine"));
        echo "

                  ";
        // line 75
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "origin", array()), 'errors');
        echo "

                  <div class=\"data\">
                    ";
        // line 79
        echo "                    ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "origin", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                  </div>
                </div>

                
                ";
        // line 85
        echo "                <a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("client_delete", array("id" => $this->getAttribute($this->getContext($context, "entity"), "id", array()))), "html", null, true);
        echo "\" class=\"btn--delete--reverse\">Delete</a>
                ";
        // line 86
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "save", array()), 'widget');
        echo "


                ";
        // line 92
        echo "                ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'rest');
        echo "

                ";
        // line 95
        echo "                ";
        echo         $this->env->getExtension('form')->renderer->renderBlock($this->getContext($context, "form"), 'form_end');
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
        // line 106
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getContext($context, "entity"), "addresses", array()));
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
            // line 107
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
        // line 109
        echo "                </div> 
                <a href=\"";
        // line 110
        echo $this->env->getExtension('routing')->getPath("address_ajax_getform");
        echo "\" class=\"pull-right btn--add\">+</a> 
                ";
        // line 111
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("FlydDashboardBundle:Address:getForm", array("id" => $this->getAttribute($this->getContext($context, "entity"), "id", array()))));
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
        // line 122
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getContext($context, "entity"), "contacts", array()));
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
            // line 123
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
        // line 125
        echo "                </div> 
                <a href=\"";
        // line 126
        echo $this->env->getExtension('routing')->getPath("contact_ajax_delete");
        echo "\" class=\"pull-right btn--add\">+</a> 
                ";
        // line 127
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("FlydDashboardBundle:Contact:getForm", array("id" => $this->getAttribute($this->getContext($context, "entity"), "id", array()))));
        echo "               

            </div>
        </div>
    </div>



\t

";
    }

    // line 139
    public function block_js($context, array $blocks = array())
    {
        // line 140
        echo "    <script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/additems.js"), "html", null, true);
        echo "\"></script>
";
    }

    public function getTemplateName()
    {
        return "FlydDashboardBundle:Supplier:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  337 => 140,  334 => 139,  319 => 127,  315 => 126,  312 => 125,  295 => 123,  278 => 122,  264 => 111,  260 => 110,  257 => 109,  240 => 107,  223 => 106,  208 => 95,  202 => 92,  196 => 86,  191 => 85,  182 => 79,  176 => 75,  171 => 73,  162 => 68,  156 => 64,  151 => 62,  142 => 57,  136 => 53,  131 => 51,  122 => 46,  116 => 42,  111 => 40,  102 => 33,  94 => 28,  89 => 25,  87 => 24,  82 => 22,  76 => 19,  72 => 17,  69 => 16,  59 => 10,  55 => 9,  52 => 8,  49 => 7,  42 => 4,  39 => 3,  11 => 1,);
    }
}
