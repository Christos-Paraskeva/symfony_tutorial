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
        $__internal_085e05a167d5e1ab68e21eaad0e8c42d09d0dc3f7f05ca067a7277f6e1faec3c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_085e05a167d5e1ab68e21eaad0e8c42d09d0dc3f7f05ca067a7277f6e1faec3c->enter($__internal_085e05a167d5e1ab68e21eaad0e8c42d09d0dc3f7f05ca067a7277f6e1faec3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EventBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085e05a167d5e1ab68e21eaad0e8c42d09d0dc3f7f05ca067a7277f6e1faec3c->leave($__internal_085e05a167d5e1ab68e21eaad0e8c42d09d0dc3f7f05ca067a7277f6e1faec3c_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_58b434c27d95b0aed63366a18417a93389ecd396b23ac841414e6281b2bf63db = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_58b434c27d95b0aed63366a18417a93389ecd396b23ac841414e6281b2bf63db->enter($__internal_58b434c27d95b0aed63366a18417a93389ecd396b23ac841414e6281b2bf63db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Events";
        
        $__internal_58b434c27d95b0aed63366a18417a93389ecd396b23ac841414e6281b2bf63db->leave($__internal_58b434c27d95b0aed63366a18417a93389ecd396b23ac841414e6281b2bf63db_prof);

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
