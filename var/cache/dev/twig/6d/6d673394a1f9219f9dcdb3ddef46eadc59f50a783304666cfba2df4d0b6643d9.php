<?php

/* FOSUserBundle:Resetting:reset.html.twig */
class __TwigTemplate_f53511084a839467a5dd843c7d5a48b2b159a151ba8a8ad8ffec6309f9569bf0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 1);
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
        $__internal_ba8953d79eafd5eb36d52bd147c96224d6a8924944358607ccce3871b01bbf88 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ba8953d79eafd5eb36d52bd147c96224d6a8924944358607ccce3871b01bbf88->enter($__internal_ba8953d79eafd5eb36d52bd147c96224d6a8924944358607ccce3871b01bbf88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ba8953d79eafd5eb36d52bd147c96224d6a8924944358607ccce3871b01bbf88->leave($__internal_ba8953d79eafd5eb36d52bd147c96224d6a8924944358607ccce3871b01bbf88_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_e5a6ea6f235fcea2e8406fb9d65b3a660a6df698b2ff14ec21ed30e6e61c3f74 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e5a6ea6f235fcea2e8406fb9d65b3a660a6df698b2ff14ec21ed30e6e61c3f74->enter($__internal_e5a6ea6f235fcea2e8406fb9d65b3a660a6df698b2ff14ec21ed30e6e61c3f74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:reset_content.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 4)->display($context);
        
        $__internal_e5a6ea6f235fcea2e8406fb9d65b3a660a6df698b2ff14ec21ed30e6e61c3f74->leave($__internal_e5a6ea6f235fcea2e8406fb9d65b3a660a6df698b2ff14ec21ed30e6e61c3f74_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:reset.html.twig";
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
{% include \"FOSUserBundle:Resetting:reset_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Resetting:reset.html.twig", "/home/pcapprenant17/Documents/Bou-e_corsaire_projet/vendor/friendsofsymfony/user-bundle/Resources/views/Resetting/reset.html.twig");
    }
}
