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
        $__internal_9d25d4d525b21abdea51c0946ec6814515c364445e615e9d59c1387f87c53bb3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9d25d4d525b21abdea51c0946ec6814515c364445e615e9d59c1387f87c53bb3->enter($__internal_9d25d4d525b21abdea51c0946ec6814515c364445e615e9d59c1387f87c53bb3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_9d25d4d525b21abdea51c0946ec6814515c364445e615e9d59c1387f87c53bb3->leave($__internal_9d25d4d525b21abdea51c0946ec6814515c364445e615e9d59c1387f87c53bb3_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_11c3f80e6abf920cacb8eb4815a68f148b8425c73da89558e8d169f74f5eb765 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_11c3f80e6abf920cacb8eb4815a68f148b8425c73da89558e8d169f74f5eb765->enter($__internal_11c3f80e6abf920cacb8eb4815a68f148b8425c73da89558e8d169f74f5eb765_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_11c3f80e6abf920cacb8eb4815a68f148b8425c73da89558e8d169f74f5eb765->leave($__internal_11c3f80e6abf920cacb8eb4815a68f148b8425c73da89558e8d169f74f5eb765_prof);

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
