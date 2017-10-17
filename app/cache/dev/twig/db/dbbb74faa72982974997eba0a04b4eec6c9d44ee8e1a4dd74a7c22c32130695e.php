<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_918816df9d54ea0ee3f745bc8c96147726ab8f37716936eee38d67eee4a16373 extends Twig_Template
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
        $__internal_259993d6e5d0958a4e2ee92edc440ac6c7536da9230608b1ffa8956087732424 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_259993d6e5d0958a4e2ee92edc440ac6c7536da9230608b1ffa8956087732424->enter($__internal_259993d6e5d0958a4e2ee92edc440ac6c7536da9230608b1ffa8956087732424_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_259993d6e5d0958a4e2ee92edc440ac6c7536da9230608b1ffa8956087732424->leave($__internal_259993d6e5d0958a4e2ee92edc440ac6c7536da9230608b1ffa8956087732424_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_3dc4e78a347df8d5c5cfe37603538083eeb48b3181e382f491f304b700619425 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3dc4e78a347df8d5c5cfe37603538083eeb48b3181e382f491f304b700619425->enter($__internal_3dc4e78a347df8d5c5cfe37603538083eeb48b3181e382f491f304b700619425_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_3dc4e78a347df8d5c5cfe37603538083eeb48b3181e382f491f304b700619425->leave($__internal_3dc4e78a347df8d5c5cfe37603538083eeb48b3181e382f491f304b700619425_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_85937d1bbcc6b2d8c441d6107fd8a5f2564c17d530f0baccea21bd1d4e07acbb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_85937d1bbcc6b2d8c441d6107fd8a5f2564c17d530f0baccea21bd1d4e07acbb->enter($__internal_85937d1bbcc6b2d8c441d6107fd8a5f2564c17d530f0baccea21bd1d4e07acbb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_85937d1bbcc6b2d8c441d6107fd8a5f2564c17d530f0baccea21bd1d4e07acbb->leave($__internal_85937d1bbcc6b2d8c441d6107fd8a5f2564c17d530f0baccea21bd1d4e07acbb_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_c237976955c7469a5f9bdbb5c131f3ca897b983ffc1780d472efbc726a31d20e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c237976955c7469a5f9bdbb5c131f3ca897b983ffc1780d472efbc726a31d20e->enter($__internal_c237976955c7469a5f9bdbb5c131f3ca897b983ffc1780d472efbc726a31d20e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_c237976955c7469a5f9bdbb5c131f3ca897b983ffc1780d472efbc726a31d20e->leave($__internal_c237976955c7469a5f9bdbb5c131f3ca897b983ffc1780d472efbc726a31d20e_prof);

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
