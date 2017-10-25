<?php

/* EventBundle:Default:index.html.twig */
class __TwigTemplate_e1c7289fbac51ffee687bd18f6f6614ea530e0f67d483516ad73d05821d6b347 extends Twig_Template
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
        $__internal_9743f4bd40c9734f9b80c90ad053f6175736bedf5d986b328619efe1b7bd533f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9743f4bd40c9734f9b80c90ad053f6175736bedf5d986b328619efe1b7bd533f->enter($__internal_9743f4bd40c9734f9b80c90ad053f6175736bedf5d986b328619efe1b7bd533f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EventBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9743f4bd40c9734f9b80c90ad053f6175736bedf5d986b328619efe1b7bd533f->leave($__internal_9743f4bd40c9734f9b80c90ad053f6175736bedf5d986b328619efe1b7bd533f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_a48afb969ec5e380b24fe558cd0098e8462b34d4ead822d9165c56231953f2ec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a48afb969ec5e380b24fe558cd0098e8462b34d4ead822d9165c56231953f2ec->enter($__internal_a48afb969ec5e380b24fe558cd0098e8462b34d4ead822d9165c56231953f2ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Some Twiggy Goodness";
        
        $__internal_a48afb969ec5e380b24fe558cd0098e8462b34d4ead822d9165c56231953f2ec->leave($__internal_a48afb969ec5e380b24fe558cd0098e8462b34d4ead822d9165c56231953f2ec_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_7a10de21f00c3349ad692fa3cb71f3a15b8ee696f601aef15899b029d6993589 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7a10de21f00c3349ad692fa3cb71f3a15b8ee696f601aef15899b029d6993589->enter($__internal_7a10de21f00c3349ad692fa3cb71f3a15b8ee696f601aef15899b029d6993589_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_7a10de21f00c3349ad692fa3cb71f3a15b8ee696f601aef15899b029d6993589->leave($__internal_7a10de21f00c3349ad692fa3cb71f3a15b8ee696f601aef15899b029d6993589_prof);

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

{% endblock %}", "EventBundle:Default:index.html.twig", "/Users/christos.paraskeva/Documents/my_projects/symfony_tutorial_new/src/Bundle/EventBundle/Resources/views/Default/index.html.twig");
    }
}
