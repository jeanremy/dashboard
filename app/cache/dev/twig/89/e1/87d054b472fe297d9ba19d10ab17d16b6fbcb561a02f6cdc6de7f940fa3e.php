<?php

/* FlydDashboardBundle:Project:show.html.twig */
class __TwigTemplate_89e187d054b472fe297d9ba19d10ab17d16b6fbcb561a02f6cdc6de7f940fa3e extends Twig_Template
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
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "title", array()), "html", null, true);
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
        <span class=\"prev\"><a href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("client_show", array("id" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "need", array()), "client", array()), "id", array()))), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "need", array()), "client", array()), "html", null, true);
        echo "</a></span>
        <span class=\"prev\"><a href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("need_show", array("id" => $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "need", array()), "id", array()))), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "need", array()), "html", null, true);
        echo "</a></span>
        ";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "title", array()), "html", null, true);
        echo "
    </p>
";
    }

    // line 16
    public function block_body($context, array $blocks = array())
    {
        // line 17
        echo "    
    <div class=\"title__container\">
        <a href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("project_delete", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()))), "html", null, true);
        echo "\" class=\"btn--delete\">Delete</a>
        <a href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("project_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()))), "html", null, true);
        echo "\" class=\"btn--edit\">Edit</a>

        <h1 class=\"lvl1\">";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "title", array()), "html", null, true);
        echo "</h1>
    </div>


    <div class=\"row\">
        <div class=\"col-sm-8\">
            <div class=\"bloc bloc-inline-edition\">
                <h2 class=\"bloc__title\">Informations générales</h2>

                <div class=\"form-group\">
                    <label class=\"control-label\">Catégorie</label>

                    <div class=\"data\">
                        <p>";
        // line 35
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "category", array()), "name", array()), "html", null, true);
        echo "</p>
                    </div>
                </div>
                
                ";
        // line 39
        if ($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "status", array())) {
            // line 40
            echo "                <div class=\"form-group\">
                    <label class=\"control-label\">Statut</label>

                    <div class=\"data\">
                        <p id=\"status__name\">";
            // line 44
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "status", array()), "name", array()), "html", null, true);
            echo "</p>
                    </div>
                </div>
                ";
        }
        // line 48
        echo "
                <div class=\"form-group\">
                    <label class=\"control-label\">Date de début</label>

                    <div class=\"data\">
                        ";
        // line 53
        echo twig_escape_filter($this->env, twig_localized_date_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "startDate", array()), "full", "none", "fr"), "html", null, true);
        echo "
                    </div>
                </div>

                <div class=\"form-group\">
                    <label class=\"control-label\">Deadline</label>

                    <div class=\"data\">
                        ";
        // line 61
        echo twig_escape_filter($this->env, twig_localized_date_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "deadline", array()), "full", "none", "fr"), "html", null, true);
        echo "
                    </div>
                </div>

                <div class=\"form-group\">
                    <label class=\"control-label\">Date de fin</label>

                    <div class=\"data\">
                        ";
        // line 69
        echo twig_escape_filter($this->env, twig_localized_date_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "endDate", array()), "full", "none", "fr"), "html", null, true);
        echo "
                    </div>
                </div>


            </div>
            <div class=\"bloc project__suppliers\">
                <h2 class=\"bloc__title\">Fournisseurs</h2>
                <div class=\"row\">
                    ";
        // line 78
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "suppliers", array()));
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
        foreach ($context['_seq'] as $context["_key"] => $context["supplier"]) {
            // line 79
            echo "                        ";
            $this->env->loadTemplate("FlydDashboardBundle:Supplier:mini.html.twig")->display($context);
            // line 80
            echo "                    ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['supplier'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 81
        echo "                </div>
                <button class=\"btn--add\">+</button>
                ";
        // line 83
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("FlydDashboardBundle:Supplier:getForm", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()))));
        echo "
                
            </div>
        </div>
        <div class=\"col-sm-4\">
            <div class=\"bloc project__team\">
                <h2 class=\"bloc__title\">équipe</h2>
                <div class=\"row\">                    
                ";
        // line 91
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "users", array()));
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
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 92
            echo "                    ";
            $this->env->loadTemplate("FlydDashboardBundle:User:mini.html.twig")->display($context);
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 94
        echo "                </div>                
                <button class=\"btn--add\">+</button>
                ";
        // line 96
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("FlydDashboardBundle:User:getForm", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()))));
        echo "                
            </div>
        </div>
        <div class=\"col-sm-12\">
            <div class=\"bloc\">
                <h2 class=\"bloc__title\">Tâches</h2>
                <div class=\"row\">
                    <div class=\"col-sm-12 tasks\">                          
                        ";
        // line 104
        if ($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "projecttaskusers", array())) {
            // line 105
            echo "                            ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "projecttaskusers", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["ptu"]) {
                // line 106
                echo "                               ";
                echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("FlydDashboardBundle:ProjectTaskUser:getForm", array("id" => $this->getAttribute($context["ptu"], "id", array()))));
                echo "                                   
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ptu'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 107
            echo "  
                        ";
        }
        // line 108
        echo "  
                    </div>
                </div>
                <button class=\"btn--add\">+</button>
                <div class=\"row\">
                    <div class=\"col-sm-12\">
                        <!-- Form pour créer ptu avec task imbriquée -->
                        ";
        // line 115
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["ptuform"]) ? $context["ptuform"] : $this->getContext($context, "ptuform")), 'form_start', array("attr" => array("class" => "form-horizontal", "id" => "flyd_dashboardbundle_projecttaskuser"), "action" => $this->env->getExtension('routing')->getPath("project_ajax_add_ptu", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array())))));
        // line 121
        echo "
                            <h2 class=\"bloc__subtitle\">Ajouter une tâche</h2>
                            <div class=\"newtask\">  
                                <input type=\"hidden\" name=\"task_id\" id=\"task_id\" />
                                ";
        // line 125
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["ptuform"]) ? $context["ptuform"] : $this->getContext($context, "ptuform")), "position", array()), 'widget');
        echo "                      
                                ";
        // line 126
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["ptuform"]) ? $context["ptuform"] : $this->getContext($context, "ptuform")), "task", array()), "step", array()), 'label', array("label_attr" => array("class" => "control-label"), "label" => "Etape"));
        echo "
                                ";
        // line 127
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["ptuform"]) ? $context["ptuform"] : $this->getContext($context, "ptuform")), "task", array()), "step", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "

                                ";
        // line 129
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["ptuform"]) ? $context["ptuform"] : $this->getContext($context, "ptuform")), "task", array()), "name", array()), 'label', array("label_attr" => array("class" => "control-label"), "label" => "Nom de la tâche"));
        echo "
                                ";
        // line 130
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["ptuform"]) ? $context["ptuform"] : $this->getContext($context, "ptuform")), "task", array()), "name", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "

                               
                            </div>


                        ";
        // line 136
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["ptuform"]) ? $context["ptuform"] : $this->getContext($context, "ptuform")), 'rest');
        echo "
                        ";
        // line 137
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["ptuform"]) ? $context["ptuform"] : $this->getContext($context, "ptuform")), 'form_end');
        echo "
                    </div>
                </div>
                
            </div>
        </div>
    </div>

