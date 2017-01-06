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
        $__internal_062f0b38e63d9a9a0cfd0f8e3784e3650c02ed41ca1f48eec40889111b815e74 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_062f0b38e63d9a9a0cfd0f8e3784e3650c02ed41ca1f48eec40889111b815e74->enter($__internal_062f0b38e63d9a9a0cfd0f8e3784e3650c02ed41ca1f48eec40889111b815e74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_062f0b38e63d9a9a0cfd0f8e3784e3650c02ed41ca1f48eec40889111b815e74->leave($__internal_062f0b38e63d9a9a0cfd0f8e3784e3650c02ed41ca1f48eec40889111b815e74_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_1104e1b19f3157eea237ba52ec43fd82fd2117c3e16d83fa5b4124be5a3edf65 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1104e1b19f3157eea237ba52ec43fd82fd2117c3e16d83fa5b4124be5a3edf65->enter($__internal_1104e1b19f3157eea237ba52ec43fd82fd2117c3e16d83fa5b4124be5a3edf65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.subject", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => ($context["confirmationUrl"] ?? $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_1104e1b19f3157eea237ba52ec43fd82fd2117c3e16d83fa5b4124be5a3edf65->leave($__internal_1104e1b19f3157eea237ba52ec43fd82fd2117c3e16d83fa5b4124be5a3edf65_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_088a0fea396da555d3ed936a9dee5f6e544c0b7b1b5cfc43dfe5531a1dcc4b86 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_088a0fea396da555d3ed936a9dee5f6e544c0b7b1b5cfc43dfe5531a1dcc4b86->enter($__internal_088a0fea396da555d3ed936a9dee5f6e544c0b7b1b5cfc43dfe5531a1dcc4b86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.message", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => ($context["confirmationUrl"] ?? $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_088a0fea396da555d3ed936a9dee5f6e544c0b7b1b5cfc43dfe5531a1dcc4b86->leave($__internal_088a0fea396da555d3ed936a9dee5f6e544c0b7b1b5cfc43dfe5531a1dcc4b86_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_5d1a475e221c65bf9f2d7629a15a57765243712d5dc7cfeb7c739fa4654c8db3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5d1a475e221c65bf9f2d7629a15a57765243712d5dc7cfeb7c739fa4654c8db3->enter($__internal_5d1a475e221c65bf9f2d7629a15a57765243712d5dc7cfeb7c739fa4654c8db3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_5d1a475e221c65bf9f2d7629a15a57765243712d5dc7cfeb7c739fa4654c8db3->leave($__internal_5d1a475e221c65bf9f2d7629a15a57765243712d5dc7cfeb7c739fa4654c8db3_prof);

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
