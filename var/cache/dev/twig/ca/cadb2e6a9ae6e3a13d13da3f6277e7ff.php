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

/* pages/leave_management/index.html.twig */
class __TwigTemplate_ba9c28277b0b5480d40c548ed76529b7 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pages/leave_management/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pages/leave_management/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "pages/leave_management/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Gestion des congés | ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["company"]) || array_key_exists("company", $context) ? $context["company"] : (function () { throw new RuntimeError('Variable "company" does not exist.', 3, $this->source); })()), "companyAbrev", [], "any", false, false, false, 3), "html", null, true);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 6
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "<div id=\"desktopNav\" style=\"display: none;\">
    ";
        // line 8
        $this->loadTemplate("partials/_desktopNav.html.twig", "pages/leave_management/index.html.twig", 8)->display($context);
        // line 9
        echo "</div>
<div class=\"container\">
    ";
        // line 11
        $this->loadTemplate("partials/_headerStaff.html.twig", "pages/leave_management/index.html.twig", 11)->display($context);
        // line 12
        echo "    <div id=\"phoneUser\" style=\"display: none;\">
        ";
        // line 13
        $this->loadTemplate("partials/_currentUser.html.twig", "pages/leave_management/index.html.twig", 13)->display($context);
        // line 14
        echo "    </div>
    <div class=\"row mt-4\">
        <div class=\"col-12\">
            <h1 class=\"text-center\">Gestion des congés</h1>
        </div>
    </div>
    ";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 20, $this->source); })()), "flashes", ["success"], "method", false, false, false, 20));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 21
            echo "        <div class=\"alert alert-success w-50 mx-auto my-4  text-center\">
            ";
            // line 22
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo "<div class=\"row\">
    <div class=\"col-md-6\">
        <section class=\"leaveRequest\" id=\"col1\">
        <div class=\"row\">
            <div class=\"col-12\">
                <h2 class=\"text-center\">Demande de congé en cours</h2>
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-12\">
                <table>
                    <thead>
                        <tr>
                            <th scope=\"col\">Status</th>
                            <th scope=\"col\" class=\"th_name\">Nom</th>
                            <th scope=\"col\">Dates</th>
                            <th colspan=\"2\">Validation</th>
                        </tr>
                    </thead>
                    <tbody>
                        ";
        // line 45
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["leaves"]) || array_key_exists("leaves", $context) ? $context["leaves"] : (function () { throw new RuntimeError('Variable "leaves" does not exist.', 45, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["leave"]) {
            // line 46
            echo "                        ";
            if ((twig_get_attribute($this->env, $this->source, $context["leave"], "approved", [], "any", false, false, false, 46) != 1)) {
                // line 47
                echo "                            <tr>
                                <td>
                                    ";
                // line 49
                if ((twig_get_attribute($this->env, $this->source, $context["leave"], "approved", [], "any", false, false, false, 49) == 0)) {
                    // line 50
                    echo "                                        <img src=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/svg/waiting.svg"), "html", null, true);
                    echo "\" alt=\"En attente\">
                                    ";
                } else {
                    // line 52
                    echo "                                        <img src=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/svg/cancel.svg"), "html", null, true);
                    echo "\" alt=\"Refusé\">
                                    ";
                }
                // line 54
                echo "                                </td>
                                <td>";
                // line 55
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["leave"], "user", [], "any", false, false, false, 55), "lastname", [], "any", false, false, false, 55), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["leave"], "user", [], "any", false, false, false, 55), "firstname", [], "any", false, false, false, 55), "html", null, true);
                echo "</td>
                                <td>
                                            ";
                // line 57
                echo twig_escape_filter($this->env, ((twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["leave"], "startDate", [], "any", false, false, false, 57), "d/m/Y") . " au ") . twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["leave"], "endDate", [], "any", false, false, false, 57), "d/m/Y")), "html", null, true);
                echo "
                                            ";
                // line 58
                if (( !(null === twig_get_attribute($this->env, $this->source, $context["leave"], "startHours", [], "any", false, false, false, 58)) &&  !(null === twig_get_attribute($this->env, $this->source, $context["leave"], "endHours", [], "any", false, false, false, 58)))) {
                    // line 59
                    echo "                                                <br><span class=\"hours\">";
                    echo twig_escape_filter($this->env, ((twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["leave"], "startHours", [], "any", false, false, false, 59), "H:i") . " à ") . twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["leave"], "endHours", [], "any", false, false, false, 59), "H:i")), "html", null, true);
                    echo "</span>
                                            ";
                }
                // line 61
                echo "                                        </td>
                                <td>
                                    <a href=\"";
                // line 63
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_leave_management_validation", ["id" => twig_get_attribute($this->env, $this->source, $context["leave"], "id", [], "any", false, false, false, 63)]), "html", null, true);
                echo "\"><img src=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/svg/checked.svg"), "html", null, true);
                echo "\" alt=\"Valider\"></a>
                                </td>
                                <td>
                                    <a href=\"";
                // line 66
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_leave_management_refus", ["id" => twig_get_attribute($this->env, $this->source, $context["leave"], "id", [], "any", false, false, false, 66)]), "html", null, true);
                echo "\"><img src=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/svg/cancel.svg"), "html", null, true);
                echo "\" alt=\"Refusé\"></a>
                                </td>
                            </tr>
                        ";
            }
            // line 69
            echo " 
                        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 71
            echo "                            <tr>
                                <td colspan=\"3\" class=\"text-center\">Aucune demande de congé en cours</td>
                            </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['leave'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 75
        echo "                    </tbody>
                </table>
            </div>
        </section>
    </div>
    <div class=\"col-md-6\">
        <section class=\"leaveGranted\" id=\"col2\">
        <div class=\"row\">
            <div class=\"col-12\">
                <h2 class=\"text-center\">Congé accordé</h2>
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-12\">
                <table class=\"dayVac\">
                    <thead>
                        <tr>
                            <th scope=\"col\" class=\"th_name\">Nom</th>
                            <th scope=\"col\" class=\"th_period\">Dates</th>
                            <th colspan=\"2\" class=\"th_verif pl-2\">Modification</th>
                        </tr>
                    </thead>
                    <tbody>
                        ";
        // line 98
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["leaves"]) || array_key_exists("leaves", $context) ? $context["leaves"] : (function () { throw new RuntimeError('Variable "leaves" does not exist.', 98, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["leave"]) {
            // line 99
            echo "                            ";
            if (((twig_get_attribute($this->env, $this->source, $context["leave"], "approved", [], "any", false, false, false, 99) == 1) && (twig_get_attribute($this->env, $this->source, $context["leave"], "startDate", [], "any", false, false, false, 99) >= twig_date_converter($this->env, "now")))) {
                // line 100
                echo "                                <tr>
                                    <td>";
                // line 101
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["leave"], "user", [], "any", false, false, false, 101), "lastname", [], "any", false, false, false, 101), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["leave"], "user", [], "any", false, false, false, 101), "firstname", [], "any", false, false, false, 101), "html", null, true);
                echo "</td>
                                    <td>";
                // line 102
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["leave"], "startDate", [], "any", false, false, false, 102), "d/m/Y"), "html", null, true);
                echo " au ";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["leave"], "endDate", [], "any", false, false, false, 102), "d/m/Y"), "html", null, true);
                echo "</td>
                                    <td>
                                        <a href=\"";
                // line 104
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_leave_management_en_attente", ["id" => twig_get_attribute($this->env, $this->source, $context["leave"], "id", [], "any", false, false, false, 104)]), "html", null, true);
                echo "\"><img src=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/svg/waiting.svg"), "html", null, true);
                echo "\" alt=\"Valider\"></a>
                                    </td>
                                    <td>
                                        <a href=\"";
                // line 107
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_leave_management_refus", ["id" => twig_get_attribute($this->env, $this->source, $context["leave"], "id", [], "any", false, false, false, 107)]), "html", null, true);
                echo "\"><img src=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/svg/cancel.svg"), "html", null, true);
                echo "\" alt=\"Refusé\"></a>
                                    </td>
                                </tr>
                            ";
            }
            // line 111
            echo "                            ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 112
            echo "                                <tr>
                                    <td colspan=\"4\" class=\"text-center\">Aucune demande de congé accordée</td>
                                </tr>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['leave'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 116
        echo "                        </tbody>
                    </table>
                </div>
            </section>
        </div>
    </div>
    <section class=\"leaveInProgress my-4\">
    <div class=\"row\">
            <div class=\"col-12\">
                <h2 class=\"text-center\">Congé en cours</h2>
            </div>
        </div>
       <div class=\"row\">
    <div class=\"col-12 text-center\">
        <table class=\"dayVac mx-auto\">
            <thead>
                <tr>
                    <th scope=\"col\" class=\"th_name\">Nom</th>
                    <th scope=\"col\" class=\"th_period\">Dates</th>
                </tr>
            </thead>
            <tbody>
                ";
        // line 138
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["leaves"]) || array_key_exists("leaves", $context) ? $context["leaves"] : (function () { throw new RuntimeError('Variable "leaves" does not exist.', 138, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["leave"]) {
            // line 139
            echo "                    ";
            if ((((twig_get_attribute($this->env, $this->source, $context["leave"], "approved", [], "any", false, false, false, 139) == 1) && (twig_get_attribute($this->env, $this->source, $context["leave"], "startDate", [], "any", false, false, false, 139) <= twig_date_converter($this->env, "now"))) && (twig_get_attribute($this->env, $this->source, $context["leave"], "endDate", [], "any", false, false, false, 139) >= twig_date_converter($this->env, "now")))) {
                // line 140
                echo "                        <tr>
                            <td>";
                // line 141
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["leave"], "user", [], "any", false, false, false, 141), "lastname", [], "any", false, false, false, 141), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["leave"], "user", [], "any", false, false, false, 141), "firstname", [], "any", false, false, false, 141), "html", null, true);
                echo "</td>
                            <td>";
                // line 142
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["leave"], "startDate", [], "any", false, false, false, 142), "d/m/Y"), "html", null, true);
                echo " au ";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["leave"], "endDate", [], "any", false, false, false, 142), "d/m/Y"), "html", null, true);
                echo "</td>
                        </tr>
                    ";
            }
            // line 145
            echo "                ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 146
            echo "                    <tr>
                        <td colspan=\"2\" class=\"text-center\">Aucun congé en cours</td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['leave'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 150
        echo "            </tbody>
        </table>
    </div>
