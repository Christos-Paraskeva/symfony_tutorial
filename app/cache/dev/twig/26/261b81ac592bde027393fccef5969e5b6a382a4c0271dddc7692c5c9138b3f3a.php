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
        $__internal_9d5ea98b9bbff265c3b5abccb6793852e141c5647d24aff449955ca667f02380 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9d5ea98b9bbff265c3b5abccb6793852e141c5647d24aff449955ca667f02380->enter($__internal_9d5ea98b9bbff265c3b5abccb6793852e141c5647d24aff449955ca667f02380_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EventBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9d5ea98b9bbff265c3b5abccb6793852e141c5647d24aff449955ca667f02380->leave($__internal_9d5ea98b9bbff265c3b5abccb6793852e141c5647d24aff449955ca667f02380_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_0232139c0940c38eac57334b60f8b9e3c09884987824edd257ae4c1fa02deee1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0232139c0940c38eac57334b60f8b9e3c09884987824edd257ae4c1fa02deee1->enter($__internal_0232139c0940c38eac57334b60f8b9e3c09884987824edd257ae4c1fa02deee1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Some Twiggy Goodness";
        
        $__internal_0232139c0940c38eac57334b60f8b9e3c09884987824edd257ae4c1fa02deee1->leave($__internal_0232139c0940c38eac57334b60f8b9e3c09884987824edd257ae4c1fa02deee1_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_74ffb8fc1defe77617e2e9de7ead4ffa7b8336641eee03ce5b18effeede1e4af = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_74ffb8fc1defe77617e2e9de7ead4ffa7b8336641eee03ce5b18effeede1e4af->enter($__internal_74ffb8fc1defe77617e2e9de7ead4ffa7b8336641eee03ce5b18effeede1e4af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_74ffb8fc1defe77617e2e9de7ead4ffa7b8336641eee03ce5b18effeede1e4af->leave($__internal_74ffb8fc1defe77617e2e9de7ead4ffa7b8336641eee03ce5b18effeede1e4af_prof);

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
