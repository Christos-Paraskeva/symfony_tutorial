<?php

/* EventBundle:Event:_upcomingEvents.html.twig */
class __TwigTemplate_2fd753055f57e2a8a7b90bb81d46e5eb5ae54af31e41d11c5db8916de0b4a24d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9376f35f940ae5a34e797d409289806c149a70f806b2d15773c3796f77b9c61a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9376f35f940ae5a34e797d409289806c149a70f806b2d15773c3796f77b9c61a->enter($__internal_9376f35f940ae5a34e797d409289806c149a70f806b2d15773c3796f77b9c61a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EventBundle:Event:_upcomingEvents.html.twig"));

        // line 2
        echo "
";
        // line 4
        echo "
";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["events"]) ? $context["events"] : $this->getContext($context, "events")));
        foreach ($context['_seq'] as $context["_key"] => $context["event"]) {
            // line 6
            echo "    <article>
        <header class=\"map-container\">
            <img src=\"http://maps.googleapis.com/maps/api/staticmap?center=";
            // line 8
            echo twig_escape_filter($this->env, twig_urlencode_filter($this->getAttribute($context["event"], "location", array())), "html", null, true);
            echo "&markers=color:red%7Ccolor:red%7C";
            echo twig_escape_filter($this->env, twig_urlencode_filter($this->getAttribute($context["event"], "location", array())), "html", null, true);
            echo "&zoom=14&size=150x150&maptype=roadmap&sensor=false\" />
        </header>
        <section>
            <h3>
                <a href=\"";
            // line 12
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("event_show", array("slug" => $this->getAttribute($context["event"], "slug", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["event"], "name", array()), "html", null, true);
            echo "</a>
            </h3>

            <dl>
                <dt>where:</dt>
                <dd>";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute($context["event"], "location", array()), "html", null, true);
            echo "</dd>

                <dt>when:</dt>
                <dd>";
            // line 20
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["event"], "time", array()), "g:ia / l M j, Y"), "html", null, true);
            echo "</dd>

                <dt>posted:</dt>
                <dd>";
            // line 23
            echo twig_escape_filter($this->env, $this->env->getExtension('Yoda\EventBundle\Twig\EventExtension')->calculateAgo($this->getAttribute($context["event"], "createdAt", array())), "html", null, true);
            echo "</dd>
            </dl>
        </section>
    </article>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['event'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        echo "
";
        
        $__internal_9376f35f940ae5a34e797d409289806c149a70f806b2d15773c3796f77b9c61a->leave($__internal_9376f35f940ae5a34e797d409289806c149a70f806b2d15773c3796f77b9c61a_prof);

    }

    public function getTemplateName()
    {
        return "EventBundle:Event:_upcomingEvents.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 28,  67 => 23,  61 => 20,  55 => 17,  45 => 12,  36 => 8,  32 => 6,  28 => 5,  25 => 4,  22 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{#{% extends 'EventBundle::layout.html.twig' %}#}

{#{% block body %}#}

{% for event in events %}
    <article>
        <header class=\"map-container\">
            <img src=\"http://maps.googleapis.com/maps/api/staticmap?center={{ event.location | url_encode }}&markers=color:red%7Ccolor:red%7C{{ event.location | url_encode }}&zoom=14&size=150x150&maptype=roadmap&sensor=false\" />
        </header>
        <section>
            <h3>
                <a href=\"{{ path('event_show', {'slug': event.slug}) }}\">{{ event.name }}</a>
            </h3>

            <dl>
                <dt>where:</dt>
                <dd>{{ event.location }}</dd>

                <dt>when:</dt>
                <dd>{{ event.time | date('g:ia / l M j, Y') }}</dd>

                <dt>posted:</dt>
                <dd>{{ event.createdAt|ago }}</dd>
            </dl>
        </section>
    </article>
{% endfor %}

{#{% endblock %}#}
", "EventBundle:Event:_upcomingEvents.html.twig", "/Users/christos.paraskeva/Documents/my_projects/symfony_tutorial_new/src/Yoda/EventBundle/Resources/views/Event/_upcomingEvents.html.twig");
    }
}
