<?php

/* UserBundle:Register:register.html.twig */
class __TwigTemplate_caccd89dc29ceb4252c12f27136233408d8633ea016f16d7578f8330e3b80f6c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "UserBundle:Register:register.html.twig", 1);
        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b6e85b04051530a42ba823f073015f2260f88a0c8fbdff063cc8c9b80dde78d5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b6e85b04051530a42ba823f073015f2260f88a0c8fbdff063cc8c9b80dde78d5->enter($__internal_b6e85b04051530a42ba823f073015f2260f88a0c8fbdff063cc8c9b80dde78d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Register:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b6e85b04051530a42ba823f073015f2260f88a0c8fbdff063cc8c9b80dde78d5->leave($__internal_b6e85b04051530a42ba823f073015f2260f88a0c8fbdff063cc8c9b80dde78d5_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_84fc4c8632d1019c3f4f893a8243952077d70ffee16208a50035ca74cfd6c8a2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_84fc4c8632d1019c3f4f893a8243952077d70ffee16208a50035ca74cfd6c8a2->enter($__internal_84fc4c8632d1019c3f4f893a8243952077d70ffee16208a50035ca74cfd6c8a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "

    <link rel=\"stylesheet\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/user/css/login.css"), "html", null, true);
        echo "\" />
";
        
        $__internal_84fc4c8632d1019c3f4f893a8243952077d70ffee16208a50035ca74cfd6c8a2->leave($__internal_84fc4c8632d1019c3f4f893a8243952077d70ffee16208a50035ca74cfd6c8a2_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_734c5a66a7ed065f11fbc33fc7c17f247cf7cfe915d0ac72028fdcc617344994 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_734c5a66a7ed065f11fbc33fc7c17f247cf7cfe915d0ac72028fdcc617344994->enter($__internal_734c5a66a7ed065f11fbc33fc7c17f247cf7cfe915d0ac72028fdcc617344994_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "    <section class=\"login\">
        <article>
            <h1>Register</h1>

            <form action=\"";
        // line 14
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_register");
        echo "\" method=\"POST\" novalidate=\"novalidate\">
                ";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
                ";
        // line 16
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "username", array()), 'row');
        echo "
                ";
        // line 17
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'row');
        echo "
                ";
        // line 18
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword", array()), "first", array()), 'row', array("label" => "Password"));
        // line 20
        echo "
                ";
        // line 21
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword", array()), "second", array()), 'row', array("label" => "Confirm Password"));
        // line 23
        echo "

                ";
        // line 25
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "

                <input type=\"submit\" class=\"btn btn-primary pull-right\" value=\"Register!\" />
            </form>
        </article>

    </section>

";
        
        $__internal_734c5a66a7ed065f11fbc33fc7c17f247cf7cfe915d0ac72028fdcc617344994->leave($__internal_734c5a66a7ed065f11fbc33fc7c17f247cf7cfe915d0ac72028fdcc617344994_prof);

    }

    public function getTemplateName()
    {
        return "UserBundle:Register:register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  95 => 25,  91 => 23,  89 => 21,  86 => 20,  84 => 18,  80 => 17,  76 => 16,  72 => 15,  68 => 14,  62 => 10,  56 => 9,  47 => 6,  41 => 4,  35 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '::base.html.twig' %}

{% block stylesheets %}
    {{ parent() }}

    <link rel=\"stylesheet\" href=\"{{ asset('bundles/user/css/login.css') }}\" />
{% endblock %}

{% block body %}
    <section class=\"login\">
        <article>
            <h1>Register</h1>

            <form action=\"{{ path('user_register') }}\" method=\"POST\" novalidate=\"novalidate\">
                {{ form_errors(form) }}
                {{ form_row(form.username) }}
                {{ form_row(form.email) }}
                {{ form_row(form.plainPassword.first, {
                    label: 'Password'
                }) }}
                {{ form_row(form.plainPassword.second, {
                    label: 'Confirm Password'
                }) }}

                {{ form_rest(form) }}

                <input type=\"submit\" class=\"btn btn-primary pull-right\" value=\"Register!\" />
            </form>
        </article>

    </section>

{% endblock %}", "UserBundle:Register:register.html.twig", "/Users/christos.paraskeva/Documents/my_projects/symfony_tutorial_new/src/Yoda/UserBundle/Resources/views/Register/register.html.twig");
    }
}
