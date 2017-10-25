<?php

/* @Framework/Form/repeated_row.html.php */
class __TwigTemplate_aa6816e62cf47b4095da4df4a829c6a31eae2d76c9a33d2ac9827453ee4445c3 extends Twig_Template
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
        $__internal_44483279b7eeaccd83f489cfacf3273815dda75cfa544b5b5f2e4cd046ef03c1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_44483279b7eeaccd83f489cfacf3273815dda75cfa544b5b5f2e4cd046ef03c1->enter($__internal_44483279b7eeaccd83f489cfacf3273815dda75cfa544b5b5f2e4cd046ef03c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/repeated_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_rows') ?>
";
        
        $__internal_44483279b7eeaccd83f489cfacf3273815dda75cfa544b5b5f2e4cd046ef03c1->leave($__internal_44483279b7eeaccd83f489cfacf3273815dda75cfa544b5b5f2e4cd046ef03c1_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/repeated_row.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_rows') ?>
", "@Framework/Form/repeated_row.html.php", "/Users/christos.paraskeva/Documents/my_projects/symfony_tutorial_new/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/repeated_row.html.php");
    }
}
