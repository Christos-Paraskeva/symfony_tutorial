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
        $__internal_0be344e74ceafb28de30eafe9784709219d06fde94adc80a294be1900ff0528c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0be344e74ceafb28de30eafe9784709219d06fde94adc80a294be1900ff0528c->enter($__internal_0be344e74ceafb28de30eafe9784709219d06fde94adc80a294be1900ff0528c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0be344e74ceafb28de30eafe9784709219d06fde94adc80a294be1900ff0528c->leave($__internal_0be344e74ceafb28de30eafe9784709219d06fde94adc80a294be1900ff0528c_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_f3296eb0382dc60fa0b5435434bdd7f54a3b403f0af1f7556d58068036705438 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f3296eb0382dc60fa0b5435434bdd7f54a3b403f0af1f7556d58068036705438->enter($__internal_f3296eb0382dc60fa0b5435434bdd7f54a3b403f0af1f7556d58068036705438_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_f3296eb0382dc60fa0b5435434bdd7f54a3b403f0af1f7556d58068036705438->leave($__internal_f3296eb0382dc60fa0b5435434bdd7f54a3b403f0af1f7556d58068036705438_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_0cfb37529e7f4466ff6c8e1eefff2529f46e092b4dfb5a71d9ce3de548c5ffee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0cfb37529e7f4466ff6c8e1eefff2529f46e092b4dfb5a71d9ce3de548c5ffee->enter($__internal_0cfb37529e7f4466ff6c8e1eefff2529f46e092b4dfb5a71d9ce3de548c5ffee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_0cfb37529e7f4466ff6c8e1eefff2529f46e092b4dfb5a71d9ce3de548c5ffee->leave($__internal_0cfb37529e7f4466ff6c8e1eefff2529f46e092b4dfb5a71d9ce3de548c5ffee_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_4a5ee8621364288964f606ae62e38582d45a0b2a690b4bdc8bf39ce8f624530d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4a5ee8621364288964f606ae62e38582d45a0b2a690b4bdc8bf39ce8f624530d->enter($__internal_4a5ee8621364288964f606ae62e38582d45a0b2a690b4bdc8bf39ce8f624530d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_4a5ee8621364288964f606ae62e38582d45a0b2a690b4bdc8bf39ce8f624530d->leave($__internal_4a5ee8621364288964f606ae62e38582d45a0b2a690b4bdc8bf39ce8f624530d_prof);

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
