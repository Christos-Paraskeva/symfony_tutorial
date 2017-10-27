<?php

/* EventBundle:Event:show.html.twig */
class __TwigTemplate_1e387b71bda3866bb0d0f8021ce5c06990106067edbadf7d4f065440ffc4959f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("EventBundle::layout.html.twig", "EventBundle:Event:show.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "EventBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_60ee9e0f31de0d8fcdb2abf574489c47ebf0b02cccad738ac80b29089474207e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_60ee9e0f31de0d8fcdb2abf574489c47ebf0b02cccad738ac80b29089474207e->enter($__internal_60ee9e0f31de0d8fcdb2abf574489c47ebf0b02cccad738ac80b29089474207e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EventBundle:Event:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_60ee9e0f31de0d8fcdb2abf574489c47ebf0b02cccad738ac80b29089474207e->leave($__internal_60ee9e0f31de0d8fcdb2abf574489c47ebf0b02cccad738ac80b29089474207e_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_fd243b66fffaa2276d47c7ce2be58fc3d047926675e41a6d1ac70595a2e142a5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fd243b66fffaa2276d47c7ce2be58fc3d047926675e41a6d1ac70595a2e142a5->enter($__internal_fd243b66fffaa2276d47c7ce2be58fc3d047926675e41a6d1ac70595a2e142a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
    <section class=\"event-show\">
        <header id=\"menu\">
            <a class=\"link\" href=\"";
        // line 7
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("event");
        echo "\">&larr; back to the events list</a>
        </header>

        <article>
            <header class=\"map-container\">
                <img src=\"http://maps.googleapis.com/maps/api/staticmap?center=";
        // line 12
        echo twig_escape_filter($this->env, twig_urlencode_filter($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "location", array())), "html", null, true);
        echo "&markers=color:red%7Ccolor:red%7C";
        echo twig_escape_filter($this->env, twig_urlencode_filter($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "location", array())), "html", null, true);
        echo "&zoom=14&size=300x300&maptype=roadmap&sensor=false\" />
            </header>
            <section>
                <h1>
                    ";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "name", array()), "html", null, true);
        echo "

                    ";
        // line 18
        if (($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()) == $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "owner", array()))) {
            // line 19
            echo "                        <a class=\"button\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("event_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()))), "html", null, true);
            echo "\">edit</a>
                    ";
        }
        // line 21
        echo "                </h1>

                <dl>
                    <dt>where:</dt>
                    <dd>";
        // line 25
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "location", array()), "html", null, true);
        echo "</dd>

                    <dt>when:</dt>
                    <dd>";
        // line 28
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "time", array()), "g:ia / l M j, Y"), "html", null, true);
        echo "</dd>

                    <dt>what:</dt>
                    <dd>";
        // line 31
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "details", array()), "html", null, true);
        echo "</dd>

                    <dt>posted:</dt>
                    <dd>";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('Bundle\EventBundle\Twig\EventExtension')->calculateAgo($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "createdAt", array())), "html", null, true);
        echo " by ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "owner", array()), "username", array()), "html", null, true);
        echo "</dd>

                    <dt>who:</dt>
                    <dd>
                        ";
        // line 38
        echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "attendees", array())), "html", null, true);
        echo " attending!

                        <ul class=\"users\">
                            ";
        // line 41
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "attendees", array()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["attendee"]) {
            // line 42
            echo "                                <li>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["attendee"], "username", array()), "html", null, true);
            echo "</li>
                            ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 44
            echo "                                <li>Nobody Yet! RSVP!</li>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attendee'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 46
        echo "                        </ul>
                            ";
        // line 47
        if ($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "hasAttendee", array(0 => $this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array())), "method")) {
            // line 48
            echo "                                <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("event_unattend", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-warning btn-xs\">
                                    Oh no! I can't go anymore!
                                </a>
                            ";
        } else {
            // line 52
            echo "                                <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("event_attend", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-success btn-xs\">
                                    I totally want to go!
                                </a>
                            ";
        }
        // line 56
        echo "                        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["users"]) ? $context["users"] : $this->getContext($context, "users")));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 57
            echo "                            <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("event_invite", array("user_id" => $this->getAttribute($context["user"], "id", array()), "event_id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-warning btn-xs\">
                            <li>";
            // line 58
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "username", array()), "html", null, true);
            echo "</li>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 60
        echo "
                    </dd>
                </dl>
            </section>
        </article>
    </section>
