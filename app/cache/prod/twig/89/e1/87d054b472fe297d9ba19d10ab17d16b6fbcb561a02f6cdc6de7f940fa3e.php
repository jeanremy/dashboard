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
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_entity_, "need", array()), "client", array()), "html", null, true);
        echo " > ";
        if (isset($context["entity"])) { $_entity_ = $context["entity"]; } else { $_entity_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_entity_, "need", array()), "html", null, true);
        echo " > ";
        if (isset($context["entity"])) { $_entity_ = $context["entity"]; } else { $_entity_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_entity_, "title", array()), "html", null, true);
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
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("project_delete", array("id" => $this->getAttribute($_entity_, "id", array()))), "html", null, true);
        echo "\" class=\"btn--delete\">Delete</a>
        <a href=\"";
        // line 11
        if (isset($context["entity"])) { $_entity_ = $context["entity"]; } else { $_entity_ = null; }
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("project_edit", array("id" => $this->getAttribute($_entity_, "id", array()))), "html", null, true);
        echo "\" class=\"btn--edit\">Edit</a>

        <p class=\"breadcrumb\">
           <a href=\"";
        // line 14
        if (isset($context["entity"])) { $_entity_ = $context["entity"]; } else { $_entity_ = null; }
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("client_show", array("id" => $this->getAttribute($this->getAttribute($this->getAttribute($_entity_, "need", array()), "client", array()), "id", array()))), "html", null, true);
        echo "\">";
        if (isset($context["entity"])) { $_entity_ = $context["entity"]; } else { $_entity_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_entity_, "need", array()), "client", array()), "html", null, true);
        echo " ></a>
           <a href=\"";
        // line 15
        if (isset($context["entity"])) { $_entity_ = $context["entity"]; } else { $_entity_ = null; }
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("need_show", array("id" => $this->getAttribute($this->getAttribute($_entity_, "need", array()), "id", array()))), "html", null, true);
        echo "\">";
        if (isset($context["entity"])) { $_entity_ = $context["entity"]; } else { $_entity_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_entity_, "need", array()), "html", null, true);
        echo "</a>
        </p>
        <h1 class=\"lvl1\">";
        // line 17
        if (isset($context["entity"])) { $_entity_ = $context["entity"]; } else { $_entity_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_entity_, "title", array()), "html", null, true);
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
        // line 29
        if (isset($context["entity"])) { $_entity_ = $context["entity"]; } else { $_entity_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_entity_, "category", array()), "html", null, true);
        echo "</p>
                    </div>
                </div>

                <div class=\"form-group\">
                    <label class=\"control-label\">Date de début</label>

                    <div class=\"data\">
                        ";
        // line 37
        if (isset($context["entity"])) { $_entity_ = $context["entity"]; } else { $_entity_ = null; }
        echo twig_escape_filter($this->env, twig_localized_date_filter($this->env, $this->getAttribute($_entity_, "startDate", array()), "full", "none", "fr"), "html", null, true);
        echo "
                    </div>
                </div>

                <div class=\"form-group\">
                    <label class=\"control-label\">Deadline</label>

                    <div class=\"data\">
                        ";
        // line 45
        if (isset($context["entity"])) { $_entity_ = $context["entity"]; } else { $_entity_ = null; }
        echo twig_escape_filter($this->env, twig_localized_date_filter($this->env, $this->getAttribute($_entity_, "deadline", array()), "full", "none", "fr"), "html", null, true);
        echo "
                    </div>
                </div>

                <div class=\"form-group\">
                    <label class=\"control-label\">Date de fin</label>

                    <div class=\"data\">
                        ";
        // line 53
        if (isset($context["entity"])) { $_entity_ = $context["entity"]; } else { $_entity_ = null; }
        echo twig_escape_filter($this->env, twig_localized_date_filter($this->env, $this->getAttribute($_entity_, "endDate", array()), "full", "none", "fr"), "html", null, true);
        echo "
                    </div>
                </div>


            </div>
            <div class=\"bloc project__suppliers\">
                <h2 class=\"bloc__title\">Fournisseurs</h2>
                <div class=\"row\">
                    ";
        // line 62
        if (isset($context["entity"])) { $_entity_ = $context["entity"]; } else { $_entity_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($_entity_, "suppliers", array()));
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
            // line 63
            echo "                        ";
            $this->env->loadTemplate("FlydDashboardBundle:Supplier:mini.html.twig")->display($context);
            // line 64
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
        // line 65
        echo "                </div>
                <button class=\"btn--add\">+</button>
                ";
        // line 67
        if (isset($context["entity"])) { $_entity_ = $context["entity"]; } else { $_entity_ = null; }
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("FlydDashboardBundle:Supplier:getForm", array("id" => $this->getAttribute($_entity_, "id", array()))));
        echo "
                
            </div>
        </div>
        <div class=\"col-sm-4\">
            <div class=\"bloc project__team\">
                <h2 class=\"bloc__title\">équipe</h2>
                <div class=\"row\">                    
                ";
        // line 75
        if (isset($context["entity"])) { $_entity_ = $context["entity"]; } else { $_entity_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($_entity_, "users", array()));
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
            // line 76
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
        // line 78
        echo "                </div>                
                <button class=\"btn--add\">+</button>
                ";
        // line 80
        if (isset($context["entity"])) { $_entity_ = $context["entity"]; } else { $_entity_ = null; }
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("FlydDashboardBundle:User:getForm", array("id" => $this->getAttribute($_entity_, "id", array()))));
        echo "                
            </div>
        </div>
        <div class=\"col-sm-12\">
            <div class=\"bloc\">
                <h2 class=\"bloc__title\">Tâches prédéfinies</h2>
                ";
        // line 86
        if (isset($context["entity"])) { $_entity_ = $context["entity"]; } else { $_entity_ = null; }
        if ($this->getAttribute($_entity_, "projecttaskusers", array())) {
            // line 87
            echo "                <table class=\"taskcontainer\">
                    <thead class=\"thead\">
                        <tr>
                            <th>Êtapes</th>
                            <th>Tâche</th>
                            <th>Temps estimé</th>
                            <th>Temps réel</th>
                            <th>Statut</th>
                            <th>Personne</th>
                            <th>Important</th>
                            <th>Suppr</th>
                        </tr>
                    </thead>

                    <tbody class=\"tbody\">
                    ";
            // line 102
            if (isset($context["forms"])) { $_forms_ = $context["forms"]; } else { $_forms_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($_forms_);
            foreach ($context['_seq'] as $context["_key"] => $context["form"]) {
                // line 103
                echo "                        
                        <tr class=\"task sortable\">
                            ";
                // line 105
                if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
                echo                 $this->env->getExtension('form')->renderer->renderBlock($_form_, 'form_start', array("attr" => array("class" => "form-horizontal")));
                echo "
                                <td>
                                    ";
                // line 107
                if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($_form_, "task", array()), "step", array()), 'widget', array("attr" => array("class" => "form-control")));
                echo "   
                                    ";
                // line 108
                if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($_form_, "position", array()), 'widget', array("attr" => array("class" => "form-control")));
                echo "                              
                                </td>
                                <td>
                                    ";
                // line 111
                if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($_form_, "task", array()), "name", array()), 'widget', array("attr" => array("class" => "form-control")));
                echo "                                    
                                </td>
                                <td>
                                    ";
                // line 114
                if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($_form_, "estimatedtime", array()), 'widget', array("attr" => array("class" => "form-control")));
                echo "                                     
                                </td>
                                <td>
                                    ";
                // line 117
                if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($_form_, "realtime", array()), 'widget', array("attr" => array("class" => "form-control")));
                echo "  
                                </td>
                                <td>
                                    ";
                // line 120
                if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($_form_, "status", array()), 'widget', array("attr" => array("class" => "form-control")));
                echo "                                  
                                </td>
                                <td>
                                    ";
                // line 123
                if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($_form_, "user", array()), 'widget', array("attr" => array("class" => "form-control")));
                echo " 
                                </td>
                                <td>
                                    ";
                // line 126
                if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($_form_, "isimportant", array()), 'widget', array("attr" => array("class" => "form-control")));
                echo " 
                                </td>
                                <td><a href=\"\" class=\"line--remove remove-task\">Retirer</a></td>
                                ";
                // line 129
                if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($_form_, 'rest');
                echo "
                                ";
                // line 130
                if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
                echo                 $this->env->getExtension('form')->renderer->renderBlock($_form_, 'form_end');
                echo "
                            </form>
                        </tr>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['form'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 133
            echo "                        
                    </tbody>
                </table>
                ";
        }
        // line 137
        echo "            </div>
        </div>
    </div>

";
    }

    // line 143
    public function block_js($context, array $blocks = array())
    {
        // line 144
        echo "     <script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/flyddashboard/js/additems.js"), "html", null, true);
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
        return array (  378 => 144,  375 => 143,  367 => 137,  361 => 133,  350 => 130,  345 => 129,  338 => 126,  331 => 123,  324 => 120,  317 => 117,  310 => 114,  303 => 111,  296 => 108,  291 => 107,  285 => 105,  281 => 103,  276 => 102,  259 => 87,  256 => 86,  246 => 80,  242 => 78,  225 => 76,  207 => 75,  195 => 67,  191 => 65,  177 => 64,  174 => 63,  156 => 62,  143 => 53,  131 => 45,  119 => 37,  107 => 29,  91 => 17,  82 => 15,  74 => 14,  67 => 11,  62 => 10,  58 => 8,  55 => 7,  41 => 4,  38 => 3,  11 => 1,);
    }
}
