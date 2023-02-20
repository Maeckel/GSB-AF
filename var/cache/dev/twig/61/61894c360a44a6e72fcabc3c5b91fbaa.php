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

/* visiteur/consulter.html.twig */
class __TwigTemplate_05afdb18eb293e7121796e0e18978308 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "visiteur/consulter.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"fr\">

<style>
    .example-wrapper { margin: 1em auto; max-width: 800px; width: 95%; font: 18px/1.5 sans-serif; }
    .example-wrapper code { background: #F5F5F5; padding: 2px 6px; }
    table{
  border-collapse: collapse;
}
tr, td{
  border: 1px solid black;
  padding: 10px;
}
</style>

\t<head>
\t\t<meta charset=\"utf-8\">
\t\t<title>GSB - Frais</title>
        <h1>Visiteur - Consulter fiche frais</h1>
\t</head>
\t
\t<body>
\t\t<a href=\"";
        // line 23
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_renseigner");
        echo "\">Renseigner fiche frais</a>
\t\t<a href=\"";
        // line 24
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_espace_visiteur");
        echo "\">Acceuil</a>
\t\t<a href=\"";
        // line 25
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_visiteur_deconnexion");
        echo "\">Se déconnecter</a>
\t\t<br/>
\t\t<form action=\"";
        // line 27
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_consulter");
        echo "\" method=\"POST\">
\t\t";
        // line 28
        if (((isset($context["mois"]) || array_key_exists("mois", $context) ? $context["mois"] : (function () { throw new RuntimeError('Variable "mois" does not exist.', 28, $this->source); })()) != null)) {
            // line 29
            echo "\t\t\t<br/>
\t\t\t<label>Veuillez choisir un Mois :</label>
\t\t\t<br/>
\t\t\t<select name=\"Mois\" id=\"mois\">
\t\t\t";
            // line 33
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["mois"]) || array_key_exists("mois", $context) ? $context["mois"] : (function () { throw new RuntimeError('Variable "mois" does not exist.', 33, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["unmois"]) {
                // line 34
                echo "        \t\t<option value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["unmois"], "id", [], "any", false, false, false, 34), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["unmois"], "id", [], "any", false, false, false, 34), "html", null, true);
                echo "</option>
\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['unmois'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 36
            echo "\t\t\t</select>
\t\t\t<br/>
\t\t\t<br/>
\t\t\t";
            // line 39
            if (array_key_exists("fiche", $context)) {
                // line 40
                echo "\t\t\t\t<h2>Fiche frais<h2/>
\t\t\t\t<table>
\t\t\t\t<thead>
\t\t\t\t\t<th>Mois</th>
\t\t\t\t\t<th>Justificatifs</th>
\t\t\t\t\t<th>Montant validé</th>
\t\t\t\t\t<th>Date de modifcation</th>
\t\t\t\t</thead>
\t\t\t\t<tr>
\t\t\t\t\t<td>";
                // line 49
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["fiche"]) || array_key_exists("fiche", $context) ? $context["fiche"] : (function () { throw new RuntimeError('Variable "fiche" does not exist.', 49, $this->source); })()), "id", [], "any", false, false, false, 49), "html", null, true);
                echo "</td>
\t\t\t\t\t<td>";
                // line 50
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["fiche"]) || array_key_exists("fiche", $context) ? $context["fiche"] : (function () { throw new RuntimeError('Variable "fiche" does not exist.', 50, $this->source); })()), "nbJustificatifs", [], "any", false, false, false, 50), "html", null, true);
                echo "</td>
\t\t\t\t\t<td>";
                // line 51
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["fiche"]) || array_key_exists("fiche", $context) ? $context["fiche"] : (function () { throw new RuntimeError('Variable "fiche" does not exist.', 51, $this->source); })()), "montantValide", [], "any", false, false, false, 51), "html", null, true);
                echo "</td>
\t\t\t\t\t<td>";
                // line 52
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["fiche"]) || array_key_exists("fiche", $context) ? $context["fiche"] : (function () { throw new RuntimeError('Variable "fiche" does not exist.', 52, $this->source); })()), "dateModif", [], "any", false, false, false, 52), "d-m-Y"), "html", null, true);
                echo "</td>
