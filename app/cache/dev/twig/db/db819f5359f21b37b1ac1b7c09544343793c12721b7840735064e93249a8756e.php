<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_d3c73af06400fad4fc2089d64775c6583effa7864013caf7e260aa6a101248e0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_cfc4611acd8583a5266e61a5c8ec18c6cf4faa1e98525ef3b7ecd863847b0db9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cfc4611acd8583a5266e61a5c8ec18c6cf4faa1e98525ef3b7ecd863847b0db9->enter($__internal_cfc4611acd8583a5266e61a5c8ec18c6cf4faa1e98525ef3b7ecd863847b0db9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_cfc4611acd8583a5266e61a5c8ec18c6cf4faa1e98525ef3b7ecd863847b0db9->leave($__internal_cfc4611acd8583a5266e61a5c8ec18c6cf4faa1e98525ef3b7ecd863847b0db9_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% include '@Twig/Exception/error.xml.twig' %}
", "TwigBundle:Exception:error.rdf.twig", "/Users/christos.paraskeva/Documents/my_projects/symfony_tutorial_new/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.rdf.twig");
    }
}
