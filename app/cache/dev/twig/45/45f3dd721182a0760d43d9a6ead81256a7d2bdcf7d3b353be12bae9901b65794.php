<?php

/* EventBundle:Event:index.html.twig */
class __TwigTemplate_6462cbb5df6e8a06207c9556f6dc59fb4d6857c877bfb4dd5f5e3df136c7804c extends Twig_Template
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
        $__internal_7c641885e2f033ea91e67f1ef7de4a9cf452c86881412597cc9a9b37b9df534f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7c641885e2f033ea91e67f1ef7de4a9cf452c86881412597cc9a9b37b9df534f->enter($__internal_7c641885e2f033ea91e67f1ef7de4a9cf452c86881412597cc9a9b37b9df534f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EventBundle:Event:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7c641885e2f033ea91e67f1ef7de4a9cf452c86881412597cc9a9b37b9df534f->leave($__internal_7c641885e2f033ea91e67f1ef7de4a9cf452c86881412597cc9a9b37b9df534f_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_a19116e6c4e96445faef1e9eb0144c035385874ae5045c03b4495d908791519d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a19116e6c4e96445faef1e9eb0144c035385874ae5045c03b4495d908791519d->enter($__internal_a19116e6c4e96445faef1e9eb0144c035385874ae5045c03b4495d908791519d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
    <section class=\"events\">
        <header id=\"menu\">
            <a class=\"button\" href=\"";
        // line 7
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("event_new");
        echo "\">Create new event</a>
        </header>

        ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 11
            echo "            <article>
                <header class=\"map-container\">
                    <img src=\"http://maps.googleapis.com/maps/api/staticmap?center=";
            // line 13
            echo twig_escape_filter($this->env, twig_urlencode_filter($this->getAttribute($context["entity"], "location", array())), "html", null, true);
            echo "&markers=color:red%7Ccolor:red%7C";
            echo twig_escape_filter($this->env, twig_urlencode_filter($this->getAttribute($context["entity"], "location", array())), "html", null, true);
            echo "&zoom=14&size=150x150&maptype=roadmap&sensor=false\" />
                </header>
                <section>
                    <h3>
                        <a href=\"";
            // line 17
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("event_show", array("slug" => $this->getAttribute($context["entity"], "slug", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "name", array()), "html", null, true);
            echo "</a>
                    </h3>

                    <dl>
                        <dt>where:</dt>
                        <dd>";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "location", array()), "html", null, true);
            echo "</dd>

                        <dt>when:</dt>
                        <dd>";
            // line 25
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["entity"], "time", array()), "g:ia / l M j, Y"), "html", null, true);
            echo "</dd>

                        <dt>who:</dt>
                        <dd>Todo # of people</dd>
                    </dl>
                </section>
            </article>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "    </section>
";
        
        $__internal_a19116e6c4e96445faef1e9eb0144c035385874ae5045c03b4495d908791519d->leave($__internal_a19116e6c4e96445faef1e9eb0144c035385874ae5045c03b4495d908791519d_prof);

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
        return array (  98 => 33,  84 => 25,  78 => 22,  68 => 17,  59 => 13,  55 => 11,  51 => 10,  45 => 7,  40 => 4,  34 => 3,  11 => 1,);
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

    <section class=\"events\">
        <header id=\"menu\">
            <a class=\"button\" href=\"{{ path('event_new') }}\">Create new event</a>
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
                        <dd>Todo # of people</dd>
                    </dl>
                </section>
            </article>
        {% endfor %}
    </section>
{% endblock %}
", "EventBundle:Event:index.html.twig", "/Users/christos.paraskeva/Documents/my_projects/symfony_tutorial_new/src/Yoda/EventBundle/Resources/views/Event/index.html.twig");
    }
}
