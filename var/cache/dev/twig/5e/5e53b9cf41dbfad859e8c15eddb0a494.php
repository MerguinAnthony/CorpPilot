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

        echo "CorpPilot";
        
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
        echo "\" alt=\"Logo\">
<a class=\"btn btn-primary\" href=\"";
        // line 8
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_security");
        echo "\">
    Se connecter
</a>
</div>
<div class=\"container mt-4 homepage-div\">
    <div class=\"row\">
        <div class=\"col-md-6\">
            <img src=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/Img/krakenimages-Y5bvRlcCx8k-unsplash.jpg"), "html", null, true);
        echo "\" alt=\"Image RH\" class=\"img-fluid left-image border-white\">
        </div>
        <div class=\"col-md-6\">
            <div class=\"jumbotron\">
                <h1 class=\"display-4 ff-4\">CorpPilot</h1>
                <p class=\"lead\">CorpPilot est une application web qui permet de gérer les ressources humaines de votre entreprise.</p>
                <hr class=\"my-4\">
                <p class=\"ff-2\">Vous êtes chef d'entreprise ? <br>Vous avez besoin d'une application pour gérer vos ressources humaines ?</p>
                <p class=\"ff-2 text-center\">CorpPilot est fait pour vous !</p>
                <p class=\"lead text-center\">
                    <a class=\"btn btn-secondary btn-lg\" href=\"#inscription\" role=\"button\">S'inscrire</a>
                </p>
            </div>
        </div>
    </div>
</div>
";
        
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
        return array (  105 => 15,  95 => 8,  91 => 7,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}CorpPilot{% endblock %}

{% block body %}
<div class=\"btn-div\">
<img src=\"{{asset('assets/Img/logo.png')}}\" alt=\"Logo\">
<a class=\"btn btn-primary\" href=\"{{path('app_security')}}\">
    Se connecter
</a>
</div>
<div class=\"container mt-4 homepage-div\">
    <div class=\"row\">
        <div class=\"col-md-6\">
            <img src=\"{{asset('assets/Img/krakenimages-Y5bvRlcCx8k-unsplash.jpg')}}\" alt=\"Image RH\" class=\"img-fluid left-image border-white\">
        </div>
        <div class=\"col-md-6\">
            <div class=\"jumbotron\">
                <h1 class=\"display-4 ff-4\">CorpPilot</h1>
                <p class=\"lead\">CorpPilot est une application web qui permet de gérer les ressources humaines de votre entreprise.</p>
                <hr class=\"my-4\">
                <p class=\"ff-2\">Vous êtes chef d'entreprise ? <br>Vous avez besoin d'une application pour gérer vos ressources humaines ?</p>
                <p class=\"ff-2 text-center\">CorpPilot est fait pour vous !</p>
                <p class=\"lead text-center\">
                    <a class=\"btn btn-secondary btn-lg\" href=\"#inscription\" role=\"button\">S'inscrire</a>
                </p>
            </div>
        </div>
    </div>
</div>
{% endblock %}
", "pages/home.html.twig", "/Users/anthonymerguin/Documents/projet/CorpPilot/templates/pages/home.html.twig");
    }
}
