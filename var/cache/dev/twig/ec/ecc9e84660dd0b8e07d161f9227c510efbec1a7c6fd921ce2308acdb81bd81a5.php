<?php

/* AppBundle::layout.html.twig */
class __TwigTemplate_114b7be79fb6677af02f9aa7ae2c7e79d5b7cccd01f3bbb5e76ca6ebfea84ec1 extends Twig_Template
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
        $__internal_c8dbadbc6ca5c6a1453a0220d51058fb71937f3c6b1f96f8999505f639020cdb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c8dbadbc6ca5c6a1453a0220d51058fb71937f3c6b1f96f8999505f639020cdb->enter($__internal_c8dbadbc6ca5c6a1453a0220d51058fb71937f3c6b1f96f8999505f639020cdb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle::layout.html.twig"));

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
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "basepath", array()), "html", null, true);
        echo "/lib/bootstrap/bootstrap.css\" rel=\"stylesheet\">
\t<!--<link href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "basepath", array()), "html", null, true);
        echo "/css/index.css\" rel=\"stylesheet\">-->
\t<link href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "basepath", array()), "html", null, true);
        echo "/css/style.css\" rel=\"stylesheet\">
\t<!-- SCRIPT -->
\t<script src=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "basepath", array()), "html", null, true);
        echo "/lib/jquery/jquery-3.1.1.js\"></script>
\t<script src=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "basepath", array()), "html", null, true);
        echo "/lib/bootstrap/bootstrap.js\"></script>
\t<script src=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "basepath", array()), "html", null, true);
        echo "/lib/angular/angular.min.js\"></script>
\t<script src=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "basepath", array()), "html", null, true);
        echo "/lib/script.js\"></script>
\t<script src=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "basepath", array()), "html", null, true);
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
        if (($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()) && $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN"))) {
            // line 70
            echo "    \t\t\t\t\t<li><a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin");
            echo "\">Administration</a></li>
\t\t\t\t\t";
        }
        // line 72
        echo "\t\t\t\t\t";
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 73
            echo "\t\t\t\t\t<li><a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("service_index");
            echo "\">Services</a></li>
\t\t\t\t\t<li><a href=\"";
            // line 74
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("besoin_index");
            echo "\">Besoins</a></li>
\t\t\t\t\t<li><a href=\"";
            // line 75
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_profile_show");
            echo "\">Mon profil</a></li>
\t\t\t\t\t<li class=\"dropdown\">
                        <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
                        \t<span class=\"glyphicon glyphicon-user\"></span> Bienvenue, ";
            // line 78
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
            echo " <b class=\"caret\"></b>
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<ul class=\"dropdown-menu\">
\t\t\t\t\t\t\t<li><a href=\"";
            // line 81
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_logout");
            echo "\">Deconnexion</a></li>
\t\t\t\t\t\t</ul>
                    </li>
\t\t\t\t\t";
        } else {
            // line 85
            echo "\t\t\t\t\t<li>
\t\t\t\t\t\t<button type=\"button\" class=\"login\" data-toggle=\"modal\" data-target=\"#myModal\">Inscription & connexion</button>
\t\t\t\t\t</li>
\t\t\t\t\t";
        }
        // line 89
        echo "\t\t\t\t</ul>
\t\t\t</div>
\t\t</div>
\t</nav>

\t
\t";
        // line 95
        $this->displayBlock('body', $context, $blocks);
        echo " ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 96
        echo "\t
\t<footer>
\t\t<i class=\"fa fa-facebook-square fa-3x\" aria-hidden=\"true\" ></i>
\t\t<i class=\"fa fa-twitter-square fa-3x\" aria-hidden=\"true\"></i>
\t\t<i class=\"fa fa-google-plus-square fa-3x\" aria-hidden=\"true\"></i>
\t</footer>



</body>

