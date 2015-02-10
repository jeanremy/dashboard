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
        echo $this->env->getExtension('routing')->getPath("supplier_list");
        echo "\">Fournisseurs</a></span>
        ";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "name", array()), "html", null, true);
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
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("supplier_delete", array("id" => $this->getAttribute($this->getContext($context, "entity"), "id", array()))), "html", null, true);
        echo "\" class=\"btn--delete\">Delete</a>
        <a href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("supplier_edit", array("id" => $this->getAttribute($this->getContext($context, "entity"), "id", array()))), "html", null, true);
        echo "\" class=\"btn--edit\">Edit</a>
        <h1 class=\"lvl1\">";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "name", array()), "html", null, true);
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
        // line 31
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "job", array()), "html", null, true);
        echo "
                    </div>

                </div>

                <div class=\"form-group\">
                    
                    <label class=\"control-label\">Date d'entrée</label>

                    <div class=\"data\">
                        ";
        // line 41
        echo twig_escape_filter($this->env, twig_localized_date_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "entrance", array()), "full", "none", "fr"), "html", null, true);
        echo "
                    </div>

                </div>

                ";
        // line 46
        if ($this->getAttribute($this->getContext($context, "entity"), "origin", array())) {
            // line 47
            echo "                <div class=\"form-group\">
                    
                    <label class=\"control-label\">Origine</label>

                    <div class=\"data\">
                        ";
            // line 52
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "entity"), "origin", array()), "name", array()), "html", null, true);
            echo "
                    </div>

                </div>
                ";
        }
        // line 57
        echo "

                ";
        // line 59
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getContext($context, "entity"), "addresses", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["address"]) {
            // line 60
            echo "
                <div class=\"form-group\">
                    ";
            // line 62
            if (($this->getAttribute($context["address"], "type", array()) == 0)) {
                // line 63
                echo "                        <label class=\"control-label\">Adresse</label>
                    ";
            } elseif (($this->getAttribute($context["address"], "type", array()) == 1)) {
                // line 65
                echo "                        <label class=\"control-label\">Adresse de facturation</label>
                    ";
            } elseif (($this->getAttribute($context["address"], "type", array()) == 2)) {
                // line 67
                echo "                        <label class=\"control-label\">Adresse d'expédition</label>
                    ";
            }
            // line 69
            echo "                    <div class=\"data\">
                        <p>";
            // line 70
            echo twig_escape_filter($this->env, $this->getAttribute($context["address"], "street", array()), "html", null, true);
            echo "</p>
                        <p>";
            // line 71
            echo twig_escape_filter($this->env, $this->getAttribute($context["address"], "streetComp", array()), "html", null, true);
            echo "</p>
                        <p>";
            // line 72
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
        // line 78
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
        // line 88
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
            // line 89
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
        // line 91
        echo "                </div> 
                <a href=\"";
        // line 92
        echo $this->env->getExtension('routing')->getPath("contact_ajax_delete");
        echo "\" class=\"pull-right btn--add\">+</a> 
                ";
        // line 93
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("FlydDashboardBundle:Contact:getForm", array("id" => $this->getAttribute($this->getContext($context, "entity"), "id", array()))));
        echo "
            </div>
        </div>
    </div>

";
    }

    // line 100
    public function block_js($context, array $blocks = array())
    {
        // line 101
        echo "    <script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/additems.js"), "html", null, true);
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
        return array (  253 => 101,  250 => 100,  240 => 93,  236 => 92,  233 => 91,  216 => 89,  199 => 88,  187 => 78,  171 => 72,  167 => 71,  163 => 70,  160 => 69,  156 => 67,  152 => 65,  148 => 63,  146 => 62,  142 => 60,  138 => 59,  134 => 57,  126 => 52,  119 => 47,  117 => 46,  109 => 41,  96 => 31,  81 => 19,  77 => 18,  73 => 17,  69 => 15,  66 => 14,  59 => 10,  55 => 9,  52 => 8,  49 => 7,  42 => 4,  39 => 3,  11 => 1,);
    }
}
