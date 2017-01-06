<?php

/* @Framework/Form/integer_widget.html.php */
class __TwigTemplate_4b3cbd3ae86ada776cf4766a55bb32f5277455c8db5310ccb1c64e9e2755e09c extends Twig_Template
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
        $__internal_e89a2b10a7a24b8de7f93cff3c40a36f864e248f72e50dc25c0e27570bab97c3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e89a2b10a7a24b8de7f93cff3c40a36f864e248f72e50dc25c0e27570bab97c3->enter($__internal_e89a2b10a7a24b8de7f93cff3c40a36f864e248f72e50dc25c0e27570bab97c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
        
        $__internal_e89a2b10a7a24b8de7f93cff3c40a36f864e248f72e50dc25c0e27570bab97c3->leave($__internal_e89a2b10a7a24b8de7f93cff3c40a36f864e248f72e50dc25c0e27570bab97c3_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/integer_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
", "@Framework/Form/integer_widget.html.php", "/home/pcapprenant17/Documents/Bou-e_corsaire_projet/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/integer_widget.html.php");
    }
}
