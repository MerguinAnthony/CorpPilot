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
class __TwigTemplate_bade9e916c68c2c72401028da07a525b extends Template
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
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["company"]) || array_key_exists("company", $context) ? $context["company"] : (function () { throw new RuntimeError('Variable "company" does not exist.', 3, $this->source); })()), "companyAbrev", [], "any", false, false, false, 3), "html", null, true);
        
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
    ";
        // line 10
        $this->loadTemplate("partials/_headerStaff.html.twig", "pages/staff_vacation/index.html.twig", 10)->display($context);
        // line 11
        echo "<div id=\"phoneUser\" style=\"display: none;\">
    ";
        // line 12
        $this->loadTemplate("partials/_currentUser.html.twig", "pages/staff_vacation/index.html.twig", 12)->display($context);
        // line 13
        echo "</div>
<div class=\"row mt-4\">
    <div class=\"col-12\">
        <h1 class=\"text-center\">Demande de congés</h1>
    </div>
</div>
";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 19, $this->source); })()), "flashes", ["success"], "method", false, false, false, 19));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 20
            echo "    <div class=\"alert alert-success w-50 mx-auto my-4  text-center\">
        ";
            // line 21
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
    </div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 24
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 24, $this->source); })()), "flashes", ["danger"], "method", false, false, false, 24));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 25
            echo "    <div class=\"alert alert-danger w-50 mx-auto my-4  text-center\">
        ";
            // line 26
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
    </div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        echo "<div class=\"row\">
    <div class=\"col-md-6\">
        <section class=\"formVac\" id=\"col1\">
        ";
        // line 32
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 32, $this->source); })()), 'form_start');
        echo "
            <div class=\"form-group\">
                <div class=\"row\">
                    <div class=\"col-12\">
                        <h2 class=\"text-center\">Nouvelle demande</h2>
                    </div>
                    <div class=\"col-10 mx-auto\">
                    ";
        // line 39
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 39, $this->source); })()), "account", [], "any", false, false, false, 39), 'row');
        echo "
                    </div>
                </div>
                <div class=\"row\">
                    <div class=\"col-5 mx-auto\">
                        ";
        // line 44
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 44, $this->source); })()), "startDate", [], "any", false, false, false, 44), 'row');
        echo "
                    </div>
                    <div class=\"col-5 mx-auto\">
                        ";
        // line 47
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 47, $this->source); })()), "endDate", [], "any", false, false, false, 47), 'row');
        echo "
                    </div>
                </div>
                <div class=\"row mt-4\">
                    <div class=\"col-5 mx-auto\">
                        ";
        // line 52
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 52, $this->source); })()), "startHours", [], "any", false, false, false, 52), 'row');
        echo "
                    </div>
                    <div class=\"col-5 mx-auto\">
                        ";
        // line 55
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 55, $this->source); })()), "endHours", [], "any", false, false, false, 55), 'row');
        echo "
                    </div>
                </div>
                <div class=\"row\">
                    <div class=\"col-10 mx-auto\">
                        ";
        // line 60
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 60, $this->source); })()), "submit", [], "any", false, false, false, 60), 'row');
        echo "
                    </div>
                </div>
            </div>
            
        ";
        // line 65
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 65, $this->source); })()), 'form_end');
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
        // line 87
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["vacations"]) || array_key_exists("vacations", $context) ? $context["vacations"] : (function () { throw new RuntimeError('Variable "vacations" does not exist.', 87, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["vacation"]) {
            // line 88
            echo "                                ";
            if ((twig_get_attribute($this->env, $this->source, $context["vacation"], "endDate", [], "any", false, false, false, 88) >= twig_date_converter($this->env, "now"))) {
                // line 89
                echo "                                    <tr class=\"mt-2\">
                                        <td>
                                        ";
                // line 91
                if ((twig_get_attribute($this->env, $this->source, $context["vacation"], "account", [], "any", false, false, false, 91) == 3)) {
                    // line 92
                    echo "                                            ";
                    echo twig_escape_filter($this->env, ((twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["vacation"], "startDate", [], "any", false, false, false, 92), "d/m/Y") . " au ") . twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["vacation"], "endDate", [], "any", false, false, false, 92), "d/m/Y")), "html", null, true);
                    echo "<br>";
                    echo twig_escape_filter($this->env, ((twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["vacation"], "startHours", [], "any", false, false, false, 92), "H:i") . " à ") . twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["vacation"], "endHours", [], "any", false, false, false, 92), "H:i")), "html", null, true);
                    echo "
                                            ";
                } else {
                    // line 94
                    echo "                                            ";
                    echo twig_escape_filter($this->env, ((twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["vacation"], "startDate", [], "any", false, false, false, 94), "d/m/Y") . " au ") . twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["vacation"], "endDate", [], "any", false, false, false, 94), "d/m/Y")), "html", null, true);
                    echo "
                                            ";
                }
                // line 96
                echo "                                        </td>
                                        <td>
                                            ";
                // line 98
                if ((twig_get_attribute($this->env, $this->source, $context["vacation"], "approved", [], "any", false, false, false, 98) == 0)) {
                    // line 99
                    echo "                                                <img src=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/svg/waiting.svg"), "html", null, true);
                    echo "\" alt=\"En attente\">
                                            ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 100
