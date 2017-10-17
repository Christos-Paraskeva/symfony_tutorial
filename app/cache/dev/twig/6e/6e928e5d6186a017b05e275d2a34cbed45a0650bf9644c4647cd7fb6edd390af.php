<?php

/* @Framework/Form/attributes.html.php */
class __TwigTemplate_80211db0d0727bc8424a6738bc020a4f3df6d09a8e7d64bdda6e48a7dee00756 extends Twig_Template
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
        $__internal_b0182867b54c6d10da97197cb42133848eaf1375f1fdb2dbd06ed2ff7af04295 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b0182867b54c6d10da97197cb42133848eaf1375f1fdb2dbd06ed2ff7af04295->enter($__internal_b0182867b54c6d10da97197cb42133848eaf1375f1fdb2dbd06ed2ff7af04295_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
";
        
        $__internal_b0182867b54c6d10da97197cb42133848eaf1375f1fdb2dbd06ed2ff7af04295->leave($__internal_b0182867b54c6d10da97197cb42133848eaf1375f1fdb2dbd06ed2ff7af04295_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/attributes.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
", "@Framework/Form/attributes.html.php", "/Users/christos.paraskeva/Documents/my_projects/symfony_tutorial_new/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/attributes.html.php");
    }
}
