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

/* partials/_currentUser.html.twig */
class __TwigTemplate_75574dfd3c0a624c3179b034ef485f59 extends Template
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
        if (($context["currentUser"] ?? null)) {
            // line 2
            echo "        <div class=\"row mt-4\">
            <div class=\"col-6 px-0-0 d-flex justify-content-center align-items-center\">
                <img src=\"";
            // line 4
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/Img/69944235142__78B07BD1-5790-446E-8015-0A4866FD84B1.png"), "html", null, true);
            echo "\" alt=\"Photo de profil";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["currentUser"] ?? null), "lastName", [], "any", false, false, false, 4), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["currentUser"] ?? null), "firstName", [], "any", false, false, false, 4), "html", null, true);
            echo "\" width=\"100\" height=\"100\" class=\"rounded-circle\">
            </div>
            <div class=\"col-6\">
                <div class=\"row\">
                    <div class=\"col-12 ff-3 fs-3\">
                        <p class=\"p-0 my-3 \">";
            // line 9
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["currentUser"] ?? null), "lastName", [], "any", false, false, false, 9), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["currentUser"] ?? null), "firstName", [], "any", false, false, false, 9), "html", null, true);
            echo "</p>
                    </div>
                </div>
                <div class=\"row\">
                    <div class=\"col-12\">
                        <p>";
            // line 14
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["currentUser"] ?? null), "job", [], "any", false, false, false, 14), "html", null, true);
            echo "</p>
                    </div>
                </div>
            </div>
        </div>
    ";
        }
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "partials/_currentUser.html.twig";
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
        return array (  65 => 14,  55 => 9,  43 => 4,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "partials/_currentUser.html.twig", "/Users/anthonymerguin/Documents/projet/CorpPilot/templates/partials/_currentUser.html.twig");
    }
}
