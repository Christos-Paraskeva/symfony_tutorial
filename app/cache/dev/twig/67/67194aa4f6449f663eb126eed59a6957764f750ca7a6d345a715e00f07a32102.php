<?php

/* @Framework/Form/range_widget.html.php */
class __TwigTemplate_e5e670cfe582c86b8baeae27d6efd4219084c548eca05cb9a3dcb74817695e87 extends Twig_Template
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
        $__internal_89ff715d1a8c288ea9da1a5751f49f8967471a9a52f9c82db44f34477cfc6202 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_89ff715d1a8c288ea9da1a5751f49f8967471a9a52f9c82db44f34477cfc6202->enter($__internal_89ff715d1a8c288ea9da1a5751f49f8967471a9a52f9c82db44f34477cfc6202_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/range_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'range'));
";
        
        $__internal_89ff715d1a8c288ea9da1a5751f49f8967471a9a52f9c82db44f34477cfc6202->leave($__internal_89ff715d1a8c288ea9da1a5751f49f8967471a9a52f9c82db44f34477cfc6202_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/range_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'range'));
", "@Framework/Form/range_widget.html.php", "/Users/christos.paraskeva/Documents/my_projects/symfony_tutorial_new/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/range_widget.html.php");
    }
}
