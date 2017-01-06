<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_b03cae58721554eed700990dd402f48ea2b987dc2f619b7376d1ec29cccb2a08 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a8dd19c53356d5c098c39f6f938448023ce6ad14d1d3e63e4f966085951ecbe6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a8dd19c53356d5c098c39f6f938448023ce6ad14d1d3e63e4f966085951ecbe6->enter($__internal_a8dd19c53356d5c098c39f6f938448023ce6ad14d1d3e63e4f966085951ecbe6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a8dd19c53356d5c098c39f6f938448023ce6ad14d1d3e63e4f966085951ecbe6->leave($__internal_a8dd19c53356d5c098c39f6f938448023ce6ad14d1d3e63e4f966085951ecbe6_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_7ae74571bc0b7fd4526aa7234bae02673599d9b093e46c7b99a9b846365d6363 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7ae74571bc0b7fd4526aa7234bae02673599d9b093e46c7b99a9b846365d6363->enter($__internal_7ae74571bc0b7fd4526aa7234bae02673599d9b093e46c7b99a9b846365d6363_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_7ae74571bc0b7fd4526aa7234bae02673599d9b093e46c7b99a9b846365d6363->leave($__internal_7ae74571bc0b7fd4526aa7234bae02673599d9b093e46c7b99a9b846365d6363_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_9fddd481ae61da9ba1c4015200107dcbef0d6f2125c7c581939b95e0e7821a93 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9fddd481ae61da9ba1c4015200107dcbef0d6f2125c7c581939b95e0e7821a93->enter($__internal_9fddd481ae61da9ba1c4015200107dcbef0d6f2125c7c581939b95e0e7821a93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_9fddd481ae61da9ba1c4015200107dcbef0d6f2125c7c581939b95e0e7821a93->leave($__internal_9fddd481ae61da9ba1c4015200107dcbef0d6f2125c7c581939b95e0e7821a93_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_e7835220532ce711603a7b08ad1bf9a4f96e8de09a5de0f808136fc1df62929d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e7835220532ce711603a7b08ad1bf9a4f96e8de09a5de0f808136fc1df62929d->enter($__internal_e7835220532ce711603a7b08ad1bf9a4f96e8de09a5de0f808136fc1df62929d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_e7835220532ce711603a7b08ad1bf9a4f96e8de09a5de0f808136fc1df62929d->leave($__internal_e7835220532ce711603a7b08ad1bf9a4f96e8de09a5de0f808136fc1df62929d_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "/home/pcapprenant17/Documents/Bou-e_corsaire_projet/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
