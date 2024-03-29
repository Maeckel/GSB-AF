<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* comptable/index.html.twig */
class __TwigTemplate_6e9ff4bd379ae631d869e1b1021c1394 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "comptable/index.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"fr\">

\t<head>
\t\t<meta charset=\"utf-8\">
\t\t<title>GSB - Frais</title>
        <h1>Comptable</h1>
\t</head>
\t<body>
\t\t
\t\t<a href=\"";
        // line 11
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_acceuil");
        echo "\">Accueil</a>
\t\t<br/>
\t\t
\t\t<?php if( isset( \$erreur ) ){ ?>
\t\t\t<b><?= \$erreur ?></b>
\t\t<?php } ?>
\t\t
\t\t<form action=\"";
        // line 18
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_comptable_connecter");
        echo "\" method=\"POST\">
\t\t\tIdentifiant :<br/>
\t\t\t<input type=\"text\" name=\"login\" /><br/>
\t\t\tMot de passe :<br/>
\t\t\t<input type=\"password\" name=\"mdp\" /><br/>
\t\t\t<br/>
\t\t\t<input type=\"submit\" value=\"Valider\" />
\t\t</form>
\t\t
\t</body>
\t
</html>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "comptable/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  62 => 18,  52 => 11,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"fr\">

\t<head>
\t\t<meta charset=\"utf-8\">
\t\t<title>GSB - Frais</title>
        <h1>Comptable</h1>
\t</head>
\t<body>
\t\t
\t\t<a href=\"{{ path( 'app_acceuil' ) }}\">Accueil</a>
\t\t<br/>
\t\t
\t\t<?php if( isset( \$erreur ) ){ ?>
\t\t\t<b><?= \$erreur ?></b>
\t\t<?php } ?>
\t\t
\t\t<form action=\"{{ path('app_comptable_connecter') }}\" method=\"POST\">
\t\t\tIdentifiant :<br/>
\t\t\t<input type=\"text\" name=\"login\" /><br/>
\t\t\tMot de passe :<br/>
\t\t\t<input type=\"password\" name=\"mdp\" /><br/>
\t\t\t<br/>
\t\t\t<input type=\"submit\" value=\"Valider\" />
\t\t</form>
\t\t
\t</body>
\t
</html>
", "comptable/index.html.twig", "/home/developpeur/Documents/GSB-AF/templates/comptable/index.html.twig");
    }
}
