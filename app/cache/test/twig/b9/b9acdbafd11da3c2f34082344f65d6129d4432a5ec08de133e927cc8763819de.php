<?php

/* @Framework/Form/integer_widget.html.php */
class __TwigTemplate_b3d17015ed84fbb081314cf5736c16880077f75df04709f4f3f19f8f2fd8dfa4 extends Twig_Template
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
        $__internal_663579229dca6a2a5ffcdde43ebf560b1b2831d5cf1cd48a7c91f64a2909605d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_663579229dca6a2a5ffcdde43ebf560b1b2831d5cf1cd48a7c91f64a2909605d->enter($__internal_663579229dca6a2a5ffcdde43ebf560b1b2831d5cf1cd48a7c91f64a2909605d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
        
        $__internal_663579229dca6a2a5ffcdde43ebf560b1b2831d5cf1cd48a7c91f64a2909605d->leave($__internal_663579229dca6a2a5ffcdde43ebf560b1b2831d5cf1cd48a7c91f64a2909605d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/integer_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
", "@Framework/Form/integer_widget.html.php", "/Users/christos.paraskeva/Documents/my_projects/symfony_tutorial_new/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/integer_widget.html.php");
    }
}
