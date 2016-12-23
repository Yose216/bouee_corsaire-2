<?php

/* FOSUserBundle:Security:login.html.twig */
class __TwigTemplate_2d9e19b881deb27b46c61a0e9b638b8c9691b84d7201a2ba5d31d62bd09089bb extends Twig_Template
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
        $__internal_918a3d1cb770e4b98ce14a98a64f865e3567b8b5211baffc46a60b013c288843 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_918a3d1cb770e4b98ce14a98a64f865e3567b8b5211baffc46a60b013c288843->enter($__internal_918a3d1cb770e4b98ce14a98a64f865e3567b8b5211baffc46a60b013c288843_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login.html.twig"));

        // line 1
        echo "
";
        // line 2
        $this->displayBlock('fos_user_content', $context, $blocks);
        
        $__internal_918a3d1cb770e4b98ce14a98a64f865e3567b8b5211baffc46a60b013c288843->leave($__internal_918a3d1cb770e4b98ce14a98a64f865e3567b8b5211baffc46a60b013c288843_prof);

    }

    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_f15f580a2f5327bc3c91feb7bd3136dedbb5789112b88d03c550705883d8b190 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f15f580a2f5327bc3c91feb7bd3136dedbb5789112b88d03c550705883d8b190->enter($__internal_f15f580a2f5327bc3c91feb7bd3136dedbb5789112b88d03c550705883d8b190_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 3
        echo "    ";
        echo twig_include($this->env, $context, "FOSUserBundle:Security:login_content.html.twig");
        echo "
";
        
        $__internal_f15f580a2f5327bc3c91feb7bd3136dedbb5789112b88d03c550705883d8b190->leave($__internal_f15f580a2f5327bc3c91feb7bd3136dedbb5789112b88d03c550705883d8b190_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Security:login.html.twig";
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
    {{ include('FOSUserBundle:Security:login_content.html.twig') }}
{% endblock fos_user_content %}
", "FOSUserBundle:Security:login.html.twig", "/home/pcapprenant17/Documents/Bou-e_corsaire_projet/vendor/friendsofsymfony/user-bundle/Resources/views/Security/login.html.twig");
    }
}
