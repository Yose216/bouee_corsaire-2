<?php

/* :service:index2.html.twig */
class __TwigTemplate_ba70cf25b12a228f94541b3e5d9b6ea6d4e9362dcce215f8dff8f668e1ac528d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AppBundle::layout.html.twig", ":service:index2.html.twig", 1);
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
        $__internal_4544907d992b92195a2ee3e45f2f6d973bedbdee1872e885ee8b8faa18ff0911 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4544907d992b92195a2ee3e45f2f6d973bedbdee1872e885ee8b8faa18ff0911->enter($__internal_4544907d992b92195a2ee3e45f2f6d973bedbdee1872e885ee8b8faa18ff0911_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":service:index2.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4544907d992b92195a2ee3e45f2f6d973bedbdee1872e885ee8b8faa18ff0911->leave($__internal_4544907d992b92195a2ee3e45f2f6d973bedbdee1872e885ee8b8faa18ff0911_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_7125b787de58834b805fb19acd56e1cfd68ea2ed65b0dc9db9332a6ee8462d7b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7125b787de58834b805fb19acd56e1cfd68ea2ed65b0dc9db9332a6ee8462d7b->enter($__internal_7125b787de58834b805fb19acd56e1cfd68ea2ed65b0dc9db9332a6ee8462d7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Services list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Title</th>
                <th>Image</th>
                <th>Heure</th>
                <th>Categorie</th>
                <th>Nom</th>
                <th>Prenom</th>
                <th>Adresse</th>
                <th>Codepostal</th>
                <th>Description</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["services"] ?? $this->getContext($context, "services")));
        foreach ($context['_seq'] as $context["_key"] => $context["service"]) {
            // line 24
            echo "            <tr>
                <td><a href=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("service_show", array("id" => $this->getAttribute($context["service"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["service"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["service"], "title", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($context["service"], "image", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($context["service"], "heure", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute($context["service"], "categorie", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($context["service"], "nom", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute($context["service"], "prenom", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute($context["service"], "adresse", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute($context["service"], "codePostal", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute($context["service"], "description", array()), "html", null, true);
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 38
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("service_show", array("id" => $this->getAttribute($context["service"], "id", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 41
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("service_edit", array("id" => $this->getAttribute($context["service"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['service'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 47
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 52
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("service_new");
        echo "\">Create a new service</a>
        </li>
    </ul>
";
        
        $__internal_7125b787de58834b805fb19acd56e1cfd68ea2ed65b0dc9db9332a6ee8462d7b->leave($__internal_7125b787de58834b805fb19acd56e1cfd68ea2ed65b0dc9db9332a6ee8462d7b_prof);

    }

    public function getTemplateName()
    {
        return ":service:index2.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 52,  131 => 47,  119 => 41,  113 => 38,  106 => 34,  102 => 33,  98 => 32,  94 => 31,  90 => 30,  86 => 29,  82 => 28,  78 => 27,  74 => 26,  68 => 25,  65 => 24,  61 => 23,  40 => 4,  34 => 3,  11 => 1,);
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
    <h1>Services list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Title</th>
                <th>Image</th>
                <th>Heure</th>
                <th>Categorie</th>
                <th>Nom</th>
                <th>Prenom</th>
                <th>Adresse</th>
                <th>Codepostal</th>
                <th>Description</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        {% for service in services %}
            <tr>
                <td><a href=\"{{ path('service_show', { 'id': service.id }) }}\">{{ service.id }}</a></td>
                <td>{{ service.title }}</td>
                <td>{{ service.image }}</td>
                <td>{{ service.heure }}</td>
                <td>{{ service.categorie }}</td>
                <td>{{ service.nom }}</td>
                <td>{{ service.prenom }}</td>
                <td>{{ service.adresse }}</td>
                <td>{{ service.codePostal }}</td>
                <td>{{ service.description }}</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"{{ path('service_show', { 'id': service.id }) }}\">show</a>
                        </li>
                        <li>
                            <a href=\"{{ path('service_edit', { 'id': service.id }) }}\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('service_new') }}\">Create a new service</a>
        </li>
    </ul>
{% endblock %}
", ":service:index2.html.twig", "/home/pcapprenant17/Documents/Bou-e_corsaire_projet/app/Resources/views/service/index2.html.twig");
    }
}
