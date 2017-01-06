<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_e69d4087fbc24a021b8f4b142f04eabff9c05d120cd11799965a0660f21a37c9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_c763ae6fde5e14ee3adb37583ebddd448bdbcdc6098d34c06724f99ee6820ec3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c763ae6fde5e14ee3adb37583ebddd448bdbcdc6098d34c06724f99ee6820ec3->enter($__internal_c763ae6fde5e14ee3adb37583ebddd448bdbcdc6098d34c06724f99ee6820ec3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c763ae6fde5e14ee3adb37583ebddd448bdbcdc6098d34c06724f99ee6820ec3->leave($__internal_c763ae6fde5e14ee3adb37583ebddd448bdbcdc6098d34c06724f99ee6820ec3_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_514cbcbd7f83936070a65562159b9fc5e3b4e4b719ebd19a9b8d2b645d7e8302 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_514cbcbd7f83936070a65562159b9fc5e3b4e4b719ebd19a9b8d2b645d7e8302->enter($__internal_514cbcbd7f83936070a65562159b9fc5e3b4e4b719ebd19a9b8d2b645d7e8302_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_514cbcbd7f83936070a65562159b9fc5e3b4e4b719ebd19a9b8d2b645d7e8302->leave($__internal_514cbcbd7f83936070a65562159b9fc5e3b4e4b719ebd19a9b8d2b645d7e8302_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_46f394a42012eaac460def7d699a31adbe097e69d9ccfbc9bf73e1605205a7fd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_46f394a42012eaac460def7d699a31adbe097e69d9ccfbc9bf73e1605205a7fd->enter($__internal_46f394a42012eaac460def7d699a31adbe097e69d9ccfbc9bf73e1605205a7fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_46f394a42012eaac460def7d699a31adbe097e69d9ccfbc9bf73e1605205a7fd->leave($__internal_46f394a42012eaac460def7d699a31adbe097e69d9ccfbc9bf73e1605205a7fd_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_f2d83d47380b4aa0965d8974b6d05a0e357443589c0092507b83761d3b74c665 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f2d83d47380b4aa0965d8974b6d05a0e357443589c0092507b83761d3b74c665->enter($__internal_f2d83d47380b4aa0965d8974b6d05a0e357443589c0092507b83761d3b74c665_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_f2d83d47380b4aa0965d8974b6d05a0e357443589c0092507b83761d3b74c665->leave($__internal_f2d83d47380b4aa0965d8974b6d05a0e357443589c0092507b83761d3b74c665_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
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

{% block head %}
    <link href=\"{{ absolute_url(asset('bundles/framework/css/exception.css')) }}\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "/home/pcapprenant17/Documents/Bou-e_corsaire_projet/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