</div>


    </section>
</div>
    ";
        // line 158
        $this->loadTemplate("partials/_phoneNav.html.twig", "pages/leave_management/index.html.twig", 158)->display($context);
        // line 159
        echo "
<script>
document.addEventListener('DOMContentLoaded', function() {
    var columns; // Déclarer la variable columns en dehors des fonctions

    function updatePage() {
        var windowWidth = window.innerWidth || document.documentElement.clientWidth || document.body.clientWidth;

        // Décider quel menu afficher en fonction de la largeur de la fenêtre
        if (windowWidth <= 768) {
            document.getElementById('phoneNav').style.display = 'block';
            document.getElementById('desktopNav').style.display = 'none';
            document.getElementById('desktopUser').style.display = 'none';
            document.getElementById('phoneUser').style.display = 'block';
            document.getElementById('phonelogout').classList.remove('d-none');
            document.querySelector('.leaveGranted').style.borderRadius = '0';
            document.querySelector('.leaveGranted').classList.add('mt-4');
        } else {
            document.getElementById('phoneNav').style.display = 'none';
            document.getElementById('desktopNav').style.display = 'block';
            document.getElementById('desktopUser').style.display = 'block';
            document.getElementById('phoneUser').style.display = 'none';
            document.getElementById('phonelogout').classList.add('d-none');
            document.getElementById('desktoplogout').style.display = 'block';
            document.querySelector('.leaveGranted').style.borderRadius = '0.5rem 0.5rem 0 0';
            document.querySelector('.leaveGranted').classList.remove('mt-4');
        }

        // Récupérer dans une constante la col1
        const col1 = document.getElementById('col1');
        // Récupérer dans une constante la col2
        const col2 = document.getElementById('col2');

        // Définir quelle colonne à la height la plus grande
        if (col1.offsetHeight > col2.offsetHeight) {
            columns = col1.offsetHeight;
        } else {
            columns = col2.offsetHeight;
        }

        // Appliquer la height la plus grande aux deux colonnes
        col1.style.height = columns + 'px';
        col2.style.height = columns + 'px';


    }

    updatePage();

    // Attacher le gestionnaire d'événements pour redimensionner la fenêtre
    window.addEventListener('resize', updatePage);
});



