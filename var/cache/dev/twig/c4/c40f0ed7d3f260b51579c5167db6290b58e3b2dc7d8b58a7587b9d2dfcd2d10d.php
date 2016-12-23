<?php

/* FOSUserBundle:Registration:email.txt.twig */
class __TwigTemplate_1fcd57b6d4774af0b56160aaf137f428a2366f0ef1a230a606d5a50cab70e12e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'subject' => array($this, 'block_subject'),
            'body_text' => array($this, 'block_body_text'),
            'body_html' => array($this, 'block_body_html'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b5fd25c17ae54e975663dd6fbcb8eb12acbea6fd62c31b0de160d0049c374b66 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b5fd25c17ae54e975663dd6fbcb8eb12acbea6fd62c31b0de160d0049c374b66->enter($__internal_b5fd25c17ae54e975663dd6fbcb8eb12acbea6fd62c31b0de160d0049c374b66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_b5fd25c17ae54e975663dd6fbcb8eb12acbea6fd62c31b0de160d0049c374b66->leave($__internal_b5fd25c17ae54e975663dd6fbcb8eb12acbea6fd62c31b0de160d0049c374b66_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_5a3a31d9237c917284f7de625eeb21beb5e1d4ac6a843c3050bad059893b8c6e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5a3a31d9237c917284f7de625eeb21beb5e1d4ac6a843c3050bad059893b8c6e->enter($__internal_5a3a31d9237c917284f7de625eeb21beb5e1d4ac6a843c3050bad059893b8c6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.subject", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => ($context["confirmationUrl"] ?? $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_5a3a31d9237c917284f7de625eeb21beb5e1d4ac6a843c3050bad059893b8c6e->leave($__internal_5a3a31d9237c917284f7de625eeb21beb5e1d4ac6a843c3050bad059893b8c6e_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_86be987c1ac45b938a5a3bb18bb4f08707ebe7606aa802a7ef01edb4408d5949 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_86be987c1ac45b938a5a3bb18bb4f08707ebe7606aa802a7ef01edb4408d5949->enter($__internal_86be987c1ac45b938a5a3bb18bb4f08707ebe7606aa802a7ef01edb4408d5949_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.message", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => ($context["confirmationUrl"] ?? $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_86be987c1ac45b938a5a3bb18bb4f08707ebe7606aa802a7ef01edb4408d5949->leave($__internal_86be987c1ac45b938a5a3bb18bb4f08707ebe7606aa802a7ef01edb4408d5949_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_6cb91ffdcf5f44bbec95af567ab139a8ba68846981f36a6ca6df19c747bd5d7e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6cb91ffdcf5f44bbec95af567ab139a8ba68846981f36a6ca6df19c747bd5d7e->enter($__internal_6cb91ffdcf5f44bbec95af567ab139a8ba68846981f36a6ca6df19c747bd5d7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_6cb91ffdcf5f44bbec95af567ab139a8ba68846981f36a6ca6df19c747bd5d7e->leave($__internal_6cb91ffdcf5f44bbec95af567ab139a8ba68846981f36a6ca6df19c747bd5d7e_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:email.txt.twig";
    }

    public function getDebugInfo()
    {
        return array (  66 => 12,  57 => 9,  51 => 7,  42 => 4,  36 => 2,  29 => 12,  27 => 7,  25 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'FOSUserBundle' %}
{% block subject %}
{% autoescape false %}
{{ 'registration.email.subject'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}
{% endautoescape %}
{% endblock %}
{% block body_text %}
{% autoescape false %}
{{ 'registration.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}
{% endautoescape %}
{% endblock %}
{% block body_html %}{% endblock %}
", "FOSUserBundle:Registration:email.txt.twig", "/home/pcapprenant17/Documents/Bou-e_corsaire_projet/vendor/friendsofsymfony/user-bundle/Resources/views/Registration/email.txt.twig");
    }
}
