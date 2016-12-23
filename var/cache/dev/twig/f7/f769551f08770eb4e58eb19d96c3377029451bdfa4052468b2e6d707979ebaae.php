<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_5f881dd3fb88ef0f6664e6eaa7753bf61f4527f6a93809ff36bd8fe361d3a92d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a285d3273f12ea739ca9201f8017bc8929c73bfa6e4f75706bde1db9fe1648ca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a285d3273f12ea739ca9201f8017bc8929c73bfa6e4f75706bde1db9fe1648ca->enter($__internal_a285d3273f12ea739ca9201f8017bc8929c73bfa6e4f75706bde1db9fe1648ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a285d3273f12ea739ca9201f8017bc8929c73bfa6e4f75706bde1db9fe1648ca->leave($__internal_a285d3273f12ea739ca9201f8017bc8929c73bfa6e4f75706bde1db9fe1648ca_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_172a47864a49b8452851153bd9a1c7ea98dc10e10bdadce6ce35aa672ae5e466 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_172a47864a49b8452851153bd9a1c7ea98dc10e10bdadce6ce35aa672ae5e466->enter($__internal_172a47864a49b8452851153bd9a1c7ea98dc10e10bdadce6ce35aa672ae5e466_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_172a47864a49b8452851153bd9a1c7ea98dc10e10bdadce6ce35aa672ae5e466->leave($__internal_172a47864a49b8452851153bd9a1c7ea98dc10e10bdadce6ce35aa672ae5e466_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_3574b362c28f03eeb9fe1cd94f9e39b324a608fc75ebbc0a9bc042635b66c450 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3574b362c28f03eeb9fe1cd94f9e39b324a608fc75ebbc0a9bc042635b66c450->enter($__internal_3574b362c28f03eeb9fe1cd94f9e39b324a608fc75ebbc0a9bc042635b66c450_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, ($context["location"] ?? $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, ($context["location"] ?? $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_3574b362c28f03eeb9fe1cd94f9e39b324a608fc75ebbc0a9bc042635b66c450->leave($__internal_3574b362c28f03eeb9fe1cd94f9e39b324a608fc75ebbc0a9bc042635b66c450_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 8,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block title 'Redirection Intercepted' %}

{% block body %}
    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"{{ location }}\">{{ location }}</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
{% endblock %}
", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", "/home/pcapprenant17/Documents/Bou-e_corsaire_projet/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/toolbar_redirect.html.twig");
    }
}
