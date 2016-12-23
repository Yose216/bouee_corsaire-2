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
        $__internal_f32cb71a6de95b69dd701b845b728ea68d40b23cc50ec09ae63c812d9e0ee53a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f32cb71a6de95b69dd701b845b728ea68d40b23cc50ec09ae63c812d9e0ee53a->enter($__internal_f32cb71a6de95b69dd701b845b728ea68d40b23cc50ec09ae63c812d9e0ee53a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        // line 1
        echo "

";
        // line 3
        $this->displayBlock('fos_user_content', $context, $blocks);
        
        $__internal_f32cb71a6de95b69dd701b845b728ea68d40b23cc50ec09ae63c812d9e0ee53a->leave($__internal_f32cb71a6de95b69dd701b845b728ea68d40b23cc50ec09ae63c812d9e0ee53a_prof);

    }

    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_ddd48a95e9b9d421d6e877ac4332d6b1e2945ee37be66ebc33f4a8f3ac3a0984 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ddd48a95e9b9d421d6e877ac4332d6b1e2945ee37be66ebc33f4a8f3ac3a0984->enter($__internal_ddd48a95e9b9d421d6e877ac4332d6b1e2945ee37be66ebc33f4a8f3ac3a0984_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:edit_content.html.twig", "FOSUserBundle:Profile:edit.html.twig", 4)->display($context);
        
        $__internal_ddd48a95e9b9d421d6e877ac4332d6b1e2945ee37be66ebc33f4a8f3ac3a0984->leave($__internal_ddd48a95e9b9d421d6e877ac4332d6b1e2945ee37be66ebc33f4a8f3ac3a0984_prof);

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
