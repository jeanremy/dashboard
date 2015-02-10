<?php

/* FlydDashboardBundle:ProjectCanvas:show.html.twig */
class __TwigTemplate_6f45ff5afcbc9c6d6acbe94573f099de11651ca0ffd83847ddf7c474e8572de3 extends Twig_Template
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
        echo $this->env->getExtension('routing')->getPath("projectcanvas_list");
        echo "\">Canevas de projet</a></span>
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
        echo "    <div class=\"title__container\">
        <a href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("projectcanvas_delete", array("id" => $this->getAttribute($this->getContext($context, "entity"), "id", array()))), "html", null, true);
        echo "\" class=\"btn--delete\">Delete</a>
        <a href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("projectcanvas_edit", array("id" => $this->getAttribute($this->getContext($context, "entity"), "id", array()))), "html", null, true);
        echo "\" class=\"btn--edit\">Edit</a>

        <h1 class=\"lvl1\">";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "name", array()), "html", null, true);
        echo "</h1>
    </div>
    

    <div class=\"row\">
        <div class=\"col-sm-12\">
            <div class=\"bloc bloc-inline-edition\">
                <h2 class=\"bloc__title\">Tâches prédéfinies</h2>
                <div class=\"row\">
                    <div class=\"col-sm-12\">                        
                        ";
        // line 29
        if ($this->getAttribute($this->getContext($context, "entity"), "projectcanvastasks", array())) {
            // line 30
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
            // line 39
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getContext($context, "entity"), "projectcanvastasks", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["pct"]) {
                // line 40
                echo "                                <tr id=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["pct"], "id", array()), "html", null, true);
                echo "\" class=\"task sortable\" data-position=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["pct"], "position", array()), "html", null, true);
                echo "\">
                                    <td>";
                // line 41
                echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute($this->getAttribute($context["pct"], "task", array()), "step", array())), "html", null, true);
                echo "</td>
                                    <td>";
                // line 42
                echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute($this->getAttribute($context["pct"], "task", array()), "name", array())), "html", null, true);
                echo "</td>
                                    <td><a href=\"\" class=\"line--remove remove-task\">Retirer</a></td>
                                </tr>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pct'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 45
            echo "                        
                            </tbody>
                        </table>
                        ";
        }
        // line 49
        echo "                    </div>
                </div>
                <button class=\"btn--add\">+</button>
                <div class=\"row\">
                    <div class=\"col-sm-12\">                        
                        <!-- Form pour créer pct avec task imbriquée -->
                        ";
        // line 55
        echo         $this->env->getExtension('form')->renderer->renderBlock($this->getContext($context, "pctform"), 'form_start', array("attr" => array("class" => "form-horizontal", "id" => "flyd_dashboardbundle_projectcanvastask"), "action" => $this->env->getExtension('routing')->getPath("projectcanvas_ajax_add_task", array("id" => $this->getAttribute($this->getContext($context, "entity"), "id", array())))));
        // line 61
        echo "
                            <h2 class=\"bloc__subtitle\">Ajouter une tâche</h2>
                            <div class=\"newtask\">  
                                <input type=\"hidden\" name=\"task_id\" id=\"task_id\" />
                                ";
        // line 65
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "pctform"), "position", array()), 'widget');
        echo "                      
                                ";
        // line 66
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getContext($context, "pctform"), "task", array()), "name", array()), 'label', array("label_attr" => array("class" => "control-label"), "label" => "Nom de la tâche"));
        echo "
                                ";
        // line 67
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getContext($context, "pctform"), "task", array()), "name", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "

                                ";
        // line 69
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getContext($context, "pctform"), "task", array()), "step", array()), 'label', array("label_attr" => array("class" => "control-label"), "label" => "Etape"));
        echo "
                                ";
        // line 70
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getContext($context, "pctform"), "task", array()), "step", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                            </div>


                        ";
        // line 74
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "pctform"), 'rest');
        echo "
                        ";
        // line 75
        echo         $this->env->getExtension('form')->renderer->renderBlock($this->getContext($context, "pctform"), 'form_end');
        echo "
                    </div>
                </div>
               
            </div>      
        </div>
    </div>

";
    }

    // line 85
    public function block_js($context, array $blocks = array())
    {
        // line 86
        echo "    <script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/vendor/jquery-ui/jquery-ui.min.js"), "html", null, true);
        echo "\"></script>
    <link href=\"";
        // line 87
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/vendor/jquery-ui/jquery-ui.min.css"), "html", null, true);
        echo "\"></link>
    <script>
    
        var tasks = [
            ";
        // line 91
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "minitasks"));
        foreach ($context['_seq'] as $context["_key"] => $context["mini"]) {
            // line 92
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
        // line 94
        echo "        ];

        var updateOrderUrl = \"";
        // line 96
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("projectcanvas_ajax_reorder_tasks", array("id" => $this->getAttribute($this->getContext($context, "entity"), "id", array()))), "html", null, true);
        echo "\";
        var removeUrl = \"";
        // line 97
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("projectcanvas_ajax_delete_task", array("id" => $this->getAttribute($this->getContext($context, "entity"), "id", array()))), "html", null, true);
        echo "\";

    </script>
    <script type=\"text/javascript\" src=\"";
        // line 100
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/taskshandler.js"), "html", null, true);
        echo "\"></script>
";
    }

    public function getTemplateName()
    {
        return "FlydDashboardBundle:ProjectCanvas:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  243 => 100,  237 => 97,  233 => 96,  229 => 94,  214 => 92,  210 => 91,  203 => 87,  198 => 86,  195 => 85,  182 => 75,  178 => 74,  171 => 70,  167 => 69,  162 => 67,  158 => 66,  154 => 65,  148 => 61,  146 => 55,  138 => 49,  132 => 45,  122 => 42,  118 => 41,  111 => 40,  107 => 39,  96 => 30,  94 => 29,  81 => 19,  76 => 17,  72 => 16,  69 => 15,  66 => 14,  59 => 10,  55 => 9,  52 => 8,  49 => 7,  42 => 4,  39 => 3,  11 => 1,);
    }
}
