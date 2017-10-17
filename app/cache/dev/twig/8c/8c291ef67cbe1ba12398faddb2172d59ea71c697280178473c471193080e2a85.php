<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_2ce979c8924184e6ecf306fc849647933de6eb0cd29302f08f760805885444e9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7b651f51ddec03599972ad53d26f11f879938a227108c42efe9bc15be6bf039f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7b651f51ddec03599972ad53d26f11f879938a227108c42efe9bc15be6bf039f->enter($__internal_7b651f51ddec03599972ad53d26f11f879938a227108c42efe9bc15be6bf039f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7b651f51ddec03599972ad53d26f11f879938a227108c42efe9bc15be6bf039f->leave($__internal_7b651f51ddec03599972ad53d26f11f879938a227108c42efe9bc15be6bf039f_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_1e7cd4afb6ac876739de989abc2f4efef2cecc33bf56e7f0ce243e3a15721028 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1e7cd4afb6ac876739de989abc2f4efef2cecc33bf56e7f0ce243e3a15721028->enter($__internal_1e7cd4afb6ac876739de989abc2f4efef2cecc33bf56e7f0ce243e3a15721028_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_1e7cd4afb6ac876739de989abc2f4efef2cecc33bf56e7f0ce243e3a15721028->leave($__internal_1e7cd4afb6ac876739de989abc2f4efef2cecc33bf56e7f0ce243e3a15721028_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_6e52e9d3e88a1f29d7a870304fc640bfc749908058c288ce9e3d74d6eca93f4f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6e52e9d3e88a1f29d7a870304fc640bfc749908058c288ce9e3d74d6eca93f4f->enter($__internal_6e52e9d3e88a1f29d7a870304fc640bfc749908058c288ce9e3d74d6eca93f4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_6e52e9d3e88a1f29d7a870304fc640bfc749908058c288ce9e3d74d6eca93f4f->leave($__internal_6e52e9d3e88a1f29d7a870304fc640bfc749908058c288ce9e3d74d6eca93f4f_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_cc2332d92fb826b51c8c3e815bf367234b687afd87336a2fdcc15c80ede49e26 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cc2332d92fb826b51c8c3e815bf367234b687afd87336a2fdcc15c80ede49e26->enter($__internal_cc2332d92fb826b51c8c3e815bf367234b687afd87336a2fdcc15c80ede49e26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_cc2332d92fb826b51c8c3e815bf367234b687afd87336a2fdcc15c80ede49e26->leave($__internal_cc2332d92fb826b51c8c3e815bf367234b687afd87336a2fdcc15c80ede49e26_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <link href=\"{{ absolute_url(asset('bundles/framework/css/exception.css')) }}\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "/Users/christos.paraskeva/Documents/my_projects/symfony_tutorial_new/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
