<?php

/* FOSUserBundle:Group:edit.html.twig */
class __TwigTemplate_0f5d898ca3c0eb14f9eccd56f3ee5f76bd179e11e62428e034b906401dfe1cbc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:edit.html.twig", 1);
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
        $__internal_dcccba31a358940c400bfc0b907fd2af9627d6dcd57a71e32eb7ea559d782de1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dcccba31a358940c400bfc0b907fd2af9627d6dcd57a71e32eb7ea559d782de1->enter($__internal_dcccba31a358940c400bfc0b907fd2af9627d6dcd57a71e32eb7ea559d782de1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dcccba31a358940c400bfc0b907fd2af9627d6dcd57a71e32eb7ea559d782de1->leave($__internal_dcccba31a358940c400bfc0b907fd2af9627d6dcd57a71e32eb7ea559d782de1_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_f60dd2057d549a946dd07bd1cdd40208f0a6ee395d7c982553d574fc514a22ea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f60dd2057d549a946dd07bd1cdd40208f0a6ee395d7c982553d574fc514a22ea->enter($__internal_f60dd2057d549a946dd07bd1cdd40208f0a6ee395d7c982553d574fc514a22ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:edit_content.html.twig", "FOSUserBundle:Group:edit.html.twig", 4)->display($context);
        
        $__internal_f60dd2057d549a946dd07bd1cdd40208f0a6ee395d7c982553d574fc514a22ea->leave($__internal_f60dd2057d549a946dd07bd1cdd40208f0a6ee395d7c982553d574fc514a22ea_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:edit.html.twig";
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
{% include \"FOSUserBundle:Group:edit_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:edit.html.twig", "/home/pcapprenant17/Documents/Bou-e_corsaire_projet/vendor/friendsofsymfony/user-bundle/Resources/views/Group/edit.html.twig");
    }
}
