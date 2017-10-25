<?php

/* EventBundle:Event:upcoming.html.twig */
class __TwigTemplate_ac7988b87c4e68dff98861b4039954d5f894bf95fa23df21bfaa8cab93a32905 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("EventBundle::layout.html.twig", "EventBundle:Event:upcoming.html.twig", 1);
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "
    ";
        // line 5
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 6
            echo "        <a class=\"link\" href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("logout");
            echo "\">Logout</a>
        <h3> Welcome, ";
            // line 7
            echo twig_escape_filter($this->env, (isset($context["userName"]) ? $context["userName"] : null), "html", null, true);
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
        echo "\">Create new event</a>
            <a class=\"button\" href=\"";
        // line 16
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("event");
        echo "\">All Events</a>
        </header>

        ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : null));
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
                        <dd>Todo # of people</dd>

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
    }

    public function getTemplateName()
    {
        return "EventBundle:Event:upcoming.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  123 => 45,  110 => 40,  101 => 34,  95 => 31,  85 => 26,  76 => 22,  72 => 20,  68 => 19,  62 => 16,  58 => 15,  52 => 11,  46 => 9,  41 => 7,  36 => 6,  34 => 5,  31 => 4,  28 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "EventBundle:Event:upcoming.html.twig", "/Users/christos.paraskeva/Documents/my_projects/symfony_tutorial_new/src/Bundle/EventBundle/Resources/views/Event/upcoming.html.twig");
    }
}
