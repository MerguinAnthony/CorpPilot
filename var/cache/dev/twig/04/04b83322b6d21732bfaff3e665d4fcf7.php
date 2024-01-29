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
class __TwigTemplate_94b17acaf50904e61a30312d8490d13f extends Template
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
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/Img/logo.png"), "html", null, true);
        echo "\" alt=\"Logo\" class=\"img-fluid\" width=\"100\">
        </div>

        <div class=\"col-md-4 text-center\">
            <!-- Liens vers les mentions légales, CGU et données personnelles -->
            <h5>Liens Utiles</h5>
            <ul class=\"list-unstyled text-black\">
                <li><a class=\"text-dark\" href=\"/CGU.pdf\">Conditions Générales d'Utilisation</a></li>
            </ul>
        </div>

        <div class=\"col-md-4 text-center\">
            <!-- Coordonnées de la mairie -->
            <p>Contactez Corp Pilot</p>
            <p>Adresse : 34 Rue de la mairie, 88430 Biffontaine</p>
            <p>Téléphone : 0601331080</p>
            <p>Email : Contact@corppilot.fr</p>
        </div>
    </div>

    <div class=\"row mt-3\">
        <div class=\"col-md-12 text-center\">
            <!-- Mention \"Tous droits réservés\" -->
            <p>&copy; 2024 - Tous droits réservés</p>
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
        return array (  49 => 5,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<footer class=\"container mt-5\">
    <div class=\"row\">
        <div class=\"col-md-4 text-center\">
            <!-- Logo et nom de la société -->
            <img src=\"{{ asset('assets/Img/logo.png') }}\" alt=\"Logo\" class=\"img-fluid\" width=\"100\">
        </div>

        <div class=\"col-md-4 text-center\">
            <!-- Liens vers les mentions légales, CGU et données personnelles -->
            <h5>Liens Utiles</h5>
            <ul class=\"list-unstyled text-black\">
                <li><a class=\"text-dark\" href=\"/CGU.pdf\">Conditions Générales d'Utilisation</a></li>
            </ul>
        </div>

        <div class=\"col-md-4 text-center\">
            <!-- Coordonnées de la mairie -->
            <p>Contactez Corp Pilot</p>
            <p>Adresse : 34 Rue de la mairie, 88430 Biffontaine</p>
            <p>Téléphone : 0601331080</p>
            <p>Email : Contact@corppilot.fr</p>
        </div>
    </div>

    <div class=\"row mt-3\">
        <div class=\"col-md-12 text-center\">
            <!-- Mention \"Tous droits réservés\" -->
            <p>&copy; 2024 - Tous droits réservés</p>
        </div>
    </div>
</footer>
", "partials/_homeFooter.html.twig", "/Users/anthonymerguin/Documents/projet/CorpPilot/templates/partials/_homeFooter.html.twig");
    }
}
