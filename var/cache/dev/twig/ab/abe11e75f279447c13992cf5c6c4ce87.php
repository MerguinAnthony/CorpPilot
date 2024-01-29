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
class __TwigTemplate_472de9ae345ab369d2c13f5d84bfa903 extends Template
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

        echo "Corp Pilot";
        
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
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/Img/logo.png"), "html", null, true);
        echo "\" alt=\"Logo\" width=\"60\" height=\"66\">
</div>
<div class=\"container mt-4 homepage-div\">
    <div class=\"row\">
        <div class=\"col-md-6 d-flex align-items-center\">
            <img src=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/Img/img_hero.jpg"), "html", null, true);
        echo "\" alt=\"Image RH\" class=\"img-fluid left-image\">
        </div>
        <div class=\"col-md-6\">
            <div class=\"jumbotron\">
                <h1 class=\"display-4 ff-4\">Corp Pilot</h1>
                <p class=\"lead\">Corp Pilot est une application web conçue pour simplifier la gestion des ressources humaines au sein de votre entreprise.</p>
                <p class=\"ff-2\">Que vous soyez employé ou que vous fassiez partie de l'équipe de direction, Corp Pilot est là pour faciliter votre expérience au quotidien.</p>
                <p class=\"ff-2\">Explorez les fonctionnalités et découvrez comment rendre la gestion des ressources humaines plus efficace et agréable.</p>
                <p class=\"ff-2 text-center\">Bienvenue dans l'univers de Corp Pilot !</p>
            </div>
        </div>
    </div>
</div>
<div class=\"btn-div\">
    <a class=\"btn btn-primary\"href=\"";
        // line 26
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("company_profile_new");
        echo "\">S'incrire</a>
    <a class=\"btn btn-primary\" href=\"";
        // line 27
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_security");
        echo "\">
        Se connecter
    </a>
</div>
<div class=\"separator mt-4\"></div>
";
        // line 32
        $this->loadTemplate("partials/_homeFooter.html.twig", "pages/home.html.twig", 32)->display($context);
        
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
        return array (  128 => 32,  120 => 27,  116 => 26,  99 => 12,  91 => 7,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Corp Pilot{% endblock %}

{% block body %}
<div class=\"btn-div\">
<img src=\"{{asset('assets/Img/logo.png')}}\" alt=\"Logo\" width=\"60\" height=\"66\">
</div>
<div class=\"container mt-4 homepage-div\">
    <div class=\"row\">
        <div class=\"col-md-6 d-flex align-items-center\">
            <img src=\"{{asset('assets/Img/img_hero.jpg')}}\" alt=\"Image RH\" class=\"img-fluid left-image\">
        </div>
        <div class=\"col-md-6\">
            <div class=\"jumbotron\">
                <h1 class=\"display-4 ff-4\">Corp Pilot</h1>
                <p class=\"lead\">Corp Pilot est une application web conçue pour simplifier la gestion des ressources humaines au sein de votre entreprise.</p>
                <p class=\"ff-2\">Que vous soyez employé ou que vous fassiez partie de l'équipe de direction, Corp Pilot est là pour faciliter votre expérience au quotidien.</p>
                <p class=\"ff-2\">Explorez les fonctionnalités et découvrez comment rendre la gestion des ressources humaines plus efficace et agréable.</p>
                <p class=\"ff-2 text-center\">Bienvenue dans l'univers de Corp Pilot !</p>
            </div>
        </div>
    </div>
</div>
<div class=\"btn-div\">
    <a class=\"btn btn-primary\"href=\"{{path('company_profile_new')}}\">S'incrire</a>
    <a class=\"btn btn-primary\" href=\"{{path('app_security')}}\">
        Se connecter
    </a>
</div>
<div class=\"separator mt-4\"></div>
{% include \"partials/_homeFooter.html.twig\" %}
{% endblock %}
", "pages/home.html.twig", "/Users/anthonymerguin/Documents/projet/CorpPilot/templates/pages/home.html.twig");
    }
}
