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
        $__internal_e8328fb05e32ddccafd61b5d421b4d05d3ea210b5fe13ebaa6fe41a6e9578ea8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e8328fb05e32ddccafd61b5d421b4d05d3ea210b5fe13ebaa6fe41a6e9578ea8->enter($__internal_e8328fb05e32ddccafd61b5d421b4d05d3ea210b5fe13ebaa6fe41a6e9578ea8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Register:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e8328fb05e32ddccafd61b5d421b4d05d3ea210b5fe13ebaa6fe41a6e9578ea8->leave($__internal_e8328fb05e32ddccafd61b5d421b4d05d3ea210b5fe13ebaa6fe41a6e9578ea8_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_7c04382b2c798bf553306a7ec7ce7fda3a77826d8bb5071f8bdbf51b531b9aa8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7c04382b2c798bf553306a7ec7ce7fda3a77826d8bb5071f8bdbf51b531b9aa8->enter($__internal_7c04382b2c798bf553306a7ec7ce7fda3a77826d8bb5071f8bdbf51b531b9aa8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "

    <link rel=\"stylesheet\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/user/css/login.css"), "html", null, true);
        echo "\" />
";
        
        $__internal_7c04382b2c798bf553306a7ec7ce7fda3a77826d8bb5071f8bdbf51b531b9aa8->leave($__internal_7c04382b2c798bf553306a7ec7ce7fda3a77826d8bb5071f8bdbf51b531b9aa8_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_0a4d952b11bc6261999326aa7794b2f5555f08a1441130237a14e4a90d1e9aef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0a4d952b11bc6261999326aa7794b2f5555f08a1441130237a14e4a90d1e9aef->enter($__internal_0a4d952b11bc6261999326aa7794b2f5555f08a1441130237a14e4a90d1e9aef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "    <section class=\"login\">
        <article>
            <h1>Register</h1>

            <form action=\"";
        // line 14
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_register");
        echo "\" method=\"POST\">
                ";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "

                ";
        // line 17
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "username", array()), 'row');
        echo "
                ";
        // line 18
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'row');
        echo "
                ";
        // line 19
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "password", array()), "first", array()), 'row', array("label" => "Password"));
        // line 21
        echo "
                ";
        // line 22
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "password", array()), "second", array()), 'row', array("label" => "Confirm Password"));
        // line 24
        echo "

                ";
        // line 26
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "

                <input type=\"submit\" class=\"btn btn-primary pull-right\" value=\"Register!\" />
            </form>
        </article>

    </section>

";
        
        $__internal_0a4d952b11bc6261999326aa7794b2f5555f08a1441130237a14e4a90d1e9aef->leave($__internal_0a4d952b11bc6261999326aa7794b2f5555f08a1441130237a14e4a90d1e9aef_prof);

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
        return array (  96 => 26,  92 => 24,  90 => 22,  87 => 21,  85 => 19,  81 => 18,  77 => 17,  72 => 15,  68 => 14,  62 => 10,  56 => 9,  47 => 6,  41 => 4,  35 => 3,  11 => 1,);
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

            <form action=\"{{ path('user_register') }}\" method=\"POST\">
                {{ form_errors(form) }}

                {{ form_row(form.username) }}
                {{ form_row(form.email) }}
                {{ form_row(form.password.first, {
                    label: 'Password'
                }) }}
                {{ form_row(form.password.second, {
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
