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
class __TwigTemplate_d1b2a796866584076ccbeb7ee77559bc extends Template
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

        echo "Modification de congés";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 4
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "<div id=\"desktopNav\" style=\"display: none;\">
    ";
        // line 6
        $this->loadTemplate("partials/_desktopNav.html.twig", "pages/staff_vacation/modify.html.twig", 6)->display($context);
        // line 7
        echo "</div>
<div class=\"container\">
    ";
        // line 9
        $this->loadTemplate("partials/_headerStaff.html.twig", "pages/staff_vacation/modify.html.twig", 9)->display($context);
        // line 10
        echo "    <div id=\"phoneUser\" style=\"display: none;\">
        ";
        // line 11
        $this->loadTemplate("partials/_currentUser.html.twig", "pages/staff_vacation/modify.html.twig", 11)->display($context);
        // line 12
        echo "    </div>
    <div class=\"row mt-4\">
        <div class=\"col-12\">
            <h1 class=\"text-center\">Modification de congés</h1>
        </div>
    </div>
    <div class=\"row\">
    <!-- formulaire -->
        <div class=\"col-md-12 \">
            <section class=\"formVac\" id=\"col1\">
        ";
        // line 22
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 22, $this->source); })()), 'form_start');
        echo "
            <div class=\"form-group\">
                <div class=\"row\">
                    <div class=\"col-12\">
                        <h2 class=\"text-center\">Nouvelle demande</h2>
                    </div>
                    <div class=\"col-10 mx-auto\">
                    ";
        // line 29
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 29, $this->source); })()), "account", [], "any", false, false, false, 29), 'row');
        echo "
                    </div>
                </div>
                <div class=\"row\">
                    <div class=\"col-5 mx-auto\">
                        ";
        // line 34
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 34, $this->source); })()), "startDate", [], "any", false, false, false, 34), 'row');
        echo "
                    </div>
                    <div class=\"col-5 mx-auto\">
                        ";
        // line 37
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 37, $this->source); })()), "endDate", [], "any", false, false, false, 37), 'row');
        echo "
                    </div>
                </div>
                <div class=\"row mt-4\">
                    <div class=\"col-5 mx-auto\">
                        ";
        // line 42
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 42, $this->source); })()), "startHours", [], "any", false, false, false, 42), 'row');
        echo "
                    </div>
                    <div class=\"col-5 mx-auto\">
                        ";
        // line 45
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 45, $this->source); })()), "endHours", [], "any", false, false, false, 45), 'row');
        echo "
                    </div>
                </div>
                <div class=\"row\">
                    <div class=\"col-10 mx-auto\">
                        ";
        // line 50
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 50, $this->source); })()), "submit", [], "any", false, false, false, 50), 'row');
        echo "
                    </div>
                </div>
            </div>
        ";
        // line 54
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 54, $this->source); })()), 'form_end');
        echo "
        </section>  
        </div>
    </div>
</div>
";
        // line 59
        $this->loadTemplate("partials/_phoneNav.html.twig", "pages/staff_vacation/modify.html.twig", 59)->display($context);
        // line 60
        echo "<script>
