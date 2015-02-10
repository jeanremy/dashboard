<?php

/* FlydDashboardBundle:Supplier:delete.html.twig */
class __TwigTemplate_8be77485c3151d3daa504ad3c44e127b13d51b5561998b343031a95272430ddf extends Twig_Template
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
        echo " - Supprimer </title>
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
        echo "</h1>
    </div>
    



    <div class=\"row\">
        <div class=\"col-sm-12\">
            <div class=\"bloc bloc--general bloc-inline-edition edit\">
                <p>Êtes-vous sûr de vouloir effacer ";
        // line 19
        if (isset($context["entity"])) { $_entity_ = $context["entity"]; } else { $_entity_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_entity_, "name", array()), "html", null, true);
        echo " ?</p>
                 <form action=\"";
        // line 20
        if (isset($context["entity"])) { $_entity_ = $context["entity"]; } else { $_entity_ = null; }
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("supplier_delete", array("id" => $this->getAttribute($_entity_, "id", array()))), "html", null, true);
        echo "\" method=\"post\">
                    <a href=\"";
        // line 21
        if (isset($context["entity"])) { $_entity_ = $context["entity"]; } else { $_entity_ = null; }
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("supplier_show", array("id" => $this->getAttribute($_entity_, "id", array()))), "html", null, true);
        echo "\" class=\"btn--save--reverse\">
                      Retour au fournisseur
                    </a>
                    ";
        // line 25
        echo "                    <button type=\"submit\" class=\"btn--delete--reverse\">Supprimer</button>
                    ";
        // line 27
        echo "                    ";
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($_form_, 'rest');
        echo "
                  </form>
            </div>
        </div>
    </div>



\t

";
    }

    // line 39
    public function block_js($context, array $blocks = array())
    {
        // line 40
        echo "    <script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/flyddashboard/js/additems.js"), "html", null, true);
        echo "\"></script>
";
    }

    public function getTemplateName()
    {
        return "FlydDashboardBundle:Supplier:delete.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  109 => 40,  106 => 39,  89 => 27,  86 => 25,  79 => 21,  74 => 20,  69 => 19,  56 => 10,  52 => 8,  49 => 7,  41 => 4,  38 => 3,  11 => 1,);
    }
}
