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
        $__internal_5bbc920aad749ad76331e7412d939e8c03294509999ec0b5735c6b5d854b814d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5bbc920aad749ad76331e7412d939e8c03294509999ec0b5735c6b5d854b814d->enter($__internal_5bbc920aad749ad76331e7412d939e8c03294509999ec0b5735c6b5d854b814d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EventBundle:Event:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5bbc920aad749ad76331e7412d939e8c03294509999ec0b5735c6b5d854b814d->leave($__internal_5bbc920aad749ad76331e7412d939e8c03294509999ec0b5735c6b5d854b814d_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_6c9f6e2629c446e9c1a8b5ecf0496105b8b95aa6bb9b1c6205a6665e5fe459ff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6c9f6e2629c446e9c1a8b5ecf0496105b8b95aa6bb9b1c6205a6665e5fe459ff->enter($__internal_6c9f6e2629c446e9c1a8b5ecf0496105b8b95aa6bb9b1c6205a6665e5fe459ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        echo twig_escape_filter($this->env, $this->env->getExtension('Yoda\EventBundle\Twig\EventExtension')->calculateAgo($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "createdAt", array())), "html", null, true);
        echo " by ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "owner", array()), "username", array()), "html", null, true);
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
        
        $__internal_6c9f6e2629c446e9c1a8b5ecf0496105b8b95aa6bb9b1c6205a6665e5fe459ff->leave($__internal_6c9f6e2629c446e9c1a8b5ecf0496105b8b95aa6bb9b1c6205a6665e5fe459ff_prof);

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
        return array (  99 => 34,  93 => 31,  87 => 28,  81 => 25,  75 => 21,  69 => 19,  67 => 18,  62 => 16,  53 => 12,  45 => 7,  40 => 4,  34 => 3,  11 => 1,);
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
