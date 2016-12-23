<?php

/* :service:new.html.twig */
class __TwigTemplate_824b8c0bb9240b1f12d388ea76189baa87397ff035f28faf943819d9b4c503e6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AppBundle::layout.html.twig", ":service:new.html.twig", 1);
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
        $__internal_1eeb2b925f2be5ca4ee25fb4abd4924e557e4e515bf85314541bbc88c352d1c7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1eeb2b925f2be5ca4ee25fb4abd4924e557e4e515bf85314541bbc88c352d1c7->enter($__internal_1eeb2b925f2be5ca4ee25fb4abd4924e557e4e515bf85314541bbc88c352d1c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":service:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1eeb2b925f2be5ca4ee25fb4abd4924e557e4e515bf85314541bbc88c352d1c7->leave($__internal_1eeb2b925f2be5ca4ee25fb4abd4924e557e4e515bf85314541bbc88c352d1c7_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_26e1bb17ec7cb5b4dc05fcaa2b7f4ff886cfbb88bd0e84fe6c563cfb9f76bce7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_26e1bb17ec7cb5b4dc05fcaa2b7f4ff886cfbb88bd0e84fe6c563cfb9f76bce7->enter($__internal_26e1bb17ec7cb5b4dc05fcaa2b7f4ff886cfbb88bd0e84fe6c563cfb9f76bce7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "    <h1>Service creation</h1>

    ";
        // line 5
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "
        ";
        // line 6
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
        <input type=\"submit\" value=\"Create\" />
    ";
        // line 8
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 12
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("service_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_26e1bb17ec7cb5b4dc05fcaa2b7f4ff886cfbb88bd0e84fe6c563cfb9f76bce7->leave($__internal_26e1bb17ec7cb5b4dc05fcaa2b7f4ff886cfbb88bd0e84fe6c563cfb9f76bce7_prof);

    }

    public function getTemplateName()
    {
        return ":service:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 12,  53 => 8,  48 => 6,  44 => 5,  40 => 3,  34 => 2,  11 => 1,);
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
    <h1>Service creation</h1>

    {{ form_start(form) }}
        {{ form_widget(form) }}
        <input type=\"submit\" value=\"Create\" />
    {{ form_end(form) }}

    <ul>
        <li>
            <a href=\"{{ path('service_index') }}\">Back to the list</a>
        </li>
    </ul>
{% endblock %}
", ":service:new.html.twig", "/home/pcapprenant17/Documents/Bou-e_corsaire_projet/app/Resources/views/service/new.html.twig");
    }
}
