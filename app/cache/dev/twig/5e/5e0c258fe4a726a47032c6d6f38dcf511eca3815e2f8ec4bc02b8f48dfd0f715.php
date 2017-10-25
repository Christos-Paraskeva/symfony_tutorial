<?php

/* UserBundle:Register:register.html.twig */
class __TwigTemplate_395c9750d19c147af2ff77373c6e049e3de0e7443047b49c147d0fc3a8c1fbf9 extends Twig_Template
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
        $__internal_664d1d8d139ec76812638a6fe8bf8c6ba0b4e7cfebb7366c1f738d38a4daba40 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_664d1d8d139ec76812638a6fe8bf8c6ba0b4e7cfebb7366c1f738d38a4daba40->enter($__internal_664d1d8d139ec76812638a6fe8bf8c6ba0b4e7cfebb7366c1f738d38a4daba40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Register:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_664d1d8d139ec76812638a6fe8bf8c6ba0b4e7cfebb7366c1f738d38a4daba40->leave($__internal_664d1d8d139ec76812638a6fe8bf8c6ba0b4e7cfebb7366c1f738d38a4daba40_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_e1a540f0df3dad9e4b15582fda1d1fa9724ea2af836100f42ad3a09251a52434 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e1a540f0df3dad9e4b15582fda1d1fa9724ea2af836100f42ad3a09251a52434->enter($__internal_e1a540f0df3dad9e4b15582fda1d1fa9724ea2af836100f42ad3a09251a52434_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "

    <link rel=\"stylesheet\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/user/css/login.css"), "html", null, true);
        echo "\" />
";
        
        $__internal_e1a540f0df3dad9e4b15582fda1d1fa9724ea2af836100f42ad3a09251a52434->leave($__internal_e1a540f0df3dad9e4b15582fda1d1fa9724ea2af836100f42ad3a09251a52434_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_e8b762568fa68ac066ad1d95c985f547a8de95323c14b393dc965e2ce7aa1a9f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e8b762568fa68ac066ad1d95c985f547a8de95323c14b393dc965e2ce7aa1a9f->enter($__internal_e8b762568fa68ac066ad1d95c985f547a8de95323c14b393dc965e2ce7aa1a9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_e8b762568fa68ac066ad1d95c985f547a8de95323c14b393dc965e2ce7aa1a9f->leave($__internal_e8b762568fa68ac066ad1d95c985f547a8de95323c14b393dc965e2ce7aa1a9f_prof);

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

{% endblock %}", "UserBundle:Register:register.html.twig", "/Users/christos.paraskeva/Documents/my_projects/symfony_tutorial_new/src/Bundle/UserBundle/Resources/views/Register/register.html.twig");
    }
}
