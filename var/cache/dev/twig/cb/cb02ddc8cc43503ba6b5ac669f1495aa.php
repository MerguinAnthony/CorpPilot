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
class __TwigTemplate_974e5d87c4e001a85907304ba7aa5161 extends Template
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

        echo "Hello StaffVacationController!";
        
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
        echo "<div class=\"container\">
    <section class=\"headerStaff\">
        <div class=\"row mt-4\">
            <div class=\"col-4\"></div>
            <div class=\"col-4 text-center\"> <!-- Ajout de la classe text-center pour centrer le blason -->
                <img src=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/svg/blason.svg"), "html", null, true);
        echo "\" width=\"100\" alt=\"Blason de la ville de deyvillers\">
            </div>
            <div class=\"col-4 d-flex justify-content-end\"> <!-- Ajout de la classe text-right pour aligner à droite -->
                <a href=\"";
        // line 14
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
        echo "\">
                    <img src=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/svg/logout.svg"), "html", null, true);
        echo "\" alt=\"Déconnexion\">
                </a>
            </div>
        </div>
    </section>
    ";
        // line 20
        if ((isset($context["currentUser"]) || array_key_exists("currentUser", $context) ? $context["currentUser"] : (function () { throw new RuntimeError('Variable "currentUser" does not exist.', 20, $this->source); })())) {
            // line 21
            echo "        <div class=\"row mt-4\">
            <div class=\"col-6 d-flex justify-content-center\">
                <img src=\"";
            // line 23
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/Img/69944235142__78B07BD1-5790-446E-8015-0A4866FD84B1.png"), "html", null, true);
            echo "\" alt=\"Photo de profil";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["currentUser"]) || array_key_exists("currentUser", $context) ? $context["currentUser"] : (function () { throw new RuntimeError('Variable "currentUser" does not exist.', 23, $this->source); })()), "lastName", [], "any", false, false, false, 23), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["currentUser"]) || array_key_exists("currentUser", $context) ? $context["currentUser"] : (function () { throw new RuntimeError('Variable "currentUser" does not exist.', 23, $this->source); })()), "firstName", [], "any", false, false, false, 23), "html", null, true);
            echo "\" width=\"100\" class=\"rounded-circle\">
            </div>
            <div class=\"col-6\">
                <div class=\"row\">
                    <div class=\"col-12 ff-3 fs-3\">
                        <p class=\"p-0 my-3 \">";
            // line 28
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["currentUser"]) || array_key_exists("currentUser", $context) ? $context["currentUser"] : (function () { throw new RuntimeError('Variable "currentUser" does not exist.', 28, $this->source); })()), "lastName", [], "any", false, false, false, 28), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["currentUser"]) || array_key_exists("currentUser", $context) ? $context["currentUser"] : (function () { throw new RuntimeError('Variable "currentUser" does not exist.', 28, $this->source); })()), "firstName", [], "any", false, false, false, 28), "html", null, true);
            echo "</p>
                    </div>
                </div>
                <div class=\"row\">
                    <div class=\"col-12\">
                        <p>";
            // line 33
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["currentUser"]) || array_key_exists("currentUser", $context) ? $context["currentUser"] : (function () { throw new RuntimeError('Variable "currentUser" does not exist.', 33, $this->source); })()), "job", [], "any", false, false, false, 33), "html", null, true);
            echo "</p>
                    </div>
                </div>
            </div>
        </div>
    ";
        }
        // line 39
        echo "    <div class=\"row mt-4\">
        <div class=\"col-12\">
            <h1 class=\"text-center\">Demande de congés</h1>
        </div>
    </div>
    ";
        // line 44
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 44, $this->source); })()), "flashes", ["success"], "method", false, false, false, 44));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 45
            echo "        <div class=\"alert alert-success w-50 mx-auto my-4  text-center\">
            ";
            // line 46
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 49
        echo "    <section class=\"formVac\">
        ";
        // line 50
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 50, $this->source); })()), 'form_start');
        echo "
            <div class=\"row d-flex justify-content-evenly\">
                <div class=\"col-4\">
                    ";
        // line 53
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 53, $this->source); })()), "startDate", [], "any", false, false, false, 53), 'row');
        echo "
                </div>
                <div class=\"col-4\">
                    ";
        // line 56
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 56, $this->source); })()), "endDate", [], "any", false, false, false, 56), 'row');
        echo "
                </div>
            </div>
            <div class=\"d-block text-center\">
                ";
        // line 60
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 60, $this->source); })()), "submit", [], "any", false, false, false, 60), 'row');
        echo "
            </div>
        ";
        // line 62
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 62, $this->source); })()), 'form_end');
        echo "
    </section>
    <section class=\"vacStatus mt-4\">
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
                            <th class=\"period\"></th>
                            <th class=\"verif\"></th>
                            <th class=\"modify\"></th>
                            <th class=\"delete\"></th>
                        </tr>
                    </thead>
                    <tbody>
                        ";
        // line 82
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["vacations"]) || array_key_exists("vacations", $context) ? $context["vacations"] : (function () { throw new RuntimeError('Variable "vacations" does not exist.', 82, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["vacation"]) {
            // line 83
            echo "                            <tr>
                                <td>";
            // line 84
            echo twig_escape_filter($this->env, ((twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["vacation"], "startDate", [], "any", false, false, false, 84), "d/m/Y") . " au ") . twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["vacation"], "endDate", [], "any", false, false, false, 84), "d/m/Y")), "html", null, true);
            echo "</td>
                                <td>
                                    ";
            // line 86
            if ((twig_get_attribute($this->env, $this->source, $context["vacation"], "approved", [], "any", false, false, false, 86) == 0)) {
                // line 87
                echo "                                        <img src=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/svg/waiting.svg"), "html", null, true);
                echo "\" alt=\"En attente\">
                                    ";
            } elseif ((twig_get_attribute($this->env, $this->source,             // line 88
$context["vacation"], "approved", [], "any", false, false, false, 88) == 1)) {
                // line 89
                echo "                                        <img src=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/svg/checked.svg"), "html", null, true);
                echo "\" alt=\"Validé\">
                                    ";
            } elseif ((twig_get_attribute($this->env, $this->source,             // line 90
$context["vacation"], "approved", [], "any", false, false, false, 90) == 2)) {
                // line 91
                echo "                                        <img src=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/svg/cancel.svg"), "html", null, true);
                echo "\" alt=\"Refusé\">
                                    ";
            }
            // line 93
            echo "                                </td>
                                <td>
                                    <a href=\"";
            // line 95
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_staff_vacation_modify", ["id" => twig_get_attribute($this->env, $this->source, $context["vacation"], "id", [], "any", false, false, false, 95)]), "html", null, true);
            echo "\">
                                        <img src=\"";
            // line 96
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/svg/modify.svg"), "html", null, true);
            echo "\" alt=\"Modifier\">
                                    </a>
                                </td>
                                <td>
                                    <a href=\"";
            // line 100
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_staff_vacation_delete", ["id" => twig_get_attribute($this->env, $this->source, $context["vacation"], "id", [], "any", false, false, false, 100)]), "html", null, true);
            echo "\">
                                        <img src=\"";
            // line 101
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
        // line 106
        echo "                    </tbody>
                </table>
            </div>
        </div>
    </section>
    <section class=\"vacDispo my-4\">
    <div class=\"row\">
            <div class=\"col-12\">
                <table>
                    <thead>
                        <tr>
                            <th class=\"dayNumber\"></th>
                            <th class=\"dayNumberLabel\"></th>
                        </tr>
                    </thead>
                    <tbody>
                        ";
        // line 122
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["dayVacations"]) || array_key_exists("dayVacations", $context) ? $context["dayVacations"] : (function () { throw new RuntimeError('Variable "dayVacations" does not exist.', 122, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["dayVacation"]) {
            // line 123
            echo "                            <tr>
                                <td>";
            // line 124
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["dayVacation"], "available", [], "any", false, false, false, 124), "html", null, true);
            echo "</td>
                                <td>";
            // line 125
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["dayVacation"], "gotOutPeriod", [], "any", false, false, false, 125), "html", null, true);
            echo "</td>
                                <td>";
            // line 126
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["dayVacation"], "got", [], "any", false, false, false, 126), "html", null, true);
            echo "</td>
                            </tr>
                            <tr>
                                <td>Jours de congés disponibles</td>
                                <td>Jours de congés obtenus hors période</td>
                                <td>Jours de congés obtenus</td>
                            </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['dayVacation'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 134
        echo "                    </tbody>
                </table>
            </div>
        </div>
    </section>
</div>
    ";
        // line 140
        $this->loadTemplate("partials/_phoneNav.html.twig", "pages/staff_vacation/index.html.twig", 140)->display($context);
        
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
        return array (  342 => 140,  334 => 134,  320 => 126,  316 => 125,  312 => 124,  309 => 123,  305 => 122,  287 => 106,  276 => 101,  272 => 100,  265 => 96,  261 => 95,  257 => 93,  251 => 91,  249 => 90,  244 => 89,  242 => 88,  237 => 87,  235 => 86,  230 => 84,  227 => 83,  223 => 82,  200 => 62,  195 => 60,  188 => 56,  182 => 53,  176 => 50,  173 => 49,  164 => 46,  161 => 45,  157 => 44,  150 => 39,  141 => 33,  131 => 28,  119 => 23,  115 => 21,  113 => 20,  105 => 15,  101 => 14,  95 => 11,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Hello StaffVacationController!{% endblock %}

{% block body %}
<div class=\"container\">
    <section class=\"headerStaff\">
        <div class=\"row mt-4\">
            <div class=\"col-4\"></div>
            <div class=\"col-4 text-center\"> <!-- Ajout de la classe text-center pour centrer le blason -->
                <img src=\"{{ asset('assets/svg/blason.svg') }}\" width=\"100\" alt=\"Blason de la ville de deyvillers\">
            </div>
            <div class=\"col-4 d-flex justify-content-end\"> <!-- Ajout de la classe text-right pour aligner à droite -->
                <a href=\"{{ path('app_logout') }}\">
                    <img src=\"{{ asset('assets/svg/logout.svg') }}\" alt=\"Déconnexion\">
                </a>
            </div>
        </div>
    </section>
    {% if currentUser %}
        <div class=\"row mt-4\">
            <div class=\"col-6 d-flex justify-content-center\">
                <img src=\"{{ asset('assets/Img/69944235142__78B07BD1-5790-446E-8015-0A4866FD84B1.png') }}\" alt=\"Photo de profil{{ currentUser.lastName }} {{ currentUser.firstName }}\" width=\"100\" class=\"rounded-circle\">
            </div>
            <div class=\"col-6\">
                <div class=\"row\">
                    <div class=\"col-12 ff-3 fs-3\">
                        <p class=\"p-0 my-3 \">{{ currentUser.lastName }} {{ currentUser.firstName }}</p>
                    </div>
                </div>
                <div class=\"row\">
                    <div class=\"col-12\">
                        <p>{{ currentUser.job }}</p>
                    </div>
                </div>
            </div>
        </div>
    {% endif %}
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
    <section class=\"formVac\">
        {{ form_start(form) }}
            <div class=\"row d-flex justify-content-evenly\">
                <div class=\"col-4\">
                    {{ form_row(form.startDate) }}
                </div>
                <div class=\"col-4\">
                    {{ form_row(form.endDate) }}
                </div>
            </div>
            <div class=\"d-block text-center\">
                {{ form_row(form.submit) }}
            </div>
        {{ form_end(form) }}
    </section>
    <section class=\"vacStatus mt-4\">
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
                            <th class=\"period\"></th>
                            <th class=\"verif\"></th>
                            <th class=\"modify\"></th>
                            <th class=\"delete\"></th>
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
    <section class=\"vacDispo my-4\">
    <div class=\"row\">
            <div class=\"col-12\">
                <table>
                    <thead>
                        <tr>
                            <th class=\"dayNumber\"></th>
                            <th class=\"dayNumberLabel\"></th>
                        </tr>
                    </thead>
                    <tbody>
                        {% for dayVacation in dayVacations %}
                            <tr>
                                <td>{{ dayVacation.available }}</td>
                                <td>{{ dayVacation.gotOutPeriod }}</td>
                                <td>{{ dayVacation.got }}</td>
                            </tr>
                            <tr>
                                <td>Jours de congés disponibles</td>
                                <td>Jours de congés obtenus hors période</td>
                                <td>Jours de congés obtenus</td>
                            </tr>
                        {% endfor %}
                    </tbody>
                </table>
            </div>
        </div>
    </section>
</div>
    {% include \"partials/_phoneNav.html.twig\" %}
{% endblock %}
", "pages/staff_vacation/index.html.twig", "/Users/anthonymerguin/Documents/projet/CorpPilot/templates/pages/staff_vacation/index.html.twig");
    }
}
