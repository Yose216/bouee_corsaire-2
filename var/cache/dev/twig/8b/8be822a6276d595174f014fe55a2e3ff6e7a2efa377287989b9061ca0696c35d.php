<?php

/* FOSUserBundle:ChangePassword:change_password.html.twig */
class __TwigTemplate_f3b465692e5950a367b0ebeb180e5566f0f3ed4f88bd8eaa2a589725a05315f3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:ChangePassword:change_password.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_22cee2a958a168ce460362fb1b9e4f10d6bd9fa50024a6fc130daf47cc024f07 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_22cee2a958a168ce460362fb1b9e4f10d6bd9fa50024a6fc130daf47cc024f07->enter($__internal_22cee2a958a168ce460362fb1b9e4f10d6bd9fa50024a6fc130daf47cc024f07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:change_password.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_22cee2a958a168ce460362fb1b9e4f10d6bd9fa50024a6fc130daf47cc024f07->leave($__internal_22cee2a958a168ce460362fb1b9e4f10d6bd9fa50024a6fc130daf47cc024f07_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_6d1124f35e924e2dcff85909f1604f7f57985cff46ff925f2b03b892eacfdb6d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6d1124f35e924e2dcff85909f1604f7f57985cff46ff925f2b03b892eacfdb6d->enter($__internal_6d1124f35e924e2dcff85909f1604f7f57985cff46ff925f2b03b892eacfdb6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:ChangePassword:change_password_content.html.twig", "FOSUserBundle:ChangePassword:change_password.html.twig", 4)->display($context);
        
        $__internal_6d1124f35e924e2dcff85909f1604f7f57985cff46ff925f2b03b892eacfdb6d->leave($__internal_6d1124f35e924e2dcff85909f1604f7f57985cff46ff925f2b03b892eacfdb6d_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:ChangePassword:change_password.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"FOSUserBundle::layout.html.twig\" %}

{% block fos_user_content %}
{% include \"FOSUserBundle:ChangePassword:change_password_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:ChangePassword:change_password.html.twig", "/home/pcapprenant17/Documents/Bou-e_corsaire_projet/vendor/friendsofsymfony/user-bundle/Resources/views/ChangePassword/change_password.html.twig");
    }
}
