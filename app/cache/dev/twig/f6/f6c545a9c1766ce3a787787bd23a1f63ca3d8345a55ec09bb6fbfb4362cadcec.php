<?php

/* @Framework/Form/button_row.html.php */
class __TwigTemplate_364efadd04b3967d2f92ece947c589419ed2e8de00ed760f92d088575d6f42cd extends Twig_Template
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
        $__internal_897fd9b561e3079ffd6dbf2402b5da2c6ea65845e660ac7380f605207a99526b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_897fd9b561e3079ffd6dbf2402b5da2c6ea65845e660ac7380f605207a99526b->enter($__internal_897fd9b561e3079ffd6dbf2402b5da2c6ea65845e660ac7380f605207a99526b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_897fd9b561e3079ffd6dbf2402b5da2c6ea65845e660ac7380f605207a99526b->leave($__internal_897fd9b561e3079ffd6dbf2402b5da2c6ea65845e660ac7380f605207a99526b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_row.html.php";
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
        return new Twig_Source("<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/button_row.html.php", "/Users/christos.paraskeva/Documents/my_projects/symfony_tutorial_new/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/button_row.html.php");
    }
}
