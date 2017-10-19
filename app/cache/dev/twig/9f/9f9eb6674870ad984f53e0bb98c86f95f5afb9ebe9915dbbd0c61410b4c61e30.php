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
        $__internal_8e1da83c103a66b93edd8744dbfbc6b8ace557422d9713874f29d361c4b15668 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8e1da83c103a66b93edd8744dbfbc6b8ace557422d9713874f29d361c4b15668->enter($__internal_8e1da83c103a66b93edd8744dbfbc6b8ace557422d9713874f29d361c4b15668_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Register:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8e1da83c103a66b93edd8744dbfbc6b8ace557422d9713874f29d361c4b15668->leave($__internal_8e1da83c103a66b93edd8744dbfbc6b8ace557422d9713874f29d361c4b15668_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_7827b2518d27ef3a1a7757652d60b6cc34c64dab53fb72959b58059538897466 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7827b2518d27ef3a1a7757652d60b6cc34c64dab53fb72959b58059538897466->enter($__internal_7827b2518d27ef3a1a7757652d60b6cc34c64dab53fb72959b58059538897466_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "

    <link rel=\"stylesheet\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/user/css/login.css"), "html", null, true);
        echo "\" />
";
        
        $__internal_7827b2518d27ef3a1a7757652d60b6cc34c64dab53fb72959b58059538897466->leave($__internal_7827b2518d27ef3a1a7757652d60b6cc34c64dab53fb72959b58059538897466_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_a56d6f285e34169748199c9096316c5500540e986fe21a88c331ec5562784f2a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a56d6f285e34169748199c9096316c5500540e986fe21a88c331ec5562784f2a->enter($__internal_a56d6f285e34169748199c9096316c5500540e986fe21a88c331ec5562784f2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "username", array()), 'row');
        echo "
                ";
        // line 16
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'row');
        echo "
                ";
        // line 17
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "password", array()), 'row');
        echo "
                <input type=\"submit\" class=\"btn btn-primary pull-right\" value=\"Register!\" />
            </form>
        </article>

    </section>

";
        
        $__internal_a56d6f285e34169748199c9096316c5500540e986fe21a88c331ec5562784f2a->leave($__internal_a56d6f285e34169748199c9096316c5500540e986fe21a88c331ec5562784f2a_prof);

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
        return array (  80 => 17,  76 => 16,  72 => 15,  68 => 14,  62 => 10,  56 => 9,  47 => 6,  41 => 4,  35 => 3,  11 => 1,);
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
                {{ form_row(form.username) }}
                {{ form_row(form.email) }}
                {{ form_row(form.password) }}
                <input type=\"submit\" class=\"btn btn-primary pull-right\" value=\"Register!\" />
            </form>
        </article>

    </section>

{% endblock %}", "UserBundle:Register:register.html.twig", "/Users/christos.paraskeva/Documents/my_projects/symfony_tutorial_new/src/Yoda/UserBundle/Resources/views/Register/register.html.twig");
    }
}
