<?php

/* @Framework/Form/hidden_widget.html.php */
class __TwigTemplate_01627338777ee539a5b2ae2fe15cf1d50cfbba50d1577b0d7e52009f9b172eec extends Twig_Template
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
        $__internal_41be6aba24090efc89a3e39e026c3fa8daf728b82cd0f039a9bc2220c3134199 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_41be6aba24090efc89a3e39e026c3fa8daf728b82cd0f039a9bc2220c3134199->enter($__internal_41be6aba24090efc89a3e39e026c3fa8daf728b82cd0f039a9bc2220c3134199_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
        
        $__internal_41be6aba24090efc89a3e39e026c3fa8daf728b82cd0f039a9bc2220c3134199->leave($__internal_41be6aba24090efc89a3e39e026c3fa8daf728b82cd0f039a9bc2220c3134199_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
", "@Framework/Form/hidden_widget.html.php", "/Users/christos.paraskeva/Documents/my_projects/symfony_tutorial_new/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_widget.html.php");
    }
}
