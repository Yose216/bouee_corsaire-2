<?php

/* service/new.html.twig */
class __TwigTemplate_2151d9aa6248e81873754f1c26ab0b604e399524cd067ff1efe91d1f68c2715a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AppBundle::layout.html.twig", "service/new.html.twig", 1);
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
        $__internal_5405ae578f60685ca5648ab10805da209dcbeeefbf0947713db1fee61e3bb481 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5405ae578f60685ca5648ab10805da209dcbeeefbf0947713db1fee61e3bb481->enter($__internal_5405ae578f60685ca5648ab10805da209dcbeeefbf0947713db1fee61e3bb481_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "service/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5405ae578f60685ca5648ab10805da209dcbeeefbf0947713db1fee61e3bb481->leave($__internal_5405ae578f60685ca5648ab10805da209dcbeeefbf0947713db1fee61e3bb481_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_254b9d4735c7d1f703985236f2569c47925703c5612adf2e1891acf114968a0a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_254b9d4735c7d1f703985236f2569c47925703c5612adf2e1891acf114968a0a->enter($__internal_254b9d4735c7d1f703985236f2569c47925703c5612adf2e1891acf114968a0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_254b9d4735c7d1f703985236f2569c47925703c5612adf2e1891acf114968a0a->leave($__internal_254b9d4735c7d1f703985236f2569c47925703c5612adf2e1891acf114968a0a_prof);

    }

    public function getTemplateName()
    {
        return "service/new.html.twig";
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
", "service/new.html.twig", "/home/pcapprenant17/Documents/Bou-e_corsaire_projet/app/Resources/views/service/new.html.twig");
    }
}
