<?php

/* @FOSUser/Profile/show.html.twig */
class __TwigTemplate_ddbf576a444a05b61777f13f8bf8c162b89ef255956dd69518801a44cb1e4696 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Profile/show.html.twig", 1);
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
        $__internal_d09f63ff4c1c2386f1791ad0a78e691d6b1fe18f2348909d9d54ae09ac9ac907 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d09f63ff4c1c2386f1791ad0a78e691d6b1fe18f2348909d9d54ae09ac9ac907->enter($__internal_d09f63ff4c1c2386f1791ad0a78e691d6b1fe18f2348909d9d54ae09ac9ac907_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d09f63ff4c1c2386f1791ad0a78e691d6b1fe18f2348909d9d54ae09ac9ac907->leave($__internal_d09f63ff4c1c2386f1791ad0a78e691d6b1fe18f2348909d9d54ae09ac9ac907_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_9965f3de42438beea3ef436a411a910a2e88374b86e353116ccad0520ef25b21 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9965f3de42438beea3ef436a411a910a2e88374b86e353116ccad0520ef25b21->enter($__internal_9965f3de42438beea3ef436a411a910a2e88374b86e353116ccad0520ef25b21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:show_content.html.twig", "@FOSUser/Profile/show.html.twig", 4)->display($context);
        
        $__internal_9965f3de42438beea3ef436a411a910a2e88374b86e353116ccad0520ef25b21->leave($__internal_9965f3de42438beea3ef436a411a910a2e88374b86e353116ccad0520ef25b21_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Profile/show.html.twig";
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
{% include \"FOSUserBundle:Profile:show_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Profile/show.html.twig", "/home/pcapprenant17/Documents/Bou-e_corsaire_projet/vendor/friendsofsymfony/user-bundle/Resources/views/Profile/show.html.twig");
    }
}
