<?php

/* FOSUserBundle:Group:show.html.twig */
class __TwigTemplate_36ecdc0408353942e7e11b0660cd6c892aff7a4a372a5bcf9587aad47de24a1a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:show.html.twig", 1);
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
        $__internal_aec4dd82e9bc4bd7d6597cacd3309907211ae838d54011d6c53eaeab556a0382 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aec4dd82e9bc4bd7d6597cacd3309907211ae838d54011d6c53eaeab556a0382->enter($__internal_aec4dd82e9bc4bd7d6597cacd3309907211ae838d54011d6c53eaeab556a0382_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_aec4dd82e9bc4bd7d6597cacd3309907211ae838d54011d6c53eaeab556a0382->leave($__internal_aec4dd82e9bc4bd7d6597cacd3309907211ae838d54011d6c53eaeab556a0382_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_ec9ac64814cab1bf02a5236b68fefd6b7da6f0d8b96b9ac6bac682977e1fc996 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ec9ac64814cab1bf02a5236b68fefd6b7da6f0d8b96b9ac6bac682977e1fc996->enter($__internal_ec9ac64814cab1bf02a5236b68fefd6b7da6f0d8b96b9ac6bac682977e1fc996_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:show_content.html.twig", "FOSUserBundle:Group:show.html.twig", 4)->display($context);
        
        $__internal_ec9ac64814cab1bf02a5236b68fefd6b7da6f0d8b96b9ac6bac682977e1fc996->leave($__internal_ec9ac64814cab1bf02a5236b68fefd6b7da6f0d8b96b9ac6bac682977e1fc996_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:show.html.twig";
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
{% include \"FOSUserBundle:Group:show_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:show.html.twig", "/home/pcapprenant17/Documents/Bou-e_corsaire_projet/vendor/friendsofsymfony/user-bundle/Resources/views/Group/show.html.twig");
    }
}
