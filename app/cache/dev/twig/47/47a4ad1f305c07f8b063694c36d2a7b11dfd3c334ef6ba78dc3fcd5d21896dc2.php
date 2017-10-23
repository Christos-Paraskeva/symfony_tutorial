<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_c17887d799b1db7a72d05ff2e4a66ce070cfde66889cd22269caff493b8664a3 extends Twig_Template
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
        $__internal_e9d98c60d0b284ee7e852ae3ba41698f432ac0d1bccb90c8c8dfe136c2301602 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e9d98c60d0b284ee7e852ae3ba41698f432ac0d1bccb90c8c8dfe136c2301602->enter($__internal_e9d98c60d0b284ee7e852ae3ba41698f432ac0d1bccb90c8c8dfe136c2301602_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e9d98c60d0b284ee7e852ae3ba41698f432ac0d1bccb90c8c8dfe136c2301602->leave($__internal_e9d98c60d0b284ee7e852ae3ba41698f432ac0d1bccb90c8c8dfe136c2301602_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_50b7563ac588918a8367336cae3f1e2ca5b847aba2bde46a3c6bcf5f8d76f176 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_50b7563ac588918a8367336cae3f1e2ca5b847aba2bde46a3c6bcf5f8d76f176->enter($__internal_50b7563ac588918a8367336cae3f1e2ca5b847aba2bde46a3c6bcf5f8d76f176_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_50b7563ac588918a8367336cae3f1e2ca5b847aba2bde46a3c6bcf5f8d76f176->leave($__internal_50b7563ac588918a8367336cae3f1e2ca5b847aba2bde46a3c6bcf5f8d76f176_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_65e4d589e45c9ced49cacbe75a83ad65e523df8a1908de1826d4dcb73abee983 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_65e4d589e45c9ced49cacbe75a83ad65e523df8a1908de1826d4dcb73abee983->enter($__internal_65e4d589e45c9ced49cacbe75a83ad65e523df8a1908de1826d4dcb73abee983_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_65e4d589e45c9ced49cacbe75a83ad65e523df8a1908de1826d4dcb73abee983->leave($__internal_65e4d589e45c9ced49cacbe75a83ad65e523df8a1908de1826d4dcb73abee983_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_48cc7bc2653ee187239cb52667d4dce1c260dd0ca13111dd43bd2585e73a8495 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_48cc7bc2653ee187239cb52667d4dce1c260dd0ca13111dd43bd2585e73a8495->enter($__internal_48cc7bc2653ee187239cb52667d4dce1c260dd0ca13111dd43bd2585e73a8495_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_48cc7bc2653ee187239cb52667d4dce1c260dd0ca13111dd43bd2585e73a8495->leave($__internal_48cc7bc2653ee187239cb52667d4dce1c260dd0ca13111dd43bd2585e73a8495_prof);

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
