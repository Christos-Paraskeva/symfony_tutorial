<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_4fdd3c99c729544fa4a0c42c81633cee6ed2d7409dfbe8b323914e1630be792d extends Twig_Template
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
        $__internal_fd36c5667204a27834394ae4ffa8e24a778247fcea6bb69280806ae41dc8d4eb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fd36c5667204a27834394ae4ffa8e24a778247fcea6bb69280806ae41dc8d4eb->enter($__internal_fd36c5667204a27834394ae4ffa8e24a778247fcea6bb69280806ae41dc8d4eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fd36c5667204a27834394ae4ffa8e24a778247fcea6bb69280806ae41dc8d4eb->leave($__internal_fd36c5667204a27834394ae4ffa8e24a778247fcea6bb69280806ae41dc8d4eb_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_4b382460630d8ab0981582e7c3a7199280f8259f815ba5931ad34857d23a7328 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4b382460630d8ab0981582e7c3a7199280f8259f815ba5931ad34857d23a7328->enter($__internal_4b382460630d8ab0981582e7c3a7199280f8259f815ba5931ad34857d23a7328_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_4b382460630d8ab0981582e7c3a7199280f8259f815ba5931ad34857d23a7328->leave($__internal_4b382460630d8ab0981582e7c3a7199280f8259f815ba5931ad34857d23a7328_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_578eaeada22fa61d89cad717a82f5e4e3c09f5838e68758269bd19b51990308e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_578eaeada22fa61d89cad717a82f5e4e3c09f5838e68758269bd19b51990308e->enter($__internal_578eaeada22fa61d89cad717a82f5e4e3c09f5838e68758269bd19b51990308e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_578eaeada22fa61d89cad717a82f5e4e3c09f5838e68758269bd19b51990308e->leave($__internal_578eaeada22fa61d89cad717a82f5e4e3c09f5838e68758269bd19b51990308e_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_a1cfb987eb0e19f338c6a64d510c0a29fbdc2610a3d29e16fe3c7d380fe5a29d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a1cfb987eb0e19f338c6a64d510c0a29fbdc2610a3d29e16fe3c7d380fe5a29d->enter($__internal_a1cfb987eb0e19f338c6a64d510c0a29fbdc2610a3d29e16fe3c7d380fe5a29d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_a1cfb987eb0e19f338c6a64d510c0a29fbdc2610a3d29e16fe3c7d380fe5a29d->leave($__internal_a1cfb987eb0e19f338c6a64d510c0a29fbdc2610a3d29e16fe3c7d380fe5a29d_prof);

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
