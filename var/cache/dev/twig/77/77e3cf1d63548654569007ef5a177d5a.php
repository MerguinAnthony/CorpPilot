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
class __TwigTemplate_e39e4cc767aaf2d4fda1b68c131656aa extends Template
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
        $this->loadTemplate("partials/_desktopNav.html.twig", "pages/user/detail.html.twig", 8)->display($context);
        // line 9
        echo "</div>
<div class=\"container\">
    ";
        // line 11
        $this->loadTemplate("partials/_headerStaff.html.twig", "pages/user/detail.html.twig", 11)->display($context);
        // line 12
        echo "    <div id=\"phoneUser\" style=\"display: none;\">
        ";
        // line 13
        $this->loadTemplate("partials/_currentUser.html.twig", "pages/user/detail.html.twig", 13)->display($context);
        // line 14
        echo "    </div>
    <div class=\"row mt-4\">
        <div class=\"col-12\">
            <h1 class=\"text-center\">Information ";
        // line 17
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 17, $this->source); })()), "lastname", [], "any", false, false, false, 17), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 17, $this->source); })()), "firstname", [], "any", false, false, false, 17), "html", null, true);
        echo "</h1>
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
        echo "<div class=\"container mt-4\">
    <div class=\"card mb-4\">
        <div class=\"card-header\">
            <h5 class=\"card-title\">Détails de l'utilisateur</h5>
        </div>
        <div class=\"card-body\">
            <div class=\"row\">
                <div class=\"col-md-4 text-center mb-4\">
                    <div class=\"row\">
                        <img src=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getRuntime('Vich\UploaderBundle\Twig\Extension\UploaderExtensionRuntime')->asset((isset($context["currentUser"]) || array_key_exists("currentUser", $context) ? $context["currentUser"] : (function () { throw new RuntimeError('Variable "currentUser" does not exist.', 34, $this->source); })()), "profilePictureFile"), "html", null, true);
        echo "\" alt=\"Photo de profil";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["currentUser"]) || array_key_exists("currentUser", $context) ? $context["currentUser"] : (function () { throw new RuntimeError('Variable "currentUser" does not exist.', 34, $this->source); })()), "lastName", [], "any", false, false, false, 34), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["currentUser"]) || array_key_exists("currentUser", $context) ? $context["currentUser"] : (function () { throw new RuntimeError('Variable "currentUser" does not exist.', 34, $this->source); })()), "firstName", [], "any", false, false, false, 34), "html", null, true);
        echo "\" width=\"200\">
                    </div>
                    <div class=\"row mt-4\">
                        <div class=\"col-md-6 mb-4\">
                            <a href=\"tel:+33";
        // line 38
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 38, $this->source); })()), "phone", [], "any", false, false, false, 38), "html", null, true);
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/svg/tel.svg"), "html", null, true);
        echo "\" alt=\"appeler\"></a>
                        </div>
                        <div class=\"col-md-6 \">
                            <a href=\"mailto:";
        // line 41
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 41, $this->source); })()), "email", [], "any", false, false, false, 41), "html", null, true);
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/svg/mail.svg"), "html", null, true);
        echo "\" alt=\"Envoyer un email\"></a>
                        </div>
                    </div>
                </div>
                <div class=\"col-md-8\">
                    <p><strong>Nom :</strong> ";
        // line 46
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 46, $this->source); })()), "lastname", [], "any", false, false, false, 46), "html", null, true);
        echo "</p>
                    <p><strong>Prénom :</strong> ";
        // line 47
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 47, $this->source); })()), "firstname", [], "any", false, false, false, 47), "html", null, true);
        echo "</p>
                    <p><strong>Email :</strong> ";
        // line 48
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 48, $this->source); })()), "email", [], "any", false, false, false, 48), "html", null, true);
        echo "</p>
                    <p><strong>Date de naissance :</strong> ";
        // line 49
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 49, $this->source); })()), "birthday", [], "any", false, false, false, 49), "d/m/Y"), "html", null, true);
        echo "</p>
                    <p><strong>Poste :</strong> ";
        // line 50
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 50, $this->source); })()), "job", [], "any", false, false, false, 50), "html", null, true);
        echo "</p>
                    <p><strong>Date d'embauche :</strong> ";
        // line 51
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 51, $this->source); })()), "createdAt", [], "any", false, false, false, 51), "d/m/Y"), "html", null, true);
        echo "</p>
                    <p><strong>Numéro de téléphone :</strong>0";
        // line 52
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 52, $this->source); })()), "phone", [], "any", false, false, false, 52), "html", null, true);
        echo "</p>
                    <p><strong>Adresse :</strong> ";
        // line 53
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 53, $this->source); })()), "adress", [], "any", false, false, false, 53), "html", null, true);
        echo "</p>
                    <p><strong>Code postal :</strong> ";
        // line 54
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 54, $this->source); })()), "zipcode", [], "any", false, false, false, 54), "html", null, true);
        echo "</p>
                    <p><strong>Ville :</strong> ";
        // line 55
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 55, $this->source); })()), "city", [], "any", false, false, false, 55), "html", null, true);
        echo "</p>
                    <p><strong>Numéro de sécurité sociale :</strong> ";
        // line 56
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 56, $this->source); })()), "socialSecurity", [], "any", false, false, false, 56), "html", null, true);
        echo "</p>
                    <p><strong>Type d'utilisateur :</strong>
                        ";
        // line 58
        if (twig_in_filter("ROLE_ADMIN", twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 58, $this->source); })()), "roles", [], "any", false, false, false, 58))) {
            // line 59
            echo "                            Administrateur
                        ";
        } else {
            // line 61
            echo "                            Employé
                        ";
        }
        // line 63
        echo "                    </p>
                    <p><strong>Entreprise :</strong> ";
        // line 64
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["company"]) || array_key_exists("company", $context) ? $context["company"] : (function () { throw new RuntimeError('Variable "company" does not exist.', 64, $this->source); })()), "companyName", [], "any", false, false, false, 64), "html", null, true);
        echo "</p>
                </div>
            </div>
        </div>
        <div class=\"card-footer d-flex justify-content-around\">
            <a href=\"";
        // line 69
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user");
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/svg/return.svg"), "html", null, true);
        echo "\" alt=\"retour en arrière\"></a>
            <a href=\"";
        // line 70
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 70, $this->source); })()), "id", [], "any", false, false, false, 70)]), "html", null, true);
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/svg/modify.svg"), "html", null, true);
        echo "\" alt=\"Modifier\"></a>
            <!-- L'utilisateur courant ne peut pas se supprimer lui-même -->
            ";
        // line 72
        if ((twig_get_attribute($this->env, $this->source, (isset($context["currentUser"]) || array_key_exists("currentUser", $context) ? $context["currentUser"] : (function () { throw new RuntimeError('Variable "currentUser" does not exist.', 72, $this->source); })()), "id", [], "any", false, false, false, 72) != twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 72, $this->source); })()), "id", [], "any", false, false, false, 72))) {
            // line 73
            echo "            <a data-bs-toggle=\"modal\" data-bs-target=\"#confirmDeleteModal\">
                <img src=\"";
            // line 74
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/svg/trash.svg"), "html", null, true);
            echo "\" alt=\"Supprimer\">
            </a>
            ";
        }
        // line 77
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
        // line 92
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_delete", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 92, $this->source); })()), "id", [], "any", false, false, false, 92)]), "html", null, true);
        echo "\">
                    <img src=\"";
        // line 93
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/svg/cancel.svg"), "html", null, true);
        echo "\" alt=\"Supprimer\">
                </a>
            </div>
        </div>
    </div>
