<?php

/* :besoin:index.html.twig */
class __TwigTemplate_19854024574aef1836f87c3d601deb6a0743d3016575d3f8daea6fcb3d68b96d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AppBundle::layout.html.twig", ":besoin:index.html.twig", 1);
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
        $__internal_8fc5755e46bb21b04eb45a0cf1f6cf46e7c75d0cfeef77a6dab65fea8a836e2e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8fc5755e46bb21b04eb45a0cf1f6cf46e7c75d0cfeef77a6dab65fea8a836e2e->enter($__internal_8fc5755e46bb21b04eb45a0cf1f6cf46e7c75d0cfeef77a6dab65fea8a836e2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":besoin:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8fc5755e46bb21b04eb45a0cf1f6cf46e7c75d0cfeef77a6dab65fea8a836e2e->leave($__internal_8fc5755e46bb21b04eb45a0cf1f6cf46e7c75d0cfeef77a6dab65fea8a836e2e_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_0747d85bae7a9260c49f991370243f406bbdf07c3558db373af2527bda45c27d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0747d85bae7a9260c49f991370243f406bbdf07c3558db373af2527bda45c27d->enter($__internal_0747d85bae7a9260c49f991370243f406bbdf07c3558db373af2527bda45c27d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "<body>
   
<div class=\"bloc\">
\t<div class=\"recherche \">
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
\t\t<div class=\"row\">
\t\t\t";
        // line 31
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["besoins"] ?? $this->getContext($context, "besoins")));
        foreach ($context['_seq'] as $context["_key"] => $context["besoin"]) {
            // line 32
            echo "\t\t\t<div class=\"col-sm-4 cadre\">
\t\t\t\t<img src=\"";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "basepath", array()), "html", null, true);
            echo "/images/besoin.jpeg\" class=\"img-responsive cadreimg\" alt=\"Image\">
\t\t\t\t<div class=\"service\">
\t\t\t\t<div class=\"heure\"><p class=\"nbheure\">";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute($context["besoin"], "heure", array()), "html", null, true);
            echo "H</p></div>
\t\t\t\t\t<p class=\"info\">";
            // line 36
            echo twig_escape_filter($this->env, $this->getAttribute($context["besoin"], "title", array()), "html", null, true);
            echo "<br>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["besoin"], "categorie", array()), "html", null, true);
            echo "</p>
\t\t\t\t</div>
\t\t\t\t<div class=\"categorie\">
\t\t\t\t<div class=\"heure\"><img src=\"\"/></div>
\t\t\t\t\t<p class=\"identite\">";
            // line 40
            echo twig_escape_filter($this->env, $this->getAttribute($context["besoin"], "user", array()), "html", null, true);
            echo " <br>";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["besoin"], "user", array()), "codePostal", array()), "html", null, true);
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
        // line 44
        echo "\t\t\t\t
    </div>
            
\t<br>
<div class=\"col-md-8 col-lg-offset-4\">
               <!--Pagination-->
               <nav aria-label=\"Page navigation \">
                   <ul class=\"pagination \">
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
\t</div>
</body>

";
        
        $__internal_0747d85bae7a9260c49f991370243f406bbdf07c3558db373af2527bda45c27d->leave($__internal_0747d85bae7a9260c49f991370243f406bbdf07c3558db373af2527bda45c27d_prof);

    }

    public function getTemplateName()
    {
        return ":besoin:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  109 => 44,  95 => 40,  86 => 36,  82 => 35,  77 => 33,  74 => 32,  70 => 31,  40 => 3,  34 => 2,  11 => 1,);
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
   
<div class=\"bloc\">
\t<div class=\"recherche \">
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
\t\t<div class=\"row\">
\t\t\t{% for besoin in besoins %}
\t\t\t<div class=\"col-sm-4 cadre\">
\t\t\t\t<img src=\"{{ app.request.basepath }}/images/besoin.jpeg\" class=\"img-responsive cadreimg\" alt=\"Image\">
\t\t\t\t<div class=\"service\">
\t\t\t\t<div class=\"heure\"><p class=\"nbheure\">{{ besoin.heure }}H</p></div>
\t\t\t\t\t<p class=\"info\">{{ besoin.title }}<br>{{ besoin.categorie }}</p>
\t\t\t\t</div>
\t\t\t\t<div class=\"categorie\">
\t\t\t\t<div class=\"heure\"><img src=\"\"/></div>
\t\t\t\t\t<p class=\"identite\">{{ besoin.user}} <br>{{ besoin.user.codePostal }}<br>{{ besoin.description }}</p>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t{% endfor %}
\t\t\t\t
    </div>
            
\t<br>
<div class=\"col-md-8 col-lg-offset-4\">
               <!--Pagination-->
               <nav aria-label=\"Page navigation \">
                   <ul class=\"pagination \">
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
\t</div>
</body>

{% endblock %}
", ":besoin:index.html.twig", "/home/pcapprenant17/Documents/Bou-e_corsaire_projet/app/Resources/views/besoin/index.html.twig");
    }
}
