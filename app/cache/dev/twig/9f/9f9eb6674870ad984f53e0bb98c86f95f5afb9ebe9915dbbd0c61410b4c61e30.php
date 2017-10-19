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
        $__internal_df1b8ea408d38de76e1dfa9931873de94328b24c586071f4f376eec6798c64e7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_df1b8ea408d38de76e1dfa9931873de94328b24c586071f4f376eec6798c64e7->enter($__internal_df1b8ea408d38de76e1dfa9931873de94328b24c586071f4f376eec6798c64e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Register:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_df1b8ea408d38de76e1dfa9931873de94328b24c586071f4f376eec6798c64e7->leave($__internal_df1b8ea408d38de76e1dfa9931873de94328b24c586071f4f376eec6798c64e7_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_dcaab086b683593f46e1c5665018dc103dfddef973f448dd3cbf29a4ab6f6105 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dcaab086b683593f46e1c5665018dc103dfddef973f448dd3cbf29a4ab6f6105->enter($__internal_dcaab086b683593f46e1c5665018dc103dfddef973f448dd3cbf29a4ab6f6105_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "

    <link rel=\"stylesheet\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/user/css/login.css"), "html", null, true);
        echo "\" />
";
        
        $__internal_dcaab086b683593f46e1c5665018dc103dfddef973f448dd3cbf29a4ab6f6105->leave($__internal_dcaab086b683593f46e1c5665018dc103dfddef973f448dd3cbf29a4ab6f6105_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_af85c68c2881ddf81d245a8f0b2c86ccbc55098cab8faf6ea5383f1dda9c2643 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_af85c68c2881ddf81d245a8f0b2c86ccbc55098cab8faf6ea5383f1dda9c2643->enter($__internal_af85c68c2881ddf81d245a8f0b2c86ccbc55098cab8faf6ea5383f1dda9c2643_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "    <section class=\"login\">
        <article>
            <h1>Register</h1>
        </article>

    </section>

";
        
        $__internal_af85c68c2881ddf81d245a8f0b2c86ccbc55098cab8faf6ea5383f1dda9c2643->leave($__internal_af85c68c2881ddf81d245a8f0b2c86ccbc55098cab8faf6ea5383f1dda9c2643_prof);

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
        return array (  62 => 10,  56 => 9,  47 => 6,  41 => 4,  35 => 3,  11 => 1,);
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
        </article>

    </section>

{% endblock %}", "UserBundle:Register:register.html.twig", "/Users/christos.paraskeva/Documents/my_projects/symfony_tutorial_new/src/Yoda/UserBundle/Resources/views/Register/register.html.twig");
    }
}
