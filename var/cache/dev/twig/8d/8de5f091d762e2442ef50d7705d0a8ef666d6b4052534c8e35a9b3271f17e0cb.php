<?php

/* FOSUserBundle:Resetting:email.txt.twig */
class __TwigTemplate_4bcf171700434c4290c0235e4e8aa9aae07c99b964b50b746014f13480998b1d extends Twig_Template
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
        $__internal_3f8d894019787cd9747441157f187bbf77008e8e22c2ba2734f995e7f87f2615 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3f8d894019787cd9747441157f187bbf77008e8e22c2ba2734f995e7f87f2615->enter($__internal_3f8d894019787cd9747441157f187bbf77008e8e22c2ba2734f995e7f87f2615_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_3f8d894019787cd9747441157f187bbf77008e8e22c2ba2734f995e7f87f2615->leave($__internal_3f8d894019787cd9747441157f187bbf77008e8e22c2ba2734f995e7f87f2615_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_afcfa513155547975b22083177b96fb2abfed9188c1befe9da12685cb1cd16aa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_afcfa513155547975b22083177b96fb2abfed9188c1befe9da12685cb1cd16aa->enter($__internal_afcfa513155547975b22083177b96fb2abfed9188c1befe9da12685cb1cd16aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.subject", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        echo "
";
        
        $__internal_afcfa513155547975b22083177b96fb2abfed9188c1befe9da12685cb1cd16aa->leave($__internal_afcfa513155547975b22083177b96fb2abfed9188c1befe9da12685cb1cd16aa_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_58d2a069b0e2013d928cc53ed4d7ac1e594f7ffded26f3fb2e9815c48a9ac33b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_58d2a069b0e2013d928cc53ed4d7ac1e594f7ffded26f3fb2e9815c48a9ac33b->enter($__internal_58d2a069b0e2013d928cc53ed4d7ac1e594f7ffded26f3fb2e9815c48a9ac33b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.message", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => ($context["confirmationUrl"] ?? $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_58d2a069b0e2013d928cc53ed4d7ac1e594f7ffded26f3fb2e9815c48a9ac33b->leave($__internal_58d2a069b0e2013d928cc53ed4d7ac1e594f7ffded26f3fb2e9815c48a9ac33b_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_abc2ccb7fdbfb1f106817ecbcc465ff6fbf7f587d561a69a65fc9b58a163ba00 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_abc2ccb7fdbfb1f106817ecbcc465ff6fbf7f587d561a69a65fc9b58a163ba00->enter($__internal_abc2ccb7fdbfb1f106817ecbcc465ff6fbf7f587d561a69a65fc9b58a163ba00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_abc2ccb7fdbfb1f106817ecbcc465ff6fbf7f587d561a69a65fc9b58a163ba00->leave($__internal_abc2ccb7fdbfb1f106817ecbcc465ff6fbf7f587d561a69a65fc9b58a163ba00_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:email.txt.twig";
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
{{ 'resetting.email.subject'|trans({'%username%': user.username}) }}
{% endautoescape %}
{% endblock %}
{% block body_text %}
{% autoescape false %}
{{ 'resetting.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}
{% endautoescape %}
{% endblock %}
{% block body_html %}{% endblock %}
", "FOSUserBundle:Resetting:email.txt.twig", "/home/pcapprenant17/Documents/Bou-e_corsaire_projet/vendor/friendsofsymfony/user-bundle/Resources/views/Resetting/email.txt.twig");
    }
}
