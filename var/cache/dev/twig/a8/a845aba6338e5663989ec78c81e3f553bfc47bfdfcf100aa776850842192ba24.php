<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_94992de7421f7ede9adfc484308a4528d30e6921064e0b307ffc625918b8836b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e93d4ff95cb4e21778f620107a816a2b0c9b40ae9f4ecff3739c6723abfa965c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e93d4ff95cb4e21778f620107a816a2b0c9b40ae9f4ecff3739c6723abfa965c->enter($__internal_e93d4ff95cb4e21778f620107a816a2b0c9b40ae9f4ecff3739c6723abfa965c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_e93d4ff95cb4e21778f620107a816a2b0c9b40ae9f4ecff3739c6723abfa965c->leave($__internal_e93d4ff95cb4e21778f620107a816a2b0c9b40ae9f4ecff3739c6723abfa965c_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_de665c56ea82b05570500d1d133960d659a1362bcaf09a2d259729e14be732a4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_de665c56ea82b05570500d1d133960d659a1362bcaf09a2d259729e14be732a4->enter($__internal_de665c56ea82b05570500d1d133960d659a1362bcaf09a2d259729e14be732a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_de665c56ea82b05570500d1d133960d659a1362bcaf09a2d259729e14be732a4->leave($__internal_de665c56ea82b05570500d1d133960d659a1362bcaf09a2d259729e14be732a4_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block panel '' %}
", "WebProfilerBundle:Profiler:ajax_layout.html.twig", "/home/pcapprenant17/Documents/Bou-e_corsaire_projet/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/ajax_layout.html.twig");
    }
}
