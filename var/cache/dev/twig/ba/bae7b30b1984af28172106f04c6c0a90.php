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
class __TwigTemplate_e226392243353e0f340c2258979cfa8c extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pages/user/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pages/user/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "pages/user/index.html.twig", 1);
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

        echo "Gestion des employés | ";
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
        $this->loadTemplate("partials/_desktopNav.html.twig", "pages/user/index.html.twig", 8)->display($context);
        // line 9
        echo "</div>
<div class=\"container\">
    <section class=\"headerStaff\">
        <div class=\"row mt-4 \">
            <div id=\"desktopUser\" class=\"col-4\" style=\"display: none;\">
                ";
        // line 14
        $this->loadTemplate("partials/_currentUser.html.twig", "pages/user/index.html.twig", 14)->display($context);
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
        $this->loadTemplate("partials/_logout.html.twig", "pages/user/index.html.twig", 21)->display($context);
        // line 22
        echo "            </div>
        </div>
    </section>
    <div id=\"phoneUser\" style=\"display: none;\">
        ";
        // line 26
        $this->loadTemplate("partials/_currentUser.html.twig", "pages/user/index.html.twig", 26)->display($context);
        // line 27
        echo "    </div>
    <div class=\"row mt-4\">
        <div class=\"col-12\">
            <h1 class=\"text-center\">Gestion des employés</h1>
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
        echo "    <div class=\"row\">
        <div class=\"col-12\">
            <section class=\"userIn mb-4\">
                <div class=\"row\">
                    <div class=\"col-12\">
                        <h2 class=\"text-center mt-4\">Ajouter un employé</h2>
                        <a href=\"";
        // line 44
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_new");
        echo "\">
                            <img src=\"";
        // line 45
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
                                        <th scope=\"col\" class=\"d-none d-md-table-cell\">Email</th>
                                        <th scope=\"col\" class=\"d-none d-md-table-cell\">Date de naissance</th>
                                        <th scope=\"col\">Poste</th>
                                        <th scope=\"col\" class=\"d-none d-md-table-cell\">Permission</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    ";
        // line 69
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["users"]) || array_key_exists("users", $context) ? $context["users"] : (function () { throw new RuntimeError('Variable "users" does not exist.', 69, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 70
            echo "                                        <tr>
                                            <td>";
            // line 71
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "lastname", [], "any", false, false, false, 71), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "firstname", [], "any", false, false, false, 71), "html", null, true);
            echo "</td>
                                            <td class=\"d-none d-md-table-cell\">";
            // line 72
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "email", [], "any", false, false, false, 72), "html", null, true);
            echo "</td>
                                            <td class=\"d-none d-md-table-cell\">";
            // line 73
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "birthday", [], "any", false, false, false, 73), "d/m/Y"), "html", null, true);
            echo "</td>
                                            <td>";
            // line 74
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "job", [], "any", false, false, false, 74), "html", null, true);
            echo "</td>
                                            ";
            // line 75
            if (twig_in_filter("ROLE_ADMIN", twig_get_attribute($this->env, $this->source, $context["user"], "roles", [], "any", false, false, false, 75))) {
                // line 76
                echo "                                                <td class=\"d-none d-md-table-cell\">Administrateur</td>
                                            ";
            } else {
                // line 78
                echo "                                                <td class=\"d-none d-md-table-cell\">Employé</td>
                                            ";
            }
            // line 80
            echo "                                            <td>
                                                <a href=\"";
            // line 81
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_show", ["id" => twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 81)]), "html", null, true);
            echo "\">
                                                    <img src=\"";
            // line 82
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/svg/detail.svg"), "html", null, true);
            echo "\" alt=\"Détail\">
                                                </a>
                                            </td>
                                        </tr>
                                    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 87
            echo "                                        <tr>
                                            <td colspan=\"6\" class=\"text-center\">Aucun employé</td>
                                        </tr>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 91
        echo "                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
</div>
<div id=\"phoneNav\" style=\"display: none;\">
    ";
        // line 101
        $this->loadTemplate("partials/_phoneNav.html.twig", "pages/user/index.html.twig", 101)->display($context);
        // line 102
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
        return array (  264 => 102,  262 => 101,  250 => 91,  241 => 87,  231 => 82,  227 => 81,  224 => 80,  220 => 78,  216 => 76,  214 => 75,  210 => 74,  206 => 73,  202 => 72,  196 => 71,  193 => 70,  188 => 69,  161 => 45,  157 => 44,  149 => 38,  140 => 35,  137 => 34,  133 => 33,  125 => 27,  123 => 26,  117 => 22,  115 => 21,  109 => 18,  104 => 15,  102 => 14,  95 => 9,  93 => 8,  90 => 7,  80 => 6,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Gestion des employés | {{ companyAbrev }}Gest{% endblock %}


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
            <h1 class=\"text-center\">Gestion des employés</h1>
        </div>
    </div>
    {% for message in app.flashes('success') %}
        <div class=\"alert alert-success w-50 mx-auto my-4  text-center\">
            {{ message }}
        </div>
    {% endfor %}
    <div class=\"row\">
        <div class=\"col-12\">
            <section class=\"userIn mb-4\">
                <div class=\"row\">
                    <div class=\"col-12\">
                        <h2 class=\"text-center mt-4\">Ajouter un employé</h2>
                        <a href=\"{{ path('app_user_new') }}\">
                            <img src=\"{{ asset('assets/svg/newStaff.svg') }}\" alt=\"Ajouter un employé\">
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
                                        <th scope=\"col\" class=\"d-none d-md-table-cell\">Email</th>
                                        <th scope=\"col\" class=\"d-none d-md-table-cell\">Date de naissance</th>
                                        <th scope=\"col\">Poste</th>
                                        <th scope=\"col\" class=\"d-none d-md-table-cell\">Permission</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    {% for user in users %}
                                        <tr>
                                            <td>{{ user.lastname }} {{ user.firstname }}</td>
                                            <td class=\"d-none d-md-table-cell\">{{ user.email }}</td>
                                            <td class=\"d-none d-md-table-cell\">{{ user.birthday|date('d/m/Y') }}</td>
                                            <td>{{ user.job }}</td>
                                            {% if 'ROLE_ADMIN' in user.roles %}
                                                <td class=\"d-none d-md-table-cell\">Administrateur</td>
                                            {% else %}
                                                <td class=\"d-none d-md-table-cell\">Employé</td>
                                            {% endif %}
                                            <td>
                                                <a href=\"{{ path('app_user_show', {'id': user.id}) }}\">
                                                    <img src=\"{{ asset('assets/svg/detail.svg') }}\" alt=\"Détail\">
                                                </a>
                                            </td>
                                        </tr>
                                    {% else %}
                                        <tr>
                                            <td colspan=\"6\" class=\"text-center\">Aucun employé</td>
                                        </tr>
                                    {% endfor %}
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
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
});



</script>
{% endblock %}
", "pages/user/index.html.twig", "/Users/anthonymerguin/Documents/projet/CorpPilot/templates/pages/user/index.html.twig");
    }
}
