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

/* pages/user/index.html.twig */
class __TwigTemplate_97e6abd9068d93b9f5b3d6c49f4e7e97 extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "pages/user/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Gestion des employés | ";
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
        $this->loadTemplate("partials/_desktopNav.html.twig", "pages/user/index.html.twig", 8)->display($context);
        // line 9
        echo "</div>
<div class=\"container\">
    <section class=\"headerStaff\">
        <div class=\"row mt-4\">
            <div id=\"desktopUser\"  class=\"col-4\" style=\"display: none;\">
                ";
        // line 14
        $this->loadTemplate("partials/_currentUser.html.twig", "pages/user/index.html.twig", 14)->display($context);
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
        $this->loadTemplate("partials/_currentUser.html.twig", "pages/user/index.html.twig", 27)->display($context);
        // line 28
        echo "    </div>
    <div class=\"row mt-4\">
        <div class=\"col-12\">
            <h1 class=\"text-center\">Gestion des employés</h1>
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
        echo "    <div class=\"row\">
        <div class=\"col-12\">
            <section class=\"userIn\">
                <div class=\"row\">
                    <div class=\"col-12\">
                        <h2 class=\"text-center mt-4\">Ajouter un employé</h2>
                        <a href=\"";
        // line 45
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_new");
        echo "\">
                            <img src=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/svg/newStaff.svg"), "html", null, true);
        echo "\" alt=\"Ajouter un employé\">
                        </a>
                    </div>
                </div>
                <div class=\"row\">
                    <div class=\"col-12 mt-4\">
                        <h2 class=\"text-center\">Liste des employés</h2>
                    </div>
                </div>
                <div class=\"row\">
                    <div class=\"col-12\">
                        <div class=\"table-responsive\">
                            <table class=\"table table-transparent\">
                                <thead>
                                    <tr>
                                        <th scope=\"col\">Nom Prénom</th>
                                        <th scope=\"col\">Email</th>
                                        <th scope=\"col\">Date de naissance</th>
                                        <th scope=\"col\">Poste</th>
                                        <th scope=\"col\">Permission</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    ";
        // line 70
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["users"] ?? null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 71
            echo "                                        <tr>
                                            <td>";
            // line 72
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "lastname", [], "any", false, false, false, 72), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "firstname", [], "any", false, false, false, 72), "html", null, true);
            echo "</td>
                                            <td>";
            // line 73
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "email", [], "any", false, false, false, 73), "html", null, true);
            echo "</td>
                                            <td>";
            // line 74
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "birthday", [], "any", false, false, false, 74), "d/m/Y"), "html", null, true);
            echo "</td>
                                            <td>";
            // line 75
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "job", [], "any", false, false, false, 75), "html", null, true);
            echo "</td>
                                            ";
            // line 76
            if (twig_in_filter("ROLE_ADMIN", twig_get_attribute($this->env, $this->source, $context["user"], "roles", [], "any", false, false, false, 76))) {
                // line 77
                echo "                                                <td>Administrateur</td>
                                            ";
            } else {
                // line 79
                echo "                                                <td>Employé</td>
                                            ";
            }
            // line 81
            echo "                                            <td>
                                                <a href=\"";
            // line 82
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_show", ["id" => twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 82)]), "html", null, true);
            echo "\">
                                                    <img src=\"";
            // line 83
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/svg/detail.svg"), "html", null, true);
            echo "\" alt=\"Détail\">
                                                </a>
                                            </td>
                                        </tr>
                                    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 88
            echo "                                        <tr>
                                            <td colspan=\"6\" class=\"text-center\">Aucun employé</td>
                                        </tr>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 92
        echo "                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
</div>
<div id=\"desktopNav\" style=\"display: none;\">
    ";
        // line 102
        $this->loadTemplate("partials/_desktopNav.html.twig", "pages/user/index.html.twig", 102)->display($context);
        // line 103
        echo "</div>

...

<div id=\"phoneNav\" style=\"display: none;\">
    ";
        // line 108
        $this->loadTemplate("partials/_phoneNav.html.twig", "pages/user/index.html.twig", 108)->display($context);
        // line 109
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
});



</script>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "pages/user/index.html.twig";
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
        return array (  247 => 109,  245 => 108,  238 => 103,  236 => 102,  224 => 92,  215 => 88,  205 => 83,  201 => 82,  198 => 81,  194 => 79,  190 => 77,  188 => 76,  184 => 75,  180 => 74,  176 => 73,  170 => 72,  167 => 71,  162 => 70,  135 => 46,  131 => 45,  123 => 39,  114 => 36,  111 => 35,  107 => 34,  99 => 28,  97 => 27,  88 => 21,  84 => 20,  78 => 17,  74 => 15,  72 => 14,  65 => 9,  63 => 8,  60 => 7,  56 => 6,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "pages/user/index.html.twig", "/Users/anthonymerguin/Documents/projet/CorpPilot/templates/pages/user/index.html.twig");
    }
}
