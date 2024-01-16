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

/* pages/staff_vacation/index.html.twig */
class __TwigTemplate_40e127e6ef5152d73346a7dab6db1e56 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pages/staff_vacation/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pages/staff_vacation/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "pages/staff_vacation/index.html.twig", 1);
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

        echo "Demande de congés | ";
        echo twig_escape_filter($this->env, (isset($context["companyAbrev"]) || array_key_exists("companyAbrev", $context) ? $context["companyAbrev"] : (function () { throw new RuntimeError('Variable "companyAbrev" does not exist.', 3, $this->source); })()), "html", null, true);
        echo "Gest";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<div id=\"desktopNav\" style=\"display: none;\">
    ";
        // line 7
        $this->loadTemplate("partials/_desktopNav.html.twig", "pages/staff_vacation/index.html.twig", 7)->display($context);
        // line 8
        echo "</div>
<div class=\"container\">
    <section class=\"headerStaff\">
        <div class=\"row mt-4 \">
            <div id=\"desktopUser\" class=\"col-4\" style=\"display: none;\">
                ";
        // line 13
        $this->loadTemplate("partials/_currentUser.html.twig", "pages/staff_vacation/index.html.twig", 13)->display($context);
        // line 14
        echo "            </div>
            <div class=\"col-4\"></div>
            <div class=\"col-4 d-flex justify-content-center align-items-center\">
                <img src=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/svg/blason.svg"), "html", null, true);
        echo "\" width=\"100\" alt=\"Blason de la ville de deyvillers\">
            </div>
            <div id=\"phonelogout\" class=\"col-4 d-flex justify-content-end align-items-center\">
                ";
        // line 20
        $this->loadTemplate("partials/_logout.html.twig", "pages/staff_vacation/index.html.twig", 20)->display($context);
        // line 21
        echo "            </div>
        </div>
    </section>
    <div id=\"phoneUser\" style=\"display: none;\">
        ";
        // line 25
        $this->loadTemplate("partials/_currentUser.html.twig", "pages/staff_vacation/index.html.twig", 25)->display($context);
        // line 26
        echo "    </div>
    <div class=\"row mt-4\">
        <div class=\"col-12\">
            <h1 class=\"text-center\">Demande de congés</h1>
        </div>
    </div>
    ";
        // line 32
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 32, $this->source); })()), "flashes", ["success"], "method", false, false, false, 32));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 33
            echo "        <div class=\"alert alert-success w-50 mx-auto my-4  text-center\">
            ";
            // line 34
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        echo "<div class=\"row\">
    <div class=\"col-md-6\">
        <section class=\"formVac\" id=\"col1\">
            <label>Choisissez votre compte</label>
            <select id=\"vacationType\" class=\"form-select w-75 d-block mx-auto mb-4\">
                <option value=\"1\">Jour de congé classique</option>
                <option value=\"2\">Compte épargne temps</option>
                <option value=\"3\">Heures</option>
            </select>
                <div id=\"formDays\">
                    ";
        // line 47
        $this->loadTemplate("partials/_formDays.html.twig", "pages/staff_vacation/index.html.twig", 47)->display($context);
        // line 48
        echo "                </div>
                <div id=\"formHours\" class=\"d-none\">
                    ";
        // line 50
        $this->loadTemplate("partials/_formHours.html.twig", "pages/staff_vacation/index.html.twig", 50)->display($context);
        // line 51
        echo "                </div>
            </section>
        </div>
        <div class=\"col-md-6\">
            <section class=\"vacStatus\" id=\"col2\">
                <div class=\"row\">
                    <div class=\"col-12\">
                        <h2 class=\"text-center\">Statut demande</h2>
                    </div>
                </div>
                <div class=\"row\">
                    <div class=\"col-12\">
                        <table>
                            <thead>
                                <tr>
                                    <th class=\"th_period\"></th>
                                    <th class=\"th_verif\"></th>
                                    <th class=\"th_modify\"></th>
                                    <th class=\"th_delete\"></th>
                                </tr>
                            </thead>
                            <tbody>
                                ";
        // line 73
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["vacations"]) || array_key_exists("vacations", $context) ? $context["vacations"] : (function () { throw new RuntimeError('Variable "vacations" does not exist.', 73, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["vacation"]) {
            // line 74
            echo "                                    <tr>
                                        <td>
                                            ";
            // line 76
            echo twig_escape_filter($this->env, ((twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["vacation"], "startDate", [], "any", false, false, false, 76), "d/m/Y") . " au ") . twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["vacation"], "endDate", [], "any", false, false, false, 76), "d/m/Y")), "html", null, true);
            echo "
                                            ";
            // line 77
            if (( !(null === twig_get_attribute($this->env, $this->source, $context["vacation"], "startHours", [], "any", false, false, false, 77)) &&  !(null === twig_get_attribute($this->env, $this->source, $context["vacation"], "endHours", [], "any", false, false, false, 77)))) {
                // line 78
                echo "                                                <span class=\"hours\">";
                echo twig_escape_filter($this->env, ((twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["vacation"], "startHours", [], "any", false, false, false, 78), "H:i") . " à ") . twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["vacation"], "endHours", [], "any", false, false, false, 78), "H:i")), "html", null, true);
                echo "</span>
                                            ";
            }
            // line 80
            echo "                                        </td>
                                        <td>
                                            ";
            // line 82
            if ((twig_get_attribute($this->env, $this->source, $context["vacation"], "approved", [], "any", false, false, false, 82) == 0)) {
                // line 83
                echo "                                                <img src=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/svg/waiting.svg"), "html", null, true);
                echo "\" alt=\"En attente\">
                                            ";
            } elseif ((twig_get_attribute($this->env, $this->source,             // line 84
$context["vacation"], "approved", [], "any", false, false, false, 84) == 1)) {
                // line 85
                echo "                                                <img src=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/svg/checked.svg"), "html", null, true);
                echo "\" alt=\"Validé\">
                                            ";
            } elseif ((twig_get_attribute($this->env, $this->source,             // line 86
$context["vacation"], "approved", [], "any", false, false, false, 86) == 2)) {
                // line 87
                echo "                                                <img src=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/svg/cancel.svg"), "html", null, true);
                echo "\" alt=\"Refusé\">
                                            ";
            }
            // line 89
            echo "                                        </td>
                                        <td>
                                            <a href=\"";
            // line 91
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_staff_vacation_modify", ["id" => twig_get_attribute($this->env, $this->source, $context["vacation"], "id", [], "any", false, false, false, 91)]), "html", null, true);
            echo "\">
                                                <img src=\"";
            // line 92
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/svg/modify.svg"), "html", null, true);
            echo "\" alt=\"Modifier\">
                                            </a>
                                        </td>
                                        <td>
                                            <a href=\"";
            // line 96
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_staff_vacation_delete", ["id" => twig_get_attribute($this->env, $this->source, $context["vacation"], "id", [], "any", false, false, false, 96)]), "html", null, true);
            echo "\">
                                                <img src=\"";
            // line 97
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/svg/trash.svg"), "html", null, true);
            echo "\" alt=\"Supprimer\">
                                            </a>
                                        </td>
                                    </tr>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['vacation'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 102
        echo "                            </tbody>
                        </table>
                    </div>
                </div>
            </section>
        </div>
    </div>
    <section class=\"vacDispo my-4\">
        <div class=\"row\">
            <div class=\"col-12 d-flex flex-row justify-content-around\">
                ";
        // line 112
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["dayVacations"]) || array_key_exists("dayVacations", $context) ? $context["dayVacations"] : (function () { throw new RuntimeError('Variable "dayVacations" does not exist.', 112, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["dayVacation"]) {
            // line 113
            echo "                <div>
                    <span>";
            // line 114
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["dayVacation"], "available", [], "any", false, false, false, 114), "html", null, true);
            echo "</span>
                    <p>Jours de congés disponibles</p>
                </div>
                <div>
                    <span>";
            // line 118
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["dayVacation"], "cet", [], "any", false, false, false, 118), "html", null, true);
            echo "</span>
                    <p>Jours - compte épargne temps</p>
                </div>
                <div>
                    <span>";
            // line 122
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["dayVacation"], "hoursAvailable", [], "any", false, false, false, 122), "html", null, true);
            echo "</span>
                    <p>Heures disponibles</p>
                </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['dayVacation'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 126
        echo "            </div>
        </div>
    </section>
</div>
<div id=\"phoneNav\" style=\"display: none;\">
    ";
        // line 131
        $this->loadTemplate("partials/_phoneNav.html.twig", "pages/staff_vacation/index.html.twig", 131)->display($context);
        // line 132
        echo "</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    var vacationTypeSelect = document.getElementById('vacationType');
        var formDaysDiv = document.getElementById('formDays');
        var formHoursDiv = document.getElementById('formHours');

        vacationTypeSelect.addEventListener('change', function() {
            var selectedValue = vacationTypeSelect.value;

            formDaysDiv.style.display = 'none';
            formHoursDiv.style.display = 'none';

            if (selectedValue === '1') {
                formDaysDiv.style.display = 'block';
            } else if (selectedValue === '2') {
                formDaysDiv.style.display = 'block';
            } else if (selectedValue === '3') {
                formHoursDiv.classList.remove('d-none');
                formHoursDiv.style.display = 'block';
                document.querySelector('.hours').classList.remove('d-none');
            }
        });

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
            document.querySelector('.vacStatus').style.borderRadius = '0';
            document.querySelector('.vacStatus').classList.add('mt-4');
        } else {
            document.getElementById('phoneNav').style.display = 'none';
            document.getElementById('desktopNav').style.display = 'block';
            document.getElementById('desktopUser').style.display = 'block';
            document.getElementById('phoneUser').style.display = 'none';
            document.getElementById('phonelogout').classList.add('d-none');
            document.getElementById('desktoplogout').style.display = 'block';
            document.querySelector('.vacStatus').style.borderRadius = '0.5rem 0.5rem 0 0';
            document.querySelector('.vacStatus').classList.remove('mt-4');
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
        return "pages/staff_vacation/index.html.twig";
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
        return array (  321 => 132,  319 => 131,  312 => 126,  302 => 122,  295 => 118,  288 => 114,  285 => 113,  281 => 112,  269 => 102,  258 => 97,  254 => 96,  247 => 92,  243 => 91,  239 => 89,  233 => 87,  231 => 86,  226 => 85,  224 => 84,  219 => 83,  217 => 82,  213 => 80,  207 => 78,  205 => 77,  201 => 76,  197 => 74,  193 => 73,  169 => 51,  167 => 50,  163 => 48,  161 => 47,  149 => 37,  140 => 34,  137 => 33,  133 => 32,  125 => 26,  123 => 25,  117 => 21,  115 => 20,  109 => 17,  104 => 14,  102 => 13,  95 => 8,  93 => 7,  90 => 6,  80 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Demande de congés | {{ companyAbrev }}Gest{% endblock %}

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
            <h1 class=\"text-center\">Demande de congés</h1>
        </div>
    </div>
    {% for message in app.flashes('success') %}
        <div class=\"alert alert-success w-50 mx-auto my-4  text-center\">
            {{ message }}
        </div>
    {% endfor %}
<div class=\"row\">
    <div class=\"col-md-6\">
        <section class=\"formVac\" id=\"col1\">
            <label>Choisissez votre compte</label>
            <select id=\"vacationType\" class=\"form-select w-75 d-block mx-auto mb-4\">
                <option value=\"1\">Jour de congé classique</option>
                <option value=\"2\">Compte épargne temps</option>
                <option value=\"3\">Heures</option>
            </select>
                <div id=\"formDays\">
                    {% include \"partials/_formDays.html.twig\" %}
                </div>
                <div id=\"formHours\" class=\"d-none\">
                    {% include \"partials/_formHours.html.twig\" %}
                </div>
            </section>
        </div>
        <div class=\"col-md-6\">
            <section class=\"vacStatus\" id=\"col2\">
                <div class=\"row\">
                    <div class=\"col-12\">
                        <h2 class=\"text-center\">Statut demande</h2>
                    </div>
                </div>
                <div class=\"row\">
                    <div class=\"col-12\">
                        <table>
                            <thead>
                                <tr>
                                    <th class=\"th_period\"></th>
                                    <th class=\"th_verif\"></th>
                                    <th class=\"th_modify\"></th>
                                    <th class=\"th_delete\"></th>
                                </tr>
                            </thead>
                            <tbody>
                                {% for vacation in vacations %}
                                    <tr>
                                        <td>
                                            {{ vacation.startDate|date('d/m/Y') ~ ' au ' ~ vacation.endDate|date('d/m/Y') }}
                                            {% if vacation.startHours is not null and vacation.endHours is not null %}
                                                <span class=\"hours\">{{ vacation.startHours|date('H:i') ~ ' à ' ~ vacation.endHours|date('H:i') }}</span>
                                            {% endif %}
                                        </td>
                                        <td>
                                            {% if vacation.approved == 0 %}
                                                <img src=\"{{ asset('assets/svg/waiting.svg') }}\" alt=\"En attente\">
                                            {% elseif vacation.approved == 1 %}
                                                <img src=\"{{ asset('assets/svg/checked.svg') }}\" alt=\"Validé\">
                                            {% elseif vacation.approved == 2 %}
                                                <img src=\"{{ asset('assets/svg/cancel.svg') }}\" alt=\"Refusé\">
                                            {% endif %}
                                        </td>
                                        <td>
                                            <a href=\"{{ path('app_staff_vacation_modify', {'id': vacation.id}) }}\">
                                                <img src=\"{{ asset('assets/svg/modify.svg') }}\" alt=\"Modifier\">
                                            </a>
                                        </td>
                                        <td>
                                            <a href=\"{{ path('app_staff_vacation_delete', {'id': vacation.id}) }}\">
                                                <img src=\"{{ asset('assets/svg/trash.svg') }}\" alt=\"Supprimer\">
                                            </a>
                                        </td>
                                    </tr>
                                {% endfor %}
                            </tbody>
                        </table>
                    </div>
                </div>
            </section>
        </div>
    </div>
    <section class=\"vacDispo my-4\">
        <div class=\"row\">
            <div class=\"col-12 d-flex flex-row justify-content-around\">
                {% for dayVacation in dayVacations %}
                <div>
                    <span>{{ dayVacation.available }}</span>
                    <p>Jours de congés disponibles</p>
                </div>
                <div>
                    <span>{{ dayVacation.cet }}</span>
                    <p>Jours - compte épargne temps</p>
                </div>
                <div>
                    <span>{{ dayVacation.hoursAvailable }}</span>
                    <p>Heures disponibles</p>
                </div>
                {% endfor %}
            </div>
        </div>
    </section>
</div>
<div id=\"phoneNav\" style=\"display: none;\">
    {% include \"partials/_phoneNav.html.twig\" %}
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    var vacationTypeSelect = document.getElementById('vacationType');
        var formDaysDiv = document.getElementById('formDays');
        var formHoursDiv = document.getElementById('formHours');

        vacationTypeSelect.addEventListener('change', function() {
            var selectedValue = vacationTypeSelect.value;

            formDaysDiv.style.display = 'none';
            formHoursDiv.style.display = 'none';

            if (selectedValue === '1') {
                formDaysDiv.style.display = 'block';
            } else if (selectedValue === '2') {
                formDaysDiv.style.display = 'block';
            } else if (selectedValue === '3') {
                formHoursDiv.classList.remove('d-none');
                formHoursDiv.style.display = 'block';
                document.querySelector('.hours').classList.remove('d-none');
            }
        });

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
            document.querySelector('.vacStatus').style.borderRadius = '0';
            document.querySelector('.vacStatus').classList.add('mt-4');
        } else {
            document.getElementById('phoneNav').style.display = 'none';
            document.getElementById('desktopNav').style.display = 'block';
            document.getElementById('desktopUser').style.display = 'block';
            document.getElementById('phoneUser').style.display = 'none';
            document.getElementById('phonelogout').classList.add('d-none');
            document.getElementById('desktoplogout').style.display = 'block';
            document.querySelector('.vacStatus').style.borderRadius = '0.5rem 0.5rem 0 0';
            document.querySelector('.vacStatus').classList.remove('mt-4');
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
", "pages/staff_vacation/index.html.twig", "/Users/anthonymerguin/Documents/projet/CorpPilot/templates/pages/staff_vacation/index.html.twig");
    }
}
