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
        $__internal_9e6cb5e04b3d2956fa8b2b03b1ee0e8b17bf88f79f7c83047e10bdc1727736f2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9e6cb5e04b3d2956fa8b2b03b1ee0e8b17bf88f79f7c83047e10bdc1727736f2->enter($__internal_9e6cb5e04b3d2956fa8b2b03b1ee0e8b17bf88f79f7c83047e10bdc1727736f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EventBundle:Event:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9e6cb5e04b3d2956fa8b2b03b1ee0e8b17bf88f79f7c83047e10bdc1727736f2->leave($__internal_9e6cb5e04b3d2956fa8b2b03b1ee0e8b17bf88f79f7c83047e10bdc1727736f2_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_457261ec64a7febd4e8fbe284d71eab80081167fb5d8d938bf700a6d2871710c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_457261ec64a7febd4e8fbe284d71eab80081167fb5d8d938bf700a6d2871710c->enter($__internal_457261ec64a7febd4e8fbe284d71eab80081167fb5d8d938bf700a6d2871710c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        echo "                        <div> Invite </div>

                        ";
        // line 58
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["users"]) ? $context["users"] : $this->getContext($context, "users")));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 59
            echo "                            ";
            if (($this->getAttribute($context["user"], "id", array()) != $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "id", array()))) {
                // line 60
                echo "                              <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("event_invite", array("user_id" => $this->getAttribute($context["user"], "id", array()), "event_id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()))), "html", null, true);
                echo "\" class=\"btn btn-warning btn-xs\">
                              <li>";
                // line 61
                echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "username", array()), "html", null, true);
                echo "</li>
                                  ";
            }
            // line 63
            echo "
                                    ";
            // line 65
            echo "                                ";
            // line 66
            echo "                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 67
        echo "
                    </dd>
                </dl>
            </section>
        </article>
    </section>
";
        
        $__internal_457261ec64a7febd4e8fbe284d71eab80081167fb5d8d938bf700a6d2871710c->leave($__internal_457261ec64a7febd4e8fbe284d71eab80081167fb5d8d938bf700a6d2871710c_prof);

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
        return array (  187 => 67,  181 => 66,  179 => 65,  176 => 63,  171 => 61,  166 => 60,  163 => 59,  159 => 58,  155 => 56,  147 => 52,  139 => 48,  137 => 47,  134 => 46,  127 => 44,  119 => 42,  114 => 41,  108 => 38,  99 => 34,  93 => 31,  87 => 28,  81 => 25,  75 => 21,  69 => 19,  67 => 18,  62 => 16,  53 => 12,  45 => 7,  40 => 4,  34 => 3,  11 => 1,);
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
                        <div> Invite </div>

                        {% for user in users %}
                            {%  if user.id != app.user.id %}
                              <a href=\"{{ path('event_invite', {'user_id': user.id, 'event_id': entity.id}) }}\" class=\"btn btn-warning btn-xs\">
                              <li>{{ user.username }}</li>
                                  {% endif %}

                                    {#{{ dump(app.user.id) }}#}
                                {#{{ dump(user.id) }}#}
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
