<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_81faf4f81c52739da9092b151a38cfefbcf161af21a8f60ae4983768ff068d12 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
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
        $__internal_383d25ffe5b85c01930e014454ad6a9f3f43d71cb8e09b0c4d904548d49c9555 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_383d25ffe5b85c01930e014454ad6a9f3f43d71cb8e09b0c4d904548d49c9555->enter($__internal_383d25ffe5b85c01930e014454ad6a9f3f43d71cb8e09b0c4d904548d49c9555_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_383d25ffe5b85c01930e014454ad6a9f3f43d71cb8e09b0c4d904548d49c9555->leave($__internal_383d25ffe5b85c01930e014454ad6a9f3f43d71cb8e09b0c4d904548d49c9555_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_26d1b8325458e34a3aadaa7856396ef522ae3abba23dea00ebb68112243ed9c1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_26d1b8325458e34a3aadaa7856396ef522ae3abba23dea00ebb68112243ed9c1->enter($__internal_26d1b8325458e34a3aadaa7856396ef522ae3abba23dea00ebb68112243ed9c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_26d1b8325458e34a3aadaa7856396ef522ae3abba23dea00ebb68112243ed9c1->leave($__internal_26d1b8325458e34a3aadaa7856396ef522ae3abba23dea00ebb68112243ed9c1_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_065643022b1cc3c5e2ec30bfa25b382a936cbdd6a489436661a682bb34a56a76 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_065643022b1cc3c5e2ec30bfa25b382a936cbdd6a489436661a682bb34a56a76->enter($__internal_065643022b1cc3c5e2ec30bfa25b382a936cbdd6a489436661a682bb34a56a76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_065643022b1cc3c5e2ec30bfa25b382a936cbdd6a489436661a682bb34a56a76->leave($__internal_065643022b1cc3c5e2ec30bfa25b382a936cbdd6a489436661a682bb34a56a76_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_61948561c8b559c4735f45275525d4ba5ec8d511358c5834c50db7ae276561f2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_61948561c8b559c4735f45275525d4ba5ec8d511358c5834c50db7ae276561f2->enter($__internal_61948561c8b559c4735f45275525d4ba5ec8d511358c5834c50db7ae276561f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_61948561c8b559c4735f45275525d4ba5ec8d511358c5834c50db7ae276561f2->leave($__internal_61948561c8b559c4735f45275525d4ba5ec8d511358c5834c50db7ae276561f2_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
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
", "TwigBundle:Exception:exception_full.html.twig", "/home/pcapprenant17/Documents/Bou-e_corsaire_projet/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
