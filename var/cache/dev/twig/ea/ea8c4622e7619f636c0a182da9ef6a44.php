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
class __TwigTemplate_ac8a5456997047f99c4c26bf44494b96 extends Template
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
        echo twig_escape_filter($this->env, (isset($context["companyAbrev"]) || array_key_exists("companyAbrev", $context) ? $context["companyAbrev"] : (function () { throw new RuntimeError('Variable "companyAbrev" does not exist.', 3, $this->source); })()), "html", null, true);
        echo "Gest";
        
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
    <section class=\"headerStaff\">
        <div class=\"row mt-4 \">
            <div id=\"desktopUser\" class=\"col-4\" style=\"display: none;\">
                ";
        // line 14
        $this->loadTemplate("partials/_currentUser.html.twig", "pages/leave_management/index.html.twig", 14)->display($context);
        // line 15
        echo "            </div>
            <div class=\"col-4\"></div>
            <div class=\"col-4 d-flex justify-content-center align-items-center\">
                <img src=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/svg/blason.svg"), "html", null, true);
        echo "\" width=\"100\" alt=\"Blason de la ville de deyvillers\">
            </div>
            <div id=\"phonelogout\" class=\"col-4 d-flex justify-content-end align-items-center\">
                ";
        // line 21
        $this->loadTemplate("partials/_logout.html.twig", "pages/leave_management/index.html.twig", 21)->display($context);
        // line 22
        echo "            </div>
        </div>
    </section>
    <div id=\"phoneUser\" style=\"display: none;\">
        ";
        // line 26
        $this->loadTemplate("partials/_currentUser.html.twig", "pages/leave_management/index.html.twig", 26)->display($context);
        // line 27
        echo "    </div>
    <div class=\"row mt-4\">
        <div class=\"col-12\">
            <h1 class=\"text-center\">Gestion des congés</h1>
        </div>
    </div>
    ";
        // line 33
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 33, $this->source); })()), "flashes", ["success"], "method", false, false, false, 33));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 34
            echo "        <div class=\"alert alert-success w-50 mx-auto my-4  text-center\">
            ";
            // line 35
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
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
        // line 58
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["leaves"]) || array_key_exists("leaves", $context) ? $context["leaves"] : (function () { throw new RuntimeError('Variable "leaves" does not exist.', 58, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["leave"]) {
            // line 59
            echo "                        ";
            if ((twig_get_attribute($this->env, $this->source, $context["leave"], "approved", [], "any", false, false, false, 59) != 1)) {
                // line 60
                echo "                            <tr>
                                <td>
                                    ";
                // line 62
                if ((twig_get_attribute($this->env, $this->source, $context["leave"], "approved", [], "any", false, false, false, 62) == 0)) {
                    // line 63
                    echo "                                        <img src=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/svg/waiting.svg"), "html", null, true);
                    echo "\" alt=\"En attente\">
                                    ";
                } else {
                    // line 65
                    echo "                                        <img src=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/svg/cancel.svg"), "html", null, true);
                    echo "\" alt=\"Refusé\">
                                    ";
                }
                // line 67
                echo "                                </td>
                                <td>";
                // line 68
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["leave"], "user", [], "any", false, false, false, 68), "lastname", [], "any", false, false, false, 68), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["leave"], "user", [], "any", false, false, false, 68), "firstname", [], "any", false, false, false, 68), "html", null, true);
                echo "</td>
                                <td>";
                // line 69
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["leave"], "startDate", [], "any", false, false, false, 69), "d/m/Y"), "html", null, true);
                echo " au ";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["leave"], "endDate", [], "any", false, false, false, 69), "d/m/Y"), "html", null, true);
                echo "</td>
                                <td>
                                    <a href=\"";
                // line 71
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_leave_management_validation", ["id" => twig_get_attribute($this->env, $this->source, $context["leave"], "id", [], "any", false, false, false, 71)]), "html", null, true);
                echo "\"><img src=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/svg/checked.svg"), "html", null, true);
                echo "\" alt=\"Valider\"></a>
                                </td>
                                <td>
                                    <a href=\"";
                // line 74
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_leave_management_refus", ["id" => twig_get_attribute($this->env, $this->source, $context["leave"], "id", [], "any", false, false, false, 74)]), "html", null, true);
                echo "\"><img src=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/svg/cancel.svg"), "html", null, true);
                echo "\" alt=\"Refusé\"></a>
                                </td>
                            </tr>
                        ";
            }
            // line 77
            echo " 
                        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 79
            echo "                            <tr>
                                <td colspan=\"3\" class=\"text-center\">Aucune demande de congé en cours</td>
                            </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['leave'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 83
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
        // line 106
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["leaves"]) || array_key_exists("leaves", $context) ? $context["leaves"] : (function () { throw new RuntimeError('Variable "leaves" does not exist.', 106, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["leave"]) {
            // line 107
            echo "                            ";
            if (((twig_get_attribute($this->env, $this->source, $context["leave"], "approved", [], "any", false, false, false, 107) == 1) && (twig_get_attribute($this->env, $this->source, $context["leave"], "startDate", [], "any", false, false, false, 107) >= twig_date_converter($this->env, "now")))) {
                // line 108
                echo "                                <tr>
                                    <td>";
                // line 109
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["leave"], "user", [], "any", false, false, false, 109), "lastname", [], "any", false, false, false, 109), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["leave"], "user", [], "any", false, false, false, 109), "firstname", [], "any", false, false, false, 109), "html", null, true);
                echo "</td>
                                    <td>";
                // line 110
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["leave"], "startDate", [], "any", false, false, false, 110), "d/m/Y"), "html", null, true);
                echo " au ";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["leave"], "endDate", [], "any", false, false, false, 110), "d/m/Y"), "html", null, true);
                echo "</td>
                                    <td>
                                        <a href=\"";
                // line 112
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_leave_management_en_attente", ["id" => twig_get_attribute($this->env, $this->source, $context["leave"], "id", [], "any", false, false, false, 112)]), "html", null, true);
                echo "\"><img src=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/svg/waiting.svg"), "html", null, true);
                echo "\" alt=\"Valider\"></a>
                                    </td>
                                    <td>
                                        <a href=\"";
                // line 115
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_leave_management_refus", ["id" => twig_get_attribute($this->env, $this->source, $context["leave"], "id", [], "any", false, false, false, 115)]), "html", null, true);
                echo "\"><img src=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/svg/cancel.svg"), "html", null, true);
                echo "\" alt=\"Refusé\"></a>
                                    </td>
                                </tr>
                            ";
            }
            // line 119
            echo "                            ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 120
            echo "                                <tr>
                                    <td colspan=\"4\" class=\"text-center\">Aucune demande de congé accordée</td>
                                </tr>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['leave'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 124
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
        // line 146
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["leaves"]) || array_key_exists("leaves", $context) ? $context["leaves"] : (function () { throw new RuntimeError('Variable "leaves" does not exist.', 146, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["leave"]) {
            // line 147
            echo "                    ";
            if ((((twig_get_attribute($this->env, $this->source, $context["leave"], "approved", [], "any", false, false, false, 147) == 1) && (twig_get_attribute($this->env, $this->source, $context["leave"], "startDate", [], "any", false, false, false, 147) <= twig_date_converter($this->env, "now"))) && (twig_get_attribute($this->env, $this->source, $context["leave"], "endDate", [], "any", false, false, false, 147) >= twig_date_converter($this->env, "now")))) {
                // line 148
                echo "                        <tr>
                            <td>";
                // line 149
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["leave"], "user", [], "any", false, false, false, 149), "lastname", [], "any", false, false, false, 149), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["leave"], "user", [], "any", false, false, false, 149), "firstname", [], "any", false, false, false, 149), "html", null, true);
                echo "</td>
                            <td>";
                // line 150
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["leave"], "startDate", [], "any", false, false, false, 150), "d/m/Y"), "html", null, true);
                echo " au ";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["leave"], "endDate", [], "any", false, false, false, 150), "d/m/Y"), "html", null, true);
                echo "</td>
                        </tr>
                    ";
            }
            // line 153
            echo "                ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 154
            echo "                    <tr>
                        <td colspan=\"2\" class=\"text-center\">Aucun congé en cours</td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['leave'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 158
        echo "            </tbody>
        </table>
    </div>
