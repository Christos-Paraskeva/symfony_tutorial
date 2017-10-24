<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_c17887d799b1db7a72d05ff2e4a66ce070cfde66889cd22269caff493b8664a3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9579c18248e424f264da1e8061f9d12749440a3686f1f8b70c461bf88d5a90a6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9579c18248e424f264da1e8061f9d12749440a3686f1f8b70c461bf88d5a90a6->enter($__internal_9579c18248e424f264da1e8061f9d12749440a3686f1f8b70c461bf88d5a90a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9579c18248e424f264da1e8061f9d12749440a3686f1f8b70c461bf88d5a90a6->leave($__internal_9579c18248e424f264da1e8061f9d12749440a3686f1f8b70c461bf88d5a90a6_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_ec3d0d0d62e6d8e4cc7c52dc3ea74c9a07b3682add1fef519c0df5f31ec909fe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ec3d0d0d62e6d8e4cc7c52dc3ea74c9a07b3682add1fef519c0df5f31ec909fe->enter($__internal_ec3d0d0d62e6d8e4cc7c52dc3ea74c9a07b3682add1fef519c0df5f31ec909fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_ec3d0d0d62e6d8e4cc7c52dc3ea74c9a07b3682add1fef519c0df5f31ec909fe->leave($__internal_ec3d0d0d62e6d8e4cc7c52dc3ea74c9a07b3682add1fef519c0df5f31ec909fe_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_f8592f9c2697978547804eecae402b22422bfcaed493150b2516b4448b1d39c4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f8592f9c2697978547804eecae402b22422bfcaed493150b2516b4448b1d39c4->enter($__internal_f8592f9c2697978547804eecae402b22422bfcaed493150b2516b4448b1d39c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_f8592f9c2697978547804eecae402b22422bfcaed493150b2516b4448b1d39c4->leave($__internal_f8592f9c2697978547804eecae402b22422bfcaed493150b2516b4448b1d39c4_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_da05c7bda02d810f71f46d210c88618435a0d75e3157f759d63b760ff7240123 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_da05c7bda02d810f71f46d210c88618435a0d75e3157f759d63b760ff7240123->enter($__internal_da05c7bda02d810f71f46d210c88618435a0d75e3157f759d63b760ff7240123_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_da05c7bda02d810f71f46d210c88618435a0d75e3157f759d63b760ff7240123->leave($__internal_da05c7bda02d810f71f46d210c88618435a0d75e3157f759d63b760ff7240123_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "/Users/christos.paraskeva/Documents/my_projects/symfony_tutorial_new/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
