<?php

/* @Framework/Form/password_widget.html.php */
class __TwigTemplate_8032492f7383c6ed291ffbc2f48c31f706773200fcdacff0903dee90d809845e extends Twig_Template
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
        $__internal_30926b03928a95dc82e2185614ff26cf77fdec9b0c6adb6ae3f3953372d0a0eb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_30926b03928a95dc82e2185614ff26cf77fdec9b0c6adb6ae3f3953372d0a0eb->enter($__internal_30926b03928a95dc82e2185614ff26cf77fdec9b0c6adb6ae3f3953372d0a0eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
        $__internal_30926b03928a95dc82e2185614ff26cf77fdec9b0c6adb6ae3f3953372d0a0eb->leave($__internal_30926b03928a95dc82e2185614ff26cf77fdec9b0c6adb6ae3f3953372d0a0eb_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/password_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
", "@Framework/Form/password_widget.html.php", "/home/pcapprenant17/Documents/Bou-e_corsaire_projet/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/password_widget.html.php");
    }
}