</div>


    </section>
</div>
<div id=\"phoneNav\" style=\"display: none;\">
    ";
        // line 167
        $this->loadTemplate("partials/_phoneNav.html.twig", "pages/leave_management/index.html.twig", 167)->display($context);
        // line 168
        echo "</div>

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
        return array (  401 => 168,  399 => 167,  388 => 158,  379 => 154,  374 => 153,  366 => 150,  360 => 149,  357 => 148,  354 => 147,  349 => 146,  325 => 124,  316 => 120,  311 => 119,  302 => 115,  294 => 112,  287 => 110,  281 => 109,  278 => 108,  275 => 107,  270 => 106,  245 => 83,  236 => 79,  230 => 77,  221 => 74,  213 => 71,  206 => 69,  200 => 68,  197 => 67,  191 => 65,  185 => 63,  183 => 62,  179 => 60,  176 => 59,  171 => 58,  149 => 38,  140 => 35,  137 => 34,  133 => 33,  125 => 27,  123 => 26,  117 => 22,  115 => 21,  109 => 18,  104 => 15,  102 => 14,  95 => 9,  93 => 8,  90 => 7,  80 => 6,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Gestion des congés | {{ companyAbrev }}Gest{% endblock %}


{% block body %}
<div id=\"desktopNav\" style=\"display: none;\">
    {% include \"partials/_desktopNav.html.twig\" %}
</div>
<div class=\"container\">
    <section class=\"headerStaff\">
        <div class=\"row mt-4 \">
            <div id=\"desktopUser\" class=\"col-4\" style=\"display: none;\">
                {% include \"partials/_currentUser.html.twig\" %}
            </div>
            <div class=\"col-4\"></div>
            <div class=\"col-4 d-flex justify-content-center align-items-center\">
                <img src=\"{{ asset('assets/svg/blason.svg') }}\" width=\"100\" alt=\"Blason de la ville de deyvillers\">
            </div>
            <div id=\"phonelogout\" class=\"col-4 d-flex justify-content-end align-items-center\">
                {% include \"partials/_logout.html.twig\" %}
            </div>
        </div>
    </section>
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
                                <td>{{ leave.startDate|date('d/m/Y') }} au {{ leave.endDate|date('d/m/Y') }}</td>
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
<div id=\"phoneNav\" style=\"display: none;\">
    {% include \"partials/_phoneNav.html.twig\" %}
</div>

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
