<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_7789500e9287fbbbf1b81c4289ac732241e2d91cc1274ae653795bde8a14638c extends Twig_Template
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
        $__internal_efd05b59d50ced4f9b8b681e0af04390d2db52ea4d468db5c71aa406d21dd497 = $this->env->getExtension("native_profiler");
        $__internal_efd05b59d50ced4f9b8b681e0af04390d2db52ea4d468db5c71aa406d21dd497->enter($__internal_efd05b59d50ced4f9b8b681e0af04390d2db52ea4d468db5c71aa406d21dd497_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_efd05b59d50ced4f9b8b681e0af04390d2db52ea4d468db5c71aa406d21dd497->leave($__internal_efd05b59d50ced4f9b8b681e0af04390d2db52ea4d468db5c71aa406d21dd497_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {{ status_code }} {{ status_text }}*/
/* */
/* *//* */
/* */
