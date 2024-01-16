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

/* pages/home.html.twig */
class __TwigTemplate_d3733d133bd4c18806df7410bca915d6 extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "pages/home.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, ($context["companyAbrev"] ?? null), "html", null, true);
        echo "Gest";
    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "<div class=\"btn-div\">
<img src=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/svg/blason.svg"), "html", null, true);
        echo "\" alt=\"Logo\" width=\"60\" height=\"66\">
<a class=\"btn btn-primary\" href=\"";
        // line 8
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_security");
        echo "\">
    Se connecter
</a>
</div>
<div class=\"container mt-4 homepage-div\">
    <div class=\"row\">
        <div class=\"col-md-6 d-flex align-items-center\">
            <img src=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/Img/img_hero.jpg"), "html", null, true);
        echo "\" alt=\"Image RH\" class=\"img-fluid left-image\">
        </div>
        <div class=\"col-md-6\">
            <div class=\"jumbotron\">
                <h1 class=\"display-4 ff-4\">";
        // line 19
        echo twig_escape_filter($this->env, ($context["companyName"] ?? null), "html", null, true);
        echo "</h1>
                <p class=\"lead\">";
        // line 20
        echo twig_escape_filter($this->env, ($context["companyAbrev"] ?? null), "html", null, true);
        echo "Gest est une application web conçue pour simplifier la gestion des ressources humaines au sein de notre merveilleuse ville de ";
        echo twig_escape_filter($this->env, ($context["companyCity"] ?? null), "html", null, true);
        echo ".</p>
                <p class=\"ff-2\">Que vous soyez employé ou que vous fassiez partie de l'équipe de direction, ";
        // line 21
        echo twig_escape_filter($this->env, ($context["companyAbrev"] ?? null), "html", null, true);
        echo "Gest est là pour faciliter votre expérience au quotidien.</p>
                <p class=\"ff-2\">Explorez les fonctionnalités et découvrez comment rendre la gestion des ressources humaines plus efficace et agréable.</p>
                <p class=\"ff-2 text-center\">Bienvenue dans l'univers de ";
        // line 23
        echo twig_escape_filter($this->env, ($context["companyAbrev"] ?? null), "html", null, true);
        echo "Gest !</p>
            </div>
        </div>
    </div>
</div>
<div class=\"separator mt-4\"></div>
";
        // line 29
        $this->loadTemplate("partials/_homeFooter.html.twig", "pages/home.html.twig", 29)->display($context);
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "pages/home.html.twig";
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
        return array (  107 => 29,  98 => 23,  93 => 21,  87 => 20,  83 => 19,  76 => 15,  66 => 8,  62 => 7,  59 => 6,  55 => 5,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "pages/home.html.twig", "/Users/anthonymerguin/Documents/projet/CorpPilot/templates/pages/home.html.twig");
    }
}
