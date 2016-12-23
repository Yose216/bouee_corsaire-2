<?php

/* FOSUserBundle:Resetting:check_email.html.twig */
class __TwigTemplate_f03ef4e349d527ad4a0501396b98cb7dcaf96801afdcd0f8a4735a50b27ad1ab extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:check_email.html.twig", 1);
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
        $__internal_b3763405b7e1ff87fc9b7f39c20734511f05171f99a904ee88fda599539ee27e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b3763405b7e1ff87fc9b7f39c20734511f05171f99a904ee88fda599539ee27e->enter($__internal_b3763405b7e1ff87fc9b7f39c20734511f05171f99a904ee88fda599539ee27e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b3763405b7e1ff87fc9b7f39c20734511f05171f99a904ee88fda599539ee27e->leave($__internal_b3763405b7e1ff87fc9b7f39c20734511f05171f99a904ee88fda599539ee27e_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_80e3e5dedbbfa429d5f4cfac4afe3e793f05eed915186a9a2e1ba1a07806a252 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_80e3e5dedbbfa429d5f4cfac4afe3e793f05eed915186a9a2e1ba1a07806a252->enter($__internal_80e3e5dedbbfa429d5f4cfac4afe3e793f05eed915186a9a2e1ba1a07806a252_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>
";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.check_email", array("%tokenLifetime%" => ($context["tokenLifetime"] ?? $this->getContext($context, "tokenLifetime"))), "FOSUserBundle"), "html", null, true);
        echo "
</p>
";
        
        $__internal_80e3e5dedbbfa429d5f4cfac4afe3e793f05eed915186a9a2e1ba1a07806a252->leave($__internal_80e3e5dedbbfa429d5f4cfac4afe3e793f05eed915186a9a2e1ba1a07806a252_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:check_email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 7,  40 => 6,  34 => 5,  11 => 1,);
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

{% trans_default_domain 'FOSUserBundle' %}

{% block fos_user_content %}
<p>
{{ 'resetting.check_email'|trans({'%tokenLifetime%': tokenLifetime}) }}
</p>
{% endblock %}
", "FOSUserBundle:Resetting:check_email.html.twig", "/home/pcapprenant17/Documents/Bou-e_corsaire_projet/vendor/friendsofsymfony/user-bundle/Resources/views/Resetting/check_email.html.twig");
    }
}
