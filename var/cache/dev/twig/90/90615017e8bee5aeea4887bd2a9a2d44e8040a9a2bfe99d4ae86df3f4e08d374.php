<?php

/* default/index.html.twig */
class __TwigTemplate_0ef5b3e1ef1a74a0a80a3223ff9c3830ffa44ec11c569ad9c9123bf5a4ae1018 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AppBundle::layout.html.twig", "default/index.html.twig", 1);
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
        $__internal_735cc97d915c2980477745007edb7cb59fffbb1a2b7575c9d7984f6ed3049c97 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_735cc97d915c2980477745007edb7cb59fffbb1a2b7575c9d7984f6ed3049c97->enter($__internal_735cc97d915c2980477745007edb7cb59fffbb1a2b7575c9d7984f6ed3049c97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_735cc97d915c2980477745007edb7cb59fffbb1a2b7575c9d7984f6ed3049c97->leave($__internal_735cc97d915c2980477745007edb7cb59fffbb1a2b7575c9d7984f6ed3049c97_prof);

    }

    public function block_body($context, array $blocks = array())
    {
        $__internal_6acc3e9c160d0354def16785c9429957895bb4bfe18b340dd32037afdcf350ba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6acc3e9c160d0354def16785c9429957895bb4bfe18b340dd32037afdcf350ba->enter($__internal_6acc3e9c160d0354def16785c9429957895bb4bfe18b340dd32037afdcf350ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 2
        echo "<div id=\"myCarousel\" class=\"carousel slide\" data-ride=\"carousel\">
\t\t<!-- Indicators -->
\t\t

\t\t<!-- Wrapper for slides -->
\t\t<div class=\"carousel-inner\" role=\"listbox\">
\t\t\t<div class=\"item active\">
\t\t\t\t<img class=\"images\" src=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "basepath", array()), "html", null, true);
        echo "/images/boueecorsaire.jpg\" alt=\"Image\">
\t\t\t\t<div class=\"carousel-caption\">
\t\t\t\t    <img src=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "basepath", array()), "html", null, true);
        echo "/images/help.svg\" alt=\"\">
\t\t\t\t\t<h3>LA BOUéE CORSAIRE</h3>
\t\t\t\t\t<p>LE SITE DE L'ÉCHANGE GRATUIT</p>
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<div class=\"item\">
\t\t\t\t<img class=\"images\" src=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "basepath", array()), "html", null, true);
        echo "/images/services.jpeg\" alt=\"Image\">
\t\t\t\t<div class=\"carousel-caption\">
\t\t\t\t    <img src=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "basepath", array()), "html", null, true);
        echo "/images/help.svg\" alt=\"\">
\t\t\t\t\t<h3>Services</h3>
\t\t\t\t\t<p>Toujours un temps d'avance pour votre service</p>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t
\t\t\t<div class=\"item\">
\t\t\t\t<img class=\"images\" src=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "basepath", array()), "html", null, true);
        echo "/images/besoins.jpeg\" alt=\"Image\">
\t\t\t\t<div class=\"carousel-caption\">
\t\t\t\t    <img src=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "basepath", array()), "html", null, true);
        echo "/images/help.svg\" alt=\"\">
\t\t\t\t\t<h3>Besoins</h3>
\t\t\t\t\t<p>Toujours de la bonne personne</p>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t\t<!-- Left and right controls -->
\t\t<a class=\"left carousel-control\" href=\"#myCarousel\" role=\"button\" data-slide=\"prev\">
\t\t\t<span class=\"glyphicon glyphicon-chevron-left\" aria-hidden=\"true\"></span>
\t\t\t<span class=\"sr-only\">Previous</span>
\t\t</a>
\t\t<a class=\"right carousel-control\" href=\"#myCarousel\" role=\"button\" data-slide=\"next\">
\t\t\t<span class=\"glyphicon glyphicon-chevron-right\" aria-hidden=\"true\"></span>
\t\t\t<span class=\"sr-only\">Next</span>
\t\t</a>
\t</div>

\t
\t

\t<div class=\"container text-center\">

\t\t\t<!--<div class=\"col-sm-12\">-->
\t\t\t\t<div class=\"well\">
\t\t\t\t<img class=\"imgpres\" src=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "basepath", array()), "html", null, true);
        echo "/images/boueecorsaire.jpg\">
                <div class=\"text-presentation\">
                    <p class=\"presentation\">Troc & Co</p>
                    <div class=\"traitsimple\"></div>
                    <p class=\"textpres\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris in turpis in purus consequat imperdiet sed non ante. Curabitur dictum leo quis auctor facilisis. Curabitur viverra arcu sed nibh bibendum, malesuada commodo leo auctor. Vivamus in neque eu metus interdum ultrices. Aliquam auctor lorem a commodo fermentum. Praesent eu sapien bibendum, interdum neque ac, posuere mi. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Quisque ut varius diam. Proin eget nulla et ipsum condimentum sodales Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas distinctio iusto temporibus a, impedit amet ratione nemo aspernatur, nulla veritatis illo blanditiis rem optio pariatur alias, asperiores error voluptatem sapiente.Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
