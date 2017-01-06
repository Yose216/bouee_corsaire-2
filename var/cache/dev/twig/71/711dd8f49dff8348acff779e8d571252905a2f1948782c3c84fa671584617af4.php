<?php

/* FOSUserBundle:Profile:edit.html.twig */
class __TwigTemplate_ec9c14a513d5d0535ca122e057e9b160e8167d689a627dc40517c03840ed01e2 extends Twig_Template
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
        $__internal_f22fd7fbc68cb666acf8abc12394b23cdc73c34eac1ec4989abe35484574686f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f22fd7fbc68cb666acf8abc12394b23cdc73c34eac1ec4989abe35484574686f->enter($__internal_f22fd7fbc68cb666acf8abc12394b23cdc73c34eac1ec4989abe35484574686f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        // line 1
        echo "

";
        // line 3
        $this->displayBlock('fos_user_content', $context, $blocks);
        
        $__internal_f22fd7fbc68cb666acf8abc12394b23cdc73c34eac1ec4989abe35484574686f->leave($__internal_f22fd7fbc68cb666acf8abc12394b23cdc73c34eac1ec4989abe35484574686f_prof);

    }

    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_2259daef5208310d9448da5ea6dfeedcb5186b7761372d8e6716edef0fc589bb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2259daef5208310d9448da5ea6dfeedcb5186b7761372d8e6716edef0fc589bb->enter($__internal_2259daef5208310d9448da5ea6dfeedcb5186b7761372d8e6716edef0fc589bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:edit_content.html.twig", "FOSUserBundle:Profile:edit.html.twig", 4)->display($context);
        
        $__internal_2259daef5208310d9448da5ea6dfeedcb5186b7761372d8e6716edef0fc589bb->leave($__internal_2259daef5208310d9448da5ea6dfeedcb5186b7761372d8e6716edef0fc589bb_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:edit.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  39 => 4,  27 => 3,  23 => 1,);
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
{% include \"FOSUserBundle:Profile:edit_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Profile:edit.html.twig", "/home/pcapprenant17/Documents/Bou-e_corsaire_projet/vendor/friendsofsymfony/user-bundle/Resources/views/Profile/edit.html.twig");
    }
}
