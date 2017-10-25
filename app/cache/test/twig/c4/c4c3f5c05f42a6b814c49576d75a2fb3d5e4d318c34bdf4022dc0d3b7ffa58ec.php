<?php

/* UserBundle:Security:login.html.twig */
class __TwigTemplate_dd648bb158ad1b4159a5c6779c886de084f345af0b7a2a6c5c343b25f5c658d8 extends Twig_Template
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
        $__internal_819b691fa4b9ff8e730e051a8ac74fc0eb0f65c29a33360aa07682932b7748b0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_819b691fa4b9ff8e730e051a8ac74fc0eb0f65c29a33360aa07682932b7748b0->enter($__internal_819b691fa4b9ff8e730e051a8ac74fc0eb0f65c29a33360aa07682932b7748b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Security:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_819b691fa4b9ff8e730e051a8ac74fc0eb0f65c29a33360aa07682932b7748b0->leave($__internal_819b691fa4b9ff8e730e051a8ac74fc0eb0f65c29a33360aa07682932b7748b0_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_035e5441c7b547afef0fc270615afc12a335ea662d825c582479acfe250b96c8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_035e5441c7b547afef0fc270615afc12a335ea662d825c582479acfe250b96c8->enter($__internal_035e5441c7b547afef0fc270615afc12a335ea662d825c582479acfe250b96c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
            Remember me <input type=\"checkbox\" name=\"_remember_me\"/>
            <button type=\"submit\">login</button> </form>
    </article>
</section>

";
        
        $__internal_035e5441c7b547afef0fc270615afc12a335ea662d825c582479acfe250b96c8->leave($__internal_035e5441c7b547afef0fc270615afc12a335ea662d825c582479acfe250b96c8_prof);

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
            Remember me <input type=\"checkbox\" name=\"_remember_me\"/>
            <button type=\"submit\">login</button> </form>
    </article>
</section>

{% endblock %}", "UserBundle:Security:login.html.twig", "/Users/christos.paraskeva/Documents/my_projects/symfony_tutorial_new/src/Bundle/UserBundle/Resources/views/Security/login.html.twig");
    }
}