\t\t\t\t</div>    
                </div>
\t\t\t
\t
\t<div class=\"intro\">
\t\t<h3>Troc & Co</h3>
\t\t<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent eu sapien bibendum, interdum neque ac, posuere mi. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Quisque ut varius diam. </p>
\t\t<div></div>
\t\t</div>
   
    <div class=\"pave\">
\t\t<div class=\"row\">
<!--
\t\t\t<div class=\"col-sm-4 cadre\">
\t\t\t\t<img src=\"";
        // line 72
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "basepath", array()), "html", null, true);
        echo "/images/plombier.jpeg\" class=\"img-responsive\" style=\"width:100%\" alt=\"Image\">
\t\t\t\t<div class=\"service\">
\t\t\t\t<div class=\"heure\"><p class=\"nbheure\">H</p></div>
\t\t\t\t\t<p class=\"info\">Service<br>Categorie</p>
\t\t\t\t</div>
\t\t\t\t<div class=\"categorie\">
\t\t\t\t<div class=\"icone\"><img src=\"";
        // line 78
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "basepath", array()), "html", null, true);
        echo "/images/femme.jpeg\"></div>
\t\t\t\t\t<p class=\"identite\">Nom Prénom<br>code postal<br>Description</p>
\t\t\t\t</div>
\t\t\t
\t\t\t</div>
-->
\t\t\t";
        // line 84
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_slice($this->env, ($context["besoins"] ?? $this->getContext($context, "besoins")), 0, 6));
        foreach ($context['_seq'] as $context["_key"] => $context["besoin"]) {
            // line 85
            echo "\t\t\t<div class=\"col-sm-4 cadre\">
\t\t\t\t<img src=\"";
            // line 86
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "basepath", array()), "html", null, true);
            echo "/images/besoin.jpeg\" class=\"img-responsive cadreimg\" alt=\"Image\">
\t\t\t\t<div class=\"service\">
\t\t\t\t<div class=\"heure\"><p class=\"nbheure\">";
            // line 88
            echo twig_escape_filter($this->env, $this->getAttribute($context["besoin"], "heure", array()), "html", null, true);
            echo "H</p></div>
\t\t\t\t\t<p class=\"info\">";
            // line 89
            echo twig_escape_filter($this->env, $this->getAttribute($context["besoin"], "title", array()), "html", null, true);
            echo "<br>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["besoin"], "categorie", array()), "html", null, true);
            echo "</p>
\t\t\t\t</div>
\t\t\t\t<div class=\"categorie\">
\t\t\t\t<div class=\"icone\"><img src=\"\"></div>
\t\t\t\t\t<p class=\"identite\">
\t\t\t\t\t\t";
            // line 94
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["besoin"], "user", array()), "prenom", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["besoin"], "user", array()), "nom", array()), "html", null, true);
            echo "
  \t\t\t\t\t<br>";
            // line 95
            echo twig_escape_filter($this->env, $this->getAttribute($context["besoin"], "codePostale", array()), "html", null, true);
            echo "<br>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["besoin"], "description", array()), "html", null, true);
            echo "</p>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['besoin'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 99
        echo "
\t\t</div>
\t</div>
\t<br>

