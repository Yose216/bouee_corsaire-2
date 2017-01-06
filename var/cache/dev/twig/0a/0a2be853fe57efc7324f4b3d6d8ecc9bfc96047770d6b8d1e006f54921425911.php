<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_462a1ca018458cfc2eea4660297591fe35129192fbf19c7b5d06cb074bfbb934 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
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
        $__internal_84936487311f98635410b955eebe69b142527f2ca3d5842d0f2ecf3b3c622fb7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_84936487311f98635410b955eebe69b142527f2ca3d5842d0f2ecf3b3c622fb7->enter($__internal_84936487311f98635410b955eebe69b142527f2ca3d5842d0f2ecf3b3c622fb7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_84936487311f98635410b955eebe69b142527f2ca3d5842d0f2ecf3b3c622fb7->leave($__internal_84936487311f98635410b955eebe69b142527f2ca3d5842d0f2ecf3b3c622fb7_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_34c3df53864b85d9ec3fc5223e262719b21fe789f9329e8b2144f3ac67f482cb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_34c3df53864b85d9ec3fc5223e262719b21fe789f9329e8b2144f3ac67f482cb->enter($__internal_34c3df53864b85d9ec3fc5223e262719b21fe789f9329e8b2144f3ac67f482cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_34c3df53864b85d9ec3fc5223e262719b21fe789f9329e8b2144f3ac67f482cb->leave($__internal_34c3df53864b85d9ec3fc5223e262719b21fe789f9329e8b2144f3ac67f482cb_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_fa0bee3077c2bf2650a8e32044c215fa20d5f474610a6fd2ae09c37b774d225a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fa0bee3077c2bf2650a8e32044c215fa20d5f474610a6fd2ae09c37b774d225a->enter($__internal_fa0bee3077c2bf2650a8e32044c215fa20d5f474610a6fd2ae09c37b774d225a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_fa0bee3077c2bf2650a8e32044c215fa20d5f474610a6fd2ae09c37b774d225a->leave($__internal_fa0bee3077c2bf2650a8e32044c215fa20d5f474610a6fd2ae09c37b774d225a_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_f2cc750999dfdd2bb056b64ca404ab853a6221d08b69dc2522c5d6e22435393e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f2cc750999dfdd2bb056b64ca404ab853a6221d08b69dc2522c5d6e22435393e->enter($__internal_f2cc750999dfdd2bb056b64ca404ab853a6221d08b69dc2522c5d6e22435393e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_f2cc750999dfdd2bb056b64ca404ab853a6221d08b69dc2522c5d6e22435393e->leave($__internal_f2cc750999dfdd2bb056b64ca404ab853a6221d08b69dc2522c5d6e22435393e_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
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
", "WebProfilerBundle:Collector:router.html.twig", "/home/pcapprenant17/Documents/Bou-e_corsaire_projet/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
