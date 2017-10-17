<?php

/* EventBundle:Event:show.html.twig */
class __TwigTemplate_c372c0850e49e05b637e1d3256a3ce3a8c40718c9fd89c9d061bc27b0ff14b26 extends Twig_Template
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
        $__internal_63e3f73efcf51386ad610593517b0047c045b8852931d45e2048f0e6c6877120 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_63e3f73efcf51386ad610593517b0047c045b8852931d45e2048f0e6c6877120->enter($__internal_63e3f73efcf51386ad610593517b0047c045b8852931d45e2048f0e6c6877120_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EventBundle:Event:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_63e3f73efcf51386ad610593517b0047c045b8852931d45e2048f0e6c6877120->leave($__internal_63e3f73efcf51386ad610593517b0047c045b8852931d45e2048f0e6c6877120_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_adc7ec0f8d1a0e71996eed9be301de14365357d894f2223fe8df52f73060289f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_adc7ec0f8d1a0e71996eed9be301de14365357d894f2223fe8df52f73060289f->enter($__internal_adc7ec0f8d1a0e71996eed9be301de14365357d894f2223fe8df52f73060289f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
                    <a class=\"button\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("event_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()))), "html", null, true);
        echo "\">edit</a>
                </h1>

                <dl>
                    <dt>where:</dt>
                    <dd>";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "location", array()), "html", null, true);
        echo "</dd>

                    <dt>when:</dt>
                    <dd>";
        // line 25
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "time", array()), "g:ia / l M j, Y"), "html", null, true);
        echo "</dd>

                    <dt>what:</dt>
                    <dd>";
        // line 28
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "details", array()), "html", null, true);
        echo "</dd>

                    <dt>posted:</dt>
                    <dd>";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('Yoda\EventBundle\Twig\EventExtension')->calculateAgo($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "createdAt", array())), "html", null, true);
        echo "</dd>

                    <dt>who:</dt>
                    <dd>
                        <ul class=\"users\">
                            <li>nobody yet!</li>
                        </ul>
                    </dd>
                </dl>
            </section>
        </article>
    </section>
";
        
        $__internal_adc7ec0f8d1a0e71996eed9be301de14365357d894f2223fe8df52f73060289f->leave($__internal_adc7ec0f8d1a0e71996eed9be301de14365357d894f2223fe8df52f73060289f_prof);

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
        return array (  92 => 31,  86 => 28,  80 => 25,  74 => 22,  66 => 17,  62 => 16,  53 => 12,  45 => 7,  40 => 4,  34 => 3,  11 => 1,);
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
                    <a class=\"button\" href=\"{{ path('event_edit', {'id': entity.id}) }}\">edit</a>
                </h1>

                <dl>
                    <dt>where:</dt>
                    <dd>{{ entity.location }}</dd>

                    <dt>when:</dt>
                    <dd>{{ entity.time | date('g:ia / l M j, Y') }}</dd>

                    <dt>what:</dt>
                    <dd>{{ entity.details }}</dd>

                    <dt>posted:</dt>
                    <dd>{{ entity.createdAt|ago }}</dd>

                    <dt>who:</dt>
                    <dd>
                        <ul class=\"users\">
                            <li>nobody yet!</li>
                        </ul>
                    </dd>
                </dl>
            </section>
        </article>
    </section>
{% endblock %}
", "EventBundle:Event:show.html.twig", "/Users/christos.paraskeva/Documents/my_projects/symfony_tutorial_new/src/Yoda/EventBundle/Resources/views/Event/show.html.twig");
    }
}
