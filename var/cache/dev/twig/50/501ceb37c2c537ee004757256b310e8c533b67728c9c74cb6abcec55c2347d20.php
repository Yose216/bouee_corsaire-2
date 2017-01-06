<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_9284b212f60bb83e1424a68df7e5d7067b7f46fc2d45ca88f1b1c172214b1e0b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_9cebbd1d21bb8d38ed0144a8318dea4cd87969fcf3005e0d7974e390862ceab5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9cebbd1d21bb8d38ed0144a8318dea4cd87969fcf3005e0d7974e390862ceab5->enter($__internal_9cebbd1d21bb8d38ed0144a8318dea4cd87969fcf3005e0d7974e390862ceab5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9cebbd1d21bb8d38ed0144a8318dea4cd87969fcf3005e0d7974e390862ceab5->leave($__internal_9cebbd1d21bb8d38ed0144a8318dea4cd87969fcf3005e0d7974e390862ceab5_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_519cbf036ecb4dba10f8571ebb12efecc86ba3f25eb81caf1485485aaa01bb85 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_519cbf036ecb4dba10f8571ebb12efecc86ba3f25eb81caf1485485aaa01bb85->enter($__internal_519cbf036ecb4dba10f8571ebb12efecc86ba3f25eb81caf1485485aaa01bb85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_519cbf036ecb4dba10f8571ebb12efecc86ba3f25eb81caf1485485aaa01bb85->leave($__internal_519cbf036ecb4dba10f8571ebb12efecc86ba3f25eb81caf1485485aaa01bb85_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_116db7b53490d69183dc3a31d05639b6a7e9b5f0dcaf338277c0ac7dcb51325a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_116db7b53490d69183dc3a31d05639b6a7e9b5f0dcaf338277c0ac7dcb51325a->enter($__internal_116db7b53490d69183dc3a31d05639b6a7e9b5f0dcaf338277c0ac7dcb51325a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_116db7b53490d69183dc3a31d05639b6a7e9b5f0dcaf338277c0ac7dcb51325a->leave($__internal_116db7b53490d69183dc3a31d05639b6a7e9b5f0dcaf338277c0ac7dcb51325a_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_a32672c7dbc2b176c7efe1d2e6421dc6770e4ece250d9e3f302ce9bba20388b8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a32672c7dbc2b176c7efe1d2e6421dc6770e4ece250d9e3f302ce9bba20388b8->enter($__internal_a32672c7dbc2b176c7efe1d2e6421dc6770e4ece250d9e3f302ce9bba20388b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_a32672c7dbc2b176c7efe1d2e6421dc6770e4ece250d9e3f302ce9bba20388b8->leave($__internal_a32672c7dbc2b176c7efe1d2e6421dc6770e4ece250d9e3f302ce9bba20388b8_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 33,  114 => 32,  108 => 28,  106 => 27,  102 => 25,  96 => 24,  88 => 21,  82 => 17,  80 => 16,  75 => 14,  70 => 13,  64 => 12,  54 => 9,  48 => 6,  45 => 5,  42 => 4,  36 => 3,  11 => 1,);
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

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "/home/pcapprenant17/Documents/Bou-e_corsaire_projet/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
