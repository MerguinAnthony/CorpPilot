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

/* pages/security/login.html.twig */
class __TwigTemplate_d5e5eeea6f6bde539787e9ef76926ae3 extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "pages/security/login.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Connexion";
    }

    // line 6
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 7
        echo "<div class=\"container\">
    <a href=\"";
        // line 8
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        echo "\">
        <img src=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/svg/blason.svg"), "html", null, true);
        echo "\" alt=\"Logo\" width=\"150\" height=\"165\" class=\"mt-4 d-block mx-auto\">
    </a>

    <h1 class=\"mt-4 text-center ff-1\">Espace de connexion</h1>
    <p id=\"emailHelp\" class=\"form-text text-muted text-center\">Ne communiquer jamais votre identifiant et votre mot de passe.</p>

    ";
        // line 15
        if (($context["error"] ?? null)) {
            // line 16
            echo "        <div class=\"alert alert-danger\">
            ";
            // line 17
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Identifiants invalides. Veuillez réessayer.", [], "security"), "html", null, true);
            echo "
        </div>
    ";
        }
        // line 20
        echo "
    
    <form action=\"";
        // line 22
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_security");
        echo "\" method=\"post\" class=\"login-form mb-4\">
        <div class=\"form-group\">
            <label for=\"username\">Identifiant</label>
            <input type=\"email\" class=\"form-control\" id=\"username\" placeholder=\"email\" name=\"_username\" value=\"";
        // line 25
        echo twig_escape_filter($this->env, ($context["last_username"] ?? null), "html", null, true);
        echo "\">
        </div>
        <div class=\"form-group\">
            <label for=\"password\">Mot de passe</label>
            <input type=\"password\" class=\"form-control\" id=\"password\" placeholder=\"********\" autocomplete=\"off\" name=\"_password\">
        </div>
        <div class=\"form-group d-flex justify-content-center w-25 my-4 mx-auto fs-5\">
            <button type=\"submit\" class=\"btn btn-primary login-btn my-4 p-0\"><img src=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/svg/login.svg"), "html", null, true);
        echo "\" alt=\"se connecter\"></button>
        </div>
    </form>
    <div class=\"return text-center mb-4\">
        <a href=\"";
        // line 36
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        echo "\" class=\"btn btn-primary\">Retour</a>
    </div>
</div>

";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "pages/security/login.html.twig";
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
        return array (  112 => 36,  105 => 32,  95 => 25,  89 => 22,  85 => 20,  79 => 17,  76 => 16,  74 => 15,  65 => 9,  61 => 8,  58 => 7,  54 => 6,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "pages/security/login.html.twig", "/Users/anthonymerguin/Documents/projet/CorpPilot/templates/pages/security/login.html.twig");
    }
}
