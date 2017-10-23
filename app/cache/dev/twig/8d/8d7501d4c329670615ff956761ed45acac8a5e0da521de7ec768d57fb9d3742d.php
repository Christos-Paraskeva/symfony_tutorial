<?php

/* UserBundle:Security:login.html.twig */
class __TwigTemplate_ecf10a7975a440184b9b9e881f3038ccd6eb6909869fe756026beb07f84067a7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "UserBundle:Security:login.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5fa90a61c5254ed8f5a2e5b7673ca72cb1991400a09e926d09524a6794731ab9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5fa90a61c5254ed8f5a2e5b7673ca72cb1991400a09e926d09524a6794731ab9->enter($__internal_5fa90a61c5254ed8f5a2e5b7673ca72cb1991400a09e926d09524a6794731ab9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Security:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5fa90a61c5254ed8f5a2e5b7673ca72cb1991400a09e926d09524a6794731ab9->leave($__internal_5fa90a61c5254ed8f5a2e5b7673ca72cb1991400a09e926d09524a6794731ab9_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_cc3b8cf5fb1d8b85f3c18a672aed71de58c56fcd3d6421f841ef919c0a61c025 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cc3b8cf5fb1d8b85f3c18a672aed71de58c56fcd3d6421f841ef919c0a61c025->enter($__internal_cc3b8cf5fb1d8b85f3c18a672aed71de58c56fcd3d6421f841ef919c0a61c025_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        echo " <section class=\"login\">
    <article>
        ";
        // line 5
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 6
            echo "            <div class=\"error\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "message", array()), "html", null, true);
            echo "</div>
        ";
        }
        // line 8
        echo "
        <form action=\"";
        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("login_check");
        echo "\" method=\"post\">
            <label for=\"username\">Username:</label>
            <input type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 11
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\" />

            <label for=\"password\">Password:</label>
            <input type=\"password\" id=\"password\" name=\"_password\" />

            <button type=\"submit\">login</button> </form>
    </article>
</section>

";
        
        $__internal_cc3b8cf5fb1d8b85f3c18a672aed71de58c56fcd3d6421f841ef919c0a61c025->leave($__internal_cc3b8cf5fb1d8b85f3c18a672aed71de58c56fcd3d6421f841ef919c0a61c025_prof);

    }

    public function getTemplateName()
    {
        return "UserBundle:Security:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  59 => 11,  54 => 9,  51 => 8,  45 => 6,  43 => 5,  34 => 3,  11 => 1,);
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

{% block body %} <section class=\"login\">
    <article>
        {% if error %}
            <div class=\"error\">{{ error.message }}</div>
        {% endif %}

        <form action=\"{{ path('login_check') }}\" method=\"post\">
            <label for=\"username\">Username:</label>
            <input type=\"text\" id=\"username\" name=\"_username\" value=\"{{ last_username }}\" />

            <label for=\"password\">Password:</label>
            <input type=\"password\" id=\"password\" name=\"_password\" />

            <button type=\"submit\">login</button> </form>
    </article>
</section>

{% endblock %}", "UserBundle:Security:login.html.twig", "/Users/christos.paraskeva/Documents/my_projects/symfony_tutorial_new/src/Yoda/UserBundle/Resources/views/Security/login.html.twig");
    }
}
