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
            <select class=\"form-select w-75 d-block mx-auto\">
                <option value=\"1\">Jour de congé classique</option>
                <option value=\"2\">Compte épargne temps</option>
                <option value=\"3\">Heures</option>
            </select>
                ";
        // line 46
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formDays"]) || array_key_exists("formDays", $context) ? $context["formDays"] : (function () { throw new RuntimeError('Variable "formDays" does not exist.', 46, $this->source); })()), 'form_start');
        echo "
                    <div class=\"row d-flex justify-content-evenly\">
                        <div class=\"col-4\">
                            ";
        // line 49
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formDays"]) || array_key_exists("formDays", $context) ? $context["formDays"] : (function () { throw new RuntimeError('Variable "formDays" does not exist.', 49, $this->source); })()), "startDate", [], "any", false, false, false, 49), 'row');
        echo "
                        </div>
                        <div class=\"col-4\">
                            ";
        // line 52
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formDays"]) || array_key_exists("formDays", $context) ? $context["formDays"] : (function () { throw new RuntimeError('Variable "formDays" does not exist.', 52, $this->source); })()), "endDate", [], "any", false, false, false, 52), 'row');
        echo "
                        </div>
                    </div>
                    <div class=\"d-block text-center\">
                        ";
        // line 56
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formDays"]) || array_key_exists("formDays", $context) ? $context["formDays"] : (function () { throw new RuntimeError('Variable "formDays" does not exist.', 56, $this->source); })()), "submit", [], "any", false, false, false, 56), 'row');
        echo "
                    </div>
                ";
        // line 58
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formDays"]) || array_key_exists("formDays", $context) ? $context["formDays"] : (function () { throw new RuntimeError('Variable "formDays" does not exist.', 58, $this->source); })()), 'form_end');
        echo "
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
        // line 80
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["vacations"]) || array_key_exists("vacations", $context) ? $context["vacations"] : (function () { throw new RuntimeError('Variable "vacations" does not exist.', 80, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["vacation"]) {
            // line 81
            echo "                                    <tr>
                                        <td>";
            // line 82
            echo twig_escape_filter($this->env, ((twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["vacation"], "startDate", [], "any", false, false, false, 82), "d/m/Y") . " au ") . twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["vacation"], "endDate", [], "any", false, false, false, 82), "d/m/Y")), "html", null, true);
            echo "</td>
                                        <td>
                                            ";
            // line 84
            if ((twig_get_attribute($this->env, $this->source, $context["vacation"], "approved", [], "any", false, false, false, 84) == 0)) {
                // line 85
                echo "                                                <img src=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/svg/waiting.svg"), "html", null, true);
                echo "\" alt=\"En attente\">
                                            ";
            } elseif ((twig_get_attribute($this->env, $this->source,             // line 86
$context["vacation"], "approved", [], "any", false, false, false, 86) == 1)) {
                // line 87
                echo "                                                <img src=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/svg/checked.svg"), "html", null, true);
                echo "\" alt=\"Validé\">
                                            ";
            } elseif ((twig_get_attribute($this->env, $this->source,             // line 88
$context["vacation"], "approved", [], "any", false, false, false, 88) == 2)) {
                // line 89
                echo "                                                <img src=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/svg/cancel.svg"), "html", null, true);
                echo "\" alt=\"Refusé\">
                                            ";
            }
            // line 91
            echo "                                        </td>
                                        <td>
                                            <a href=\"";
            // line 93
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_staff_vacation_modify", ["id" => twig_get_attribute($this->env, $this->source, $context["vacation"], "id", [], "any", false, false, false, 93)]), "html", null, true);
            echo "\">
                                                <img src=\"";
            // line 94
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/svg/modify.svg"), "html", null, true);
            echo "\" alt=\"Modifier\">
                                            </a>
                                        </td>
                                        <td>
                                            <a href=\"";
            // line 98
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_staff_vacation_delete", ["id" => twig_get_attribute($this->env, $this->source, $context["vacation"], "id", [], "any", false, false, false, 98)]), "html", null, true);
            echo "\">
                                                <img src=\"";
            // line 99
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
        // line 104
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
        // line 114
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["dayVacations"]) || array_key_exists("dayVacations", $context) ? $context["dayVacations"] : (function () { throw new RuntimeError('Variable "dayVacations" does not exist.', 114, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["dayVacation"]) {
            // line 115
            echo "                <div>
                    <span>";
            // line 116
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["dayVacation"], "available", [], "any", false, false, false, 116), "html", null, true);
            echo "</span>
                    <p>Jours de congés disponibles</p>
                </div>
                <div>
                    <span>";
            // line 120
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["dayVacation"], "cet", [], "any", false, false, false, 120), "html", null, true);
            echo "</span>
                    <p>Jours - compte épargne temps</p>
                </div>
                <div>
                    <span>";
            // line 124
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["dayVacation"], "hoursAvailable", [], "any", false, false, false, 124), "html", null, true);
            echo "</span>
                    <p>Heures disponibles</p>
                </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['dayVacation'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 128
        echo "            </div>
        </div>
    </section>
</div>
<div id=\"phoneNav\" style=\"display: none;\">
    ";
        // line 133
        $this->loadTemplate("partials/_phoneNav.html.twig", "pages/staff_vacation/index.html.twig", 133)->display($context);
        // line 134
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
        return array (  325 => 134,  323 => 133,  316 => 128,  306 => 124,  299 => 120,  292 => 116,  289 => 115,  285 => 114,  273 => 104,  262 => 99,  258 => 98,  251 => 94,  247 => 93,  243 => 91,  237 => 89,  235 => 88,  230 => 87,  228 => 86,  223 => 85,  221 => 84,  216 => 82,  213 => 81,  209 => 80,  184 => 58,  179 => 56,  172 => 52,  166 => 49,  160 => 46,  149 => 37,  140 => 34,  137 => 33,  133 => 32,  125 => 26,  123 => 25,  117 => 21,  115 => 20,  109 => 17,  104 => 14,  102 => 13,  95 => 8,  93 => 7,  90 => 6,  80 => 5,  59 => 3,  36 => 1,);
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
            <select class=\"form-select w-75 d-block mx-auto\">
                <option value=\"1\">Jour de congé classique</option>
                <option value=\"2\">Compte épargne temps</option>
                <option value=\"3\">Heures</option>
            </select>
                {{ form_start(formDays) }}
                    <div class=\"row d-flex justify-content-evenly\">
                        <div class=\"col-4\">
                            {{ form_row(formDays.startDate) }}
                        </div>
                        <div class=\"col-4\">
                            {{ form_row(formDays.endDate) }}
                        </div>
                    </div>
                    <div class=\"d-block text-center\">
                        {{ form_row(formDays.submit) }}
                    </div>
                {{ form_end(formDays) }}
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
                                        <td>{{ vacation.startDate|date('d/m/Y') ~ ' au ' ~ vacation.endDate|date('d/m/Y') }}</td>
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
