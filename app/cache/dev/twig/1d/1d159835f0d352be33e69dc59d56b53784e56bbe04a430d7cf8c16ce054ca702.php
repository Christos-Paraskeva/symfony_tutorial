<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_f4ecae65225e3f2417a7f0eb1a0bcb3678202272c390902124890b5a67aded12 extends Twig_Template
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
        $__internal_f9c797b71a02b006f49852b3d4ff636074c7dc3f04f202d030c41aa9e9f01878 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f9c797b71a02b006f49852b3d4ff636074c7dc3f04f202d030c41aa9e9f01878->enter($__internal_f9c797b71a02b006f49852b3d4ff636074c7dc3f04f202d030c41aa9e9f01878_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_f9c797b71a02b006f49852b3d4ff636074c7dc3f04f202d030c41aa9e9f01878->leave($__internal_f9c797b71a02b006f49852b3d4ff636074c7dc3f04f202d030c41aa9e9f01878_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.json.twig";
    }

    public function isTraitable()
    {
        return false;
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
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}
", "TwigBundle:Exception:error.json.twig", "/Users/christos.paraskeva/Documents/my_projects/symfony_tutorial_new/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.json.twig");
    }
}
