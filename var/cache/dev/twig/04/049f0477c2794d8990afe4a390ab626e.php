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

/* partials/_phoneNav.html.twig */
class __TwigTemplate_1d3ca79bae41285fbe148a661324116a extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partials/_phoneNav.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partials/_phoneNav.html.twig"));

        // line 1
        echo "<div id=\"phoneNav\" style=\"display: none;\">
    <nav class=\"navbar-mobile mt-4\">
        <a href=\"";
        // line 3
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_staff_vacation");
        echo "\" class=\"nav-link\">
            <img src=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/assets/svg/horloge.svg"), "html", null, true);
        echo "\" alt=\"demande de congé\">
        </a>
        <a href=\"";
        // line 6
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_profile");
        echo "\" class=\"nav-link\">
            <img src=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/assets/svg/profil.svg"), "html", null, true);
        echo "\" alt=\"profil\">
        </a>

        ";
        // line 10
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 11
            echo "        <div class=\"nav-item dropdown dropup\">
            <a href=\"#\" class=\"nav-link\" role=\"button\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
                <img src=\"";
            // line 13
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/assets/svg/gest.svg"), "html", null, true);
            echo "\" alt=\"gestion\">
            </a>
            <ul class=\"dropdown-menu\">
                <li><a class=\"dropdown-item\" href=\"";
            // line 16
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_leave_management");
            echo "\">Gestion des congés</a></li>
                <li><a class=\"dropdown-item\" href=\"";
            // line 17
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user");
            echo "\">Gestion des employés</a></li>
                <li><hr class=\"dropdown-divider\"></li>
                <li><a class=\"dropdown-item\" href=\"";
            // line 19
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("company_profile_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["company"]) || array_key_exists("company", $context) ? $context["company"] : (function () { throw new RuntimeError('Variable "company" does not exist.', 19, $this->source); })()), "id", [], "any", false, false, false, 19)]), "html", null, true);
            echo "\">Modifier les informations de l'entreprise</a></li>
            </ul>
        </div>
        ";
        }
        // line 23
        echo "    </nav>
</div>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "partials/_phoneNav.html.twig";
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
        return array (  94 => 23,  87 => 19,  82 => 17,  78 => 16,  72 => 13,  68 => 11,  66 => 10,  60 => 7,  56 => 6,  51 => 4,  47 => 3,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div id=\"phoneNav\" style=\"display: none;\">
    <nav class=\"navbar-mobile mt-4\">
        <a href=\"{{ path('app_staff_vacation') }}\" class=\"nav-link\">
            <img src=\"{{ asset('/assets/svg/horloge.svg') }}\" alt=\"demande de congé\">
        </a>
        <a href=\"{{ path('app_profile') }}\" class=\"nav-link\">
            <img src=\"{{ asset('/assets/svg/profil.svg') }}\" alt=\"profil\">
        </a>

        {% if is_granted('ROLE_ADMIN') %}
        <div class=\"nav-item dropdown dropup\">
            <a href=\"#\" class=\"nav-link\" role=\"button\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
                <img src=\"{{ asset('/assets/svg/gest.svg') }}\" alt=\"gestion\">
            </a>
            <ul class=\"dropdown-menu\">
                <li><a class=\"dropdown-item\" href=\"{{ path('app_leave_management') }}\">Gestion des congés</a></li>
                <li><a class=\"dropdown-item\" href=\"{{ path('app_user') }}\">Gestion des employés</a></li>
                <li><hr class=\"dropdown-divider\"></li>
                <li><a class=\"dropdown-item\" href=\"{{ path('company_profile_edit', {'id': company.id}) }}\">Modifier les informations de l'entreprise</a></li>
            </ul>
        </div>
        {% endif %}
    </nav>
</div>
", "partials/_phoneNav.html.twig", "/Users/anthonymerguin/Documents/projet/CorpPilot/templates/partials/_phoneNav.html.twig");
    }
}
