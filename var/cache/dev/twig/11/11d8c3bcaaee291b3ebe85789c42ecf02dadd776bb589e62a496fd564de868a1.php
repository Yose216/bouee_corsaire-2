<?php

/* FOSUserBundle:Resetting:request.html.twig */
class __TwigTemplate_e1529cc44b1a8e68cae1a8e482e46474615c7f4440f632745b757f1692af8a75 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:request.html.twig", 1);
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
        $__internal_366ee7c6e75d10817c6bc8e21b2c15c367395664b5e8e9b35dde8318f9158e2a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_366ee7c6e75d10817c6bc8e21b2c15c367395664b5e8e9b35dde8318f9158e2a->enter($__internal_366ee7c6e75d10817c6bc8e21b2c15c367395664b5e8e9b35dde8318f9158e2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_366ee7c6e75d10817c6bc8e21b2c15c367395664b5e8e9b35dde8318f9158e2a->leave($__internal_366ee7c6e75d10817c6bc8e21b2c15c367395664b5e8e9b35dde8318f9158e2a_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_1f9af2666f74070e7fb013a01b59cf79f6aec9292c20024d81f27540774d3c84 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1f9af2666f74070e7fb013a01b59cf79f6aec9292c20024d81f27540774d3c84->enter($__internal_1f9af2666f74070e7fb013a01b59cf79f6aec9292c20024d81f27540774d3c84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:request_content.html.twig", "FOSUserBundle:Resetting:request.html.twig", 4)->display($context);
        
        $__internal_1f9af2666f74070e7fb013a01b59cf79f6aec9292c20024d81f27540774d3c84->leave($__internal_1f9af2666f74070e7fb013a01b59cf79f6aec9292c20024d81f27540774d3c84_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:request.html.twig";
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
{% include \"FOSUserBundle:Resetting:request_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Resetting:request.html.twig", "/home/pcapprenant17/Documents/Bou-e_corsaire_projet/vendor/friendsofsymfony/user-bundle/Resources/views/Resetting/request.html.twig");
    }
}
