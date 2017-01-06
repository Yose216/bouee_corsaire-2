<?php

/* :besoin:new.html.twig */
class __TwigTemplate_e5f3e8fb1366e9c25932ebaa03acf4a7bb1fbdd3c9d6b462fdb73229110f657f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AppBundle::layout.html.twig", ":besoin:new.html.twig", 1);
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
        $__internal_3a88f2206f099a407216340249bd364ca4c4f7341a99ac4ce81a4015ab938505 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3a88f2206f099a407216340249bd364ca4c4f7341a99ac4ce81a4015ab938505->enter($__internal_3a88f2206f099a407216340249bd364ca4c4f7341a99ac4ce81a4015ab938505_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":besoin:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3a88f2206f099a407216340249bd364ca4c4f7341a99ac4ce81a4015ab938505->leave($__internal_3a88f2206f099a407216340249bd364ca4c4f7341a99ac4ce81a4015ab938505_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_dbbe8b6e666d4302efb59f1ac05de3a626db367b2daf7789fd81d2a0392711c0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dbbe8b6e666d4302efb59f1ac05de3a626db367b2daf7789fd81d2a0392711c0->enter($__internal_dbbe8b6e666d4302efb59f1ac05de3a626db367b2daf7789fd81d2a0392711c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
    <h1>Besoin creation</h1>

    ";
        // line 7
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "
        ";
        // line 8
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
        <input type=\"submit\" value=\"Create\" />

    ";
        // line 11
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("besoin_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_dbbe8b6e666d4302efb59f1ac05de3a626db367b2daf7789fd81d2a0392711c0->leave($__internal_dbbe8b6e666d4302efb59f1ac05de3a626db367b2daf7789fd81d2a0392711c0_prof);

    }

    public function getTemplateName()
    {
        return ":besoin:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  62 => 15,  55 => 11,  49 => 8,  45 => 7,  40 => 4,  34 => 3,  11 => 1,);
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

    <h1>Besoin creation</h1>

    {{ form_start(form) }}
        {{ form_widget(form) }}
        <input type=\"submit\" value=\"Create\" />

    {{ form_end(form) }}

    <ul>
        <li>
            <a href=\"{{ path('besoin_index') }}\">Back to the list</a>
        </li>
    </ul>
{% endblock %}
", ":besoin:new.html.twig", "/home/pcapprenant17/Documents/Bou-e_corsaire_projet/app/Resources/views/besoin/new.html.twig");
    }
}
