<?php

/* @Framework/Form/email_widget.html.php */
class __TwigTemplate_5c53e42b4db184ee433de692bf1e8f3fb6abbd50c13e10575595981d4ee81c85 extends Twig_Template
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
        $__internal_75a97e9acb7a3f47f22c92e814516c0fcf57a95631ebb7ff7bbd6131e81c9a08 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_75a97e9acb7a3f47f22c92e814516c0fcf57a95631ebb7ff7bbd6131e81c9a08->enter($__internal_75a97e9acb7a3f47f22c92e814516c0fcf57a95631ebb7ff7bbd6131e81c9a08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
        
        $__internal_75a97e9acb7a3f47f22c92e814516c0fcf57a95631ebb7ff7bbd6131e81c9a08->leave($__internal_75a97e9acb7a3f47f22c92e814516c0fcf57a95631ebb7ff7bbd6131e81c9a08_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/email_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
", "@Framework/Form/email_widget.html.php", "/home/pcapprenant17/Documents/Bou-e_corsaire_projet/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/email_widget.html.php");
    }
}
