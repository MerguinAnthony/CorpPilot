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
class __TwigTemplate_9df3b9aecb01b9cf1e490d7eba6652dd extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "pages/staff_vacation/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Demande de congés | ";
        echo twig_escape_filter($this->env, ($context["companyAbrev"] ?? null), "html", null, true);
        echo "Gest";
    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
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
            <div class=\"col-4 d-flex justify-content-center align-items-center\"> <!-- Ajout de la classe text-center pour centrer le blason -->
                <img src=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/svg/blason.svg"), "html", null, true);
        echo "\" width=\"100\" alt=\"Blason de la ville de deyvillers\">
            </div>
            <div id=\"phonelogout\" class=\"col-4 d-flex justify-content-end align-items-center\" style=\"display: none;\">
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
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "flashes", ["success"], "method", false, false, false, 32));
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
        // line 47
        echo "        ";
        // line 48
        echo "            ";
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["formDays"] ?? null), 'form_start');
        echo "
                <div class=\"row d-flex justify-content-evenly\">
                    <div class=\"col-4\">
                        ";
        // line 51
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["formDays"] ?? null), "startDate", [], "any", false, false, false, 51), 'row');
        echo "
                    </div>
                    <div class=\"col-4\">
                        ";
        // line 54
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["formDays"] ?? null), "endDate", [], "any", false, false, false, 54), 'row');
        echo "
                    </div>
                </div>
                <div class=\"d-block text-center\">
                    ";
        // line 58
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["formDays"] ?? null), "submit", [], "any", false, false, false, 58), 'row');
        echo "
                </div>
            ";
        // line 60
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["formDays"] ?? null), 'form_end');
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
        // line 83
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["vacations"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["vacation"]) {
            // line 84
            echo "                                <tr>
                                    <td>";
            // line 85
            echo twig_escape_filter($this->env, ((twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["vacation"], "startDate", [], "any", false, false, false, 85), "d/m/Y") . " au ") . twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["vacation"], "endDate", [], "any", false, false, false, 85), "d/m/Y")), "html", null, true);
            echo "</td>
                                    <td>
                                        ";
            // line 87
            if ((twig_get_attribute($this->env, $this->source, $context["vacation"], "approved", [], "any", false, false, false, 87) == 0)) {
                // line 88
                echo "                                            <img src=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/svg/waiting.svg"), "html", null, true);
                echo "\" alt=\"En attente\">
                                        ";
            } elseif ((twig_get_attribute($this->env, $this->source,             // line 89
$context["vacation"], "approved", [], "any", false, false, false, 89) == 1)) {
                // line 90
                echo "                                            <img src=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/svg/checked.svg"), "html", null, true);
                echo "\" alt=\"Validé\">
                                        ";
            } elseif ((twig_get_attribute($this->env, $this->source,             // line 91
$context["vacation"], "approved", [], "any", false, false, false, 91) == 2)) {
                // line 92
                echo "                                            <img src=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/svg/cancel.svg"), "html", null, true);
                echo "\" alt=\"Refusé\">
                                        ";
            }
            // line 94
            echo "                                    </td>
                                    <td>
                                        <a href=\"";
            // line 96
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_staff_vacation_modify", ["id" => twig_get_attribute($this->env, $this->source, $context["vacation"], "id", [], "any", false, false, false, 96)]), "html", null, true);
            echo "\">
                                            <img src=\"";
            // line 97
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/svg/modify.svg"), "html", null, true);
            echo "\" alt=\"Modifier\">
                                        </a>
                                    </td>
                                    <td>
                                        <a href=\"";
            // line 101
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_staff_vacation_delete", ["id" => twig_get_attribute($this->env, $this->source, $context["vacation"], "id", [], "any", false, false, false, 101)]), "html", null, true);
            echo "\">
                                            <img src=\"";
            // line 102
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
        // line 107
        echo "                        </tbody>
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
        // line 117
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["dayVacations"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["dayVacation"]) {
            // line 118
            echo "            <div>
                <span>";
            // line 119
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["dayVacation"], "available", [], "any", false, false, false, 119), "html", null, true);
            echo "</span>
                <p>Jours de congés disponibles</p>
            </div>
            <div>
                <span>";
            // line 123
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["dayVacation"], "cet", [], "any", false, false, false, 123), "html", null, true);
            echo "</span>
                <p>Jours - compte épargne temps</p>
            </div>
            <div>
                <span>";
            // line 127
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["dayVacation"], "hoursAvailable", [], "any", false, false, false, 127), "html", null, true);
            echo "</span>
                <p>Heures disponibles</p>
            </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['dayVacation'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 131
        echo "        </div>
    </div>
</section>

</div>
<div id=\"phoneNav\" style=\"display: none;\">
    ";
        // line 137
        $this->loadTemplate("partials/_phoneNav.html.twig", "pages/staff_vacation/index.html.twig", 137)->display($context);
        // line 138
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
            document.getElementById('phonelogout').style.display = 'block';
            document.getElementById('desktoplogout').style.display = 'none';
            document.querySelector('.vacStatus').style.borderRadius = '0';
            document.querySelector('.vacStatus').classList.add('mt-4');
        } else {
            document.getElementById('phoneNav').style.display = 'none';
            document.getElementById('desktopNav').style.display = 'block';
            document.getElementById('desktopUser').style.display = 'block';
            document.getElementById('phoneUser').style.display = 'none';
            document.getElementById('phonelogout').style.display = 'none';
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
        return array (  300 => 138,  298 => 137,  290 => 131,  280 => 127,  273 => 123,  266 => 119,  263 => 118,  259 => 117,  247 => 107,  236 => 102,  232 => 101,  225 => 97,  221 => 96,  217 => 94,  211 => 92,  209 => 91,  204 => 90,  202 => 89,  197 => 88,  195 => 87,  190 => 85,  187 => 84,  183 => 83,  157 => 60,  152 => 58,  145 => 54,  139 => 51,  132 => 48,  130 => 47,  119 => 37,  110 => 34,  107 => 33,  103 => 32,  95 => 26,  93 => 25,  87 => 21,  85 => 20,  79 => 17,  74 => 14,  72 => 13,  65 => 8,  63 => 7,  60 => 6,  56 => 5,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "pages/staff_vacation/index.html.twig", "/Users/anthonymerguin/Documents/projet/CorpPilot/templates/pages/staff_vacation/index.html.twig");
    }
}
