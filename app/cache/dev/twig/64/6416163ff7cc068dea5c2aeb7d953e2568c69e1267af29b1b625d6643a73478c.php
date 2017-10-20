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
        $__internal_b24d7c11c135dbd523cf49cb657e8e6a4237eb1c9427fc57d2999cc038e538cb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b24d7c11c135dbd523cf49cb657e8e6a4237eb1c9427fc57d2999cc038e538cb->enter($__internal_b24d7c11c135dbd523cf49cb657e8e6a4237eb1c9427fc57d2999cc038e538cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b24d7c11c135dbd523cf49cb657e8e6a4237eb1c9427fc57d2999cc038e538cb->leave($__internal_b24d7c11c135dbd523cf49cb657e8e6a4237eb1c9427fc57d2999cc038e538cb_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_da1724163b53b560994462e7a8f5929a87801b698c4ccb38cf5426ea37efb893 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_da1724163b53b560994462e7a8f5929a87801b698c4ccb38cf5426ea37efb893->enter($__internal_da1724163b53b560994462e7a8f5929a87801b698c4ccb38cf5426ea37efb893_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_da1724163b53b560994462e7a8f5929a87801b698c4ccb38cf5426ea37efb893->leave($__internal_da1724163b53b560994462e7a8f5929a87801b698c4ccb38cf5426ea37efb893_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_11ca5fe95e997075dde4b6b6280e28ac1abb3a771b8fbba573ac0c7df896d08b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_11ca5fe95e997075dde4b6b6280e28ac1abb3a771b8fbba573ac0c7df896d08b->enter($__internal_11ca5fe95e997075dde4b6b6280e28ac1abb3a771b8fbba573ac0c7df896d08b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_11ca5fe95e997075dde4b6b6280e28ac1abb3a771b8fbba573ac0c7df896d08b->leave($__internal_11ca5fe95e997075dde4b6b6280e28ac1abb3a771b8fbba573ac0c7df896d08b_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_99385564c65dffbf2906617ae02dd42c5839e849a985d782745a1a8cef74d5a9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_99385564c65dffbf2906617ae02dd42c5839e849a985d782745a1a8cef74d5a9->enter($__internal_99385564c65dffbf2906617ae02dd42c5839e849a985d782745a1a8cef74d5a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_99385564c65dffbf2906617ae02dd42c5839e849a985d782745a1a8cef74d5a9->leave($__internal_99385564c65dffbf2906617ae02dd42c5839e849a985d782745a1a8cef74d5a9_prof);

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
