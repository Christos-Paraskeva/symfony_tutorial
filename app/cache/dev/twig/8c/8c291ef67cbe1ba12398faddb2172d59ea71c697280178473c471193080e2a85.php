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
        $__internal_b84c5731baa3df35042f5f877d2137228d45fed383993d9b2debac6d02d57edd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b84c5731baa3df35042f5f877d2137228d45fed383993d9b2debac6d02d57edd->enter($__internal_b84c5731baa3df35042f5f877d2137228d45fed383993d9b2debac6d02d57edd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b84c5731baa3df35042f5f877d2137228d45fed383993d9b2debac6d02d57edd->leave($__internal_b84c5731baa3df35042f5f877d2137228d45fed383993d9b2debac6d02d57edd_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_702d0ef1b74d17efaca674406fb2073cad6c48d976d9156de03cfd670099a8b6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_702d0ef1b74d17efaca674406fb2073cad6c48d976d9156de03cfd670099a8b6->enter($__internal_702d0ef1b74d17efaca674406fb2073cad6c48d976d9156de03cfd670099a8b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_702d0ef1b74d17efaca674406fb2073cad6c48d976d9156de03cfd670099a8b6->leave($__internal_702d0ef1b74d17efaca674406fb2073cad6c48d976d9156de03cfd670099a8b6_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_96b265088e7dbb7aa13007f5ace72a141be7b138eb06ce81927750577292f13a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_96b265088e7dbb7aa13007f5ace72a141be7b138eb06ce81927750577292f13a->enter($__internal_96b265088e7dbb7aa13007f5ace72a141be7b138eb06ce81927750577292f13a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_96b265088e7dbb7aa13007f5ace72a141be7b138eb06ce81927750577292f13a->leave($__internal_96b265088e7dbb7aa13007f5ace72a141be7b138eb06ce81927750577292f13a_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_baf6661d7bdd80b02e0f1e4aebb72361a679ea14ecf9525d7427804bcd69a14d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_baf6661d7bdd80b02e0f1e4aebb72361a679ea14ecf9525d7427804bcd69a14d->enter($__internal_baf6661d7bdd80b02e0f1e4aebb72361a679ea14ecf9525d7427804bcd69a14d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_baf6661d7bdd80b02e0f1e4aebb72361a679ea14ecf9525d7427804bcd69a14d->leave($__internal_baf6661d7bdd80b02e0f1e4aebb72361a679ea14ecf9525d7427804bcd69a14d_prof);

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
