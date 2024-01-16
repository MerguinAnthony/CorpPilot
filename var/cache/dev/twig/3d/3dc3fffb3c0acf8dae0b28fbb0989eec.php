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

/* pages/user/detail.html.twig */
class __TwigTemplate_f1f3e785258de9841fb7172724efe323 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pages/user/detail.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pages/user/detail.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "pages/user/detail.html.twig", 1);
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

        echo "Détails de l'employé ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 3, $this->source); })()), "lastname", [], "any", false, false, false, 3), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 3, $this->source); })()), "firstname", [], "any", false, false, false, 3), "html", null, true);
        echo " | ";
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
        $this->loadTemplate("partials/_desktopNav.html.twig", "pages/user/detail.html.twig", 8)->display($context);
        // line 9
        echo "</div>
<div class=\"container\">
    <section class=\"headerStaff\">
        <div class=\"row mt-4 \">
            <div id=\"desktopUser\" class=\"col-4\" style=\"display: none;\">
                ";
        // line 14
        $this->loadTemplate("partials/_currentUser.html.twig", "pages/user/detail.html.twig", 14)->display($context);
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
        $this->loadTemplate("partials/_logout.html.twig", "pages/user/detail.html.twig", 21)->display($context);
        // line 22
        echo "            </div>
        </div>
    </section>
    <div id=\"phoneUser\" style=\"display: none;\">
        ";
        // line 26
        $this->loadTemplate("partials/_currentUser.html.twig", "pages/user/detail.html.twig", 26)->display($context);
        // line 27
        echo "    </div>
    <div class=\"row mt-4\">
        <div class=\"col-12\">
            <h1 class=\"text-center\">Information ";
        // line 30
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 30, $this->source); })()), "lastname", [], "any", false, false, false, 30), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 30, $this->source); })()), "firstname", [], "any", false, false, false, 30), "html", null, true);
        echo "</h1>
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
        echo "<div class=\"container mt-4\">
    <div class=\"card mb-4\">
        <div class=\"card-header\">
            <h5 class=\"card-title\">Détails de l'utilisateur</h5>
        </div>
        <div class=\"card-body\">
            <div class=\"row\">
                <div class=\"col-md-4 text-center mb-4\">
                    <img src=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/Img/69944235142__78B07BD1-5790-446E-8015-0A4866FD84B1.png"), "html", null, true);
        echo "\" alt=\"Photo de profil";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["currentUser"]) || array_key_exists("currentUser", $context) ? $context["currentUser"] : (function () { throw new RuntimeError('Variable "currentUser" does not exist.', 46, $this->source); })()), "lastName", [], "any", false, false, false, 46), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["currentUser"]) || array_key_exists("currentUser", $context) ? $context["currentUser"] : (function () { throw new RuntimeError('Variable "currentUser" does not exist.', 46, $this->source); })()), "firstName", [], "any", false, false, false, 46), "html", null, true);
        echo "\" width=\"200\" height=\"200\">
                </div>
                <div class=\"col-md-8\">
                    <p><strong>Nom :</strong> ";
        // line 49
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 49, $this->source); })()), "lastname", [], "any", false, false, false, 49), "html", null, true);
        echo "</p>
                    <p><strong>Prénom :</strong> ";
        // line 50
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 50, $this->source); })()), "firstname", [], "any", false, false, false, 50), "html", null, true);
        echo "</p>
                    <p><strong>Email :</strong> ";
        // line 51
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 51, $this->source); })()), "email", [], "any", false, false, false, 51), "html", null, true);
        echo "</p>
                    <p><strong>Date de naissance :</strong> ";
        // line 52
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 52, $this->source); })()), "birthday", [], "any", false, false, false, 52), "d/m/Y"), "html", null, true);
        echo "</p>
                    <p><strong>Poste :</strong> ";
        // line 53
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 53, $this->source); })()), "job", [], "any", false, false, false, 53), "html", null, true);
        echo "</p>
                    <p><strong>Date d'embauche :</strong> ";
        // line 54
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 54, $this->source); })()), "createdAt", [], "any", false, false, false, 54), "d/m/Y"), "html", null, true);
        echo "</p>
                    <p><strong>Numéro de téléphone :</strong> ";
        // line 55
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 55, $this->source); })()), "phone", [], "any", false, false, false, 55), "html", null, true);
        echo "</p>
                    <p><strong>Adresse :</strong> ";
        // line 56
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 56, $this->source); })()), "adress", [], "any", false, false, false, 56), "html", null, true);
        echo "</p>
                    <p><strong>Code postal :</strong> ";
        // line 57
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 57, $this->source); })()), "zipcode", [], "any", false, false, false, 57), "html", null, true);
        echo "</p>
                    <p><strong>Ville :</strong> ";
        // line 58
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 58, $this->source); })()), "city", [], "any", false, false, false, 58), "html", null, true);
        echo "</p>
                    <p><strong>Numéro de sécurité sociale :</strong> ";
        // line 59
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 59, $this->source); })()), "socialSecurity", [], "any", false, false, false, 59), "html", null, true);
        echo "</p>
                    <p><strong>Type d'utilisateur :</strong>
                        ";
        // line 61
        if (twig_in_filter("ROLE_ADMIN", twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 61, $this->source); })()), "roles", [], "any", false, false, false, 61))) {
            // line 62
            echo "                            Administrateur
                        ";
        } else {
            // line 64
            echo "                            Employé
                        ";
        }
        // line 66
        echo "                    </p>
                    <p><strong>Entreprise :</strong> ";
        // line 67
        echo twig_escape_filter($this->env, (isset($context["company_name"]) || array_key_exists("company_name", $context) ? $context["company_name"] : (function () { throw new RuntimeError('Variable "company_name" does not exist.', 67, $this->source); })()), "html", null, true);
        echo "</p>
                </div>
            </div>
        </div>
        <div class=\"card-footer d-flex justify-content-around\">
            <a href=\"";
        // line 72
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user");
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/svg/return.svg"), "html", null, true);
        echo "\" alt=\"retour en arrière\"></a>
            <a href=\"";
        // line 73
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 73, $this->source); })()), "id", [], "any", false, false, false, 73)]), "html", null, true);
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/svg/modify.svg"), "html", null, true);
        echo "\" alt=\"Modifier\"></a>
            <!-- L'utilisateur courant ne peut pas se supprimer lui-même -->
            ";
        // line 75
        if ((twig_get_attribute($this->env, $this->source, (isset($context["currentUser"]) || array_key_exists("currentUser", $context) ? $context["currentUser"] : (function () { throw new RuntimeError('Variable "currentUser" does not exist.', 75, $this->source); })()), "id", [], "any", false, false, false, 75) != twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 75, $this->source); })()), "id", [], "any", false, false, false, 75))) {
            // line 76
            echo "            <a data-bs-toggle=\"modal\" data-bs-target=\"#confirmDeleteModal\">
                <img src=\"";
            // line 77
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/svg/trash.svg"), "html", null, true);
            echo "\" alt=\"Supprimer\">
            </a>
            ";
        }
        // line 80
        echo "        </div>
    </div>
