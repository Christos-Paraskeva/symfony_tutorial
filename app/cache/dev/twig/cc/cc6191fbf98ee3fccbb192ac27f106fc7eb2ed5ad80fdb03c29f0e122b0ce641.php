<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_85e8c9886f8c8e127754dd971d6c7545d86117753499fa68416f49fd40bf217a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
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
        $__internal_05882699a17034bfa0b32d814ac6bf77f101e09b59cff9199121b73feb84b601 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_05882699a17034bfa0b32d814ac6bf77f101e09b59cff9199121b73feb84b601->enter($__internal_05882699a17034bfa0b32d814ac6bf77f101e09b59cff9199121b73feb84b601_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_05882699a17034bfa0b32d814ac6bf77f101e09b59cff9199121b73feb84b601->leave($__internal_05882699a17034bfa0b32d814ac6bf77f101e09b59cff9199121b73feb84b601_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_91330e9e0f4065b6c928e11968d411aa7b1d7aedac3f2a0c277a6b79bcd95b7a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_91330e9e0f4065b6c928e11968d411aa7b1d7aedac3f2a0c277a6b79bcd95b7a->enter($__internal_91330e9e0f4065b6c928e11968d411aa7b1d7aedac3f2a0c277a6b79bcd95b7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_91330e9e0f4065b6c928e11968d411aa7b1d7aedac3f2a0c277a6b79bcd95b7a->leave($__internal_91330e9e0f4065b6c928e11968d411aa7b1d7aedac3f2a0c277a6b79bcd95b7a_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_5b08032ea75fcdd72e7088aaa3bdb438150d9b8c1153c32495c85a1b3ab155f2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5b08032ea75fcdd72e7088aaa3bdb438150d9b8c1153c32495c85a1b3ab155f2->enter($__internal_5b08032ea75fcdd72e7088aaa3bdb438150d9b8c1153c32495c85a1b3ab155f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_5b08032ea75fcdd72e7088aaa3bdb438150d9b8c1153c32495c85a1b3ab155f2->leave($__internal_5b08032ea75fcdd72e7088aaa3bdb438150d9b8c1153c32495c85a1b3ab155f2_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 8,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
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

{% block title 'Redirection Intercepted' %}

{% block body %}
    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"{{ location }}\">{{ location }}</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
{% endblock %}
", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", "/Users/christos.paraskeva/Documents/my_projects/symfony_tutorial_new/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/toolbar_redirect.html.twig");
    }
}
