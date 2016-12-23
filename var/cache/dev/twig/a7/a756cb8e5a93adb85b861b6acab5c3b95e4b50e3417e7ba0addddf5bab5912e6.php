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
        $__internal_a34846ab1e489d3bc204206c651d625dbf4889c0e69570db56a2bdbbf1b153d9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a34846ab1e489d3bc204206c651d625dbf4889c0e69570db56a2bdbbf1b153d9->enter($__internal_a34846ab1e489d3bc204206c651d625dbf4889c0e69570db56a2bdbbf1b153d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":service:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a34846ab1e489d3bc204206c651d625dbf4889c0e69570db56a2bdbbf1b153d9->leave($__internal_a34846ab1e489d3bc204206c651d625dbf4889c0e69570db56a2bdbbf1b153d9_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_6064a6b874542c8eef795074e66d9b129871e44ef45f499f00327ca9679f340d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6064a6b874542c8eef795074e66d9b129871e44ef45f499f00327ca9679f340d->enter($__internal_6064a6b874542c8eef795074e66d9b129871e44ef45f499f00327ca9679f340d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
                <th>Adresse</th>
                <td>";
        // line 34
        echo twig_escape_filter($this->env, $this->getAttribute(($context["service"] ?? $this->getContext($context, "service")), "adresse", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Codepostal</th>
                <td>";
        // line 38
        echo twig_escape_filter($this->env, $this->getAttribute(($context["service"] ?? $this->getContext($context, "service")), "codePostal", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Description</th>
                <td>";
        // line 42
        echo twig_escape_filter($this->env, $this->getAttribute(($context["service"] ?? $this->getContext($context, "service")), "description", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 49
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("service_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 52
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("service_edit", array("id" => $this->getAttribute(($context["service"] ?? $this->getContext($context, "service")), "id", array()))), "html", null, true);
        echo "\">Edit</a>
        </li>
        <li>
            ";
        // line 55
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 57
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_6064a6b874542c8eef795074e66d9b129871e44ef45f499f00327ca9679f340d->leave($__internal_6064a6b874542c8eef795074e66d9b129871e44ef45f499f00327ca9679f340d_prof);

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
        return array (  131 => 57,  126 => 55,  120 => 52,  114 => 49,  104 => 42,  97 => 38,  90 => 34,  83 => 30,  76 => 26,  69 => 22,  62 => 18,  55 => 14,  48 => 10,  40 => 4,  34 => 3,  11 => 1,);
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
                <th>Adresse</th>
                <td>{{ service.adresse }}</td>
            </tr>
            <tr>
                <th>Codepostal</th>
                <td>{{ service.codePostal }}</td>
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
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", ":service:show.html.twig", "/home/pcapprenant17/Documents/Bou-e_corsaire_projet/app/Resources/views/service/show.html.twig");
    }
}
