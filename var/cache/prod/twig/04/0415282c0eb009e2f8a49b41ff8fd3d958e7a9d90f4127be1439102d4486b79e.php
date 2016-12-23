<?php

/* AppBundle::layout.html.twig */
class __TwigTemplate_c4aad98ffa76a5ddbc1e8c3cf0c65ec459e0c1b7d240261dddfbb1fd7e938b02 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>

<head>
\t<meta charset=\"UTF-8\" />
\t<title>";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
\t";
        // line 7
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 8
        echo "\t<link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />


\t<!-- CSS -->
\t<link href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", array()), "basepath", array()), "html", null, true);
        echo "/lib/bootstrap/bootstrap.css\" rel=\"stylesheet\">
\t<!--<link href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", array()), "basepath", array()), "html", null, true);
        echo "/css/index.css\" rel=\"stylesheet\">-->
\t<link href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", array()), "basepath", array()), "html", null, true);
        echo "/css/style.css\" rel=\"stylesheet\">
\t<!-- SCRIPT -->
\t<script src=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", array()), "basepath", array()), "html", null, true);
        echo "/lib/jquery/jquery-3.1.1.js\"></script>
\t<script src=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", array()), "basepath", array()), "html", null, true);
        echo "/lib/bootstrap/bootstrap.js\"></script>
\t<script src=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", array()), "basepath", array()), "html", null, true);
        echo "/lib/angular/angular.min.js\"></script>
\t<script src=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", array()), "basepath", array()), "html", null, true);
        echo "/lib/script.js\"></script>
\t<script src=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", array()), "basepath", array()), "html", null, true);
        echo "/css/font-awesome/css/font-awesome.min.css\"></script>
\t<!-- FONT -->
\t<link href=\"https://fonts.googleapis.com/css?family=Open+Sans:400,600,700\" rel=\"stylesheet\">

</head>


<body>
\t<div class=\"modal fade\" id=\"myModal\" role=\"dialog\">
\t\t<div class=\"modal-dialog\">

\t\t\t<!-- Modal content-->
\t\t\t<div class=\"modal-content\">
\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>

\t\t\t\t<div class=\"login-wrap\">
\t\t\t\t\t<div class=\"login-html\">
\t\t\t\t\t\t<input id=\"tab-1\" type=\"radio\" name=\"tab\" class=\"sign-in\" checked>
\t\t\t\t\t\t<label for=\"tab-1\" class=\"tab\">Sign In</label>
\t\t\t\t\t\t<input id=\"tab-2\" type=\"radio\" name=\"tab\" class=\"sign-up\">
\t\t\t\t\t\t<label for=\"tab-2\" class=\"tab\">Sign Up</label>
\t\t\t\t\t\t
\t\t\t\t\t\t<div class=\"login-form\">
\t\t\t\t\t\t\t<div class=\"sign-in-htm\" >
\t\t\t\t\t\t\t\t";
        // line 44
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("FOSUserBundle:Security:login"));
        echo "
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<div class=\"sign-up-htm\">
\t\t\t\t\t\t\t\t";
        // line 48
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("FOSUserBundle:Registration:register"));
        echo "
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>

<nav class=\"navbar navbar-inverse\">
\t\t<div class=\"container-fluid\">
\t\t\t<div class=\"navbar-header\">
\t\t\t\t<button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#myNavbar\">
\t\t\t\t\t<span class=\"icon-bar\"></span>
\t\t\t\t\t<span class=\"icon-bar\"></span>
\t\t\t\t\t<span class=\"icon-bar\"></span>
\t\t\t\t</button>
\t\t\t\t<a class=\"navbar-brand\" href=\"";
        // line 65
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage");
        echo "\">Bouée Corsaire</a>
\t\t\t</div>
\t\t\t<div class=\"collapse navbar-collapse\" id=\"myNavbar\">
\t\t\t\t<ul class=\"nav navbar-nav\">
\t\t\t\t\t";
        // line 69
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 70
            echo "\t\t\t\t\t<li><a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("servicepage");
            echo "\">Services</a></li>
\t\t\t\t\t<li><a href=\"";
            // line 71
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("besoinpage");
            echo "\">Besoins</a></li>
\t\t\t\t\t<li><a href=\"";
            // line 72
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_profile_show");
            echo "\">Mon profil</a></li>
\t\t\t\t\t<li class=\"dropdown\">
                        <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
                        \t<span class=\"glyphicon glyphicon-user\"></span> Bienvenue, ";
            // line 75
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", array()), "username", array()), "html", null, true);
            echo " <b class=\"caret\"></b>
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<ul class=\"dropdown-menu\">
\t\t\t\t\t\t\t<li><a href=\"";
            // line 78
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_logout");
            echo "\">Deconnexion</a></li>
\t\t\t\t\t\t</ul>
                    </li>
\t\t\t\t\t";
        } else {
            // line 82
            echo "\t\t\t\t\t<li>
\t\t\t\t\t\t<button type=\"button\" class=\"login\" data-toggle=\"modal\" data-target=\"#myModal\">Inscription & connexion</button>
\t\t\t\t\t</li>
\t\t\t\t\t";
        }
        // line 86
        echo "\t\t\t\t</ul>
\t\t\t</div>
\t\t</div>
\t</nav>

\t
\t";
        // line 92
        $this->displayBlock('body', $context, $blocks);
        echo " ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 93
        echo "\t
\t<footer>
\t\t<i class=\"fa fa-facebook-square fa-3x\" aria-hidden=\"true\" ></i>
\t\t<i class=\"fa fa-twitter-square fa-3x\" aria-hidden=\"true\"></i>
\t\t<i class=\"fa fa-google-plus-square fa-3x\" aria-hidden=\"true\"></i>
\t</footer>



</body>

</html>";
    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        echo "Welcome!";
    }

    // line 7
    public function block_stylesheets($context, array $blocks = array())
    {
    }

    // line 92
    public function block_body($context, array $blocks = array())
    {
    }

    public function block_javascripts($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "AppBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  208 => 92,  203 => 7,  197 => 6,  182 => 93,  178 => 92,  170 => 86,  164 => 82,  157 => 78,  151 => 75,  145 => 72,  141 => 71,  136 => 70,  134 => 69,  127 => 65,  107 => 48,  100 => 44,  73 => 20,  69 => 19,  65 => 18,  61 => 17,  57 => 16,  52 => 14,  48 => 13,  44 => 12,  36 => 8,  34 => 7,  30 => 6,  23 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "AppBundle::layout.html.twig", "/home/pcapprenant17/Documents/Bou-e_corsaire_projet/src/AppBundle/Resources/views/layout.html.twig");
    }
}
