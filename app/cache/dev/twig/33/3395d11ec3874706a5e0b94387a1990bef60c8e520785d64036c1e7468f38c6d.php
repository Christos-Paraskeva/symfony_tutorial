<?php

/* @Framework/Form/email_widget.html.php */
class __TwigTemplate_b13b8bc68b076429c33ee4925ad9cc84d1b58ed0769b0db231a0e13666e361ed extends Twig_Template
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
        $__internal_6f927f9e9ec1b906739b7ea9e2cc4c76c7a52ec3d9564fd3e608381199b8b3b3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6f927f9e9ec1b906739b7ea9e2cc4c76c7a52ec3d9564fd3e608381199b8b3b3->enter($__internal_6f927f9e9ec1b906739b7ea9e2cc4c76c7a52ec3d9564fd3e608381199b8b3b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
        
        $__internal_6f927f9e9ec1b906739b7ea9e2cc4c76c7a52ec3d9564fd3e608381199b8b3b3->leave($__internal_6f927f9e9ec1b906739b7ea9e2cc4c76c7a52ec3d9564fd3e608381199b8b3b3_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/email_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
", "@Framework/Form/email_widget.html.php", "/Users/christos.paraskeva/Documents/my_projects/symfony_tutorial_new/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/email_widget.html.php");
    }
}
