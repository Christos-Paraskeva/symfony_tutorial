<?php

/* @Framework/Form/container_attributes.html.php */
class __TwigTemplate_c6308f1ff587dff7ddb2dd3a160e2df74490e87f5e485f4bd6ab5e8382481853 extends Twig_Template
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
        $__internal_c47a4bdcedb5f34c0248311fb304aabb74c68ecafbe482992336d681144dc88a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c47a4bdcedb5f34c0248311fb304aabb74c68ecafbe482992336d681144dc88a->enter($__internal_c47a4bdcedb5f34c0248311fb304aabb74c68ecafbe482992336d681144dc88a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
";
        
        $__internal_c47a4bdcedb5f34c0248311fb304aabb74c68ecafbe482992336d681144dc88a->leave($__internal_c47a4bdcedb5f34c0248311fb304aabb74c68ecafbe482992336d681144dc88a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/container_attributes.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
", "@Framework/Form/container_attributes.html.php", "/Users/christos.paraskeva/Documents/my_projects/symfony_tutorial_new/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/container_attributes.html.php");
    }
}
