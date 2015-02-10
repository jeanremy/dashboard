<?php

/* FlydDashboardBundle:ProjectCanvas:edit.html.twig */
class __TwigTemplate_a53fbbce3c308bf3a1a54ec77e5093f848f031c06134c5bb645a72476797728c extends Twig_Template
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
        echo " - Edit</title>
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
        echo " - Edit</h1>
    </div>

    ";
        // line 13
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo         $this->env->getExtension('form')->renderer->renderBlock($_form_, 'form_start', array("attr" => array("class" => "form-horizontal")));
        echo "

    ";
        // line 15
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        if ($this->env->getExtension('form')->renderer->searchAndRenderBlock($_form_, 'errors')) {
            // line 16
            echo "    <div class=\"row\">
        <div class=\"col-sm-12\">
            <div class=\"bloc\">
                ";
            // line 19
            if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($_form_, 'errors');
            echo "
            </div>
        </div>
    </div>
    ";
        }
        // line 24
        echo "
    <div class=\"row\">
        <div class=\"col-sm-12\">
            <div class=\"bloc bloc-inline-edition\">
                <h2 class=\"bloc__title\">Informations générales</h2>

                <div class=\"form-group\">
                    ";
        // line 31
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($_form_, "name", array()), 'label', array("label_attr" => array("class" => "control-label"), "label" => "Titre du projet"));
        echo "

                    ";
        // line 33
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($_form_, "name", array()), 'errors');
        echo "

                  <div class=\"data\">
                    ";
        // line 37
        echo "                    ";
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($_form_, "name", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                  </div>
                </div>

               

                ";
        // line 44
        echo "                ";
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($_form_, "save", array()), 'widget');
        echo "


                ";
        // line 50
        echo "                ";
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($_form_, 'rest');
        echo "

                ";
        // line 53
        echo "                ";
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo         $this->env->getExtension('form')->renderer->renderBlock($_form_, 'form_end');
        echo "
            </div>
           
        </div>

        <div class=\"col-sm-12\">
            <div class=\"bloc bloc-inline-edition\">
                <h2 class=\"bloc__title\">Tâches prédéfinies</h2>
                ";
        // line 61
        if (isset($context["entity"])) { $_entity_ = $context["entity"]; } else { $_entity_ = null; }
        if ($this->getAttribute($_entity_, "projectcanvastasks", array())) {
            // line 62
            echo "                <table class=\"taskcontainer\">
                    <thead class=\"thead\">
                        <tr>
                            <th>Êtapes</th>
                            <th>Tâche</th>
                            <th>Suppr</th>
                        </tr>
                    </thead>
                    <tbody class=\"tbody\">
                    ";
            // line 71
            if (isset($context["entity"])) { $_entity_ = $context["entity"]; } else { $_entity_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($_entity_, "projectcanvastasks", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["pct"]) {
                // line 72
                echo "                        <tr id=\"";
                if (isset($context["pct"])) { $_pct_ = $context["pct"]; } else { $_pct_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_pct_, "id", array()), "html", null, true);
                echo "\" class=\"task sortable\" data-position=\"";
                if (isset($context["pct"])) { $_pct_ = $context["pct"]; } else { $_pct_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_pct_, "position", array()), "html", null, true);
                echo "\">
                            <td>";
                // line 73
                if (isset($context["pct"])) { $_pct_ = $context["pct"]; } else { $_pct_ = null; }
                echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute($this->getAttribute($_pct_, "task", array()), "step", array())), "html", null, true);
                echo "</td>
                            <td>";
                // line 74
                if (isset($context["pct"])) { $_pct_ = $context["pct"]; } else { $_pct_ = null; }
                echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute($this->getAttribute($_pct_, "task", array()), "name", array())), "html", null, true);
                echo "</td>
                            <td><a href=\"\" class=\"line--remove remove-task\">Retirer</a></td>
                        </tr>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pct'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 77
            echo "                        
                    </tbody>
                </table>
                ";
        }
        // line 81
        echo "               
                <!-- Form pour créer pct avec task imbriquée -->
                ";
        // line 83
        if (isset($context["pctform"])) { $_pctform_ = $context["pctform"]; } else { $_pctform_ = null; }
        if (isset($context["entity"])) { $_entity_ = $context["entity"]; } else { $_entity_ = null; }
        echo         $this->env->getExtension('form')->renderer->renderBlock($_pctform_, 'form_start', array("attr" => array("class" => "form-horizontal", "id" => "flyd_dashboardbundle_projectcanvastask"), "action" => $this->env->getExtension('routing')->getPath("projectcanvas_ajax_add_task", array("id" => $this->getAttribute($_entity_, "id", array())))));
        // line 89
        echo "
                    <h2 class=\"bloc__subtitle\">Ajouter une tâche</h2>
                    <div class=\"newtask\">  
                        <input type=\"hidden\" name=\"task_id\" id=\"task_id\" />
                        ";
        // line 93
        if (isset($context["pctform"])) { $_pctform_ = $context["pctform"]; } else { $_pctform_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($_pctform_, "position", array()), 'widget');
        echo "                      
                        ";
        // line 94
        if (isset($context["pctform"])) { $_pctform_ = $context["pctform"]; } else { $_pctform_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($_pctform_, "task", array()), "name", array()), 'label', array("label_attr" => array("class" => "control-label"), "label" => "Nom de la tâche"));
        echo "
                        ";
        // line 95
        if (isset($context["pctform"])) { $_pctform_ = $context["pctform"]; } else { $_pctform_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($_pctform_, "task", array()), "name", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "

                        ";
        // line 97
        if (isset($context["pctform"])) { $_pctform_ = $context["pctform"]; } else { $_pctform_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($_pctform_, "task", array()), "step", array()), 'label', array("label_attr" => array("class" => "control-label"), "label" => "Etape"));
        echo "
                        ";
        // line 98
        if (isset($context["pctform"])) { $_pctform_ = $context["pctform"]; } else { $_pctform_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($_pctform_, "task", array()), "step", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                    </div>
                ";
        // line 100
        if (isset($context["pctform"])) { $_pctform_ = $context["pctform"]; } else { $_pctform_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($_pctform_, 'rest');
        echo "
                ";
        // line 101
        if (isset($context["pctform"])) { $_pctform_ = $context["pctform"]; } else { $_pctform_ = null; }
        echo         $this->env->getExtension('form')->renderer->renderBlock($_pctform_, 'form_end');
        echo "
            </div>    
        </div>
    </div>

";
    }

    // line 108
    public function block_js($context, array $blocks = array())
    {
        // line 109
        echo "    <script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/flyddashboard/js/vendor/jquery-ui/jquery-ui.min.js"), "html", null, true);
        echo "\"></script>
    <link href=\"";
        // line 110
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/flyddashboard/js/vendor/jquery-ui/jquery-ui.min.css"), "html", null, true);
        echo "\"></link>
    <script>
    
        var tasks = [
            ";
        // line 114
        if (isset($context["minitasks"])) { $_minitasks_ = $context["minitasks"]; } else { $_minitasks_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($_minitasks_);
        foreach ($context['_seq'] as $context["_key"] => $context["mini"]) {
            // line 115
            echo "            { label: \"";
            if (isset($context["mini"])) { $_mini_ = $context["mini"]; } else { $_mini_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_mini_, "name", array()), "html", null, true);
            echo "\", value: \"";
            if (isset($context["mini"])) { $_mini_ = $context["mini"]; } else { $_mini_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_mini_, "name", array()), "html", null, true);
            echo "\", id: \"";
            if (isset($context["mini"])) { $_mini_ = $context["mini"]; } else { $_mini_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_mini_, "id", array()), "html", null, true);
            echo "\", step: \"";
            if (isset($context["mini"])) { $_mini_ = $context["mini"]; } else { $_mini_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_mini_, "step", array()), "html", null, true);
            echo "\" },
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['mini'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 117
        echo "        ];
        var updateOrderUrl = \"";
        // line 118
        if (isset($context["entity"])) { $_entity_ = $context["entity"]; } else { $_entity_ = null; }
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("projectcanvas_ajax_reorder_tasks", array("id" => $this->getAttribute($_entity_, "id", array()))), "html", null, true);
        echo "\";
        var removeUrl = \"";
        // line 119
        if (isset($context["entity"])) { $_entity_ = $context["entity"]; } else { $_entity_ = null; }
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("projectcanvas_ajax_delete_task", array("id" => $this->getAttribute($_entity_, "id", array()))), "html", null, true);
        echo "\";
        
    </script>
    <script type=\"text/javascript\" src=\"";
        // line 122
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/flyddashboard/js/taskshandler.js"), "html", null, true);
        echo "\"></script>
";
    }

    public function getTemplateName()
    {
        return "FlydDashboardBundle:ProjectCanvas:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  308 => 122,  301 => 119,  296 => 118,  293 => 117,  274 => 115,  269 => 114,  262 => 110,  257 => 109,  254 => 108,  243 => 101,  238 => 100,  232 => 98,  227 => 97,  221 => 95,  216 => 94,  211 => 93,  205 => 89,  201 => 83,  197 => 81,  191 => 77,  180 => 74,  175 => 73,  166 => 72,  161 => 71,  150 => 62,  147 => 61,  134 => 53,  127 => 50,  119 => 44,  108 => 37,  101 => 33,  95 => 31,  86 => 24,  77 => 19,  72 => 16,  69 => 15,  63 => 13,  56 => 10,  52 => 8,  49 => 7,  41 => 4,  38 => 3,  11 => 1,);
    }
}
