<?php

/* ::besoin.html.twig */
class __TwigTemplate_8c87d2cc285abe2fa79559313def1e7e9091ef627d405c8a7e2d8d2d02f13acb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AppBundle::layout.html.twig", "::besoin.html.twig", 1);
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
        $__internal_93d75503128f1f744691aa9e88172cd4c0bb21d047ed30becc6a552c28326335 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_93d75503128f1f744691aa9e88172cd4c0bb21d047ed30becc6a552c28326335->enter($__internal_93d75503128f1f744691aa9e88172cd4c0bb21d047ed30becc6a552c28326335_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::besoin.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_93d75503128f1f744691aa9e88172cd4c0bb21d047ed30becc6a552c28326335->leave($__internal_93d75503128f1f744691aa9e88172cd4c0bb21d047ed30becc6a552c28326335_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_520182bd0dba23bf4fce1fe3fa6b3af495720fa6ef417b5b5b8a8ce3058abffe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_520182bd0dba23bf4fce1fe3fa6b3af495720fa6ef417b5b5b8a8ce3058abffe->enter($__internal_520182bd0dba23bf4fce1fe3fa6b3af495720fa6ef417b5b5b8a8ce3058abffe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "<body>

\t
    
<div class=\"bloc\">
\t<div class=\"recherche\">
       <form class=\"search\">
      <div class=\"form-rech \">
        <input type=\"search\" class=\"input-lg\" placeholder=\"Recherche\">
      </div>
           <div class=\"form-rech\">
                  <select class=\"selectpicker\">
                    <option>Informatique</option>
                    <option>Aide ménage</option>
                    <option>Aide devoir</option>
                    <option>Réparation</option>
                  </select>
  
      </div>
       <div class=\"form-rech\">
        <input type=\"search\" class=\" form-control taille\" placeholder=\"Code postale\">
      </div>
   
    </form>
       
      <button type=\"submit\" class=\"btnch btn-primary\">Rechercher</button>

    </div>
\t\t<br>
\t\t<div class=\"row \">
\t\t\t";
        // line 33
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["besoins"] ?? $this->getContext($context, "besoins")));
        foreach ($context['_seq'] as $context["_key"] => $context["besoin"]) {
            // line 34
            echo "\t\t\t<div class=\"col-sm-4 cadre\">
\t\t\t\t<img src=\"";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "basepath", array()), "html", null, true);
            echo "/images/besoin.jpeg\" class=\"img-responsive cadreimg\" alt=\"Image\">
\t\t\t\t<div class=\"service\">
\t\t\t\t<div class=\"heure\"><p class=\"nbheure\">";
            // line 37
            echo twig_escape_filter($this->env, $this->getAttribute($context["besoin"], "heure", array()), "html", null, true);
            echo "</p></div>
\t\t\t\t\t<p class=\"info\">";
            // line 38
            echo twig_escape_filter($this->env, $this->getAttribute($context["besoin"], "title", array()), "html", null, true);
            echo "<br>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["besoin"], "categorie", array()), "html", null, true);
            echo "</p>
\t\t\t\t</div>
\t\t\t\t<div class=\"categorie\">
\t\t\t\t<div class=\"icone\"><img src=\"\"></div>
\t\t\t\t\t<p class=\"identite\">";
            // line 42
            echo twig_escape_filter($this->env, $this->getAttribute(($context["advert"] ?? $this->getContext($context, "advert")), "title", array()), "html", null, true);
            echo "<br>";
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
        // line 46
        echo "\t\t\t\t
    </div>
            
\t<br>
<div class=\"col-md-12 text-center\">
               <!--Pagination-->
               <nav aria-label=\"Page navigation\">
                   <ul class=\"pagination\">
                       <li>
                           <a href=\"#\" aria-label=\"Previous\">
                               <span aria-hidden=\"true\">&laquo;</span>
                           </a>
                       </li>
                       <li><a href=\"#\">1</a></li>
                       <li><a href=\"#\">2</a></li>
                       <li><a href=\"#\">3</a></li>
                       <li><a href=\"#\">4</a></li>
                       <li><a href=\"#\">5</a></li>
                       <li>
                           <a href=\"#\" aria-label=\"Next\">
                               <span aria-hidden=\"true\">&raquo;</span>
                           </a>
                       </li>
                   </ul>
               </nav>
           </div>
\t

</body>

";
        
        $__internal_520182bd0dba23bf4fce1fe3fa6b3af495720fa6ef417b5b5b8a8ce3058abffe->leave($__internal_520182bd0dba23bf4fce1fe3fa6b3af495720fa6ef417b5b5b8a8ce3058abffe_prof);

    }

    public function getTemplateName()
    {
        return "::besoin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  111 => 46,  97 => 42,  88 => 38,  84 => 37,  79 => 35,  76 => 34,  72 => 33,  40 => 3,  34 => 2,  11 => 1,);
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

\t
    
<div class=\"bloc\">
\t<div class=\"recherche\">
       <form class=\"search\">
      <div class=\"form-rech \">
        <input type=\"search\" class=\"input-lg\" placeholder=\"Recherche\">
      </div>
           <div class=\"form-rech\">
                  <select class=\"selectpicker\">
                    <option>Informatique</option>
                    <option>Aide ménage</option>
                    <option>Aide devoir</option>
                    <option>Réparation</option>
                  </select>
  
      </div>
       <div class=\"form-rech\">
        <input type=\"search\" class=\" form-control taille\" placeholder=\"Code postale\">
      </div>
   
    </form>
       
      <button type=\"submit\" class=\"btnch btn-primary\">Rechercher</button>

    </div>
\t\t<br>
\t\t<div class=\"row \">
\t\t\t{% for besoin in besoins %}
\t\t\t<div class=\"col-sm-4 cadre\">
\t\t\t\t<img src=\"{{ app.request.basepath }}/images/besoin.jpeg\" class=\"img-responsive cadreimg\" alt=\"Image\">
\t\t\t\t<div class=\"service\">
\t\t\t\t<div class=\"heure\"><p class=\"nbheure\">{{ besoin.heure }}</p></div>
\t\t\t\t\t<p class=\"info\">{{ besoin.title }}<br>{{ besoin.categorie }}</p>
\t\t\t\t</div>
\t\t\t\t<div class=\"categorie\">
\t\t\t\t<div class=\"icone\"><img src=\"\"></div>
\t\t\t\t\t<p class=\"identite\">{{ advert.title }}<br>{{ besoin.codePostale }}<br>{{ besoin.description }}</p>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t{% endfor %}
\t\t\t\t
    </div>
            
\t<br>
<div class=\"col-md-12 text-center\">
               <!--Pagination-->
               <nav aria-label=\"Page navigation\">
                   <ul class=\"pagination\">
                       <li>
                           <a href=\"#\" aria-label=\"Previous\">
                               <span aria-hidden=\"true\">&laquo;</span>
                           </a>
                       </li>
                       <li><a href=\"#\">1</a></li>
                       <li><a href=\"#\">2</a></li>
                       <li><a href=\"#\">3</a></li>
                       <li><a href=\"#\">4</a></li>
                       <li><a href=\"#\">5</a></li>
                       <li>
                           <a href=\"#\" aria-label=\"Next\">
                               <span aria-hidden=\"true\">&raquo;</span>
                           </a>
                       </li>
                   </ul>
               </nav>
           </div>
\t

</body>

{% endblock %}
", "::besoin.html.twig", "/home/pcapprenant17/Documents/Bou-e_corsaire_projet/app/Resources/views/besoin.html.twig");
    }
}
