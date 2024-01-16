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

/* pages/user/new.html.twig */
class __TwigTemplate_c6a9af3f4f10a2a0087f9d1befc3d071 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pages/user/new.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pages/user/new.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "pages/user/new.html.twig", 1);
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

        echo "Ajouter un employé | ";
        echo twig_escape_filter($this->env, (isset($context["companyAbrev"]) || array_key_exists("companyAbrev", $context) ? $context["companyAbrev"] : (function () { throw new RuntimeError('Variable "companyAbrev" does not exist.', 3, $this->source); })()), "html", null, true);
        echo "Gest";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 6
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "<div id=\"desktopNav\" style=\"display: none;\">
    ";
        // line 8
        $this->loadTemplate("partials/_desktopNav.html.twig", "pages/user/new.html.twig", 8)->display($context);
        // line 9
        echo "</div>
<div class=\"container\">
    <section class=\"headerStaff\">
        <div class=\"row mt-4 \">
            <div id=\"desktopUser\" class=\"col-4\" style=\"display: none;\">
                ";
        // line 14
        $this->loadTemplate("partials/_currentUser.html.twig", "pages/user/new.html.twig", 14)->display($context);
        // line 15
        echo "            </div>
            <div class=\"col-4\"></div>
            <div class=\"col-4 d-flex justify-content-center align-items-center\">
                <img src=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/svg/blason.svg"), "html", null, true);
        echo "\" width=\"100\" alt=\"Blason de la ville de deyvillers\">
            </div>
            <div id=\"phonelogout\" class=\"col-4 d-flex justify-content-end align-items-center\">
                ";
        // line 21
        $this->loadTemplate("partials/_logout.html.twig", "pages/user/new.html.twig", 21)->display($context);
        // line 22
        echo "            </div>
        </div>
    </section>
    <div id=\"phoneUser\" style=\"display: none;\">
        ";
        // line 26
        $this->loadTemplate("partials/_currentUser.html.twig", "pages/user/new.html.twig", 26)->display($context);
        // line 27
        echo "    </div>
    <div class=\"row mt-4\">
        <div class=\"col-12\">
            <h1 class=\"text-center\">Ajouter un employé</h1>
        </div>
    </div>
    ";
        // line 33
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 33, $this->source); })()), 'form_start');
        echo "
    <div class=\"row mt-4\">
        <div class=\"col-12\">
            <h2 class=\"text-center\">Quel type de compte voulez-vous créer ?</h2>
        </div>
    </div>
    <div class=\"row mt-4 justify-content-center\">
        <div class=\"col-md-6\">
            <select class=\"form-select\" name=\"typeCount\" id=\"typeCount\">
                <option value=\"1\">Employé</option>
                <option value=\"2\">Administrateur</option>
            </select>
        </div>
    </div>
    <div class=\"row mt-4\">
        <div class=\"col-12\">
            <h2 class=\"text-center\">Informations de connexion</h2>
        </div>
    </div>
    ";
        // line 52
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 52, $this->source); })()), "email", [], "any", false, false, false, 52), 'row');
        echo "
    ";
        // line 53
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 53, $this->source); })()), "password", [], "any", false, false, false, 53), 'row');
        echo "
    <div class=\"row mt-4\">
        <div class=\"col-12\">
            <h2 class=\"text-center\">Informations personnelles</h2>
        </div>
    </div>
    ";
        // line 59
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 59, $this->source); })()), "lastname", [], "any", false, false, false, 59), 'row');
        echo "
    ";
        // line 60
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 60, $this->source); })()), "firstname", [], "any", false, false, false, 60), 'row');
        echo "
    ";
        // line 61
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 61, $this->source); })()), "birthday", [], "any", false, false, false, 61), 'row');
        echo "
    ";
        // line 62
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 62, $this->source); })()), "socialSecurity", [], "any", false, false, false, 62), 'row');
        echo "
    ";
        // line 63
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 63, $this->source); })()), "phone", [], "any", false, false, false, 63), 'row');
        echo "
    ";
        // line 64
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 64, $this->source); })()), "adress", [], "any", false, false, false, 64), 'row');
        echo "
    ";
        // line 65
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 65, $this->source); })()), "city", [], "any", false, false, false, 65), 'row');
        echo "
    ";
        // line 66
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 66, $this->source); })()), "zipcode", [], "any", false, false, false, 66), 'row');
        echo "
    ";
        // line 67
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 67, $this->source); })()), "job", [], "any", false, false, false, 67), 'row');
        echo "
    ";
        // line 68
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 68, $this->source); })()), "profilePictureFile", [], "any", false, false, false, 68), 'row');
        echo "

    <div class=\"form-group\">
        ";
        // line 71
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 71, $this->source); })()), "submit", [], "any", false, false, false, 71), 'row', ["attr" => ["class" => "btn btn-primary rounded-0 my-3 mx-auto d-block"]]);
        echo "
    </div>
    ";
        // line 73
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 73, $this->source); })()), 'form_end');
        echo "
</div>