$context["vacation"], "approved", [], "any", false, false, false, 100) == 1)) {
                    // line 101
                    echo "                                                <img src=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/svg/checked.svg"), "html", null, true);
                    echo "\" alt=\"Validé\">
                                            ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 102
$context["vacation"], "approved", [], "any", false, false, false, 102) == 2)) {
                    // line 103
                    echo "                                                <img src=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/svg/cancel.svg"), "html", null, true);
                    echo "\" alt=\"Refusé\">
                                            ";
                }
                // line 105
                echo "                                        </td>
                                        ";
                // line 106
                if ((twig_get_attribute($this->env, $this->source, $context["vacation"], "approved", [], "any", false, false, false, 106) == 0)) {
                    // line 107
                    echo "                                        <td>
                                            <a href=\"";
                    // line 108
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_staff_vacation_modify", ["id" => twig_get_attribute($this->env, $this->source, $context["vacation"], "id", [], "any", false, false, false, 108)]), "html", null, true);
                    echo "\">
                                                <img src=\"";
                    // line 109
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/svg/modify.svg"), "html", null, true);
                    echo "\" alt=\"Modifier\">
                                            </a>
                                        </td>
                                        <td>
                                            <a href=\"";
                    // line 113
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_staff_vacation_delete", ["id" => twig_get_attribute($this->env, $this->source, $context["vacation"], "id", [], "any", false, false, false, 113)]), "html", null, true);
                    echo "\">
                                                <img src=\"";
                    // line 114
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/svg/trash.svg"), "html", null, true);
                    echo "\" alt=\"Supprimer\">
                                            </a>
                                        </td>
                                        ";
                } else {
                    // line 118
                    echo "                                        <td>
                                            <a href=\"";
                    // line 119
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_generate_document", ["id" => twig_get_attribute($this->env, $this->source, $context["vacation"], "id", [], "any", false, false, false, 119)]), "html", null, true);
                    echo "\">
                                                <img src=\"";
                    // line 120
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/svg/validDoc.svg"), "html", null, true);
                    echo "\" alt=\"Document justificatif\">
                                            </a>
                                        </td>
                                        ";
                }
                // line 124
                echo "                                    </tr>
                                ";
            }
            // line 126
            echo "                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['vacation'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 127
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
        // line 137
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["dayVacations"]) || array_key_exists("dayVacations", $context) ? $context["dayVacations"] : (function () { throw new RuntimeError('Variable "dayVacations" does not exist.', 137, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["dayVacation"]) {
            // line 138
            echo "                <div>
                    <span>";
            // line 139
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["dayVacation"], "available", [], "any", false, false, false, 139), "html", null, true);
            echo "</span>
                    <p>Jours de congés disponibles</p>
                </div>
                <div>
                    <span>";
            // line 143
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["dayVacation"], "cet", [], "any", false, false, false, 143), "html", null, true);
            echo "</span>
                    <p>Jours - compte épargne temps</p>
                </div>
                <div>
                    <span>";
            // line 147
            echo twig_escape_filter($this->env, $this->extensions['App\Twig\CustomFiltersExtension']->formatHoursFilter(twig_get_attribute($this->env, $this->source, $context["dayVacation"], "hoursAvailable", [], "any", false, false, false, 147)), "html", null, true);
            echo "</span>
                    <p>Heures disponibles</p>
                </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['dayVacation'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 151
        echo "            </div>
        </div>
    </section>

";
        // line 155
        $this->loadTemplate("partials/_phoneNav.html.twig", "pages/staff_vacation/index.html.twig", 155)->display($context);
        // line 156
        echo "<script>
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
        return array (  387 => 156,  385 => 155,  379 => 151,  369 => 147,  362 => 143,  355 => 139,  352 => 138,  348 => 137,  336 => 127,  330 => 126,  326 => 124,  319 => 120,  315 => 119,  312 => 118,  305 => 114,  301 => 113,  294 => 109,  290 => 108,  287 => 107,  285 => 106,  282 => 105,  276 => 103,  274 => 102,  269 => 101,  267 => 100,  262 => 99,  260 => 98,  256 => 96,  250 => 94,  242 => 92,  240 => 91,  236 => 89,  233 => 88,  229 => 87,  204 => 65,  196 => 60,  188 => 55,  182 => 52,  174 => 47,  168 => 44,  160 => 39,  150 => 32,  145 => 29,  136 => 26,  133 => 25,  129 => 24,  120 => 21,  117 => 20,  113 => 19,  105 => 13,  103 => 12,  100 => 11,  98 => 10,  94 => 8,  92 => 7,  89 => 6,  79 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Demande de congés | {{ company.companyAbrev }}{% endblock %}

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
        <h1 class=\"text-center\">Demande de congés</h1>
    </div>
</div>
{% for message in app.flashes('success') %}
    <div class=\"alert alert-success w-50 mx-auto my-4  text-center\">
        {{ message }}
    </div>
{% endfor %}
{% for message in app.flashes('danger') %}
    <div class=\"alert alert-danger w-50 mx-auto my-4  text-center\">
        {{ message }}
    </div>
{% endfor %}
<div class=\"row\">
    <div class=\"col-md-6\">
        <section class=\"formVac\" id=\"col1\">
        {{ form_start(form) }}
            <div class=\"form-group\">
                <div class=\"row\">
                    <div class=\"col-12\">
                        <h2 class=\"text-center\">Nouvelle demande</h2>
                    </div>
                    <div class=\"col-10 mx-auto\">
                    {{ form_row(form.account) }}
                    </div>
                </div>
                <div class=\"row\">
                    <div class=\"col-5 mx-auto\">
                        {{ form_row(form.startDate) }}
                    </div>
                    <div class=\"col-5 mx-auto\">
                        {{ form_row(form.endDate) }}
                    </div>
                </div>
                <div class=\"row mt-4\">
                    <div class=\"col-5 mx-auto\">
                        {{ form_row(form.startHours) }}
                    </div>
                    <div class=\"col-5 mx-auto\">
                        {{ form_row(form.endHours) }}
                    </div>
                </div>
                <div class=\"row\">
                    <div class=\"col-10 mx-auto\">
                        {{ form_row(form.submit) }}
                    </div>
                </div>
            </div>
            
        {{ form_end(form) }}
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
                                {% if vacation.endDate >= date('now') %}
                                    <tr class=\"mt-2\">
                                        <td>
                                        {% if vacation.account == 3 %}
                                            {{ vacation.startDate|date('d/m/Y') ~ ' au ' ~ vacation.endDate|date('d/m/Y') }}<br>{{ vacation.startHours|date('H:i') ~ ' à ' ~ vacation.endHours|date('H:i') }}
                                            {% else %}
                                            {{ vacation.startDate|date('d/m/Y') ~ ' au ' ~ vacation.endDate|date('d/m/Y') }}
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
                                        {% if vacation.approved == 0 %}
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
                                        {% else %}
                                        <td>
                                            <a href=\"{{ path('app_generate_document', {'id': vacation.id}) }}\">
                                                <img src=\"{{ asset('assets/svg/validDoc.svg') }}\" alt=\"Document justificatif\">
                                            </a>
                                        </td>
                                        {% endif %}
                                    </tr>
                                {% endif %}
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
                    <span>{{ dayVacation.hoursAvailable|formatHours }}</span>
                    <p>Heures disponibles</p>
                </div>
                {% endfor %}
            </div>
        </div>
    </section>

{% include \"partials/_phoneNav.html.twig\" %}
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
