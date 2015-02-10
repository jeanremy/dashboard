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
        echo "    <div class=\"title__container\">
        <a href=\"";
        // line 9
        if (isset($context["entity"])) { $_entity_ = $context["entity"]; } else { $_entity_ = null; }
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("projectcanvas_delete", array("id" => $this->getAttribute($_entity_, "id", array()))), "html", null, true);
        echo "\" class=\"btn--delete\">Delete</a>
        <a href=\"";
        // line 10
        if (isset($context["entity"])) { $_entity_ = $context["entity"]; } else { $_entity_ = null; }
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("projectcanvas_edit", array("id" => $this->getAttribute($_entity_, "id", array()))), "html", null, true);
        echo "\" class=\"btn--edit\">Edit</a>

        <h1 class=\"lvl1\">";
        // line 12
        if (isset($context["entity"])) { $_entity_ = $context["entity"]; } else { $_entity_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_entity_, "name", array()), "html", null, true);
        echo "</h1>
    </div>
    

    <div class=\"row\">
        <div class=\"col-sm-12\">
            <div class=\"bloc bloc-inline-edition\">
                <h2 class=\"bloc__title\">Tâches prédéfinies</h2>
                ";
        // line 20
        if (isset($context["entity"])) { $_entity_ = $context["entity"]; } else { $_entity_ = null; }
        if ($this->getAttribute($_entity_, "projectcanvastasks", array())) {
            // line 21
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
            // line 30
            if (isset($context["entity"])) { $_entity_ = $context["entity"]; } else { $_entity_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($_entity_, "projectcanvastasks", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["pct"]) {
                // line 31
                echo "                        <tr id=\"";
                if (isset($context["pct"])) { $_pct_ = $context["pct"]; } else { $_pct_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_pct_, "id", array()), "html", null, true);
                echo "\" class=\"task sortable\" data-position=\"";
                if (isset($context["pct"])) { $_pct_ = $context["pct"]; } else { $_pct_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_pct_, "position", array()), "html", null, true);
                echo "\">
                            <td>";
                // line 32
                if (isset($context["pct"])) { $_pct_ = $context["pct"]; } else { $_pct_ = null; }
                echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute($this->getAttribute($_pct_, "task", array()), "step", array())), "html", null, true);
                echo "</td>
                            <td>";
                // line 33
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
            // line 36
            echo "                        
                    </tbody>
                </table>
                ";
        }
        // line 40
        echo "               
                <!-- Form pour créer pct avec task imbriquée -->
                ";
        // line 42
        if (isset($context["pctform"])) { $_pctform_ = $context["pctform"]; } else { $_pctform_ = null; }
        if (isset($context["entity"])) { $_entity_ = $context["entity"]; } else { $_entity_ = null; }
        echo         $this->env->getExtension('form')->renderer->renderBlock($_pctform_, 'form_start', array("attr" => array("class" => "form-horizontal", "id" => "flyd_dashboardbundle_projectcanvastask"), "action" => $this->env->getExtension('routing')->getPath("projectcanvas_ajax_add_task", array("id" => $this->getAttribute($_entity_, "id", array())))));
        // line 48
        echo "
                    <h2 class=\"bloc__subtitle\">Ajouter une tâche</h2>
                    <div class=\"newtask\">  
                        <input type=\"hidden\" name=\"task_id\" id=\"task_id\" />
                        ";
        // line 52
        if (isset($context["pctform"])) { $_pctform_ = $context["pctform"]; } else { $_pctform_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($_pctform_, "position", array()), 'widget');
        echo "                      
                        ";
        // line 53
        if (isset($context["pctform"])) { $_pctform_ = $context["pctform"]; } else { $_pctform_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($_pctform_, "task", array()), "name", array()), 'label', array("label_attr" => array("class" => "control-label"), "label" => "Nom de la tâche"));
        echo "
                        ";
        // line 54
        if (isset($context["pctform"])) { $_pctform_ = $context["pctform"]; } else { $_pctform_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($_pctform_, "task", array()), "name", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "

                        ";
        // line 56
        if (isset($context["pctform"])) { $_pctform_ = $context["pctform"]; } else { $_pctform_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($_pctform_, "task", array()), "step", array()), 'label', array("label_attr" => array("class" => "control-label"), "label" => "Etape"));
        echo "
                        ";
        // line 57
        if (isset($context["pctform"])) { $_pctform_ = $context["pctform"]; } else { $_pctform_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($_pctform_, "task", array()), "step", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                    </div>


                ";
        // line 61
        if (isset($context["pctform"])) { $_pctform_ = $context["pctform"]; } else { $_pctform_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($_pctform_, 'rest');
        echo "
                ";
        // line 62
        if (isset($context["pctform"])) { $_pctform_ = $context["pctform"]; } else { $_pctform_ = null; }
        echo         $this->env->getExtension('form')->renderer->renderBlock($_pctform_, 'form_end');
        echo "
            </div>      
        </div>
    </div>

";
    }

    // line 69
    public function block_js($context, array $blocks = array())
    {
        // line 70
        echo "    <script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/flyddashboard/js/vendor/jquery-ui/jquery-ui.min.js"), "html", null, true);
        echo "\"></script>
    <link href=\"";
        // line 71
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/flyddashboard/js/vendor/jquery-ui/jquery-ui.min.css"), "html", null, true);
        echo "\"></link>
    <script>
    
        var tasks = [
            ";
        // line 75
        if (isset($context["minitasks"])) { $_minitasks_ = $context["minitasks"]; } else { $_minitasks_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($_minitasks_);
        foreach ($context['_seq'] as $context["_key"] => $context["mini"]) {
            // line 76
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
        // line 78
        echo "        ];

        var updateOrderUrl = \"";
        // line 80
        if (isset($context["entity"])) { $_entity_ = $context["entity"]; } else { $_entity_ = null; }
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("projectcanvas_ajax_reorder_tasks", array("id" => $this->getAttribute($_entity_, "id", array()))), "html", null, true);
        echo "\";
        var removeUrl = \"";
        // line 81
        if (isset($context["entity"])) { $_entity_ = $context["entity"]; } else { $_entity_ = null; }
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("projectcanvas_ajax_delete_task", array("id" => $this->getAttribute($_entity_, "id", array()))), "html", null, true);
        echo "\";

    </script>
    <script type=\"text/javascript\" src=\"";
        // line 84
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/flyddashboard/js/taskshandler.js"), "html", null, true);
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
        return array (  242 => 84,  235 => 81,  230 => 80,  226 => 78,  207 => 76,  202 => 75,  195 => 71,  190 => 70,  187 => 69,  176 => 62,  171 => 61,  163 => 57,  158 => 56,  152 => 54,  147 => 53,  142 => 52,  136 => 48,  132 => 42,  128 => 40,  122 => 36,  111 => 33,  106 => 32,  97 => 31,  92 => 30,  81 => 21,  78 => 20,  66 => 12,  60 => 10,  55 => 9,  52 => 8,  49 => 7,  41 => 4,  38 => 3,  11 => 1,);
    }
}
