<?php

/* @Framework/FormTable/button_row.html.php */
class __TwigTemplate_49e2e01c203e3a17a2d500d264792b3bb3f8b16312fe6b68b5a3826e11dd1178 extends Twig_Template
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
        $__internal_da64c61529aaf4af8c4356014ac2b51a972fe67bc2dec8573d794082b5ea2f2b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_da64c61529aaf4af8c4356014ac2b51a972fe67bc2dec8573d794082b5ea2f2b->enter($__internal_da64c61529aaf4af8c4356014ac2b51a972fe67bc2dec8573d794082b5ea2f2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        // line 1
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_da64c61529aaf4af8c4356014ac2b51a972fe67bc2dec8573d794082b5ea2f2b->leave($__internal_da64c61529aaf4af8c4356014ac2b51a972fe67bc2dec8573d794082b5ea2f2b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/button_row.html.php";
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
        return new Twig_Source("<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/button_row.html.php", "/home/pcapprenant17/Documents/Bou-e_corsaire_projet/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/button_row.html.php");
    }
}
