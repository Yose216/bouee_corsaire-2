<?php

/* besoin/show.html.twig */
class __TwigTemplate_2e359e469352750d0c24c8806428ae0606e9b7364c522f58b771684238d52f81 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AppBundle::layout.html.twig", "besoin/show.html.twig", 1);
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
        $__internal_9169d9324cc9c480974d8b28ba386a060eba7b7241f2843ca9ae2674c65e0e6b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9169d9324cc9c480974d8b28ba386a060eba7b7241f2843ca9ae2674c65e0e6b->enter($__internal_9169d9324cc9c480974d8b28ba386a060eba7b7241f2843ca9ae2674c65e0e6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "besoin/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9169d9324cc9c480974d8b28ba386a060eba7b7241f2843ca9ae2674c65e0e6b->leave($__internal_9169d9324cc9c480974d8b28ba386a060eba7b7241f2843ca9ae2674c65e0e6b_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_907f40bd4678a2df7285a6c01cf5146c2a1f5efbfa7de6be2acd15c83ac7fec7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_907f40bd4678a2df7285a6c01cf5146c2a1f5efbfa7de6be2acd15c83ac7fec7->enter($__internal_907f40bd4678a2df7285a6c01cf5146c2a1f5efbfa7de6be2acd15c83ac7fec7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Besoin</h1>
    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute(($context["besoin"] ?? $this->getContext($context, "besoin")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Title</th>
                <td>";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute(($context["besoin"] ?? $this->getContext($context, "besoin")), "title", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Image</th>
                <td>";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute(($context["besoin"] ?? $this->getContext($context, "besoin")), "image", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Heure</th>
                <td>";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute(($context["besoin"] ?? $this->getContext($context, "besoin")), "heure", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Categorie</th>
                <td>";
        // line 25
        echo twig_escape_filter($this->env, $this->getAttribute(($context["besoin"] ?? $this->getContext($context, "besoin")), "categorie", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Nom</th>
                <td>";
        // line 29
        echo twig_escape_filter($this->env, $this->getAttribute(($context["besoin"] ?? $this->getContext($context, "besoin")), "user", array()), "html", null, true);
        echo "
\t\t\t\t</td>
\t\t\t\t
            </tr>
            <tr>
                <th>Prenom</th>
                <td>";
        // line 35
        echo twig_escape_filter($this->env, $this->getAttribute(($context["besoin"] ?? $this->getContext($context, "besoin")), "prenom", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Adresse</th>
                <td>";
        // line 39
        echo twig_escape_filter($this->env, $this->getAttribute(($context["besoin"] ?? $this->getContext($context, "besoin")), "adresse", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Codepostale</th>
                <td>";
        // line 43
        echo twig_escape_filter($this->env, $this->getAttribute(($context["besoin"] ?? $this->getContext($context, "besoin")), "codePostale", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Description</th>
                <td>";
        // line 47
        echo twig_escape_filter($this->env, $this->getAttribute(($context["besoin"] ?? $this->getContext($context, "besoin")), "description", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

<!--
    <ul>
        <li>
            <a href=\"";
        // line 55
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("besoin_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 58
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("besoin_edit", array("id" => $this->getAttribute(($context["besoin"] ?? $this->getContext($context, "besoin")), "id", array()))), "html", null, true);
        echo "\">Edit</a>
        </li>
        <li>
            ";
        // line 61
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 63
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
-->
";
        
        $__internal_907f40bd4678a2df7285a6c01cf5146c2a1f5efbfa7de6be2acd15c83ac7fec7->leave($__internal_907f40bd4678a2df7285a6c01cf5146c2a1f5efbfa7de6be2acd15c83ac7fec7_prof);

    }

    public function getTemplateName()
    {
        return "besoin/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  140 => 63,  135 => 61,  129 => 58,  123 => 55,  112 => 47,  105 => 43,  98 => 39,  91 => 35,  82 => 29,  75 => 25,  68 => 21,  61 => 17,  54 => 13,  47 => 9,  40 => 4,  34 => 3,  11 => 1,);
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
    <h1>Besoin</h1>
    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>{{ besoin.id }}</td>
            </tr>
            <tr>
                <th>Title</th>
                <td>{{ besoin.title }}</td>
            </tr>
            <tr>
                <th>Image</th>
                <td>{{ besoin.image }}</td>
            </tr>
            <tr>
                <th>Heure</th>
                <td>{{ besoin.heure }}</td>
            </tr>
            <tr>
                <th>Categorie</th>
                <td>{{ besoin.categorie }}</td>
            </tr>
            <tr>
                <th>Nom</th>
                <td>{{ besoin.user}}
\t\t\t\t</td>
\t\t\t\t
            </tr>
            <tr>
                <th>Prenom</th>
                <td>{{ besoin.prenom }}</td>
            </tr>
            <tr>
                <th>Adresse</th>
                <td>{{ besoin.adresse }}</td>
            </tr>
            <tr>
                <th>Codepostale</th>
                <td>{{ besoin.codePostale }}</td>
            </tr>
            <tr>
                <th>Description</th>
                <td>{{ besoin.description }}</td>
            </tr>
        </tbody>
    </table>

<!--
    <ul>
        <li>
            <a href=\"{{ path('besoin_index') }}\">Back to the list</a>
        </li>
        <li>
            <a href=\"{{ path('besoin_edit', { 'id': besoin.id }) }}\">Edit</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
-->
{% endblock %}
", "besoin/show.html.twig", "/home/pcapprenant17/Documents/Bou-e_corsaire_projet/app/Resources/views/besoin/show.html.twig");
    }
}
