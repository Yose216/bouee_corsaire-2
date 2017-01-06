<?php

/* AppBundle:Profile:show.html.twig */
class __TwigTemplate_c5cd62358e69f8d57707476a9322cc7ab1472fa5f8e35ec5b0b69cc1be02f225 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AppBundle::layout.html.twig", "AppBundle:Profile:show.html.twig", 1);
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
        $__internal_70b89ac91715816484ca664c41100f1eb6fe0b57d42a270a152bd362cabf2589 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_70b89ac91715816484ca664c41100f1eb6fe0b57d42a270a152bd362cabf2589->enter($__internal_70b89ac91715816484ca664c41100f1eb6fe0b57d42a270a152bd362cabf2589_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Profile:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_70b89ac91715816484ca664c41100f1eb6fe0b57d42a270a152bd362cabf2589->leave($__internal_70b89ac91715816484ca664c41100f1eb6fe0b57d42a270a152bd362cabf2589_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_909a01a6e64906593c6df1e2ff50397c9376718538cd9bf3b38b29645cb396d2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_909a01a6e64906593c6df1e2ff50397c9376718538cd9bf3b38b29645cb396d2->enter($__internal_909a01a6e64906593c6df1e2ff50397c9376718538cd9bf3b38b29645cb396d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "
<body>
<h4>Hello, ";
        // line 5
        echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array()), "html", null, true);
        echo "</h4>
<h5>Quisque ut varius diam. Proin eget nulla et ipsum condimentum sodales.</h5>
\t
<div class=\"trait\"></div>
\t
<div class=\"wrapper\">
    <a href=\"#one\" class=\"btn active\">Mes informations</a>
\t<a href=\"#two\" class=\"btn\">Messages</a>
    <a href=\"#three\" class=\"btn\">Mes services et besoins</a>

      
      <hr/>
  
  <div class=\"slides\">
      <div class=\"sld\" id=\"#one\">
      <div class=\"container\">
  <h2>Détails du compte</h2>
\t\t  <div class=\"col-md-6 fr\">
    <div class=\"form-group\">
      <label for=\"nom\">Nom: ";
        // line 24
        echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "nom", array()), "html", null, true);
        echo "</label>
     
    </div>
\t     <div class=\"form-group\">
      <label for=\"prenom\">Prénom: ";
        // line 28
        echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "prenom", array()), "html", null, true);
        echo "</label>
    
    </div>
\t<div class=\"form-group\">
      <label for=\"prenom\">Nom d'utilisateur: ";
        // line 32
        echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array()), "html", null, true);
        echo "</label>
    
    </div>
\t     <div class=\"form-group\">
      <label for=\"pseudo\">Email: ";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "email", array()), "html", null, true);
        echo "</label>

    </div>
\t\t\t  </div>
\t\t  <div class=\"col-md-6 fr\">
\t<div>
\t\t<div class=\"form-group\">
    \t\t<label for=\"tel\">Adresse: ";
        // line 43
        echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "addresse", array()), "html", null, true);
        echo "</label>
\t\t</div>
    </div>
\t<div>
\t\t<div class=\"form-group\">
    \t\t<label for=\"tel\">Ville: ";
        // line 48
        echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "ville", array()), "html", null, true);
        echo "</label>
\t\t</div>
    </div>
\t<div>
\t\t<div class=\"form-group\">
    \t\t<label for=\"tel\">Region: ";
        // line 53
        echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "region", array()), "html", null, true);
        echo "</label>
\t\t</div>
    </div>
\t<div >
\t\t<div class=\"form-group\">
    \t\t<label for=\"codepostal\">Code postal: ";
        // line 58
        echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "codePostal", array()), "html", null, true);
        echo "</label>
\t\t</div>
    </div>
\t<div>
\t\t<div class=\"form-group\">
    \t\t<label for=\"tel\">Téléphone: ";
        // line 63
        echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "telephone", array()), "html", null, true);
        echo "</label>
\t\t</div>
    </div>
\t\t\t  </div>
  \t<a type=\"button\" class=\"btn btn-primary btnInfo col-lg-offset-2\" href=\"";
        // line 67
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_profile_edit");
        echo "\">Edition de mes informations</a>
\t  </div>
\t    </div>

      <div class=\"sld\" id=\"#two\">
\t\t <h2>Votre messagerie</h2>\t 
      </div>
      <div class=\"sld\" id=\"#three\">
      \t<div class=\"formulaire\">
      \t<h2>Formulaire de confirmation de service rendu</h2>
       <form class=\"search\">
      <div class=\"form-mail \">
        <input type=\"search\" class=\"input-lg-mail\" placeholder=\"E-mail du contact à qui vous avez rendu service \">
      </div>
       <div class=\"form-temps\">
        <input type=\"search\" class=\"input-sm\" placeholder=\"Temps en heure\">
      </div>
    </form>
       
      <button type=\"submit\" class=\"btnte btn-primary\">Envoyer</button>

    </div>
      <h2>Votre quota de services et besoins</h2>
