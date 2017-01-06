<?php

/* FOSUserBundle:Profile:edit.html.twig */
class __TwigTemplate_27002320825c14f0fe503f92eec9a0f6f38615af3d5c2fcd7755e24d68e1a067 extends Twig_Template
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
        $__internal_fca8851720179638fe436b164a9ff934b3764cfdc2cc7c25cd90cd7d910c5b58 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fca8851720179638fe436b164a9ff934b3764cfdc2cc7c25cd90cd7d910c5b58->enter($__internal_fca8851720179638fe436b164a9ff934b3764cfdc2cc7c25cd90cd7d910c5b58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        // line 1
        echo "

";
        // line 3
        $this->displayBlock('fos_user_content', $context, $blocks);
        
        $__internal_fca8851720179638fe436b164a9ff934b3764cfdc2cc7c25cd90cd7d910c5b58->leave($__internal_fca8851720179638fe436b164a9ff934b3764cfdc2cc7c25cd90cd7d910c5b58_prof);

    }

    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_91370ef28fe82d0b41a2b7e0efd39c6efb349c7d8e186a1e81190937ecda292b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_91370ef28fe82d0b41a2b7e0efd39c6efb349c7d8e186a1e81190937ecda292b->enter($__internal_91370ef28fe82d0b41a2b7e0efd39c6efb349c7d8e186a1e81190937ecda292b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:edit_content.html.twig", "FOSUserBundle:Profile:edit.html.twig", 4)->display($context);
        
        $__internal_91370ef28fe82d0b41a2b7e0efd39c6efb349c7d8e186a1e81190937ecda292b->leave($__internal_91370ef28fe82d0b41a2b7e0efd39c6efb349c7d8e186a1e81190937ecda292b_prof);

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
