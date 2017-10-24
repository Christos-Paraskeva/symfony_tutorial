<?php

/* EventBundle:Event:edit.html.twig */
class __TwigTemplate_56d51cab365e29dbb2585ba7f0d36eefee205ba8c69b9957828b7e1f74aa0b5c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("EventBundle::layout.html.twig", "EventBundle:Event:edit.html.twig", 1);
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
        $__internal_5809b77a696f4154f298f5841df7be7f33dc0dfd92d07f1964bf5d7d08d26a1a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5809b77a696f4154f298f5841df7be7f33dc0dfd92d07f1964bf5d7d08d26a1a->enter($__internal_5809b77a696f4154f298f5841df7be7f33dc0dfd92d07f1964bf5d7d08d26a1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EventBundle:Event:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5809b77a696f4154f298f5841df7be7f33dc0dfd92d07f1964bf5d7d08d26a1a->leave($__internal_5809b77a696f4154f298f5841df7be7f33dc0dfd92d07f1964bf5d7d08d26a1a_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_82f9f56c41ced49879d097414fe6d8e9003dd7140103fc8352386a6399df2139 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_82f9f56c41ced49879d097414fe6d8e9003dd7140103fc8352386a6399df2139->enter($__internal_82f9f56c41ced49879d097414fe6d8e9003dd7140103fc8352386a6399df2139_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <section class=\"event-show event-edit\">
        <header id=\"menu\">
            <a class=\"link\" href=\"";
        // line 6
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("event");
        echo "\">&larr; back to the event list</a>
            <a class=\"link\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("event_show", array("slug" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "slug", array()))), "html", null, true);
        echo "\">show event</a>
        </header>

        <article>
            <header class=\"map-container\">

            </header>
            <section>
                ";
        // line 16
        echo "                ";
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_start');
        echo "
                    ";
        // line 17
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'errors');
        echo "
                    <h1>
                        ";
        // line 19
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "name", array()), 'errors');
        echo "
                        ";
        // line 20
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "name", array()), 'widget');
        echo "
                    </h1>

                    <dl>
                        <dt>where:</dt>
                        <dd>
                            ";
        // line 26
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "location", array()), 'errors');
        echo "
                            ";
        // line 27
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "location", array()), 'widget');
        echo "
                        </dd>

                        <dt>when:</dt>
                        <dd>
                            ";
        // line 32
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "time", array()), 'errors');
        echo "
                            ";
        // line 33
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "time", array()), 'widget');
        echo "
                        </dd>

                        <dt>what:</dt>
                        <dd>
                            ";
        // line 38
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "details", array()), 'errors');
        echo "
                            ";
        // line 39
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "details", array()), 'widget');
        echo "
                        </dd>
                    </dl>

                ";
        // line 44
        echo "                ";
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_end');
        echo "

                ";
        // line 46
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form');
        echo "
            </section>
        </article>
    </section>
";
        
        $__internal_82f9f56c41ced49879d097414fe6d8e9003dd7140103fc8352386a6399df2139->leave($__internal_82f9f56c41ced49879d097414fe6d8e9003dd7140103fc8352386a6399df2139_prof);

    }

    public function getTemplateName()
    {
        return "EventBundle:Event:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  123 => 46,  117 => 44,  110 => 39,  106 => 38,  98 => 33,  94 => 32,  86 => 27,  82 => 26,  73 => 20,  69 => 19,  64 => 17,  59 => 16,  48 => 7,  44 => 6,  40 => 4,  34 => 3,  11 => 1,);
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
    <section class=\"event-show event-edit\">
        <header id=\"menu\">
            <a class=\"link\" href=\"{{ path('event') }}\">&larr; back to the event list</a>
            <a class=\"link\" href=\"{{ path('event_show', {'slug': entity.slug}) }}\">show event</a>
        </header>

        <article>
            <header class=\"map-container\">

            </header>
            <section>
                {# the opening <form> tag #}
                {{ form_start(edit_form) }}
                    {{ form_errors(edit_form) }}
                    <h1>
                        {{ form_errors(edit_form.name) }}
                        {{ form_widget(edit_form.name) }}
                    </h1>

                    <dl>
                        <dt>where:</dt>
                        <dd>
                            {{ form_errors(edit_form.location) }}
                            {{ form_widget(edit_form.location) }}
                        </dd>

                        <dt>when:</dt>
                        <dd>
                            {{ form_errors(edit_form.time) }}
                            {{ form_widget(edit_form.time) }}
                        </dd>

                        <dt>what:</dt>
                        <dd>
                            {{ form_errors(edit_form.details) }}
                            {{ form_widget(edit_form.details) }}
                        </dd>
                    </dl>

                {# the closing </form> tag #}
                {{ form_end(edit_form) }}

                {{ form(delete_form) }}
            </section>
        </article>
    </section>
{% endblock %}
", "EventBundle:Event:edit.html.twig", "/Users/christos.paraskeva/Documents/my_projects/symfony_tutorial_new/src/Yoda/EventBundle/Resources/views/Event/edit.html.twig");
    }
}
