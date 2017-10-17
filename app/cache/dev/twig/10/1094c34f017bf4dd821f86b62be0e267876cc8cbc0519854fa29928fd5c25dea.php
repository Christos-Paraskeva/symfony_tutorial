<?php

/* EventBundle:Default:index.html.twig */
class __TwigTemplate_8e21d68ef202cb6a7515a6508b895532c43f7e23a71bf34a16160dd12cb1778a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "EventBundle:Default:index.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c4f1c474d8109576834256ec1d5cb5f01d2827d8923e6475b356e4251123551a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c4f1c474d8109576834256ec1d5cb5f01d2827d8923e6475b356e4251123551a->enter($__internal_c4f1c474d8109576834256ec1d5cb5f01d2827d8923e6475b356e4251123551a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EventBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c4f1c474d8109576834256ec1d5cb5f01d2827d8923e6475b356e4251123551a->leave($__internal_c4f1c474d8109576834256ec1d5cb5f01d2827d8923e6475b356e4251123551a_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_0fd3f812641eda4a46aeb6c6e232c2c91244fdee4f765a98240597233ea22e8f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0fd3f812641eda4a46aeb6c6e232c2c91244fdee4f765a98240597233ea22e8f->enter($__internal_0fd3f812641eda4a46aeb6c6e232c2c91244fdee4f765a98240597233ea22e8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Some Twiggy Goodness";
        
        $__internal_0fd3f812641eda4a46aeb6c6e232c2c91244fdee4f765a98240597233ea22e8f->leave($__internal_0fd3f812641eda4a46aeb6c6e232c2c91244fdee4f765a98240597233ea22e8f_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_365143ed3ce869b9373633541a0efe30cb5656f34ce8b318cdee982f393e9802 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_365143ed3ce869b9373633541a0efe30cb5656f34ce8b318cdee982f393e9802->enter($__internal_365143ed3ce869b9373633541a0efe30cb5656f34ce8b318cdee982f393e9802_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "
";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["count"]) ? $context["count"] : $this->getContext($context, "count"))));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 9
            echo "    Hello <strong>";
            echo twig_escape_filter($this->env, twig_upper_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name"))), "html", null, true);
            echo "</strong> # ";
            echo twig_escape_filter($this->env, $context["i"], "html", null, true);
            echo "!<br/>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 11
        echo "
    ";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["event"]) ? $context["event"] : $this->getContext($context, "event")), "name", array()), "html", null, true);
        echo "<br/>
    ";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["event"]) ? $context["event"] : $this->getContext($context, "event")), "location", array()), "html", null, true);
        echo "<br/>

";
        
        $__internal_365143ed3ce869b9373633541a0efe30cb5656f34ce8b318cdee982f393e9802->leave($__internal_365143ed3ce869b9373633541a0efe30cb5656f34ce8b318cdee982f393e9802_prof);

    }

    public function getTemplateName()
    {
        return "EventBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 13,  74 => 12,  71 => 11,  60 => 9,  56 => 8,  53 => 7,  47 => 5,  35 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '::base.html.twig' %}

{% block title 'Some Twiggy Goodness' %}

{% block body %}
{# Hello comments! #}

{% for i in 1..count %}
    Hello <strong>{{ name|upper }}</strong> # {{ i }}!<br/>
{% endfor %}

    {{ event.name }}<br/>
    {{ event.location }}<br/>

{% endblock %}", "EventBundle:Default:index.html.twig", "/Users/christos.paraskeva/Documents/my_projects/symfony_tutorial_new/src/Yoda/EventBundle/Resources/views/Default/index.html.twig");
    }
}