\t\t\t\t</tr>
\t\t\t\t</table>
\t\t\t\t<br/>
\t\t\t\t<h2>Ligne frais hors forfait<h2/>
\t\t\t\t<table>
\t\t\t\t<thead>
\t\t\t\t\t<th>Date</th>
\t\t\t\t\t<th>Montant</th>
\t\t\t\t\t<th>Libelle</th>
\t\t\t\t</thead>
\t\t\t\t<tr>
\t\t\t\t\t<td>";
                // line 64
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["fiche"]) || array_key_exists("fiche", $context) ? $context["fiche"] : (function () { throw new RuntimeError('Variable "fiche" does not exist.', 64, $this->source); })()), "ligneFraisHorsForfait", [], "any", false, false, false, 64), "date", [], "any", false, false, false, 64), "d-m-Y"), "html", null, true);
                echo "</td>
\t\t\t\t\t<td>";
                // line 65
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["fiche"]) || array_key_exists("fiche", $context) ? $context["fiche"] : (function () { throw new RuntimeError('Variable "fiche" does not exist.', 65, $this->source); })()), "ligneFraisHorsForfait", [], "any", false, false, false, 65), "montant", [], "any", false, false, false, 65), "html", null, true);
                echo "</td>
\t\t\t\t\t<td>";
                // line 66
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["fiche"]) || array_key_exists("fiche", $context) ? $context["fiche"] : (function () { throw new RuntimeError('Variable "fiche" does not exist.', 66, $this->source); })()), "ligneFraisHorsForfait", [], "any", false, false, false, 66), "libelle", [], "any", false, false, false, 66), "html", null, true);
                echo "</td>
\t\t\t\t</tr>
\t\t\t\t</table>
\t\t\t\t<br/>
\t\t\t\t<h2>Ligne frais forfait<h2/>
\t\t\t\t<table>
\t\t\t\t<thead>
\t\t\t\t\t<th>Type</th>
\t\t\t\t\t<th>Libelle</th>
\t\t\t\t\t<th>Quantite</th>
\t\t\t\t\t<th>Montant</th>
\t\t\t\t</thead>
\t\t\t\t";
                // line 78
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["frais"]) || array_key_exists("frais", $context) ? $context["frais"] : (function () { throw new RuntimeError('Variable "frais" does not exist.', 78, $this->source); })()));
                foreach ($context['_seq'] as $context["_key"] => $context["unfrais"]) {
                    // line 79
                    echo "\t\t\t\t<tr>
\t\t\t\t\t<td>";
                    // line 80
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["unfrais"], "Fraisforfait", [], "any", false, false, false, 80), "id", [], "any", false, false, false, 80), "html", null, true);
                    echo "</td>
\t\t\t\t\t<td>";
                    // line 81
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["unfrais"], "Fraisforfait", [], "any", false, false, false, 81), "libelle", [], "any", false, false, false, 81), "html", null, true);
                    echo "</td>
\t\t\t\t\t<td>";
                    // line 82
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["unfrais"], "quantite", [], "any", false, false, false, 82), "html", null, true);
                    echo "</td>
\t\t\t\t\t<td>";
                    // line 83
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["unfrais"], "Fraisforfait", [], "any", false, false, false, 83), "montant", [], "any", false, false, false, 83), "html", null, true);
                    echo "</td>
\t\t\t\t</tr>
\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['unfrais'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 86
                echo "\t\t\t\t</table>
\t\t\t";
            }
            // line 88
            echo "\t\t\t<br/>
\t\t\t<br/>
\t\t\t<input type=\"submit\" value=\"Valider\" />
\t\t";
        }
        // line 92
        echo "\t\t";
        if (((isset($context["mois"]) || array_key_exists("mois", $context) ? $context["mois"] : (function () { throw new RuntimeError('Variable "mois" does not exist.', 92, $this->source); })()) == null)) {
            // line 93
            echo "\t\t\t<h2>Aucune Fiche Frais cette Année</h2>
\t\t";
        }
        // line 94
        echo " 
\t\t</form>
\t</body>
\t
</html>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "visiteur/consulter.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  217 => 94,  213 => 93,  210 => 92,  204 => 88,  200 => 86,  191 => 83,  187 => 82,  183 => 81,  179 => 80,  176 => 79,  172 => 78,  157 => 66,  153 => 65,  149 => 64,  134 => 52,  130 => 51,  126 => 50,  122 => 49,  111 => 40,  109 => 39,  104 => 36,  93 => 34,  89 => 33,  83 => 29,  81 => 28,  77 => 27,  72 => 25,  68 => 24,  64 => 23,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"fr\">

