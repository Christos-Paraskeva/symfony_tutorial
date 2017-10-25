<?php

/* EventBundle::layout.html.twig */
class __TwigTemplate_90305d48c1e20ec4f0456e4af54c8516d57b985f173df5def1fbc7f09bd14431 extends Twig_Template
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
        $__internal_9c3869702d0ec996acf36daee13c0b57c0bb8ad14632cbe9b6984ab9616499d3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9c3869702d0ec996acf36daee13c0b57c0bb8ad14632cbe9b6984ab9616499d3->enter($__internal_9c3869702d0ec996acf36daee13c0b57c0bb8ad14632cbe9b6984ab9616499d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EventBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9c3869702d0ec996acf36daee13c0b57c0bb8ad14632cbe9b6984ab9616499d3->leave($__internal_9c3869702d0ec996acf36daee13c0b57c0bb8ad14632cbe9b6984ab9616499d3_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_c8a15da7e2e475ca8e4115444a9c4bf62e7884a123ccfe7d35603f202728114e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c8a15da7e2e475ca8e4115444a9c4bf62e7884a123ccfe7d35603f202728114e->enter($__internal_c8a15da7e2e475ca8e4115444a9c4bf62e7884a123ccfe7d35603f202728114e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Events";
        
        $__internal_c8a15da7e2e475ca8e4115444a9c4bf62e7884a123ccfe7d35603f202728114e->leave($__internal_c8a15da7e2e475ca8e4115444a9c4bf62e7884a123ccfe7d35603f202728114e_prof);

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