";
        
        $__internal_fd243b66fffaa2276d47c7ce2be58fc3d047926675e41a6d1ac70595a2e142a5->leave($__internal_fd243b66fffaa2276d47c7ce2be58fc3d047926675e41a6d1ac70595a2e142a5_prof);

    }

    public function getTemplateName()
    {
        return "EventBundle:Event:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  173 => 60,  165 => 58,  160 => 57,  155 => 56,  147 => 52,  139 => 48,  137 => 47,  134 => 46,  127 => 44,  119 => 42,  114 => 41,  108 => 38,  99 => 34,  93 => 31,  87 => 28,  81 => 25,  75 => 21,  69 => 19,  67 => 18,  62 => 16,  53 => 12,  45 => 7,  40 => 4,  34 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'EventBundle::layout.html.twig' %}

{% block body %}

    <section class=\"event-show\">
        <header id=\"menu\">
            <a class=\"link\" href=\"{{ path('event') }}\">&larr; back to the events list</a>
        </header>

        <article>
            <header class=\"map-container\">
                <img src=\"http://maps.googleapis.com/maps/api/staticmap?center={{ entity.location | url_encode }}&markers=color:red%7Ccolor:red%7C{{ entity.location | url_encode }}&zoom=14&size=300x300&maptype=roadmap&sensor=false\" />
            </header>
            <section>
                <h1>
                    {{ entity.name }}

                    {% if app.user == entity.owner %}
                        <a class=\"button\" href=\"{{ path('event_edit', {'id': entity.id}) }}\">edit</a>
                    {% endif %}
                </h1>

                <dl>
                    <dt>where:</dt>
                    <dd>{{ entity.location }}</dd>

                    <dt>when:</dt>
                    <dd>{{ entity.time | date('g:ia / l M j, Y') }}</dd>

                    <dt>what:</dt>
                    <dd>{{ entity.details }}</dd>

                    <dt>posted:</dt>
                    <dd>{{ entity.createdAt|ago }} by {{ entity.owner.username }}</dd>

                    <dt>who:</dt>
                    <dd>
                        {{ entity.attendees|length }} attending!

                        <ul class=\"users\">
                            {% for attendee in entity.attendees %}
                                <li>{{ attendee.username }}</li>
                            {% else %}
                                <li>Nobody Yet! RSVP!</li>
                            {% endfor %}
                        </ul>
                            {% if entity.hasAttendee(app.user) %}
                                <a href=\"{{ path('event_unattend', {'id': entity.id}) }}\" class=\"btn btn-warning btn-xs\">
                                    Oh no! I can't go anymore!
                                </a>
                            {% else %}
                                <a href=\"{{ path('event_attend', {'id': entity.id}) }}\" class=\"btn btn-success btn-xs\">
                                    I totally want to go!
                                </a>
                            {% endif %}
                        {% for user in users %}
                            <a href=\"{{ path('event_invite', {'user_id': user.id, 'event_id': entity.id}) }}\" class=\"btn btn-warning btn-xs\">
                            <li>{{ user.username }}</li>
                        {% endfor %}

                    </dd>
                </dl>
            </section>
        </article>
    </section>
{% endblock %}
", "EventBundle:Event:show.html.twig", "/Users/christos.paraskeva/Documents/my_projects/symfony_tutorial_new/src/Bundle/EventBundle/Resources/views/Event/show.html.twig");
    }
}
