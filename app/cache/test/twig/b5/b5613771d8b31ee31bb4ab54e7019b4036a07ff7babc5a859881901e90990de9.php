<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_bd583db5a55a68bbe3a941f75f6037608539a2605b3f1e4199ac6c642dbd39aa extends Twig_Template
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
        $__internal_e9d56ae71f9659dfe037d07cd3c34d6ad90c369a10dddaca0a7dbbc86595025f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e9d56ae71f9659dfe037d07cd3c34d6ad90c369a10dddaca0a7dbbc86595025f->enter($__internal_e9d56ae71f9659dfe037d07cd3c34d6ad90c369a10dddaca0a7dbbc86595025f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_e9d56ae71f9659dfe037d07cd3c34d6ad90c369a10dddaca0a7dbbc86595025f->leave($__internal_e9d56ae71f9659dfe037d07cd3c34d6ad90c369a10dddaca0a7dbbc86595025f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
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
        return new Twig_Source("<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
", "@Framework/Form/form_end.html.php", "/Users/christos.paraskeva/Documents/my_projects/symfony_tutorial_new/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_end.html.php");
    }
}
