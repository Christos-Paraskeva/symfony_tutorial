<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_4fdd3c99c729544fa4a0c42c81633cee6ed2d7409dfbe8b323914e1630be792d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
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
        $__internal_f4c062960d7bc1904359c1162aceb04568b042b8dcf8f1ad7fdc3f364d414526 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f4c062960d7bc1904359c1162aceb04568b042b8dcf8f1ad7fdc3f364d414526->enter($__internal_f4c062960d7bc1904359c1162aceb04568b042b8dcf8f1ad7fdc3f364d414526_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f4c062960d7bc1904359c1162aceb04568b042b8dcf8f1ad7fdc3f364d414526->leave($__internal_f4c062960d7bc1904359c1162aceb04568b042b8dcf8f1ad7fdc3f364d414526_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_5fb9056c25a4db3fac8a93c1dd2ae022c3f9b1d89e628477140ce934ce708c70 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5fb9056c25a4db3fac8a93c1dd2ae022c3f9b1d89e628477140ce934ce708c70->enter($__internal_5fb9056c25a4db3fac8a93c1dd2ae022c3f9b1d89e628477140ce934ce708c70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_5fb9056c25a4db3fac8a93c1dd2ae022c3f9b1d89e628477140ce934ce708c70->leave($__internal_5fb9056c25a4db3fac8a93c1dd2ae022c3f9b1d89e628477140ce934ce708c70_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_b94e72e39f6f009d1c257f745391b095a50e7a6322d9258b049892db10a448f7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b94e72e39f6f009d1c257f745391b095a50e7a6322d9258b049892db10a448f7->enter($__internal_b94e72e39f6f009d1c257f745391b095a50e7a6322d9258b049892db10a448f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_b94e72e39f6f009d1c257f745391b095a50e7a6322d9258b049892db10a448f7->leave($__internal_b94e72e39f6f009d1c257f745391b095a50e7a6322d9258b049892db10a448f7_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_ab6f7c5e1139402798872560612c937b2e2b3b93c79ab0ccb0033900d705f6d0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ab6f7c5e1139402798872560612c937b2e2b3b93c79ab0ccb0033900d705f6d0->enter($__internal_ab6f7c5e1139402798872560612c937b2e2b3b93c79ab0ccb0033900d705f6d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_ab6f7c5e1139402798872560612c937b2e2b3b93c79ab0ccb0033900d705f6d0->leave($__internal_ab6f7c5e1139402798872560612c937b2e2b3b93c79ab0ccb0033900d705f6d0_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
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
", "TwigBundle:Exception:exception_full.html.twig", "/Users/christos.paraskeva/Documents/my_projects/symfony_tutorial_new/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
