<?php

/* FOSUserBundle:Registration:check_email.html.twig */
class __TwigTemplate_9b7f46cfd3d63a9ccbe04c967af7d4e58a4dbeb78ab5909feb827030412e8925 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_29c88030360a524b3ead1b93a27a34f8ac50322d3cc07068ce9d06b5109429a3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_29c88030360a524b3ead1b93a27a34f8ac50322d3cc07068ce9d06b5109429a3->enter($__internal_29c88030360a524b3ead1b93a27a34f8ac50322d3cc07068ce9d06b5109429a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:check_email.html.twig"));

        // line 1
        echo "

";
        // line 4
        echo "
";
        // line 5
        $this->displayBlock('fos_user_content', $context, $blocks);
        
        $__internal_29c88030360a524b3ead1b93a27a34f8ac50322d3cc07068ce9d06b5109429a3->leave($__internal_29c88030360a524b3ead1b93a27a34f8ac50322d3cc07068ce9d06b5109429a3_prof);

    }

    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_e6cb06d5788bee55b2b7da6a9e5f5795d720b5da4614a0175b2d1caa187d7a91 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e6cb06d5788bee55b2b7da6a9e5f5795d720b5da4614a0175b2d1caa187d7a91->enter($__internal_e6cb06d5788bee55b2b7da6a9e5f5795d720b5da4614a0175b2d1caa187d7a91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.check_email", array("%email%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_e6cb06d5788bee55b2b7da6a9e5f5795d720b5da4614a0175b2d1caa187d7a91->leave($__internal_e6cb06d5788bee55b2b7da6a9e5f5795d720b5da4614a0175b2d1caa187d7a91_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:check_email.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  42 => 6,  30 => 5,  27 => 4,  23 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("

{% trans_default_domain 'FOSUserBundle' %}

{% block fos_user_content %}
    <p>{{ 'registration.check_email'|trans({'%email%': user.email}) }}</p>
{% endblock fos_user_content %}
", "FOSUserBundle:Registration:check_email.html.twig", "/home/pcapprenant17/Documents/Bou-e_corsaire_projet/vendor/friendsofsymfony/user-bundle/Resources/views/Registration/check_email.html.twig");
    }
}
