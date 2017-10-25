<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_e3575bd873cfbcf4001998ab70bd93a37179e7886b7b0899fcd706b90feb114d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
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
        $__internal_4dbc8c7ef3588dd08694712ddd96a2a9cdaa56668833c4653304e0817911f5c1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4dbc8c7ef3588dd08694712ddd96a2a9cdaa56668833c4653304e0817911f5c1->enter($__internal_4dbc8c7ef3588dd08694712ddd96a2a9cdaa56668833c4653304e0817911f5c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4dbc8c7ef3588dd08694712ddd96a2a9cdaa56668833c4653304e0817911f5c1->leave($__internal_4dbc8c7ef3588dd08694712ddd96a2a9cdaa56668833c4653304e0817911f5c1_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_8a8a36b9a8c65aca254bdfb7405161e392455ef73321ddea987bf406cd402009 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8a8a36b9a8c65aca254bdfb7405161e392455ef73321ddea987bf406cd402009->enter($__internal_8a8a36b9a8c65aca254bdfb7405161e392455ef73321ddea987bf406cd402009_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_8a8a36b9a8c65aca254bdfb7405161e392455ef73321ddea987bf406cd402009->leave($__internal_8a8a36b9a8c65aca254bdfb7405161e392455ef73321ddea987bf406cd402009_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_2ee2dab6295e05b65f0334020229d51e6dc6d7637647e89cfe35a0b3c94c8286 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2ee2dab6295e05b65f0334020229d51e6dc6d7637647e89cfe35a0b3c94c8286->enter($__internal_2ee2dab6295e05b65f0334020229d51e6dc6d7637647e89cfe35a0b3c94c8286_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_2ee2dab6295e05b65f0334020229d51e6dc6d7637647e89cfe35a0b3c94c8286->leave($__internal_2ee2dab6295e05b65f0334020229d51e6dc6d7637647e89cfe35a0b3c94c8286_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_88097252a09fec65d67e83f5b87febc43ff2b4dd2989b5e02e5b87608d898482 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_88097252a09fec65d67e83f5b87febc43ff2b4dd2989b5e02e5b87608d898482->enter($__internal_88097252a09fec65d67e83f5b87febc43ff2b4dd2989b5e02e5b87608d898482_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_88097252a09fec65d67e83f5b87febc43ff2b4dd2989b5e02e5b87608d898482->leave($__internal_88097252a09fec65d67e83f5b87febc43ff2b4dd2989b5e02e5b87608d898482_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
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
", "WebProfilerBundle:Collector:router.html.twig", "/Users/christos.paraskeva/Documents/my_projects/symfony_tutorial_new/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
