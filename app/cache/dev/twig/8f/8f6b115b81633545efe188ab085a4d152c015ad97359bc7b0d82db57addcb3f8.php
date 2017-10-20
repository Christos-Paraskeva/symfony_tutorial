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
        $__internal_df02f1f4dadcf581aa257364ff7028646d60dbb56b62cc116cf327ff728e23ef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_df02f1f4dadcf581aa257364ff7028646d60dbb56b62cc116cf327ff728e23ef->enter($__internal_df02f1f4dadcf581aa257364ff7028646d60dbb56b62cc116cf327ff728e23ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EventBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_df02f1f4dadcf581aa257364ff7028646d60dbb56b62cc116cf327ff728e23ef->leave($__internal_df02f1f4dadcf581aa257364ff7028646d60dbb56b62cc116cf327ff728e23ef_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_eb22bf2a9e0d5eb652f34fe0c76075e575909bc857dfcbfe753e4491b2a0d673 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eb22bf2a9e0d5eb652f34fe0c76075e575909bc857dfcbfe753e4491b2a0d673->enter($__internal_eb22bf2a9e0d5eb652f34fe0c76075e575909bc857dfcbfe753e4491b2a0d673_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Events";
        
        $__internal_eb22bf2a9e0d5eb652f34fe0c76075e575909bc857dfcbfe753e4491b2a0d673->leave($__internal_eb22bf2a9e0d5eb652f34fe0c76075e575909bc857dfcbfe753e4491b2a0d673_prof);

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
