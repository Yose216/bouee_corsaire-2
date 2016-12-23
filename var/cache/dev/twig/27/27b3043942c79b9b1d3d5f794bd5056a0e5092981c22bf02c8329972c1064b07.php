<?php

/* :service:index.html.twig */
class __TwigTemplate_3c5d8598c15ab515428a627226c68584e0bb1fb53629aabcefcbfae74fe66b3a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AppBundle::layout.html.twig", ":service:index.html.twig", 1);
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
        $__internal_40b4aff78fe41e11a104e64d1cb6f987c4bd9f0bae6aa587eab79af101d93700 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_40b4aff78fe41e11a104e64d1cb6f987c4bd9f0bae6aa587eab79af101d93700->enter($__internal_40b4aff78fe41e11a104e64d1cb6f987c4bd9f0bae6aa587eab79af101d93700_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":service:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_40b4aff78fe41e11a104e64d1cb6f987c4bd9f0bae6aa587eab79af101d93700->leave($__internal_40b4aff78fe41e11a104e64d1cb6f987c4bd9f0bae6aa587eab79af101d93700_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_a0c0847ff4ea47bae36d7e2ad99d6d3e535e3f7a84fb4da0d0f553d1bcc55acc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a0c0847ff4ea47bae36d7e2ad99d6d3e535e3f7a84fb4da0d0f553d1bcc55acc->enter($__internal_a0c0847ff4ea47bae36d7e2ad99d6d3e535e3f7a84fb4da0d0f553d1bcc55acc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
            echo twig_escape_filter($this->env, $this->getAttribute($context["service"], "user", array()), "html", null, true);
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
        
        $__internal_a0c0847ff4ea47bae36d7e2ad99d6d3e535e3f7a84fb4da0d0f553d1bcc55acc->leave($__internal_a0c0847ff4ea47bae36d7e2ad99d6d3e535e3f7a84fb4da0d0f553d1bcc55acc_prof);

    }

    public function getTemplateName()
    {
        return ":service:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  108 => 45,  94 => 41,  87 => 37,  83 => 36,  78 => 34,  75 => 33,  71 => 32,  40 => 3,  34 => 2,  11 => 1,);
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
\t\t\t\t\t<p class=\"identite\">{{ service.user}}<br>{{ service.codePostal }}<br>{{ service.description }}</p>
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
", ":service:index.html.twig", "/home/pcapprenant17/Documents/Bou-e_corsaire_projet/app/Resources/views/service/index.html.twig");
    }
}
