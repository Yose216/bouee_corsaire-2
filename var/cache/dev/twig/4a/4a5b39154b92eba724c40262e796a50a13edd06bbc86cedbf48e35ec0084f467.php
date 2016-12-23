<?php

/* @Framework/Form/choice_options.html.php */
class __TwigTemplate_7dfafbefa54ea410a4dc6e03ad05fd07bcc7d40e25716e9064bdafba9625473f extends Twig_Template
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
        $__internal_b5defe4af163c5fedc03d265c5576ae53c8da5c18219dc7fdb1d1659464ca619 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b5defe4af163c5fedc03d265c5576ae53c8da5c18219dc7fdb1d1659464ca619->enter($__internal_b5defe4af163c5fedc03d265c5576ae53c8da5c18219dc7fdb1d1659464ca619_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
";
        
        $__internal_b5defe4af163c5fedc03d265c5576ae53c8da5c18219dc7fdb1d1659464ca619->leave($__internal_b5defe4af163c5fedc03d265c5576ae53c8da5c18219dc7fdb1d1659464ca619_prof);

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
", "@Framework/Form/choice_options.html.php", "/home/pcapprenant17/Documents/Bou-e_corsaire_projet/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_options.html.php");
    }
}
