<?php

/* :default:admin.html.twig */
class __TwigTemplate_8aec2a53ff0cfbb0482bf07b1785ecb604f1c8a69cda5ae3e94d3a856ebad3fd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AppBundle::layout.html.twig", ":default:admin.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AppBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7db51f4f1dd2c82ca46fce9842bb032e0b819c13570020bb15c9b05d2e632ea0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7db51f4f1dd2c82ca46fce9842bb032e0b819c13570020bb15c9b05d2e632ea0->enter($__internal_7db51f4f1dd2c82ca46fce9842bb032e0b819c13570020bb15c9b05d2e632ea0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":default:admin.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7db51f4f1dd2c82ca46fce9842bb032e0b819c13570020bb15c9b05d2e632ea0->leave($__internal_7db51f4f1dd2c82ca46fce9842bb032e0b819c13570020bb15c9b05d2e632ea0_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_9801e2659712fb72e952879458eaacda312afafa87aedc69d3503fd5dc8f113d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9801e2659712fb72e952879458eaacda312afafa87aedc69d3503fd5dc8f113d->enter($__internal_9801e2659712fb72e952879458eaacda312afafa87aedc69d3503fd5dc8f113d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "
<h1>Admin page</h1>
<a href=\"";
        // line 5
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("service_new");
        echo "\"><p>New service</p></a>
<a href=\"";
        // line 6
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("besoin_new");
        echo "\"><p>New besoin</p></a>
";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["services"] ?? $this->getContext($context, "services")));
        foreach ($context['_seq'] as $context["_key"] => $context["service"]) {
            // line 8
            echo "<a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("service_show", array("id" => $this->getAttribute($context["service"], "id", array()))), "html", null, true);
            echo "\"><p>show service : ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["service"], "id", array()), "html", null, true);
            echo "</p></a>

";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['service'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["besoins"] ?? $this->getContext($context, "besoins")));
        foreach ($context['_seq'] as $context["_key"] => $context["besoin"]) {
            // line 12
            echo "<a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("besoin_show", array("id" => $this->getAttribute($context["besoin"], "id", array()))), "html", null, true);
            echo "\"><p>show besoin : ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["besoin"], "id", array()), "html", null, true);
            echo "</p></a>

";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['besoin'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_9801e2659712fb72e952879458eaacda312afafa87aedc69d3503fd5dc8f113d->leave($__internal_9801e2659712fb72e952879458eaacda312afafa87aedc69d3503fd5dc8f113d_prof);

    }

    public function getTemplateName()
    {
        return ":default:admin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 12,  68 => 11,  56 => 8,  52 => 7,  48 => 6,  44 => 5,  40 => 3,  34 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'AppBundle::layout.html.twig' %}
{% block body %}

<h1>Admin page</h1>
<a href=\"{{ path('service_new') }}\"><p>New service</p></a>
<a href=\"{{ path('besoin_new') }}\"><p>New besoin</p></a>
{% for service in services %}
<a href=\"{{ path('service_show', { 'id': service.id }) }}\"><p>show service : {{service.id}}</p></a>

{% endfor %}
{% for besoin in besoins %}
<a href=\"{{ path('besoin_show', { 'id': besoin.id }) }}\"><p>show besoin : {{besoin.id}}</p></a>

{% endfor %}
{% endblock %}
", ":default:admin.html.twig", "/home/pcapprenant17/Documents/Bou-e_corsaire_projet/app/Resources/views/default/admin.html.twig");
    }
}
