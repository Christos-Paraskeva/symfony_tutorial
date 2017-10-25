<?php

/* EventBundle:Event:new.html.twig */
class __TwigTemplate_051ffa49e18a3159d774b4ee515f83e90382343de153d5dbf6971bfd679bf7da extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("EventBundle::layout.html.twig", "EventBundle:Event:new.html.twig", 1);
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
        $__internal_6a511c87e054915d75f8cbf941443ad09e81cf765e86d3ceee55e5938260bfbb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6a511c87e054915d75f8cbf941443ad09e81cf765e86d3ceee55e5938260bfbb->enter($__internal_6a511c87e054915d75f8cbf941443ad09e81cf765e86d3ceee55e5938260bfbb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EventBundle:Event:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6a511c87e054915d75f8cbf941443ad09e81cf765e86d3ceee55e5938260bfbb->leave($__internal_6a511c87e054915d75f8cbf941443ad09e81cf765e86d3ceee55e5938260bfbb_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_8d938e98a83a2db8e1f2f4a6d92e292d141743f700bd8e1b614016244d5e41c3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8d938e98a83a2db8e1f2f4a6d92e292d141743f700bd8e1b614016244d5e41c3->enter($__internal_8d938e98a83a2db8e1f2f4a6d92e292d141743f700bd8e1b614016244d5e41c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <section class=\"event-show event-edit\">
        <header id=\"menu\">
            <a class=\"link\" href=\"";
        // line 6
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("event");
        echo "\">&larr; back to the event list</a>
        </header>

        <article>
            <header class=\"map-container\">
                <img src=\"http://maps.googleapis.com/maps/api/staticmap?center=Somewhere,%20US&zoom=15&size=300x300&maptype=roadmap&sensor=false\" />
            </header>
            <section>
                ";
        // line 15
        echo "                ";
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
                    ";
        // line 16
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
                    <h1>
                        ";
        // line 18
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "name", array()), 'errors');
        echo "
                        ";
        // line 19
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "name", array()), 'widget');
        echo "
                    </h1>

                    <dl>
                        <dt>where:</dt>
                        <dd>
                            ";
        // line 25
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "location", array()), 'errors');
        echo "
                            ";
        // line 26
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "location", array()), 'widget');
        echo "
                        </dd>

                        <dt>when:</dt>
                        <dd>
                            ";
        // line 31
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "time", array()), 'errors');
        echo "
                            ";
        // line 32
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "time", array()), 'widget');
        echo "
                        </dd>

                        <dt>what:</dt>
                        <dd>
                            ";
        // line 37
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "details", array()), 'errors');
        echo "
                            ";
        // line 38
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "details", array()), 'widget');
        echo "
                        </dd>
                    </dl>

                ";
        // line 43
        echo "                ";
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
            </section>
        </article>
    </section>
";
        
        $__internal_8d938e98a83a2db8e1f2f4a6d92e292d141743f700bd8e1b614016244d5e41c3->leave($__internal_8d938e98a83a2db8e1f2f4a6d92e292d141743f700bd8e1b614016244d5e41c3_prof);

    }

    public function getTemplateName()
    {
        return "EventBundle:Event:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  113 => 43,  106 => 38,  102 => 37,  94 => 32,  90 => 31,  82 => 26,  78 => 25,  69 => 19,  65 => 18,  60 => 16,  55 => 15,  44 => 6,  40 => 4,  34 => 3,  11 => 1,);
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
        </header>

        <article>
            <header class=\"map-container\">
                <img src=\"http://maps.googleapis.com/maps/api/staticmap?center=Somewhere,%20US&zoom=15&size=300x300&maptype=roadmap&sensor=false\" />
            </header>
            <section>
                {# the opening <form> tag #}
                {{ form_start(form) }}
                    {{ form_errors(form) }}
                    <h1>
                        {{ form_errors(form.name) }}
                        {{ form_widget(form.name) }}
                    </h1>

                    <dl>
                        <dt>where:</dt>
                        <dd>
                            {{ form_errors(form.location) }}
                            {{ form_widget(form.location) }}
                        </dd>

                        <dt>when:</dt>
                        <dd>
                            {{ form_errors(form.time) }}
                            {{ form_widget(form.time) }}
                        </dd>

                        <dt>what:</dt>
                        <dd>
                            {{ form_errors(form.details) }}
                            {{ form_widget(form.details) }}
                        </dd>
                    </dl>

                {# the closing </form> tag #}
                {{ form_end(form) }}
            </section>
        </article>
    </section>
{% endblock %}
", "EventBundle:Event:new.html.twig", "/Users/christos.paraskeva/Documents/my_projects/symfony_tutorial_new/src/Bundle/EventBundle/Resources/views/Event/new.html.twig");
    }
}
