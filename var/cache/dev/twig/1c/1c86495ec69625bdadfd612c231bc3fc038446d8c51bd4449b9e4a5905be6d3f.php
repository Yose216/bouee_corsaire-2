<?php

/* :besoin:show.html.twig */
class __TwigTemplate_316f93963a21681d01fe6a0e15d071e567e48f59c0c742c6da56a90c7b2b22d4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AppBundle::layout.html.twig", ":besoin:show.html.twig", 1);
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
        $__internal_8de831788ad900f679dea205a3973328785a13a5a48eb4722bdbe629d585c867 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8de831788ad900f679dea205a3973328785a13a5a48eb4722bdbe629d585c867->enter($__internal_8de831788ad900f679dea205a3973328785a13a5a48eb4722bdbe629d585c867_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":besoin:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8de831788ad900f679dea205a3973328785a13a5a48eb4722bdbe629d585c867->leave($__internal_8de831788ad900f679dea205a3973328785a13a5a48eb4722bdbe629d585c867_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_638c4e30048ce75aae47ca33eedf6b17d42805098e2ee250bd1ece7d7c229d9e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_638c4e30048ce75aae47ca33eedf6b17d42805098e2ee250bd1ece7d7c229d9e->enter($__internal_638c4e30048ce75aae47ca33eedf6b17d42805098e2ee250bd1ece7d7c229d9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
                <th>Description</th>
                <td>";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute(($context["besoin"] ?? $this->getContext($context, "besoin")), "description", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

<!--
    <ul>
        <li>
            <a href=\"";
        // line 44
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("besoin_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("besoin_edit", array("id" => $this->getAttribute(($context["besoin"] ?? $this->getContext($context, "besoin")), "id", array()))), "html", null, true);
        echo "\">Edit</a>
        </li>
        <li>
            ";
        // line 50
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 52
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
-->
";
        
        $__internal_638c4e30048ce75aae47ca33eedf6b17d42805098e2ee250bd1ece7d7c229d9e->leave($__internal_638c4e30048ce75aae47ca33eedf6b17d42805098e2ee250bd1ece7d7c229d9e_prof);

    }

    public function getTemplateName()
    {
        return ":besoin:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  120 => 52,  115 => 50,  109 => 47,  103 => 44,  92 => 36,  82 => 29,  75 => 25,  68 => 21,  61 => 17,  54 => 13,  47 => 9,  40 => 4,  34 => 3,  11 => 1,);
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
", ":besoin:show.html.twig", "/home/pcapprenant17/Documents/Bou-e_corsaire_projet/app/Resources/views/besoin/show.html.twig");
    }
}
