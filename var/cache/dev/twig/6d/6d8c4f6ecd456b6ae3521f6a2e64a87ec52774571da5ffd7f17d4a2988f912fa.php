<?php

/* :besoin:index2.html.twig */
class __TwigTemplate_f4c2de084e18d69755509c75d4a687ec6282e4099c15840f0942b750895a9ea8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AppBundle::layout.html.twig", ":besoin:index2.html.twig", 1);
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
        $__internal_524e2bdd90ee590dd7091da08eb0cddf966be8ee89e752bcca18b1a57627e1e4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_524e2bdd90ee590dd7091da08eb0cddf966be8ee89e752bcca18b1a57627e1e4->enter($__internal_524e2bdd90ee590dd7091da08eb0cddf966be8ee89e752bcca18b1a57627e1e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":besoin:index2.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_524e2bdd90ee590dd7091da08eb0cddf966be8ee89e752bcca18b1a57627e1e4->leave($__internal_524e2bdd90ee590dd7091da08eb0cddf966be8ee89e752bcca18b1a57627e1e4_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_31571c6a309bb656cf1f92ca6ea0eca5681c0742e8af76c799402bad58c3652d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_31571c6a309bb656cf1f92ca6ea0eca5681c0742e8af76c799402bad58c3652d->enter($__internal_31571c6a309bb656cf1f92ca6ea0eca5681c0742e8af76c799402bad58c3652d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Besoins list</h1>

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
                <th>Codepostale</th>
                <th>Description</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["besoins"] ?? $this->getContext($context, "besoins")));
        foreach ($context['_seq'] as $context["_key"] => $context["besoin"]) {
            // line 24
            echo "            <tr>
                <td><a href=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("besoin_show", array("id" => $this->getAttribute($context["besoin"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["besoin"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["besoin"], "title", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($context["besoin"], "image", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($context["besoin"], "heure", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute($context["besoin"], "categorie", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($context["besoin"], "nom", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute($context["besoin"], "prenom", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute($context["besoin"], "adresse", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute($context["besoin"], "codePostale", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute($context["besoin"], "description", array()), "html", null, true);
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 38
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("besoin_show", array("id" => $this->getAttribute($context["besoin"], "id", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 41
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("besoin_edit", array("id" => $this->getAttribute($context["besoin"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['besoin'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 47
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 52
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("besoin_new");
        echo "\">Create a new besoin</a>
        </li>
    </ul>
";
        
        $__internal_31571c6a309bb656cf1f92ca6ea0eca5681c0742e8af76c799402bad58c3652d->leave($__internal_31571c6a309bb656cf1f92ca6ea0eca5681c0742e8af76c799402bad58c3652d_prof);

    }

    public function getTemplateName()
    {
        return ":besoin:index2.html.twig";
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
    <h1>Besoins list</h1>

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
                <th>Codepostale</th>
                <th>Description</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        {% for besoin in besoins %}
            <tr>
                <td><a href=\"{{ path('besoin_show', { 'id': besoin.id }) }}\">{{ besoin.id }}</a></td>
                <td>{{ besoin.title }}</td>
                <td>{{ besoin.image }}</td>
                <td>{{ besoin.heure }}</td>
                <td>{{ besoin.categorie }}</td>
                <td>{{ besoin.nom }}</td>
                <td>{{ besoin.prenom }}</td>
                <td>{{ besoin.adresse }}</td>
                <td>{{ besoin.codePostale }}</td>
                <td>{{ besoin.description }}</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"{{ path('besoin_show', { 'id': besoin.id }) }}\">show</a>
                        </li>
                        <li>
                            <a href=\"{{ path('besoin_edit', { 'id': besoin.id }) }}\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('besoin_new') }}\">Create a new besoin</a>
        </li>
    </ul>
{% endblock %}
", ":besoin:index2.html.twig", "/home/pcapprenant17/Documents/Bou-e_corsaire_projet/app/Resources/views/besoin/index2.html.twig");
    }
}
