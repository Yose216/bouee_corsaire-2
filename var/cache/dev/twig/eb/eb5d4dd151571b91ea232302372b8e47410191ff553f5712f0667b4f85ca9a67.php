<?php

/* @Framework/Form/button_row.html.php */
class __TwigTemplate_6d608d61bbd904ceaa533265000687aca34bf735062e9b339d2639f6e567ecb1 extends Twig_Template
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
        $__internal_9e10a5c7aa6091ca7a9984f906e85db87b636248f78b1b75352cbab317e965f4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9e10a5c7aa6091ca7a9984f906e85db87b636248f78b1b75352cbab317e965f4->enter($__internal_9e10a5c7aa6091ca7a9984f906e85db87b636248f78b1b75352cbab317e965f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_9e10a5c7aa6091ca7a9984f906e85db87b636248f78b1b75352cbab317e965f4->leave($__internal_9e10a5c7aa6091ca7a9984f906e85db87b636248f78b1b75352cbab317e965f4_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_row.html.php";
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
        return new Twig_Source("<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/button_row.html.php", "/home/pcapprenant17/Documents/Bou-e_corsaire_projet/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/button_row.html.php");
    }
}
