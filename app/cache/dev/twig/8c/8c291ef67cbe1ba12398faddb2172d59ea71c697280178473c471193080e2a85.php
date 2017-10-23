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
        $__internal_6ecd4d40d0ef5d4c2c0faf3b206a8d1bb7cb501ef0c0881699623d1687e38fd6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6ecd4d40d0ef5d4c2c0faf3b206a8d1bb7cb501ef0c0881699623d1687e38fd6->enter($__internal_6ecd4d40d0ef5d4c2c0faf3b206a8d1bb7cb501ef0c0881699623d1687e38fd6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6ecd4d40d0ef5d4c2c0faf3b206a8d1bb7cb501ef0c0881699623d1687e38fd6->leave($__internal_6ecd4d40d0ef5d4c2c0faf3b206a8d1bb7cb501ef0c0881699623d1687e38fd6_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_6b1068bfe31750381452d5fdbc253aa73ab5af6df020322f93b682aa049544ee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6b1068bfe31750381452d5fdbc253aa73ab5af6df020322f93b682aa049544ee->enter($__internal_6b1068bfe31750381452d5fdbc253aa73ab5af6df020322f93b682aa049544ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_6b1068bfe31750381452d5fdbc253aa73ab5af6df020322f93b682aa049544ee->leave($__internal_6b1068bfe31750381452d5fdbc253aa73ab5af6df020322f93b682aa049544ee_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_a785e950e22fb533b95b8ace806fe28f02b2aa39cecf2a7114cf8fe68e1d77ba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a785e950e22fb533b95b8ace806fe28f02b2aa39cecf2a7114cf8fe68e1d77ba->enter($__internal_a785e950e22fb533b95b8ace806fe28f02b2aa39cecf2a7114cf8fe68e1d77ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_a785e950e22fb533b95b8ace806fe28f02b2aa39cecf2a7114cf8fe68e1d77ba->leave($__internal_a785e950e22fb533b95b8ace806fe28f02b2aa39cecf2a7114cf8fe68e1d77ba_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_7bcd694276c924d13a4a5ead8d8ecf42130c89733f2dca3a0341ea6033568698 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7bcd694276c924d13a4a5ead8d8ecf42130c89733f2dca3a0341ea6033568698->enter($__internal_7bcd694276c924d13a4a5ead8d8ecf42130c89733f2dca3a0341ea6033568698_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_7bcd694276c924d13a4a5ead8d8ecf42130c89733f2dca3a0341ea6033568698->leave($__internal_7bcd694276c924d13a4a5ead8d8ecf42130c89733f2dca3a0341ea6033568698_prof);

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
