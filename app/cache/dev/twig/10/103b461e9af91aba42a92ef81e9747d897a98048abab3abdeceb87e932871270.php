<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_0605a916d5f2d16be7b42768f3248842e10c3cd6d2c75fac742d45c1f804de3e extends Twig_Template
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
        $__internal_89ff7befea9cd3ad15a71088d3555b1a9d2cf4ed18f181e78303941f4ed1f408 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_89ff7befea9cd3ad15a71088d3555b1a9d2cf4ed18f181e78303941f4ed1f408->enter($__internal_89ff7befea9cd3ad15a71088d3555b1a9d2cf4ed18f181e78303941f4ed1f408_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
";
        
        $__internal_89ff7befea9cd3ad15a71088d3555b1a9d2cf4ed18f181e78303941f4ed1f408->leave($__internal_89ff7befea9cd3ad15a71088d3555b1a9d2cf4ed18f181e78303941f4ed1f408_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
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
        return new Twig_Source("<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
", "@Framework/FormTable/hidden_row.html.php", "/Users/christos.paraskeva/Documents/my_projects/symfony_tutorial_new/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/hidden_row.html.php");
    }
}
