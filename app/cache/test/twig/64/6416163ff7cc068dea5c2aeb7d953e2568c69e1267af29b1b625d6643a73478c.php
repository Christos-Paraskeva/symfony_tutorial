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
        $__internal_72e88451b69503236965badd8f6d489ad9e5345e6ae52a5679bd78e947addefd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_72e88451b69503236965badd8f6d489ad9e5345e6ae52a5679bd78e947addefd->enter($__internal_72e88451b69503236965badd8f6d489ad9e5345e6ae52a5679bd78e947addefd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_72e88451b69503236965badd8f6d489ad9e5345e6ae52a5679bd78e947addefd->leave($__internal_72e88451b69503236965badd8f6d489ad9e5345e6ae52a5679bd78e947addefd_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_e824f03999f6f8269de8123ff6c78487f757250f70e6a67d8c10b00c93b7b269 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e824f03999f6f8269de8123ff6c78487f757250f70e6a67d8c10b00c93b7b269->enter($__internal_e824f03999f6f8269de8123ff6c78487f757250f70e6a67d8c10b00c93b7b269_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_e824f03999f6f8269de8123ff6c78487f757250f70e6a67d8c10b00c93b7b269->leave($__internal_e824f03999f6f8269de8123ff6c78487f757250f70e6a67d8c10b00c93b7b269_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_b204f9cbb988bb0f7f0351dbe9dffcb20d90f1b90fa333750886908784270109 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b204f9cbb988bb0f7f0351dbe9dffcb20d90f1b90fa333750886908784270109->enter($__internal_b204f9cbb988bb0f7f0351dbe9dffcb20d90f1b90fa333750886908784270109_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_b204f9cbb988bb0f7f0351dbe9dffcb20d90f1b90fa333750886908784270109->leave($__internal_b204f9cbb988bb0f7f0351dbe9dffcb20d90f1b90fa333750886908784270109_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_6033845c88a84398ef28c5b080075a167c5619d2fd8df5edaa4039c4bbfe1423 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6033845c88a84398ef28c5b080075a167c5619d2fd8df5edaa4039c4bbfe1423->enter($__internal_6033845c88a84398ef28c5b080075a167c5619d2fd8df5edaa4039c4bbfe1423_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_6033845c88a84398ef28c5b080075a167c5619d2fd8df5edaa4039c4bbfe1423->leave($__internal_6033845c88a84398ef28c5b080075a167c5619d2fd8df5edaa4039c4bbfe1423_prof);

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
