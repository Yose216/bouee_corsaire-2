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
        $__internal_1c3d847183a6ee05fdde52d45c9d26ff6a247c30826d76e64af2e5828f2c2fc6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1c3d847183a6ee05fdde52d45c9d26ff6a247c30826d76e64af2e5828f2c2fc6->enter($__internal_1c3d847183a6ee05fdde52d45c9d26ff6a247c30826d76e64af2e5828f2c2fc6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1c3d847183a6ee05fdde52d45c9d26ff6a247c30826d76e64af2e5828f2c2fc6->leave($__internal_1c3d847183a6ee05fdde52d45c9d26ff6a247c30826d76e64af2e5828f2c2fc6_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_491650d0cc33e3f7cd66899fd5351b3f718a0a5a620dbece14344bff85ac48b6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_491650d0cc33e3f7cd66899fd5351b3f718a0a5a620dbece14344bff85ac48b6->enter($__internal_491650d0cc33e3f7cd66899fd5351b3f718a0a5a620dbece14344bff85ac48b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_491650d0cc33e3f7cd66899fd5351b3f718a0a5a620dbece14344bff85ac48b6->leave($__internal_491650d0cc33e3f7cd66899fd5351b3f718a0a5a620dbece14344bff85ac48b6_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_22dc5bef1792f26f00854c539be3258841c89571cf56e29f7f9a4f8c4db8f9bd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_22dc5bef1792f26f00854c539be3258841c89571cf56e29f7f9a4f8c4db8f9bd->enter($__internal_22dc5bef1792f26f00854c539be3258841c89571cf56e29f7f9a4f8c4db8f9bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_22dc5bef1792f26f00854c539be3258841c89571cf56e29f7f9a4f8c4db8f9bd->leave($__internal_22dc5bef1792f26f00854c539be3258841c89571cf56e29f7f9a4f8c4db8f9bd_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_dda9f710d77f88912fbfa9249b664680d6a78f55392b03c3066af9c029635468 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dda9f710d77f88912fbfa9249b664680d6a78f55392b03c3066af9c029635468->enter($__internal_dda9f710d77f88912fbfa9249b664680d6a78f55392b03c3066af9c029635468_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_dda9f710d77f88912fbfa9249b664680d6a78f55392b03c3066af9c029635468->leave($__internal_dda9f710d77f88912fbfa9249b664680d6a78f55392b03c3066af9c029635468_prof);

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
