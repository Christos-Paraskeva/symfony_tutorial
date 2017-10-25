<?php

/* @Framework/Form/percent_widget.html.php */
class __TwigTemplate_762cde176eb746070cc1d882893b721ce9e367d01218ce65aa6d581ea975bd69 extends Twig_Template
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
        $__internal_e18cf688e3bbe7a2e8eac5a71e6af14a2d724ee8300486502c02cdf3ddc93a13 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e18cf688e3bbe7a2e8eac5a71e6af14a2d724ee8300486502c02cdf3ddc93a13->enter($__internal_e18cf688e3bbe7a2e8eac5a71e6af14a2d724ee8300486502c02cdf3ddc93a13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
";
        
        $__internal_e18cf688e3bbe7a2e8eac5a71e6af14a2d724ee8300486502c02cdf3ddc93a13->leave($__internal_e18cf688e3bbe7a2e8eac5a71e6af14a2d724ee8300486502c02cdf3ddc93a13_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/percent_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
", "@Framework/Form/percent_widget.html.php", "/Users/christos.paraskeva/Documents/my_projects/symfony_tutorial_new/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/percent_widget.html.php");
    }
}
