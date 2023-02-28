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
                echo "\t\t\t\t";
                if ((twig_get_attribute($this->env, $this->source, $context["unmois"], "id", [], "any", false, false, false, 34) != (isset($context["Month"]) || array_key_exists("Month", $context) ? $context["Month"] : (function () { throw new RuntimeError('Variable "Month" does not exist.', 34, $this->source); })()))) {
                    // line 35
                    echo "        \t\t\t<option value=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["unmois"], "id", [], "any", false, false, false, 35), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["unmois"], "id", [], "any", false, false, false, 35), "html", null, true);
                    echo "</option>
\t\t\t\t";
                }
                // line 37
                echo "\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['unmois'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 38
            echo "\t\t\t</select>
\t\t\t<br/>
\t\t\t<br/>
\t\t\t";
            // line 41
            if (array_key_exists("fiche", $context)) {
                // line 42
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
                // line 51
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["fiche"]) || array_key_exists("fiche", $context) ? $context["fiche"] : (function () { throw new RuntimeError('Variable "fiche" does not exist.', 51, $this->source); })()), "id", [], "any", false, false, false, 51), "html", null, true);
                echo "</td>
\t\t\t\t\t<td>";
                // line 52
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["fiche"]) || array_key_exists("fiche", $context) ? $context["fiche"] : (function () { throw new RuntimeError('Variable "fiche" does not exist.', 52, $this->source); })()), "nbJustificatifs", [], "any", false, false, false, 52), "html", null, true);
                echo "</td>
\t\t\t\t\t<td>";
                // line 53
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["fiche"]) || array_key_exists("fiche", $context) ? $context["fiche"] : (function () { throw new RuntimeError('Variable "fiche" does not exist.', 53, $this->source); })()), "montantValide", [], "any", false, false, false, 53), "html", null, true);
                echo "</td>
\t\t\t\t\t<td>";
                // line 54
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["fiche"]) || array_key_exists("fiche", $context) ? $context["fiche"] : (function () { throw new RuntimeError('Variable "fiche" does not exist.', 54, $this->source); })()), "dateModif", [], "any", false, false, false, 54), "d-m-Y"), "html", null, true);
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
\t\t\t\t";
                // line 65
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["fiche"]) || array_key_exists("fiche", $context) ? $context["fiche"] : (function () { throw new RuntimeError('Variable "fiche" does not exist.', 65, $this->source); })()), "ligneFraisHorsForfaits", [], "any", false, false, false, 65));
                foreach ($context['_seq'] as $context["_key"] => $context["FHF"]) {
                    // line 66
                    echo "\t\t\t\t\t";
                    if (($context["FHF"] != null)) {
                        // line 67
                        echo "\t\t\t\t\t<tr>
\t\t\t\t\t\t<td>";
                        // line 68
                        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["FHF"], "date", [], "any", false, false, false, 68), "d-m-Y"), "html", null, true);
                        echo "</td>
\t\t\t\t\t\t<td>";
                        // line 69
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["FHF"], "montant", [], "any", false, false, false, 69), "html", null, true);
                        echo "</td>
\t\t\t\t\t\t<td>";
                        // line 70
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["FHF"], "libelle", [], "any", false, false, false, 70), "html", null, true);
                        echo "</td>
\t\t\t\t\t</tr>
\t\t\t\t\t";
                    }
                    // line 73
                    echo "\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['FHF'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 74
                echo "\t\t\t\t</table>
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
                // line 84
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["frais"]) || array_key_exists("frais", $context) ? $context["frais"] : (function () { throw new RuntimeError('Variable "frais" does not exist.', 84, $this->source); })()));
                foreach ($context['_seq'] as $context["_key"] => $context["unfrais"]) {
                    // line 85
                    echo "\t\t\t\t";
                    if (($context["unfrais"] != null)) {
                        // line 86
                        echo "\t\t\t\t<tr>
\t\t\t\t\t<td>";
                        // line 87
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["unfrais"], "Fraisforfait", [], "any", false, false, false, 87), "id", [], "any", false, false, false, 87), "html", null, true);
                        echo "</td>
\t\t\t\t\t<td>";
                        // line 88
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["unfrais"], "Fraisforfait", [], "any", false, false, false, 88), "libelle", [], "any", false, false, false, 88), "html", null, true);
                        echo "</td>
\t\t\t\t\t<td>";
                        // line 89
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["unfrais"], "quantite", [], "any", false, false, false, 89), "html", null, true);
                        echo "</td>
\t\t\t\t\t<td>";
                        // line 90
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["unfrais"], "Fraisforfait", [], "any", false, false, false, 90), "montant", [], "any", false, false, false, 90), "html", null, true);
                        echo "</td>
\t\t\t\t</tr>
\t\t\t\t";
                    }
                    // line 93
                    echo "\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['unfrais'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 94
                echo "\t\t\t\t</table>
\t\t\t";
            }
            // line 96
            echo "\t\t\t<br/>
\t\t\t<br/>
\t\t\t<input type=\"submit\" value=\"Valider\" />
\t\t";
        }
        // line 100
        echo "\t\t</form>
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
        return array (  240 => 100,  234 => 96,  230 => 94,  224 => 93,  218 => 90,  214 => 89,  210 => 88,  206 => 87,  203 => 86,  200 => 85,  196 => 84,  184 => 74,  178 => 73,  172 => 70,  168 => 69,  164 => 68,  161 => 67,  158 => 66,  154 => 65,  140 => 54,  136 => 53,  132 => 52,  128 => 51,  117 => 42,  115 => 41,  110 => 38,  104 => 37,  96 => 35,  93 => 34,  89 => 33,  83 => 29,  81 => 28,  77 => 27,  72 => 25,  68 => 24,  64 => 23,  40 => 1,);
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
\t\t\t\t{% if unmois.id != Month %}
        \t\t\t<option value=\"{{ unmois.id }}\">{{ unmois.id }}</option>
\t\t\t\t{% endif %}
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
\t\t\t\t{% for FHF in fiche.ligneFraisHorsForfaits %}
\t\t\t\t\t{% if FHF != null %}
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td>{{ FHF.date|date('d-m-Y') }}</td>
\t\t\t\t\t\t<td>{{ FHF.montant }}</td>
\t\t\t\t\t\t<td>{{ FHF.libelle }}</td>
\t\t\t\t\t</tr>
\t\t\t\t\t{% endif %}
\t\t\t\t{% endfor %}
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
\t\t\t\t{% if unfrais != null %}
\t\t\t\t<tr>
\t\t\t\t\t<td>{{ unfrais.Fraisforfait.id }}</td>
\t\t\t\t\t<td>{{ unfrais.Fraisforfait.libelle  }}</td>
\t\t\t\t\t<td>{{ unfrais.quantite }}</td>
\t\t\t\t\t<td>{{ unfrais.Fraisforfait.montant }}</td>
\t\t\t\t</tr>
\t\t\t\t{% endif %}
\t\t\t\t{% endfor %}
\t\t\t\t</table>
\t\t\t{% endif %}
\t\t\t<br/>
\t\t\t<br/>
\t\t\t<input type=\"submit\" value=\"Valider\" />
\t\t{% endif %}
\t\t</form>
\t</body>
\t
</html>
", "visiteur/consulter.html.twig", "/home/developpeur/Documents/GSB-AF/templates/visiteur/consulter.html.twig");
    }
}