</div>
    ";
        // line 99
        $this->loadTemplate("partials/_phoneNav.html.twig", "pages/user/detail.html.twig", 99)->display($context);
        // line 100
        echo "

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
        return array (  300 => 100,  298 => 99,  289 => 93,  285 => 92,  268 => 77,  262 => 74,  259 => 73,  257 => 72,  250 => 70,  244 => 69,  236 => 64,  233 => 63,  229 => 61,  225 => 59,  223 => 58,  218 => 56,  214 => 55,  210 => 54,  206 => 53,  202 => 52,  198 => 51,  194 => 50,  190 => 49,  186 => 48,  182 => 47,  178 => 46,  168 => 41,  160 => 38,  149 => 34,  138 => 25,  129 => 22,  126 => 21,  122 => 20,  114 => 17,  109 => 14,  107 => 13,  104 => 12,  102 => 11,  98 => 9,  96 => 8,  93 => 7,  83 => 6,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Détails de l'employé {{ user.lastname }} {{ user.firstname }} | {{ company.companyAbrev}}{% endblock %}


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
                    <div class=\"row\">
                        <img src=\"{{ vich_uploader_asset(currentUser, 'profilePictureFile') }}\" alt=\"Photo de profil{{ currentUser.lastName }} {{ currentUser.firstName }}\" width=\"200\">
                    </div>
                    <div class=\"row mt-4\">
                        <div class=\"col-md-6 mb-4\">
                            <a href=\"tel:+33{{ user.phone }}\"><img src=\"{{asset('assets/svg/tel.svg')}}\" alt=\"appeler\"></a>
                        </div>
                        <div class=\"col-md-6 \">
                            <a href=\"mailto:{{ user.email }}\"><img src=\"{{asset('assets/svg/mail.svg')}}\" alt=\"Envoyer un email\"></a>
                        </div>
                    </div>
                </div>
                <div class=\"col-md-8\">
                    <p><strong>Nom :</strong> {{ user.lastname }}</p>
                    <p><strong>Prénom :</strong> {{ user.firstname }}</p>
                    <p><strong>Email :</strong> {{ user.email }}</p>
                    <p><strong>Date de naissance :</strong> {{ user.birthday|date('d/m/Y') }}</p>
                    <p><strong>Poste :</strong> {{ user.job }}</p>
                    <p><strong>Date d'embauche :</strong> {{ user.createdAt|date('d/m/Y') }}</p>
                    <p><strong>Numéro de téléphone :</strong>0{{ user.phone }}</p>
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
                    <p><strong>Entreprise :</strong> {{ company.companyName}}</p>
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
    {% include \"partials/_phoneNav.html.twig\" %}


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
