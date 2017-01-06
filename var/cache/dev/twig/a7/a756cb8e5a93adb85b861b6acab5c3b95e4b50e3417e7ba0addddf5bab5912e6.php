<?php

/* :service:show.html.twig */
class __TwigTemplate_39682bff46b983400b3b96a85aa84cd1d446fc58140936485366d7208e21831e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AppBundle::layout.html.twig", ":service:show.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AppBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f5af6f2e575959620ffe5329573903ac9c53a5e6431c1bd2c82f15233b9ace75 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f5af6f2e575959620ffe5329573903ac9c53a5e6431c1bd2c82f15233b9ace75->enter($__internal_f5af6f2e575959620ffe5329573903ac9c53a5e6431c1bd2c82f15233b9ace75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":service:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f5af6f2e575959620ffe5329573903ac9c53a5e6431c1bd2c82f15233b9ace75->leave($__internal_f5af6f2e575959620ffe5329573903ac9c53a5e6431c1bd2c82f15233b9ace75_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_bb888d44abf1ee3d3dde48bf5a96b568d857f9e6c1d7fd3bb50f07382548a3d8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bb888d44abf1ee3d3dde48bf5a96b568d857f9e6c1d7fd3bb50f07382548a3d8->enter($__internal_bb888d44abf1ee3d3dde48bf5a96b568d857f9e6c1d7fd3bb50f07382548a3d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Service</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute(($context["service"] ?? $this->getContext($context, "service")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Title</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute(($context["service"] ?? $this->getContext($context, "service")), "title", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Image</th>
                <td>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute(($context["service"] ?? $this->getContext($context, "service")), "image", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Heure</th>
                <td>";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute(($context["service"] ?? $this->getContext($context, "service")), "heure", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Categorie</th>
                <td>";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute(($context["service"] ?? $this->getContext($context, "service")), "categorie", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Nom</th>
                <td>";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute(($context["service"] ?? $this->getContext($context, "service")), "user", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Description</th>
                <td>";
        // line 34
        echo twig_escape_filter($this->env, $this->getAttribute(($context["service"] ?? $this->getContext($context, "service")), "description", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 41
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("service_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("service_edit", array("id" => $this->getAttribute(($context["service"] ?? $this->getContext($context, "service")), "id", array()))), "html", null, true);
        echo "\">Edit</a>
        </li>
     
    </ul>
";
        
        $__internal_bb888d44abf1ee3d3dde48bf5a96b568d857f9e6c1d7fd3bb50f07382548a3d8->leave($__internal_bb888d44abf1ee3d3dde48bf5a96b568d857f9e6c1d7fd3bb50f07382548a3d8_prof);

    }

    public function getTemplateName()
    {
        return ":service:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  106 => 44,  100 => 41,  90 => 34,  83 => 30,  76 => 26,  69 => 22,  62 => 18,  55 => 14,  48 => 10,  40 => 4,  34 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'AppBundle::layout.html.twig' %}

{% block body %}
    <h1>Service</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>{{ service.id }}</td>
            </tr>
            <tr>
                <th>Title</th>
                <td>{{ service.title }}</td>
            </tr>
            <tr>
                <th>Image</th>
                <td>{{ service.image }}</td>
            </tr>
            <tr>
                <th>Heure</th>
                <td>{{ service.heure }}</td>
            </tr>
            <tr>
                <th>Categorie</th>
                <td>{{ service.categorie }}</td>
            </tr>
            <tr>
                <th>Nom</th>
                <td>{{ service.user }}</td>
            </tr>
            <tr>
                <th>Description</th>
                <td>{{ service.description }}</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('service_index') }}\">Back to the list</a>
        </li>
        <li>
            <a href=\"{{ path('service_edit', { 'id': service.id }) }}\">Edit</a>
        </li>
     
    </ul>
{% endblock %}
", ":service:show.html.twig", "/home/pcapprenant17/Documents/Bou-e_corsaire_projet/app/Resources/views/service/show.html.twig");
    }
}
