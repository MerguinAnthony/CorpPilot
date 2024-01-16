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
class __TwigTemplate_9b06d3eb6a0a1cc04aa9ff1e3090308c extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "pages/leave_management/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Gestion des congés | ";
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
        $this->loadTemplate("partials/_desktopNav.html.twig", "pages/leave_management/index.html.twig", 8)->display($context);
        // line 9
        echo "</div>
<div class=\"container\">
    <section class=\"headerStaff\">
        <div class=\"row mt-4\">
            <div id=\"desktopUser\"  class=\"col-4\" style=\"display: none;\">
                ";
        // line 14
        $this->loadTemplate("partials/_currentUser.html.twig", "pages/leave_management/index.html.twig", 14)->display($context);
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
        $this->loadTemplate("partials/_currentUser.html.twig", "pages/leave_management/index.html.twig", 27)->display($context);
        // line 28
        echo "    </div>
    <div class=\"row mt-4\">
        <div class=\"col-12\">
            <h1 class=\"text-center\">Gestion des congés</h1>
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
        // line 59
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["leaves"] ?? null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["leave"]) {
            // line 60
            echo "                        ";
            if ((twig_get_attribute($this->env, $this->source, $context["leave"], "approved", [], "any", false, false, false, 60) != 1)) {
                // line 61
                echo "                            <tr>
                                <td>
                                    ";
                // line 63
                if ((twig_get_attribute($this->env, $this->source, $context["leave"], "approved", [], "any", false, false, false, 63) == 0)) {
                    // line 64
                    echo "                                        <img src=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/svg/waiting.svg"), "html", null, true);
                    echo "\" alt=\"En attente\">
                                    ";
                } else {
                    // line 66
                    echo "                                        <img src=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/svg/cancel.svg"), "html", null, true);
                    echo "\" alt=\"Refusé\">
                                    ";
                }
                // line 68
                echo "                                </td>
                                <td>";
                // line 69
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["leave"], "user", [], "any", false, false, false, 69), "lastname", [], "any", false, false, false, 69), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["leave"], "user", [], "any", false, false, false, 69), "firstname", [], "any", false, false, false, 69), "html", null, true);
                echo "</td>
                                <td>";
                // line 70
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["leave"], "startDate", [], "any", false, false, false, 70), "d/m/Y"), "html", null, true);
                echo " au ";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["leave"], "endDate", [], "any", false, false, false, 70), "d/m/Y"), "html", null, true);
                echo "</td>
                                <td>
                                    <a href=\"";
                // line 72
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_leave_management_validation", ["id" => twig_get_attribute($this->env, $this->source, $context["leave"], "id", [], "any", false, false, false, 72)]), "html", null, true);
                echo "\"><img src=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/svg/checked.svg"), "html", null, true);
                echo "\" alt=\"Valider\"></a>
                                </td>
                                <td>
                                    <a href=\"";
                // line 75
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_leave_management_refus", ["id" => twig_get_attribute($this->env, $this->source, $context["leave"], "id", [], "any", false, false, false, 75)]), "html", null, true);
                echo "\"><img src=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/svg/cancel.svg"), "html", null, true);
                echo "\" alt=\"Refusé\"></a>
                                </td>
                            </tr>
                        ";
            }
            // line 78
            echo " 
                        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 80
            echo "                            <tr>
                                <td colspan=\"3\" class=\"text-center\">Aucune demande de congé en cours</td>
                            </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['leave'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 84
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
        // line 107
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["leaves"] ?? null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["leave"]) {
            // line 108
            echo "                            ";
            if (((twig_get_attribute($this->env, $this->source, $context["leave"], "approved", [], "any", false, false, false, 108) == 1) && (twig_get_attribute($this->env, $this->source, $context["leave"], "startDate", [], "any", false, false, false, 108) >= twig_date_converter($this->env, "now")))) {
                // line 109
                echo "                                <tr>
                                    <td>";
                // line 110
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["leave"], "user", [], "any", false, false, false, 110), "lastname", [], "any", false, false, false, 110), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["leave"], "user", [], "any", false, false, false, 110), "firstname", [], "any", false, false, false, 110), "html", null, true);
                echo "</td>
                                    <td>";
                // line 111
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["leave"], "startDate", [], "any", false, false, false, 111), "d/m/Y"), "html", null, true);
                echo " au ";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["leave"], "endDate", [], "any", false, false, false, 111), "d/m/Y"), "html", null, true);
                echo "</td>
                                    <td>
                                        <a href=\"";
                // line 113
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_leave_management_en_attente", ["id" => twig_get_attribute($this->env, $this->source, $context["leave"], "id", [], "any", false, false, false, 113)]), "html", null, true);
                echo "\"><img src=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/svg/waiting.svg"), "html", null, true);
                echo "\" alt=\"Valider\"></a>
                                    </td>
                                    <td>
                                        <a href=\"";
                // line 116
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_leave_management_refus", ["id" => twig_get_attribute($this->env, $this->source, $context["leave"], "id", [], "any", false, false, false, 116)]), "html", null, true);
                echo "\"><img src=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/svg/cancel.svg"), "html", null, true);
                echo "\" alt=\"Refusé\"></a>
                                    </td>
                                </tr>
                            ";
            }
            // line 120
            echo "                            ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 121
            echo "                                <tr>
                                    <td colspan=\"4\" class=\"text-center\">Aucune demande de congé accordée</td>
                                </tr>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['leave'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 125
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
        // line 147
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["leaves"] ?? null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["leave"]) {
            // line 148
            echo "                    ";
            if ((((twig_get_attribute($this->env, $this->source, $context["leave"], "approved", [], "any", false, false, false, 148) == 1) && (twig_get_attribute($this->env, $this->source, $context["leave"], "startDate", [], "any", false, false, false, 148) <= twig_date_converter($this->env, "now"))) && (twig_get_attribute($this->env, $this->source, $context["leave"], "endDate", [], "any", false, false, false, 148) >= twig_date_converter($this->env, "now")))) {
                // line 149
                echo "                        <tr>
                            <td>";
                // line 150
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["leave"], "user", [], "any", false, false, false, 150), "lastname", [], "any", false, false, false, 150), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["leave"], "user", [], "any", false, false, false, 150), "firstname", [], "any", false, false, false, 150), "html", null, true);
                echo "</td>
                            <td>";
                // line 151
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["leave"], "startDate", [], "any", false, false, false, 151), "d/m/Y"), "html", null, true);
                echo " au ";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["leave"], "endDate", [], "any", false, false, false, 151), "d/m/Y"), "html", null, true);
                echo "</td>
                        </tr>
                    ";
            }
            // line 154
            echo "                ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 155
            echo "                    <tr>
                        <td colspan=\"2\" class=\"text-center\">Aucun congé en cours</td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['leave'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 159
        echo "            </tbody>
        </table>
    </div>