\t\t  \t<div class=\"progress\">
  <div class=\"progress-bar progress-bar-success\" style=\"width: 25%\">
    <span class=\"sr-only\">25% Complete (success)</span>
  </div>
  <div class=\"progress-bar progress-bar-warning progress-bar-striped\" style=\"width: 57%\">
    <span class=\"sr-only\">57% Complete (warning)</span>
  </div>
\t\t  </div>
   <div class=\"blocs\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col-sm-6\">
\t\t\t\t<div><h2 class=\"ser\">Vos services</h2></div>
\t\t\t\t";
        // line 102
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "services", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["service"]) {
            // line 103
            echo "\t\t\t\t<div class=\"serv\">
\t\t\t\t<div class=\"temps\"> ";
            // line 104
            echo twig_escape_filter($this->env, $this->getAttribute($context["service"], "heure", array()), "html", null, true);
            echo "h</div>
\t\t\t\t\t<div class=\"infoser\">";
            // line 105
            echo twig_escape_filter($this->env, $this->getAttribute($context["service"], "title", array()), "html", null, true);
            echo " <br> ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["service"], "categorie", array()), "html", null, true);
            echo "</div>
\t\t\t\t</div>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['service'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 108
        echo "\t\t\t\t<div>
\t\t\t\t\t<a type=\"button\" class=\"btn-lg btn-primary\" href=\"";
        // line 109
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("service_new");
        echo "\">Ajouter un service</a>
\t\t\t\t</div>
\t\t\t</div>
  \t\t\t\t\t
\t\t\t<div class=\"col-sm-6\">
\t\t\t\t<div><h2 class=\"bes\">Vos besoins</h2></div>
\t\t\t\t";
        // line 115
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "besoins", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["besoin"]) {
            echo " 
\t\t\t\t<div class=\"besoin\">
\t\t\t\t\t<div class=\"temps\"> ";
            // line 117
            echo twig_escape_filter($this->env, $this->getAttribute($context["besoin"], "heure", array()), "html", null, true);
            echo "h</div>
\t\t\t\t\t<div class=\"infobes\"> ";
            // line 118
            echo twig_escape_filter($this->env, $this->getAttribute($context["besoin"], "title", array()), "html", null, true);
            echo " <br> ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["besoin"], "categorie", array()), "html", null, true);
            echo " </div>
\t\t\t\t</div>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['besoin'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 121
        echo "\t\t\t\t<div class=\"\">
\t\t\t\t\t<a type=\"button\" class=\"btn-lg btn-primary \" href=\"";
        // line 122
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("besoin_new");
        echo "\">Ajouter un besoin</a>
\t\t\t\t</div>\t
\t\t\t</div>
\t\t\t</div>
\t
\t</div>
      </div>
</div>
\t\t</div>

\t<script>
\t\t\$('.btn').click(function () {
\t\$('.active').removeClass('active');
    \$(this).addClass(\"active\");
});
\t</script>

";
        
        $__internal_909a01a6e64906593c6df1e2ff50397c9376718538cd9bf3b38b29645cb396d2->leave($__internal_909a01a6e64906593c6df1e2ff50397c9376718538cd9bf3b38b29645cb396d2_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Profile:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  233 => 122,  230 => 121,  219 => 118,  215 => 117,  208 => 115,  199 => 109,  196 => 108,  185 => 105,  181 => 104,  178 => 103,  174 => 102,  136 => 67,  129 => 63,  121 => 58,  113 => 53,  105 => 48,  97 => 43,  87 => 36,  80 => 32,  73 => 28,  66 => 24,  44 => 5,  40 => 3,  34 => 2,  11 => 1,);
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

<body>
<h4>Hello, {{ user.username }}</h4>
<h5>Quisque ut varius diam. Proin eget nulla et ipsum condimentum sodales.</h5>
\t
<div class=\"trait\"></div>
\t
<div class=\"wrapper\">
    <a href=\"#one\" class=\"btn active\">Mes informations</a>
\t<a href=\"#two\" class=\"btn\">Messages</a>
    <a href=\"#three\" class=\"btn\">Mes services et besoins</a>

      
      <hr/>
  
  <div class=\"slides\">
      <div class=\"sld\" id=\"#one\">
      <div class=\"container\">
  <h2>Détails du compte</h2>
\t\t  <div class=\"col-md-6 fr\">
    <div class=\"form-group\">
      <label for=\"nom\">Nom: {{ user.nom }}</label>
     
    </div>
\t     <div class=\"form-group\">
      <label for=\"prenom\">Prénom: {{ user.prenom }}</label>
    
    </div>
\t<div class=\"form-group\">
      <label for=\"prenom\">Nom d'utilisateur: {{ user.username }}</label>
    
    </div>
\t     <div class=\"form-group\">
      <label for=\"pseudo\">Email: {{ user.email }}</label>

    </div>
\t\t\t  </div>
\t\t  <div class=\"col-md-6 fr\">
\t<div>
\t\t<div class=\"form-group\">
    \t\t<label for=\"tel\">Adresse: {{ user.addresse }}</label>
\t\t</div>
    </div>
\t<div>
\t\t<div class=\"form-group\">
    \t\t<label for=\"tel\">Ville: {{ user.ville }}</label>
\t\t</div>
    </div>
\t<div>
\t\t<div class=\"form-group\">
    \t\t<label for=\"tel\">Region: {{ user.region }}</label>
\t\t</div>
    </div>
\t<div >
\t\t<div class=\"form-group\">
    \t\t<label for=\"codepostal\">Code postal: {{ user.codePostal }}</label>
\t\t</div>
    </div>
\t<div>
\t\t<div class=\"form-group\">
    \t\t<label for=\"tel\">Téléphone: {{ user.telephone }}</label>
\t\t</div>
    </div>
\t\t\t  </div>
  \t<a type=\"button\" class=\"btn btn-primary btnInfo col-lg-offset-2\" href=\"{{ path('fos_user_profile_edit') }}\">Edition de mes informations</a>
\t  </div>
\t    </div>

      <div class=\"sld\" id=\"#two\">
\t\t <h2>Votre messagerie</h2>\t 
      </div>
      <div class=\"sld\" id=\"#three\">
      \t<div class=\"formulaire\">
      \t<h2>Formulaire de confirmation de service rendu</h2>
       <form class=\"search\">
      <div class=\"form-mail \">
        <input type=\"search\" class=\"input-lg-mail\" placeholder=\"E-mail du contact à qui vous avez rendu service \">
      </div>
       <div class=\"form-temps\">
        <input type=\"search\" class=\"input-sm\" placeholder=\"Temps en heure\">
      </div>
    </form>
       
      <button type=\"submit\" class=\"btnte btn-primary\">Envoyer</button>

    </div>
      <h2>Votre quota de services et besoins</h2>
\t\t  \t<div class=\"progress\">
  <div class=\"progress-bar progress-bar-success\" style=\"width: 25%\">
    <span class=\"sr-only\">25% Complete (success)</span>
  </div>
  <div class=\"progress-bar progress-bar-warning progress-bar-striped\" style=\"width: 57%\">
    <span class=\"sr-only\">57% Complete (warning)</span>
  </div>
\t\t  </div>
   <div class=\"blocs\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col-sm-6\">
\t\t\t\t<div><h2 class=\"ser\">Vos services</h2></div>
\t\t\t\t{% for service in user.services %}
\t\t\t\t<div class=\"serv\">
\t\t\t\t<div class=\"temps\"> {{service.heure}}h</div>
\t\t\t\t\t<div class=\"infoser\">{{service.title}} <br> {{service.categorie}}</div>
\t\t\t\t</div>
\t\t\t\t{% endfor %}
\t\t\t\t<div>
\t\t\t\t\t<a type=\"button\" class=\"btn-lg btn-primary\" href=\"{{ path('service_new') }}\">Ajouter un service</a>
\t\t\t\t</div>
\t\t\t</div>
  \t\t\t\t\t
\t\t\t<div class=\"col-sm-6\">
\t\t\t\t<div><h2 class=\"bes\">Vos besoins</h2></div>
\t\t\t\t{% for besoin in user.besoins %} 
\t\t\t\t<div class=\"besoin\">
\t\t\t\t\t<div class=\"temps\"> {{besoin.heure}}h</div>
\t\t\t\t\t<div class=\"infobes\"> {{besoin.title}} <br> {{besoin.categorie}} </div>
\t\t\t\t</div>
\t\t\t\t{% endfor %}
\t\t\t\t<div class=\"\">
\t\t\t\t\t<a type=\"button\" class=\"btn-lg btn-primary \" href=\"{{ path('besoin_new') }}\">Ajouter un besoin</a>
\t\t\t\t</div>\t
\t\t\t</div>
\t\t\t</div>
\t
\t</div>
      </div>
</div>
\t\t</div>

\t<script>
\t\t\$('.btn').click(function () {
\t\$('.active').removeClass('active');
    \$(this).addClass(\"active\");
});
\t</script>

{% endblock %}", "AppBundle:Profile:show.html.twig", "/home/pcapprenant17/Documents/Bou-e_corsaire_projet/src/AppBundle/Resources/views/Profile/show.html.twig");
    }
}
