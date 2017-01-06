<?php

/* FOSUserBundle:Security:login.html.twig */
class __TwigTemplate_747c7c042b0b192696d5107c6377b9af86b9114e8e78e7e5a5bf0e326a52df7e extends Twig_Template
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
        $__internal_348a435e43c79d06454724771314a0f3c89671742d74c1432d085c69a8bfc352 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_348a435e43c79d06454724771314a0f3c89671742d74c1432d085c69a8bfc352->enter($__internal_348a435e43c79d06454724771314a0f3c89671742d74c1432d085c69a8bfc352_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login.html.twig"));

        // line 1
        echo "
";
        // line 2
        $this->displayBlock('fos_user_content', $context, $blocks);
        
        $__internal_348a435e43c79d06454724771314a0f3c89671742d74c1432d085c69a8bfc352->leave($__internal_348a435e43c79d06454724771314a0f3c89671742d74c1432d085c69a8bfc352_prof);

    }

    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_b45b2cbbd6a17cd2ea3bc4942fa87594d40ca099199a8d4b08c805c519595d71 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b45b2cbbd6a17cd2ea3bc4942fa87594d40ca099199a8d4b08c805c519595d71->enter($__internal_b45b2cbbd6a17cd2ea3bc4942fa87594d40ca099199a8d4b08c805c519595d71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 3
        echo "    ";
        echo twig_include($this->env, $context, "FOSUserBundle:Security:login_content.html.twig");
        echo "
";
        
        $__internal_b45b2cbbd6a17cd2ea3bc4942fa87594d40ca099199a8d4b08c805c519595d71->leave($__internal_b45b2cbbd6a17cd2ea3bc4942fa87594d40ca099199a8d4b08c805c519595d71_prof);

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
