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
        $__internal_c9d88d89520098f617b0dbfaaff3bc67a38994ff73bd9d84480d28f21d6b03f8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c9d88d89520098f617b0dbfaaff3bc67a38994ff73bd9d84480d28f21d6b03f8->enter($__internal_c9d88d89520098f617b0dbfaaff3bc67a38994ff73bd9d84480d28f21d6b03f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c9d88d89520098f617b0dbfaaff3bc67a38994ff73bd9d84480d28f21d6b03f8->leave($__internal_c9d88d89520098f617b0dbfaaff3bc67a38994ff73bd9d84480d28f21d6b03f8_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_e09fc27039c15a09b28d51a66a2d7b44d689c134288fa15fd0bc8f38610a0578 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e09fc27039c15a09b28d51a66a2d7b44d689c134288fa15fd0bc8f38610a0578->enter($__internal_e09fc27039c15a09b28d51a66a2d7b44d689c134288fa15fd0bc8f38610a0578_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_e09fc27039c15a09b28d51a66a2d7b44d689c134288fa15fd0bc8f38610a0578->leave($__internal_e09fc27039c15a09b28d51a66a2d7b44d689c134288fa15fd0bc8f38610a0578_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_144a547793ff5b29e5e8f520fabebece663c493a31d6856c66301d2d0f022554 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_144a547793ff5b29e5e8f520fabebece663c493a31d6856c66301d2d0f022554->enter($__internal_144a547793ff5b29e5e8f520fabebece663c493a31d6856c66301d2d0f022554_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_144a547793ff5b29e5e8f520fabebece663c493a31d6856c66301d2d0f022554->leave($__internal_144a547793ff5b29e5e8f520fabebece663c493a31d6856c66301d2d0f022554_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_a6799d041aed9727ed51dd779bb30582c94a29d65a5c05bfd80ed87cdafa42a8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a6799d041aed9727ed51dd779bb30582c94a29d65a5c05bfd80ed87cdafa42a8->enter($__internal_a6799d041aed9727ed51dd779bb30582c94a29d65a5c05bfd80ed87cdafa42a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_a6799d041aed9727ed51dd779bb30582c94a29d65a5c05bfd80ed87cdafa42a8->leave($__internal_a6799d041aed9727ed51dd779bb30582c94a29d65a5c05bfd80ed87cdafa42a8_prof);

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
