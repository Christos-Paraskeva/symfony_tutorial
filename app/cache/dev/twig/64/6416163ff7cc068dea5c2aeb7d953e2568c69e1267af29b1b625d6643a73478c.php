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
        $__internal_eb880edac3f245ba342e432ee9b7829ebf97bdd02be91e080458cd86dfe333bd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eb880edac3f245ba342e432ee9b7829ebf97bdd02be91e080458cd86dfe333bd->enter($__internal_eb880edac3f245ba342e432ee9b7829ebf97bdd02be91e080458cd86dfe333bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_eb880edac3f245ba342e432ee9b7829ebf97bdd02be91e080458cd86dfe333bd->leave($__internal_eb880edac3f245ba342e432ee9b7829ebf97bdd02be91e080458cd86dfe333bd_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_eb428fb7f0ddbc3cd44d8ffcf4530631919b2a532c726fbc755a2a88d0bcf707 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eb428fb7f0ddbc3cd44d8ffcf4530631919b2a532c726fbc755a2a88d0bcf707->enter($__internal_eb428fb7f0ddbc3cd44d8ffcf4530631919b2a532c726fbc755a2a88d0bcf707_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_eb428fb7f0ddbc3cd44d8ffcf4530631919b2a532c726fbc755a2a88d0bcf707->leave($__internal_eb428fb7f0ddbc3cd44d8ffcf4530631919b2a532c726fbc755a2a88d0bcf707_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_33e921c9dca3cc94c0e7a3fb14344338baa414e3ff52a54566ce8383ac6bbbae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_33e921c9dca3cc94c0e7a3fb14344338baa414e3ff52a54566ce8383ac6bbbae->enter($__internal_33e921c9dca3cc94c0e7a3fb14344338baa414e3ff52a54566ce8383ac6bbbae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_33e921c9dca3cc94c0e7a3fb14344338baa414e3ff52a54566ce8383ac6bbbae->leave($__internal_33e921c9dca3cc94c0e7a3fb14344338baa414e3ff52a54566ce8383ac6bbbae_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_76e89a2418b976de9f0841eda3408e5fbf1154aba320b733fb14403667ff91c5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_76e89a2418b976de9f0841eda3408e5fbf1154aba320b733fb14403667ff91c5->enter($__internal_76e89a2418b976de9f0841eda3408e5fbf1154aba320b733fb14403667ff91c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_76e89a2418b976de9f0841eda3408e5fbf1154aba320b733fb14403667ff91c5->leave($__internal_76e89a2418b976de9f0841eda3408e5fbf1154aba320b733fb14403667ff91c5_prof);

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
