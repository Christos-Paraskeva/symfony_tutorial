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
        $__internal_e62c8db9507f9365b6a3c8c5852b86649cb4ee26695e5be48fe7df46fff5dee6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e62c8db9507f9365b6a3c8c5852b86649cb4ee26695e5be48fe7df46fff5dee6->enter($__internal_e62c8db9507f9365b6a3c8c5852b86649cb4ee26695e5be48fe7df46fff5dee6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e62c8db9507f9365b6a3c8c5852b86649cb4ee26695e5be48fe7df46fff5dee6->leave($__internal_e62c8db9507f9365b6a3c8c5852b86649cb4ee26695e5be48fe7df46fff5dee6_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_572756b20500cf9b44e788741fa7722e3ffe16b867ae8c4234948da9e64522e0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_572756b20500cf9b44e788741fa7722e3ffe16b867ae8c4234948da9e64522e0->enter($__internal_572756b20500cf9b44e788741fa7722e3ffe16b867ae8c4234948da9e64522e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_572756b20500cf9b44e788741fa7722e3ffe16b867ae8c4234948da9e64522e0->leave($__internal_572756b20500cf9b44e788741fa7722e3ffe16b867ae8c4234948da9e64522e0_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_bea5e3e3eb41d61d974fbc97ecbfe2ea12cd91423ac0adc10e161f66c208ef69 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bea5e3e3eb41d61d974fbc97ecbfe2ea12cd91423ac0adc10e161f66c208ef69->enter($__internal_bea5e3e3eb41d61d974fbc97ecbfe2ea12cd91423ac0adc10e161f66c208ef69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_bea5e3e3eb41d61d974fbc97ecbfe2ea12cd91423ac0adc10e161f66c208ef69->leave($__internal_bea5e3e3eb41d61d974fbc97ecbfe2ea12cd91423ac0adc10e161f66c208ef69_prof);

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
