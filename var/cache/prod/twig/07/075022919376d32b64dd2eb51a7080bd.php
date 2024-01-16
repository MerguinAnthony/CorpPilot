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
class __TwigTemplate_a6dde39fb9e0227ed963464b31690b55 extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "pages/user/detail.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Détails de l'employé ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "lastname", [], "any", false, false, false, 3), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "firstname", [], "any", false, false, false, 3), "html", null, true);
        echo " | ";
        echo twig_escape_filter($this->env, ($context["companyAbrev"] ?? null), "html", null, true);
        echo "Gest";
    }

    // line 6
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 7
        echo "<div id=\"desktopNav\" style=\"display: none;\">
    ";
        // line 8
        $this->loadTemplate("partials/_desktopNav.html.twig", "pages/user/detail.html.twig", 8)->display($context);
        // line 9
        echo "</div>
<div class=\"container\">
    <section class=\"headerStaff\">
        <div class=\"row mt-4\">
            <div id=\"desktopUser\"  class=\"col-4\" style=\"display: none;\">
                ";
        // line 14
        $this->loadTemplate("partials/_currentUser.html.twig", "pages/user/detail.html.twig", 14)->display($context);
        // line 15
        echo "            </div>
            <div class=\"col-4 d-flex justify-content-center align-items-center\">
                <img src=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/svg/blason.svg"), "html", null, true);
        echo "\" width=\"100\" alt=\"Blason de la ville de deyvillers\">
            </div>
            <div class=\"col-4 d-flex justify-content-end align-items-center\">
                <a href=\"";
        // line 20
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
        echo "\">
                    <img src=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/svg/logout.svg"), "html", null, true);
        echo "\" alt=\"Déconnexion\">
                </a>
            </div>
        </div>
    </section>
    <div id=\"phoneUser\" style=\"display: none;\">
        ";
        // line 27
        $this->loadTemplate("partials/_currentUser.html.twig", "pages/user/detail.html.twig", 27)->display($context);
        // line 28
        echo "    </div>
    <div class=\"row mt-4\">
        <div class=\"col-12\">
            <h1 class=\"text-center\">Information ";
        // line 31
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "lastname", [], "any", false, false, false, 31), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "firstname", [], "any", false, false, false, 31), "html", null, true);
        echo "</h1>
        </div>
    </div>
    ";
        // line 34
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "flashes", ["success"], "method", false, false, false, 34));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 35
            echo "        <div class=\"alert alert-success w-50 mx-auto my-4  text-center\">
            ";
            // line 36
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        echo "<div class=\"container mt-4\">
    <div class=\"card\">
        <div class=\"card-header\">
            <h5 class=\"card-title\">Détails de l'utilisateur</h5>
        </div>
        <div class=\"card-body\">
            <div class=\"row\">
                <div class=\"col-4\">
                    <img src=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/Img/69944235142__78B07BD1-5790-446E-8015-0A4866FD84B1.png"), "html", null, true);
        echo "\" alt=\"Photo de profil";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["currentUser"] ?? null), "lastName", [], "any", false, false, false, 47), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["currentUser"] ?? null), "firstName", [], "any", false, false, false, 47), "html", null, true);
        echo "\" width=\"300\" height=\"300\">
                </div>
                <div class=\"col-8\">
                    <p><strong>Nom :</strong> ";
        // line 50
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "lastname", [], "any", false, false, false, 50), "html", null, true);
        echo "</p>
                    <p><strong>Prénom :</strong> ";
        // line 51
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "firstname", [], "any", false, false, false, 51), "html", null, true);
        echo "</p>
                    <p><strong>Email :</strong> ";
        // line 52
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "email", [], "any", false, false, false, 52), "html", null, true);
        echo "</p>
                    <p><strong>Date de naissance :</strong> ";
        // line 53
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "birthday", [], "any", false, false, false, 53), "d/m/Y"), "html", null, true);
        echo "</p>
                    <p><strong>Poste :</strong> ";
        // line 54
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "job", [], "any", false, false, false, 54), "html", null, true);
        echo "</p>
                    <p><strong>Date d'embauche :</strong> ";
        // line 55
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "createdAt", [], "any", false, false, false, 55), "d/m/Y"), "html", null, true);
        echo "</p>
                    <p><strong>Numéro de téléphone :</strong> ";
        // line 56
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "phone", [], "any", false, false, false, 56), "html", null, true);
        echo "</p>
                    <p><strong>Adresse :</strong> ";
        // line 57
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "adress", [], "any", false, false, false, 57), "html", null, true);
        echo "</p>
                    <p><strong>Code postal :</strong> ";
        // line 58
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "zipcode", [], "any", false, false, false, 58), "html", null, true);
        echo "</p>
                    <p><strong>Ville :</strong> ";
        // line 59
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "city", [], "any", false, false, false, 59), "html", null, true);
        echo "</p>
                    <p><strong>Numéro de sécurité sociale :</strong> ";
        // line 60
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "socialSecurity", [], "any", false, false, false, 60), "html", null, true);
        echo "</p>
                    <p><strong>Type d'utilisateur :</strong>
                        ";
        // line 62
        if (twig_in_filter("ROLE_ADMIN", twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "roles", [], "any", false, false, false, 62))) {
            // line 63
            echo "                            Administrateur
                        ";
        } else {
            // line 65
            echo "                            Employé
                        ";
        }
        // line 67
        echo "                    </p>
                    <p><strong>Entreprise :</strong> ";
        // line 68
        echo twig_escape_filter($this->env, ($context["company_name"] ?? null), "html", null, true);
        echo "</p>
                </div>
            </div>
        </div>
        <div class=\"card-footer d-flex justify-content-around\">
            <a href=\"";
        // line 73
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user");
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/svg/return.svg"), "html", null, true);
        echo "\" alt=\"retour en arrière\"></a>
            <a href=\"";
        // line 74
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_edit", ["id" => twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "id", [], "any", false, false, false, 74)]), "html", null, true);
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/svg/modify.svg"), "html", null, true);
        echo "\" alt=\"Modifier\"></a>
            <!-- L'utilisateur courant ne peut pas se supprimer lui-même -->
            ";
        // line 76
        if ((twig_get_attribute($this->env, $this->source, ($context["currentUser"] ?? null), "id", [], "any", false, false, false, 76) != twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "id", [], "any", false, false, false, 76))) {
            // line 77
            echo "            <a data-bs-toggle=\"modal\" data-bs-target=\"#confirmDeleteModal\">
                <img src=\"";
            // line 78
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/svg/trash.svg"), "html", null, true);
            echo "\" alt=\"Supprimer\">
            </a>
            ";
        }
        // line 81
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
        // line 96
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_delete", ["id" => twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "id", [], "any", false, false, false, 96)]), "html", null, true);
        echo "\">
                    <img src=\"";
        // line 97
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/svg/cancel.svg"), "html", null, true);
        echo "\" alt=\"Supprimer\">
                </a>
            </div>
        </div>
    </div>