";
    }

    // line 147
    public function block_js($context, array $blocks = array())
    {
        // line 148
        echo "    <script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/vendor/jquery-ui/jquery-ui.min.js"), "html", null, true);
        echo "\"></script>
    <link href=\"";
        // line 149
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/vendor/jquery-ui/jquery-ui.min.css"), "html", null, true);
        echo "\"></link>
    <script>
    
        var tasks = [
            ";
        // line 153
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["minitasks"]) ? $context["minitasks"] : $this->getContext($context, "minitasks")));
        foreach ($context['_seq'] as $context["_key"] => $context["mini"]) {
            // line 154
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
        // line 156
        echo "        ];

        var updateOrderUrl = \"";
        // line 158
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("project_ajax_reorder_ptus", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()))), "html", null, true);
        echo "\";
        var removeUrl = \"";
        // line 159
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("project_ajax_remove_ptu", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()))), "html", null, true);
        echo "\";
        var updateStatusUrl = \"";
        // line 160
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("project_ajax_update_status", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()))), "html", null, true);
        echo "\";
        var statusCont = \$(\"#status__name\");

    </script>
    <script type=\"text/javascript\" src=\"";
        // line 164
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/projecttaskshandler.js"), "html", null, true);
        echo "\"></script>
     <script type=\"text/javascript\" src=\"";
        // line 165
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/additems.js"), "html", null, true);
        echo "\"></script>   
";
    }

    public function getTemplateName()
    {
        return "FlydDashboardBundle:Project:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  408 => 165,  404 => 164,  397 => 160,  393 => 159,  389 => 158,  385 => 156,  370 => 154,  366 => 153,  359 => 149,  354 => 148,  351 => 147,  338 => 137,  334 => 136,  325 => 130,  321 => 129,  316 => 127,  312 => 126,  308 => 125,  302 => 121,  300 => 115,  291 => 108,  287 => 107,  278 => 106,  273 => 105,  271 => 104,  260 => 96,  256 => 94,  239 => 92,  222 => 91,  211 => 83,  207 => 81,  193 => 80,  190 => 79,  173 => 78,  161 => 69,  150 => 61,  139 => 53,  132 => 48,  125 => 44,  119 => 40,  117 => 39,  110 => 35,  94 => 22,  89 => 20,  85 => 19,  81 => 17,  78 => 16,  71 => 12,  65 => 11,  59 => 10,  55 => 9,  52 => 8,  49 => 7,  42 => 4,  39 => 3,  11 => 1,);
    }
}
