<?php

/* @Framework/Form/number_widget.html.php */
class __TwigTemplate_5db591975f2a5630cc8f7754f213f58ebdc46811d2dafe3bc1529e729cd617af extends Twig_Template
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
        $__internal_e97a39a8528d9a08d5a80a93d81b72f56c15811e26d60ba77e039c26cd3ac5d2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e97a39a8528d9a08d5a80a93d81b72f56c15811e26d60ba77e039c26cd3ac5d2->enter($__internal_e97a39a8528d9a08d5a80a93d81b72f56c15811e26d60ba77e039c26cd3ac5d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
";
        
        $__internal_e97a39a8528d9a08d5a80a93d81b72f56c15811e26d60ba77e039c26cd3ac5d2->leave($__internal_e97a39a8528d9a08d5a80a93d81b72f56c15811e26d60ba77e039c26cd3ac5d2_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/number_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
", "@Framework/Form/number_widget.html.php", "/Users/christos.paraskeva/Documents/my_projects/symfony_tutorial_new/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/number_widget.html.php");
    }
}
