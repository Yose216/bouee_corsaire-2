<?php

/* besoin/new.html.twig */
class __TwigTemplate_5e69c3b971cae49ea31088a84d11401dd85ac5e9dc0351efbc1564d0227228b2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AppBundle::layout.html.twig", "besoin/new.html.twig", 1);
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
        $__internal_3264418823217272085a8f4b162b6ada8b758e365ac41c3670d78bc85f3630a7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3264418823217272085a8f4b162b6ada8b758e365ac41c3670d78bc85f3630a7->enter($__internal_3264418823217272085a8f4b162b6ada8b758e365ac41c3670d78bc85f3630a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "besoin/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3264418823217272085a8f4b162b6ada8b758e365ac41c3670d78bc85f3630a7->leave($__internal_3264418823217272085a8f4b162b6ada8b758e365ac41c3670d78bc85f3630a7_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_9bf4530ce13f00e5f2a1d5052e8765c907616fbf2ded91a9190c01601352cdea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9bf4530ce13f00e5f2a1d5052e8765c907616fbf2ded91a9190c01601352cdea->enter($__internal_9bf4530ce13f00e5f2a1d5052e8765c907616fbf2ded91a9190c01601352cdea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_9bf4530ce13f00e5f2a1d5052e8765c907616fbf2ded91a9190c01601352cdea->leave($__internal_9bf4530ce13f00e5f2a1d5052e8765c907616fbf2ded91a9190c01601352cdea_prof);

    }

    public function getTemplateName()
    {
        return "besoin/new.html.twig";
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
", "besoin/new.html.twig", "/home/pcapprenant17/Documents/Bou-e_corsaire_projet/app/Resources/views/besoin/new.html.twig");
    }
}
