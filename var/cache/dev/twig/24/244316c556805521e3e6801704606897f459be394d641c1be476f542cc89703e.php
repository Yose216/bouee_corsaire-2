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
        $__internal_732b8e8d3d954ade69bef9e4a811bd2c1e35e0d66d7ce30bd843ce7b20989b20 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_732b8e8d3d954ade69bef9e4a811bd2c1e35e0d66d7ce30bd843ce7b20989b20->enter($__internal_732b8e8d3d954ade69bef9e4a811bd2c1e35e0d66d7ce30bd843ce7b20989b20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_732b8e8d3d954ade69bef9e4a811bd2c1e35e0d66d7ce30bd843ce7b20989b20->leave($__internal_732b8e8d3d954ade69bef9e4a811bd2c1e35e0d66d7ce30bd843ce7b20989b20_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_08ad6714adcefcd6d4f4d6f581256015de6132a4823c448c33dcca6969ae611d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_08ad6714adcefcd6d4f4d6f581256015de6132a4823c448c33dcca6969ae611d->enter($__internal_08ad6714adcefcd6d4f4d6f581256015de6132a4823c448c33dcca6969ae611d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:edit_content.html.twig", "FOSUserBundle:Group:edit.html.twig", 4)->display($context);
        
        $__internal_08ad6714adcefcd6d4f4d6f581256015de6132a4823c448c33dcca6969ae611d->leave($__internal_08ad6714adcefcd6d4f4d6f581256015de6132a4823c448c33dcca6969ae611d_prof);

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
