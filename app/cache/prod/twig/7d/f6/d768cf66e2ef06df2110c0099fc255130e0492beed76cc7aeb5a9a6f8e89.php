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
        echo "</title>
";
    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        // line 8
        echo "        
    <div class=\"title__container\">
        <a href=\"";
        // line 10
        if (isset($context["entity"])) { $_entity_ = $context["entity"]; } else { $_entity_ = null; }
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("client_delete", array("id" => $this->getAttribute($_entity_, "id", array()))), "html", null, true);
        echo "\" class=\"btn--delete\">Delete</a>
        <a href=\"";
        // line 11
        if (isset($context["entity"])) { $_entity_ = $context["entity"]; } else { $_entity_ = null; }
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("client_edit", array("id" => $this->getAttribute($_entity_, "id", array()))), "html", null, true);
        echo "\" class=\"btn--edit\">Edit</a>
        <h1 class=\"lvl1\">";
        // line 12
        if (isset($context["entity"])) { $_entity_ = $context["entity"]; } else { $_entity_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_entity_, "name", array()), "html", null, true);
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
        // line 25
        if (isset($context["entity"])) { $_entity_ = $context["entity"]; } else { $_entity_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_entity_, "job", array()), "html", null, true);
        echo "
                    </div>

                </div>

                <div class=\"form-group\">
                    
                    <label class=\"control-label\">Date d'entrée</label>

                    <div class=\"data\">
                        ";
        // line 35
        if (isset($context["entity"])) { $_entity_ = $context["entity"]; } else { $_entity_ = null; }
        echo twig_escape_filter($this->env, twig_localized_date_filter($this->env, $this->getAttribute($_entity_, "entrance", array()), "full", "none", "fr"), "html", null, true);
        echo "
                    </div>

                </div>

                ";
        // line 40
        if (isset($context["entity"])) { $_entity_ = $context["entity"]; } else { $_entity_ = null; }
        if ($this->getAttribute($_entity_, "origin", array())) {
            // line 41
            echo "                <div class=\"form-group\">
                    
                    <label class=\"control-label\">Origine</label>

                    <div class=\"data\">
                        ";
            // line 46
            if (isset($context["entity"])) { $_entity_ = $context["entity"]; } else { $_entity_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_entity_, "origin", array()), "name", array()), "html", null, true);
            echo "
                    </div>

                </div>
                ";
        }
        // line 51
        echo "
                <div class=\"form-group\">
                    
                    <label class=\"control-label\">Codes</label>

                    <div class=\"data\">
                        ";
        // line 57
        if (isset($context["entity"])) { $_entity_ = $context["entity"]; } else { $_entity_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_entity_, "codes", array()), "html", null, true);
        echo "
                    </div>

                </div>
                
                <div class=\"form-group\">
                    
                    <label class=\"control-label\">Type de Client</label>

                    <div class=\"data\">
                    ";
        // line 67
        if (isset($context["entity"])) { $_entity_ = $context["entity"]; } else { $_entity_ = null; }
        if (($this->getAttribute($_entity_, "type", array()) == 0)) {
            // line 68
            echo "                        <p>Actuel</p>
                    ";
        } elseif (($this->getAttribute($_entity_, "type", array()) == 1)) {
            // line 70
            echo "                        <p>Prospect</p>
                    ";
        }
        // line 72
        echo "                    </div>
                    
                </div>

                ";
        // line 76
        if (isset($context["entity"])) { $_entity_ = $context["entity"]; } else { $_entity_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($_entity_, "addresses", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["address"]) {
            // line 77
            echo "
                <div class=\"form-group\">
                    ";
            // line 79
            if (isset($context["address"])) { $_address_ = $context["address"]; } else { $_address_ = null; }
            if (($this->getAttribute($_address_, "type", array()) == 0)) {
                // line 80
                echo "                        <label class=\"control-label\">Adresse</label>
                    ";
            } elseif (($this->getAttribute($_address_, "type", array()) == 1)) {
                // line 82
                echo "                        <label class=\"control-label\">Adresse de facturation</label>
                    ";
            } elseif (($this->getAttribute($_address_, "type", array()) == 2)) {
                // line 84
                echo "                        <label class=\"control-label\">Adresse d'expédition</label>
                    ";
            }
            // line 86
            echo "                    <div class=\"data\">
                        <p>";
            // line 87
            if (isset($context["address"])) { $_address_ = $context["address"]; } else { $_address_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_address_, "street", array()), "html", null, true);
            echo "</p>
                        <p>";
            // line 88
            if (isset($context["address"])) { $_address_ = $context["address"]; } else { $_address_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_address_, "streetComp", array()), "html", null, true);
            echo "</p>
                        <p>";
            // line 89
            if (isset($context["address"])) { $_address_ = $context["address"]; } else { $_address_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_address_, "zipcode", array()), "html", null, true);
            echo " ";
            if (isset($context["address"])) { $_address_ = $context["address"]; } else { $_address_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_address_, "city", array()), "html", null, true);
            echo " ";
            if (isset($context["address"])) { $_address_ = $context["address"]; } else { $_address_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_address_, "cityComp", array()), "html", null, true);
            echo "</p>
                    </div>
                    
                </div>

                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['address'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 95
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
        // line 105
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
            // line 106
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
        // line 108
        echo "                </div> 
                <a href=\"";
        // line 109
        echo $this->env->getExtension('routing')->getPath("contact_ajax_delete");
        echo "\" class=\"pull-right btn--add\">+</a> 
                ";
        // line 110
        if (isset($context["entity"])) { $_entity_ = $context["entity"]; } else { $_entity_ = null; }
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("FlydDashboardBundle:Contact:getForm", array("id" => $this->getAttribute($_entity_, "id", array()))));
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
        // line 121
        if (isset($context["entity"])) { $_entity_ = $context["entity"]; } else { $_entity_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($_entity_, "needs", array()));
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
            // line 122
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
        // line 124
        echo "                </div> 
                <a href=\"";
        // line 125
        echo $this->env->getExtension('routing')->getPath("need_ajax_add");
        echo "\" class=\"btn--add\">+</a>
                ";
        // line 126
        if (isset($context["entity"])) { $_entity_ = $context["entity"]; } else { $_entity_ = null; }
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("FlydDashboardBundle:Need:getForm", array("id" => $this->getAttribute($_entity_, "id", array()))));
        echo "
            </div>    
        </div>
    </div>

";
    }

    // line 133
    public function block_js($context, array $blocks = array())
    {
        // line 134
        echo "    <script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/flyddashboard/js/additems.js"), "html", null, true);
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
        return array (  345 => 134,  342 => 133,  331 => 126,  327 => 125,  324 => 124,  307 => 122,  289 => 121,  274 => 110,  270 => 109,  267 => 108,  250 => 106,  232 => 105,  220 => 95,  201 => 89,  196 => 88,  191 => 87,  188 => 86,  184 => 84,  180 => 82,  176 => 80,  173 => 79,  169 => 77,  164 => 76,  158 => 72,  154 => 70,  150 => 68,  147 => 67,  133 => 57,  125 => 51,  116 => 46,  109 => 41,  106 => 40,  97 => 35,  83 => 25,  66 => 12,  61 => 11,  56 => 10,  52 => 8,  49 => 7,  41 => 4,  38 => 3,  11 => 1,);
    }
}
