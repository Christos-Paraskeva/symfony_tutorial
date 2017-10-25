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
        $__internal_a3eb399bd3146a6817a3e5cdd066be377a99d7e4a7ecf6fc37dd4419191fb7b3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a3eb399bd3146a6817a3e5cdd066be377a99d7e4a7ecf6fc37dd4419191fb7b3->enter($__internal_a3eb399bd3146a6817a3e5cdd066be377a99d7e4a7ecf6fc37dd4419191fb7b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SensioDistributionBundle::Configurator/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a3eb399bd3146a6817a3e5cdd066be377a99d7e4a7ecf6fc37dd4419191fb7b3->leave($__internal_a3eb399bd3146a6817a3e5cdd066be377a99d7e4a7ecf6fc37dd4419191fb7b3_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_d41874f1559bc18a45941e47b4da23936776e87ef7c1bbaf092a81995d16c81d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d41874f1559bc18a45941e47b4da23936776e87ef7c1bbaf092a81995d16c81d->enter($__internal_d41874f1559bc18a45941e47b4da23936776e87ef7c1bbaf092a81995d16c81d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/sensiodistribution/webconfigurator/css/configurator.css"), "html", null, true);
        echo "\" />
";
        
        $__internal_d41874f1559bc18a45941e47b4da23936776e87ef7c1bbaf092a81995d16c81d->leave($__internal_d41874f1559bc18a45941e47b4da23936776e87ef7c1bbaf092a81995d16c81d_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_818eb755715b6c821a919996c566da79a131c9ac2ed9b53121ed2a466cdaa6fa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_818eb755715b6c821a919996c566da79a131c9ac2ed9b53121ed2a466cdaa6fa->enter($__internal_818eb755715b6c821a919996c566da79a131c9ac2ed9b53121ed2a466cdaa6fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Web Configurator Bundle";
        
        $__internal_818eb755715b6c821a919996c566da79a131c9ac2ed9b53121ed2a466cdaa6fa->leave($__internal_818eb755715b6c821a919996c566da79a131c9ac2ed9b53121ed2a466cdaa6fa_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_1cbb5de324d9275be6adfc0baeb37e002a9c3880dc01b0b462acb14bb56bda16 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1cbb5de324d9275be6adfc0baeb37e002a9c3880dc01b0b462acb14bb56bda16->enter($__internal_1cbb5de324d9275be6adfc0baeb37e002a9c3880dc01b0b462acb14bb56bda16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_1cbb5de324d9275be6adfc0baeb37e002a9c3880dc01b0b462acb14bb56bda16->leave($__internal_1cbb5de324d9275be6adfc0baeb37e002a9c3880dc01b0b462acb14bb56bda16_prof);

    }

    // line 11
    public function block_content($context, array $blocks = array())
    {
        $__internal_14cb8eeb748a5038410b75a3d2694e86cd49f2db921fe59b93d90c50e272eedd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_14cb8eeb748a5038410b75a3d2694e86cd49f2db921fe59b93d90c50e272eedd->enter($__internal_14cb8eeb748a5038410b75a3d2694e86cd49f2db921fe59b93d90c50e272eedd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_14cb8eeb748a5038410b75a3d2694e86cd49f2db921fe59b93d90c50e272eedd->leave($__internal_14cb8eeb748a5038410b75a3d2694e86cd49f2db921fe59b93d90c50e272eedd_prof);

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