<style>
    .example-wrapper { margin: 1em auto; max-width: 800px; width: 95%; font: 18px/1.5 sans-serif; }
    .example-wrapper code { background: #F5F5F5; padding: 2px 6px; }
    table{
  border-collapse: collapse;
}
tr, td{
  border: 1px solid black;
  padding: 10px;
}
</style>

\t<head>
\t\t<meta charset=\"utf-8\">
\t\t<title>GSB - Frais</title>
        <h1>Visiteur - Consulter fiche frais</h1>
\t</head>
\t
\t<body>
\t\t<a href=\"{{ path('app_renseigner') }}\">Renseigner fiche frais</a>
\t\t<a href=\"{{ path('app_espace_visiteur') }}\">Acceuil</a>
\t\t<a href=\"{{ path('app_visiteur_deconnexion') }}\">Se déconnecter</a>
\t\t<br/>
\t\t<form action=\"{{ path('app_consulter') }}\" method=\"POST\">
\t\t{% if mois != null %}
\t\t\t<br/>
\t\t\t<label>Veuillez choisir un Mois :</label>
\t\t\t<br/>
\t\t\t<select name=\"Mois\" id=\"mois\">
\t\t\t{% for unmois in mois %}
        \t\t<option value=\"{{ unmois.id }}\">{{ unmois.id }}</option>
\t\t\t{% endfor %}
\t\t\t</select>
\t\t\t<br/>
\t\t\t<br/>
\t\t\t{% if fiche is defined %}
\t\t\t\t<h2>Fiche frais<h2/>
\t\t\t\t<table>
\t\t\t\t<thead>
\t\t\t\t\t<th>Mois</th>
\t\t\t\t\t<th>Justificatifs</th>
\t\t\t\t\t<th>Montant validé</th>
\t\t\t\t\t<th>Date de modifcation</th>
\t\t\t\t</thead>
\t\t\t\t<tr>
\t\t\t\t\t<td>{{ fiche.id }}</td>
\t\t\t\t\t<td>{{ fiche.nbJustificatifs }}</td>
\t\t\t\t\t<td>{{ fiche.montantValide }}</td>
\t\t\t\t\t<td>{{ fiche.dateModif|date('d-m-Y') }}</td>
\t\t\t\t</tr>
\t\t\t\t</table>
\t\t\t\t<br/>
\t\t\t\t<h2>Ligne frais hors forfait<h2/>
\t\t\t\t<table>
\t\t\t\t<thead>
\t\t\t\t\t<th>Date</th>
\t\t\t\t\t<th>Montant</th>
\t\t\t\t\t<th>Libelle</th>
\t\t\t\t</thead>
\t\t\t\t<tr>
\t\t\t\t\t<td>{{ fiche.ligneFraisHorsForfait.date|date('d-m-Y') }}</td>
\t\t\t\t\t<td>{{ fiche.ligneFraisHorsForfait.montant }}</td>
\t\t\t\t\t<td>{{ fiche.ligneFraisHorsForfait.libelle }}</td>
\t\t\t\t</tr>
\t\t\t\t</table>
\t\t\t\t<br/>
\t\t\t\t<h2>Ligne frais forfait<h2/>
\t\t\t\t<table>
\t\t\t\t<thead>
\t\t\t\t\t<th>Type</th>
\t\t\t\t\t<th>Libelle</th>
\t\t\t\t\t<th>Quantite</th>
\t\t\t\t\t<th>Montant</th>
\t\t\t\t</thead>
\t\t\t\t{% for unfrais in frais %}
\t\t\t\t<tr>
\t\t\t\t\t<td>{{ unfrais.Fraisforfait.id }}</td>
\t\t\t\t\t<td>{{ unfrais.Fraisforfait.libelle  }}</td>
\t\t\t\t\t<td>{{ unfrais.quantite }}</td>
\t\t\t\t\t<td>{{ unfrais.Fraisforfait.montant }}</td>
\t\t\t\t</tr>
\t\t\t\t{% endfor %}
\t\t\t\t</table>
\t\t\t{% endif %}
\t\t\t<br/>
\t\t\t<br/>
\t\t\t<input type=\"submit\" value=\"Valider\" />
\t\t{% endif %}
\t\t{% if mois == null %}
\t\t\t<h2>Aucune Fiche Frais cette Année</h2>
\t\t{% endif %} 
\t\t</form>
\t</body>
\t
</html>
", "visiteur/consulter.html.twig", "/home/developpeur/Documents/GSB-AF/templates/visiteur/consulter.html.twig");
    }
}
