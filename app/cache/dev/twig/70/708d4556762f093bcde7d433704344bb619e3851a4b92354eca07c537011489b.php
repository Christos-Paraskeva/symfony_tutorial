<?php

/* EventBundle::layout.html.twig */
class __TwigTemplate_ce3c87c57c8811da753b2192cc3d5fc992b6e7f7a0dbea4922a944c8a03aa51e extends Twig_Template
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
        $__internal_f752a8de61dd958f272bcfac1f480000b84c01765be275a1ee1ada2553986041 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f752a8de61dd958f272bcfac1f480000b84c01765be275a1ee1ada2553986041->enter($__internal_f752a8de61dd958f272bcfac1f480000b84c01765be275a1ee1ada2553986041_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EventBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f752a8de61dd958f272bcfac1f480000b84c01765be275a1ee1ada2553986041->leave($__internal_f752a8de61dd958f272bcfac1f480000b84c01765be275a1ee1ada2553986041_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_a8e22625b9b0639b50fc87005da4c0859d829c882f14b5f019490fbfccc0ccf3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a8e22625b9b0639b50fc87005da4c0859d829c882f14b5f019490fbfccc0ccf3->enter($__internal_a8e22625b9b0639b50fc87005da4c0859d829c882f14b5f019490fbfccc0ccf3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Events";
        
        $__internal_a8e22625b9b0639b50fc87005da4c0859d829c882f14b5f019490fbfccc0ccf3->leave($__internal_a8e22625b9b0639b50fc87005da4c0859d829c882f14b5f019490fbfccc0ccf3_prof);

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
