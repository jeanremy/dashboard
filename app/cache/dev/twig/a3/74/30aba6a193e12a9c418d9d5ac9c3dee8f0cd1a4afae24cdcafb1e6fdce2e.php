<?php

/* FlydDashboardBundle:ProjectTaskUser:mini.html.twig */
class __TwigTemplate_a37430aba6a193e12a9c418d9d5ac9c3dee8f0cd1a4afae24cdcafb1e6fdce2e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<div class=\"task sortable clearfix\" id=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ptu"]) ? $context["ptu"] : $this->getContext($context, "ptu")), "id", array()), "html", null, true);
        echo "\" data-status=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["ptu"]) ? $context["ptu"] : $this->getContext($context, "ptu")), "status", array()), "slug", array()), "html", null, true);
        echo "\">
    ";
        // line 2
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("attr" => array("class" => "form-horizontal"), "action" => $this->env->getExtension('routing')->getPath("projecttaskuser_ajax_edit_ptu", array("id" => $this->getAttribute((isset($context["ptu"]) ? $context["ptu"] : $this->getContext($context, "ptu")), "id", array())))));
        // line 9
        echo "
        <div class=\"task__isimportant\">
            ";
        // line 11
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "isimportant", array()), 'widget', array("id" => ("task-" . $this->getAttribute((isset($context["ptu"]) ? $context["ptu"] : $this->getContext($context, "ptu")), "id", array())), "attr" => array("class" => "form-control")));
        // line 12
        echo "
             <label for=\"task-";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ptu"]) ? $context["ptu"] : $this->getContext($context, "ptu")), "id", array()), "html", null, true);
        echo "\" class=\"sprite\"></label>
        </div>
        <div class=\"task__main\">            
            <p class=\"task__name\">";
        // line 16
        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["ptu"]) ? $context["ptu"] : $this->getContext($context, "ptu")), "task", array()), "name", array())), "html", null, true);
        echo "<span class=\"task__step\"> / ";
        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["ptu"]) ? $context["ptu"] : $this->getContext($context, "ptu")), "task", array()), "step", array())), "html", null, true);
        echo "</span></p>
            <p class=\"task__status\">";
        // line 17
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "status", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "</p>
        </div>
        <div class=\"task__remove\">
            <a href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("project_ajax_remove_ptu", array("id" => $this->getAttribute((isset($context["ptu"]) ? $context["ptu"] : $this->getContext($context, "ptu")), "id", array()))), "html", null, true);
        echo "\" class=\"line--remove remove-task\" data-id=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ptu"]) ? $context["ptu"] : $this->getContext($context, "ptu")), "id", array()), "html", null, true);
        echo "\">Retirer</a>
        </div>
        <div class=\"task__infos\">
            <div class=\"info\">
                ";
        // line 24
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "estimatedtime", array()), 'label', array("label_attr" => array("class" => "control-label"), "label" => "Temps estimé"));
        echo "
                ";
        // line 25
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "estimatedtime", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
            </div>
            <div class=\"info\">
                ";
        // line 28
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "realtime", array()), 'label', array("label_attr" => array("class" => "control-label"), "label" => "Temps réel"));
        echo "
                ";
        // line 29
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "realtime", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
            </div>
            <div class=\"info\">
                ";
        // line 32
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "user", array()), 'label', array("label_attr" => array("class" => "control-label"), "label" => "Personne"));
        echo "
                ";
        // line 33
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "user", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
            </div>
        </div>
        ";
        // line 36
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "position", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
        ";
        // line 37
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
    ";
        // line 38
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
</div>";
    }

    public function getTemplateName()
    {
        return "FlydDashboardBundle:ProjectTaskUser:mini.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  102 => 38,  98 => 37,  94 => 36,  88 => 33,  84 => 32,  78 => 29,  74 => 28,  68 => 25,  64 => 24,  55 => 20,  49 => 17,  43 => 16,  37 => 13,  34 => 12,  32 => 11,  28 => 9,  26 => 2,  19 => 1,);
    }
}
