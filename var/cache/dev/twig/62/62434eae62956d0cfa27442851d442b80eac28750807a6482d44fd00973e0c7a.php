<?php

/* @Framework/Form/submit_widget.html.php */
class __TwigTemplate_556e355c72ebc853d320ee94b3881a2777dbecaaf328b2333492f4cc55f4882b extends Twig_Template
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
        $__internal_88f0688ced84086ade58fcdf1962a62d05f30603c9da7bc9d2bdc3c43e8c5e2a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_88f0688ced84086ade58fcdf1962a62d05f30603c9da7bc9d2bdc3c43e8c5e2a->enter($__internal_88f0688ced84086ade58fcdf1962a62d05f30603c9da7bc9d2bdc3c43e8c5e2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_88f0688ced84086ade58fcdf1962a62d05f30603c9da7bc9d2bdc3c43e8c5e2a->leave($__internal_88f0688ced84086ade58fcdf1962a62d05f30603c9da7bc9d2bdc3c43e8c5e2a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/submit_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
", "@Framework/Form/submit_widget.html.php", "/home/pcapprenant17/Documents/Bou-e_corsaire_projet/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/submit_widget.html.php");
    }
}
