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
        $__internal_ca4e6116cd15485904ba1e7a4b3dc61a9d465d1d2e5bea77b1c3c2af31cabf34 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ca4e6116cd15485904ba1e7a4b3dc61a9d465d1d2e5bea77b1c3c2af31cabf34->enter($__internal_ca4e6116cd15485904ba1e7a4b3dc61a9d465d1d2e5bea77b1c3c2af31cabf34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ca4e6116cd15485904ba1e7a4b3dc61a9d465d1d2e5bea77b1c3c2af31cabf34->leave($__internal_ca4e6116cd15485904ba1e7a4b3dc61a9d465d1d2e5bea77b1c3c2af31cabf34_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_c16b1130a6a498d3f9ac67ecbf78bb5850b9d7468ba65923900309a8b872f8dd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c16b1130a6a498d3f9ac67ecbf78bb5850b9d7468ba65923900309a8b872f8dd->enter($__internal_c16b1130a6a498d3f9ac67ecbf78bb5850b9d7468ba65923900309a8b872f8dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:new_content.html.twig", "FOSUserBundle:Group:new.html.twig", 4)->display($context);
        
        $__internal_c16b1130a6a498d3f9ac67ecbf78bb5850b9d7468ba65923900309a8b872f8dd->leave($__internal_c16b1130a6a498d3f9ac67ecbf78bb5850b9d7468ba65923900309a8b872f8dd_prof);

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