<div id=\"phoneNav\" style=\"display: none;\">
    ";
        // line 77
        $this->loadTemplate("partials/_phoneNav.html.twig", "pages/user/new.html.twig", 77)->display($context);
        // line 78
        echo "</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    var columns; // Déclarer la variable columns en dehors des fonctions

    function updatePage() {
        var windowWidth = window.innerWidth || document.documentElement.clientWidth || document.body.clientWidth;

       if (windowWidth <= 768) {
            document.getElementById('phoneNav').style.display = 'block';
            document.getElementById('desktopNav').style.display = 'none';
            document.getElementById('desktopUser').style.display = 'none';
            document.getElementById('phoneUser').style.display = 'block';
            document.getElementById('phonelogout').classList.remove('d-none');
        } else {
            document.getElementById('phoneNav').style.display = 'none';
            document.getElementById('desktopNav').style.display = 'block';
            document.getElementById('desktopUser').style.display = 'block';
            document.getElementById('phoneUser').style.display = 'none';
            document.getElementById('phonelogout').classList.add('d-none');
            document.getElementById('desktoplogout').style.display = 'block';
        }
    }

    updatePage();

    // Attacher le gestionnaire d'événements pour redimensionner la fenêtre
    window.addEventListener('resize', updatePage);
});



</script>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "pages/user/new.html.twig";
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
        return array (  224 => 78,  222 => 77,  215 => 73,  210 => 71,  204 => 68,  200 => 67,  196 => 66,  192 => 65,  188 => 64,  184 => 63,  180 => 62,  176 => 61,  172 => 60,  168 => 59,  159 => 53,  155 => 52,  133 => 33,  125 => 27,  123 => 26,  117 => 22,  115 => 21,  109 => 18,  104 => 15,  102 => 14,  95 => 9,  93 => 8,  90 => 7,  80 => 6,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Ajouter un employé | {{ companyAbrev }}Gest{% endblock %}


{% block body %}
<div id=\"desktopNav\" style=\"display: none;\">
    {% include \"partials/_desktopNav.html.twig\" %}
</div>
<div class=\"container\">
    <section class=\"headerStaff\">
        <div class=\"row mt-4 \">
            <div id=\"desktopUser\" class=\"col-4\" style=\"display: none;\">
                {% include \"partials/_currentUser.html.twig\" %}
            </div>
            <div class=\"col-4\"></div>
            <div class=\"col-4 d-flex justify-content-center align-items-center\">
                <img src=\"{{ asset('assets/svg/blason.svg') }}\" width=\"100\" alt=\"Blason de la ville de deyvillers\">
            </div>
            <div id=\"phonelogout\" class=\"col-4 d-flex justify-content-end align-items-center\">
                {% include \"partials/_logout.html.twig\" %}
            </div>
        </div>
    </section>
    <div id=\"phoneUser\" style=\"display: none;\">
        {% include \"partials/_currentUser.html.twig\" %}
    </div>
    <div class=\"row mt-4\">
        <div class=\"col-12\">
            <h1 class=\"text-center\">Ajouter un employé</h1>
        </div>
    </div>
    {{ (form_start(form)) }}
    <div class=\"row mt-4\">
        <div class=\"col-12\">
            <h2 class=\"text-center\">Quel type de compte voulez-vous créer ?</h2>
        </div>
    </div>
    <div class=\"row mt-4 justify-content-center\">
        <div class=\"col-md-6\">
            <select class=\"form-select\" name=\"typeCount\" id=\"typeCount\">
                <option value=\"1\">Employé</option>
                <option value=\"2\">Administrateur</option>
            </select>
        </div>
    </div>
    <div class=\"row mt-4\">
        <div class=\"col-12\">
            <h2 class=\"text-center\">Informations de connexion</h2>
        </div>
    </div>
    {{ form_row(form.email) }}
    {{ form_row(form.password) }}
    <div class=\"row mt-4\">
        <div class=\"col-12\">
            <h2 class=\"text-center\">Informations personnelles</h2>
        </div>
    </div>
    {{ form_row(form.lastname) }}
    {{ form_row(form.firstname) }}
    {{ form_row(form.birthday) }}
    {{ form_row(form.socialSecurity) }}
    {{ form_row(form.phone) }}
    {{ form_row(form.adress) }}
    {{ form_row(form.city) }}
    {{ form_row(form.zipcode) }}
    {{ form_row(form.job) }}
    {{ form_row(form.profilePictureFile) }}

    <div class=\"form-group\">
        {{ form_row(form.submit, { 'attr': {'class': 'btn btn-primary rounded-0 my-3 mx-auto d-block'} }) }}
    </div>
    {{ form_end(form) }}
</div>

<div id=\"phoneNav\" style=\"display: none;\">
    {% include \"partials/_phoneNav.html.twig\" %}
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    var columns; // Déclarer la variable columns en dehors des fonctions

    function updatePage() {
        var windowWidth = window.innerWidth || document.documentElement.clientWidth || document.body.clientWidth;

       if (windowWidth <= 768) {
            document.getElementById('phoneNav').style.display = 'block';
            document.getElementById('desktopNav').style.display = 'none';
            document.getElementById('desktopUser').style.display = 'none';
            document.getElementById('phoneUser').style.display = 'block';
            document.getElementById('phonelogout').classList.remove('d-none');
        } else {
            document.getElementById('phoneNav').style.display = 'none';
            document.getElementById('desktopNav').style.display = 'block';
            document.getElementById('desktopUser').style.display = 'block';
            document.getElementById('phoneUser').style.display = 'none';
            document.getElementById('phonelogout').classList.add('d-none');
            document.getElementById('desktoplogout').style.display = 'block';
        }
    }

    updatePage();

    // Attacher le gestionnaire d'événements pour redimensionner la fenêtre
    window.addEventListener('resize', updatePage);
});



</script>
{% endblock %}
", "pages/user/new.html.twig", "/Users/anthonymerguin/Documents/projet/CorpPilot/templates/pages/user/new.html.twig");
    }
}
