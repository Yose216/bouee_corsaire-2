<?php

/* @Framework/Form/reset_widget.html.php */
class __TwigTemplate_6f65ba6cbd334586800cca9f69f38849ea51aaa9ecf655adbae06865a4eef7d5 extends Twig_Template
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
        $__internal_39b3f5f04b763ae5c3c811097a992d98ebbd0a4be7366614b9b18c455dd0a4d5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_39b3f5f04b763ae5c3c811097a992d98ebbd0a4be7366614b9b18c455dd0a4d5->enter($__internal_39b3f5f04b763ae5c3c811097a992d98ebbd0a4be7366614b9b18c455dd0a4d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_39b3f5f04b763ae5c3c811097a992d98ebbd0a4be7366614b9b18c455dd0a4d5->leave($__internal_39b3f5f04b763ae5c3c811097a992d98ebbd0a4be7366614b9b18c455dd0a4d5_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/reset_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
", "@Framework/Form/reset_widget.html.php", "/home/pcapprenant17/Documents/Bou-e_corsaire_projet/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/reset_widget.html.php");
    }
}
