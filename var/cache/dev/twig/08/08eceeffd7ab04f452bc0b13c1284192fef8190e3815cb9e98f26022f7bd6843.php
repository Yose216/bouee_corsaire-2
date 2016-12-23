<?php

/* FOSUserBundle:Group:show.html.twig */
class __TwigTemplate_36ecdc0408353942e7e11b0660cd6c892aff7a4a372a5bcf9587aad47de24a1a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:show.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_de20029300570c4e84cb2cecea3109e3b417dfae6f3e3a6b24d1a901fc5aa0c4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_de20029300570c4e84cb2cecea3109e3b417dfae6f3e3a6b24d1a901fc5aa0c4->enter($__internal_de20029300570c4e84cb2cecea3109e3b417dfae6f3e3a6b24d1a901fc5aa0c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_de20029300570c4e84cb2cecea3109e3b417dfae6f3e3a6b24d1a901fc5aa0c4->leave($__internal_de20029300570c4e84cb2cecea3109e3b417dfae6f3e3a6b24d1a901fc5aa0c4_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_14806a21af2061bcbe0cfcfd89a725a0fe0a9bb400379b6f654cc97d1a6f0ce9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_14806a21af2061bcbe0cfcfd89a725a0fe0a9bb400379b6f654cc97d1a6f0ce9->enter($__internal_14806a21af2061bcbe0cfcfd89a725a0fe0a9bb400379b6f654cc97d1a6f0ce9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:show_content.html.twig", "FOSUserBundle:Group:show.html.twig", 4)->display($context);
        
        $__internal_14806a21af2061bcbe0cfcfd89a725a0fe0a9bb400379b6f654cc97d1a6f0ce9->leave($__internal_14806a21af2061bcbe0cfcfd89a725a0fe0a9bb400379b6f654cc97d1a6f0ce9_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"FOSUserBundle::layout.html.twig\" %}

{% block fos_user_content %}
{% include \"FOSUserBundle:Group:show_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:show.html.twig", "/home/pcapprenant17/Documents/Bou-e_corsaire_projet/vendor/friendsofsymfony/user-bundle/Resources/views/Group/show.html.twig");
    }
}
