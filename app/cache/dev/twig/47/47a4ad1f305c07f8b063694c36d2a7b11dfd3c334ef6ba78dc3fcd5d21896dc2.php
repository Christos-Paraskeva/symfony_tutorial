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
        $__internal_e5e5ccdb23a8f98c62123815baa4d1a859cc29e0c3206fe30fd0c213d1c9c605 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e5e5ccdb23a8f98c62123815baa4d1a859cc29e0c3206fe30fd0c213d1c9c605->enter($__internal_e5e5ccdb23a8f98c62123815baa4d1a859cc29e0c3206fe30fd0c213d1c9c605_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e5e5ccdb23a8f98c62123815baa4d1a859cc29e0c3206fe30fd0c213d1c9c605->leave($__internal_e5e5ccdb23a8f98c62123815baa4d1a859cc29e0c3206fe30fd0c213d1c9c605_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_44c823c551887e16111c55e91191ab035b10ed7bebe9b0f87a8178e059ac472a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_44c823c551887e16111c55e91191ab035b10ed7bebe9b0f87a8178e059ac472a->enter($__internal_44c823c551887e16111c55e91191ab035b10ed7bebe9b0f87a8178e059ac472a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_44c823c551887e16111c55e91191ab035b10ed7bebe9b0f87a8178e059ac472a->leave($__internal_44c823c551887e16111c55e91191ab035b10ed7bebe9b0f87a8178e059ac472a_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_aa94896de2f82866a7dd2f41775ded52054e65230f0823432896c40ae1fc14cc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aa94896de2f82866a7dd2f41775ded52054e65230f0823432896c40ae1fc14cc->enter($__internal_aa94896de2f82866a7dd2f41775ded52054e65230f0823432896c40ae1fc14cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_aa94896de2f82866a7dd2f41775ded52054e65230f0823432896c40ae1fc14cc->leave($__internal_aa94896de2f82866a7dd2f41775ded52054e65230f0823432896c40ae1fc14cc_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_996bf0b7cd1e214c1c1ad69feffc4a1731416094a64f215a3c98acf597556c84 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_996bf0b7cd1e214c1c1ad69feffc4a1731416094a64f215a3c98acf597556c84->enter($__internal_996bf0b7cd1e214c1c1ad69feffc4a1731416094a64f215a3c98acf597556c84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_996bf0b7cd1e214c1c1ad69feffc4a1731416094a64f215a3c98acf597556c84->leave($__internal_996bf0b7cd1e214c1c1ad69feffc4a1731416094a64f215a3c98acf597556c84_prof);

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
