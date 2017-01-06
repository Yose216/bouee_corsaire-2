<?php

/* FOSUserBundle:Registration:register.html.twig */
class __TwigTemplate_94b3fecca837fbc9d0eae05df7df4f790dd434b97e976c99143884c291eebef0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e7e062afe1b8f7b89cf90c11945240c5500e878fd9e8dc4422901c31f1196f35 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e7e062afe1b8f7b89cf90c11945240c5500e878fd9e8dc4422901c31f1196f35->enter($__internal_e7e062afe1b8f7b89cf90c11945240c5500e878fd9e8dc4422901c31f1196f35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        // line 1
        echo "
";
        // line 2
        $this->displayBlock('fos_user_content', $context, $blocks);
        
        $__internal_e7e062afe1b8f7b89cf90c11945240c5500e878fd9e8dc4422901c31f1196f35->leave($__internal_e7e062afe1b8f7b89cf90c11945240c5500e878fd9e8dc4422901c31f1196f35_prof);

    }

    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_f4a760259cf91871cc3989dccc540098b76351d964bdf3aa82b372f223574d4f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f4a760259cf91871cc3989dccc540098b76351d964bdf3aa82b372f223574d4f->enter($__internal_f4a760259cf91871cc3989dccc540098b76351d964bdf3aa82b372f223574d4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 3
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 3)->display($context);
        
        $__internal_f4a760259cf91871cc3989dccc540098b76351d964bdf3aa82b372f223574d4f->leave($__internal_f4a760259cf91871cc3989dccc540098b76351d964bdf3aa82b372f223574d4f_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  38 => 3,  26 => 2,  23 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("
{% block fos_user_content %}
{% include \"FOSUserBundle:Registration:register_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Registration:register.html.twig", "/home/pcapprenant17/Documents/Bou-e_corsaire_projet/vendor/friendsofsymfony/user-bundle/Resources/views/Registration/register.html.twig");
    }
}
