<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_81a7c65240b7e462b9f5bc67fe0d38b1e7bf490e08be1d0e61c25f8bd05f99fc extends Twig_Template
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
        $__internal_9bccaf015b7f2edda2cf08aa0efb9b96ad20eff12ecd759ddb3610c387eb7039 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9bccaf015b7f2edda2cf08aa0efb9b96ad20eff12ecd759ddb3610c387eb7039->enter($__internal_9bccaf015b7f2edda2cf08aa0efb9b96ad20eff12ecd759ddb3610c387eb7039_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_9bccaf015b7f2edda2cf08aa0efb9b96ad20eff12ecd759ddb3610c387eb7039->leave($__internal_9bccaf015b7f2edda2cf08aa0efb9b96ad20eff12ecd759ddb3610c387eb7039_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
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
        return new Twig_Source("<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
", "@Framework/Form/textarea_widget.html.php", "/Users/christos.paraskeva/Documents/my_projects/symfony_tutorial_new/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/textarea_widget.html.php");
    }
}
