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
        echo " - Edit</title>
";
    }

    // line 7
    public function block_top($context, array $blocks = array())
    {
        // line 8
        echo "    <p>
        <span class=\"prev\"><a href=\"";
        // line 9
        echo $this->env->getExtension('routing')->getPath("projectcanvas_list");
        echo "\">Canevas de projet</a></span>
        <span class=\"prev\"><a href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("projectcanvas_show", array("id" => $this->getAttribute($this->getContext($context, "entity"), "id", array()))), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "name", array()), "html", null, true);
        echo "</a></span>
        Edit
    </p>
";
    }

    // line 15
    public function block_body($context, array $blocks = array())
    {
        // line 16
        echo "    
    <div class=\"title__container\">
        <h1 class=\"lvl1\">";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "name", array()), "html", null, true);
        echo " - Edit</h1>
    </div>


    <div class=\"row\">
        <div class=\"col-sm-12\">
            <div class=\"bloc bloc-inline-edition\">
                <h2 class=\"bloc__title\">Informations générales</h2>
                <div class=\"row\">
                    <div class=\"col-sm-12\">

                        ";
        // line 29
        echo         $this->env->getExtension('form')->renderer->renderBlock($this->getContext($context, "form"), 'form_start', array("attr" => array("class" => "form-horizontal")));
        echo "

                        ";
        // line 31
        if ($this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'errors')) {
            // line 32
            echo "                        <div class=\"row\">
                            <div class=\"col-sm-12\">
                                <div class=\"bloc\">
                                    ";
            // line 35
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'errors');
            echo "
                                </div>
                            </div>
                        </div>
                        ";
        }
        // line 40
        echo "                        
                        <div class=\"form-group\">
                            ";
        // line 42
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "name", array()), 'label', array("label_attr" => array("class" => "control-label"), "label" => "Titre du projet"));
        echo "

                            ";
        // line 44
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "name", array()), 'errors');
        echo "

                          <div class=\"data\">
                            ";
        // line 48
        echo "                            ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "name", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                          </div>
                        </div>

                       

                        ";
        // line 55
        echo "                        ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "save", array()), 'widget');
        echo "


                        ";
        // line 61
        echo "                        ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'rest');
        echo "

                        ";
        // line 64
        echo "                        ";
        echo         $this->env->getExtension('form')->renderer->renderBlock($this->getContext($context, "form"), 'form_end');
        echo "
                    </div>
                </div>

            </div>
           
        </div>

        <div class=\"col-sm-12\">
            <div class=\"bloc bloc-inline-edition\">
                <h2 class=\"bloc__title\">Tâches prédéfinies</h2>
                <div class=\"row\">
                    <div class=\"col-sm-12\">
                        ";
        // line 77
        if ($this->getAttribute($this->getContext($context, "entity"), "projectcanvastasks", array())) {
            // line 78
            echo "                        <table class=\"taskcontainer\">
                            <thead class=\"thead\">
                                <tr>
                                    <th>Êtapes</th>
                                    <th>Tâche</th>
                                    <th>Suppr</th>
                                </tr>
                            </thead>
                            <tbody class=\"tbody\">
                            ";
            // line 87
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getContext($context, "entity"), "projectcanvastasks", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["pct"]) {
                // line 88
                echo "                                <tr id=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["pct"], "id", array()), "html", null, true);
                echo "\" class=\"task sortable\" data-position=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["pct"], "position", array()), "html", null, true);
                echo "\">
                                    <td>";
                // line 89
                echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute($this->getAttribute($context["pct"], "task", array()), "step", array())), "html", null, true);
                echo "</td>
                                    <td>";
                // line 90
                echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute($this->getAttribute($context["pct"], "task", array()), "name", array())), "html", null, true);
                echo "</td>
                                    <td><a href=\"\" class=\"line--remove remove-task\">Retirer</a></td>
                                </tr>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pct'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 93
            echo "                        
                            </tbody>
                        </table>
                        ";
        }
        // line 97
        echo "                    </div>
                </div>
                <button class=\"btn--add\">+</button>
                <div class=\"row\">
                    <div class=\"col-sm-12\">  
               
                        <!-- Form pour créer pct avec task imbriquée -->
                        ";
        // line 104
        echo         $this->env->getExtension('form')->renderer->renderBlock($this->getContext($context, "pctform"), 'form_start', array("attr" => array("class" => "form-horizontal", "id" => "flyd_dashboardbundle_projectcanvastask"), "action" => $this->env->getExtension('routing')->getPath("projectcanvas_ajax_add_task", array("id" => $this->getAttribute($this->getContext($context, "entity"), "id", array())))));
        // line 110
        echo "
                            <h2 class=\"bloc__subtitle\">Ajouter une tâche</h2>
                            <div class=\"newtask\">  
                                <input type=\"hidden\" name=\"task_id\" id=\"task_id\" />
                                ";
        // line 114
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "pctform"), "position", array()), 'widget');
        echo "                      
                                ";
        // line 115
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getContext($context, "pctform"), "task", array()), "name", array()), 'label', array("label_attr" => array("class" => "control-label"), "label" => "Nom de la tâche"));
        echo "
                                ";
        // line 116
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getContext($context, "pctform"), "task", array()), "name", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "

                                ";
        // line 118
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getContext($context, "pctform"), "task", array()), "step", array()), 'label', array("label_attr" => array("class" => "control-label"), "label" => "Etape"));
        echo "
                                ";
        // line 119
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getContext($context, "pctform"), "task", array()), "step", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                            </div>
                        ";
        // line 121
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "pctform"), 'rest');
        echo "
                        ";
        // line 122
        echo         $this->env->getExtension('form')->renderer->renderBlock($this->getContext($context, "pctform"), 'form_end');
        echo "
                    </div>
                </div>
            </div>    
        </div>
    </div>

