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
        $__internal_3d5bd516f4738da2bf8f8849c7ee9e5db344cf2271e7ba7451f37fa95d45f965 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3d5bd516f4738da2bf8f8849c7ee9e5db344cf2271e7ba7451f37fa95d45f965->enter($__internal_3d5bd516f4738da2bf8f8849c7ee9e5db344cf2271e7ba7451f37fa95d45f965_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        $this->displayBlock('body', $context, $blocks);
        // line 27
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 28
        echo "    </body>
</html>
";
        
        $__internal_3d5bd516f4738da2bf8f8849c7ee9e5db344cf2271e7ba7451f37fa95d45f965->leave($__internal_3d5bd516f4738da2bf8f8849c7ee9e5db344cf2271e7ba7451f37fa95d45f965_prof);

    }

    // line 13
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_ff27149c07a6035fe9f96a2c5176831953a2e761193383c042c20c04d50f0e94 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ff27149c07a6035fe9f96a2c5176831953a2e761193383c042c20c04d50f0e94->enter($__internal_ff27149c07a6035fe9f96a2c5176831953a2e761193383c042c20c04d50f0e94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_ff27149c07a6035fe9f96a2c5176831953a2e761193383c042c20c04d50f0e94->leave($__internal_ff27149c07a6035fe9f96a2c5176831953a2e761193383c042c20c04d50f0e94_prof);

    }

    // line 26
    public function block_body($context, array $blocks = array())
    {
        $__internal_543bc321b7943fc2d9465f13ce39bf05eec2ce6d12da96bedc0b258439fdb84e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_543bc321b7943fc2d9465f13ce39bf05eec2ce6d12da96bedc0b258439fdb84e->enter($__internal_543bc321b7943fc2d9465f13ce39bf05eec2ce6d12da96bedc0b258439fdb84e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_543bc321b7943fc2d9465f13ce39bf05eec2ce6d12da96bedc0b258439fdb84e->leave($__internal_543bc321b7943fc2d9465f13ce39bf05eec2ce6d12da96bedc0b258439fdb84e_prof);

    }

    // line 27
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_e9827bb43f2a3ba4983b4fa93077afa9a84bb27823578d53b8237aa43bf797b9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e9827bb43f2a3ba4983b4fa93077afa9a84bb27823578d53b8237aa43bf797b9->enter($__internal_e9827bb43f2a3ba4983b4fa93077afa9a84bb27823578d53b8237aa43bf797b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_e9827bb43f2a3ba4983b4fa93077afa9a84bb27823578d53b8237aa43bf797b9->leave($__internal_e9827bb43f2a3ba4983b4fa93077afa9a84bb27823578d53b8237aa43bf797b9_prof);

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
        return array (  122 => 27,  111 => 26,  104 => 22,  78 => 20,  73 => 14,  67 => 13,  58 => 28,  55 => 27,  53 => 26,  46 => 23,  44 => 13,  40 => 11,  37 => 9,  33 => 7,  31 => 6,  25 => 1,);
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
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "::base.html.twig", "/Users/christos.paraskeva/Documents/my_projects/symfony_tutorial_new/app/Resources/views/base.html.twig");
    }
}
