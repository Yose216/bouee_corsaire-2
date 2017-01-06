<?php

/* FOSUserBundle:Group:new.html.twig */
class __TwigTemplate_1ce4975e8a62b95f72764f54c2d368904a02a255fc26883d9424fdd5fa318a49 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:new.html.twig", 1);
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
        $__internal_0b5f7301278684944ed382af04b4c10ccbf090d07fc5e9f3e44aa3c26381d1a8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0b5f7301278684944ed382af04b4c10ccbf090d07fc5e9f3e44aa3c26381d1a8->enter($__internal_0b5f7301278684944ed382af04b4c10ccbf090d07fc5e9f3e44aa3c26381d1a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0b5f7301278684944ed382af04b4c10ccbf090d07fc5e9f3e44aa3c26381d1a8->leave($__internal_0b5f7301278684944ed382af04b4c10ccbf090d07fc5e9f3e44aa3c26381d1a8_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_5487b085bd60f966d6709fe498779cad47f2cee057d6b2aec71c07b2518adae8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5487b085bd60f966d6709fe498779cad47f2cee057d6b2aec71c07b2518adae8->enter($__internal_5487b085bd60f966d6709fe498779cad47f2cee057d6b2aec71c07b2518adae8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:new_content.html.twig", "FOSUserBundle:Group:new.html.twig", 4)->display($context);
        
        $__internal_5487b085bd60f966d6709fe498779cad47f2cee057d6b2aec71c07b2518adae8->leave($__internal_5487b085bd60f966d6709fe498779cad47f2cee057d6b2aec71c07b2518adae8_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:new.html.twig";
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
{% include \"FOSUserBundle:Group:new_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:new.html.twig", "/home/pcapprenant17/Documents/Bou-e_corsaire_projet/vendor/friendsofsymfony/user-bundle/Resources/views/Group/new.html.twig");
    }
}
