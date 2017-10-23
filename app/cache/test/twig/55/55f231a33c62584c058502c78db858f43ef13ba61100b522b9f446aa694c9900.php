<?php

/* UserBundle:Register:register.html.twig */
class __TwigTemplate_e3f8f6a4cbea7f38f6dd1d4786c1a1bbadec5ce5e7c18ecc48ae6f9c51f73687 extends Twig_Template
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
        $__internal_7bbd274a41954d7523ef0f04c3bef2e6f3ab7a635b5e70158ea6e09280bd2c6b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7bbd274a41954d7523ef0f04c3bef2e6f3ab7a635b5e70158ea6e09280bd2c6b->enter($__internal_7bbd274a41954d7523ef0f04c3bef2e6f3ab7a635b5e70158ea6e09280bd2c6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Register:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7bbd274a41954d7523ef0f04c3bef2e6f3ab7a635b5e70158ea6e09280bd2c6b->leave($__internal_7bbd274a41954d7523ef0f04c3bef2e6f3ab7a635b5e70158ea6e09280bd2c6b_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_49fb04036143eb843f788de6fa63e8eefd6f2a8c6625d786fa5e7b0dfdaf51c1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_49fb04036143eb843f788de6fa63e8eefd6f2a8c6625d786fa5e7b0dfdaf51c1->enter($__internal_49fb04036143eb843f788de6fa63e8eefd6f2a8c6625d786fa5e7b0dfdaf51c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "

    <link rel=\"stylesheet\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/user/css/login.css"), "html", null, true);
        echo "\" />
";
        
        $__internal_49fb04036143eb843f788de6fa63e8eefd6f2a8c6625d786fa5e7b0dfdaf51c1->leave($__internal_49fb04036143eb843f788de6fa63e8eefd6f2a8c6625d786fa5e7b0dfdaf51c1_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_f6a42cac01a84b2cdd2cfca660d6125df1c9490bfff00c7da9bd3353db237aa9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f6a42cac01a84b2cdd2cfca660d6125df1c9490bfff00c7da9bd3353db237aa9->enter($__internal_f6a42cac01a84b2cdd2cfca660d6125df1c9490bfff00c7da9bd3353db237aa9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_f6a42cac01a84b2cdd2cfca660d6125df1c9490bfff00c7da9bd3353db237aa9->leave($__internal_f6a42cac01a84b2cdd2cfca660d6125df1c9490bfff00c7da9bd3353db237aa9_prof);

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
