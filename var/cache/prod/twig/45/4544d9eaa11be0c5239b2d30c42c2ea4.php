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
class __TwigTemplate_b4008e7db4f6a1853a758af092ec3b33 extends Template
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
        // line 1
        echo "<footer class=\"container mt-5\">
    <div class=\"row\">
        <div class=\"col-md-4 text-center\">
            <!-- Logo et nom de la société -->
            <img src=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/svg/blason.svg"), "html", null, true);
        echo "\" alt=\"Logo ";
        echo twig_escape_filter($this->env, ($context["companyName"] ?? null), "html", null, true);
        echo "\" class=\"img-fluid\" width=\"100\">
            <p>";
        // line 6
        echo twig_escape_filter($this->env, ($context["companyName"] ?? null), "html", null, true);
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
        echo twig_escape_filter($this->env, ($context["companyAddress"] ?? null), "html", null, true);
        echo "</p>
            <p>Téléphone : ";
        // line 23
        echo twig_escape_filter($this->env, ($context["companyPhone"] ?? null), "html", null, true);
        echo "</p>
            <p>Email : ";
        // line 24
        echo twig_escape_filter($this->env, ($context["companyEmail"] ?? null), "html", null, true);
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
        echo twig_escape_filter($this->env, ($context["companyCreat"] ?? null), "html", null, true);
        echo " - Tous droits réservés</p>
        </div>
    </div>
</footer>
";
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
        return array (  86 => 31,  76 => 24,  72 => 23,  68 => 22,  49 => 6,  43 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "partials/_homeFooter.html.twig", "/Users/anthonymerguin/Documents/projet/CorpPilot/templates/partials/_homeFooter.html.twig");
    }
}
