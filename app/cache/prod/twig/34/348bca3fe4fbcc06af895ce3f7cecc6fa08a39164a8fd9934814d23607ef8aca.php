<?php

/* EventBundle:Event:_upcomingEvents.html.twig */
class __TwigTemplate_180b21b617585fb43686717c4ba870f78389859e84b1861f154e75a9ce3ab911 extends Twig_Template
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
        // line 2
        echo "
";
        // line 4
        echo "
";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["events"]) ? $context["events"] : null));
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
            echo twig_escape_filter($this->env, $this->env->getExtension('Bundle\EventBundle\Twig\EventExtension')->calculateAgo($this->getAttribute($context["event"], "createdAt", array())), "html", null, true);
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
        return array (  75 => 28,  64 => 23,  58 => 20,  52 => 17,  42 => 12,  33 => 8,  29 => 6,  25 => 5,  22 => 4,  19 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "EventBundle:Event:_upcomingEvents.html.twig", "/Users/christos.paraskeva/Documents/my_projects/symfony_tutorial_new/src/Bundle/EventBundle/Resources/views/Event/_upcomingEvents.html.twig");
    }
}
