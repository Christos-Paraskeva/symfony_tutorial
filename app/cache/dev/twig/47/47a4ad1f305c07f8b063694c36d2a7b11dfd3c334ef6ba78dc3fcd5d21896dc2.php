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
        $__internal_3d36514b21d71f5a7d5bd8d0cb1b899a0cd9847c79427832889d5089a212744d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3d36514b21d71f5a7d5bd8d0cb1b899a0cd9847c79427832889d5089a212744d->enter($__internal_3d36514b21d71f5a7d5bd8d0cb1b899a0cd9847c79427832889d5089a212744d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3d36514b21d71f5a7d5bd8d0cb1b899a0cd9847c79427832889d5089a212744d->leave($__internal_3d36514b21d71f5a7d5bd8d0cb1b899a0cd9847c79427832889d5089a212744d_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_b4a917233be95d571f4f589b33b9b663bd39f04487037290c1e14820eab94f2f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b4a917233be95d571f4f589b33b9b663bd39f04487037290c1e14820eab94f2f->enter($__internal_b4a917233be95d571f4f589b33b9b663bd39f04487037290c1e14820eab94f2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_b4a917233be95d571f4f589b33b9b663bd39f04487037290c1e14820eab94f2f->leave($__internal_b4a917233be95d571f4f589b33b9b663bd39f04487037290c1e14820eab94f2f_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_13d7423e29e9de6873c1dda6f648c637ded57a3e675aff1adcb840ca7621eee8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_13d7423e29e9de6873c1dda6f648c637ded57a3e675aff1adcb840ca7621eee8->enter($__internal_13d7423e29e9de6873c1dda6f648c637ded57a3e675aff1adcb840ca7621eee8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_13d7423e29e9de6873c1dda6f648c637ded57a3e675aff1adcb840ca7621eee8->leave($__internal_13d7423e29e9de6873c1dda6f648c637ded57a3e675aff1adcb840ca7621eee8_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_d078d85433f3428c223106875dcd5e65b5d0ae325cb48fc5851aedccca989e97 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d078d85433f3428c223106875dcd5e65b5d0ae325cb48fc5851aedccca989e97->enter($__internal_d078d85433f3428c223106875dcd5e65b5d0ae325cb48fc5851aedccca989e97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_d078d85433f3428c223106875dcd5e65b5d0ae325cb48fc5851aedccca989e97->leave($__internal_d078d85433f3428c223106875dcd5e65b5d0ae325cb48fc5851aedccca989e97_prof);

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
