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
class __TwigTemplate_7f7dd3f47336100696f66df2d4969be0 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pages/home.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pages/home.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "pages/home.html.twig", 1);
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

        echo twig_escape_filter($this->env, (isset($context["companyAbrev"]) || array_key_exists("companyAbrev", $context) ? $context["companyAbrev"] : (function () { throw new RuntimeError('Variable "companyAbrev" does not exist.', 3, $this->source); })()), "html", null, true);
        echo "Gest";
        
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
        echo twig_escape_filter($this->env, (isset($context["companyName"]) || array_key_exists("companyName", $context) ? $context["companyName"] : (function () { throw new RuntimeError('Variable "companyName" does not exist.', 19, $this->source); })()), "html", null, true);
        echo "</h1>
                <p class=\"lead\">";
        // line 20
        echo twig_escape_filter($this->env, (isset($context["companyAbrev"]) || array_key_exists("companyAbrev", $context) ? $context["companyAbrev"] : (function () { throw new RuntimeError('Variable "companyAbrev" does not exist.', 20, $this->source); })()), "html", null, true);
        echo "Gest est une application web conçue pour simplifier la gestion des ressources humaines au sein de notre merveilleuse ville de ";
        echo twig_escape_filter($this->env, (isset($context["companyCity"]) || array_key_exists("companyCity", $context) ? $context["companyCity"] : (function () { throw new RuntimeError('Variable "companyCity" does not exist.', 20, $this->source); })()), "html", null, true);
        echo ".</p>
                <p class=\"ff-2\">Que vous soyez employé ou que vous fassiez partie de l'équipe de direction, ";
        // line 21
        echo twig_escape_filter($this->env, (isset($context["companyAbrev"]) || array_key_exists("companyAbrev", $context) ? $context["companyAbrev"] : (function () { throw new RuntimeError('Variable "companyAbrev" does not exist.', 21, $this->source); })()), "html", null, true);
        echo "Gest est là pour faciliter votre expérience au quotidien.</p>
                <p class=\"ff-2\">Explorez les fonctionnalités et découvrez comment rendre la gestion des ressources humaines plus efficace et agréable.</p>
                <p class=\"ff-2 text-center\">Bienvenue dans l'univers de ";
        // line 23
        echo twig_escape_filter($this->env, (isset($context["companyAbrev"]) || array_key_exists("companyAbrev", $context) ? $context["companyAbrev"] : (function () { throw new RuntimeError('Variable "companyAbrev" does not exist.', 23, $this->source); })()), "html", null, true);
        echo "Gest !</p>
            </div>
        </div>
    </div>
</div>
<div class=\"separator mt-4\"></div>
";
        // line 29
        $this->loadTemplate("partials/_homeFooter.html.twig", "pages/home.html.twig", 29)->display($context);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

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
        return array (  137 => 29,  128 => 23,  123 => 21,  117 => 20,  113 => 19,  106 => 15,  96 => 8,  92 => 7,  89 => 6,  79 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}{{ companyAbrev }}Gest{% endblock %}

{% block body %}
<div class=\"btn-div\">
<img src=\"{{asset('assets/svg/blason.svg')}}\" alt=\"Logo\" width=\"60\" height=\"66\">
<a class=\"btn btn-primary\" href=\"{{path('app_security')}}\">
    Se connecter
</a>
</div>
<div class=\"container mt-4 homepage-div\">
    <div class=\"row\">
        <div class=\"col-md-6 d-flex align-items-center\">
            <img src=\"{{asset('assets/Img/img_hero.jpg')}}\" alt=\"Image RH\" class=\"img-fluid left-image\">
        </div>
        <div class=\"col-md-6\">
            <div class=\"jumbotron\">
                <h1 class=\"display-4 ff-4\">{{ companyName }}</h1>
                <p class=\"lead\">{{ companyAbrev }}Gest est une application web conçue pour simplifier la gestion des ressources humaines au sein de notre merveilleuse ville de {{ companyCity }}.</p>
                <p class=\"ff-2\">Que vous soyez employé ou que vous fassiez partie de l'équipe de direction, {{ companyAbrev }}Gest est là pour faciliter votre expérience au quotidien.</p>
                <p class=\"ff-2\">Explorez les fonctionnalités et découvrez comment rendre la gestion des ressources humaines plus efficace et agréable.</p>
                <p class=\"ff-2 text-center\">Bienvenue dans l'univers de {{ companyAbrev }}Gest !</p>
            </div>
        </div>
    </div>
</div>
<div class=\"separator mt-4\"></div>
{% include \"partials/_homeFooter.html.twig\" %}
{% endblock %}
", "pages/home.html.twig", "/Users/anthonymerguin/Documents/projet/CorpPilot/templates/pages/home.html.twig");
    }
}
