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

/* pages/security/index.html.twig */
class __TwigTemplate_85b17f66a3272a702711ee4cace4794b extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pages/security/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pages/security/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "pages/security/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<div class=\"container\">
    <h1 class=\"my-4\">Espace de connexion</h1>
    ";
        // line 6
        if ((isset($context["bad_credentials"]) || array_key_exists("bad_credentials", $context) ? $context["bad_credentials"] : (function () { throw new RuntimeError('Variable "bad_credentials" does not exist.', 6, $this->source); })())) {
            // line 7
            echo "    <div class=\"alert alert-danger  w-100 mx-auto my-4 rounded-0 text-center\" role=\"alert\">
        ";
            // line 8
            echo twig_escape_filter($this->env, (isset($context["bad_credentials_message"]) || array_key_exists("bad_credentials_message", $context) ? $context["bad_credentials_message"] : (function () { throw new RuntimeError('Variable "bad_credentials_message" does not exist.', 8, $this->source); })()), "html", null, true);
            echo "
    </div>
    ";
        }
        // line 11
        echo "    <form action=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_security");
        echo "\" method=\"post\">
        <div class=\"form-group\">
            <label for=\"username\">identifiant</label>
            <input type=\"email\" class=\"form-control\" id=\"username\" placeholder=\"email\" name=\"_username\" value=\"";
        // line 14
        echo twig_escape_filter($this->env, (isset($context["last_username"]) || array_key_exists("last_username", $context) ? $context["last_username"] : (function () { throw new RuntimeError('Variable "last_username" does not exist.', 14, $this->source); })()), "html", null, true);
        echo "\">
            <small id=\"emailHelp\" class=\"form-text text-muted\">Ne communiquer jamais votre identifiant et votre mot de passe.</small>
        </div>
        <div class=\"form-group\">
            <label for=\"password\">mot de passe</label>
            <input type=\"password\" class=\"form-control\" id=\"password\" placeholder=\"********\" autocomplete=\"off\" name=\"_password\">
        </div>
        <div class=\"form-group d-flex justify-content-center w-25 my-4 mx-auto fs-5\">
            <button type=\"submit\" class=\"btn btn-primary my-4 \">connexion</button>
        </div>
    </form>
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
        return "pages/security/index.html.twig";
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
        return array (  90 => 14,  83 => 11,  77 => 8,  74 => 7,  72 => 6,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}
<div class=\"container\">
    <h1 class=\"my-4\">Espace de connexion</h1>
    {% if bad_credentials %}
    <div class=\"alert alert-danger  w-100 mx-auto my-4 rounded-0 text-center\" role=\"alert\">
        {{ bad_credentials_message }}
    </div>
    {% endif %}
    <form action=\"{{ path('app_security') }}\" method=\"post\">
        <div class=\"form-group\">
            <label for=\"username\">identifiant</label>
            <input type=\"email\" class=\"form-control\" id=\"username\" placeholder=\"email\" name=\"_username\" value=\"{{last_username}}\">
            <small id=\"emailHelp\" class=\"form-text text-muted\">Ne communiquer jamais votre identifiant et votre mot de passe.</small>
        </div>
        <div class=\"form-group\">
            <label for=\"password\">mot de passe</label>
            <input type=\"password\" class=\"form-control\" id=\"password\" placeholder=\"********\" autocomplete=\"off\" name=\"_password\">
        </div>
        <div class=\"form-group d-flex justify-content-center w-25 my-4 mx-auto fs-5\">
            <button type=\"submit\" class=\"btn btn-primary my-4 \">connexion</button>
        </div>
    </form>
</div>

{% endblock %}
", "pages/security/index.html.twig", "/Users/anthonymerguin/Documents/projet/CorpPilot/templates/pages/security/index.html.twig");
    }
}