</script>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "pages/leave_management/index.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable()
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  390 => 159,  388 => 158,  378 => 150,  369 => 146,  364 => 145,  356 => 142,  350 => 141,  347 => 140,  344 => 139,  339 => 138,  315 => 116,  306 => 112,  301 => 111,  292 => 107,  284 => 104,  277 => 102,  271 => 101,  268 => 100,  265 => 99,  260 => 98,  235 => 75,  226 => 71,  220 => 69,  211 => 66,  203 => 63,  199 => 61,  193 => 59,  191 => 58,  187 => 57,  180 => 55,  177 => 54,  171 => 52,  165 => 50,  163 => 49,  159 => 47,  156 => 46,  151 => 45,  129 => 25,  120 => 22,  117 => 21,  113 => 20,  105 => 14,  103 => 13,  100 => 12,  98 => 11,  94 => 9,  92 => 8,  89 => 7,  79 => 6,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Gestion des congés | {{ company.companyAbrev }}{% endblock %}


{% block body %}
<div id=\"desktopNav\" style=\"display: none;\">
    {% include \"partials/_desktopNav.html.twig\" %}
</div>
<div class=\"container\">
    {% include \"partials/_headerStaff.html.twig\" %}
    <div id=\"phoneUser\" style=\"display: none;\">
        {% include \"partials/_currentUser.html.twig\" %}
    </div>
    <div class=\"row mt-4\">
        <div class=\"col-12\">
            <h1 class=\"text-center\">Gestion des congés</h1>
        </div>
    </div>
    {% for message in app.flashes('success') %}
        <div class=\"alert alert-success w-50 mx-auto my-4  text-center\">
            {{ message }}
        </div>
    {% endfor %}
<div class=\"row\">
    <div class=\"col-md-6\">
        <section class=\"leaveRequest\" id=\"col1\">
        <div class=\"row\">
            <div class=\"col-12\">
                <h2 class=\"text-center\">Demande de congé en cours</h2>
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-12\">
                <table>
                    <thead>
                        <tr>
                            <th scope=\"col\">Status</th>
                            <th scope=\"col\" class=\"th_name\">Nom</th>
                            <th scope=\"col\">Dates</th>
                            <th colspan=\"2\">Validation</th>
                        </tr>
                    </thead>
                    <tbody>
                        {% for leave in leaves %}
                        {% if leave.approved != 1 %}
                            <tr>
                                <td>
                                    {% if leave.approved == 0 %}
                                        <img src=\"{{ asset('assets/svg/waiting.svg') }}\" alt=\"En attente\">
                                    {% else %}
                                        <img src=\"{{ asset('assets/svg/cancel.svg') }}\" alt=\"Refusé\">
                                    {% endif %}
                                </td>
                                <td>{{ leave.user.lastname }} {{ leave.user.firstname }}</td>
                                <td>
                                            {{ leave.startDate|date('d/m/Y') ~ ' au ' ~ leave.endDate|date('d/m/Y') }}
                                            {% if leave.startHours is not null and leave.endHours is not null %}
                                                <br><span class=\"hours\">{{ leave.startHours|date('H:i') ~ ' à ' ~ leave.endHours|date('H:i') }}</span>
                                            {% endif %}
                                        </td>
                                <td>
                                    <a href=\"{{ path('app_leave_management_validation', {'id': leave.id}) }}\"><img src=\"{{ asset('assets/svg/checked.svg') }}\" alt=\"Valider\"></a>
                                </td>
                                <td>
                                    <a href=\"{{ path('app_leave_management_refus', {'id': leave.id}) }}\"><img src=\"{{ asset('assets/svg/cancel.svg') }}\" alt=\"Refusé\"></a>
                                </td>
                            </tr>
                        {% endif %} 
                        {% else %}
                            <tr>
                                <td colspan=\"3\" class=\"text-center\">Aucune demande de congé en cours</td>
                            </tr>
                        {% endfor %}
                    </tbody>
                </table>
            </div>
        </section>
    </div>
    <div class=\"col-md-6\">
        <section class=\"leaveGranted\" id=\"col2\">
        <div class=\"row\">
            <div class=\"col-12\">
                <h2 class=\"text-center\">Congé accordé</h2>
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-12\">
                <table class=\"dayVac\">
                    <thead>
                        <tr>
                            <th scope=\"col\" class=\"th_name\">Nom</th>
                            <th scope=\"col\" class=\"th_period\">Dates</th>
                            <th colspan=\"2\" class=\"th_verif pl-2\">Modification</th>
                        </tr>
                    </thead>
                    <tbody>
                        {% for leave in leaves %}
                            {% if leave.approved == 1 and leave.startDate >= date('now') %}
                                <tr>
                                    <td>{{ leave.user.lastname }} {{ leave.user.firstname }}</td>
                                    <td>{{ leave.startDate|date('d/m/Y') }} au {{ leave.endDate|date('d/m/Y') }}</td>
                                    <td>
                                        <a href=\"{{ path('app_leave_management_en_attente', {'id': leave.id}) }}\"><img src=\"{{ asset('assets/svg/waiting.svg') }}\" alt=\"Valider\"></a>
                                    </td>
                                    <td>
                                        <a href=\"{{ path('app_leave_management_refus', {'id': leave.id}) }}\"><img src=\"{{ asset('assets/svg/cancel.svg') }}\" alt=\"Refusé\"></a>
                                    </td>
                                </tr>
                            {% endif %}
                            {% else %}
                                <tr>
                                    <td colspan=\"4\" class=\"text-center\">Aucune demande de congé accordée</td>
                                </tr>
                            {% endfor %}
                        </tbody>
                    </table>
                </div>
            </section>
        </div>
    </div>
    <section class=\"leaveInProgress my-4\">
    <div class=\"row\">
            <div class=\"col-12\">
                <h2 class=\"text-center\">Congé en cours</h2>
            </div>
        </div>
       <div class=\"row\">
    <div class=\"col-12 text-center\">
        <table class=\"dayVac mx-auto\">
            <thead>
                <tr>
                    <th scope=\"col\" class=\"th_name\">Nom</th>
                    <th scope=\"col\" class=\"th_period\">Dates</th>
                </tr>
            </thead>
            <tbody>
                {% for leave in leaves %}
                    {% if leave.approved == 1 and leave.startDate <= date('now') and leave.endDate >= date('now') %}
                        <tr>
                            <td>{{ leave.user.lastname }} {{ leave.user.firstname }}</td>
                            <td>{{ leave.startDate|date('d/m/Y') }} au {{ leave.endDate|date('d/m/Y') }}</td>
                        </tr>
                    {% endif %}
                {% else %}
                    <tr>
                        <td colspan=\"2\" class=\"text-center\">Aucun congé en cours</td>
                    </tr>
                {% endfor %}
            </tbody>
        </table>
    </div>
</div>


    </section>
</div>
    {% include \"partials/_phoneNav.html.twig\" %}

<script>
document.addEventListener('DOMContentLoaded', function() {
    var columns; // Déclarer la variable columns en dehors des fonctions

    function updatePage() {
        var windowWidth = window.innerWidth || document.documentElement.clientWidth || document.body.clientWidth;

        // Décider quel menu afficher en fonction de la largeur de la fenêtre
        if (windowWidth <= 768) {
            document.getElementById('phoneNav').style.display = 'block';
            document.getElementById('desktopNav').style.display = 'none';
            document.getElementById('desktopUser').style.display = 'none';
            document.getElementById('phoneUser').style.display = 'block';
            document.getElementById('phonelogout').classList.remove('d-none');
            document.querySelector('.leaveGranted').style.borderRadius = '0';
            document.querySelector('.leaveGranted').classList.add('mt-4');
        } else {
            document.getElementById('phoneNav').style.display = 'none';
            document.getElementById('desktopNav').style.display = 'block';
            document.getElementById('desktopUser').style.display = 'block';
            document.getElementById('phoneUser').style.display = 'none';
            document.getElementById('phonelogout').classList.add('d-none');
            document.getElementById('desktoplogout').style.display = 'block';
            document.querySelector('.leaveGranted').style.borderRadius = '0.5rem 0.5rem 0 0';
            document.querySelector('.leaveGranted').classList.remove('mt-4');
        }

        // Récupérer dans une constante la col1
        const col1 = document.getElementById('col1');
        // Récupérer dans une constante la col2
        const col2 = document.getElementById('col2');

        // Définir quelle colonne à la height la plus grande
        if (col1.offsetHeight > col2.offsetHeight) {
            columns = col1.offsetHeight;
        } else {
            columns = col2.offsetHeight;
        }

        // Appliquer la height la plus grande aux deux colonnes
        col1.style.height = columns + 'px';
        col2.style.height = columns + 'px';


    }

    updatePage();

    // Attacher le gestionnaire d'événements pour redimensionner la fenêtre
    window.addEventListener('resize', updatePage);
});



</script>
{% endblock %}
", "pages/leave_management/index.html.twig", "/Users/anthonymerguin/Documents/projet/CorpPilot/templates/pages/leave_management/index.html.twig");
    }
}