";
    }

    // line 131
    public function block_js($context, array $blocks = array())
    {
        // line 132
        echo "    <script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/vendor/jquery-ui/jquery-ui.min.js"), "html", null, true);
        echo "\"></script>
    <link href=\"";
        // line 133
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/vendor/jquery-ui/jquery-ui.min.css"), "html", null, true);
        echo "\"></link>
    <script>
    
        var tasks = [
            ";
        // line 137
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "minitasks"));
        foreach ($context['_seq'] as $context["_key"] => $context["mini"]) {
            // line 138
            echo "            { label: \"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["mini"], "name", array()), "html", null, true);
            echo "\", value: \"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["mini"], "name", array()), "html", null, true);
            echo "\", id: \"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["mini"], "id", array()), "html", null, true);
            echo "\", step: \"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["mini"], "step", array()), "html", null, true);
            echo "\" },
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['mini'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 140
        echo "        ];
        var updateOrderUrl = \"";
        // line 141
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("projectcanvas_ajax_reorder_tasks", array("id" => $this->getAttribute($this->getContext($context, "entity"), "id", array()))), "html", null, true);
        echo "\";
        var removeUrl = \"";
        // line 142
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("projectcanvas_ajax_delete_task", array("id" => $this->getAttribute($this->getContext($context, "entity"), "id", array()))), "html", null, true);
        echo "\";
        
    </script>
    <script type=\"text/javascript\" src=\"";
        // line 145
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/taskshandler.js"), "html", null, true);
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
        return array (  311 => 145,  305 => 142,  301 => 141,  298 => 140,  283 => 138,  279 => 137,  272 => 133,  267 => 132,  264 => 131,  252 => 122,  248 => 121,  243 => 119,  239 => 118,  234 => 116,  230 => 115,  226 => 114,  220 => 110,  218 => 104,  209 => 97,  203 => 93,  193 => 90,  189 => 89,  182 => 88,  178 => 87,  167 => 78,  165 => 77,  148 => 64,  142 => 61,  135 => 55,  125 => 48,  119 => 44,  114 => 42,  110 => 40,  102 => 35,  97 => 32,  95 => 31,  90 => 29,  76 => 18,  72 => 16,  69 => 15,  59 => 10,  55 => 9,  52 => 8,  49 => 7,  42 => 4,  39 => 3,  11 => 1,);
    }
}
