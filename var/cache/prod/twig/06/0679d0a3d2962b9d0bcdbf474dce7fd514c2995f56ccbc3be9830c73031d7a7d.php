<?php

/* :default:index.html.twig */
class __TwigTemplate_e24b267e12fa3b3771c063e173460fe067a1cb8975a4e3d3bafd144d70cbe5e6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AppBundle::layout.html.twig", ":default:index.html.twig", 1);
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    public function block_body($context, array $blocks = array())
    {
        // line 2
        echo "<div id=\"myCarousel\" class=\"carousel slide\" data-ride=\"carousel\">
\t\t<!-- Indicators -->
\t\t

\t\t<!-- Wrapper for slides -->
\t\t<div class=\"carousel-inner\" role=\"listbox\">
\t\t\t<div class=\"item active\">
\t\t\t\t<img class=\"images\" src=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", array()), "basepath", array()), "html", null, true);
        echo "/images/boueecorsaire.jpg\" alt=\"Image\">
\t\t\t\t<div class=\"carousel-caption\">
\t\t\t\t    <img src=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", array()), "basepath", array()), "html", null, true);
        echo "/images/help.svg\" alt=\"\">
\t\t\t\t\t<h3>LA BOUéE CORSAIRE</h3>
\t\t\t\t\t<p>LE SITE DE L'ÉCHANGE GRATUIT</p>
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<div class=\"item\">
\t\t\t\t<img class=\"images\" src=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", array()), "basepath", array()), "html", null, true);
        echo "/images/services.jpeg\" alt=\"Image\">
\t\t\t\t<div class=\"carousel-caption\">
\t\t\t\t    <img src=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", array()), "basepath", array()), "html", null, true);
        echo "/images/help.svg\" alt=\"\">
\t\t\t\t\t<h3>Services</h3>
\t\t\t\t\t<p>Toujours un temps d'avance pour votre service</p>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t
\t\t\t<div class=\"item\">
\t\t\t\t<img class=\"images\" src=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", array()), "basepath", array()), "html", null, true);
        echo "/images/besoins.jpeg\" alt=\"Image\">
\t\t\t\t<div class=\"carousel-caption\">
\t\t\t\t    <img src=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", array()), "basepath", array()), "html", null, true);
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
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", array()), "basepath", array()), "html", null, true);
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
\t\t\t<div class=\"col-sm-4 cadre\">
\t\t\t\t<img src=\"";
        // line 71
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", array()), "basepath", array()), "html", null, true);
        echo "/images/plombier.jpeg\" class=\"img-responsive\" style=\"width:100%\" alt=\"Image\">
\t\t\t\t<div class=\"service\">
\t\t\t\t<div class=\"heure\"><p class=\"nbheure\">H</p></div>
\t\t\t\t\t<p class=\"info\">Service<br>Categorie</p>
\t\t\t\t</div>
\t\t\t\t<div class=\"categorie\">
\t\t\t\t<div class=\"icone\"><img src=\"";
        // line 77
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", array()), "basepath", array()), "html", null, true);
        echo "/images/femme.jpeg\"></div>
\t\t\t\t\t<p class=\"identite\">Nom Prénom<br>code postal<br>Description</p>
\t\t\t\t</div>
\t\t\t
\t\t\t</div>

\t\t</div>
\t</div>
\t<br>

";
    }

    public function getTemplateName()
    {
        return ":default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  131 => 77,  122 => 71,  101 => 53,  74 => 29,  69 => 27,  59 => 20,  54 => 18,  44 => 11,  39 => 9,  30 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", ":default:index.html.twig", "/home/pcapprenant17/Documents/Bou-e_corsaire_projet/app/Resources/views/default/index.html.twig");
    }
}
