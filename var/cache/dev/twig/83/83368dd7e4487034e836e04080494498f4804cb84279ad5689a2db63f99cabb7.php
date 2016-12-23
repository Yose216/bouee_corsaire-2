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
        $__internal_ad709aaa9ede354da5d7254a8ece21517f1ba39201ebd2b2852a628011c38534 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ad709aaa9ede354da5d7254a8ece21517f1ba39201ebd2b2852a628011c38534->enter($__internal_ad709aaa9ede354da5d7254a8ece21517f1ba39201ebd2b2852a628011c38534_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ad709aaa9ede354da5d7254a8ece21517f1ba39201ebd2b2852a628011c38534->leave($__internal_ad709aaa9ede354da5d7254a8ece21517f1ba39201ebd2b2852a628011c38534_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_0a54d8e8001d47f241f08a6caa8537116bfc75391963c9ff6d33dbcb8be30b58 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0a54d8e8001d47f241f08a6caa8537116bfc75391963c9ff6d33dbcb8be30b58->enter($__internal_0a54d8e8001d47f241f08a6caa8537116bfc75391963c9ff6d33dbcb8be30b58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_0a54d8e8001d47f241f08a6caa8537116bfc75391963c9ff6d33dbcb8be30b58->leave($__internal_0a54d8e8001d47f241f08a6caa8537116bfc75391963c9ff6d33dbcb8be30b58_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_cf7b7033e9f2fbffb16ab30ff8a8e2605ad9a54d65f6d9651704ce1161fdceaa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cf7b7033e9f2fbffb16ab30ff8a8e2605ad9a54d65f6d9651704ce1161fdceaa->enter($__internal_cf7b7033e9f2fbffb16ab30ff8a8e2605ad9a54d65f6d9651704ce1161fdceaa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_cf7b7033e9f2fbffb16ab30ff8a8e2605ad9a54d65f6d9651704ce1161fdceaa->leave($__internal_cf7b7033e9f2fbffb16ab30ff8a8e2605ad9a54d65f6d9651704ce1161fdceaa_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_7dfdb60968b7e1ba50c3d9ca4d7bd84ee0efd679a63dffc93a691c57be811781 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7dfdb60968b7e1ba50c3d9ca4d7bd84ee0efd679a63dffc93a691c57be811781->enter($__internal_7dfdb60968b7e1ba50c3d9ca4d7bd84ee0efd679a63dffc93a691c57be811781_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_7dfdb60968b7e1ba50c3d9ca4d7bd84ee0efd679a63dffc93a691c57be811781->leave($__internal_7dfdb60968b7e1ba50c3d9ca4d7bd84ee0efd679a63dffc93a691c57be811781_prof);

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
