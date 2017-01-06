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
        $__internal_f457490c0fc92c2cc58579fcc77948c3aea022a909035e87e6765b9a2fa1560c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f457490c0fc92c2cc58579fcc77948c3aea022a909035e87e6765b9a2fa1560c->enter($__internal_f457490c0fc92c2cc58579fcc77948c3aea022a909035e87e6765b9a2fa1560c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_f457490c0fc92c2cc58579fcc77948c3aea022a909035e87e6765b9a2fa1560c->leave($__internal_f457490c0fc92c2cc58579fcc77948c3aea022a909035e87e6765b9a2fa1560c_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_09599b321b9a6823edf6c0b1e4621f41b10d75789dad01602ebeec93cddcfb6c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_09599b321b9a6823edf6c0b1e4621f41b10d75789dad01602ebeec93cddcfb6c->enter($__internal_09599b321b9a6823edf6c0b1e4621f41b10d75789dad01602ebeec93cddcfb6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.subject", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        echo "
";
        
        $__internal_09599b321b9a6823edf6c0b1e4621f41b10d75789dad01602ebeec93cddcfb6c->leave($__internal_09599b321b9a6823edf6c0b1e4621f41b10d75789dad01602ebeec93cddcfb6c_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_b8f9cb07df1882c4f7a7574a5417ea45db6801b3b0757d12df7176eef877067f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b8f9cb07df1882c4f7a7574a5417ea45db6801b3b0757d12df7176eef877067f->enter($__internal_b8f9cb07df1882c4f7a7574a5417ea45db6801b3b0757d12df7176eef877067f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.message", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => ($context["confirmationUrl"] ?? $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_b8f9cb07df1882c4f7a7574a5417ea45db6801b3b0757d12df7176eef877067f->leave($__internal_b8f9cb07df1882c4f7a7574a5417ea45db6801b3b0757d12df7176eef877067f_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_4f0c8537d2b27fec0fb407f49cde18abf3ac7a998d92c1dda4a136e8ca4677fe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4f0c8537d2b27fec0fb407f49cde18abf3ac7a998d92c1dda4a136e8ca4677fe->enter($__internal_4f0c8537d2b27fec0fb407f49cde18abf3ac7a998d92c1dda4a136e8ca4677fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_4f0c8537d2b27fec0fb407f49cde18abf3ac7a998d92c1dda4a136e8ca4677fe->leave($__internal_4f0c8537d2b27fec0fb407f49cde18abf3ac7a998d92c1dda4a136e8ca4677fe_prof);

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