";
        
        $__internal_6acc3e9c160d0354def16785c9429957895bb4bfe18b340dd32037afdcf350ba->leave($__internal_6acc3e9c160d0354def16785c9429957895bb4bfe18b340dd32037afdcf350ba_prof);

    }

    public function getTemplateName()
    {
        return "default/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  194 => 99,  182 => 95,  176 => 94,  166 => 89,  162 => 88,  157 => 86,  154 => 85,  150 => 84,  141 => 78,  132 => 72,  110 => 53,  83 => 29,  78 => 27,  68 => 20,  63 => 18,  53 => 11,  48 => 9,  39 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'AppBundle::layout.html.twig' %} {% block body %}
<div id=\"myCarousel\" class=\"carousel slide\" data-ride=\"carousel\">
\t\t<!-- Indicators -->
\t\t

\t\t<!-- Wrapper for slides -->
\t\t<div class=\"carousel-inner\" role=\"listbox\">
\t\t\t<div class=\"item active\">
\t\t\t\t<img class=\"images\" src=\"{{ app.request.basepath }}/images/boueecorsaire.jpg\" alt=\"Image\">
\t\t\t\t<div class=\"carousel-caption\">
\t\t\t\t    <img src=\"{{ app.request.basepath }}/images/help.svg\" alt=\"\">
\t\t\t\t\t<h3>LA BOUéE CORSAIRE</h3>
\t\t\t\t\t<p>LE SITE DE L'ÉCHANGE GRATUIT</p>
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<div class=\"item\">
\t\t\t\t<img class=\"images\" src=\"{{ app.request.basepath }}/images/services.jpeg\" alt=\"Image\">
\t\t\t\t<div class=\"carousel-caption\">
\t\t\t\t    <img src=\"{{ app.request.basepath }}/images/help.svg\" alt=\"\">
\t\t\t\t\t<h3>Services</h3>
\t\t\t\t\t<p>Toujours un temps d'avance pour votre service</p>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t
\t\t\t<div class=\"item\">
\t\t\t\t<img class=\"images\" src=\"{{ app.request.basepath }}/images/besoins.jpeg\" alt=\"Image\">
\t\t\t\t<div class=\"carousel-caption\">
\t\t\t\t    <img src=\"{{ app.request.basepath }}/images/help.svg\" alt=\"\">
\t\t\t\t\t<h3>Besoins</h3>
\t\t\t\t\t<p>Toujours de la bonne personne</p>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t\t<!-- Left and right controls -->
\t\t<a class=\"left carousel-control\" href=\"#myCarousel\" role=\"button\" data-slide=\"prev\">
\t\t\t<span class=\"glyphicon glyphicon-chevron-left\" aria-hidden=\"true\"></span>
\t\t\t<span class=\"sr-only\">Previous</span>
\t\t</a>
\t\t<a class=\"right carousel-control\" href=\"#myCarousel\" role=\"button\" data-slide=\"next\">
\t\t\t<span class=\"glyphicon glyphicon-chevron-right\" aria-hidden=\"true\"></span>
\t\t\t<span class=\"sr-only\">Next</span>
\t\t</a>
\t</div>

\t
\t

\t<div class=\"container text-center\">

\t\t\t<!--<div class=\"col-sm-12\">-->
\t\t\t\t<div class=\"well\">
\t\t\t\t<img class=\"imgpres\" src=\"{{ app.request.basepath }}/images/boueecorsaire.jpg\">
                <div class=\"text-presentation\">
                    <p class=\"presentation\">Troc & Co</p>
                    <div class=\"traitsimple\"></div>
                    <p class=\"textpres\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris in turpis in purus consequat imperdiet sed non ante. Curabitur dictum leo quis auctor facilisis. Curabitur viverra arcu sed nibh bibendum, malesuada commodo leo auctor. Vivamus in neque eu metus interdum ultrices. Aliquam auctor lorem a commodo fermentum. Praesent eu sapien bibendum, interdum neque ac, posuere mi. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Quisque ut varius diam. Proin eget nulla et ipsum condimentum sodales Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas distinctio iusto temporibus a, impedit amet ratione nemo aspernatur, nulla veritatis illo blanditiis rem optio pariatur alias, asperiores error voluptatem sapiente.Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
\t\t\t\t</div>    
                </div>
\t\t\t
\t
\t<div class=\"intro\">
\t\t<h3>Troc & Co</h3>
\t\t<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent eu sapien bibendum, interdum neque ac, posuere mi. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Quisque ut varius diam. </p>
\t\t<div></div>
\t\t</div>
   
    <div class=\"pave\">
\t\t<div class=\"row\">
<!--
\t\t\t<div class=\"col-sm-4 cadre\">
\t\t\t\t<img src=\"{{ app.request.basepath }}/images/plombier.jpeg\" class=\"img-responsive\" style=\"width:100%\" alt=\"Image\">
\t\t\t\t<div class=\"service\">
\t\t\t\t<div class=\"heure\"><p class=\"nbheure\">H</p></div>
\t\t\t\t\t<p class=\"info\">Service<br>Categorie</p>
\t\t\t\t</div>
\t\t\t\t<div class=\"categorie\">
\t\t\t\t<div class=\"icone\"><img src=\"{{ app.request.basepath }}/images/femme.jpeg\"></div>
\t\t\t\t\t<p class=\"identite\">Nom Prénom<br>code postal<br>Description</p>
\t\t\t\t</div>
\t\t\t
\t\t\t</div>
-->
\t\t\t{% for besoin in besoins | slice(0,6) %}
\t\t\t<div class=\"col-sm-4 cadre\">
\t\t\t\t<img src=\"{{ app.request.basepath }}/images/besoin.jpeg\" class=\"img-responsive cadreimg\" alt=\"Image\">
\t\t\t\t<div class=\"service\">
\t\t\t\t<div class=\"heure\"><p class=\"nbheure\">{{ besoin.heure }}H</p></div>
\t\t\t\t\t<p class=\"info\">{{ besoin.title }}<br>{{ besoin.categorie }}</p>
\t\t\t\t</div>
\t\t\t\t<div class=\"categorie\">
\t\t\t\t<div class=\"icone\"><img src=\"\"></div>
\t\t\t\t\t<p class=\"identite\">
\t\t\t\t\t\t{{ besoin.user.prenom}} {{ besoin.user.nom }}
  \t\t\t\t\t<br>{{ besoin.codePostale }}<br>{{ besoin.description }}</p>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t{% endfor %}

\t\t</div>
\t</div>
\t<br>

{% endblock %}
", "default/index.html.twig", "/home/pcapprenant17/Documents/Bou-e_corsaire_projet/app/Resources/views/default/index.html.twig");
    }
}
