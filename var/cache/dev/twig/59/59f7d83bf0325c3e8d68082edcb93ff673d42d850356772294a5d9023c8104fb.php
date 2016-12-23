<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_7b42b20b50026cf60cfa5150e3d2bb4541e554aeafceb05031a858a917fb0d3f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8821076dda7387208ca5b48b7ce5e79ab8406a2307469d005fbdba2c72498e10 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8821076dda7387208ca5b48b7ce5e79ab8406a2307469d005fbdba2c72498e10->enter($__internal_8821076dda7387208ca5b48b7ce5e79ab8406a2307469d005fbdba2c72498e10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_8821076dda7387208ca5b48b7ce5e79ab8406a2307469d005fbdba2c72498e10->leave($__internal_8821076dda7387208ca5b48b7ce5e79ab8406a2307469d005fbdba2c72498e10_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% include '@Twig/Exception/error.xml.twig' %}
", "TwigBundle:Exception:error.atom.twig", "/home/pcapprenant17/Documents/Bou-e_corsaire_projet/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.atom.twig");
    }
}
