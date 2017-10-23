<?php

/* ::base.html.twig */
class __TwigTemplate_abf7085a6d89bdec866cfbccd1adba6e96081d9da1aaf1f4f186f9ca9072e842 extends Twig_Template
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
        $__internal_123ba4b04724248cddf9494df3f647f12e0579f96e55be35396ab4e720077d62 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_123ba4b04724248cddf9494df3f647f12e0579f96e55be35396ab4e720077d62->enter($__internal_123ba4b04724248cddf9494df3f647f12e0579f96e55be35396ab4e720077d62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_123ba4b04724248cddf9494df3f647f12e0579f96e55be35396ab4e720077d62->leave($__internal_123ba4b04724248cddf9494df3f647f12e0579f96e55be35396ab4e720077d62_prof);

    }

    // line 13
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_b826c262cf42f79a1abaf319621f164109491f1eb07470ba1cb50d37f68efe19 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b826c262cf42f79a1abaf319621f164109491f1eb07470ba1cb50d37f68efe19->enter($__internal_b826c262cf42f79a1abaf319621f164109491f1eb07470ba1cb50d37f68efe19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_b826c262cf42f79a1abaf319621f164109491f1eb07470ba1cb50d37f68efe19->leave($__internal_b826c262cf42f79a1abaf319621f164109491f1eb07470ba1cb50d37f68efe19_prof);

    }

    // line 34
    public function block_body($context, array $blocks = array())
    {
        $__internal_29e9c844d90d4255b7b9506582badb09f9a279d21a14aa1a3274d96e93a4ead9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_29e9c844d90d4255b7b9506582badb09f9a279d21a14aa1a3274d96e93a4ead9->enter($__internal_29e9c844d90d4255b7b9506582badb09f9a279d21a14aa1a3274d96e93a4ead9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_29e9c844d90d4255b7b9506582badb09f9a279d21a14aa1a3274d96e93a4ead9->leave($__internal_29e9c844d90d4255b7b9506582badb09f9a279d21a14aa1a3274d96e93a4ead9_prof);

    }

    // line 35
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_bbc65f78f1f2003a05b382045bec82af33310107aceedaae6a1d4c6f99ba226f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bbc65f78f1f2003a05b382045bec82af33310107aceedaae6a1d4c6f99ba226f->enter($__internal_bbc65f78f1f2003a05b382045bec82af33310107aceedaae6a1d4c6f99ba226f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_bbc65f78f1f2003a05b382045bec82af33310107aceedaae6a1d4c6f99ba226f->leave($__internal_bbc65f78f1f2003a05b382045bec82af33310107aceedaae6a1d4c6f99ba226f_prof);

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
