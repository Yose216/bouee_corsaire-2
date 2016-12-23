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
        $__internal_e9d650a49ee8fd99b6509fa848d5b454555a2f13db84206ecc024d53e5caccd9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e9d650a49ee8fd99b6509fa848d5b454555a2f13db84206ecc024d53e5caccd9->enter($__internal_e9d650a49ee8fd99b6509fa848d5b454555a2f13db84206ecc024d53e5caccd9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e9d650a49ee8fd99b6509fa848d5b454555a2f13db84206ecc024d53e5caccd9->leave($__internal_e9d650a49ee8fd99b6509fa848d5b454555a2f13db84206ecc024d53e5caccd9_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_5a62efe36693e51efc3c3a9ee088a29c35a6296c903dba99e3db4b3c92f8af10 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5a62efe36693e51efc3c3a9ee088a29c35a6296c903dba99e3db4b3c92f8af10->enter($__internal_5a62efe36693e51efc3c3a9ee088a29c35a6296c903dba99e3db4b3c92f8af10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:request_content.html.twig", "FOSUserBundle:Resetting:request.html.twig", 4)->display($context);
        
        $__internal_5a62efe36693e51efc3c3a9ee088a29c35a6296c903dba99e3db4b3c92f8af10->leave($__internal_5a62efe36693e51efc3c3a9ee088a29c35a6296c903dba99e3db4b3c92f8af10_prof);

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
