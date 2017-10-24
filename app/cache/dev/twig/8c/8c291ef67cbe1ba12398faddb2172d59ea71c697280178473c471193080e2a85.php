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
        $__internal_c1c7e17308372d8fbace8a35ff987e3f8f0c8c29caa26e026529d2b0e4fc3b0d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c1c7e17308372d8fbace8a35ff987e3f8f0c8c29caa26e026529d2b0e4fc3b0d->enter($__internal_c1c7e17308372d8fbace8a35ff987e3f8f0c8c29caa26e026529d2b0e4fc3b0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c1c7e17308372d8fbace8a35ff987e3f8f0c8c29caa26e026529d2b0e4fc3b0d->leave($__internal_c1c7e17308372d8fbace8a35ff987e3f8f0c8c29caa26e026529d2b0e4fc3b0d_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_a60cca767802a93c05a8184e7ed13c04ed775c732cc57f44a34926d72dab875e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a60cca767802a93c05a8184e7ed13c04ed775c732cc57f44a34926d72dab875e->enter($__internal_a60cca767802a93c05a8184e7ed13c04ed775c732cc57f44a34926d72dab875e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_a60cca767802a93c05a8184e7ed13c04ed775c732cc57f44a34926d72dab875e->leave($__internal_a60cca767802a93c05a8184e7ed13c04ed775c732cc57f44a34926d72dab875e_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_d0a44e7016604e5feef810e6b0b92206d641af0a4e98ee1a8dc5dc49a9f8ace0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d0a44e7016604e5feef810e6b0b92206d641af0a4e98ee1a8dc5dc49a9f8ace0->enter($__internal_d0a44e7016604e5feef810e6b0b92206d641af0a4e98ee1a8dc5dc49a9f8ace0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_d0a44e7016604e5feef810e6b0b92206d641af0a4e98ee1a8dc5dc49a9f8ace0->leave($__internal_d0a44e7016604e5feef810e6b0b92206d641af0a4e98ee1a8dc5dc49a9f8ace0_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_a0935b1e2272de7e37c4597d6a0aa5c0eddc491e6cb21fec572b79011549523c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a0935b1e2272de7e37c4597d6a0aa5c0eddc491e6cb21fec572b79011549523c->enter($__internal_a0935b1e2272de7e37c4597d6a0aa5c0eddc491e6cb21fec572b79011549523c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_a0935b1e2272de7e37c4597d6a0aa5c0eddc491e6cb21fec572b79011549523c->leave($__internal_a0935b1e2272de7e37c4597d6a0aa5c0eddc491e6cb21fec572b79011549523c_prof);

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
