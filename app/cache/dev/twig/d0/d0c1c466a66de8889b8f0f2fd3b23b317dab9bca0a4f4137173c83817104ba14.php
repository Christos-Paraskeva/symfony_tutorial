<?php

/* ::base.html.twig */
class __TwigTemplate_22d8e81988ce7d984311415d38e1580069672d0aac76821644861334a9b36528 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c9fff8aee053718783c233b0a330430b146969b1a975380102fb3be416e3fccf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c9fff8aee053718783c233b0a330430b146969b1a975380102fb3be416e3fccf->enter($__internal_c9fff8aee053718783c233b0a330430b146969b1a975380102fb3be416e3fccf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 6
        if (        $this->renderBlock("title", $context, $blocks)) {
            // line 7
            $this->displayBlock("title", $context, $blocks);
            echo " | Starwars Events";
        } else {
            // line 9
            echo "Events from a Galaxy, far far away";
        }
        // line 11
        echo "</title>

        ";
        // line 13
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 23
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 26
        if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashBag", array()), "has", array(0 => "success"), "method")) {
            // line 27
            echo "            <div class=\"alert alert-success\">
                ";
            // line 28
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashBag", array()), "get", array(0 => "success"), "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["msg"]) {
                // line 29
                echo "                    ";
                echo twig_escape_filter($this->env, $context["msg"], "html", null, true);
                echo "
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['msg'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 31
            echo "            </div>
        ";
        }
        // line 33
        echo "
        ";
        // line 34
        $this->displayBlock('body', $context, $blocks);
        // line 35
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 36
        echo "    </body>
</html>
";
        
        $__internal_c9fff8aee053718783c233b0a330430b146969b1a975380102fb3be416e3fccf->leave($__internal_c9fff8aee053718783c233b0a330430b146969b1a975380102fb3be416e3fccf_prof);

    }

    // line 13
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_d276710b4dab076b97a65a173499024f4c8df4d308c4dae2175a34d4d67f33f9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d276710b4dab076b97a65a173499024f4c8df4d308c4dae2175a34d4d67f33f9->enter($__internal_d276710b4dab076b97a65a173499024f4c8df4d308c4dae2175a34d4d67f33f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 14
        echo "            ";
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "8e49901_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_8e49901_0") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/css/8e49901_event_1.css");
            // line 20
            echo "                <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
            ";
            // asset "8e49901_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_8e49901_1") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/css/8e49901_events_2.css");
            echo "                <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
            ";
            // asset "8e49901_2"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_8e49901_2") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/css/8e49901_main_3.css");
            echo "                <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
            ";
        } else {
            // asset "8e49901"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_8e49901") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/css/8e49901.css");
            echo "                <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
            ";
        }
        unset($context["asset_url"]);
        // line 22
        echo "        ";
        
        $__internal_d276710b4dab076b97a65a173499024f4c8df4d308c4dae2175a34d4d67f33f9->leave($__internal_d276710b4dab076b97a65a173499024f4c8df4d308c4dae2175a34d4d67f33f9_prof);

    }

    // line 34
    public function block_body($context, array $blocks = array())
    {
        $__internal_9a248c09e32224ee9a09751e18428d13f48eef33f27fa4d3acd0d2b31fa09ece = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9a248c09e32224ee9a09751e18428d13f48eef33f27fa4d3acd0d2b31fa09ece->enter($__internal_9a248c09e32224ee9a09751e18428d13f48eef33f27fa4d3acd0d2b31fa09ece_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_9a248c09e32224ee9a09751e18428d13f48eef33f27fa4d3acd0d2b31fa09ece->leave($__internal_9a248c09e32224ee9a09751e18428d13f48eef33f27fa4d3acd0d2b31fa09ece_prof);

    }

    // line 35
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_7859494e87bb714804135ce4fa6d1a3685c587c47fb707d60e0dfdd2a3abf5d8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7859494e87bb714804135ce4fa6d1a3685c587c47fb707d60e0dfdd2a3abf5d8->enter($__internal_7859494e87bb714804135ce4fa6d1a3685c587c47fb707d60e0dfdd2a3abf5d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_7859494e87bb714804135ce4fa6d1a3685c587c47fb707d60e0dfdd2a3abf5d8->leave($__internal_7859494e87bb714804135ce4fa6d1a3685c587c47fb707d60e0dfdd2a3abf5d8_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  147 => 35,  136 => 34,  129 => 22,  103 => 20,  98 => 14,  92 => 13,  83 => 36,  80 => 35,  78 => 34,  75 => 33,  71 => 31,  62 => 29,  58 => 28,  55 => 27,  53 => 26,  46 => 23,  44 => 13,  40 => 11,  37 => 9,  33 => 7,  31 => 6,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>
            {%- if block('title') -%}
                {{ block('title') }} | Starwars Events
            {%- else -%}
                Events from a Galaxy, far far away
            {%- endif -%}
        </title>

        {% block stylesheets %}
            {% stylesheets
                'bundles/event/css/event.css'
                'bundles/event/css/events.css'
                'bundles/event/css/main.css'
                filter='cssrewrite'
            %}
                <link rel=\"stylesheet\" href=\"{{ asset_url }}\" />
            {% endstylesheets %}
        {% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% if app.session.flashBag.has('success') %}
            <div class=\"alert alert-success\">
                {% for msg in app.session.flashBag.get('success') %}
                    {{ msg }}
                {% endfor %}
            </div>
        {% endif %}

        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "::base.html.twig", "/Users/christos.paraskeva/Documents/my_projects/symfony_tutorial_new/app/Resources/views/base.html.twig");
    }
}
