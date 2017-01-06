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
        $__internal_beb43e0705e9e75ce09f141b641e7fa75b9604ff204e5bdc0adc57ea2dd70be3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_beb43e0705e9e75ce09f141b641e7fa75b9604ff204e5bdc0adc57ea2dd70be3->enter($__internal_beb43e0705e9e75ce09f141b641e7fa75b9604ff204e5bdc0adc57ea2dd70be3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_beb43e0705e9e75ce09f141b641e7fa75b9604ff204e5bdc0adc57ea2dd70be3->leave($__internal_beb43e0705e9e75ce09f141b641e7fa75b9604ff204e5bdc0adc57ea2dd70be3_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_fb1d86fae1a4be5bffbd0adb0823b5cd6be394e6ac9b15b5b7e9c99cd74f4007 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fb1d86fae1a4be5bffbd0adb0823b5cd6be394e6ac9b15b5b7e9c99cd74f4007->enter($__internal_fb1d86fae1a4be5bffbd0adb0823b5cd6be394e6ac9b15b5b7e9c99cd74f4007_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_fb1d86fae1a4be5bffbd0adb0823b5cd6be394e6ac9b15b5b7e9c99cd74f4007->leave($__internal_fb1d86fae1a4be5bffbd0adb0823b5cd6be394e6ac9b15b5b7e9c99cd74f4007_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_0931f9fb2dd035d3b597bd7f92ac029b5f38567ea359ba64d25829840c56224e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0931f9fb2dd035d3b597bd7f92ac029b5f38567ea359ba64d25829840c56224e->enter($__internal_0931f9fb2dd035d3b597bd7f92ac029b5f38567ea359ba64d25829840c56224e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_0931f9fb2dd035d3b597bd7f92ac029b5f38567ea359ba64d25829840c56224e->leave($__internal_0931f9fb2dd035d3b597bd7f92ac029b5f38567ea359ba64d25829840c56224e_prof);

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
