<?php

/* EventBundle::layout.html.twig */
class __TwigTemplate_0ab89ee0bc41defca9072871f12c98ce9a11cc6d825e44b3048cd0f1593e0a46 extends Twig_Template
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
        $__internal_40aba6a5825b19966fca2425f98e12f69ace9d8cb732094471b584a9c619196a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_40aba6a5825b19966fca2425f98e12f69ace9d8cb732094471b584a9c619196a->enter($__internal_40aba6a5825b19966fca2425f98e12f69ace9d8cb732094471b584a9c619196a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EventBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_40aba6a5825b19966fca2425f98e12f69ace9d8cb732094471b584a9c619196a->leave($__internal_40aba6a5825b19966fca2425f98e12f69ace9d8cb732094471b584a9c619196a_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_df412880b96bb851ff5e0dd1fee168cc7cf5250f8f1c8253216e3e66de0edede = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_df412880b96bb851ff5e0dd1fee168cc7cf5250f8f1c8253216e3e66de0edede->enter($__internal_df412880b96bb851ff5e0dd1fee168cc7cf5250f8f1c8253216e3e66de0edede_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Events";
        
        $__internal_df412880b96bb851ff5e0dd1fee168cc7cf5250f8f1c8253216e3e66de0edede->leave($__internal_df412880b96bb851ff5e0dd1fee168cc7cf5250f8f1c8253216e3e66de0edede_prof);

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

", "EventBundle::layout.html.twig", "/Users/christos.paraskeva/Documents/my_projects/symfony_tutorial_new/src/Yoda/EventBundle/Resources/views/layout.html.twig");
    }
}
