<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_4fdd3c99c729544fa4a0c42c81633cee6ed2d7409dfbe8b323914e1630be792d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_86a9fe9edb0a4715e76c3a4303241ae48a805a94345322c8f0dd838626b319d1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_86a9fe9edb0a4715e76c3a4303241ae48a805a94345322c8f0dd838626b319d1->enter($__internal_86a9fe9edb0a4715e76c3a4303241ae48a805a94345322c8f0dd838626b319d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_86a9fe9edb0a4715e76c3a4303241ae48a805a94345322c8f0dd838626b319d1->leave($__internal_86a9fe9edb0a4715e76c3a4303241ae48a805a94345322c8f0dd838626b319d1_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_14978a93aee0af73a9151cd6952ab203a00ac99a3b0994ce921e71caec4682de = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_14978a93aee0af73a9151cd6952ab203a00ac99a3b0994ce921e71caec4682de->enter($__internal_14978a93aee0af73a9151cd6952ab203a00ac99a3b0994ce921e71caec4682de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_14978a93aee0af73a9151cd6952ab203a00ac99a3b0994ce921e71caec4682de->leave($__internal_14978a93aee0af73a9151cd6952ab203a00ac99a3b0994ce921e71caec4682de_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_4253d935790b079aaea1f087610ed26cdd90f99c6fbd7ae03f7dcd8dfc8101c7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4253d935790b079aaea1f087610ed26cdd90f99c6fbd7ae03f7dcd8dfc8101c7->enter($__internal_4253d935790b079aaea1f087610ed26cdd90f99c6fbd7ae03f7dcd8dfc8101c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_4253d935790b079aaea1f087610ed26cdd90f99c6fbd7ae03f7dcd8dfc8101c7->leave($__internal_4253d935790b079aaea1f087610ed26cdd90f99c6fbd7ae03f7dcd8dfc8101c7_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_41942f478101480bb1c07a750292b7db7920ee36ef9360abbcd9835b9e56640e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_41942f478101480bb1c07a750292b7db7920ee36ef9360abbcd9835b9e56640e->enter($__internal_41942f478101480bb1c07a750292b7db7920ee36ef9360abbcd9835b9e56640e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_41942f478101480bb1c07a750292b7db7920ee36ef9360abbcd9835b9e56640e->leave($__internal_41942f478101480bb1c07a750292b7db7920ee36ef9360abbcd9835b9e56640e_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <link href=\"{{ absolute_url(asset('bundles/framework/css/exception.css')) }}\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "TwigBundle:Exception:exception_full.html.twig", "/Users/christos.paraskeva/Documents/my_projects/symfony_tutorial_new/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
