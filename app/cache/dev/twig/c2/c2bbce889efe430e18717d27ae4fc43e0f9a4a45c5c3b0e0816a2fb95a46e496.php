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
        $__internal_cf744796e71d0ec2a4d0fd58d0edbae17a5dc5342d52d71c06ef69dad6decd78 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cf744796e71d0ec2a4d0fd58d0edbae17a5dc5342d52d71c06ef69dad6decd78->enter($__internal_cf744796e71d0ec2a4d0fd58d0edbae17a5dc5342d52d71c06ef69dad6decd78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EventBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cf744796e71d0ec2a4d0fd58d0edbae17a5dc5342d52d71c06ef69dad6decd78->leave($__internal_cf744796e71d0ec2a4d0fd58d0edbae17a5dc5342d52d71c06ef69dad6decd78_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_e8b8732e887275c686219601f3d8f738db27ebabcedb04ec8bae400b69db8b48 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e8b8732e887275c686219601f3d8f738db27ebabcedb04ec8bae400b69db8b48->enter($__internal_e8b8732e887275c686219601f3d8f738db27ebabcedb04ec8bae400b69db8b48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Events";
        
        $__internal_e8b8732e887275c686219601f3d8f738db27ebabcedb04ec8bae400b69db8b48->leave($__internal_e8b8732e887275c686219601f3d8f738db27ebabcedb04ec8bae400b69db8b48_prof);

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
