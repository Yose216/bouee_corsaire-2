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
        $__internal_e56ae9518a12718e63b88275653ae9a801e000381c6a050f8bc35611124bc403 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e56ae9518a12718e63b88275653ae9a801e000381c6a050f8bc35611124bc403->enter($__internal_e56ae9518a12718e63b88275653ae9a801e000381c6a050f8bc35611124bc403_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e56ae9518a12718e63b88275653ae9a801e000381c6a050f8bc35611124bc403->leave($__internal_e56ae9518a12718e63b88275653ae9a801e000381c6a050f8bc35611124bc403_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_5837ca2e7e53975d7c4f2aebf41ef764de679d5909f580c8d4494f4fb5688f65 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5837ca2e7e53975d7c4f2aebf41ef764de679d5909f580c8d4494f4fb5688f65->enter($__internal_5837ca2e7e53975d7c4f2aebf41ef764de679d5909f580c8d4494f4fb5688f65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:reset_content.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 4)->display($context);
        
        $__internal_5837ca2e7e53975d7c4f2aebf41ef764de679d5909f580c8d4494f4fb5688f65->leave($__internal_5837ca2e7e53975d7c4f2aebf41ef764de679d5909f580c8d4494f4fb5688f65_prof);

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
