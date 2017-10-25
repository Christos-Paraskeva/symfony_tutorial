<?php

/* EventBundle:Default:index.html.twig */
class __TwigTemplate_0b7049c6e77b58049efb32a380270163b03cd6901c78d3e4906cd07a1e44d9eb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "EventBundle:Default:index.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "Some Twiggy Goodness";
    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        // line 7
        echo "
";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["count"]) ? $context["count"] : null)));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 9
            echo "    Hello <strong>";
            echo twig_escape_filter($this->env, twig_upper_filter($this->env, (isset($context["name"]) ? $context["name"] : null)), "html", null, true);
            echo "</strong> # ";
            echo twig_escape_filter($this->env, $context["i"], "html", null, true);
            echo "!<br/>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 11
        echo "
    ";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["event"]) ? $context["event"] : null), "name", array()), "html", null, true);
        echo "<br/>
    ";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["event"]) ? $context["event"] : null), "location", array()), "html", null, true);
        echo "<br/>

";
    }

    public function getTemplateName()
    {
        return "EventBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  63 => 13,  59 => 12,  56 => 11,  45 => 9,  41 => 8,  38 => 7,  35 => 5,  29 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "EventBundle:Default:index.html.twig", "/Users/christos.paraskeva/Documents/my_projects/symfony_tutorial_new/src/Bundle/EventBundle/Resources/views/Default/index.html.twig");
    }
}
