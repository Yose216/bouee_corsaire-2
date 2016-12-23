<?php

/* @Framework/Form/hidden_row.html.php */
class __TwigTemplate_aef0a7109e4fa39b74220aaa3ef104c7c63f77e7622c670cad074fe677b05ab8 extends Twig_Template
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
        $__internal_51d68c079e2ec1216a2742b5f763968a9a571b2d9591475821ea86d4bcbada68 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_51d68c079e2ec1216a2742b5f763968a9a571b2d9591475821ea86d4bcbada68->enter($__internal_51d68c079e2ec1216a2742b5f763968a9a571b2d9591475821ea86d4bcbada68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->widget(\$form) ?>
";
        
        $__internal_51d68c079e2ec1216a2742b5f763968a9a571b2d9591475821ea86d4bcbada68->leave($__internal_51d68c079e2ec1216a2742b5f763968a9a571b2d9591475821ea86d4bcbada68_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_row.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->widget(\$form) ?>
", "@Framework/Form/hidden_row.html.php", "/home/pcapprenant17/Documents/Bou-e_corsaire_projet/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_row.html.php");
    }
}
