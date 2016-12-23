<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_81faf4f81c52739da9092b151a38cfefbcf161af21a8f60ae4983768ff068d12 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5a1e139ff1e732e1c92d361c3604eec3a699ad2a6db10a34d67291ad0caf3cb6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5a1e139ff1e732e1c92d361c3604eec3a699ad2a6db10a34d67291ad0caf3cb6->enter($__internal_5a1e139ff1e732e1c92d361c3604eec3a699ad2a6db10a34d67291ad0caf3cb6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a1e139ff1e732e1c92d361c3604eec3a699ad2a6db10a34d67291ad0caf3cb6->leave($__internal_5a1e139ff1e732e1c92d361c3604eec3a699ad2a6db10a34d67291ad0caf3cb6_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_b71bf8b038b312605ca5f1ce3b17779364d31ea98b460eb245fa6bb18e99d58f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b71bf8b038b312605ca5f1ce3b17779364d31ea98b460eb245fa6bb18e99d58f->enter($__internal_b71bf8b038b312605ca5f1ce3b17779364d31ea98b460eb245fa6bb18e99d58f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_b71bf8b038b312605ca5f1ce3b17779364d31ea98b460eb245fa6bb18e99d58f->leave($__internal_b71bf8b038b312605ca5f1ce3b17779364d31ea98b460eb245fa6bb18e99d58f_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_90c16a3f21e0d43e7242810b8a1150e9132f659c7f4057d5e6ab4589b3c37ee8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_90c16a3f21e0d43e7242810b8a1150e9132f659c7f4057d5e6ab4589b3c37ee8->enter($__internal_90c16a3f21e0d43e7242810b8a1150e9132f659c7f4057d5e6ab4589b3c37ee8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_90c16a3f21e0d43e7242810b8a1150e9132f659c7f4057d5e6ab4589b3c37ee8->leave($__internal_90c16a3f21e0d43e7242810b8a1150e9132f659c7f4057d5e6ab4589b3c37ee8_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_2cf88e673bf30191ab87650527bd7b0eea14e114356f2d6330e22f3b86d27f41 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2cf88e673bf30191ab87650527bd7b0eea14e114356f2d6330e22f3b86d27f41->enter($__internal_2cf88e673bf30191ab87650527bd7b0eea14e114356f2d6330e22f3b86d27f41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_2cf88e673bf30191ab87650527bd7b0eea14e114356f2d6330e22f3b86d27f41->leave($__internal_2cf88e673bf30191ab87650527bd7b0eea14e114356f2d6330e22f3b86d27f41_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <link href=\"{{ absolute_url(asset('bundles/framework/css/exception.css')) }}\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "TwigBundle:Exception:exception_full.html.twig", "/home/pcapprenant17/Documents/Bou-e_corsaire_projet/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
