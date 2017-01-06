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
        $__internal_6adfb65875fae51039866b8fc29571c44730e7c84ffe3f61996fcd524d99582d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6adfb65875fae51039866b8fc29571c44730e7c84ffe3f61996fcd524d99582d->enter($__internal_6adfb65875fae51039866b8fc29571c44730e7c84ffe3f61996fcd524d99582d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_6adfb65875fae51039866b8fc29571c44730e7c84ffe3f61996fcd524d99582d->leave($__internal_6adfb65875fae51039866b8fc29571c44730e7c84ffe3f61996fcd524d99582d_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_c22f32fefe2b6766d274cdf797aab8c6c2892f957c1619aba4adeafc49c5f459 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c22f32fefe2b6766d274cdf797aab8c6c2892f957c1619aba4adeafc49c5f459->enter($__internal_c22f32fefe2b6766d274cdf797aab8c6c2892f957c1619aba4adeafc49c5f459_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_c22f32fefe2b6766d274cdf797aab8c6c2892f957c1619aba4adeafc49c5f459->leave($__internal_c22f32fefe2b6766d274cdf797aab8c6c2892f957c1619aba4adeafc49c5f459_prof);

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