</div>
<!-- Confirmation Modal -->
<div class=\"modal fade\" id=\"confirmDeleteModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"confirmDeleteModalLabel\" aria-hidden=\"true\">
    <div class=\"modal-dialog\" role=\"document\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <h5 class=\"modal-title\" id=\"confirmDeleteModalLabel\">Confirmation de suppression</h5>
                <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
            </div>
            <div class=\"modal-body\">
                Êtes-vous sûr de vouloir supprimer cet utilisateur ?
            </div>
            <div class=\"modal-footer\">
                <a href=\"";
        // line 95
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_delete", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 95, $this->source); })()), "id", [], "any", false, false, false, 95)]), "html", null, true);
        echo "\">
                    <img src=\"";
        // line 96
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/svg/cancel.svg"), "html", null, true);
        echo "\" alt=\"Supprimer\">
                </a>
            </div>
        </div>
    </div>
</div>
<div id=\"phoneNav\" style=\"display: none;\">
    ";
        // line 103
        $this->loadTemplate("partials/_phoneNav.html.twig", "pages/user/detail.html.twig", 103)->display($context);
        // line 104
        echo "</div>

<script>
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
        } else {
            document.getElementById('phoneNav').style.display = 'none';
            document.getElementById('desktopNav').style.display = 'block';
            document.getElementById('desktopUser').style.display = 'block';
            document.getElementById('phoneUser').style.display = 'none';
            document.getElementById('phonelogout').classList.add('d-none');
            document.getElementById('desktoplogout').style.display = 'block';
        }
    }

    updatePage();

    // Attacher le gestionnaire d'événements pour redimensionner la fenêtre
    window.addEventListener('resize', updatePage);

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
        return "pages/user/detail.html.twig";
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
        return array (  301 => 104,  299 => 103,  289 => 96,  285 => 95,  268 => 80,  262 => 77,  259 => 76,  257 => 75,  250 => 73,  244 => 72,  236 => 67,  233 => 66,  229 => 64,  225 => 62,  223 => 61,  218 => 59,  214 => 58,  210 => 57,  206 => 56,  202 => 55,  198 => 54,  194 => 53,  190 => 52,  186 => 51,  182 => 50,  178 => 49,  168 => 46,  158 => 38,  149 => 35,  146 => 34,  142 => 33,  134 => 30,  129 => 27,  127 => 26,  121 => 22,  119 => 21,  113 => 18,  108 => 15,  106 => 14,  99 => 9,  97 => 8,  94 => 7,  84 => 6,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Détails de l'employé {{ user.lastname }} {{ user.firstname }} | {{ companyAbrev }}Gest{% endblock %}


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
            <h1 class=\"text-center\">Information {{ user.lastname }} {{ user.firstname }}</h1>
        </div>
    </div>
    {% for message in app.flashes('success') %}
        <div class=\"alert alert-success w-50 mx-auto my-4  text-center\">
            {{ message }}
        </div>
    {% endfor %}
<div class=\"container mt-4\">
    <div class=\"card mb-4\">
        <div class=\"card-header\">
            <h5 class=\"card-title\">Détails de l'utilisateur</h5>
        </div>
        <div class=\"card-body\">
            <div class=\"row\">
                <div class=\"col-md-4 text-center mb-4\">
                    <img src=\"{{ asset('assets/Img/69944235142__78B07BD1-5790-446E-8015-0A4866FD84B1.png') }}\" alt=\"Photo de profil{{ currentUser.lastName }} {{ currentUser.firstName }}\" width=\"200\" height=\"200\">
                </div>
                <div class=\"col-md-8\">
                    <p><strong>Nom :</strong> {{ user.lastname }}</p>
                    <p><strong>Prénom :</strong> {{ user.firstname }}</p>
                    <p><strong>Email :</strong> {{ user.email }}</p>
                    <p><strong>Date de naissance :</strong> {{ user.birthday|date('d/m/Y') }}</p>
                    <p><strong>Poste :</strong> {{ user.job }}</p>
                    <p><strong>Date d'embauche :</strong> {{ user.createdAt|date('d/m/Y') }}</p>
                    <p><strong>Numéro de téléphone :</strong> {{ user.phone }}</p>
                    <p><strong>Adresse :</strong> {{ user.adress }}</p>
                    <p><strong>Code postal :</strong> {{ user.zipcode }}</p>
                    <p><strong>Ville :</strong> {{ user.city }}</p>
                    <p><strong>Numéro de sécurité sociale :</strong> {{ user.socialSecurity }}</p>
                    <p><strong>Type d'utilisateur :</strong>
                        {% if 'ROLE_ADMIN' in user.roles %}
                            Administrateur
                        {% else %}
                            Employé
                        {% endif %}
                    </p>
                    <p><strong>Entreprise :</strong> {{ company_name }}</p>
                </div>
            </div>
        </div>
        <div class=\"card-footer d-flex justify-content-around\">
            <a href=\"{{path('app_user')}}\"><img src=\"{{asset('assets/svg/return.svg')}}\" alt=\"retour en arrière\"></a>
            <a href=\"{{ path('app_user_edit', {'id': user.id}) }}\"><img src=\"{{asset('assets/svg/modify.svg')}}\" alt=\"Modifier\"></a>
            <!-- L'utilisateur courant ne peut pas se supprimer lui-même -->
            {% if currentUser.id != user.id %}
            <a data-bs-toggle=\"modal\" data-bs-target=\"#confirmDeleteModal\">
                <img src=\"{{ asset('assets/svg/trash.svg') }}\" alt=\"Supprimer\">
            </a>
            {% endif %}
        </div>
    </div>
</div>
<!-- Confirmation Modal -->
<div class=\"modal fade\" id=\"confirmDeleteModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"confirmDeleteModalLabel\" aria-hidden=\"true\">
    <div class=\"modal-dialog\" role=\"document\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <h5 class=\"modal-title\" id=\"confirmDeleteModalLabel\">Confirmation de suppression</h5>
                <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
            </div>
            <div class=\"modal-body\">
                Êtes-vous sûr de vouloir supprimer cet utilisateur ?
            </div>
            <div class=\"modal-footer\">
                <a href=\"{{ path('app_user_delete', {'id': user.id}) }}\">
                    <img src=\"{{ asset('assets/svg/cancel.svg') }}\" alt=\"Supprimer\">
                </a>
            </div>
        </div>
    </div>
</div>
<div id=\"phoneNav\" style=\"display: none;\">
    {% include \"partials/_phoneNav.html.twig\" %}
</div>

<script>
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
        } else {
            document.getElementById('phoneNav').style.display = 'none';
            document.getElementById('desktopNav').style.display = 'block';
            document.getElementById('desktopUser').style.display = 'block';
            document.getElementById('phoneUser').style.display = 'none';
            document.getElementById('phonelogout').classList.add('d-none');
            document.getElementById('desktoplogout').style.display = 'block';
        }
    }

    updatePage();

    // Attacher le gestionnaire d'événements pour redimensionner la fenêtre
    window.addEventListener('resize', updatePage);

</script>
{% endblock %}
", "pages/user/detail.html.twig", "/Users/anthonymerguin/Documents/projet/CorpPilot/templates/pages/user/detail.html.twig");
    }
}
