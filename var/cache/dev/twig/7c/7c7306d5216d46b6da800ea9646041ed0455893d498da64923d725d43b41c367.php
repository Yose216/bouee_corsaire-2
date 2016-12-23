<?php

/* ::service.html.twig */
class __TwigTemplate_fab786224f769656a8bcf1b2d206935e6dc7e1e79c9d78a775f711fae3926494 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AppBundle::layout.html.twig", "::service.html.twig", 1);
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
        $__internal_8e5e376d87d86b8b3177239a860c29231e69d874be8d43f1ec5c33cc90b076b1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8e5e376d87d86b8b3177239a860c29231e69d874be8d43f1ec5c33cc90b076b1->enter($__internal_8e5e376d87d86b8b3177239a860c29231e69d874be8d43f1ec5c33cc90b076b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::service.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8e5e376d87d86b8b3177239a860c29231e69d874be8d43f1ec5c33cc90b076b1->leave($__internal_8e5e376d87d86b8b3177239a860c29231e69d874be8d43f1ec5c33cc90b076b1_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_8c032ffbfd44cc052390ec1be5a4c35db28947c70a422bf8caf3fb1f9658dc8d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8c032ffbfd44cc052390ec1be5a4c35db28947c70a422bf8caf3fb1f9658dc8d->enter($__internal_8c032ffbfd44cc052390ec1be5a4c35db28947c70a422bf8caf3fb1f9658dc8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
                    <option>Animal</option>
                    <option>Cuisine</option>
                    <option>Enfant</option>
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
        // line 32
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["services"] ?? $this->getContext($context, "services")));
        foreach ($context['_seq'] as $context["_key"] => $context["service"]) {
            // line 33
            echo "\t\t\t<div class=\"col-sm-4 cadre\">
\t\t\t\t<img src=\"";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "basepath", array()), "html", null, true);
            echo "/images/travaux.jpeg\" class=\"img-responsive cadreimg\" alt=\"Image\">
\t\t\t\t<div class=\"service\">
\t\t\t\t<div class=\"heure\"><p class=\"nbheure\">";
            // line 36
            echo twig_escape_filter($this->env, $this->getAttribute($context["service"], "heure", array()), "html", null, true);
            echo "</p></div>
\t\t\t\t\t<p class=\"info\">";
            // line 37
            echo twig_escape_filter($this->env, $this->getAttribute($context["service"], "title", array()), "html", null, true);
            echo "<br>Catégorie</p>
\t\t\t\t</div>
\t\t\t\t<div class=\"categorie\">
\t\t\t\t<div class=\"icone\"><img src=\"\"></div>
\t\t\t\t\t<p class=\"identite\">";
            // line 41
            echo twig_escape_filter($this->env, $this->getAttribute($context["service"], "nom", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["service"], "prenom", array()), "html", null, true);
            echo "<br>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["service"], "codePostal", array()), "html", null, true);
            echo "<br>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["service"], "description", array()), "html", null, true);
            echo "</p>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['service'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 45
        echo "    </div>
            
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
        
        $__internal_8c032ffbfd44cc052390ec1be5a4c35db28947c70a422bf8caf3fb1f9658dc8d->leave($__internal_8c032ffbfd44cc052390ec1be5a4c35db28947c70a422bf8caf3fb1f9658dc8d_prof);

    }

    public function getTemplateName()
    {
        return "::service.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  110 => 45,  94 => 41,  87 => 37,  83 => 36,  78 => 34,  75 => 33,  71 => 32,  40 => 3,  34 => 2,  11 => 1,);
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
                    <option>Animal</option>
                    <option>Cuisine</option>
                    <option>Enfant</option>
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
\t\t\t{% for service in services %}
\t\t\t<div class=\"col-sm-4 cadre\">
\t\t\t\t<img src=\"{{ app.request.basepath }}/images/travaux.jpeg\" class=\"img-responsive cadreimg\" alt=\"Image\">
\t\t\t\t<div class=\"service\">
\t\t\t\t<div class=\"heure\"><p class=\"nbheure\">{{ service.heure }}</p></div>
\t\t\t\t\t<p class=\"info\">{{ service.title }}<br>Catégorie</p>
\t\t\t\t</div>
\t\t\t\t<div class=\"categorie\">
\t\t\t\t<div class=\"icone\"><img src=\"\"></div>
\t\t\t\t\t<p class=\"identite\">{{ service.nom }} {{ service.prenom }}<br>{{ service.codePostal }}<br>{{ service.description }}</p>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t{% endfor %}
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
", "::service.html.twig", "/home/pcapprenant17/Documents/Bou-e_corsaire_projet/app/Resources/views/service.html.twig");
    }
}
