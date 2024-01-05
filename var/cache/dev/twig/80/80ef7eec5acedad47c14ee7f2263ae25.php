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

/* partials/_homeFooter.html.twig */
class __TwigTemplate_0715f7a58908ad130ffc208b5e47454a extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partials/_homeFooter.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partials/_homeFooter.html.twig"));

        // line 1
        echo "<footer class=\"container mt-5\">
    <div class=\"row\">
        <div class=\"col-md-4 text-center\">
            <!-- Logo et nom de la société -->
            <img src=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/svg/blason.svg"), "html", null, true);
        echo "\" alt=\"Logo ";
        echo twig_escape_filter($this->env, (isset($context["companyName"]) || array_key_exists("companyName", $context) ? $context["companyName"] : (function () { throw new RuntimeError('Variable "companyName" does not exist.', 5, $this->source); })()), "html", null, true);
        echo "\" class=\"img-fluid\" width=\"100\">
            <p>";
        // line 6
        echo twig_escape_filter($this->env, (isset($context["companyName"]) || array_key_exists("companyName", $context) ? $context["companyName"] : (function () { throw new RuntimeError('Variable "companyName" does not exist.', 6, $this->source); })()), "html", null, true);
        echo "</p>
        </div>

        <div class=\"col-md-4 text-center\">
            <!-- Liens vers les mentions légales, CGU et données personnelles -->
            <h5>Liens Utiles</h5>
            <ul class=\"list-unstyled\">
                <li><a href=\"#\">Mentions Légales</a></li>
                <li><a href=\"#\">Conditions Générales d'Utilisation</a></li>
                <li><a href=\"#\">Politique de Confidentialité</a></li>
            </ul>
        </div>

        <div class=\"col-md-4 text-center\">
            <!-- Coordonnées de la mairie -->
            <h5>Contactez la Mairie</h5>
            <p>Adresse : ";
        // line 22
        echo twig_escape_filter($this->env, (isset($context["companyAddress"]) || array_key_exists("companyAddress", $context) ? $context["companyAddress"] : (function () { throw new RuntimeError('Variable "companyAddress" does not exist.', 22, $this->source); })()), "html", null, true);
        echo "</p>
            <p>Téléphone : ";
        // line 23
        echo twig_escape_filter($this->env, (isset($context["companyPhone"]) || array_key_exists("companyPhone", $context) ? $context["companyPhone"] : (function () { throw new RuntimeError('Variable "companyPhone" does not exist.', 23, $this->source); })()), "html", null, true);
        echo "</p>
            <p>Email : ";
        // line 24
        echo twig_escape_filter($this->env, (isset($context["companyEmail"]) || array_key_exists("companyEmail", $context) ? $context["companyEmail"] : (function () { throw new RuntimeError('Variable "companyEmail" does not exist.', 24, $this->source); })()), "html", null, true);
        echo "</p>
        </div>
    </div>

    <div class=\"row mt-3\">
        <div class=\"col-md-12 text-center\">
            <!-- Mention \"Tous droits réservés\" -->
            <p>&copy; ";
        // line 31
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["companyCreat"]) || array_key_exists("companyCreat", $context) ? $context["companyCreat"] : (function () { throw new RuntimeError('Variable "companyCreat" does not exist.', 31, $this->source); })()), "html", null, true);
        echo " - Tous droits réservés</p>
        </div>
    </div>
</footer>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "partials/_homeFooter.html.twig";
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
        return array (  92 => 31,  82 => 24,  78 => 23,  74 => 22,  55 => 6,  49 => 5,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<footer class=\"container mt-5\">
    <div class=\"row\">
        <div class=\"col-md-4 text-center\">
            <!-- Logo et nom de la société -->
            <img src=\"{{ asset('assets/svg/blason.svg') }}\" alt=\"Logo {{ companyName }}\" class=\"img-fluid\" width=\"100\">
            <p>{{ companyName }}</p>
        </div>

        <div class=\"col-md-4 text-center\">
            <!-- Liens vers les mentions légales, CGU et données personnelles -->
            <h5>Liens Utiles</h5>
            <ul class=\"list-unstyled\">
                <li><a href=\"#\">Mentions Légales</a></li>
                <li><a href=\"#\">Conditions Générales d'Utilisation</a></li>
                <li><a href=\"#\">Politique de Confidentialité</a></li>
            </ul>
        </div>

        <div class=\"col-md-4 text-center\">
            <!-- Coordonnées de la mairie -->
            <h5>Contactez la Mairie</h5>
            <p>Adresse : {{ companyAddress }}</p>
            <p>Téléphone : {{ companyPhone }}</p>
            <p>Email : {{ companyEmail }}</p>
        </div>
    </div>

    <div class=\"row mt-3\">
        <div class=\"col-md-12 text-center\">
            <!-- Mention \"Tous droits réservés\" -->
            <p>&copy; {{ 'now'|date('Y') }} {{ companyCreat }} - Tous droits réservés</p>
        </div>
    </div>
</footer>
", "partials/_homeFooter.html.twig", "/Users/anthonymerguin/Documents/projet/CorpPilot/templates/partials/_homeFooter.html.twig");
    }
}
