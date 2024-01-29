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
class __TwigTemplate_9f1bdf4d22b2352a60ab8494b462c04f extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partials/_currentUser.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partials/_currentUser.html.twig"));

        // line 1
        echo "
    ";
        // line 2
        if ((isset($context["currentUser"]) || array_key_exists("currentUser", $context) ? $context["currentUser"] : (function () { throw new RuntimeError('Variable "currentUser" does not exist.', 2, $this->source); })())) {
            // line 3
            echo "        <div class=\"row mt-4\">
            <div class=\"col-6 px-0-0 d-flex justify-content-center align-items-center\">
                <img src=\"";
            // line 5
            echo twig_escape_filter($this->env, $this->env->getRuntime('Vich\UploaderBundle\Twig\Extension\UploaderExtensionRuntime')->asset((isset($context["currentUser"]) || array_key_exists("currentUser", $context) ? $context["currentUser"] : (function () { throw new RuntimeError('Variable "currentUser" does not exist.', 5, $this->source); })()), "profilePictureFile"), "html", null, true);
            echo "\" alt=\"Photo de profil ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["currentUser"]) || array_key_exists("currentUser", $context) ? $context["currentUser"] : (function () { throw new RuntimeError('Variable "currentUser" does not exist.', 5, $this->source); })()), "lastName", [], "any", false, false, false, 5), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["currentUser"]) || array_key_exists("currentUser", $context) ? $context["currentUser"] : (function () { throw new RuntimeError('Variable "currentUser" does not exist.', 5, $this->source); })()), "firstName", [], "any", false, false, false, 5), "html", null, true);
            echo "\" width=\"100\" height=\"100\" class=\"rounded-circle\">
            </div>
            <div class=\"col-6\">
                <div class=\"row\">
                    <div class=\"col-12 ff-3 fs-3\">
                        <p class=\"p-0 my-3 \">";
            // line 10
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["currentUser"]) || array_key_exists("currentUser", $context) ? $context["currentUser"] : (function () { throw new RuntimeError('Variable "currentUser" does not exist.', 10, $this->source); })()), "lastName", [], "any", false, false, false, 10), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["currentUser"]) || array_key_exists("currentUser", $context) ? $context["currentUser"] : (function () { throw new RuntimeError('Variable "currentUser" does not exist.', 10, $this->source); })()), "firstName", [], "any", false, false, false, 10), "html", null, true);
            echo "</p>
                    </div>
                </div>
                <div class=\"row\">
                    <div class=\"col-12\">
                        <p>";
            // line 15
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["currentUser"]) || array_key_exists("currentUser", $context) ? $context["currentUser"] : (function () { throw new RuntimeError('Variable "currentUser" does not exist.', 15, $this->source); })()), "job", [], "any", false, false, false, 15), "html", null, true);
            echo "</p>
                    </div>
                </div>
            </div>
        </div>
    ";
        }
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

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
        return array (  74 => 15,  64 => 10,  52 => 5,  48 => 3,  46 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("
    {% if currentUser %}
        <div class=\"row mt-4\">
            <div class=\"col-6 px-0-0 d-flex justify-content-center align-items-center\">
                <img src=\"{{ vich_uploader_asset(currentUser, 'profilePictureFile') }}\" alt=\"Photo de profil {{ currentUser.lastName }} {{ currentUser.firstName }}\" width=\"100\" height=\"100\" class=\"rounded-circle\">
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
", "partials/_currentUser.html.twig", "/Users/anthonymerguin/Documents/projet/CorpPilot/templates/partials/_currentUser.html.twig");
    }
}
