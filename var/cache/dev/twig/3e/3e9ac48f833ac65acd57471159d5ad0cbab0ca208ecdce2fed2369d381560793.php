<?php

/* FOSUserBundle:Group:list.html.twig */
class __TwigTemplate_90883cc16e1f6ddbdbbdb96c778323d13c139103735e4f8d08f97714115134fd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:list.html.twig", 1);
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
        $__internal_129904629d8cffce664860d7de12a388c27ab851b61f335cc2d8759e41b232ad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_129904629d8cffce664860d7de12a388c27ab851b61f335cc2d8759e41b232ad->enter($__internal_129904629d8cffce664860d7de12a388c27ab851b61f335cc2d8759e41b232ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_129904629d8cffce664860d7de12a388c27ab851b61f335cc2d8759e41b232ad->leave($__internal_129904629d8cffce664860d7de12a388c27ab851b61f335cc2d8759e41b232ad_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_c85d0e68a02f84d4d4d83d3db0a37322eeedbaa8566977dedf9fe63e8b8708b9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c85d0e68a02f84d4d4d83d3db0a37322eeedbaa8566977dedf9fe63e8b8708b9->enter($__internal_c85d0e68a02f84d4d4d83d3db0a37322eeedbaa8566977dedf9fe63e8b8708b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:list_content.html.twig", "FOSUserBundle:Group:list.html.twig", 4)->display($context);
        
        $__internal_c85d0e68a02f84d4d4d83d3db0a37322eeedbaa8566977dedf9fe63e8b8708b9->leave($__internal_c85d0e68a02f84d4d4d83d3db0a37322eeedbaa8566977dedf9fe63e8b8708b9_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:list.html.twig";
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
{% include \"FOSUserBundle:Group:list_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:list.html.twig", "/home/pcapprenant17/Documents/Bou-e_corsaire_projet/vendor/friendsofsymfony/user-bundle/Resources/views/Group/list.html.twig");
    }
}
