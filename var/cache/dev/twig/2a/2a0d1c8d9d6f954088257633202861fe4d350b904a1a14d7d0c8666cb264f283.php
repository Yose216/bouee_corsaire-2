<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_6458bd02750f3483ff300a2c93556bc0ac5d1b5c63b42fd8f6e23ee26258760a extends Twig_Template
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
        $__internal_a742682d1b3c1dfca3e7413c6db61b0a64ad7497211e0da6fc0606e3c7bc66bf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a742682d1b3c1dfca3e7413c6db61b0a64ad7497211e0da6fc0606e3c7bc66bf->enter($__internal_a742682d1b3c1dfca3e7413c6db61b0a64ad7497211e0da6fc0606e3c7bc66bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_a742682d1b3c1dfca3e7413c6db61b0a64ad7497211e0da6fc0606e3c7bc66bf->leave($__internal_a742682d1b3c1dfca3e7413c6db61b0a64ad7497211e0da6fc0606e3c7bc66bf_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
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
        return new Twig_Source("<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
", "@Framework/Form/textarea_widget.html.php", "/home/pcapprenant17/Documents/Bou-e_corsaire_projet/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/textarea_widget.html.php");
    }
}