</html>";
        
        $__internal_c8dbadbc6ca5c6a1453a0220d51058fb71937f3c6b1f96f8999505f639020cdb->leave($__internal_c8dbadbc6ca5c6a1453a0220d51058fb71937f3c6b1f96f8999505f639020cdb_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_f2d4d79c6a3dd00b44c1613267b85b32fa8be178dc0ffc37335907ca8e78e055 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f2d4d79c6a3dd00b44c1613267b85b32fa8be178dc0ffc37335907ca8e78e055->enter($__internal_f2d4d79c6a3dd00b44c1613267b85b32fa8be178dc0ffc37335907ca8e78e055_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_f2d4d79c6a3dd00b44c1613267b85b32fa8be178dc0ffc37335907ca8e78e055->leave($__internal_f2d4d79c6a3dd00b44c1613267b85b32fa8be178dc0ffc37335907ca8e78e055_prof);

    }

    // line 7
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_9d22526f9df9900bc6378605fa47638b19200d615d0be269b9e84df9edd34ab9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9d22526f9df9900bc6378605fa47638b19200d615d0be269b9e84df9edd34ab9->enter($__internal_9d22526f9df9900bc6378605fa47638b19200d615d0be269b9e84df9edd34ab9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_9d22526f9df9900bc6378605fa47638b19200d615d0be269b9e84df9edd34ab9->leave($__internal_9d22526f9df9900bc6378605fa47638b19200d615d0be269b9e84df9edd34ab9_prof);

    }

    // line 95
    public function block_body($context, array $blocks = array())
    {
        $__internal_eb38d3aa78207a993cc841445133a1d32ee9779ca29191e27a038b64b979f071 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eb38d3aa78207a993cc841445133a1d32ee9779ca29191e27a038b64b979f071->enter($__internal_eb38d3aa78207a993cc841445133a1d32ee9779ca29191e27a038b64b979f071_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_eb38d3aa78207a993cc841445133a1d32ee9779ca29191e27a038b64b979f071->leave($__internal_eb38d3aa78207a993cc841445133a1d32ee9779ca29191e27a038b64b979f071_prof);

    }

    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_fa0eae771cec48fe67f5dddf8a02fd8a4e0a66a06595b052860df1818027eda8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fa0eae771cec48fe67f5dddf8a02fd8a4e0a66a06595b052860df1818027eda8->enter($__internal_fa0eae771cec48fe67f5dddf8a02fd8a4e0a66a06595b052860df1818027eda8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_fa0eae771cec48fe67f5dddf8a02fd8a4e0a66a06595b052860df1818027eda8->leave($__internal_fa0eae771cec48fe67f5dddf8a02fd8a4e0a66a06595b052860df1818027eda8_prof);

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
        return array (  235 => 95,  224 => 7,  212 => 6,  194 => 96,  190 => 95,  182 => 89,  176 => 85,  169 => 81,  163 => 78,  157 => 75,  153 => 74,  148 => 73,  145 => 72,  139 => 70,  137 => 69,  130 => 65,  110 => 48,  103 => 44,  76 => 20,  72 => 19,  68 => 18,  64 => 17,  60 => 16,  55 => 14,  51 => 13,  47 => 12,  39 => 8,  37 => 7,  33 => 6,  26 => 1,);
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
\t<meta charset=\"UTF-8\" />
\t<title>{% block title %}Welcome!{% endblock %}</title>
\t{% block stylesheets %}{% endblock %}
\t<link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />


\t<!-- CSS -->
\t<link href=\"{{ app.request.basepath }}/lib/bootstrap/bootstrap.css\" rel=\"stylesheet\">
\t<!--<link href=\"{{ app.request.basepath }}/css/index.css\" rel=\"stylesheet\">-->
\t<link href=\"{{ app.request.basepath }}/css/style.css\" rel=\"stylesheet\">
\t<!-- SCRIPT -->
\t<script src=\"{{ app.request.basepath }}/lib/jquery/jquery-3.1.1.js\"></script>
\t<script src=\"{{ app.request.basepath }}/lib/bootstrap/bootstrap.js\"></script>
\t<script src=\"{{ app.request.basepath }}/lib/angular/angular.min.js\"></script>
\t<script src=\"{{ app.request.basepath }}/lib/script.js\"></script>
\t<script src=\"{{ app.request.basepath }}/css/font-awesome/css/font-awesome.min.css\"></script>
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
\t\t\t\t\t\t\t\t{{ render(controller(\"FOSUserBundle:Security:login\")) }}
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<div class=\"sign-up-htm\">
\t\t\t\t\t\t\t\t{{ render(controller(\"FOSUserBundle:Registration:register\")) }}
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
\t\t\t\t<a class=\"navbar-brand\" href=\"{{ path('homepage') }}\">Bouée Corsaire</a>
\t\t\t</div>
\t\t\t<div class=\"collapse navbar-collapse\" id=\"myNavbar\">
\t\t\t\t<ul class=\"nav navbar-nav\">
\t\t\t\t\t{% if app.user and is_granted('ROLE_ADMIN') %}
    \t\t\t\t\t<li><a href=\"{{ path('admin') }}\">Administration</a></li>
\t\t\t\t\t{% endif %}
\t\t\t\t\t{% if is_granted(\"IS_AUTHENTICATED_REMEMBERED\") %}
\t\t\t\t\t<li><a href=\"{{ path('service_index') }}\">Services</a></li>
\t\t\t\t\t<li><a href=\"{{ path('besoin_index') }}\">Besoins</a></li>
\t\t\t\t\t<li><a href=\"{{ path('fos_user_profile_show') }}\">Mon profil</a></li>
\t\t\t\t\t<li class=\"dropdown\">
                        <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
                        \t<span class=\"glyphicon glyphicon-user\"></span> Bienvenue, {{ app.user.username }} <b class=\"caret\"></b>
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<ul class=\"dropdown-menu\">
\t\t\t\t\t\t\t<li><a href=\"{{ path('fos_user_security_logout') }}\">Deconnexion</a></li>
\t\t\t\t\t\t</ul>
                    </li>
\t\t\t\t\t{% else %}
\t\t\t\t\t<li>
\t\t\t\t\t\t<button type=\"button\" class=\"login\" data-toggle=\"modal\" data-target=\"#myModal\">Inscription & connexion</button>
\t\t\t\t\t</li>
\t\t\t\t\t{% endif %}
\t\t\t\t</ul>
\t\t\t</div>
\t\t</div>
\t</nav>

\t
\t{% block body %}{% endblock %} {% block javascripts %}{% endblock %}
\t
\t<footer>
\t\t<i class=\"fa fa-facebook-square fa-3x\" aria-hidden=\"true\" ></i>
\t\t<i class=\"fa fa-twitter-square fa-3x\" aria-hidden=\"true\"></i>
\t\t<i class=\"fa fa-google-plus-square fa-3x\" aria-hidden=\"true\"></i>
\t</footer>



</body>

</html>", "AppBundle::layout.html.twig", "/home/pcapprenant17/Documents/Bou-e_corsaire_projet/src/AppBundle/Resources/views/layout.html.twig");
    }
}
