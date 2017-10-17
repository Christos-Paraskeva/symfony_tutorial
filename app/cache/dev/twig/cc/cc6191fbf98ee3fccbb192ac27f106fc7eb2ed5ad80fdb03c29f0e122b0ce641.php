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
        $__internal_6ca0519af9a6a5c699184114cf2fa4483ff37811481b00a334910ba4082070f6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6ca0519af9a6a5c699184114cf2fa4483ff37811481b00a334910ba4082070f6->enter($__internal_6ca0519af9a6a5c699184114cf2fa4483ff37811481b00a334910ba4082070f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6ca0519af9a6a5c699184114cf2fa4483ff37811481b00a334910ba4082070f6->leave($__internal_6ca0519af9a6a5c699184114cf2fa4483ff37811481b00a334910ba4082070f6_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_19235173f0d0d06f8f4441143b944f0cfe3a7efffa2d3cc65c25f0884c4c511f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_19235173f0d0d06f8f4441143b944f0cfe3a7efffa2d3cc65c25f0884c4c511f->enter($__internal_19235173f0d0d06f8f4441143b944f0cfe3a7efffa2d3cc65c25f0884c4c511f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_19235173f0d0d06f8f4441143b944f0cfe3a7efffa2d3cc65c25f0884c4c511f->leave($__internal_19235173f0d0d06f8f4441143b944f0cfe3a7efffa2d3cc65c25f0884c4c511f_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_87faa8a6c72311470560d121bec2e65dfa2ad61fa2c23c97c28e6dcae993b583 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_87faa8a6c72311470560d121bec2e65dfa2ad61fa2c23c97c28e6dcae993b583->enter($__internal_87faa8a6c72311470560d121bec2e65dfa2ad61fa2c23c97c28e6dcae993b583_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_87faa8a6c72311470560d121bec2e65dfa2ad61fa2c23c97c28e6dcae993b583->leave($__internal_87faa8a6c72311470560d121bec2e65dfa2ad61fa2c23c97c28e6dcae993b583_prof);

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
