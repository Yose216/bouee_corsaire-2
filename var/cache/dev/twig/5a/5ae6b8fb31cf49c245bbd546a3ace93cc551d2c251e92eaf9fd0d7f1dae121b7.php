<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_e67c6123f6f54c14b0aa61ec9eb4357fd2972e509d877156f1fa45e94efd583d extends Twig_Template
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
        $__internal_43e5a7f4dcf85852e80faec084a38f9217b9ddb3d9ff2e3c48a38ea5b4164499 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_43e5a7f4dcf85852e80faec084a38f9217b9ddb3d9ff2e3c48a38ea5b4164499->enter($__internal_43e5a7f4dcf85852e80faec084a38f9217b9ddb3d9ff2e3c48a38ea5b4164499_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_43e5a7f4dcf85852e80faec084a38f9217b9ddb3d9ff2e3c48a38ea5b4164499->leave($__internal_43e5a7f4dcf85852e80faec084a38f9217b9ddb3d9ff2e3c48a38ea5b4164499_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
", "@Framework/Form/form.html.php", "/home/pcapprenant17/Documents/Bou-e_corsaire_projet/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form.html.php");
    }
}
