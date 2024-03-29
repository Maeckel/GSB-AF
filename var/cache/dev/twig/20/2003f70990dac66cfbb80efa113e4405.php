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

/* comptable/suivre.html.twig */
class __TwigTemplate_4c06cfec1eaba25aca531e17bb47f5c4 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "comptable/suivre.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"fr\">

\t<head>
\t\t<meta charset=\"utf-8\">
\t\t<title>GSB - Frais</title>
        <h1>Comptable - Suivre fiche frais</h1>
\t</head>
\t
\t<body>
\t\t<a href=\"";
        // line 11
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_espace_comptable");
        echo "\">Acceuil</a>
\t\t<a href=\"";
        // line 12
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_valider");
        echo "\">Valider fiche frais</a>
\t\t<a href=\"";
        // line 13
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_comptable_deconnexion");
        echo "\">Se déconnecter</a>\t
\t</body>
\t
</html>";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "comptable/suivre.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 13,  56 => 12,  52 => 11,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"fr\">

\t<head>
\t\t<meta charset=\"utf-8\">
\t\t<title>GSB - Frais</title>
        <h1>Comptable - Suivre fiche frais</h1>
\t</head>
\t
\t<body>
\t\t<a href=\"{{ path('app_espace_comptable') }}\">Acceuil</a>
\t\t<a href=\"{{ path('app_valider') }}\">Valider fiche frais</a>
\t\t<a href=\"{{ path('app_comptable_deconnexion') }}\">Se déconnecter</a>\t
\t</body>
\t
</html>", "comptable/suivre.html.twig", "/home/developpeur/Documents/GSB-AF/templates/comptable/suivre.html.twig");
    }
}
