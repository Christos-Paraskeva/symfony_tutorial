<?php

/* @Framework/FormTable/button_row.html.php */
class __TwigTemplate_06af3f9d65b4039bdeb33bfa1a503df933d984e70b0d8cbe0376323d539dade3 extends Twig_Template
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
        $__internal_902518a04b2e4a50591489ebd6c00dc6ce7ad507f57d5f46b8bd4fc5fcdedf4e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_902518a04b2e4a50591489ebd6c00dc6ce7ad507f57d5f46b8bd4fc5fcdedf4e->enter($__internal_902518a04b2e4a50591489ebd6c00dc6ce7ad507f57d5f46b8bd4fc5fcdedf4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        // line 1
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
";
        
        $__internal_902518a04b2e4a50591489ebd6c00dc6ce7ad507f57d5f46b8bd4fc5fcdedf4e->leave($__internal_902518a04b2e4a50591489ebd6c00dc6ce7ad507f57d5f46b8bd4fc5fcdedf4e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/button_row.html.php";
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
        return new Twig_Source("<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
", "@Framework/FormTable/button_row.html.php", "/Users/christos.paraskeva/Documents/my_projects/symfony_tutorial_new/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/button_row.html.php");
    }
}
