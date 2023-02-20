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

/* comptable/espace.html.twig */
class __TwigTemplate_ba09dedd5f20afc5ecaf42e2703bda2f extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "comptable/espace.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"fr\">

\t<head>
\t\t<meta charset=\"utf-8\">
\t\t<title>GSB - Frais</title>
        <h1>Comptable</h1>
\t</head>
\t
\t<body>
\t\t<a href=\"";
        // line 11
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_valider");
        echo "\">Valider fiche frais</a>
\t\t<a href=\"";
        // line 12
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_suivre");
        echo "\">Suivre fiche frais</a>
\t\t<a href=\"";
        // line 13
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_comptable_deconnexion");
        echo "\">Se déconnecter</a>
\t\t
\t\t<h5>";
        // line 15
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 15, $this->source); })()), "session", [], "any", false, false, false, 15), "get", [0 => "nom"], "method", false, false, false, 15), "html", null, true);
        echo " | ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 15, $this->source); })()), "session", [], "any", false, false, false, 15), "get", [0 => "prenom"], "method", false, false, false, 15), "html", null, true);
        echo "</h5>

\t\t
\t</body>
\t
</html>";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "comptable/espace.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 15,  60 => 13,  56 => 12,  52 => 11,  40 => 1,);
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
\t
\t<body>
\t\t<a href=\"{{ path('app_valider') }}\">Valider fiche frais</a>
\t\t<a href=\"{{ path('app_suivre') }}\">Suivre fiche frais</a>
\t\t<a href=\"{{ path('app_comptable_deconnexion') }}\">Se déconnecter</a>
\t\t
\t\t<h5>{{ app.session.get('nom') }} | {{ app.session.get('prenom') }}</h5>

\t\t
\t</body>
\t
</html>", "comptable/espace.html.twig", "/home/developpeur/Documents/GSB-AF/templates/comptable/espace.html.twig");
    }
}
