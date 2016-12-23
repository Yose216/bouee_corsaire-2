<?php

/* FOSUserBundle:Registration:register.html.twig */
class __TwigTemplate_3320d51ad91284b9a37d3e58fc67ba18242f253fd06c25fb267aa5786ab4691d extends Twig_Template
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
        $__internal_e16ceb654f58de42904c6706757a5d5f011459fab7e53f5a7c43b42f9fc98cd0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e16ceb654f58de42904c6706757a5d5f011459fab7e53f5a7c43b42f9fc98cd0->enter($__internal_e16ceb654f58de42904c6706757a5d5f011459fab7e53f5a7c43b42f9fc98cd0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        // line 1
        echo "
";
        // line 2
        $this->displayBlock('fos_user_content', $context, $blocks);
        
        $__internal_e16ceb654f58de42904c6706757a5d5f011459fab7e53f5a7c43b42f9fc98cd0->leave($__internal_e16ceb654f58de42904c6706757a5d5f011459fab7e53f5a7c43b42f9fc98cd0_prof);

    }

    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_f4e532505157eb47ab89650ee2962a8299d0fabf079d4153950c77629eb69bf9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f4e532505157eb47ab89650ee2962a8299d0fabf079d4153950c77629eb69bf9->enter($__internal_f4e532505157eb47ab89650ee2962a8299d0fabf079d4153950c77629eb69bf9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 3
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 3)->display($context);
        
        $__internal_f4e532505157eb47ab89650ee2962a8299d0fabf079d4153950c77629eb69bf9->leave($__internal_f4e532505157eb47ab89650ee2962a8299d0fabf079d4153950c77629eb69bf9_prof);

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
