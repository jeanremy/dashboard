<?php

/* FlydDashboardBundle:Client:show.html.twig */
class __TwigTemplate_7df6d768cf66e2ef06df2110c0099fc255130e0492beed76cc7aeb5a9a6f8e89 extends Twig_Template
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
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "name", array()), "html", null, true);
        echo "</title>
";
    }

    // line 7
    public function block_top($context, array $blocks = array())
    {
        // line 8
        echo "    <p>
        <span class=\"prev\"><a href=\"";
        // line 9
        echo $this->env->getExtension('routing')->getPath("client_list");
        echo "\">Clients</a></span>
        ";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "name", array()), "html", null, true);
        echo "
    </p>
";
    }

    // line 14
    public function block_body($context, array $blocks = array())
    {
        // line 15
        echo "        
    <div class=\"title__container\">
        <a href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("client_delete", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()))), "html", null, true);
        echo "\" class=\"btn--delete\">Delete</a>
        <a href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("client_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()))), "html", null, true);
        echo "\" class=\"btn--edit\">Edit</a>
        <h1 class=\"lvl1\">";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "name", array()), "html", null, true);
        echo "</h1>
    </div>
    
    <div class=\"row\">
        <div class=\"col-sm-12\">
            <div class=\"bloc bloc--general bloc-inline-edition\">
                <h2 class=\"bloc__title\">Informations générales</h2>

                <div class=\"form-group\">
                    
                    <label class=\"control-label\">Métier</label>

                    <div class=\"data\">
                        ";
        // line 32
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "job", array()), "html", null, true);
        echo "
                    </div>

                </div>

                <div class=\"form-group\">
                    
                    <label class=\"control-label\">Date d'entrée</label>

                    <div class=\"data\">
                        ";
        // line 42
        echo twig_escape_filter($this->env, twig_localized_date_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "entrance", array()), "full", "none", "fr"), "html", null, true);
        echo "
                    </div>

                </div>

                ";
        // line 47
        if ($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "origin", array())) {
            // line 48
            echo "                <div class=\"form-group\">
                    
                    <label class=\"control-label\">Origine</label>

                    <div class=\"data\">
                        ";
            // line 53
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "origin", array()), "name", array()), "html", null, true);
            echo "
                    </div>

                </div>
                ";
        }
        // line 58
        echo "
                <div class=\"form-group\">
                    
                    <label class=\"control-label\">Codes</label>

                    <div class=\"data\">
                        ";
        // line 64
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "codes", array()), "html", null, true);
        echo "
                    </div>

                </div>
                
                <div class=\"form-group\">
                    
                    <label class=\"control-label\">Type de Client</label>

                    <div class=\"data\">
                    ";
        // line 74
        if (($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "type", array()) == 0)) {
            // line 75
            echo "                        <p>Actuel</p>
                    ";
        } elseif (($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "type", array()) == 1)) {
            // line 77
            echo "                        <p>Prospect</p>
                    ";
        }
        // line 79
        echo "                    </div>
                    
                </div>

                ";
        // line 83
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "addresses", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["address"]) {
            // line 84
            echo "
                <div class=\"form-group\">
                    ";
            // line 86
            if (($this->getAttribute($context["address"], "type", array()) == 0)) {
                // line 87
                echo "                        <label class=\"control-label\">Adresse</label>
                    ";
            } elseif (($this->getAttribute($context["address"], "type", array()) == 1)) {
                // line 89
                echo "                        <label class=\"control-label\">Adresse de facturation</label>
                    ";
            } elseif (($this->getAttribute($context["address"], "type", array()) == 2)) {
                // line 91
                echo "                        <label class=\"control-label\">Adresse d'expédition</label>
                    ";
            }
            // line 93
            echo "                    <div class=\"data\">
                        <p>";
            // line 94
            echo twig_escape_filter($this->env, $this->getAttribute($context["address"], "street", array()), "html", null, true);
            echo "</p>
                        <p>";
            // line 95
            echo twig_escape_filter($this->env, $this->getAttribute($context["address"], "streetComp", array()), "html", null, true);
            echo "</p>
                        <p>";
            // line 96
            echo twig_escape_filter($this->env, $this->getAttribute($context["address"], "zipcode", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["address"], "city", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["address"], "cityComp", array()), "html", null, true);
            echo "</p>
                    </div>
                    
                </div>

                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['address'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 102
        echo "            </div>
        </div>
    </div>

    <!-- Contacts -->
    <div class=\"row\">
        <div class=\"col-sm-12\">
            <div class=\"bloc\">
                <h2 class=\"bloc__title\">Contacts</h2>
                <div class=\"row\" id=\"contacts\">
                    ";
        // line 112
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "contacts", array()));
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
            // line 113
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
        // line 115
        echo "                </div> 
                <a href=\"";
        // line 116
        echo $this->env->getExtension('routing')->getPath("contact_ajax_delete");
        echo "\" class=\"pull-right btn--add\">+</a> 
                ";
        // line 117
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("FlydDashboardBundle:Contact:getForm", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()))));
        echo "
            </div>
        </div>
    </div>

     <!-- Besoins -->
    <div class=\"row\">
        <div class=\"col-sm-12\">
            <div class=\"bloc needs\">
                <h2 class=\"bloc__title\">Besoins</h2>
                <div class=\"row\">
                    ";
        // line 128
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "needs", array()));
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
        foreach ($context['_seq'] as $context["_key"] => $context["need"]) {
            // line 129
            echo "                        ";
            $this->env->loadTemplate("FlydDashboardBundle:Need:mini.html.twig")->display($context);
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['need'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 131
        echo "                </div> 
                <a href=\"";
        // line 132
        echo $this->env->getExtension('routing')->getPath("need_ajax_add");
        echo "\" class=\"btn--add\">+</a>
                ";
        // line 133
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("FlydDashboardBundle:Need:getForm", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()))));
        echo "
            </div>    
        </div>
    </div>

";
    }

    // line 140
    public function block_js($context, array $blocks = array())
    {
        // line 141
        echo "    <script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/additems.js"), "html", null, true);
        echo "\"></script>
";
    }

    public function getTemplateName()
    {
        return "FlydDashboardBundle:Client:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  342 => 141,  339 => 140,  329 => 133,  325 => 132,  322 => 131,  305 => 129,  288 => 128,  274 => 117,  270 => 116,  267 => 115,  250 => 113,  233 => 112,  221 => 102,  205 => 96,  201 => 95,  197 => 94,  194 => 93,  190 => 91,  186 => 89,  182 => 87,  180 => 86,  176 => 84,  172 => 83,  166 => 79,  162 => 77,  158 => 75,  156 => 74,  143 => 64,  135 => 58,  127 => 53,  120 => 48,  118 => 47,  110 => 42,  97 => 32,  81 => 19,  77 => 18,  73 => 17,  69 => 15,  66 => 14,  59 => 10,  55 => 9,  52 => 8,  49 => 7,  42 => 4,  39 => 3,  11 => 1,);
    }
}
