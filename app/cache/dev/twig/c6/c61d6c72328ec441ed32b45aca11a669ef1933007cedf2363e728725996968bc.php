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
        $__internal_83fd6a34714992c8508d5c99afed56a71c414c1646f8ab8be0f00c1c32722821 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_83fd6a34714992c8508d5c99afed56a71c414c1646f8ab8be0f00c1c32722821->enter($__internal_83fd6a34714992c8508d5c99afed56a71c414c1646f8ab8be0f00c1c32722821_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_83fd6a34714992c8508d5c99afed56a71c414c1646f8ab8be0f00c1c32722821->leave($__internal_83fd6a34714992c8508d5c99afed56a71c414c1646f8ab8be0f00c1c32722821_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_9e65c38d4fe02109fedfe847ae463a6808bd0a2fd0365159305f16bf82c7372a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9e65c38d4fe02109fedfe847ae463a6808bd0a2fd0365159305f16bf82c7372a->enter($__internal_9e65c38d4fe02109fedfe847ae463a6808bd0a2fd0365159305f16bf82c7372a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_9e65c38d4fe02109fedfe847ae463a6808bd0a2fd0365159305f16bf82c7372a->leave($__internal_9e65c38d4fe02109fedfe847ae463a6808bd0a2fd0365159305f16bf82c7372a_prof);

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
