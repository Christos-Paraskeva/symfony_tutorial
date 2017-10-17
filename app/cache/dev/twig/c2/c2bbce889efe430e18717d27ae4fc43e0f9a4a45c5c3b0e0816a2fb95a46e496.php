<?php

/* EventBundle::layout.html.twig */
class __TwigTemplate_0b222157675334c77623a28693a6811ab3daefe74f6254c8496b9d44c5618aee extends Twig_Template
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
        $__internal_03bb41c460523b82319b311564c4a581947d4d99a658d511b818c6678770bca7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_03bb41c460523b82319b311564c4a581947d4d99a658d511b818c6678770bca7->enter($__internal_03bb41c460523b82319b311564c4a581947d4d99a658d511b818c6678770bca7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EventBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_03bb41c460523b82319b311564c4a581947d4d99a658d511b818c6678770bca7->leave($__internal_03bb41c460523b82319b311564c4a581947d4d99a658d511b818c6678770bca7_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_6d197d07b4dee00d3c8b3bd62ad4cdaa05862289533e28730f5716e50b05e5aa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6d197d07b4dee00d3c8b3bd62ad4cdaa05862289533e28730f5716e50b05e5aa->enter($__internal_6d197d07b4dee00d3c8b3bd62ad4cdaa05862289533e28730f5716e50b05e5aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Events";
        
        $__internal_6d197d07b4dee00d3c8b3bd62ad4cdaa05862289533e28730f5716e50b05e5aa->leave($__internal_6d197d07b4dee00d3c8b3bd62ad4cdaa05862289533e28730f5716e50b05e5aa_prof);

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
