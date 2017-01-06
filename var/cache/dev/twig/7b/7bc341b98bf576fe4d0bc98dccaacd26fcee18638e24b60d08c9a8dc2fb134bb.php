<?php

/* @Framework/Form/hidden_widget.html.php */
class __TwigTemplate_a3eaa0f5214292b6165297a6a941120e0088bf4d9b604d8950e2c910286ad108 extends Twig_Template
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
        $__internal_73c9f4f6abe01139d1954e9f1285842c6eb436135c28fa05d834a9c8cbe52e6d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_73c9f4f6abe01139d1954e9f1285842c6eb436135c28fa05d834a9c8cbe52e6d->enter($__internal_73c9f4f6abe01139d1954e9f1285842c6eb436135c28fa05d834a9c8cbe52e6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
        
        $__internal_73c9f4f6abe01139d1954e9f1285842c6eb436135c28fa05d834a9c8cbe52e6d->leave($__internal_73c9f4f6abe01139d1954e9f1285842c6eb436135c28fa05d834a9c8cbe52e6d_prof);

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
", "@Framework/Form/hidden_widget.html.php", "/home/pcapprenant17/Documents/Bou-e_corsaire_projet/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_widget.html.php");
    }
}
