<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_2a494b2a6500037b9f0f00b7f31cc062ee090b5ede763e3fef2cfa5fea4e9b66 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_cf1faef81b9e9eaab2865352ba36b98d7715c07e0195b4a135b4eae47b1f42ad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cf1faef81b9e9eaab2865352ba36b98d7715c07e0195b4a135b4eae47b1f42ad->enter($__internal_cf1faef81b9e9eaab2865352ba36b98d7715c07e0195b4a135b4eae47b1f42ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_cf1faef81b9e9eaab2865352ba36b98d7715c07e0195b4a135b4eae47b1f42ad->leave($__internal_cf1faef81b9e9eaab2865352ba36b98d7715c07e0195b4a135b4eae47b1f42ad_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_1cd6efd43f37246a9ff7a2a1ab65f0a55b8b940052252a27f2ba8b27d2a56d72 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1cd6efd43f37246a9ff7a2a1ab65f0a55b8b940052252a27f2ba8b27d2a56d72->enter($__internal_1cd6efd43f37246a9ff7a2a1ab65f0a55b8b940052252a27f2ba8b27d2a56d72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_1cd6efd43f37246a9ff7a2a1ab65f0a55b8b940052252a27f2ba8b27d2a56d72->leave($__internal_1cd6efd43f37246a9ff7a2a1ab65f0a55b8b940052252a27f2ba8b27d2a56d72_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block panel '' %}
", "WebProfilerBundle:Profiler:ajax_layout.html.twig", "/Users/christos.paraskeva/Documents/my_projects/symfony_tutorial_new/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/ajax_layout.html.twig");
    }
}
