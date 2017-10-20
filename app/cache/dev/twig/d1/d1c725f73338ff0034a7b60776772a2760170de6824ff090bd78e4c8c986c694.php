<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_0095f70c871305565e388a6b6664a5fa25e43120e4c0929edce63f316682cd63 extends Twig_Template
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
        $__internal_472f6613806f86ebffe4086d3a430b4b0a0ec3c70945759c7c36588714c38e30 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_472f6613806f86ebffe4086d3a430b4b0a0ec3c70945759c7c36588714c38e30->enter($__internal_472f6613806f86ebffe4086d3a430b4b0a0ec3c70945759c7c36588714c38e30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_472f6613806f86ebffe4086d3a430b4b0a0ec3c70945759c7c36588714c38e30->leave($__internal_472f6613806f86ebffe4086d3a430b4b0a0ec3c70945759c7c36588714c38e30_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
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
", "TwigBundle:Exception:error.atom.twig", "/Users/christos.paraskeva/Documents/my_projects/symfony_tutorial_new/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.atom.twig");
    }
}
