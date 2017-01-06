<?php

/* @Framework/Form/number_widget.html.php */
class __TwigTemplate_934178d853b6d6959eedee2416233920a59ae759d5f3d58bcec448ad2c1359d6 extends Twig_Template
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
        $__internal_c155490df5b9f7b98b0209ae06401a244997943d5cef3ab2d9e0d90ae94ce30d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c155490df5b9f7b98b0209ae06401a244997943d5cef3ab2d9e0d90ae94ce30d->enter($__internal_c155490df5b9f7b98b0209ae06401a244997943d5cef3ab2d9e0d90ae94ce30d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
";
        
        $__internal_c155490df5b9f7b98b0209ae06401a244997943d5cef3ab2d9e0d90ae94ce30d->leave($__internal_c155490df5b9f7b98b0209ae06401a244997943d5cef3ab2d9e0d90ae94ce30d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/number_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
", "@Framework/Form/number_widget.html.php", "/home/pcapprenant17/Documents/Bou-e_corsaire_projet/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/number_widget.html.php");
    }
}
