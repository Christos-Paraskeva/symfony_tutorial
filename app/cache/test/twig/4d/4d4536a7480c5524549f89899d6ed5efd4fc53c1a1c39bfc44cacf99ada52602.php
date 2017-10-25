<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_572ba31fafb987f7416439be2fe059c1fd0d54be848b71d2698ec20e64d8f99c extends Twig_Template
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
        $__internal_4a1658a242ca885e2a6b8f6e7cf3b7d92f1ebd8dac8787b4423137b16b6a07f7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4a1658a242ca885e2a6b8f6e7cf3b7d92f1ebd8dac8787b4423137b16b6a07f7->enter($__internal_4a1658a242ca885e2a6b8f6e7cf3b7d92f1ebd8dac8787b4423137b16b6a07f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_4a1658a242ca885e2a6b8f6e7cf3b7d92f1ebd8dac8787b4423137b16b6a07f7->leave($__internal_4a1658a242ca885e2a6b8f6e7cf3b7d92f1ebd8dac8787b4423137b16b6a07f7_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
", "@Framework/Form/form.html.php", "/Users/christos.paraskeva/Documents/my_projects/symfony_tutorial_new/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form.html.php");
    }
}
