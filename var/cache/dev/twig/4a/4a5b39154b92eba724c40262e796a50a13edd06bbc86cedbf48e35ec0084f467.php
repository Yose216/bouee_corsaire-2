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
        $__internal_0fce5f13ed66768f0da58f2169bba65352b44dbf48b4c82d5c84ce3b5b2616a6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0fce5f13ed66768f0da58f2169bba65352b44dbf48b4c82d5c84ce3b5b2616a6->enter($__internal_0fce5f13ed66768f0da58f2169bba65352b44dbf48b4c82d5c84ce3b5b2616a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
";
        
        $__internal_0fce5f13ed66768f0da58f2169bba65352b44dbf48b4c82d5c84ce3b5b2616a6->leave($__internal_0fce5f13ed66768f0da58f2169bba65352b44dbf48b4c82d5c84ce3b5b2616a6_prof);

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
