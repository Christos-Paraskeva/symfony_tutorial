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
        $__internal_ea67b9a0204947418466f22959ea9352a39e292957a1b5364328f21f56c04f89 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ea67b9a0204947418466f22959ea9352a39e292957a1b5364328f21f56c04f89->enter($__internal_ea67b9a0204947418466f22959ea9352a39e292957a1b5364328f21f56c04f89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EventBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ea67b9a0204947418466f22959ea9352a39e292957a1b5364328f21f56c04f89->leave($__internal_ea67b9a0204947418466f22959ea9352a39e292957a1b5364328f21f56c04f89_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_d37f59a289d640430bbc12e4eeff1628e2483bd540391c872e783d0b40d42cea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d37f59a289d640430bbc12e4eeff1628e2483bd540391c872e783d0b40d42cea->enter($__internal_d37f59a289d640430bbc12e4eeff1628e2483bd540391c872e783d0b40d42cea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Events";
        
        $__internal_d37f59a289d640430bbc12e4eeff1628e2483bd540391c872e783d0b40d42cea->leave($__internal_d37f59a289d640430bbc12e4eeff1628e2483bd540391c872e783d0b40d42cea_prof);

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
