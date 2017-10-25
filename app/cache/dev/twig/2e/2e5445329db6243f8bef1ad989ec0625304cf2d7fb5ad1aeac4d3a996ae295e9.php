<?php

/* EventBundle:Event:index.html.twig */
class __TwigTemplate_55f258ec46e37a2981f5392c583ac289c65fab6fe9919995355526fecacf0ef0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("EventBundle::layout.html.twig", "EventBundle:Event:index.html.twig", 1);
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
        $__internal_8bdf4a870977439793311e5d05ba2f4e1fb34a5d544a06953221b55b3434d720 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8bdf4a870977439793311e5d05ba2f4e1fb34a5d544a06953221b55b3434d720->enter($__internal_8bdf4a870977439793311e5d05ba2f4e1fb34a5d544a06953221b55b3434d720_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EventBundle:Event:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8bdf4a870977439793311e5d05ba2f4e1fb34a5d544a06953221b55b3434d720->leave($__internal_8bdf4a870977439793311e5d05ba2f4e1fb34a5d544a06953221b55b3434d720_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_8b4ead096c6ded433eec4be1fe11ede9de6990c43b82e8df812e68db7d2a2168 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8b4ead096c6ded433eec4be1fe11ede9de6990c43b82e8df812e68db7d2a2168->enter($__internal_8b4ead096c6ded433eec4be1fe11ede9de6990c43b82e8df812e68db7d2a2168_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
    ";
        // line 5
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 6
            echo "      <a class=\"link\" href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("logout");
            echo "\">Logout</a>
        <h3> Welcome, ";
            // line 7
            echo twig_escape_filter($this->env, (isset($context["userName"]) ? $context["userName"] : $this->getContext($context, "userName")), "html", null, true);
            echo " </h3>
    ";
        } else {
            // line 9
            echo "        <a class=\"link\" href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("login_form");
            echo "\">Login</a>
    ";
        }
        // line 11
        echo "

    <section class=\"events\">
        <header id=\"menu\">
            <a class=\"button\" href=\"";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("event_new");
        echo "\">Create new event
            <a class=\"button\" href=\"";
        // line 16
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("event_upcoming");
        echo "\">Upcoming Events</a>
        </header>

        ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 20
            echo "            <article>
                <header class=\"map-container\">
                    <img src=\"http://maps.googleapis.com/maps/api/staticmap?center=";
            // line 22
            echo twig_escape_filter($this->env, twig_urlencode_filter($this->getAttribute($context["entity"], "location", array())), "html", null, true);
            echo "&markers=color:red%7Ccolor:red%7C";
            echo twig_escape_filter($this->env, twig_urlencode_filter($this->getAttribute($context["entity"], "location", array())), "html", null, true);
            echo "&zoom=14&size=150x150&maptype=roadmap&sensor=false\" />
                </header>
                <section>
                    <h3>
                        <a href=\"";
            // line 26
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("event_show", array("slug" => $this->getAttribute($context["entity"], "slug", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "name", array()), "html", null, true);
            echo "</a>
                    </h3>

                    <dl>
                        <dt>where:</dt>
                        <dd>";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "location", array()), "html", null, true);
            echo "</dd>

                        <dt>when:</dt>
                        <dd>";
            // line 34
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["entity"], "time", array()), "g:ia / l M j, Y"), "html", null, true);
            echo "</dd>

                        <dt>who:</dt>
                        <dd>";
            // line 37
            echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute($context["entity"], "attendees", array())), "html", null, true);
            echo " attending!</dd>

                        <dt>posted:</dt>
                        <dd>";
            // line 40
            echo twig_escape_filter($this->env, $this->env->getExtension('Bundle\EventBundle\Twig\EventExtension')->calculateAgo($this->getAttribute($context["entity"], "createdAt", array())), "html", null, true);
            echo " by ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["entity"], "owner", array()), "username", array()), "html", null, true);
            echo "</dd>
                    </dl>
                </section>
            </article>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 45
        echo "    </section>
";
        
        $__internal_8b4ead096c6ded433eec4be1fe11ede9de6990c43b82e8df812e68db7d2a2168->leave($__internal_8b4ead096c6ded433eec4be1fe11ede9de6990c43b82e8df812e68db7d2a2168_prof);

    }

    public function getTemplateName()
    {
        return "EventBundle:Event:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  135 => 45,  122 => 40,  116 => 37,  110 => 34,  104 => 31,  94 => 26,  85 => 22,  81 => 20,  77 => 19,  71 => 16,  67 => 15,  61 => 11,  55 => 9,  50 => 7,  45 => 6,  43 => 5,  40 => 4,  34 => 3,  11 => 1,);
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

    {%  if is_granted('IS_AUTHENTICATED_REMEMBERED') %}
      <a class=\"link\" href=\"{{ path('logout') }}\">Logout</a>
        <h3> Welcome, {{ userName }} </h3>
    {% else %}
        <a class=\"link\" href=\"{{ path('login_form') }}\">Login</a>
    {% endif %}


    <section class=\"events\">
        <header id=\"menu\">
            <a class=\"button\" href=\"{{ path('event_new') }}\">Create new event
            <a class=\"button\" href=\"{{ path('event_upcoming') }}\">Upcoming Events</a>
        </header>

        {% for entity in entities %}
            <article>
                <header class=\"map-container\">
                    <img src=\"http://maps.googleapis.com/maps/api/staticmap?center={{ entity.location | url_encode }}&markers=color:red%7Ccolor:red%7C{{ entity.location | url_encode }}&zoom=14&size=150x150&maptype=roadmap&sensor=false\" />
                </header>
                <section>
                    <h3>
                        <a href=\"{{ path('event_show', {'slug': entity.slug}) }}\">{{ entity.name }}</a>
                    </h3>

                    <dl>
                        <dt>where:</dt>
                        <dd>{{ entity.location }}</dd>

                        <dt>when:</dt>
                        <dd>{{ entity.time | date('g:ia / l M j, Y') }}</dd>

                        <dt>who:</dt>
                        <dd>{{ entity.attendees|length }} attending!</dd>

                        <dt>posted:</dt>
                        <dd>{{ entity.createdAt|ago }} by {{ entity.owner.username }}</dd>
                    </dl>
                </section>
            </article>
        {% endfor %}
    </section>
{% endblock %}
", "EventBundle:Event:index.html.twig", "/Users/christos.paraskeva/Documents/my_projects/symfony_tutorial_new/src/Bundle/EventBundle/Resources/views/Event/index.html.twig");
    }
}
