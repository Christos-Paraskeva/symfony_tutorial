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
        $__internal_777e9df6bac0e4c219006e101f269c18a974ea6af8cf2b3d9c46b11d50158051 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_777e9df6bac0e4c219006e101f269c18a974ea6af8cf2b3d9c46b11d50158051->enter($__internal_777e9df6bac0e4c219006e101f269c18a974ea6af8cf2b3d9c46b11d50158051_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_777e9df6bac0e4c219006e101f269c18a974ea6af8cf2b3d9c46b11d50158051->leave($__internal_777e9df6bac0e4c219006e101f269c18a974ea6af8cf2b3d9c46b11d50158051_prof);

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
