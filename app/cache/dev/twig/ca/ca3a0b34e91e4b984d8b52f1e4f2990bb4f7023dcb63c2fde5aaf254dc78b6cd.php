<?php

/* EventBundle::layout.html.twig */
class __TwigTemplate_13379975dba240a2d5c8b3fd328841b50d28c346ec918709f15901c569f89b8e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "EventBundle::layout.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_87bf45baa897d09fa3c9d0da2d6f7574c30456c224b848ea7be93604cdd43adb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_87bf45baa897d09fa3c9d0da2d6f7574c30456c224b848ea7be93604cdd43adb->enter($__internal_87bf45baa897d09fa3c9d0da2d6f7574c30456c224b848ea7be93604cdd43adb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EventBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_87bf45baa897d09fa3c9d0da2d6f7574c30456c224b848ea7be93604cdd43adb->leave($__internal_87bf45baa897d09fa3c9d0da2d6f7574c30456c224b848ea7be93604cdd43adb_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_28fcceb33aad22bc00f83c90b9337a4083c79395b823cf63f1dede39179c9742 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_28fcceb33aad22bc00f83c90b9337a4083c79395b823cf63f1dede39179c9742->enter($__internal_28fcceb33aad22bc00f83c90b9337a4083c79395b823cf63f1dede39179c9742_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Events";
        
        $__internal_28fcceb33aad22bc00f83c90b9337a4083c79395b823cf63f1dede39179c9742->leave($__internal_28fcceb33aad22bc00f83c90b9337a4083c79395b823cf63f1dede39179c9742_prof);

    }

    public function getTemplateName()
    {
        return "EventBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  34 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '::base.html.twig' %}

{% block title 'Events' %}

", "EventBundle::layout.html.twig", "/Users/christos.paraskeva/Documents/my_projects/symfony_tutorial_new/src/Bundle/EventBundle/Resources/views/layout.html.twig");
    }
}