</div>


    </section>
</div>
<div id=\"phoneNav\" style=\"display: none;\">
    ";
        // line 168
        $this->loadTemplate("partials/_phoneNav.html.twig", "pages/leave_management/index.html.twig", 168)->display($context);
        // line 169
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
            document.querySelector('.leaveGranted').style.borderRadius = '0';
            document.querySelector('.leaveGranted').classList.add('mt-4');
        } else {
            document.getElementById('phoneNav').style.display = 'none';
            document.getElementById('desktopNav').style.display = 'block';
            document.getElementById('desktopUser').style.display = 'block';
            document.getElementById('phoneUser').style.display = 'none';
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
        return array (  375 => 169,  373 => 168,  362 => 159,  353 => 155,  348 => 154,  340 => 151,  334 => 150,  331 => 149,  328 => 148,  323 => 147,  299 => 125,  290 => 121,  285 => 120,  276 => 116,  268 => 113,  261 => 111,  255 => 110,  252 => 109,  249 => 108,  244 => 107,  219 => 84,  210 => 80,  204 => 78,  195 => 75,  187 => 72,  180 => 70,  174 => 69,  171 => 68,  165 => 66,  159 => 64,  157 => 63,  153 => 61,  150 => 60,  145 => 59,  123 => 39,  114 => 36,  111 => 35,  107 => 34,  99 => 28,  97 => 27,  88 => 21,  84 => 20,  78 => 17,  74 => 15,  72 => 14,  65 => 9,  63 => 8,  60 => 7,  56 => 6,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "pages/leave_management/index.html.twig", "/Users/anthonymerguin/Documents/projet/CorpPilot/templates/pages/leave_management/index.html.twig");
    }
}
