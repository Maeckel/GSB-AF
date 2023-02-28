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

/* visiteur/new.html.twig */
class __TwigTemplate_e4e3a4ce8be0ecc5231f46bc31b2e6bd extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "visiteur/new.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"fr\">

<head>
\t<meta charset=\"utf-8\">
\t<title>GSB - Frais</title>
    <h1>Visiteur - Renseigner fiche frais</h1>
    <h2>Ajouter un frais hors forfait</h2>
</head>
\t
\t<body>
\t\t<a href=\"";
        // line 12
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_renseigner");
        echo "\">Renseigner fiche frais</a>
        <a href=\"";
        // line 13
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_consulter");
        echo "\">Consulter fiche frais</a>
\t\t<a href=\"";
        // line 14
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_espace_visiteur");
        echo "\">Acceuil</a>
\t\t<a href=\"";
        // line 15
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_visiteur_deconnexion");
        echo "\">Se déconnecter</a>
\t\t<br/>
\t\t<form action=\"";
        // line 17
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_frais_hors_forfait");
        echo "\" method=\"POST\">
        <br/>
        ";
        // line 19
        if ((array_key_exists("erreur", $context) && ((isset($context["erreur"]) || array_key_exists("erreur", $context) ? $context["erreur"] : (function () { throw new RuntimeError('Variable "erreur" does not exist.', 19, $this->source); })()) != null))) {
            // line 20
            echo "\t\t    <h5> ";
            echo twig_escape_filter($this->env, (isset($context["erreur"]) || array_key_exists("erreur", $context) ? $context["erreur"] : (function () { throw new RuntimeError('Variable "erreur" does not exist.', 20, $this->source); })()), "html", null, true);
            echo " </h5>
\t\t";
        }
        // line 22
        echo "        <br/>
        <label>Veuillez choisir un libelle :</label>
        <br/>
\t\t\t<select name=\"Libelle\" id=\"libelle\">
        \t<option value=\"Repas avac un spécialiste lors d'une animation\">Repas avac un specialiste lors d'une animation</option>
            <option value=\"Achat de fournitures\">Achat de fournitures</option>
            <option value=\"Reservation de salle pour conférence\">Reservation de salle pour conférence</option>
\t\t\t</select>
        <br/>
        <br/>
        <br/>
        <label>Veuillez choisir une date d'engagement :</label>
        <br/>
        <input type=\"date\" id=\"Date\" name=\"date\" onkeydown=\"return false\">
        <br/>
        <br/>
        <br/>
        <label>Veuillez choisir un montant :</label>
        <br/>
        <input type=\"number\" id=\"Montant\" step=\"0.01\" name=\"montant\" max=\"9999999999.99\" required>
        <br/>
        <br/>
        <br/>
        <input type=\"submit\" value=\"Valider\" />
        </form>
\t</body>
\t
</html>";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "visiteur/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  83 => 22,  77 => 20,  75 => 19,  70 => 17,  65 => 15,  61 => 14,  57 => 13,  53 => 12,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"fr\">

<head>
\t<meta charset=\"utf-8\">
\t<title>GSB - Frais</title>
    <h1>Visiteur - Renseigner fiche frais</h1>
    <h2>Ajouter un frais hors forfait</h2>
</head>
\t
\t<body>
\t\t<a href=\"{{ path('app_renseigner') }}\">Renseigner fiche frais</a>
        <a href=\"{{ path('app_consulter') }}\">Consulter fiche frais</a>
\t\t<a href=\"{{ path('app_espace_visiteur') }}\">Acceuil</a>
\t\t<a href=\"{{ path('app_visiteur_deconnexion') }}\">Se déconnecter</a>
\t\t<br/>
\t\t<form action=\"{{ path('app_frais_hors_forfait') }}\" method=\"POST\">
        <br/>
        {% if erreur is defined and erreur != null %}
\t\t    <h5> {{ erreur }} </h5>
\t\t{% endif %}
        <br/>
        <label>Veuillez choisir un libelle :</label>
        <br/>
\t\t\t<select name=\"Libelle\" id=\"libelle\">
        \t<option value=\"Repas avac un spécialiste lors d'une animation\">Repas avac un specialiste lors d'une animation</option>
            <option value=\"Achat de fournitures\">Achat de fournitures</option>
            <option value=\"Reservation de salle pour conférence\">Reservation de salle pour conférence</option>
\t\t\t</select>
        <br/>
        <br/>
        <br/>
        <label>Veuillez choisir une date d'engagement :</label>
        <br/>
        <input type=\"date\" id=\"Date\" name=\"date\" onkeydown=\"return false\">
        <br/>
        <br/>
        <br/>
        <label>Veuillez choisir un montant :</label>
        <br/>
        <input type=\"number\" id=\"Montant\" step=\"0.01\" name=\"montant\" max=\"9999999999.99\" required>
        <br/>
        <br/>
        <br/>
        <input type=\"submit\" value=\"Valider\" />
        </form>
\t</body>
\t
</html>", "visiteur/new.html.twig", "/home/developpeur/Documents/GSB-AF/templates/visiteur/new.html.twig");
    }
}
