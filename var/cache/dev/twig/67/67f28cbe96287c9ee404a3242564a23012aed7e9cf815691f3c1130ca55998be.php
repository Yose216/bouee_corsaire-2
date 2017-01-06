<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_231d0e90c411fb05993a4c89da6c4ad3f97a5e1099c566c366176c89646c3657 extends Twig_Template
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
        $__internal_3a5cc558a4097461bdc7477e4fdb4eb571d021dd4750f4b4d5a3da41bc6830e1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3a5cc558a4097461bdc7477e4fdb4eb571d021dd4750f4b4d5a3da41bc6830e1->enter($__internal_3a5cc558a4097461bdc7477e4fdb4eb571d021dd4750f4b4d5a3da41bc6830e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_3a5cc558a4097461bdc7477e4fdb4eb571d021dd4750f4b4d5a3da41bc6830e1->leave($__internal_3a5cc558a4097461bdc7477e4fdb4eb571d021dd4750f4b4d5a3da41bc6830e1_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
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
        return new Twig_Source("<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/hidden_row.html.php", "/home/pcapprenant17/Documents/Bou-e_corsaire_projet/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/hidden_row.html.php");
    }
}
