<?php

/* @App/Profile/profil.html */
class __TwigTemplate_c70aa5e47864e7fda997170e943b7b4dab39ac06f56c86d88dcbc53130519df4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c9cd2588c7314db7587c20fd5b89e450a6dea4bdffd4f6bd16a0cddcfd7da35d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c9cd2588c7314db7587c20fd5b89e450a6dea4bdffd4f6bd16a0cddcfd7da35d->enter($__internal_c9cd2588c7314db7587c20fd5b89e450a6dea4bdffd4f6bd16a0cddcfd7da35d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@App/Profile/profil.html"));

        // line 1
        echo "<!DOCTYPE html>
<html>

<head>
\t<title>Profil</title>
\t<meta charset=\"utf-8\">
\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
\t<link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\">
\t<link rel=\"stylesheet\" type=\"text/css\" href=\"css/style.css\">
\t<script src=\"css/script.js\"></script>
\t<script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js\"></script>
\t<script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\"></script>

</head>

<body>
<h4>Hello, ";
        // line 17
        echo twig_escape_filter($this->env, ($context["prénom"] ?? $this->getContext($context, "prénom")), "html", null, true);
        echo "</h4>
<h5>Quisque ut varius diam. Proin eget nulla et ipsum condimentum sodales.</h5>
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
  <form>
    <div class=\"form-group\">
      <label for=\"nom\">Nom:</label>
     
    </div>
\t     <div class=\"form-group\">
      <label for=\"prenom\">Prénom:</label>
    
    </div>
\t     <div class=\"form-group\">
      <label for=\"pseudo\">Pseudo:</label>

    </div>
    <div class=\"form-group\">
      <label for=\"pwd\">Mot de passe:</label>
      <input type=\"password\" class=\"form-control\" id=\"pwd\" placeholder=\"Enter votre mot de passe\">
    </div>
\t     <div class=\"form-group\">
      <label for=\"repeatpwd\">Répeter mot de passe:</label>
      <input type=\"password\" class=\"form-control\" id=\"repeatpwd\" placeholder=\"Enter a nouveau votre mot de passe\">
    </div>
\t     <div class=\"form-group\">
      <label for=\"codepostal\">Code postal:</label>
      <input type=\"codepostal\" class=\"form-control\" id=\"codepostal\" placeholder=\"Enter votre code postal\">
    </div>
\t     <div class=\"form-group\">
      <label for=\"tel\">Téléphone:</label>
      <input type=\"telephone\" class=\"form-control\" id=\"tel\" placeholder=\"Enter votre numéro de téléphone\">
    </div>
      
\t     <div class=\"form-group\">
      <label for=\"status\">Status téléphone:</label>
                  <select class=\"col-md-12 tel\">
                    <option>Public</option>
                    <option>Pour vos contact</option>
                    <option>Pour les utilisteurs</option>
                    <option>Privé</option>
                  </select>
    </div>
    <button type=\"submit\" class=\"btn btn-default btnsub\">Submit</button>
  </form>
\t  </div>
\t    </div>

      <div class=\"sld\" id=\"#two\">
\t\t <h2>Votre messagerie</h2>\t 
      </div>
      <div class=\"sld\" id=\"#three\">
      \t<div class=\"\">
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
\t\t\t\t<div><h2>vos services</h2></div>
\t\t\t\t<div class=\"serv\">
\t\t\t\t<div class=\"temps\">h</div>
\t\t\t\t\t<div class=\"infoser\">Service<br>catégorie</div>
\t\t\t\t</div>\t
\t\t\t</div>
\t\t\t<div class=\"col-sm-6\">
\t\t\t\t<div><h2>vos Besoins</h2></div>
\t\t\t\t<div class=\"besoin\">
\t\t\t\t<div class=\"temps\">h</div>
\t\t\t\t\t<div class=\"infobes\">Besoin<br>catégorie</div>
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

</body>

</html>";
        
        $__internal_c9cd2588c7314db7587c20fd5b89e450a6dea4bdffd4f6bd16a0cddcfd7da35d->leave($__internal_c9cd2588c7314db7587c20fd5b89e450a6dea4bdffd4f6bd16a0cddcfd7da35d_prof);

    }

    public function getTemplateName()
    {
        return "@App/Profile/profil.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 17,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>

<head>
\t<title>Profil</title>
\t<meta charset=\"utf-8\">
\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
\t<link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\">
\t<link rel=\"stylesheet\" type=\"text/css\" href=\"css/style.css\">
\t<script src=\"css/script.js\"></script>
\t<script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js\"></script>
\t<script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\"></script>

</head>

<body>
<h4>Hello, {{prénom}}</h4>
<h5>Quisque ut varius diam. Proin eget nulla et ipsum condimentum sodales.</h5>
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
  <form>
    <div class=\"form-group\">
      <label for=\"nom\">Nom:</label>
     
    </div>
\t     <div class=\"form-group\">
      <label for=\"prenom\">Prénom:</label>
    
    </div>
\t     <div class=\"form-group\">
      <label for=\"pseudo\">Pseudo:</label>

    </div>
    <div class=\"form-group\">
      <label for=\"pwd\">Mot de passe:</label>
      <input type=\"password\" class=\"form-control\" id=\"pwd\" placeholder=\"Enter votre mot de passe\">
    </div>
\t     <div class=\"form-group\">
      <label for=\"repeatpwd\">Répeter mot de passe:</label>
      <input type=\"password\" class=\"form-control\" id=\"repeatpwd\" placeholder=\"Enter a nouveau votre mot de passe\">
    </div>
\t     <div class=\"form-group\">
      <label for=\"codepostal\">Code postal:</label>
      <input type=\"codepostal\" class=\"form-control\" id=\"codepostal\" placeholder=\"Enter votre code postal\">
    </div>
\t     <div class=\"form-group\">
      <label for=\"tel\">Téléphone:</label>
      <input type=\"telephone\" class=\"form-control\" id=\"tel\" placeholder=\"Enter votre numéro de téléphone\">
    </div>
      
\t     <div class=\"form-group\">
      <label for=\"status\">Status téléphone:</label>
                  <select class=\"col-md-12 tel\">
                    <option>Public</option>
                    <option>Pour vos contact</option>
                    <option>Pour les utilisteurs</option>
                    <option>Privé</option>
                  </select>
    </div>
    <button type=\"submit\" class=\"btn btn-default btnsub\">Submit</button>
  </form>
\t  </div>
\t    </div>

      <div class=\"sld\" id=\"#two\">
\t\t <h2>Votre messagerie</h2>\t 
      </div>
      <div class=\"sld\" id=\"#three\">
      \t<div class=\"\">
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
\t\t\t\t<div><h2>vos services</h2></div>
\t\t\t\t<div class=\"serv\">
\t\t\t\t<div class=\"temps\">h</div>
\t\t\t\t\t<div class=\"infoser\">Service<br>catégorie</div>
\t\t\t\t</div>\t
\t\t\t</div>
\t\t\t<div class=\"col-sm-6\">
\t\t\t\t<div><h2>vos Besoins</h2></div>
\t\t\t\t<div class=\"besoin\">
\t\t\t\t<div class=\"temps\">h</div>
\t\t\t\t\t<div class=\"infobes\">Besoin<br>catégorie</div>
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

</body>

</html>", "@App/Profile/profil.html", "/home/pcapprenant17/Documents/Bou-e_corsaire_projet/src/AppBundle/Resources/views/Profile/profil.html");
    }
}
