<?php

/* @Framework/Form/choice_options.html.php */
class __TwigTemplate_8ffa16d8dbff7101853566ada64e579d31f73e6af5cc887fbff6f2dc21ef0abc extends Twig_Template
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
        $__internal_b302b61fafb68c46b1c2db2d6fb701373b84f51204b9671160ae436dae764d30 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b302b61fafb68c46b1c2db2d6fb701373b84f51204b9671160ae436dae764d30->enter($__internal_b302b61fafb68c46b1c2db2d6fb701373b84f51204b9671160ae436dae764d30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
";
        
        $__internal_b302b61fafb68c46b1c2db2d6fb701373b84f51204b9671160ae436dae764d30->leave($__internal_b302b61fafb68c46b1c2db2d6fb701373b84f51204b9671160ae436dae764d30_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_options.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
", "@Framework/Form/choice_options.html.php", "/Users/christos.paraskeva/Documents/my_projects/symfony_tutorial_new/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_options.html.php");
    }
}
