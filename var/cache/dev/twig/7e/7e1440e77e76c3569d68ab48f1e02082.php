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

/* visiteur/editer.html.twig */
class __TwigTemplate_b9f150f976d4c735398a3aaf394663ab extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "visiteur/editer.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"fr\">

<head>
\t<meta charset=\"utf-8\">
\t<title>GSB - Frais</title>
    <h1>Visiteur - Renseigner fiche frais</h1>
    <h2>Visiteur - Editer frais au forfait</h2>
</head>
<body>
\t<a href=\"";
        // line 11
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_renseigner");
        echo "\">Renseigner fiche frais</a>
    <a href=\"";
        // line 12
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_consulter");
        echo "\">Consulter fiche frais</a>
\t<a href=\"";
        // line 13
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_espace_visiteur");
        echo "\">Acceuil</a>
\t<a href=\"";
        // line 14
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_visiteur_deconnexion");
        echo "\">Se déconnecter</a>
    <form action=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_frais_forfait", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["frais"]) || array_key_exists("frais", $context) ? $context["frais"] : (function () { throw new RuntimeError('Variable "frais" does not exist.', 15, $this->source); })()), "Fraisforfait", [], "any", false, false, false, 15), "id", [], "any", false, false, false, 15)]), "html", null, true);
        echo "\" method=\"POST\">
    <br/>
    ";
        // line 17
        if ((array_key_exists("erreur", $context) && ((isset($context["erreur"]) || array_key_exists("erreur", $context) ? $context["erreur"] : (function () { throw new RuntimeError('Variable "erreur" does not exist.', 17, $this->source); })()) != null))) {
            // line 18
            echo "\t\t    <h5> ";
            echo twig_escape_filter($this->env, (isset($context["erreur"]) || array_key_exists("erreur", $context) ? $context["erreur"] : (function () { throw new RuntimeError('Variable "erreur" does not exist.', 18, $this->source); })()), "html", null, true);
            echo " </h5>
\t";
        }
        // line 20
        echo "    <br/>
    <label>Type de frais forfait :</label>
    <br/>
    <input type=\"text\" name=\"Id\" value=\"";
        // line 23
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["frais"]) || array_key_exists("frais", $context) ? $context["frais"] : (function () { throw new RuntimeError('Variable "frais" does not exist.', 23, $this->source); })()), "Fraisforfait", [], "any", false, false, false, 23), "id", [], "any", false, false, false, 23), "html", null, true);
        echo "\" readonly/>
    <br/>
    <br/>
    <label>Libelle du frais forfait:</label>
    <br/>
    <select name=\"Libelle\" id=\"libelle\" readonly>
    <option value=\"";
        // line 29
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["frais"]) || array_key_exists("frais", $context) ? $context["frais"] : (function () { throw new RuntimeError('Variable "frais" does not exist.', 29, $this->source); })()), "Fraisforfait", [], "any", false, false, false, 29), "libelle", [], "any", false, false, false, 29), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["frais"]) || array_key_exists("frais", $context) ? $context["frais"] : (function () { throw new RuntimeError('Variable "frais" does not exist.', 29, $this->source); })()), "Fraisforfait", [], "any", false, false, false, 29), "libelle", [], "any", false, false, false, 29), "html", null, true);
        echo "</option>
\t</select>
    <br/>
    <br/>
    <label>Montant du frais forfait :</label>
    <br/>
    <input type=\"number\" name=\"Montant\" value=\"";
        // line 35
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["frais"]) || array_key_exists("frais", $context) ? $context["frais"] : (function () { throw new RuntimeError('Variable "frais" does not exist.', 35, $this->source); })()), "Fraisforfait", [], "any", false, false, false, 35), "montant", [], "any", false, false, false, 35), "html", null, true);
        echo "\" readonly/>
    <br/>
    <br/>
    <label>Quantite du frais forfait :</label>
    <br/>
    <input type=\"number\" name=\"Quantite\" step=\"1\" min=\"";
        // line 40
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["frais"]) || array_key_exists("frais", $context) ? $context["frais"] : (function () { throw new RuntimeError('Variable "frais" does not exist.', 40, $this->source); })()), "quantite", [], "any", false, false, false, 40), "html", null, true);
        echo "\" value=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["frais"]) || array_key_exists("frais", $context) ? $context["frais"] : (function () { throw new RuntimeError('Variable "frais" does not exist.', 40, $this->source); })()), "quantite", [], "any", false, false, false, 40), "html", null, true);
        echo "\" />
    <br/>
    <br/>
    <br/>
    <input type=\"submit\" value=\"Valider\" />
    </form>
</body>
</html>";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "visiteur/editer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  114 => 40,  106 => 35,  95 => 29,  86 => 23,  81 => 20,  75 => 18,  73 => 17,  68 => 15,  64 => 14,  60 => 13,  56 => 12,  52 => 11,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"fr\">

<head>
\t<meta charset=\"utf-8\">
\t<title>GSB - Frais</title>
    <h1>Visiteur - Renseigner fiche frais</h1>
    <h2>Visiteur - Editer frais au forfait</h2>
</head>
<body>
\t<a href=\"{{ path('app_renseigner') }}\">Renseigner fiche frais</a>
    <a href=\"{{ path('app_consulter') }}\">Consulter fiche frais</a>
\t<a href=\"{{ path('app_espace_visiteur') }}\">Acceuil</a>
\t<a href=\"{{ path('app_visiteur_deconnexion') }}\">Se déconnecter</a>
    <form action=\"{{ path('app_frais_forfait', {'id': frais.Fraisforfait.id}) }}\" method=\"POST\">
    <br/>
    {% if erreur is defined and erreur != null %}
\t\t    <h5> {{ erreur }} </h5>
\t{% endif %}
    <br/>
    <label>Type de frais forfait :</label>
    <br/>
    <input type=\"text\" name=\"Id\" value=\"{{ frais.Fraisforfait.id }}\" readonly/>
    <br/>
    <br/>
    <label>Libelle du frais forfait:</label>
    <br/>
    <select name=\"Libelle\" id=\"libelle\" readonly>
    <option value=\"{{ frais.Fraisforfait.libelle }}\">{{ frais.Fraisforfait.libelle }}</option>
\t</select>
    <br/>
    <br/>
    <label>Montant du frais forfait :</label>
    <br/>
    <input type=\"number\" name=\"Montant\" value=\"{{ frais.Fraisforfait.montant }}\" readonly/>
    <br/>
    <br/>
    <label>Quantite du frais forfait :</label>
    <br/>
    <input type=\"number\" name=\"Quantite\" step=\"1\" min=\"{{ frais.quantite }}\" value=\"{{ frais.quantite }}\" />
    <br/>
    <br/>
    <br/>
    <input type=\"submit\" value=\"Valider\" />
    </form>
</body>
</html>", "visiteur/editer.html.twig", "/home/developpeur/Documents/GSB-AF/templates/visiteur/editer.html.twig");
    }
}
