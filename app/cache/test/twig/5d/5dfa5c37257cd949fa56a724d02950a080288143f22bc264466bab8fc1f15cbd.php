<?php

/* @Framework/Form/hidden_row.html.php */
class __TwigTemplate_fc54d5b9ee274d443f1254cfbc09176ceff2812dfbf852e1720a559bd6673c06 extends Twig_Template
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
        $__internal_3f50415c93e4ff42c637ea5bda7ca23f921f2cf4c8b8ca2d86c5e2f54f1b3028 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3f50415c93e4ff42c637ea5bda7ca23f921f2cf4c8b8ca2d86c5e2f54f1b3028->enter($__internal_3f50415c93e4ff42c637ea5bda7ca23f921f2cf4c8b8ca2d86c5e2f54f1b3028_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->widget(\$form) ?>
";
        
        $__internal_3f50415c93e4ff42c637ea5bda7ca23f921f2cf4c8b8ca2d86c5e2f54f1b3028->leave($__internal_3f50415c93e4ff42c637ea5bda7ca23f921f2cf4c8b8ca2d86c5e2f54f1b3028_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_row.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->widget(\$form) ?>
", "@Framework/Form/hidden_row.html.php", "/Users/christos.paraskeva/Documents/my_projects/symfony_tutorial_new/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_row.html.php");
    }
}
