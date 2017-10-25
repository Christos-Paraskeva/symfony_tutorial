<?php

/* SensioDistributionBundle::Configurator/layout.html.twig */
class __TwigTemplate_4d3a86d899353a924646b001c00f62d5bd4c1a6295f5f01c07595ead85859f7d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TwigBundle::layout.html.twig", "SensioDistributionBundle::Configurator/layout.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TwigBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5c3a9f65a892ab29945e70b53cbff6a67a80eb49dac81ae9fd6f015e51eb6bc2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5c3a9f65a892ab29945e70b53cbff6a67a80eb49dac81ae9fd6f015e51eb6bc2->enter($__internal_5c3a9f65a892ab29945e70b53cbff6a67a80eb49dac81ae9fd6f015e51eb6bc2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SensioDistributionBundle::Configurator/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5c3a9f65a892ab29945e70b53cbff6a67a80eb49dac81ae9fd6f015e51eb6bc2->leave($__internal_5c3a9f65a892ab29945e70b53cbff6a67a80eb49dac81ae9fd6f015e51eb6bc2_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_81d82a6aa65647bb5cf487b597bc7cd614be8933ba0a1b2047e7c7e8b3757fc2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_81d82a6aa65647bb5cf487b597bc7cd614be8933ba0a1b2047e7c7e8b3757fc2->enter($__internal_81d82a6aa65647bb5cf487b597bc7cd614be8933ba0a1b2047e7c7e8b3757fc2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/sensiodistribution/webconfigurator/css/configurator.css"), "html", null, true);
        echo "\" />
";
        
        $__internal_81d82a6aa65647bb5cf487b597bc7cd614be8933ba0a1b2047e7c7e8b3757fc2->leave($__internal_81d82a6aa65647bb5cf487b597bc7cd614be8933ba0a1b2047e7c7e8b3757fc2_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_03097690d7aeaccc7fe9c59ff7149bb396b55b9904cf99df7c137f8426ddf9ee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_03097690d7aeaccc7fe9c59ff7149bb396b55b9904cf99df7c137f8426ddf9ee->enter($__internal_03097690d7aeaccc7fe9c59ff7149bb396b55b9904cf99df7c137f8426ddf9ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Web Configurator Bundle";
        
        $__internal_03097690d7aeaccc7fe9c59ff7149bb396b55b9904cf99df7c137f8426ddf9ee->leave($__internal_03097690d7aeaccc7fe9c59ff7149bb396b55b9904cf99df7c137f8426ddf9ee_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_ae0e022edb5c07fbe88be2f27bb1e16a24d79c9fd68ccacf5467a4c2a74c62bf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ae0e022edb5c07fbe88be2f27bb1e16a24d79c9fd68ccacf5467a4c2a74c62bf->enter($__internal_ae0e022edb5c07fbe88be2f27bb1e16a24d79c9fd68ccacf5467a4c2a74c62bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "    <div class=\"block\">
        ";
        // line 11
        $this->displayBlock('content', $context, $blocks);
        // line 12
        echo "    </div>
    <div class=\"version\">Symfony Standard Edition v.";
        // line 13
        echo twig_escape_filter($this->env, (isset($context["version"]) ? $context["version"] : $this->getContext($context, "version")), "html", null, true);
        echo "</div>
";
        
        $__internal_ae0e022edb5c07fbe88be2f27bb1e16a24d79c9fd68ccacf5467a4c2a74c62bf->leave($__internal_ae0e022edb5c07fbe88be2f27bb1e16a24d79c9fd68ccacf5467a4c2a74c62bf_prof);

    }

    // line 11
    public function block_content($context, array $blocks = array())
    {
        $__internal_5be0c0bd42e63f18dedff440b11f7a9cf7ba334bd3f6e3dbfae25f9018e82338 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5be0c0bd42e63f18dedff440b11f7a9cf7ba334bd3f6e3dbfae25f9018e82338->enter($__internal_5be0c0bd42e63f18dedff440b11f7a9cf7ba334bd3f6e3dbfae25f9018e82338_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_5be0c0bd42e63f18dedff440b11f7a9cf7ba334bd3f6e3dbfae25f9018e82338->leave($__internal_5be0c0bd42e63f18dedff440b11f7a9cf7ba334bd3f6e3dbfae25f9018e82338_prof);

    }

    public function getTemplateName()
    {
        return "SensioDistributionBundle::Configurator/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 11,  79 => 13,  76 => 12,  74 => 11,  71 => 10,  65 => 9,  53 => 7,  43 => 4,  37 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"TwigBundle::layout.html.twig\" %}

{% block head %}
    <link rel=\"stylesheet\" href=\"{{ asset('bundles/sensiodistribution/webconfigurator/css/configurator.css') }}\" />
{% endblock %}

{% block title 'Web Configurator Bundle' %}

{% block body %}
    <div class=\"block\">
        {% block content %}{% endblock %}
    </div>
    <div class=\"version\">Symfony Standard Edition v.{{ version }}</div>
{% endblock %}
", "SensioDistributionBundle::Configurator/layout.html.twig", "/Users/christos.paraskeva/Documents/my_projects/symfony_tutorial_new/vendor/sensio/distribution-bundle/Sensio/Bundle/DistributionBundle/Resources/views/Configurator/layout.html.twig");
    }
}
