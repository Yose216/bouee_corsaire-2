<?php

/* @Framework/Form/form_enctype.html.php */
class __TwigTemplate_71aea15600858ff939ba81b62f78a5c2df768d43c4cf9e358bef4c3ab7a62e92 extends Twig_Template
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
        $__internal_3fce6551a0e8aee8d033682af8a657635e8e3f8284873d4da0d0ddebc630e2a2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3fce6551a0e8aee8d033682af8a657635e8e3f8284873d4da0d0ddebc630e2a2->enter($__internal_3fce6551a0e8aee8d033682af8a657635e8e3f8284873d4da0d0ddebc630e2a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_3fce6551a0e8aee8d033682af8a657635e8e3f8284873d4da0d0ddebc630e2a2->leave($__internal_3fce6551a0e8aee8d033682af8a657635e8e3f8284873d4da0d0ddebc630e2a2_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_enctype.html.php";
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
        return new Twig_Source("<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
", "@Framework/Form/form_enctype.html.php", "/home/pcapprenant17/Documents/Bou-e_corsaire_projet/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_enctype.html.php");
    }
}
