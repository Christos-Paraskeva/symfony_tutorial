<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_1ad7d7ad16465c9bb06d90c7e76f8a06aa329da19c27ad36607fd7cc00ef78ed extends Twig_Template
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
        $__internal_689ffeac06a911e92072ca90c1d021281b2323aa9cace4e60f0554f4ef4d6a25 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_689ffeac06a911e92072ca90c1d021281b2323aa9cace4e60f0554f4ef4d6a25->enter($__internal_689ffeac06a911e92072ca90c1d021281b2323aa9cace4e60f0554f4ef4d6a25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_689ffeac06a911e92072ca90c1d021281b2323aa9cace4e60f0554f4ef4d6a25->leave($__internal_689ffeac06a911e92072ca90c1d021281b2323aa9cace4e60f0554f4ef4d6a25_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_be148db400a5e2c61d1bddb995e602366b73303317354d97bdc4b14f056aff98 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_be148db400a5e2c61d1bddb995e602366b73303317354d97bdc4b14f056aff98->enter($__internal_be148db400a5e2c61d1bddb995e602366b73303317354d97bdc4b14f056aff98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_be148db400a5e2c61d1bddb995e602366b73303317354d97bdc4b14f056aff98->leave($__internal_be148db400a5e2c61d1bddb995e602366b73303317354d97bdc4b14f056aff98_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_01d9391606d36e368ed95185d02c539b0be4e758dc30e1e93a798173a404590a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_01d9391606d36e368ed95185d02c539b0be4e758dc30e1e93a798173a404590a->enter($__internal_01d9391606d36e368ed95185d02c539b0be4e758dc30e1e93a798173a404590a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_01d9391606d36e368ed95185d02c539b0be4e758dc30e1e93a798173a404590a->leave($__internal_01d9391606d36e368ed95185d02c539b0be4e758dc30e1e93a798173a404590a_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_f99e97d296181ae5b54ad7943e7f6ca8290e323e24c28f20036fbf0db56ac285 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f99e97d296181ae5b54ad7943e7f6ca8290e323e24c28f20036fbf0db56ac285->enter($__internal_f99e97d296181ae5b54ad7943e7f6ca8290e323e24c28f20036fbf0db56ac285_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_f99e97d296181ae5b54ad7943e7f6ca8290e323e24c28f20036fbf0db56ac285->leave($__internal_f99e97d296181ae5b54ad7943e7f6ca8290e323e24c28f20036fbf0db56ac285_prof);

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
