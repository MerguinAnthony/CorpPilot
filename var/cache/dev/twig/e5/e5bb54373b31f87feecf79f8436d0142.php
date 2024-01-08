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

/* pages/staff_vacation/modify.html.twig */
class __TwigTemplate_c0f700ff7f41c3e508ceee8d3e4ab3a2 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pages/staff_vacation/modify.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pages/staff_vacation/modify.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "pages/staff_vacation/modify.html.twig", 1);
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

        echo "Hello StaffVacationController!";
        
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
        echo "<div class=\"container\">
    <section class=\"headerStaff\">
        <div class=\"row mt-4\">
            <div class=\"col-4\"></div>
            <div class=\"col-4 text-center\"> <!-- Ajout de la classe text-center pour centrer le blason -->
                <img src=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/svg/blason.svg"), "html", null, true);
        echo "\" width=\"100\" alt=\"Blason de la ville de deyvillers\">
            </div>
            <div class=\"col-4 d-flex justify-content-end\"> <!-- Ajout de la classe text-right pour aligner à droite -->
                <a href=\"";
        // line 14
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
        echo "\">
                    <img src=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/svg/logout.svg"), "html", null, true);
        echo "\" alt=\"Déconnexion\">
                </a>
            </div>
        </div>
    </section>
    ";
        // line 20
        if ((isset($context["currentUser"]) || array_key_exists("currentUser", $context) ? $context["currentUser"] : (function () { throw new RuntimeError('Variable "currentUser" does not exist.', 20, $this->source); })())) {
            // line 21
            echo "        <div class=\"row mt-4\">
            <div class=\"col-6 d-flex justify-content-center\">
                <img src=\"";
            // line 23
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/Img/69944235142__78B07BD1-5790-446E-8015-0A4866FD84B1.png"), "html", null, true);
            echo "\" alt=\"Photo de profil";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["currentUser"]) || array_key_exists("currentUser", $context) ? $context["currentUser"] : (function () { throw new RuntimeError('Variable "currentUser" does not exist.', 23, $this->source); })()), "lastName", [], "any", false, false, false, 23), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["currentUser"]) || array_key_exists("currentUser", $context) ? $context["currentUser"] : (function () { throw new RuntimeError('Variable "currentUser" does not exist.', 23, $this->source); })()), "firstName", [], "any", false, false, false, 23), "html", null, true);
            echo "\" width=\"100\" class=\"rounded-circle\">
            </div>
            <div class=\"col-6\">
                <div class=\"row\">
                    <div class=\"col-12 ff-3 fs-3\">
                        <p class=\"p-0 my-3 \">";
            // line 28
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["currentUser"]) || array_key_exists("currentUser", $context) ? $context["currentUser"] : (function () { throw new RuntimeError('Variable "currentUser" does not exist.', 28, $this->source); })()), "lastName", [], "any", false, false, false, 28), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["currentUser"]) || array_key_exists("currentUser", $context) ? $context["currentUser"] : (function () { throw new RuntimeError('Variable "currentUser" does not exist.', 28, $this->source); })()), "firstName", [], "any", false, false, false, 28), "html", null, true);
            echo "</p>
                    </div>
                </div>
                <div class=\"row\">
                    <div class=\"col-12\">
                        <p>";
            // line 33
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["currentUser"]) || array_key_exists("currentUser", $context) ? $context["currentUser"] : (function () { throw new RuntimeError('Variable "currentUser" does not exist.', 33, $this->source); })()), "job", [], "any", false, false, false, 33), "html", null, true);
            echo "</p>
                    </div>
                </div>
            </div>
        </div>
    ";
        }
        // line 39
        echo "    <div class=\"row mt-4\">
        <div class=\"col-12\">
            <h1 class=\"text-center\">Modification de congés</h1>
        </div>
    </div>
    <section class=\"formVacModif\">
        ";
        // line 45
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 45, $this->source); })()), 'form_start');
        echo "
            <div class=\"row d-flex justify-content-evenly\">
                <div class=\"col-4\">
                    ";
        // line 48
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 48, $this->source); })()), "startDate", [], "any", false, false, false, 48), 'row');
        echo "
                </div>
                <div class=\"col-4\">
                    ";
        // line 51
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 51, $this->source); })()), "endDate", [], "any", false, false, false, 51), 'row');
        echo "
                </div>
            </div>
            <div class=\"d-block text-center\">
                ";
        // line 55
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 55, $this->source); })()), "submit", [], "any", false, false, false, 55), 'row');
        echo "
            </div>
        ";
        // line 57
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 57, $this->source); })()), 'form_end');
        echo "
    </section>
</div>
";
        // line 60
        $this->loadTemplate("partials/_phoneNav.html.twig", "pages/staff_vacation/modify.html.twig", 60)->display($context);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "pages/staff_vacation/modify.html.twig";
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
        return array (  188 => 60,  182 => 57,  177 => 55,  170 => 51,  164 => 48,  158 => 45,  150 => 39,  141 => 33,  131 => 28,  119 => 23,  115 => 21,  113 => 20,  105 => 15,  101 => 14,  95 => 11,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Hello StaffVacationController!{% endblock %}

{% block body %}
<div class=\"container\">
    <section class=\"headerStaff\">
        <div class=\"row mt-4\">
            <div class=\"col-4\"></div>
            <div class=\"col-4 text-center\"> <!-- Ajout de la classe text-center pour centrer le blason -->
                <img src=\"{{ asset('assets/svg/blason.svg') }}\" width=\"100\" alt=\"Blason de la ville de deyvillers\">
            </div>
            <div class=\"col-4 d-flex justify-content-end\"> <!-- Ajout de la classe text-right pour aligner à droite -->
                <a href=\"{{ path('app_logout') }}\">
                    <img src=\"{{ asset('assets/svg/logout.svg') }}\" alt=\"Déconnexion\">
                </a>
            </div>
        </div>
    </section>
    {% if currentUser %}
        <div class=\"row mt-4\">
            <div class=\"col-6 d-flex justify-content-center\">
                <img src=\"{{ asset('assets/Img/69944235142__78B07BD1-5790-446E-8015-0A4866FD84B1.png') }}\" alt=\"Photo de profil{{ currentUser.lastName }} {{ currentUser.firstName }}\" width=\"100\" class=\"rounded-circle\">
            </div>
            <div class=\"col-6\">
                <div class=\"row\">
                    <div class=\"col-12 ff-3 fs-3\">
                        <p class=\"p-0 my-3 \">{{ currentUser.lastName }} {{ currentUser.firstName }}</p>
                    </div>
                </div>
                <div class=\"row\">
                    <div class=\"col-12\">
                        <p>{{ currentUser.job }}</p>
                    </div>
                </div>
            </div>
        </div>
    {% endif %}
    <div class=\"row mt-4\">
        <div class=\"col-12\">
            <h1 class=\"text-center\">Modification de congés</h1>
        </div>
    </div>
    <section class=\"formVacModif\">
        {{ form_start(form) }}
            <div class=\"row d-flex justify-content-evenly\">
                <div class=\"col-4\">
                    {{ form_row(form.startDate) }}
                </div>
                <div class=\"col-4\">
                    {{ form_row(form.endDate) }}
                </div>
            </div>
            <div class=\"d-block text-center\">
                {{ form_row(form.submit) }}
            </div>
        {{ form_end(form) }}
    </section>
</div>
{% include \"partials/_phoneNav.html.twig\" %}
{% endblock %}
", "pages/staff_vacation/modify.html.twig", "/Users/anthonymerguin/Documents/projet/CorpPilot/templates/pages/staff_vacation/modify.html.twig");
    }
}
