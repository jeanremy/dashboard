<?php

/* FlydDashboardBundle:Supplier:show.html.twig */
class __TwigTemplate_89b8b8d466f161f37817439b3568e6890700f68120ac7fb67077fc69f192451c extends Twig_Template
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
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("supplier_delete", array("id" => $this->getAttribute($_entity_, "id", array()))), "html", null, true);
        echo "\" class=\"btn--delete\">Delete</a>
        <a href=\"";
        // line 11
        if (isset($context["entity"])) { $_entity_ = $context["entity"]; } else { $_entity_ = null; }
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("supplier_edit", array("id" => $this->getAttribute($_entity_, "id", array()))), "html", null, true);
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
        // line 24
        if (isset($context["entity"])) { $_entity_ = $context["entity"]; } else { $_entity_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_entity_, "job", array()), "html", null, true);
        echo "
                    </div>

                </div>

                <div class=\"form-group\">
                    
                    <label class=\"control-label\">Date d'entrée</label>

                    <div class=\"data\">
                        ";
        // line 34
        if (isset($context["entity"])) { $_entity_ = $context["entity"]; } else { $_entity_ = null; }
        echo twig_escape_filter($this->env, twig_localized_date_filter($this->env, $this->getAttribute($_entity_, "entrance", array()), "full", "none", "fr"), "html", null, true);
        echo "
                    </div>

                </div>

                ";
        // line 39
        if (isset($context["entity"])) { $_entity_ = $context["entity"]; } else { $_entity_ = null; }
        if ($this->getAttribute($_entity_, "origin", array())) {
            // line 40
            echo "                <div class=\"form-group\">
                    
                    <label class=\"control-label\">Origine</label>

                    <div class=\"data\">
                        ";
            // line 45
            if (isset($context["entity"])) { $_entity_ = $context["entity"]; } else { $_entity_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_entity_, "origin", array()), "name", array()), "html", null, true);
            echo "
                    </div>

                </div>
                ";
        }
        // line 50
        echo "

                ";
        // line 52
        if (isset($context["entity"])) { $_entity_ = $context["entity"]; } else { $_entity_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($_entity_, "addresses", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["address"]) {
            // line 53
            echo "
                <div class=\"form-group\">
                    ";
            // line 55
            if (isset($context["address"])) { $_address_ = $context["address"]; } else { $_address_ = null; }
            if (($this->getAttribute($_address_, "type", array()) == 0)) {
                // line 56
                echo "                        <label class=\"control-label\">Adresse</label>
                    ";
            } elseif (($this->getAttribute($_address_, "type", array()) == 1)) {
                // line 58
                echo "                        <label class=\"control-label\">Adresse de facturation</label>
                    ";
            } elseif (($this->getAttribute($_address_, "type", array()) == 2)) {
                // line 60
                echo "                        <label class=\"control-label\">Adresse d'expédition</label>
                    ";
            }
            // line 62
            echo "                    <div class=\"data\">
                        <p>";
            // line 63
            if (isset($context["address"])) { $_address_ = $context["address"]; } else { $_address_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_address_, "street", array()), "html", null, true);
            echo "</p>
                        <p>";
            // line 64
            if (isset($context["address"])) { $_address_ = $context["address"]; } else { $_address_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_address_, "streetComp", array()), "html", null, true);
            echo "</p>
                        <p>";
            // line 65
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
        // line 71
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
        // line 81
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
            // line 82
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
        // line 84
        echo "                </div> 
                <a href=\"";
        // line 85
        echo $this->env->getExtension('routing')->getPath("contact_ajax_delete");
        echo "\" class=\"pull-right btn--add\">+</a> 
                ";
        // line 86
        if (isset($context["entity"])) { $_entity_ = $context["entity"]; } else { $_entity_ = null; }
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("FlydDashboardBundle:Contact:getForm", array("id" => $this->getAttribute($_entity_, "id", array()))));
        echo "
            </div>
        </div>
    </div>

";
    }

    // line 93
    public function block_js($context, array $blocks = array())
    {
        // line 94
        echo "    <script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/flyddashboard/js/additems.js"), "html", null, true);
        echo "\"></script>
";
    }

    public function getTemplateName()
    {
        return "FlydDashboardBundle:Supplier:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  252 => 94,  249 => 93,  238 => 86,  234 => 85,  231 => 84,  214 => 82,  196 => 81,  184 => 71,  165 => 65,  160 => 64,  155 => 63,  152 => 62,  148 => 60,  144 => 58,  140 => 56,  137 => 55,  133 => 53,  128 => 52,  124 => 50,  115 => 45,  108 => 40,  105 => 39,  96 => 34,  82 => 24,  66 => 12,  61 => 11,  56 => 10,  52 => 8,  49 => 7,  41 => 4,  38 => 3,  11 => 1,);
    }
}