document.addEventListener('DOMContentLoaded', function() {
    var vacationTypeSelect = document.getElementById('vacationType');
    var formDaysDiv = document.getElementById('formDays');
    var formHoursDiv = document.getElementById('formHours');

    vacationTypeSelect.addEventListener('change', function() {
        var selectedValue = vacationTypeSelect.value;

        formDaysDiv.style.display = 'none';
        formHoursDiv.style.display = 'none';

        if (selectedValue === '1') {
            formDaysDiv.style.display = 'block';
        } else if (selectedValue === '2') {
            formDaysDiv.style.display = 'block';
        } else if (selectedValue === '3') {
            formHoursDiv.classList.remove('d-none');
            formHoursDiv.style.display = 'block';
            document.querySelector('.hours').classList.remove('d-none');
        }
    });
    

    var columns; // Déclarer la variable columns en dehors des fonctions

    function updatePage() {
        var windowWidth = window.innerWidth || document.documentElement.clientWidth || document.body.clientWidth;

        // Décider quel menu afficher en fonction de la largeur de la fenêtre
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


        // Récupérer dans une constante la col1
        const col1 = document.getElementById('col1');
        // Récupérer dans une constante la col2
        const col2 = document.getElementById('col2');

        // Définir quelle colonne à la height la plus grande
        if (col1.offsetHeight > col2.offsetHeight) {
            columns = col1.offsetHeight;
        } else {
            columns = col2.offsetHeight;
        }

        // Appliquer la height la plus grande aux deux colonnes
        col1.style.height = columns + 'px';
        col2.style.height = columns + 'px';


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
        return array (  179 => 60,  177 => 59,  169 => 54,  162 => 50,  154 => 45,  148 => 42,  140 => 37,  134 => 34,  126 => 29,  116 => 22,  104 => 12,  102 => 11,  99 => 10,  97 => 9,  93 => 7,  91 => 6,  88 => 5,  78 => 4,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Modification de congés{% endblock %}
{% block body %}
<div id=\"desktopNav\" style=\"display: none;\">
    {% include \"partials/_desktopNav.html.twig\" %}
</div>
<div class=\"container\">
    {% include \"partials/_headerStaff.html.twig\" %}
    <div id=\"phoneUser\" style=\"display: none;\">
        {% include \"partials/_currentUser.html.twig\" %}
    </div>
    <div class=\"row mt-4\">
        <div class=\"col-12\">
            <h1 class=\"text-center\">Modification de congés</h1>
        </div>
    </div>
    <div class=\"row\">
    <!-- formulaire -->
        <div class=\"col-md-12 \">
            <section class=\"formVac\" id=\"col1\">
        {{ form_start(form) }}
            <div class=\"form-group\">
                <div class=\"row\">
                    <div class=\"col-12\">
                        <h2 class=\"text-center\">Nouvelle demande</h2>
                    </div>
                    <div class=\"col-10 mx-auto\">
                    {{ form_row(form.account) }}
                    </div>
                </div>
                <div class=\"row\">
                    <div class=\"col-5 mx-auto\">
                        {{ form_row(form.startDate) }}
                    </div>
                    <div class=\"col-5 mx-auto\">
                        {{ form_row(form.endDate) }}
                    </div>
                </div>
                <div class=\"row mt-4\">
                    <div class=\"col-5 mx-auto\">
                        {{ form_row(form.startHours) }}
                    </div>
                    <div class=\"col-5 mx-auto\">
                        {{ form_row(form.endHours) }}
                    </div>
                </div>
                <div class=\"row\">
                    <div class=\"col-10 mx-auto\">
                        {{ form_row(form.submit) }}
                    </div>
                </div>
            </div>
        {{ form_end(form) }}
        </section>  
        </div>
    </div>
</div>
{% include \"partials/_phoneNav.html.twig\" %}
<script>
document.addEventListener('DOMContentLoaded', function() {
    var vacationTypeSelect = document.getElementById('vacationType');
    var formDaysDiv = document.getElementById('formDays');
    var formHoursDiv = document.getElementById('formHours');

    vacationTypeSelect.addEventListener('change', function() {
        var selectedValue = vacationTypeSelect.value;

        formDaysDiv.style.display = 'none';
        formHoursDiv.style.display = 'none';

        if (selectedValue === '1') {
            formDaysDiv.style.display = 'block';
        } else if (selectedValue === '2') {
            formDaysDiv.style.display = 'block';
        } else if (selectedValue === '3') {
            formHoursDiv.classList.remove('d-none');
            formHoursDiv.style.display = 'block';
            document.querySelector('.hours').classList.remove('d-none');
        }
    });
    

    var columns; // Déclarer la variable columns en dehors des fonctions

    function updatePage() {
        var windowWidth = window.innerWidth || document.documentElement.clientWidth || document.body.clientWidth;

        // Décider quel menu afficher en fonction de la largeur de la fenêtre
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


        // Récupérer dans une constante la col1
        const col1 = document.getElementById('col1');
        // Récupérer dans une constante la col2
        const col2 = document.getElementById('col2');

        // Définir quelle colonne à la height la plus grande
        if (col1.offsetHeight > col2.offsetHeight) {
            columns = col1.offsetHeight;
        } else {
            columns = col2.offsetHeight;
        }

        // Appliquer la height la plus grande aux deux colonnes
        col1.style.height = columns + 'px';
        col2.style.height = columns + 'px';


    }

    updatePage();

    // Attacher le gestionnaire d'événements pour redimensionner la fenêtre
    window.addEventListener('resize', updatePage);
});



</script>
{% endblock %}
", "pages/staff_vacation/modify.html.twig", "/Users/anthonymerguin/Documents/projet/CorpPilot/templates/pages/staff_vacation/modify.html.twig");
    }
}
