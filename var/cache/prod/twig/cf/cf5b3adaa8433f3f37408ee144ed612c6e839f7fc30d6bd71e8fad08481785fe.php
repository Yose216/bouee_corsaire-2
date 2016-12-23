<?php

/* ::besoin.html.twig */
class __TwigTemplate_d10a8a9c82bf7aa831e492e83ac7919efdbef317467d3ee55d1c1db18800c764 extends Twig_Template
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
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
\t\t\t<div class=\"col-sm-4 cadre\">
\t\t\t\t<img src=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", array()), "basepath", array()), "html", null, true);
        echo "/images/besoin.jpeg\" class=\"img-responsive cadreimg\" alt=\"Image\">
\t\t\t\t<div class=\"service\">
\t\t\t\t<div class=\"heure\"><p class=\"nbheure\">H</p></div>
\t\t\t\t\t<p class=\"info\">Besoin<br>Catégorie</p>
\t\t\t\t</div>
\t\t\t\t<div class=\"categorie\">
\t\t\t\t<div class=\"icone\"><img src=\"\"></div>
\t\t\t\t\t<p class=\"identite\">Nom Prénom<br>code postal<br>Cum sociis natoque penatibus et magnis dis parturient montes.</p>
\t\t\t\t</div>
\t\t\t</div>
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

";
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
        return array (  64 => 34,  31 => 3,  28 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "::besoin.html.twig", "/home/pcapprenant17/Documents/Bou-e_corsaire_projet/app/Resources/views/besoin.html.twig");
    }
}
