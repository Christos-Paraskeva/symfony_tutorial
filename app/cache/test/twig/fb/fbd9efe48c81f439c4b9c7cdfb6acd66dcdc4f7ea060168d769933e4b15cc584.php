<?php

/* WebProfilerBundle:Collector:exception.html.twig */
class __TwigTemplate_afd32e2e8edac27916df423c6f94120e8d3183333cb87a9a736177bcb910bc79 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_70a7bd42cdfd074b0195361d9e5e1e592d931024114f8c7b59e83d445af1fe5f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_70a7bd42cdfd074b0195361d9e5e1e592d931024114f8c7b59e83d445af1fe5f->enter($__internal_70a7bd42cdfd074b0195361d9e5e1e592d931024114f8c7b59e83d445af1fe5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_70a7bd42cdfd074b0195361d9e5e1e592d931024114f8c7b59e83d445af1fe5f->leave($__internal_70a7bd42cdfd074b0195361d9e5e1e592d931024114f8c7b59e83d445af1fe5f_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_b24bf6af760f40f5e71f5dff1f1bd01af30cf1683d0ab1986e8ea2f8753ab370 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b24bf6af760f40f5e71f5dff1f1bd01af30cf1683d0ab1986e8ea2f8753ab370->enter($__internal_b24bf6af760f40f5e71f5dff1f1bd01af30cf1683d0ab1986e8ea2f8753ab370_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_b24bf6af760f40f5e71f5dff1f1bd01af30cf1683d0ab1986e8ea2f8753ab370->leave($__internal_b24bf6af760f40f5e71f5dff1f1bd01af30cf1683d0ab1986e8ea2f8753ab370_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_6b91a1b368d523c7a9b0c5713410f11d160f2831aff3605a0e7aa34c0c382c28 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6b91a1b368d523c7a9b0c5713410f11d160f2831aff3605a0e7aa34c0c382c28->enter($__internal_6b91a1b368d523c7a9b0c5713410f11d160f2831aff3605a0e7aa34c0c382c28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_6b91a1b368d523c7a9b0c5713410f11d160f2831aff3605a0e7aa34c0c382c28->leave($__internal_6b91a1b368d523c7a9b0c5713410f11d160f2831aff3605a0e7aa34c0c382c28_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_ec2dd862c55e13eef6308fdc1c39be47026e20d74a0f34e17882b2a0a6367e3c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ec2dd862c55e13eef6308fdc1c39be47026e20d74a0f34e17882b2a0a6367e3c->enter($__internal_ec2dd862c55e13eef6308fdc1c39be47026e20d74a0f34e17882b2a0a6367e3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_ec2dd862c55e13eef6308fdc1c39be47026e20d74a0f34e17882b2a0a6367e3c->leave($__internal_ec2dd862c55e13eef6308fdc1c39be47026e20d74a0f34e17882b2a0a6367e3c_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 33,  114 => 32,  108 => 28,  106 => 27,  102 => 25,  96 => 24,  88 => 21,  82 => 17,  80 => 16,  75 => 14,  70 => 13,  64 => 12,  54 => 9,  48 => 6,  45 => 5,  42 => 4,  36 => 3,  11 => 1,);
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

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "WebProfilerBundle:Collector:exception.html.twig", "/Users/christos.paraskeva/Documents/my_projects/symfony_tutorial_new/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
