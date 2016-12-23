<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_e69d4087fbc24a021b8f4b142f04eabff9c05d120cd11799965a0660f21a37c9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
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
        $__internal_2d9f7fe43fbc24a9132dc6e1c0ba11608562c049f00ade4c3436c13c088a0db6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2d9f7fe43fbc24a9132dc6e1c0ba11608562c049f00ade4c3436c13c088a0db6->enter($__internal_2d9f7fe43fbc24a9132dc6e1c0ba11608562c049f00ade4c3436c13c088a0db6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2d9f7fe43fbc24a9132dc6e1c0ba11608562c049f00ade4c3436c13c088a0db6->leave($__internal_2d9f7fe43fbc24a9132dc6e1c0ba11608562c049f00ade4c3436c13c088a0db6_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_e004564e1c414bcfa2993f0515d88ff0251e21ec9fe1c2520d2fb855a80dc6f7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e004564e1c414bcfa2993f0515d88ff0251e21ec9fe1c2520d2fb855a80dc6f7->enter($__internal_e004564e1c414bcfa2993f0515d88ff0251e21ec9fe1c2520d2fb855a80dc6f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_e004564e1c414bcfa2993f0515d88ff0251e21ec9fe1c2520d2fb855a80dc6f7->leave($__internal_e004564e1c414bcfa2993f0515d88ff0251e21ec9fe1c2520d2fb855a80dc6f7_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_fa446536a26dd2a8718bcce206e5642ce882fe7448632726d9f4586ff4c364da = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fa446536a26dd2a8718bcce206e5642ce882fe7448632726d9f4586ff4c364da->enter($__internal_fa446536a26dd2a8718bcce206e5642ce882fe7448632726d9f4586ff4c364da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_fa446536a26dd2a8718bcce206e5642ce882fe7448632726d9f4586ff4c364da->leave($__internal_fa446536a26dd2a8718bcce206e5642ce882fe7448632726d9f4586ff4c364da_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_df1c3af3580439011b0d3d99f2ecbe23a0f795602c231ca677e896b1475feea0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_df1c3af3580439011b0d3d99f2ecbe23a0f795602c231ca677e896b1475feea0->enter($__internal_df1c3af3580439011b0d3d99f2ecbe23a0f795602c231ca677e896b1475feea0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_df1c3af3580439011b0d3d99f2ecbe23a0f795602c231ca677e896b1475feea0->leave($__internal_df1c3af3580439011b0d3d99f2ecbe23a0f795602c231ca677e896b1475feea0_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
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
", "@Twig/Exception/exception_full.html.twig", "/home/pcapprenant17/Documents/Bou-e_corsaire_projet/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
