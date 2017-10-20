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
        $__internal_dd2f5f15b01a14343b401432b49b93df087ad3ef0a0dce9db8a4a12f2368b70b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dd2f5f15b01a14343b401432b49b93df087ad3ef0a0dce9db8a4a12f2368b70b->enter($__internal_dd2f5f15b01a14343b401432b49b93df087ad3ef0a0dce9db8a4a12f2368b70b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_dd2f5f15b01a14343b401432b49b93df087ad3ef0a0dce9db8a4a12f2368b70b->leave($__internal_dd2f5f15b01a14343b401432b49b93df087ad3ef0a0dce9db8a4a12f2368b70b_prof);

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
