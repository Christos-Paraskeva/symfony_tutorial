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
        $__internal_c7f7c1a9ce00bf140f524e02d753c2df728055ac8abd873f7bb248848dc3f044 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c7f7c1a9ce00bf140f524e02d753c2df728055ac8abd873f7bb248848dc3f044->enter($__internal_c7f7c1a9ce00bf140f524e02d753c2df728055ac8abd873f7bb248848dc3f044_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EventBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c7f7c1a9ce00bf140f524e02d753c2df728055ac8abd873f7bb248848dc3f044->leave($__internal_c7f7c1a9ce00bf140f524e02d753c2df728055ac8abd873f7bb248848dc3f044_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_de635fdaccdb794c51dae669bd6a7dd20bf584adf29f86eba536d6e1874fe1a6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_de635fdaccdb794c51dae669bd6a7dd20bf584adf29f86eba536d6e1874fe1a6->enter($__internal_de635fdaccdb794c51dae669bd6a7dd20bf584adf29f86eba536d6e1874fe1a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Events";
        
        $__internal_de635fdaccdb794c51dae669bd6a7dd20bf584adf29f86eba536d6e1874fe1a6->leave($__internal_de635fdaccdb794c51dae669bd6a7dd20bf584adf29f86eba536d6e1874fe1a6_prof);

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