</div>
<div id=\"phoneNav\" style=\"display: none;\">
    ";
        // line 104
        $this->loadTemplate("partials/_phoneNav.html.twig", "pages/user/detail.html.twig", 104)->display($context);
        // line 105
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
        } else {
            document.getElementById('phoneNav').style.display = 'none';
            document.getElementById('desktopNav').style.display = 'block';
            document.getElementById('desktopUser').style.display = 'block';
            document.getElementById('phoneUser').style.display = 'none';
        }
    }

    updatePage();

    // Attacher le gestionnaire d'événements pour redimensionner la fenêtre
    window.addEventListener('resize', updatePage);

</script>
";
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
        return array (  275 => 105,  273 => 104,  263 => 97,  259 => 96,  242 => 81,  236 => 78,  233 => 77,  231 => 76,  224 => 74,  218 => 73,  210 => 68,  207 => 67,  203 => 65,  199 => 63,  197 => 62,  192 => 60,  188 => 59,  184 => 58,  180 => 57,  176 => 56,  172 => 55,  168 => 54,  164 => 53,  160 => 52,  156 => 51,  152 => 50,  142 => 47,  132 => 39,  123 => 36,  120 => 35,  116 => 34,  108 => 31,  103 => 28,  101 => 27,  92 => 21,  88 => 20,  82 => 17,  78 => 15,  76 => 14,  69 => 9,  67 => 8,  64 => 7,  60 => 6,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "pages/user/detail.html.twig", "/Users/anthonymerguin/Documents/projet/CorpPilot/templates/pages/user/detail.html.twig");
    }
}
