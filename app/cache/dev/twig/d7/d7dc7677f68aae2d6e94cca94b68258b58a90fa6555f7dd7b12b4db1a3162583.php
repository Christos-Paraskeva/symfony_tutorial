<?php

/* @Framework/Form/url_widget.html.php */
class __TwigTemplate_37b3f8efca6f13dce912483865a3e4f06a3ee3abda5e416d20fcc0a8df56c16c extends Twig_Template
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
        $__internal_99fc61062a70a804b4d2e88cd6feb4f93cfa3e0d8c0be874e8f22e4f2338beeb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_99fc61062a70a804b4d2e88cd6feb4f93cfa3e0d8c0be874e8f22e4f2338beeb->enter($__internal_99fc61062a70a804b4d2e88cd6feb4f93cfa3e0d8c0be874e8f22e4f2338beeb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
";
        
        $__internal_99fc61062a70a804b4d2e88cd6feb4f93cfa3e0d8c0be874e8f22e4f2338beeb->leave($__internal_99fc61062a70a804b4d2e88cd6feb4f93cfa3e0d8c0be874e8f22e4f2338beeb_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/url_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
", "@Framework/Form/url_widget.html.php", "/Users/christos.paraskeva/Documents/my_projects/symfony_tutorial_new/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/url_widget.html.php");
    }
}