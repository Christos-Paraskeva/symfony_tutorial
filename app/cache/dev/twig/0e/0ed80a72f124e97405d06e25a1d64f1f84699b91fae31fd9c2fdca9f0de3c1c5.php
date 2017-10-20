<?php

/* SensioDistributionBundle::Configurator/layout.html.twig */
class __TwigTemplate_4d3a86d899353a924646b001c00f62d5bd4c1a6295f5f01c07595ead85859f7d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TwigBundle::layout.html.twig", "SensioDistributionBundle::Configurator/layout.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TwigBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1667b13a5527adece6b14d7efbc664c9ca8ba2052768a89076d60de289489ed9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1667b13a5527adece6b14d7efbc664c9ca8ba2052768a89076d60de289489ed9->enter($__internal_1667b13a5527adece6b14d7efbc664c9ca8ba2052768a89076d60de289489ed9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SensioDistributionBundle::Configurator/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1667b13a5527adece6b14d7efbc664c9ca8ba2052768a89076d60de289489ed9->leave($__internal_1667b13a5527adece6b14d7efbc664c9ca8ba2052768a89076d60de289489ed9_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_f5e461f71e7c71e7d135b0595b8b83eade3abecedab096742397873f16a00866 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f5e461f71e7c71e7d135b0595b8b83eade3abecedab096742397873f16a00866->enter($__internal_f5e461f71e7c71e7d135b0595b8b83eade3abecedab096742397873f16a00866_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/sensiodistribution/webconfigurator/css/configurator.css"), "html", null, true);
        echo "\" />
";
        
        $__internal_f5e461f71e7c71e7d135b0595b8b83eade3abecedab096742397873f16a00866->leave($__internal_f5e461f71e7c71e7d135b0595b8b83eade3abecedab096742397873f16a00866_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_1db0e8fd99fdd62a885381901bce54a996c7fe769d8e3d33c8a1d9d3cdaa4414 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1db0e8fd99fdd62a885381901bce54a996c7fe769d8e3d33c8a1d9d3cdaa4414->enter($__internal_1db0e8fd99fdd62a885381901bce54a996c7fe769d8e3d33c8a1d9d3cdaa4414_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Web Configurator Bundle";
        
        $__internal_1db0e8fd99fdd62a885381901bce54a996c7fe769d8e3d33c8a1d9d3cdaa4414->leave($__internal_1db0e8fd99fdd62a885381901bce54a996c7fe769d8e3d33c8a1d9d3cdaa4414_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_d113c6a97f2a600244961dc577c4cdb91fb2f875979b169bf84a65672da0a82d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d113c6a97f2a600244961dc577c4cdb91fb2f875979b169bf84a65672da0a82d->enter($__internal_d113c6a97f2a600244961dc577c4cdb91fb2f875979b169bf84a65672da0a82d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "    <div class=\"block\">
        ";
        // line 11
        $this->displayBlock('content', $context, $blocks);
        // line 12
        echo "    </div>
    <div class=\"version\">Symfony Standard Edition v.";
        // line 13
        echo twig_escape_filter($this->env, (isset($context["version"]) ? $context["version"] : $this->getContext($context, "version")), "html", null, true);
        echo "</div>
";
        
        $__internal_d113c6a97f2a600244961dc577c4cdb91fb2f875979b169bf84a65672da0a82d->leave($__internal_d113c6a97f2a600244961dc577c4cdb91fb2f875979b169bf84a65672da0a82d_prof);

    }

    // line 11
    public function block_content($context, array $blocks = array())
    {
        $__internal_d80e8d9079fc6f20037f27bd3529d7938dc645ad77b301c05f48836e4a3cbe20 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d80e8d9079fc6f20037f27bd3529d7938dc645ad77b301c05f48836e4a3cbe20->enter($__internal_d80e8d9079fc6f20037f27bd3529d7938dc645ad77b301c05f48836e4a3cbe20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_d80e8d9079fc6f20037f27bd3529d7938dc645ad77b301c05f48836e4a3cbe20->leave($__internal_d80e8d9079fc6f20037f27bd3529d7938dc645ad77b301c05f48836e4a3cbe20_prof);

    }

    public function getTemplateName()
    {
        return "SensioDistributionBundle::Configurator/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 11,  79 => 13,  76 => 12,  74 => 11,  71 => 10,  65 => 9,  53 => 7,  43 => 4,  37 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"TwigBundle::layout.html.twig\" %}

{% block head %}
    <link rel=\"stylesheet\" href=\"{{ asset('bundles/sensiodistribution/webconfigurator/css/configurator.css') }}\" />
{% endblock %}

{% block title 'Web Configurator Bundle' %}

{% block body %}
    <div class=\"block\">
        {% block content %}{% endblock %}
    </div>
    <div class=\"version\">Symfony Standard Edition v.{{ version }}</div>
{% endblock %}
", "SensioDistributionBundle::Configurator/layout.html.twig", "/Users/christos.paraskeva/Documents/my_projects/symfony_tutorial_new/vendor/sensio/distribution-bundle/Sensio/Bundle/DistributionBundle/Resources/views/Configurator/layout.html.twig");
    }
}
